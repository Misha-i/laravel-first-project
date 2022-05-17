<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{
    public function index()
    {
        $car = Car::all();
        return response()->json($car);

    }

    public function show($id)
    {

        $car = Car::find($id);

        if (!$car) {
            return response()->json([
                "status" => false,
                "message" => "Car not Found"
            ])->setStatusCode(404, 'Car not Found');
        }
        return response()->json($car);

    }

    public function store(Request $request)
    {
        $request_data = $request->only(['car', 'contact_id']);

        $validator = Validator::make($request_data, [
            "car" => ['required', 'string'],
            "contact_id" => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json([
                "status" => false,
                "errors" => $validator->messages()
            ])->setStatusCode(422);
        }

        $car = Car::create([
            "car" => $request->car,
            "contact_id" => $request->contact_id,
        ]);

        return response()->json([
            "status" => true,
            "car" => $car
        ])->setStatusCode(201, "Car is created");
    }

    public function update($id, Request $request)
    {
        $request_data = $request->only(['car', 'contact_id']);

        $validator = Validator::make($request_data, [
            "car" => ['required', 'string'],
            "contact_id" => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json([
                "status" => false,
                "errors" => $validator->messages()
            ])->setStatusCode(422);
        }

        $car = Car::find($id);

        if (!$car) {
            return response()->json([
                "status" => false,
                "message" => "Car not found"
            ])->setStatusCode(404, "Car not Found");
        }
        $car->car = $request_data["car"];
        $car->contact_id = $request_data["contact_id"];
        $car->save();

        return response()->json([
            "status" => true,
            "Message" => "Car is updated"
        ])->setStatusCode(200, "Car is updated");
    }

    public function destroy($id)
    {
        $car = Car::find($id);

        if (!$car) {
            return response()->json([
                "status" => false,
                "message" => "Car not found"
            ])->setStatusCode(404, "Car not found");
        }

        $car->delete();

        return response()->json([
            "status" => true,
            "message" => "Car is delete"
        ])->setStatusCode(200, "Car is delete");

    }
}
