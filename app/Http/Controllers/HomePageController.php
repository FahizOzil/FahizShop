<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    function index(){
        $all_product = Product::orderBy("id")->lazy(4);
        $top_ranking = Product::orderBy('views_count' ,"DESC" )->take(6)->get();
        return view('index',[
            'all_product' => $all_product,
            'top_ranking' => $top_ranking,
        ]);
    }
}
