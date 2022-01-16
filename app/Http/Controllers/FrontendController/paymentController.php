<?php

namespace App\Http\Controllers\FrontendController;
use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class paymentController extends Controller
{
   public function paymentSuccess(Request $request){
     $request->Session()->flash('message', 'Thank you for your purchase!!');
   return view('layouts.sucessOrder');
     
}

public function paymentMethod()
{
  
   return view('layouts.paymentMethod');
}

}
