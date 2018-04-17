<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Employee;



class HighChartController extends Controller
{
    public function index()

{

	//fetch from database employee, name and salary, order by salary, limit the view by 10.
	//pass in array name and salary 
	// 
    	

        $employees = DB::table('employees')
			        ->select('name','salary')
			        ->orderBy('salary','desc')
			        ->limit(20)
			        ->get();


		//dd($employees);

		$name = []; //set variable
		$salary = [];	//set variable

		$data = [];

		foreach ($employees as $employee) { //assign employees as employee
			
			$json;

			$json["name"] = $employee->name;
			$json["y"] = $employee->salary;
			array_push($data,$json);

			$name[] = $employee->name;		//set $name variable to employee to name
			$salary[] = $employee->salary;	//set $salary variable to employee to salary

		}
			$encode = json_encode($data); 
		// dd($encode);
		        
    	return view('highchart', compact('name', 'salary', 'encode')); //compact is to return the view name and salary to viewers (php)
    	
    	}
}

