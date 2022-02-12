<?php

namespace App\Http\Controllers\User;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller 
{
     public function index(){
        return view('UserDashboard.userdashboard');
    }
public function registerUser(Request $request)
{   

 $request->validate([
 'name' => 'required|max:25',
 'email' => 'required|email|unique:users',
 'password' => 'required|min:3|same:confirm_password',
 'role'=>'required',

    ]);
   $data=['name'=>$request->name,'email'=>$request->email,'password' => Hash::make($request->password),'role'=>$request->role];
   $data=User::create($data);
   if($data)
   {
    return redirect()->back()->with('message','Register  Succesfullly');
   }
   else{
       return redirect()->back()->with('message','Register not Succesfullly');
   }
}
public function logout(Request $request) {
  Auth::logout();
  return redirect('/login');
}

}
