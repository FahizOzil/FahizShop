<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function productView(string $id){
      $product = Product::findOrFail($id);
      if ($product) {
        return response()->json([
            'product' => $product,
           'message' => 'Product retrieved successfully'
        ],200);
      }else{
        return response()->json([
           'message' => 'Product not found'
        ],404);
      }
    }
}
