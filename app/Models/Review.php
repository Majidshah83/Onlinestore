<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable=['id','product_id','user_id','comment','date'];

    

}