<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'products';
    protected $fillable = ['id','categorie_id','name','description','quantity','retail_price','sale_price','is_active'];
    protected $guarded=[];

public function pictures()
{
    return $this->hasMany('App\Models\Image');
}
 
 public function reviews(){
    return $this->hasMany('App\Models\Reviews');
 }

}
