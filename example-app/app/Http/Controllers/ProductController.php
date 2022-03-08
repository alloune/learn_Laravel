<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products(){
        return view("cart");
    }
    public function product(){
        return view('product-details');

    }
}
