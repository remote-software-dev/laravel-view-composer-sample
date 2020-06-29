<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products',compact('products'));
    }

    public function displayPartialData($id){
        $product = Product::findOrFail($id);
        return view('layouts.partials.header',compact('product'));
    }
}