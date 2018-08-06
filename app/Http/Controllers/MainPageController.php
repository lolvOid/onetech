<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class MainPageController extends Controller
{
    //

    public function index(){

        $products = Product::inRandomOrder()->take(4)->get();
        return view('main')->with('products',$products);
    }
}
