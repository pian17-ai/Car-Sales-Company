<?php

namespace App\Http\Controllers\InstalmentCar;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarMonthOption;
use Illuminate\Http\Request;

class InstalmentCarController extends Controller
{
    public function index() {
        $cars = Car::all();

        return response()->json([
            'cars' => $cars
        ]);
    }

    public function show($id) {
        $car = Car::with('carmonthoptions')->findOrFail($id);

        $data = [
            'id' => $car->id,
            'car' => $car->name,
            'brand' => $car->brand,
            'type' => $car->type,
            'price' => $car->price
        ];
        
        foreach($car->carmonthoptions as $option) {
            $total = $car->price + ($car->price * $car->interest);
            $monthly = $total / $option->month;

            $data['available_month'][] = [
                'month' => $option->month,
                'description' => "{$option->month} Month",
                // 'interest' => $option->interest,
                // 'monthly_payment' => round($monthly)
            ];
        }

        return response()->json([
            'instalment' => $data
        ]);
    }
}
