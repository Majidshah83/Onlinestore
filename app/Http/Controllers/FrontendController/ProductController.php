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
        $product = Product::with('pictures')->find($id);
        $cart = Session::has('cart') ? Session::get('cart') : null;
        if (!$cart) {
            $cart = new Cart($cart);
        }
        $cart->add($product, $product->id);
      Session::put('cart', $cart);
      // dd($request->Session()->get('cart'));
        return redirect()->route('shop');
    }
public function getCart(){
        if(!Session::has('cart'))
        {
           $product = [];
           $totalPrice = 0;
           return view('layouts.cart',compact('product','totalPrice'));
        }
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
        $product=$cart->items;
        $totalPrice=$cart->totalPrice;
        return view('layouts.cart',compact('product','totalPrice'));
        
     }


    public function getCheckout(){
         if(!Session::has('cart'))  //if not a cart
         { 
              $product = [];
           $totalPrice = 0;
               return view('layouts.checkout',['product'=>$cart->items, 'totalPrice'=>$cart->totalPrice]);
         }
         $oldCart=Session::get('cart'); //if having cart
         $cart=new Cart($oldCart); //assign 
         $totalPrice=$cart->totalPrice;
         $product=$cart->items;
         return view('layouts.checkout',compact('totalPrice','product'));

     }

 public function deleteCart($id)
    {
        $cart = Session::get('cart');
        dd($cart);
        unset($cart[$id]);
        Session::put('cart', $cart);
        return redirect()->back();
    }

}