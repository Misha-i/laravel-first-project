<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Requests\CarRequest;
use Illuminate\Support\Facades\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*Route::get('/index', [HomeController::class,'index']);
Route::post('/', [HomeController::class,'index']);*/

/*Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::get('/about', function(){
    return view('about');
})->name('about');


Route::get('/contact/all', 'App\Http\Controllers\ContactController@allData')->name('contact-data');
Route::post('/contact/submit', 'App\Http\Controllers\ContactController@allData')->name('contact-form');
Route::get('/contact/all/{id}', 'App\Http\Controllers\ContactController@showOneMessage')->name('contact-data-one');*/

/*Route::get('/car', function(){
    return view('newProject.index');
})->name('table');*/


Route::get('/table', [CarController::class, 'index'])->name('table');
Route::get('/edit', [CarController::class, 'edit'])->name('edit');
Route::get('/delete', [CarController::class, 'destroy'])->name('delete');
Route::get('/create', [CarController::class, 'create'])->name('create');
Route::post('/car/submit', [CarController::class, 'submit'])->name('car-data');
// Route::get('/table/all', [CarController::class, 'allData'])->name('car-allData');
Route::get('/table/all/{id}', [CarController::class, 'showOneCar'])->name('car-all');
Route::get('/table/all/{id}/update', [CarController::class, 'updateMessage'])->name('car-update');
Route::post('/table/all/{id}/update', [CarController::class, 'updateMessageSubmit'])->name('car-update-submit');
Route::get('/table/all/{id}/delete', [CarController::class, 'deleteMessageSubmit'])->name('car-delete-submit');
Route::get('/table/all/{id}/update1', [CarController::class, 'showUserId'])->name('add-contact');





Route::get('/home1', [ContactController::class, 'home'])->name('home1');
Route::get('/table1', [ContactController::class, 'index'])->name('table1');
Route::get('/contact1', [ContactController::class, 'create'])->name('contact1');
Route::get('/about1', [ContactController::class, 'about'])->name('about1');
Route::post('/contact1/submit', [ContactController::class, 'submit']);
Route::get('/table1/{id}', [ContactController::class, 'showOne'])->name('showOne');
Route::get('/table1/{id}/update', [ContactController::class, 'update'])->name('update');
Route::post('/table1/{id}/update', [ContactController::class, 'update_submit'])->name('update_submit');
Route::get('/table1/{id}/delete', [ContactController::class, 'delete'])->name('delete');

Route::get('my_file', function (){
    return view('myfile');
});
