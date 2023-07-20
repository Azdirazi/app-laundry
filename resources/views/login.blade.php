<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Login</title>
     <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
</head>
<body class="bg-warning bg-opacity-75 flex-column d-flex justify-content-center align-items-center vh-100">
	<div class="flex-row justify-content-center">
		<div class="d-flex justify-content-center align-items-center">
			<img src="" width="180" class="  rounded-circle mb-2" alt="logo">
		</div>
		<h4 class="text-center text-dark">Manajemen Laundry</h4>
	</div>  
	<div class="mx-lg-3 mx-1 my-2 py-lg-3  col-lg-6 card rounded login  ">
		<div class="card-body py-0 px-1">
			<h4 class="text-center">Login</h4>
			
			<form class="" method="POST" action="">
				<div class="d-flex  justify-content-center ">
					<div class=" row">
						<div class=" col-lg-12 mb-3 px-0 " >
							<label class="form-label" for="username">Username</label>
							<input type="text" id="username" name="username" class="form-control">
						</div>
						<div class="col-lg-12 mb-3 px-0" >
							<label class="form-label" for="password">Password</label>
							<input class="form-control" type="password" id="password" name="password">
						</div>
						<button name="login" class="btn btn-primary col-lg-12 mb-2" type="submit">Login</button>
						<a href="#" class=" mb-1"><u> Reset Password?</u></a>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>