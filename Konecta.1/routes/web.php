<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\AuthController;
//use App\Http\Controllers\RegistroController;  
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
    return view('user.login');
})->name('ingresar')->middleware('guest');

Route::resource('client', ClientController::class);
Route::resource('user', RegistroController::class);

Route::get('login', [AuthController::class, 'log']);
Route::post('login', [AuthController::class, 'login'])->name('user.login');
Route::get('logout', [AuthController::class, 'logout'])->name('user.logout');


