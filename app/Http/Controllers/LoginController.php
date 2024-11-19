<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function postlogin(Request $request)
    {
        //dd($request->all()); //menampilkan request dari semua tampilan login

        if(Auth::attempt($request->only('username', 'password'))){
            return redirect()
        }
    }
}
