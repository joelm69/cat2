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


	<h1 class="display-3">Pay Fees</h1><hr>

	<a href="/">Home  </a> / <a>  Fees</a><br><br>

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


	<form method="post" class="form-row border container-fluid border-info" action="/fees">


		{{ csrf_field() }}

		<div class="form-group col-6"><br>
			<label>Student ID</label>
			<select class="form-control" name="studentid">
				@if ( old('studentid') )
				<option class="bg-info text-light" >{{ old('studentid') }}</option>
				@endif
			    @foreach($student as $student)
			      <option>{{$student}}</option>
			    @endforeach
			 </select>
		</div>


		<div class="form-group col-12">
			<label>Account Name</label>
			<input class="form-control" type="text" name="accname" value="{{ old('accname') }}">
		</div>
		<div class="form-group col-12">
			<label>Account Number</label>
			<input class="form-control" type="number" name="accnumber" value="{{ old('accnumber') }}">
		</div>
		<div class="form-group col-6">
			<label>Amount</label>
			<input class="form-control" type="number" name="amount" value="{{ old('amount') }}">
		</div>
		<div class="form-group col-6">
			<label>Payment Method</label>
			<select class="form-control" name="method">
				@if ( old('method') )
				<option class="bg-info text-light" >{{ old('method') }}</option>
				@endif
				<option>Mobile Banking</option>
				<option>Online Banking</option>
				<option>Banker's Cheque</option>
				<option>Cash</option>
			</select>
		</div>		
		<div class="form-group mx-auto">
			<input type="submit" class="btn btn-primary" value="Submit">
		</div>
	</form>
</body>


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
</html>