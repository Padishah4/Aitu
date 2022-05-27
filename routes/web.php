<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name("home");
Route::middleware("auth")->group(function (){

    Route::get('/logout', [\App\Http\Controllers\AuthController::class,'logout'])->name("logout");

});

Route::middleware("guest")->group(function (){

    Route::get('/login', [\App\Http\Controllers\AuthController::class,'showLoginForm'])->name("login");
    Route::post('/login_process', [\App\Http\Controllers\AuthController::class,'login'])->name("login_process");

    Route::get('/registration',[\App\Http\Controllers\AuthController::class,'showRegisterForm']);
    Route::post('/registration_process',[\App\Http\Controllers\AuthController::class,'registration'])->name("registration_process");

});


Route::get('/random', function () {
    return view('random');
});
Route::get('/video', function () {
    return view('video');
});
