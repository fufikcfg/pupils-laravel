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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/create', function () {
    return view('create');
})->name('create');

Route::get('/list', function () {
    return view('list');
})->name('list');

Route::post('/list/post', 'Student\StudentController@showList')->name('studentsList');

Route::post('/create/submit', 'Student\StudentController@store')->name('create-student-submit');

Route::get('/edit', 'Student\StudentController@showByEdit')->name('editByList');

Route::get('/edit/{id}', 'Student\StudentController@destroy')->name('destroy-student');

Route::get('/report', 'Student\StudentController@showReport')->name('report');

//Route::get('ads/{form}', 'Ads\StudentController@index');


