<?php

if (isset($_POST['addp-submit'])) {
  require 'dbh.inc.php';

  $nombreNegocio = $_POST['nomN'];          //nombre negocio
  $tipoNegocio = $_POST['tipoN'];           //tipo negocio
  $tituloPromo = $_POST['titP'];            //título promoción
  $diaPromo = $_POST['diaP'];               //día promoción
  $direccionNegocio = $_POST['dirN'];       //dirección negocio
  $faceNegocio = $_POST['faceN'];           //enlace facebook

  //validaciones
  if (empty($nombreNegocio) || empty($tipoNegocio) || empty($tituloPromo)
  || empty($diaPromo) || empty($direccionNegocio) || empty($faceNegocio)){
    header("Location: ../newpromo.php?error=emptyfields&nomN=".$nombreNegocio."&titP=".$tituloPromo);
    exit();
  }

  //se insertan placeholders "?" para no mostrar esa información en el header
  //se insertan los datos introducidos a la bd

  $sql = "INSERT INTO promocion (titulo_p, id_d1) VALUES ('$tituloPromo', '$diaPromo');";
  $sql .= "INSERT INTO negocio (nombre_n, tipo_n, dir_n, face_n, id_p1) VALUES ('$nombreNegocio', '$tipoNegocio', '$direccionNegocio', '$faceNegocio', last_insert_id());";

  if (mysqli_multi_query($conn, $sql)) {
      header("Location: ../newpromo.php?newpromo=success");
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
}
//impedir que el usuario acceda a esta página sin haber clickeado el botón de sign up
else {
  header("Location: ../newpromo.php");
  exit();
}
