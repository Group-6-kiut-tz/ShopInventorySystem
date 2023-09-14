<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function newuser(Request $request)
    {
        if ($request->method()=='POST')
        {
            $request->validate([
                'username'=>'required',
                'password'=>'required',
            ]);

              
        
            $user = User::where('username',$request->username)->first();
      
          
         
            if (!$user) {
    return back()->with('error', 'Invalid email or password');
}

if (empty($request->password) || !Hash::check($request->password, $user->password)) {
    return back()->with('error', 'Invalid email or password');
}
            if($user&&$user->user_type=='admin')
            {
                
                return view('admin');
            }
            if(!Hash::check($request->password,$user->password))
            {
                return back()->with('error', 'password do not match');
            }
            auth()->login($user);
               
      
            return view('employee');
        }
        return view('Auth.login');
    }
    public function RegisterUser(Request $request)
    {    
         
            $request->validate([
                'username' => 'required',
                'password' => 'required|confirmed',
                'email' => 'required |unique:users'
            ]);
    
           $user = User::create(
                [
                    'username' => $request->username,
                    'password' => Hash::make($request->password),
                    'email' => $request->email,
                    'user_type' => 'employee'
                ]
                );
    
            return redirect()->route('login');
        
  
        return view('Auth.Register');
    }
        
    
       
    
    public function registration()
    {
        return view('Auth.Register');
    }


    public function logininterface()
    {
         return view('Auth.login');
    }
  
}
