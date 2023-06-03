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

    Route::post('/students/show', [StudentController::class, 'showList']);

    Route::post('/students/create', [StudentController::class, 'store']);

    Route::get('/students/destroy/{id}', [StudentController::class, 'destroy']);

    Route::get('/students/report', [StudentController::class, 'showReport']);

    Route::post('/logout', [ApiAuthController::class, 'logout']);

});

Route::group(['middleware' => ['cors', 'json.response']], function () {

    Route::post('/login', [ApiAuthController::class, 'login']);

});
