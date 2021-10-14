<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Support\Facades\DB;


class ShopController extends Controller
{
    public function index(){
     $products=Product::with('pictures')->get();
         return view('layouts.shop',compact('products')); 
           
    }

 
}
