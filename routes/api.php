<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\StudentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->group(function () {

    Route::post('/students/show', [StudentController::class, 'showList']);

    Route::post('/students/create', [StudentController::class, 'store']);

    Route::get('/students/destroy/{id}', [StudentController::class, 'destroy']);

    Route::get('/students/report', [StudentController::class, 'showReport']);

    Route::post('/logout', 'Auth\ApiAuthController@logout')->name('logout.api');

});

Route::group(['middleware' => ['cors', 'json.response']], function () {

    Route::post('/login', 'Auth\ApiAuthController@login')->name('login.api');

});


//Route::group(['middleware' => 'adminApi'], function () {
//
//    Route::post('/students/show', [StudentController::class, 'showList']);
//
//    Route::post('/students/create', [StudentController::class, 'store']);
//
//    Route::get('/students/destroy/{id}', [StudentController::class, 'destroy']);
//
//    Route::get('/students/report', [StudentController::class, 'showReport']);
//
//});

