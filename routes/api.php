<?php

use App\Http\Controllers\TestThienController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/test-thien/createData',[TestThienController::class,'store']);
Route::put('/test-thien/updateData',[TestThienController::class,'edit']);
Route::delete('/test-thien/deleteData/{id}',[TestThienController::class,'destroy']);
Route::get('/test-thien/getData',[TestThienController::class,'getData']);