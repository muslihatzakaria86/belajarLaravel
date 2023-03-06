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
Route::get('agama', [AgamaController::class, 'index']);
