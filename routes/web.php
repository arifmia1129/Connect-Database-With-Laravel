<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('create-customer', [HomeController::class, 'store']);
Route::get('show-customer', [HomeController::class, 'index']);

Route::get('update-customer', [HomeController::class, 'update']);

Route::get('delete-customer/{id}', [HomeController::class, 'delete']);
Route::get('balance', [HomeController::class, 'balance']);


Route::get('/employee', [EmployeeController::class,'index']);
