<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function home(){
        
        $tasks = Task::all(); //call all function from user
        
        return view('task',compact('tasks'));
    }   


// add task 
    public function add(request $request) { 
    
        $validator = \ Validator::make($request->all(),[

            'name' => 'required',
        ]);

        if ($validator->fails()) {

            return redirect ('/tasklist')

            ->withInput()

            ->withErrors('Please add task name !');
        }


//create new task 
        $tasks = new Task; 

        $tasks->name = $request->name;

        $tasks->save();

        return redirect('/tasklist')->with('info','Saved!');
    }

    public function update()  {

        $tasks = Task::orderBy('created_at', 'asc')->get();
    
    return view('task', ['tasks' => $tasks
    ]);
}


//update time


    public function timeupdate($id) { 

       $tasks = Task::find($id);                //find id, pass id to id , and save

       $tasks->id = $id;

       $tasks->save();

       return redirect('/tasklist');
    }



//delete task
    public function delete($id){

        $task = Task::findOrFail($id);

        $task->delete();

        return redirect('/tasklist')->with('info','Deleted!');
    }
    
}

