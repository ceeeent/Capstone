<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class LoginController extends Controller
{

    public function login (Request $request){

        if (Auth::attempt ([
            'username' => $request->username,
            'password' => $request->password
        ]))

        {

            $user =  User::where('username', $request->username)->first();

            if($user->is_admin() == 'admin'){
                return redirect ()->route('admin');
            }
            elseif($user->is_admin() == 'super_admin'){
                return redirect ()->route('admin');
            }
            else{
                return redirect ()->route('home');

            }
            

        }

        return redirect ()->back();
    }
}
