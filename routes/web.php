<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//home page
Route::get('/', function () {
    return view('welcome');
});

//about page
Route::get('/about', function () {
    return view('about');
});

//create page

Route::get('/create',function(){
	return view('create');});


Route::post('/insert','CreatesController@add');

/*Route::get('/task','CreatesController@home');
Route::get('/update/{id}','CreatesController@update');
Route::post('/edit/{id}','CreatesController@edit');
Route::get('/read/{id}','CreatesController@read');
Route::get('/delete/{id}','CreatesController@delete');
*/
//datahome page

Route::get('datatable_home', function () {
    return view('datahome');
});


//mydatatables page
Route::get('my-datatables', 'MyDatatablesController@index');
Route::get('get-data-my-datatables', ['as'=>'get.data','uses'=>'MyDatatablesController@getData']);

//mytasktables page
Route::get('my-tasktables', 'MyTasktablesController@index');
Route::get('get-data-my-tasktables', ['as'=>'get.task','uses'=>'MyTasktablesController@getData']);

//highchart route page
Route::get('highchart', 'HighChartController@index');

//task list page
Route::get('/tasklist', function () {
    return view('task');
});
Route::get('/tasklist','TaskController@home');
Route::post('/task','TaskController@add');
Route::delete('/task/{task}','TaskController@delete');
Route::post('/update/{id}', 'TaskController@timeupdate');



//auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


 

