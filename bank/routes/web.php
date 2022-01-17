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

Route::group(['middleware'=>['guest']],function(){
    Route::get('register',[App\Http\Controllers\RegisterController::class, 'index'])->name('register');
    Route::get('/login',[App\Http\Controllers\loginController::class, 'index'])->name('login');
    Route::post('authenticate',[App\Http\Controllers\loginController::class, 'authenticate'])->name('authenticate');
    Route::post('register',[App\Http\Controllers\RegisterController::class, 'add'])->name('add');
});
Route::group(['middleware'=>['auth']],function(){ 
    Route::get('/',[App\Http\Controllers\HomeController::class, 'index']);
    Route::get('/store',[App\Http\Controllers\StoreController::class, 'index']);
    Route::get('/tarik',[App\Http\Controllers\TarikController::class, 'index']);
    Route::post('logout',[App\Http\Controllers\LogoutController::class, 'logout'])->name('logout');
    Route::post('store_money',[App\Http\Controllers\StoreController::class, 'store_money'])->name('store_money');
    Route::post('tarik_uang',[App\Http\Controllers\TarikController::class, 'tarik_uang'])->name('tarik_uang');
 });
