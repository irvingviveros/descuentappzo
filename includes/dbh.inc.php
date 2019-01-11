<?php

$servername = "localhost";		//dirección del host
$dBUsername = "root";			//nombre usuario root
$dBPassword = "";				//password usuario root
$dBName = "descuentappzo";		//nombre de la bd

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);		//conección a la bd

if(!$conn){
	die("Connection failed: ". mysqli_connect_error());	
}
