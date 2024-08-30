<?php

use App\Http\Controllers\AirplaneController;
use App\Models\Airplane;
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

Route::get('/', [AirplaneController::class,'dashboard'])->name('dashboard');
Route::get('/admin/airplane/index', [AirplaneController::class,'index'])->name('airplane.index');
Route::get('/admin/airplane/create', [AirplaneController::class,'create'])->name('airplane.create');
Route::post('/admin/airplane/store', [AirplaneController::class,'store'])->name('airplane.store');
Route::get('/admin/airplane/{airplane}/update', [AirplaneController::class,'update'])->name('airplane.update');
Route::put('/admin/airplane/{airplane}/edit', [AirplaneController::class,'edit'])->name('airplane.edit');
