<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Attendace extends Model
{
    public $timestamps = false;
    Protected $fillable = ['status','user_id','leave_Request','leave_Approval','date-Time','fromdate','todate','name']; 
    
    public function users(){
        return $this->hasMany('App\Models\User','id','user_id');
    }


}
