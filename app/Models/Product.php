<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'products';
    protected $fillable = ['id','categorie_id','name','description','quantity','retail_price','sale_price','is_active'];
    

public function pictures()
{
    return $this->hasMany('App\Models\Image');
}

public function reviews()
{
    return $this->hasMany('App\Models\Review');
}

public function categories()
    {
       return $this->belongsTo('App\Models\Categorie');
    }

    public function users(){
        return $this->hasMany('App\Models\User');
    }

}
