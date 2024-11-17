<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PDO;

class RegisterController extends Controller
{
    public function RegisterView(){
        return view('register');
    }

    public function Submit(Request $request){
        $request->validate([
            'name' => [
                'required'
            ]
            'email' => 'required|max:50|unique:users',
            'password' => 'required|max:50',
            'dob' => 'required|before_or_equal:today|before:-18 years|after:-100 years',
        ]);

        // $user = User::create({
        //     'name'
        // })

    }
}
