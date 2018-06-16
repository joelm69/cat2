<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" ">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js "></script>
		<script type="text/javascript " src="https://code.jquery.com/jquery-3.3.1.min.js "></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body class="container ">
		<h1 class="display-3 ">Payment History</h1>
		<hr>
		<a href="/ ">Home </a> / 
		<a href="/allstudents"> All Students </a> /
		<a>Payment History</a> 


		<br><br>

		@if ($table)
		<table class="table table-striped">
			<tr class="thead-dark">
				<th>Student ID</th>
				<th>Account Name</th>
				<th>Account Number</th>
				<th>Amount</th>
				<th>Method</th>
				<th>Date</th>
			</tr>
			@foreach($table as $data)
			<tr>
				<td>{{$data->studentid}}</td>
				<td>{{$data->accname}}</td>
				<td>{{$data->accnumber}}</td>
				<td>{{$data->amount}}</td>
				<td>{{$data->method}}</td>
				<td>{{$data->created_at}}</td>
			</tr>
			@endforeach
		@endif
		
		</table>
	</body>
</html>