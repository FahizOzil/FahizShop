<?php

use Faker\Core\Number;
use Illuminate\Support\Number as SupportNumber;

function GetDiscount($price , $discount){
   if ($discount < 10) {
  $discount_price = $price * "0.0$discount";
  return SupportNumber::currency($price - $discount_price , "PKR");
   }else{
   $discount_price = $price * "0.$discount";
   return SupportNumber::currency($price - $discount_price , "PKR");
   }
}
