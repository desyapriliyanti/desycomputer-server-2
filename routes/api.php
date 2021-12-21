<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('order',[OrderController::class,'index']);
Route::post('order',[OrderController::class,'create']);
Route::put('/order/{id}',[OrderController::class,'update']);
Route::delete('order/{id}',[OrderController::class,'delete']);

