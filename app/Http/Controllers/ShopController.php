<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use paths;

class ShopController extends Controller
{
  
    function index(){
        return view('shop');
    }
}
