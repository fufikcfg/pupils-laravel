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

Route::group(['middleware' => 'admin' ],function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/home/create', function () {
        return view('create');
    })->name('create');

    Route::get('/home/list', function () {
        return view('list');
    })->name('list');

    Route::post('/home/list/post', 'Student\StudentController@showList')->name('studentsList');

    Route::post('/home/create/submit', 'Student\StudentController@store')->name('create-student-submit');

    Route::get('/home/edit', 'Student\StudentController@showByEdit')->name('editByList');

    Route::get('/home/edit/{id}', 'Student\StudentController@destroy')->name('destroy-student');

    Route::get('/home/report', 'Student\StudentController@showReport')->name('report');
});




