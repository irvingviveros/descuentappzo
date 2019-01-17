<?php

if (isset($_POST['addp-submit'])) {
  require 'dbh.inc.php';

  $nombreNegocio = mysqli_real_escape_string($conn, $_POST['nomN']);          //nombre negocio
  $tipoNegocio = mysqli_real_escape_string($conn, $_POST['tipoN']);           //tipo negocio
  $tituloPromo = mysqli_real_escape_string($conn, $_POST['titP']);          //título promoción
  $diaPromo = mysqli_real_escape_string($conn, $_POST['diaP']);               //día promoción
  $direccionNegocio = mysqli_real_escape_string($conn, $_POST['dirN']);        //dirección negocio
  $faceNegocio = mysqli_real_escape_string($conn, $_POST['faceN']);            //enlace facebook
  $birthdayPromo = mysqli_real_escape_string($conn, $_POST['birthdayN']);     //es una promoción de cumpleaños?
  //imagen
  $uploadDirRest = '../images/uploads/restaurantes/';
  $uploadDirBar = '../images/uploads/bares/';
  $uploadDirCafe = '../images/uploads/cafes/';
  $file = $_FILES['file'];
  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize= $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));
  $allowed = array('jpg', 'jpeg', 'png');

  if (in_array($fileActualExt, $allowed)){
    if ($fileError === 0){
      if ($fileSize < 3000000){
        $fileNameNew = uniqid('', true).".".$fileActualExt;
        if ($tipoNegocio == "restaurante"){
          $fileDestination = $uploadDirRest.$fileNameNew;
          move_uploaded_file($fileTmpName, $fileDestination);
          $fileDestinationFinal = 'images/uploads/restaurantes/'.$fileNameNew;
        } else if ($tipoNegocio == "bar"){
          $fileDestination = $uploadDirBar.$fileNameNew;
          move_uploaded_file($fileTmpName, $fileDestination);
          $fileDestinationFinal = 'images/uploads/bares/'.$fileNameNew;
        } else if ($tipoNegocio == "cafe"){
          $fileDestination = $uploadDirCafe.$fileNameNew;
          move_uploaded_file($fileTmpName, $fileDestination);
          $fileDestinationFinal = 'images/uploads/cafes/'.$fileNameNew;
        }

        $sql = "INSERT INTO images (nom_i, dir_i) VALUES ('$fileNameNew', '$fileDestinationFinal');";
        if (mysqli_query($conn, $sql)) {
            header("Location: ../newpromo.php?newpromo=success");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

      } else {
        echo "Your file is too big!";
      }
    } else{
      echo "There was an error uploading your file!";
    }
  } else {
    echo "You cannot upload files of this type!";
  }

  //validaciones
  if (empty($nombreNegocio) || empty($tipoNegocio) || empty($tituloPromo) ||
        empty($diaPromo) || empty($direccionNegocio) || empty($faceNegocio)){
    header("Location: ../newpromo.php?error=emptyfields&nomN=".$nombreNegocio."&titP=".$tituloPromo);
    exit();
  }

  //se insertan placeholders "?" para no mostrar esa información en el header
  //se insertan los datos introducidos a la bd

  $sql = "INSERT INTO promocion (titulo_p, id_d1, id_i1, birthday_p) VALUES ('$tituloPromo', '$diaPromo', last_insert_id(), '$birthdayPromo');";
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
