<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DataTables;

use App\Task;

class MyTasktablesController extends Controller

{

	/**

     * Displays front end view

     *

     * @return \Illuminate\View\View

     */

    public function index()

    {

    	return view('data');

    }

    /**

     * Process ajax request.

     *

     * @return \Illuminate\Http\JsonResponse

     */

    public function getData()

    {
        //the datatables will return the data of Employee(the model) and query it.
        return DataTables::of(Task::query())->make(true);

    }

}