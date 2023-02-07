<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function getSalary($id){
        $lastSalary = DB::table('salaries')->where('empId', $id)->get()->last()->salary;
        return $lastSalary;
    }
    public function showEmployee(){
        $data =  DB::table('employees')->get();
        $arr = array();

        foreach($data as $key => $value){
            $actualData = [];               
                $actualData['id'] = $value->id; 
                $actualData['name'] = $value->name; 
                $actualData['email'] = $value->email; 
                $actualData['designation'] = $value->designation; 
                $actualData['DOJ'] = $value->DOJ; 
                $actualData['salary'] = $this->getSalary($value->id);
                array_push($arr, $actualData); 
        }
       
        return view("employee", ['data' => $arr]);
    }




    public function employeeDetail($id) {
        $empData = DB::table('employees')->find($id);
        // return $empData->DOJ;
        $empSalary = DB::table('salaries')
        ->where('empId', $id)
        ->get();
        $lastSalary = DB::table('salaries')->where('empId', $id)->get()->last()->salary;

        
        $data = [
            'empData'  => $empData,
            'empSalary'   => $empSalary,
            'lastSalary' =>  $lastSalary,
        ];
        return view("employeedetail", ['data' => $data]);
    }
}
