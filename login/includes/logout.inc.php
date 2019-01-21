<?php 
	session_start();
	session_unset(); //delete all the values in the actual session
	session_destroy();
	header("Location: ../index.php");
 ?>