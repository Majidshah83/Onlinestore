<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{


   protected $table = 'images';
    protected $fillable = ['id','product_id','image_path'];
     protected $guarded=[];
     
public function product()
{
    return $this->belongsTo('App\Models\Product');
}


}
