<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
  protected $guarded=[];

public function product(){
    $this->belongsTo('App\Models\Product');
 }
}
