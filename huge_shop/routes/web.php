<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TagController;
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
Route::get('/login', [UserController::class,'login'])->name('login.show');
Route::post('/login', [AuthController::class,'login'])->name('login');
Route::get('/signin', [UserController::class,'signin'])->name('signin.show');
Route::post('/signin', [AuthController::class,'signin'])->name('signin');
Route::get('/logout', [AuthController::class,'logout'])->name('logout');

Route::prefix('/admin')->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/product',  'index')->name('product.index');
        Route::get('/product/create', 'create')->name('product.create');
        Route::post('/product/store','store')->name('product.store');
        Route::get('/product/{product}/edit', 'edit')->name('product.edit');
        Route::put('/product/{product}/update','update')->name('product.update');
        Route::get('/product/{product}/delete','delete')->name('product.delete');
        Route::delete('/product/{product}/destroy', 'destroy')->name('product.destroy');
    });
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category',  'index')->name('category.index');
        Route::get('/category/create', 'create')->name('category.create');
        Route::post('/category/store','store')->name('category.store');
        Route::get('/category/{category}/edit', 'edit')->name('category.edit');
        Route::put('/category/{category}/update','update')->name('category.update');
        Route::get('/category/{category}/delete','delete')->name('category.delete');
        Route::delete('/category/{category}/destroy', 'destroy')->name('category.destroy');
    });
    Route::controller(TagController::class)->group(function () {
        Route::get('/tag',  'index')->name('tag.index');
        Route::get('/tag/create', 'create')->name('tag.create');
        Route::post('/tag/store','store')->name('tag.store');
        Route::get('/tag/{tag}/edit', 'edit')->name('tag.edit');
        Route::put('/tag/{tag}/update','update')->name('tag.update');
        Route::get('/tag/{tag}/delete','delete')->name('tag.delete');
        Route::delete('/tag/{tag}/destroy', 'destroy')->name('tag.destroy');
    });
});

