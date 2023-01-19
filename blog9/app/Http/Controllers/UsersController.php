<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function loadView() {
        
        $data = ["Rakesh", "Anil", "Mukesh", "Yash"];
        return view('users', ['users' => $data]);
    }
}
