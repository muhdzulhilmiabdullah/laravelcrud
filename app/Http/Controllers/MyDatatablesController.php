<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DataTables;

use App\Employee;

class MyDatatablesController extends Controller

{

	/**

     * Displays front end view

     *

     * @return \Illuminate\View\View

     */

    public function index()

    {

    	return view('datatables');

    }

    /**

     * Process ajax request.

     *

     * @return \Illuminate\Http\JsonResponse

     */

    public function getData()

    {
        //the datatables will return the data of Employee(the model) and query it.
        return DataTables::of(Employee::query())->make(true);

    }

}