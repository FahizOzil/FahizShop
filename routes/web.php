<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\CategoryPageController;
use App\Http\Controllers\ContactEmailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Route;


// authRoute 
route::view('/register' , 'register')->name('register-page');
route::view('/login' , 'login')->name('login-page');
route::post('/login',[AuthController::class,'login'])->name('login');
route::get('/logout',[AuthController::class,'logout'])->name('logout');


//front end routes
route::get('/',[HomePageController::class , 'index'])->name('home-page');
route::get('/shop',[ShopController::class,'index'])->name('shop-page');
route::view('/contact','contact')->name('contact-page');
route::post('/mail',[ContactEmailController::class,'sendEmail'])->name('mail');
route::get('/product/{id}',[ProductController::class,'productView'])->name('product-detail');


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
  $product = new Product();
  $product->title = fake()->text(100);
  $product->description = fake()->text(150);
  $product->price = fake()->numberBetween(120,1000);
  $product->images = [
      "images" => ['p7.jpg','p8.jpg'],
  ];
  $product->colors = [
    //   "colors" => ["black","white","green"],
  ];
  $product->size = [
//    "size" => ["small","medium",'large'],
   "size" => ["25ml","45ml",'90ml'],
  ];
  $product->category_id = fake()->numberBetween(1,10);
  $product->subCategory_id = fake()->numberBetween(1,100);
  $product->user_id = 1;
  $product->stock = fake()->numberBetween(1,18);
  $product->review_count = fake()->numberBetween(1,10);
  $product->rating_sum = 4;
  $product->views_count = fake()->numberBetween(3,32);
  $product->created_at = now();
  $product->updated_at = now();
  $product->discount = fake()->numberBetween(1,25);
//   $product->brand = 'Nike';
//   $product->warranty = '1 Years';
  $product->save();

  echo "product is saved";



  });

