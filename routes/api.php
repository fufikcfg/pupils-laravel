<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Auth\ApiAuthController;

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

    Route::get('/students/{id}', [StudentController::class, 'show']);

    Route::post('/students/show', [StudentController::class, 'showList']);

    Route::post('/students/create', [StudentController::class, 'store'])->middleware('ApiUserRole');

    Route::post('/students/update/{id}', [StudentController::class, 'update'])->middleware('ApiUserRole');

    Route::get('/students/destroy/{id}', [StudentController::class, 'destroy'])->middleware('ApiUserRole');

    Route::get('/students/report', [StudentController::class, 'showReport']);

    Route::post('/logout', [ApiAuthController::class, 'logout']);

});

Route::group(['middleware' => ['cors', 'json.response']], function () {

    Route::post('/login', [ApiAuthController::class, 'login']);

});
