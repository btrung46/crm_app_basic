<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\ClientController;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/dashboard', [DashboardController::class ,'index'])->name('dashboard');


Route::group(['middleware'=> 'guest'], function () {
    Route::get('/login', [authController::class,'login'])->name('login');
    Route::post('/login', [authController::class,'authetication']);
    Route::get('/register', [authController::class,'register'])->name('register');
    Route::post('/register', [authController::class,'store']);
});
Route::post('/logout', [authController::class,'logout'])->name('logout');

Route::get('/create_client',[ClientController::class,'index'])->name('client.index');
Route::post('/create_client',[ClientController::class,'create'])->name('client.create');