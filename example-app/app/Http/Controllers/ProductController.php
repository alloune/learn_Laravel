<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products(){
        return "List des produits";
    }
    public function product(){
        $id=request('id');
        echo "ça marche et le l'id est ". $id;
    }
}
