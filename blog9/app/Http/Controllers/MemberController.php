<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Member;


class MemberController extends Controller
{
    //
    public function show()
    {
        // for ($i=0; $i < 15; $i++) { 
        //     DB::table('members')->insert([
        //         'name' => Str::random(10),
        //         'email' => Str::random(10).'@gmail.com',
        //         'address' => Str::random(10),
        //     ]);
        // }

        // $data = Member::all();
        $data = Member::paginate(5);
        return view("member", ["members" => $data]);
    }

    public function addMember(Request $req)
    {
        $member = new Member;
        $member->name = $req->name;
        $member->email = $req->email;
        $member->address = $req->address;
        $member->save();
        $req->session()->flash('success', "New member add suceessfully");
        return redirect('/addmember');
    }

    public function deleteMember($id)
    {
        $data = Member::find($id);
        $data->delete();
        session()->flash('success', 'Deleted Successfully');
        return redirect('/member');
    }
    public function showMemberDetail($id)
    {
        $data = Member::find($id);
        return view('editmember', ['data' => $data ]);
    }
    public function updateMember(Request $req)
    {
        $data = Member::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->address = $req->address;
        $data->save();
        session()->flash('success', 'Member Updated');
        return redirect('/member');
    }
}
