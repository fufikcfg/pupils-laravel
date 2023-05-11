<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'admin'],function () {

    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/home/create', function () {
        return view('create');
    })->name('create');

    Route::get('/home/list', function () {
        return view('list');
    })->name('list');

    Route::post('/home/list/post', [\App\Http\Controllers\Student\StudentController::class, 'showList']);

    Route::post('/home/create/submit', [\App\Http\Controllers\Student\StudentController::class, 'store'])->name('create-student-submit');

    Route::get('/home/edit/{id}', [\App\Http\Controllers\Student\StudentController::class, 'destroy'])->name('destroy-student');

    Route::get('/home/report', [\App\Http\Controllers\Student\StudentController::class, 'showReport'])->name('report');
});




