<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;

class ProductController extends Controller
{
    public function index(){
     
         $products=Product::with('pictures')->first();
         return view('layouts.productDetail',compact('products')); 


    }
}
