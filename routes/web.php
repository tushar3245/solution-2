<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

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


Route::get('/', [CarController::class, 'index']);
Route::post('/cars', [CarController::class, 'store'])->name('cars-store');
Route::get('/cars', [CarController::class, 'showCars'])->name('cars-show');;