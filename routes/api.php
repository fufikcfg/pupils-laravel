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


Route::group(['middleware' => 'adminApi'], function () {

    Route::post('/students/show', [StudentController::class, 'showList']);

    Route::post('/students/create', [StudentController::class, 'store']);

    Route::get('/students/destroy/{id}', [StudentController::class, 'destroy']);

    Route::get('/students/report', [StudentController::class, 'showReport']);

});
