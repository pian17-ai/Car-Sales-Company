<?php

namespace App\Http\Controllers\Applying;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarMonthOption;
use App\Models\InstalmentApplication;
use App\Models\Validation;
use Illuminate\Http\Request;

class ApplyingController extends Controller
{
    public function store(Request $request) {
        $society = $request->user();

        $validation = Validation::where('society_id', $society->id)->first();

        if (!$validation) {
            return response()->json([
                'messages' => 'Validation Data Not Found'
            ], 401);
        }

        if ($validation->status !== 'accepted') {
            return response()->json([
                'messages' => 'Your data validator must be accepted by validator before'
            ]);
        }

        $request->validate([
            'instalment_id' => 'required',
            'months' => 'required|integer',
            'admin_notes' => 'required'
        ]);

        $car = Car::findOrfail($request->instalment_id);
        $option = CarMonthOption::findOrFail($request->months);

        // $total = $car->price + ($car->price * $option->interest);

        // $monthly = $total / $option->momnth;

        InstalmentApplication::create([
            'society_id' => $society->id,
            'validator_id' => $validation->id,
            'car_id' => $car->id,
            'car_month_option_id' => $option->id,
            'status' => 'pending',
            'admin_notes' => $request->admin_notes
        ]);

        return response()->json([
            'messages' => 'Applying For Instalment Successful'
        ]);
    }
}
