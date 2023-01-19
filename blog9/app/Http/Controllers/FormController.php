<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function getForm(Request $req) {
        return $req->input();
    }
}
