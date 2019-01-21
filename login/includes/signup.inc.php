<?php

if (isset($_POST['signup-submit'])) {
	require 'dbh.inc.php';

	$username = $_POST['uid'];
	$email = $_POST['mail'];
	$password = $_POST['pwd'];
	$passwordRepeat = $_POST['pwd-repeat'];

	//validaciones
	if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)){
		header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
		exit();
	}
	//el usuario debe escribir un email y nombre de usuario válido
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: ../signup.php?error=invalidmailuid");
		exit();
	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {		//el usuario debe escribir un mail válido
		header("Location: ../signup.php?error=invalidmail&uid=".$username);
		exit();
	} elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {	//el usuario debe escribir un user válido
		header("Location: ../signup.php?error=invaliduid&mail=".$email);
		exit();
	} elseif ($password !== $passwordRepeat) {					//los dos password deben coincidir
		header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
		exit();
	} else{
		$sql = "SELECT uidUsers FROM users WHERE uidUsers=?;";	//se buscará en la bd si ya existe el user
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {				//imprime un fallo con la conexión a la bd
			header("Location: ../signup.php?error=sqlerror");
			exit();
		}
		else{
			//se escribe una s para determinar que es un string el valor que se va a mandar a la bd. Si existiera más de un valor a enviar, entonces se escribe las s necesarias: 2 param ejem= $stmt, "ss", $username, $password. Se quiere comprobar si ya existe el user ingresado en la bd.
			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if ($resultCheck > 0){
				header("Location: ../signup.php?error=usertaken&mail=".$email);
				exit();
			} else{

				//verifica si existe el correo en la bd.
				$sql = "SELECT * FROM users WHERE emailUsers = '$email'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if($resultCheck > 0){
					header("Location: ../signup.php?error=emailtaken&uid=".$username);
					exit();
				}

			//se insertan placeholders "?" para no mostrar esa información en el header
			//se insertan los datos introducidos a la bd
				$sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)){
					header("Location: ../signup.php?error=sqlerror");
					exit();
				}
				else{
				//protege la contraseña
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
					mysqli_stmt_execute($stmt);
					header("Location: ../signup.php?signup=success");
					exit();
				}
			}
		}
	}
	//finalizar conexiones para ahorrar recursos
	mysqli_stmt_close($stmt);
	mysqli_close();

}
//impedir que el usuario acceda a esta página sin haber clickeado el botón de sign up
else {
	header("Location: ../signup.php");
	exit();
}
