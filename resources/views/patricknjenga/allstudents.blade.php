<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" ">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js "></script>
		<script type="text/javascript " src="https://code.jquery.com/jquery-3.3.1.min.js "></script>
	</head>
	<body class="container ">
		<h1 class="display-3 ">All Students</h1>
		<hr>
		<a href="/ ">Home  </a> /
		 <a>  All Students</a><br><br>

		@if ($table)
		<table class="table table-striped">
			<tr class="thead-dark">
				<th>Student ID</th>
				<th>Account Name</th>
				<th>Account Number</th>
				<th>Amount</th>
				<th>Method</th>
				<th>View Payments</th>
			</tr>
			@foreach($table as $data)
			<tr>
				<td>{{$data->id}}</td>
				<td>{{$data->name}}</td>
				<td>{{$data->course}}</td>
				<td>{{$data->year1}}</td>
				<td>{{$data->year2}}</td>
				<td><a href="history/{{$data->id}}">View</a></td>
			</tr>
			@endforeach
			@endif
		</table>
	</body>
</html>