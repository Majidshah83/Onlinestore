<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='orders';
     protected $fillable=[
     
      'user_id','first_name','last_name','email','phone_number','company_name','country','address_line1','address_line2','district','city','zipCode','totalQuantity','totalPrice','tracking_no',
    
    ];
}
