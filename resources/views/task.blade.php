@extends('layouts.app')


@section('content')

    <!-- Bootstrap Boilerplate... -->
    <div class="container" id="task_table">
    <div class="panel-body" >
        <!-- Display Validation Errors -->
        @include('common.errors')


        <!-- New Task Form -->
        <form action="/task" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-7 control-label" id="taskform"><h1>Task</h1></label>

                <div class="col-sm-12">

                    <input type="text" name="name" id="task-name" class="form-control" placeholder="Add Task">
                </div>

            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-11">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: Current Tasks -->
    
        @if (count($tasks) > 0)
        <div class="panel panel-default" id="current-task-table">
            <div class="panel-heading">
                <h1>Current Tasks</h1>
            </div>

            <div class="panel-body" id="delete-table">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                                    
                     <thead>
                        <tr>
                          <th>#</th>
                          <th>Task</th>
                          <th>Time created</th>
                          
                          
                        </tr>
                    </thead>
                    <!-- Table Body -->
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <!-- Task Name -->

                                <th scope="row" class="table-text">
                                    <div>{{ $task->id }}</div>
                                </th>
                                <th scope="row" class="table-text">
                                    <div>{{ $task->name }}</div>
                                </th>

                                <th scope="row" class="table-text">
                                    <div>{{ $task->created_at }}</div>
                                </th>

                                
                                 
                                <!-- Delete Button -->
                                <td>
                                    <form action="{{ url('task/'.$task->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}    
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                         @endforeach
                    </tbody>
                </table>
            </div>

        </div>
<div class="form-group">
                <div class="col-sm-offset-5 col-sm-11">
                     <a href="{{url('my-tasktables')}}" class="btn btn-info" role="button"></i> View Task Tables</a>
                </div>
            </div>

    </div>

    @endif
@endsection


