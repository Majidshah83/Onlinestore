<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Product;
use App\Models\Image;
use App\Models\Reviews;
class CategoryController extends Controller
{
   
    public function categories($id){
         $products=Product::where('categorie_id',$id)->with(['pictures'])->get();
         $categories=Categorie::all();
         return view('layouts.shop',compact('products','categories')); 
        

    }
}