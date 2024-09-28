<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::post('/register',[AuthenticationController::class,'register']);
//Route::post('/login',[AuthenticationController::class,'login']);
//
//Route::middleware('auth:api')->group(function() {
//    Route::post('/logout', [AuthenticationController::class, 'logout']);
//});
