<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rating Makanan</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Livvic|Courgette&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
	<style type="text/css">
		body {
			background-color: #e2e2ef;
			font-family: 'Livvic', sans-serif;
		}
		nav a {
			font-family: 'Courgette', cursive;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-info navbar-dark mb-3 shadow-sm">
		<div class="w-100">
			<div class="d-flex justify-content-between col-md-4 offset-md-4">
				<a class="navbar-brand" href="{{ url('/') }}"><b>Rating Makanan</b></a>
			  <ul class="navbar-nav flex-row">
			    <li class="nav-item ml-2">
			      <a class="nav-link" href="{{ url('/') }}"><i class="fas fa-star"></i> Rate</a>
			    </li>
			    <li class="nav-item ml-2">
			      <a class="nav-link" href="{{ url('/check') }}"><i class="fas fa-poll"></i> Result</a>
			    </li>
			  </ul>
			</div>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 offset-md-4">
				
				<div class="card shadow-sm">
				  <div class="card-body">
				  	@yield('content')
				  </div>
				</div>

			</div>
		</div>
	</div>
</body>
</html>