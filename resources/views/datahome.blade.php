@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" id="datahome-page">
                <h1 id="dashboard">Datatables Dashboard</h1>

                <div class="panel-body" id="dashboardpan">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="row" id="card-table2">
                    
                        

                        <th><div class="card" style="width: 20rem;">
                          <img class="card-img-top" src="images/company.png" alt="">
                          <div class="card-body">
                            <h4 class="card-title">DataTables</h4>
                            <p class="card-text">Company details</p>
                            <a href="{{url('my-datatables')}}" class="btn btn-primary" id="button-home"><i class="fa fa-building-o" aria-hidden="true"></i> Company</a>
                          </div>
                        </div></th>

                        <th><div class="card" style="width: 20rem;">
                          <img class="card-img-top" src="images/task.png" alt="">
                          <div class="card-body">
                            <h4 class="card-title">DataTables</h4>
                            <p class="card-text">Tasklist details</p>
                            <a href="{{url('my-tasktables')}}" class="btn btn-primary" id="button-home"><i class="fa fa-bar-chart" aria-hidden="true"></i> Task</a>
                          </div>
                        </div></th>   
                    
                </table>


                    
            </div>
        </div>
    </div>
</div>
@endsection
