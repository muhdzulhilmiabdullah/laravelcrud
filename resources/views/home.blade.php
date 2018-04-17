@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" id="homepage-table" >
                <h1 id="dashboard">Dashboard</h1>

                <div class="panel-body" id="dashboardpan">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                <table class="row" id="card-table">
                    
                        

                        <th><div class="card" style="width: 20rem;">
                          <img class="card-img-top" src="images/datatables.png" alt="">
                          <div class="card-body">
                            <h4 class="card-title">DataTables</h4>
                            <p class="card-text">Example of DataTables</p>
                            <a href="{{url('datatable_home')}}" class="btn btn-primary" id="button-home"><i class="fa fa-database" aria-hidden="true"></i> Data Tables</a>
                          </div>
                        </div></th>

                        <th><div class="card" style="width: 20rem;">
                          <img class="card-img-top" src="images/highchart.png" alt="">
                          <div class="card-body">
                            <h4 class="card-title">HighCharts</h4>
                            <p class="card-text">Example of HighCharts</p>
                            <a href="{{url('highchart')}}" class="btn btn-primary" id="button-home"><i class="fa fa-bar-chart" aria-hidden="true"></i> High Charts</a>
                          </div>
                        </div></th>

                        <th><div class="card" style="width: 20rem;">
                          <img class="card-img-top" src="images/tasklist.png" alt="">
                          <div class="card-body">
                            <h4 class="card-title">Task List</h4>
                            <p class="card-text">Example of Task List</p>
                            <a href="{{url('/tasklist')}}" class="btn btn-primary" id="button-home"><i class="fa fa-tasks" aria-hidden="true"></i> Task List</a>
                          </div>
                        </div></th>
                    
                </table>






                    
                </div>
            </div>
        </div>
    </div>

@endsection
