<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HelperController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestSendEmailController;
use App\Http\Controllers\WorkerController;
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



Route::get('patient/create', [PatientController::class, 'create']);

Route::get('patient/show', [PatientController::class, 'show']);

Route::get('patient/update', [PatientController::class, 'update']);

Route::get('patient/delete', [PatientController::class, 'delete']);

Route::get('patient/mass', [PatientController::class, 'mass']);


Route::get('worker', [WorkerController::class, 'index']);


Route::get('product', [ProductController::class, 'index']);

Route::get('author', [AuthorController::class, 'index']);


Route::get('test/email', [TestSendEmailController::class, 'index']);


Route::get('result/{marks}', [HelperController::class, 'index']);

Route::get('people', [PeopleController::class, 'index']);
