<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
use App\Models\Reviews;
use App\Models\User;
use App\Models\Cart;
use Session;
class ProductController extends Controller
{
    public function index($id){
     
         $products=Product::with('pictures','reviews')->find($id);
         $user=User::all();
              return view('layouts.productDetail',compact('products','user'));

    }

public function getAddToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $cart = Session::has('cart') ? Session::get('cart') : null;
        if (!$cart) {
            $cart = new Cart($cart);
        }
        $cart->add($product, $product->id);
      Session::put('cart', $cart);
      // dd($request->Session()->get('cart'));
        return redirect()->route('shop');
    }

 
}
