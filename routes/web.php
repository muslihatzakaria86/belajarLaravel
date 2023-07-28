<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\AgamaController;

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

Route::get('/', [BerandaController::class, 'index']);
Route::get('dashboard', [BerandaController::class, 'index']);
Route::get('provinsi', [ProvinsiController::class, 'index']);
Route::get('provinsi', [ProvinsiController::class, 'index']);

// Routes Data Agama
Route::get('agama', [AgamaController::class, 'index']);
Route::post('/agama/listdata', [AgamaController::class, 'listData'])->name('agama.listData');
Route::get('/agama/form/{id}', [AgamaController::class, 'form']);
Route::post('/agama', [AgamaController::class, 'store']);
Route::get('/agama/form', [AgamaController::class, 'form']);
Route::post('/agama/delete/{id}', [AgamaController::class, 'destroy']);
