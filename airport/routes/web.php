<?php

use App\Http\Controllers\AirplaneController;
use App\Http\Controllers\ClientController;
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
Route::prefix('/admin')->group(function () {
    Route::controller(AirplaneController::class)->group(function () {
        Route::get('/airplane/index','index')->name('airplane.index');
        Route::get('/airplane/create','create')->name('airplane.create');
        Route::post('/airplane/store','store')->name('airplane.store');
        Route::get('/airplane/{airplane}/update','update')->name('airplane.update');
        Route::put('/airplane/{airplane}/edit','edit')->name('airplane.edit');
    });
    Route::controller(ClientController::class)->group(function () {
        Route::get('/client/index','index')->name('client.index');
        Route::get('/client/create','create')->name('client.create');
        Route::post('/client/store','store')->name('client.store');
        Route::get('/client/{client}/update','update')->name('client.update');
        Route::put('/client/{client}/edit','edit')->name('client.edit');

        Route::get('/ticket/{client}/index','ticket')->name('ticket.index');
        Route::get('/ticket/{client}/create','ticket_create')->name('ticket.create');
        Route::post('/ticket/{client}/store','ticket_store')->name('ticket.store');

    });
});
