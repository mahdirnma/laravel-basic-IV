<?php

use App\Http\Controllers\AuthController;
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

Route::get('/admin/product/index', [ProductController::class, 'index'])->name('product.index');
Route::get('/admin/product/add', [ProductController::class, 'add'])->name('product.add');
Route::post('/admin/product/create', [ProductController::class, 'create'])->name('product.create');
Route::get('/admin/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
Route::put('/admin/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::get('/admin/product/{product}/delete', [ProductController::class, 'delete'])->name('product.delete');
Route::delete('/admin/product/{product}/remove', [ProductController::class, 'remove'])->name('product.remove');


