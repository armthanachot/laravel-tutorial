<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\member;
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
// customer
Route::get('/customer',[CustomerController::class,'findAll']);
Route::post('/customer',[CustomerController::class,'create']);
Route::get('/customer/{id}',[CustomerController::class,'findById']);
Route::put('/customer/{id}',[CustomerController::class,'update']);
Route::delete('/customer',[CustomerController::class,'destroy']);

// member
Route::post('/member',[member::class,'create']);
Route::post('/member/upload',[member::class,'uploadFile']);