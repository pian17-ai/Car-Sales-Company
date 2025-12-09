<?php

namespace App\Http\Controllers\RequestDataValidation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Validation;

class ValidationController extends Controller
{
    public function store(Request $request) {
        $society = $request->user();

        if (!$society) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }

        $exists = Validation::where('society_id', $society->id)->exists();

        if ($exists) {
            return response()->json([
                'message' => 'You already requested validation'
            ], 400);
        }

        $validated = $request->validate([
            'job_category_id' => 'required|exists:job_categories,id',
            'work_experience' => 'required',
            'job_position' => 'required',
            'reason_accepted' => 'required'
        ]);

        Validation::create([
            'society_id' => $society->id,
            'job_category_id' => $validated['job_category_id'],
            'work_experience' => $validated['work_experience'],
            'job_positon' => $validated['job_position'],
            'reason_accepted' => $validated['reason_accepted'],
            'status' => 'pending'
        ]);

        return response()->json([
            'message' => 'Validation request sent successfully'
        ], 200);
    }
}
