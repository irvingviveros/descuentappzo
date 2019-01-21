<?php //iniciar la sesión
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-ligh text-center">
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Technology</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">PORTFOLIO</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">ABOUT ME</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">CONTACT</a>
					</li>
				</ul>

				<?php
				if (isset($_SESSION['userId'])) {
					echo '<form class="form-inline" action="includes/logout.inc.php" method="post">
					<div class="input-group">
					<button type="submit" class="btn btn-dark ml-1 mr-1" name="logout-submit">LOGOUT</button>
					</div>
					</form>';
				} else{
					echo '<form class="form-inline" action="includes/login.inc.php" method="post">
					<div class="input-group">
					<input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="mailuid">
					<input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="pwd">
					<button type="submit" class="btn btn-dark ml-1 mr-1" name="login-submit">LOGIN</button>
					</div>
					</form>

					<form class="form-inline">
					<div class="input-group">
					<a href="signup.php" class="nav-link btn">Sign up</a>
					</div>
					</form>';
				}
				?>

			</div>
		</nav>
	</header>
