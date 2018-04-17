@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row" id="create">
			<div class="col-md-12">
				<form class="form-horizontal" method="POST" action="{{ url('/insert')}}">
					{{csrf_field()}}
				  	<fieldset>
				    <legend>Company database</legend>
				    @if(count($errors) >0)
				    	@foreach($errors->all() as $error)
				    		<div class="alert alert-danger">
				    			{{$error}}
				    		</div>
				    	@endforeach 
				    @endif
				    <div class="form-group">
				      <label for="name" class="col-lg-2 control-label">Company</label>
				      <div class="col-lg-10">
				        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name">
				      </div>			
				    </div>

				     <div class="form-group">
				      <label for="email" class="col-lg-2 control-label">Email</label>
				      <div class="col-lg-10">
				        <textarea name="email" class="form-control" placeholder="Email"></textarea>
				      </div>
				     </div>
				      
				      <div class="form-group">
				      <label for="address" class="col-lg-2 control-label">Location</label>
				      <div class="col-lg-10">
				        <textarea name="address" class="form-control" placeholder="Location"></textarea>
				      </div>
				     </div>

				      <div class="form-group">
				      <label for="salary" class="col-lg-2 control-label">Income</label>
				      <div class="col-lg-10">
				        <textarea name="salary" class="form-control" placeholder="Income"></textarea>
				      </div>
				    </div>

				    
				    
				    
				        
				    <div class="form-group">
				      <div class="col-lg-8 col-lg-offset-2">
				        
				        <button type="submit" class="btn btn-success">Submit</button>
				        <a href="{{url('my-datatables')}}" class="btn btn-warning" role="button"></i> Back</a>
				        

				      </div>
				    </div>
  	</fieldset>
</form>
		</div>
	</div>
@endsection