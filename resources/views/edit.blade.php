 @extends('layout')

@section('title','Edit Account')

@section('content')
	<form action="/edit" method="POST">
	@csrf
	<div class="form-group">
		<input type="hidden" class="form-control" value="{{ $data->id }}" name="id">
	    <label for="name">Name:</label>
	    <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="Enter name" id="name">
	  </div>
	  <div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="email" class="form-control" name="email" value="{{$data->email}}" placeholder="Enter email" id="email">
	  </div>
	  
	  <button type="submit" class="btn btn-primary">Update</button>
	</form>
@endsection