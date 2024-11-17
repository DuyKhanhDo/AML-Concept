<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function RegisterView(){
        return view('register');
    }

    public function Submit(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'dob' => 'required',
        ]);

        $user = User

    }
}
