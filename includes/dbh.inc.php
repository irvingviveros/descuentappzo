<?php

$servername = "localhost";		//dirección del host
$dBUsername = "root";			//nombre usuario root
$dBPassword = "";				//password usuario root
$dBName = "Descuentappzo";		//nombre de la bd

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);		//conección a la bd
$acentos = mysqli_query($conn, "SET NAMES 'utf8'"); //solucionar el problema de los acentos y eñes
date_default_timezone_set('America/Mexico_City');

if(!$conn){
	die("Connection failed: ". mysqli_connect_error());
}
