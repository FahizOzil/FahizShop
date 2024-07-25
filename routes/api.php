<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

route::post('/register',[AuthController::class,'register'])->name('register');
route::post('/login',[AuthController::class,'login'])->name('login');

route::get("/product/{id}",[ProductController::class,"productView"]);