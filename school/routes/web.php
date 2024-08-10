<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\GradeSheetController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
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

Route::get('/',[UserController::class,'index'])->name('index');
Route::get('/login',[UserController::class,'login'])->name('login.show');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/signin',[UserController::class,'signin'])->name('signin.show');
Route::post('/signin',[AuthController::class,'signin'])->name('signin');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

Route::prefix('/admin')->group(function(){
    Route::controller(SchoolController::class)->group(function(){
        Route::get('/school/index','index')->name('school.index');
        Route::get('/school/add','add')->name('school.add');
        Route::post('/school/create','create')->name('school.create');
        Route::get('/school/{school}/update','update')->name('school.update');
        Route::put('/school/{school}/edit','edit')->name('school.edit');
        Route::get('/school/{school}/delete','delete')->name('school.delete');
        Route::delete('/school/{school}/destroy','destroy')->name('school.destroy');
    });
    Route::controller(StudentController::class)->group(function(){
        Route::get('/student/index','index')->name('student.index');
        Route::get('/student/add','add')->name('student.add');
        Route::post('/student/create','create')->name('student.create');
        Route::get('/student/{student}/update','update')->name('student.update');
        Route::put('/student/{student}/edit','edit')->name('student.edit');
        Route::get('/student/{student}/delete','delete')->name('student.delete');
        Route::delete('/student/{student}/destroy','destroy')->name('student.destroy');
    });
    Route::controller(GradeSheetController::class)->group(function(){
        Route::get('/gradeSheet/{student}/index','index')->name('gradeSheet.index');
        Route::get('/gradeSheet/{student}/add','add')->name('gradeSheet.add');
        Route::post('/gradeSheet/{student}/create','create')->name('gradeSheet.create');
    });
    Route::controller(FileController::class)->group(function(){
        Route::get('/file/{student}/index','index')->name('file.index');
    });
});

