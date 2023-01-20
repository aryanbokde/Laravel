<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadPhoto(Request $req){
        // $data =  $req->file('file')->store('images');
        // $data =  $req->file('file');
        $md5Name = md5_file($req->file('file')->getRealPath());
        $guessExtension = $req->file('file')->guessExtension();
        $file = $req->file('file')->storeAs('images2', $md5Name.'.'.$guessExtension );
        echo $file;
        // echo $data;
    }
}
