<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use Faker\Core\Number;
use Illuminate\Http\Request;
use paths;

class ShopController extends Controller
{
  
    function index(){
        $all_products = Product::with("category")->paginate(6);
        $latest_product = Product::latest()->take(3)->get();
        $count_products = Product::count();
        $all_category = Categorie::all();

    //  get offset 
       isset($_GET["page"]) ? $offset = ($_GET["page"] - 1) * 6  :  $offset = 0; 
       
        return view('shop',[
            "all_products" => $all_products,
            "total" => $count_products,
            "offset" => $offset,
            "all_category" => $all_category,
            "latest_product" => $latest_product
            
        ]);
    }
}
