<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerjalananController;
use App\Http\Controllers\RegisterController;

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


Route::get('/', [LoginController::class, 'index']);
Route::post('/postLogin', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/simpanRegister', [RegisterController::class, 'simpanRegister']);


Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/cari', [DashboardController::class, 'cariPerjalanan']);
Route::get('/urutkan', [DashboardController::class, 'urutkanPerjalanan']);

Route::get('/inputPerjalanan', [PerjalananController::class, 'index']);
Route::post('/simpanPerjalanan', [PerjalananController::class, 'simpanPerjalanan']);

Route::post('/logout', [LoginController::class, 'logout']);
