<!DOCTYPE html>
<html>

	<head>
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

	<body class="container">
		<h1 class="display-3">Register Student</h1>
		<hr>
		<a href="/">Home  </a> / <a>  Student</a><br><br>
			@if (session('status'))
			<p id="alert" class="alert alert-primary text-muted">
				{{ session('status') }}
			</p>
			@endif
			@if ($errors->any())
			<div id="alert" class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
		<form method="post" class="form-row border container-fluid border-info" action="/student">
			<div class="form-group col-6"><br>
				<label>Student ID</label>
				<input class="form-control" type="number" name="id"  value="{{ old('id') }}">
			</div>
			<div class="form-group col-12">
				<label>Name</label>
				<input class="form-control" type="text" name="name"  value="{{ old('name') }}">
			</div>
			<div class="form-group col-12">
				<label>Course enrolled</label>
				<input class="form-control" type="text" name="course"  value="{{ old('course') }}">
			</div>
			<div class="form-group col-6">
				<label>Current Year</label>
				<input class="form-control" type="number" name="year1"  value="{{ old('year1') }}">
			</div>
			<div class="form-group col-6">
				<label>Completion Year</label>
				<input class="form-control" type="number" name="year2"  value="{{ old('year2') }}">
			</div>
			<div class="form-group mx-auto">
				<input type="submit" class="btn btn-primary" value="Submit">
			</div>
			{{ csrf_field() }}
		</form>
	</body>
</html>
<style type="text/css">
	.alert{
	position: absolute;
	z-index: 1;
	left: 30%;
	margin-top: -65px;
	width: 40%;
	min-width: 300px;
	}
</style>
<script type="text/javascript">
	$(document).ready(function(){
	      setTimeout(function(e){
	              $("#alert").fadeOut();
	          }, 2000);
	  });
</script>
</style>