<!DOCTYPE html>
<html>
<head>
	<title>NekoFamily | Login</title>
	<meta charset="UTF-8">
	<style>
	body {
  background: #007bff;
  background: linear-gradient(to right, #0062E6, #33AEFF);
}
	</style>
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/login.css"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
		<div class="container" style="margin-top: 10%;">
				<div class="row">
				  <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
					<div class="card card-signin my-5">
					  <div class="card-body">
						<h5 class="card-title text-center">Sign In</h5>


						<form class="form-signin" method="post" action="auth/auth">
						  <div class="form-label-group">
							<input type="text" class="form-control" id="login" name="login" placeholder="Введите логин">
							<div>
						  <br>
						  <div class="form-label-group">
							<input type="password" name="pass" id="pass" class="form-control" placeholder="Password">
							<br>
						  </div>
						  <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="do_login">Sign in</button>
						  </form>
					</div>
				  </div>
				</div>
			  </div>

</body>
</html>
