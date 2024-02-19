<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;


Route::get('/',[CustomerController::class,'index']);
Route::get('/create',[CustomerController::class,'create']);
Route::post('/create',[CustomerController::class,'store']);
Route::get('/customer/{id}/edit',[CustomerController::class,'edit']);
Route::put('/customer/{id}/edit',[CustomerController::class,'update']);
Route::get('/customer/{id}/delete',[CustomerController::class,'delete']);




