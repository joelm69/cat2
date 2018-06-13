<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body class="container text-center">
	<h1 class="display-3">AMS</h1>
	<hr>
	<form method="post" class="border container py-5 col-10" action="/student">
		<div class="container" style="columns: 3;"> 
			<a style="text-decoration: none;" href="/student" class= my-2">
				<div class="card bg-secondary py-5" style="min-width: 150px;">
					<img class="mx-auto" height="100" width="100" src="{{ asset('images/person-icon.png') }}" >
					<div class="card-body form-group">
						<p class="card-text text-light lead">To register a student click here</p>
					</div>
				</div>
			</a>
			<a style="text-decoration: none;" href="/fees" class="my-2">
				<div class="card bg-secondary py-5" style="min-width: 150px;">
					<img class="mx-auto" height="100" width="100" src="{{ asset('images/payment-icon.png') }}" >
					<div class="card-body form-group">
						<p class="card-text text-light lead">For payment of fees click here </p>
					</div>
				</div>
			</a>
			<a style="text-decoration: none;" href="/allstudents" class=" my-2">
				<div class="card bg-secondary py-5" style="min-width: 150px;">
					<img class="mx-auto" height="100" width="100" src="{{ asset('images/student-icon.png') }}" >
					<div class="card-body form-group">
						<p class="card-text text-light lead">To view student registry click here </p>
					</div>
				</div>
			</a>
		</div>
	</form>
</body>
<style type="text/css">
	.card:hover {
		border-width: 2px;
  border-color:  rgba(82,168,236,.8);
  box-shadow: 0 0px 0px rgba(82,168,236,.8) inset, 0 0 8px rgba(82,168,236,.8);
}
</style>
</html>