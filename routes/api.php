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

//    Route::apiResources([
//        'students' => Api\StudentController::class,
////        'students/{id}' => Api\StudentController::class,
//    ]);
    Route::get('/students', [StudentController::class, 'index']);
    Route::get('/students/{id}', [StudentController::class, 'show']);
    Route::post('/students/create', [StudentController::class, 'store']);
//    Route::get('/students', [StudentController::class, 'index']);
//
});
