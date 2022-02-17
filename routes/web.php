<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\PaymentsController;


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

Route::get('/', [HomeController::class, 'index'])->name('home.index');  //to automatically handle change in routes
Route::get('/notices', [HomeController::class, 'notices'])->name('home.notices');
Route::post('/payment', [HomeController::class, 'payment'])->name('home.payment');
Route::get('/payment', [HomeController::class, 'payment'])->name('home.payment');
Route::get('/pettcash', [HomeController::class, 'pettcash'])->name('home.pettcash');
Route::get('/transport', [HomeController::class, 'transport'])->name('home.transport');
Route::get('/fuel', [HomeController::class, 'fuel'])->name('home.fuel');

Route::resource('payments',PaymentsController::class);