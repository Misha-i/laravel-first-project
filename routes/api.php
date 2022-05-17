<?php

use App\Http\Resources\CarResource;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CarController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// GET

/*
 * Отримання списку постів із таблиці cars
*/

Route::get('/car', [CarController::class, "showCar"]);

Route::get('/car/{id}', [CarController::class, "showOneCar"]);
Route::post('/car/create', [CarController::class, "createCar"]);

Route::put('/car/{id}', [CarController::class, "putCar"]);

Route::patch('/car/{id}', [CarController::class, "patchCar"]);

Route::delete('/car/{id}', [CarController::class, "deleteCar"]);
