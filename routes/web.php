<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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
Route::group(['middleware' => 'guest'], function () {
    Route::get("/",[AuthController::class,"index"])->name("login");
    Route::get("register",[AuthController::class,"register"])->name("register");
    Route::post("register",[AuthController::class,"registerProcess"])->name("register.process");
    Route::post("login",[AuthController::class,"loginProcess"])->name("login.process");
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('logout',[AuthController::class,"logout"])->name("logout");
    Route::get("dashboard",[DashboardController::class,"index"])->name("dashboard");
});