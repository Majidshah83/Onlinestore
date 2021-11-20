<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='orders';
     protected $fillable=[
     
     'billingdetail_id','product_id','price','quantity','total_Price',

    ];
}
