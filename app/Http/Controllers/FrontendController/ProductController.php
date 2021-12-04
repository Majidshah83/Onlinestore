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
    public function index()
    {
       return view('AdminDashboard.Product.index');
    }
 

    public function productDteail($id){
     
         $products=Product::with('pictures','reviews')->find($id);
         $user=User::all();
        return view('layouts.productDetail',compact('products','user'));

    }

     public function getAddToCart($id)
    {
        $product = Product::with('pictures')->findOrFail($id);
         // return $product;
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->sale_price,
               "image"=>$product->pictures[0]->image_path,
            ];
        }
        
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image,
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}












//  public function getAddToCart(Request $request, $id)
//     {
//       $product = Product::with('pictures')->find($id);
//         $old_cart = Session::has('cart') ? Session::get('cart') : null;
//         $cart = new Cart($old_cart);
//         $cart->add($product, $product->id);

//         $request->session()->put('cart', $cart);
//         // dd($request->Session()->get('cart'));
//         return redirect()->route('shop');
//     }

// public function getCart()
//     {
//         if(! Session::has('cart') ) {
//           $products = [];
//            $total = 0;
//            return view('layouts.cart',compact('products','total'));
//         }

//         $old_cart = Session::get('cart');
//         $cart = new Cart($old_cart);

//         return view('layouts.cart', ['products' => $cart->items, 'total' => $cart->total_price]);
//     }

// // public function getRemoveFromCart(Request $request, $id)
// //     {
// //         $product = Product::find($id);
// //         $old_cart = Session::has('cart') ? Session::get('cart') : null;
// //         $cart = new Cart($old_cart);
// //         $remove = $cart->remove($product, $product->id);
// //         if($remove == 2) {
// //             $request->session()->forget('cart');
// //         } else if($remove == 1) {
// //             $request->session()->put('cart', $cart);
// //         }
// //         return redirect()->route('getCart')->with('message', 'Successfuly delete item form cart');
// //     }

//       public function getCheckout()
//     {
//         if(! Session::has('cart') ) {
//             return view('shop.cart');
//         }

//         $old_cart = Session::get('cart');
//         $cart = new Cart($old_cart);

//         return view('layouts.checkout', ['products' => $cart->items, 'total' => $cart->total_price]);
//     }
//     public function removeItem(Request $request)
//     {
//         if($request->id) {
//             $cart = session()->get('cart');
//             if(isset($cart[$request->id])) {
//                 unset($cart[$request->id]);
//                 session()->put('cart', $cart);
//             }
//             session()->flash('success', 'Product removed successfully');
//         }
//     }