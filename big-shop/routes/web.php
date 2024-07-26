<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Product;
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
Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/login', [UserController::class, 'login'])->name('login.show');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/signin', [UserController::class, 'signin'])->name('signin.show');
Route::post('/signin', [AuthController::class, 'signin'])->name('signin');

Route::prefix('/admin')->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/product/index','index')->name('product.index');
        Route::get('/product/add','add')->name('product.add');
        Route::post('/product/create','create')->name('product.create');
        Route::get('/product/{product}/update','update')->name('product.update');
        Route::put('/product/{product}/edit','edit')->name('product.edit');
        Route::get('/product/{product}/delete','delete')->name('product.delete');
        Route::delete('/product/{product}/remove','remove')->name('product.remove');
    });
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category/index','index')->name('category.index');
        Route::get('/category/add','add')->name('category.add');
        Route::post('/category/create','create')->name('category.create');
        Route::get('/category/{category}/update','update')->name('category.update');
        Route::put('/category/{category}/edit','edit')->name('category.edit');
        Route::get('/category/{category}/delete','delete')->name('category.delete');
        Route::delete('/category/{category}/destroy','destroy')->name('category.destroy');
    });
});


