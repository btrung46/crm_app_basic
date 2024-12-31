<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
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
})->name('home');
Route::get('/dashboard', [DashboardController::class ,'index'])->name('dashboard')->middleware('auth');


Route::group(['middleware'=> 'guest'], function () {
    Route::get('/login', [authController::class,'login'])->name('login');
    Route::post('/login', [authController::class,'authetication']);
    Route::get('/register', [authController::class,'register'])->name('register');
    Route::post('/register', [authController::class,'store']);
});
Route::post('/logout', [authController::class,'logout'])->name('logout')->middleware('auth');

Route::get('/create_client',[ClientController::class,'index'])->name('client.index')->middleware('auth');
Route::post('/create_client',[ClientController::class,'create'])->name('client.create')->middleware('auth');
Route::delete('/{client}',[ClientController::class,'delete'])->name('client.destroy')->middleware('auth');
Route::get('/{client}/edit',[ClientController::class,'edit'])->name('client.edit')->middleware('auth');
Route::post('/{client}',[ClientController::class,'update'])->name('client.update')->middleware('auth');


Route::get('/profile/{user}',[ProfileController::class,'index'])->name('user.index')->middleware('auth');
