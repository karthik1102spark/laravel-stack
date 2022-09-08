<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ScopeController extends Controller
{
    public function laravelScopes()
    {
        $products = Product::select('*')->where('status',1)->get();

        $products = Product::select('*')->status()->get();

        $products = Product::select('*')->status(1)->get();

        $products = Product::select('*')->status(0)->get();

        $products = Product::get()->toArray();

        $products = Product::select('*')->withoutGlobalScope('App\Scopes\ActiveScope')->get();
        
        return view('products.index',compact('products'));
    }
}
