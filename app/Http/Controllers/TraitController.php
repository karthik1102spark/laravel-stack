<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class TraitController extends Controller
{
    
    public function productList()
    {
        //Todo trait functionality
        $products = Product::select('*')->get();
        
        return view('products.index',compact('products'));
    }
}
