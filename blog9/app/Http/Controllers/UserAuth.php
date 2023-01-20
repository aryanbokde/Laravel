<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    //
    public function login(Request $req){
        $email = $req->input('email');
        $req->session()->put('email', $email);
       return redirect('profile');
    }   

}
