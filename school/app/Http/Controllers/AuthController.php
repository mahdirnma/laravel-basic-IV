<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserLoginRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(StoreUserLoginRequest $request){
        $username=$request->input('username');
        $password=$request->input('password');
        $user=User::all()->where('username',$username)->where('password',$password)->first();
        if ($user){
            session()->put('user',true);
            return to_route('index');
        }else{
            return to_route('login.show');
        }
    }

    public function signin(StoreUserRequest $request)
    {
        $name=$request->input('name');
        $username=$request->input('username');
        $password=$request->input('password');
        $repeat_password=$request->input('repeat_password');
        if ($password==$repeat_password)
            $user=User::create([
                'name'=>$name,
                'username'=>$username,
                'password'=>$password
            ]);
        if ($user){
            session()->put('user',true);
            return to_route('index');
        }else{
            return to_route('signin.show');
        }
    }
    public function logout(){
        if (!session()->has('user')){
            return to_route('login.show');
        }
        session()->forget('user');
        return to_route('login.show');
    }
}
