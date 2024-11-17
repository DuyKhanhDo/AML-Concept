<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function RegisterView(){
        return view('register');
    }

    public function Submit(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    }
}
