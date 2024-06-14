<?php

use App\Http\Controllers\BatchController;
use App\Http\Controllers\CourceController;
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
})->name('home');
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
        route::get('/show/{id}', 'show')->name('teacherShow');

        route::get('/create', 'create')->name('createTeacher');
        route::post('/store', 'store')->name('storeTeacher');
        route::get('/edit/{id}', 'edit')->name('editTeacher');
        route::post('/update', 'update')->name('updatedTeache');
        route::get('/delete/{id}', 'destroy')->name('deleteTeacher');




    });
});

Route::prefix('cource')->group(function(){
    Route::controller(CourceController::class)->group(function(){
        Route::get('/cources', 'index')->name('cources');
        Route::get('/create', 'create')->name('createCource');
        Route::post('/store', 'store')->name('storeCource');
        Route::get('/show{id}', 'show')->name('showCource');
        Route::get('/edit/{id}', 'edit')->name('editCource');
        Route::post('/update', 'update')->name('updatedcource');
        Route::get('/delete/{id}', 'delete')->name('deleteCource');
    });

});


Route::prefix('batch')->group(function(){
    Route::controller(BatchController::class)->group(function(){
        Route::get('/batches', 'index')->name('batches');
        Route::get('/create', 'create')->name('createBatch');
        Route::post('/store', 'store')->name('storeBatch');
        Route::get('/show/{id}', 'show')->name('showBatch');
        Route::get('/edit/{id}', 'edit')->name('editBatch');
        Route::post('/updated', 'update')->name('updateBatch');
        Route::get('/delete/{id}', 'delete')->name('deleteBatch');

    });
});