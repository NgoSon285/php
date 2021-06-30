<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="public/admin/css/bootstrap.min.css">

</head>

<body>
	<div class="container p-5">
		<div class="row justify-content-center align-items-center h-">
			<div class="col-md-6  ">
				<!-- card primary -->
				<div class="panel panel-primary">
					<div class="panel-heading text-center p-2 ">
						<h3>Viet Travel</h3>
					</div>
					<div class="panel-body">
						<!-- form -->
						<form method="post" action="">
							<!-- form group -->
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">Email</div>
									<div class="col-md-9"><input type="email" name="c_email" required class="form-control" value="admin@gmail.com"></div>
								</div>
							</div>
							<!-- end form group -->
							<!-- form group -->
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">Password</div>
									<div class="col-md-9"><input type="password" name="c_password" required class="form-control" value="1"></div>
								</div>
							</div>
							<!-- end form group -->
							<!-- form group -->
							<div class="form-group">
								<div class="row">
									<div class="col-md-8"></div>
									<div class="col-4">
										<button type="submit" class="btn btn-primary btn-block" name="submit">Sign In</button>
									</div>
								</div>
							</div>
							<!-- end form group -->
						</form>
						<!-- end form -->
					</div>
				</div>
				<!-- end card primary -->
			</div>
		</div>
	</div>
</body>

</html>