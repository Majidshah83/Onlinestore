<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Billingdetail;
use App\Models\Product;
use Session;

class CheckoutController extends Controller
{
    public function index(){
        return view('layouts.checkout');
    }



   public function placeOrder(Request $request)
   {
         $data = ['first_name'=>$request->first_name,
              'last_name' => $request->last_name,
              'email' =>$request->email,
              'order_data'=>$request->order_data,
              'phone_number' => $request->phone_number,
              'company_name' => $request->company_name,
              'country' =>$request->country,
              'address_line1' => $request->address_line1,
              'address_line2' => $request->address_line2,
              'district' => $request->district,
               'city' => $request->city,
           

           ];

  
  
     $data=Billingdetail::create($data);
    



   
   
   }

}


