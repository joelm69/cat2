<!DOCTYPE html>
<html>

	<head>
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" ">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js "></script>
		<script type="text/javascript " src="https://code.jquery.com/jquery-3.3.1.min.js "></script>
		<meta name="viewport " content="width=device-width, initial-scale=1 ">
	</head>
	
	<body class="container text-center ">
		<h1 class="display-3 ">AMS</h1>
		<hr>
		@if (session('status'))
		<p id="alert" class="alert alert-danger text-muted ">
			{{ session('status') }}
		</p>
		@endif
		<br>
		<br>
		<form method="get" class="border container-fluid" action="/history" onsubmit="load()">
			<div class="col-sm">
				<div id="load" class="load-bar ">
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>
				</div>
			</div>
			<br>
			<div class="col-sm-6s pb-2 mx-auto text-center " >
				<input type="text " class="form-control " name="id" placeholder="Search for student " style="text-align: center;">
			</div>
			<div class="form row container ">
				<a style="text-decoration: none; " href="/student " class= "my-2 col-lg " onclick="load()">
					<div class="card bg-secondary py-5 " style="min-width: 150px; ">
						<img class="mx-auto " height="100 " width="100 " src="{{ asset( 'images/person-icon.png') }} " >
						<div class="card-body ">
							<p class="card-text text-light lead ">To register a student</p>
							<br>
							<p class="card-text text-light lead ">click here</p>
						</div>
					</div>
				</a>
				<a style="text-decoration: none; " href="/fees " class="my-2 col-lg " onclick="load()">
					<div class="card bg-secondary py-5 " style="min-width: 150px; ">
						<img class="mx-auto " height="100 " width="100 " src="{{ asset( 'images/payment-icon.png') }} " >
						<div class="card-body ">
							<p class="card-text text-light lead ">For payment of fees</p>
							<br>
							<p class="card-text text-light lead ">click here</p>
						</div>
					</div>
				</a>
				<a style="text-decoration: none; " href="/allstudents " class=" my-2 col-lg " onclick="load()">
					<div class="card bg-secondary py-5 " style="min-width: 150px; ">
						<img class="mx-auto " height="100 " width="100 " src="{{ asset( 'images/student-icon.png') }} " >
						<div class="card-body ">
							<p class="card-text text-light lead ">View student registry</p>
							<br>
							<p class="card-text text-light lead ">click here</p>
						</div>
					</div>
				</a>
			</div>
			<br>
		</form>
	</body>
	<style type="text/css">
		.card:hover {
		border-width: 2px;
		border-color:  rgba(82,168,236,.8);
		box-shadow: 0 0px 0px rgba(82,168,236,.8) inset, 0 0 8px rgba(82,168,236,.8);
		}
		.alert{
		position: absolute;
		z-index: 1;
		left: 30%;
		margin-top: -15px;
		width: 40%;
		min-width: 300px;
		}
		.load-bar {
		width: 100%;
		height: 1px;
		background-color: #fdba2c;
		}
		.bar {
		content: "";
		display: inline;
		position: absolute;
		width: 0;
		height: 4px;
		left: 50%;
		text-align: center;
		}
		.bar:nth-child(1) {
		background-color: #da4733;
		animation: loading 3s linear infinite;
		}
		.bar:nth-child(2) {
		background-color: #3b78e7;
		animation: loading 3s linear 1s infinite;
		}
		.bar:nth-child(3) {
		background-color: #fdba2c;
		animation: loading 3s linear 2s infinite;
		}
		@keyframes loading {
		from {left: 50%; width: 0;z-index:100;}
		33.3333% {left: 0; width: 100%;z-index: 10;}
		to {left: 0; width: 100%;}
		}
	</style>
	<script type="text/javascript">
		function load() {
		       $("#load").show();
		   }
		
		$(document).ready(function(){
			$("#load").hide();
		       setTimeout(function(e){	$("#alert ").fadeOut();	}, 2000);
		   });
	</script>
</html>