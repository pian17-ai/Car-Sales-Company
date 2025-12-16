<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Society;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SocietyAuthController extends Controller
{
    public function register (Request $request) {
        $validated = $request->validate([
            'id_card_number' => 'required|unique:societies,id_card_number',
            'name' => 'required|string',
            'born_date' => 'required|date',
            'gender' => 'required|in:male,female',
            'address' => 'required|string',
            'regional_id' => 'required|exists:regionals,id',
            'password' => 'required|min:6'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $society = Society::create($validated);

        return response()->json([
            'message' => 'register success',
            'data' => $society
        ], 201);
    }

    public function login (Request $request) {
        $request->validate([
            'id_card_number' => 'required',
            'password' => 'required'
        ]);

        $society = Society::where('id_card_number', $request->id_card_number)->first();

        if (!$society || !Hash::check($request->password, $society->password)) {
            return response()->json([
                'message' => 'ID Card Number or Password incorrect'
            ], 401);
        }

        $token = $society->createToken('society_token')->plainTextToken;

        return response()->json([
            'name' => $society->name,
            'born_date' => $society->born_date,
            'gender' => $society->gender,
            'adderss' => $society->address,
            'token' => $token,
            'regional' => [
                'id' => $society->regional->id,
                'province' => $society->regional->province,
                'district' => $society->regional->district
            ]
        ], 200);
    }

    public function logout(Request $request) {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logout Success'
        ], 200);
    }
}
