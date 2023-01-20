<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


class UsersController extends Controller
{

    //
    public function index() {        
        return DB::select('select * from users');
    }
    
    //
    public function loadView() {        
        $data = ["Rakesh", "Anil", "Mukesh", "Yash"];
        return view('users', ['users' => $data]);
    }

    //
    public function apiCall() {               
        $data = Http::get("https://reqres.in/api/users?page=1");
        return view( 'user1', ["collection" => $data['data']] );
    }
    //
    public function testRequest(Request $req) {            
        return $req->input();
    }
}
