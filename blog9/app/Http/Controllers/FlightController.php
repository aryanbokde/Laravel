<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlightController extends Controller
{
    //
    public function showFlight() {
       $data =  DB::table('flights')->get();
    //    $data =  DB::table('flights')->paginate(2);
       return view('flight', ["data"=>$data]);      
    }

    public function editFlight($id) {

        //Where condition
        // return DB::table('flights')
        // ->where('id', $id)
        // ->get();

        //Using Find method by id
        // $data = DB::table('flights')->count(); 
        $data = (array)DB::table('flights')->find($id);
        return view('editflight', ["data"=>$data]);

    }

    public function updateFlight(Request $req) {
        $name = $req->name;
        $email = $req->email;
        $mobile = $req->Mobile;
        if ($name == "") {
          return;
        }
        if ($email == "") {
            return;
        }
        if ($mobile == "") {
            return;
        }
        $data = DB::table('flights')->where('id', $req->id)->update([
            'name' => $name,
            'email' => $email,
            'Mobile' => $mobile
        ]);
        
        return redirect('/flights');
    }

    public function addNewFlight(Request $req) {
        $data = DB::table('flights')->insert([
            'name' => $req->name,
            'email' => $req->email,
            'Mobile' => $req->Mobile
        ]);
        if ($data) {
            return redirect('/flights'); 
        }
    }

    public function deleteFlight($id) {
        $data = DB::table('flights')->where('id', $id)->delete();
        return redirect('flights');
    }
}
