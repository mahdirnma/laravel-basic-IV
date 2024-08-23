<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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

Route::get('/admin/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/admin/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/admin/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/admin/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/admin/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
Route::get('/admin/product/{product}/delete', [ProductController::class, 'delete'])->name('product.delete');
Route::delete('/admin/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');

