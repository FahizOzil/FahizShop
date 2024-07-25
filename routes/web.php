<?php

use App\Http\Controllers\CategoryPageController;
use App\Http\Controllers\ContactEmailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ShopController;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Route;


// authRoute 
route::view('/register' , 'register')->name('register-page');
route::view('/login' , 'login')->name('login-page');


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



// checking route 
route::get('/customers' , function(){
   return User::all();
});
route::get('/products' , function(){
  $images = Product::all('images');
$images = $images->toArray();
echo "<pre>";
print_r($images);
  });

