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

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/login',[App\Http\Controllers\loginController::class, 'index'])->name('login');
Route::post('authenticate',[App\Http\Controllers\loginController::class, 'authenticate'])->name('authenticate')->middleware('guest');
Route::post('logout',[App\Http\Controllers\LogoutController::class, 'logout'])->name('logout');
