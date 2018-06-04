<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee; // is the model (database)
 
class CreatesController extends Controller
{
    public function home(){
    	$employee = Employee::all(); //call all function from user
    	return view('my-datatables',compact('$employee'));
    	
    }
    //add function 
    public function add(request $request){ 

    	$validator = \Validator::make($request->all(), [
    		'name' => 'required',
    		'email' => 'required',
            'address' => 'required',
            'salary' => 'required'
    		]);

        if ($validator->fails()) {
            return redirect ('create')
            ->withInput()
            ->withErrors($validator->errors());
        }

    	$employees = new Employee; 
    	$employees->name = $request->name;
    	$employees->email = $request->email;
        $employees->address = $request->address;
        $employees->salary = $request->salary;
    	$employees->save();
    	return redirect('my-datatables')->with('info','Saved!');

    }
}
    
 /*   //update
    public function update($id){
    	$employees = Employee::find($id);
    	 

    	return view('update',['employees'=> $employees]);
    }
}
    //edit
    public function edit(Request $request,$id){  
    	$this->validate($request, [
    		'name' => 'required',
    		'email' => 'required',
            'address' => 'required',
            'salary' => 'required'
    		]);
    	$data = array(
    		'name' => $request->input('name'),
    		'email' => $request->input('email'),
            'address' => $request->input('address'),
            'salary' => $request->input('salary')

    		);
    	Employee::where('id', $id)
    		->update($data);
    		return redirect('/')->with('info','Update saved!'); 
            //noti when edit succesfully updated
    }
    //read
    public function read($id){
    	$employees = Employee::find($id);
    	return view('read', ['employees'=> $employees]);
    }
    //delete
    public function delete($id){
    	Employee::where('id', $id)
    	->delete();
    	return redirect('my-datatables')->with('info','Deleted!');
        //noti when delete successfullyy deleted
    }
}	

