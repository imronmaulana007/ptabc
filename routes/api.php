<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::prefix('v1/mobile')->group(function () {
    Route::get('/employees/info', [App\Http\Controllers\API\EmployeesAPIController::class, 'getInfo']);
    Route::resource('employees', App\Http\Controllers\API\EmployeesAPIController::class);
    // Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('login');
    // Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');
    // Route::post('login', [APIController::class, 'prosesLogin']);
    Route::post('login', [APIController::class, 'login']);
});



Route::resource('companies', App\Http\Controllers\API\companyAPIController::class);


Route::resource('departments', App\Http\Controllers\API\DepartmentAPIController::class);
