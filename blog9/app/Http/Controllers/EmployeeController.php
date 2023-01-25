<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    //
    public function showEmployee(){
        $data =  DB::table('employees')->get();
        return view("employee", ['data' => $data]);
    }

    public function employeeDetail($id) {
        $empData = DB::table('employees')->find($id);
        $empSalary = DB::table('salaries')
        ->where('empId', $id)
        ->get();

        
        $data = [
            'empData'  => $empData,
            'empSalary'   => $empSalary
        ];
        return view("employeedetail", ['data' => $data]);
    }
}
