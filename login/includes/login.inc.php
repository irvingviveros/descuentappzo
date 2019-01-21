<?php
if (isset($_POST['login-submit'])){
	//se necesita conectar a la bd
	require 'dbh.inc.php';

	$mailuid = $_POST['mailuid'];
	$password = $_POST['pwd'];

	//valida si el mail y password están vacíos
	if (empty($mailuid) || empty($password)) {
		header("Location: ../index.php?error=emptyfields");
		exit();
	}
	else {	
		$sql = "SELECT * FROM users WHERE uidUsers=?;";
		$stmt = mysqli_stmt_init($conn);		//inicializa la bd con la conexion correcta
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../index.php?error=sqlerror");
			exit();
		}
		else{
			mysqli_stmt_bind_param($stmt, "s", $mailuid);
			mysqli_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)) {
				$pwdCheck = password_verify($password, $row['pwdUsers']);
				if ($pwdCheck == false) {
					header("Location: ../index.php?error=wrongpwd");
					exit();
				}
				elseif ($pwdCheck == true) {
					session_start();		//si el usuario y pwd es correcto, inicia sesión
					$_SESSION['userId'] = $row['idUsers'];
					$_SESSION['userId'] = $row['uidUsers'];
					header("Location: ../index.php?login=success");
					exit();
				}
				else{
					header("Location: ../index.php?error=wrongpwd");
					exit();
				}
			}
			else{
				header("Location: ../index.php?error=nouser");
				exit();
			}
		}
	}
}
else{
	header("Location: ../index.php");
	exit();
}