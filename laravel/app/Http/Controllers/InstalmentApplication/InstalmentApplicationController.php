<?php

namespace App\Http\Controllers\InstalmentApplication;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\InstalmentApplication;
use Illuminate\Http\Request;

class InstalmentApplicationController extends Controller
{
    public function show(Request $request)
    {
        $cars = Car::with([
            'instalmentapplication.carMonthOption'
        ])->get();

        $result = [];

        foreach ($cars as $car) {
            $applications = [];

            foreach ($car->instalmentapplication as $app){
                if (!$app->carmonthoption) continue;

                $applications[] = [
                    'month' => (string) $app->carmonthoption->month,
                    'nominal' => (string) $app->monthly_payment,
                    'apply_status' => $app->status,
                    'notes' => $app->admin_notes ?? ''
                ];
            }

            $result[] = [
                'id' => $car->id,
                'car' => $car->name,
                'brand' => $car->brand,
                'price' => (string) $car->price,
                'applications' => $applications
            ];
        }

        return response()->json([
            'instalments' => $result
        ]);
    }
}
