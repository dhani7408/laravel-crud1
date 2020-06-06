 <!DOCTYPE html>
 <html>
 <head>
 	<title>@yield('title')</title>
 	<!--Js file-->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	

 </head>
 <body>
 <div class="header">
 	@section('header')
 	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	  <!-- Brand -->
	  <a class="navbar-brand" href="/">Admin Deshboard</a>

	  <!-- Toggler/collapsibe Button -->
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <!-- Navbar links -->
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="user">User List</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="/">Login</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="create">Create Account</a>
	      </li>
	    </ul>
	  </div>
	</nav>
 	@show
 </div>
 <div class="container content">
 	@section('content')

 	@show
 </div>
 <div class="footer">
 	@section('footer')
 	<p>This is footer section</p>
 	@show
 </div>
 	<!--Js file-->
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
 </body>
 </html>