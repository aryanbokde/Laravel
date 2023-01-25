<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalaryController extends Controller
{
    public function getAllList() {
        $data =  DB::table('employees')->get();
        return view("addsalary", ['data' => $data]);
    }
    public function addSalary(Request $req) {
        $data = DB::table('salaries')->insert([
            'empId' => $req->empId,
            'salary' => $req->salary,
            'date' => $req->date
        ]);
        if ($data) {
            session()->flash('success', "Salary added");
           return redirect('/addsalary');
        }
    }
}
