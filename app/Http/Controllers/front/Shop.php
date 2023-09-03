<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class Shop extends Controller
{
    public function index(){
          $products = Product::paginate(12);
          return view('front.shop' , compact('products'));
    }
}