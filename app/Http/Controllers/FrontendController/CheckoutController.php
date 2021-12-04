<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Billingdetail;
use App\Models\Product;
use App\Models\Order_item;
use Illuminate\Support\Facades\Session;
use Auth;
class CheckoutController extends Controller
{
    public function index(){
   
        return view('layouts.checkout');
    }
public function placeOrder(Request $request)
   {         
$sessionCart=Session::get('cart');
// return $sessionCart;
   if(!empty($sessionCart)){  
    foreach ($sessionCart as $key => $value) {
        // code...
   
        $totalquantity=$value['quantity'];
       $totalPrice=$value['price'];

       }
    $data = ['first_name'=>$request->first_name,   
              'last_name' => $request->last_name,
              'email' =>$request->email,
              'totalPrice'=>$totalPrice,
              'totalQuantity'=>$totalquantity,
              'phone_number' => $request->phone_number,
              'company_name' => $request->company_name,
              'country' =>$request->country,
              'address_line1' => $request->address_line1,
              'address_line2' => $request->address_line2,
              'district' => $request->district,
               'city' => $request->city,
               'zipCode'=>$request->zipCode,
               'user_id'=>$request->user_id,
               'tracking_no'=>'TCS'.rand(111111111,999999999),
           ];
        $order=Order::create($data);
 $orderProducts = [];
 foreach ($sessionCart as $details)
        {
        
            $product=Product::where('name',$details['name'])->first();
            $orderProducts[] =[
              'order_id' => $order->id,
               'product_id'=> $product->id,
               'price'=>$details['price'],
               'quantity'=>$details['quantity'],
                'price'=>($details['quantity'])*($details['price']),
                
            ];
 
        }
      Order_item::insert($orderProducts);
    return "sucesfully insert";


}
}

}