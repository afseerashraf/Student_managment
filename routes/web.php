<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\teacherController;

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

Route::get('/', function () {
    return view('layout');
});
Route::prefix('students')->group(function(){
    Route::controller(StudentController::class)->group(function(){
        route::get('/students', 'index')->name('students');
        route::get('/show/{id}', 'show')->name('show');
        route::get('/create', 'create')->name('create');
        route::post('/store', 'store')->name('store');
        route::get('/edit/{id}', 'edit')->name('edit');
        route::post('/update', 'update')->name('updated');
        route::get('/delete/{id}', 'destroy')->name('delete');
    });
});

Route::prefix('teachers')->group(function(){
    Route::controller(TeacherController::class)->group(function(){
        route::get('/teachers', 'index')->name('teachers');
        route::get('/show/{id}', 'show')->name('show');

        route::get('/create', 'create')->name('create');
        route::post('/store', 'store')->name('store');
        route::get('/edit/{id}', 'edit')->name('edit');
        route::post('/update', 'update')->name('updated');
        route::get('/delete/{id}', 'destroy')->name('delete');




    });
});