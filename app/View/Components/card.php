<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class card extends Component
{
   public $id;
    public function __construct(public string $title , public string $url,public string $price , $id = null)
    {
        $this->id = $id;
    }

    // function PriceAndDes(){
    //     if (is_int($this->price)) {
    //        return true;

    //     }else{
    //       return false;
    //     }
    // }
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
