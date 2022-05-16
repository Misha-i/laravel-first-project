<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function showCar(){

        $car = Car::all();
        return response()->json($car);
    }

    public function showOneCar($id){

        $car = Car::find($id);

        if (!$car) {
            return response()->json([
                "status" => false,
                "message" => "Post not Found"
        ])->setStatusCode(404, 'Car not Found');
        }
        return response()->json($car);

    }
}
