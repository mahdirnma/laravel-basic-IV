<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\UserController;
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
Route::get('/', [UserController::class, 'index'])->name('dashboard');
Route::get('/login', [UserController::class, 'login'])->name('login.show');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/signin', [UserController::class, 'signin'])->name('signin.show');
Route::post('/signin', [AuthController::class, 'signin'])->name('signin');
Route::prefix('/admin')->group(function () {
    Route::controller(HospitalController::class)->group(function () {
        Route::get('/hospital/index','index')->name('hospital.index');
        Route::get('/hospital/add','add')->name('hospital.add');
        Route::post('/hospital/create','create')->name('hospital.create');
        Route::get('/hospital/{hospital}/update','update')->name('hospital.update');
        Route::put('/hospital/{hospital}/edit','edit')->name('hospital.edit');
        Route::get('/hospital/{hospital}/delete','delete')->name('hospital.delete');
        Route::delete('/hospital/{hospital}/destroy','destroy')->name('hospital.destroy');
    });
    Route::controller(PatientController::class)->group(function () {
        Route::get('/patient/index','index')->name('patient.index');
        Route::get('/patient/add','add')->name('patient.add');
        Route::post('/patient/create','create')->name('patient.create');
    });
});


