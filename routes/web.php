<?php

use App\Http\Controllers\CategoryPageController;
use App\Http\Controllers\ContactEmailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

//front end routes
route::get('/',[HomePageController::class , 'index'])->name('home-page');
route::get('/shop',[ShopController::class,'index'])->name('shop-page');
route::view('/contact','contact')->name('contact-page');
route::post('/mail',[ContactEmailController::class,'sendEmail'])->name('mail');


// backend routes 
route::prefix('admin')->group(function(){
   route::get('/dashboard',[DashboardController::class ,'index'])->name('dashboard');
   route::resource('category',CategoryPageController::class);
   
});

