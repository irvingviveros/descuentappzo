<?php 
require "header.php";
?>
<div class="container bg-white mt-4 p-3 text-center">
	<main>
		<h1>Sign up</h1>
		<?php 
			if (isset($_GET['error'])) {
				if ($_GET['error'] == "emptyfields") {
					echo '<p class="font-weight-bold text-danger">Debes llenar todos los campos</p>';
				} else if ($_GET["error"] == "invalidmailuid") {
					echo '<p class="font-weight-bold text-danger">Usuario y correo inválido</p>';
				} else if ($_GET["error"] == "invalidmail") {
					echo '<p class="font-weight-bold text-danger">Correo electrónico inválido</p>';
				} else if ($_GET["error"] == "invaliduid") {
					echo '<p class="font-weight-bold text-danger">Nombre de usuario inválido</p>';
				} else if ($_GET["error"] == "passwordcheck") {
					echo '<p class="font-weight-bold text-danger">Las contraseñas no coinciden</p>';
				} else if ($_GET["error"] == "usertaken") {
					echo '<p class="font-weight-bold text-danger">El usuario ya existe</p>';
				} else if ($_GET["error"] == "emailtaken") {
					echo '<p class="font-weight-bold text-danger">El correo ya existe</p>';
				}
			}
			else if(isset($_GET['signup'])){
				header("Location: login.php?success");			//redirecciona a la página de login
				exit();
			}
		 ?>
		<form action="includes/signup.inc.php" method="post" class="form-signin">
			<div class="container form-group col-md-5 mt-4">
				<input type="text" class="form-control" name="uid" placeholder="Username">
			</div>
			<div class="container form-group col-md-5">
				<input type="mail" class="form-control" name="mail" placeholder="Email">
			</div>
			<div class="container form-group col-md-5">
				<input type="password" class="form-control" name="pwd" placeholder="Password">
			</div>
			<div class="container form-group col-md-5">
				<input type="password" class="form-control" name="pwd-repeat" placeholder="Repeat password">
			</div>
			<div class="container form-group col-md-2">
				<button type="submit" class="form-control " name="signup-submit">Signup</button>
			</div>
		</div>
	</form>	
</main>
</div>

<?php 
require "footer.php"; 
?>