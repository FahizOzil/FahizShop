<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Number;

class ProductController extends Controller
{
  function productView(string $id){
    $product = Product::findOrFail($id);
    $related_product = Product::where('category_id' , $product->id)->get();

    // get discount 
 if ($product->discount < 10) {
  $discount = "0.0$product->discount";
 }else{
  $discount = "0.$product->discount";
 }
    $discount_amount = $product->price * $discount;
    $discount_price = $product->price - $discount_amount;
    
    return view("ViewProduct",[
      "product" => $product,
      "related_product" => $related_product,
      "discount" => $discount_price,
    ]);
 }


}
