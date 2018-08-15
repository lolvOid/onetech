<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class MainPageController extends Controller
{
    //

    public function index(){

         $products = Product::inRandomOrder()->take(4)->get();
        //$products = Product::where('featured',true)->get();
        return view('main')->with('products',$products);
    }
}
