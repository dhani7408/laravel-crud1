@extends('layout')

@section('title','User List')

@section('content')
<h3>User List</h3>
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	{{ Session::get('status') }}
</div>
@endif
	<table class="table table-bordered">
	    <thead>
	      <tr>
	      	<th>#</th>
	        <th>Name</th>
	        <th>Email</th>
	        <th>Action</th>
	      </tr>
	    </thead>
	    <tbody>

	    @foreach($user as $data)
	    	
	      <tr>
	      	<td>{{ $data->id }}</td>
	        <td>{{ $data->name }}</td>
	        <td>{{ $data->email }}</td>
	        <td><a href="delete/{{ $data->id }}"><span style="color: #e6051b;" class="fa fa-trash"></span></a> <a href="edit/{{ $data->id }}"><span style="color: #079e29;" class="fa fa-edit"></span></a></td>
	      </tr>
	      
	    @endforeach
	    </tbody>
	</table>
@endsection