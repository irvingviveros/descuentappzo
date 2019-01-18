<?php
require "header.php";
require '../includes/dbh.inc.php';
?>

<body>
  <div class="etiqueta-default bg-light mt-4">
    <span class="etiqueta-texto">MIÉRCOLES</span>
  </div>

<!-- <div class="etiqueta-default etiqueta-restaurantes" style="margin-top: 2em">
  <span class="etiqueta-texto">RESTAURANTES</span>
</div> -->


<div class="container mt-4 pt-3 pb-3 link-color">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="rest-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Restaurante</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="cafe-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Café</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="bar-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Bar</a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="rest-tab">

      <?php

      $local = "restaurante";
      $dia = "3";
      //prepare a query
      $sql = "SELECT n.*, p.*, d.*, i.*  FROM negocio AS n
      INNER JOIN promocion AS p ON n.id_p1 = p.id_p
      INNER JOIN dia AS d ON p.id_d1 = d.id_d
      INNER JOIN images AS i ON p.id_i1 = i.id_i
      WHERE n.tipo_n = ? AND d.id_d = ?;";            //consulta
      //create a prepared statement
      $stmt = mysqli_stmt_init($conn);
      //prepare the prepared statement
      if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL STATEMENT FAILED";
      } else {
          //bind parameters to the placeholder. s = string, i = integer, b = boolean
          mysqli_stmt_bind_param($stmt, "ss", $local, $dia);
          //run parameters inside database
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);

          while($row = mysqli_fetch_assoc($result)){                                  //desplegará la info de la bd si es que aún hay

            echo '
            <div class="container mt-3 pt-3 pb-3" style="background-color: #F2F2F2">
              <div class="list-group">
              <img class="card-img-middle img-fluid" src="'.$row['dir_i'].'" alt="Card image cap">
                <div class="list-group-item list-group-item-action card-title">'. $row['nombre_n'] . '</div>
                <div class="list-group-item list-group-item-action text-center">'. $row['titulo_p'] . '</div>
                <div class="list-group-item">
                  <div class="row">
                    <a href="'. $row['face_n'] . '" class="col text-center border-right">
                      <i class="fab fa-facebook-square"></i>
                    </a>
                    <a href="'. $row['dir_n'] . '" class="col text-center">
                      <i class="fas fa-map-marker-alt"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            ';
          }
      }
       ?>
    </div>

    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="cafe-tab">

      <?php

      $local = "cafe";
      $dia = "3";
      //prepare a query
      $sql = "SELECT n.*, p.*, d.*, i.*  FROM negocio AS n
      INNER JOIN promocion AS p ON n.id_p1 = p.id_p
      INNER JOIN dia AS d ON p.id_d1 = d.id_d
      INNER JOIN images AS i ON p.id_i1 = i.id_i
      WHERE n.tipo_n = ? AND d.id_d = ?;";            //consulta
      //create a prepared statement
      $stmt = mysqli_stmt_init($conn);
      //prepare the prepared statement
      if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL STATEMENT FAILED";
      } else {
          //bind parameters to the placeholder. s = string, i = integer, b = boolean
          mysqli_stmt_bind_param($stmt, "ss", $local, $dia);
          //run parameters inside database
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);

          while($row = mysqli_fetch_assoc($result)){                                  //desplegará la info de la bd si es que aún hay

            echo '
            <div class="container mt-3 pt-3 pb-3" style="background-color: #F2F2F2">
              <div class="list-group">
                <img class="card-img-middle img-fluid" src="'.$row['dir_i'].'" alt="Card image cap">
                <div class="list-group-item list-group-item-action card-title">'. $row['nombre_n'] . '</div>
                <div class="list-group-item list-group-item-action text-center">'. $row['titulo_p'] . '</div>
                <div class="list-group-item">
                  <div class="row">
                    <a href="'. $row['face_n'] . '" class="col text-center border-right">
                      <i class="fab fa-facebook-square"></i>
                    </a>
                    <a href="'. $row['dir_n'] . '" class="col text-center">
                      <i class="fas fa-map-marker-alt"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            ';
          }
      }

       ?>

    </div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="bar-tab">

      <?php

      $local = "bar";
      $dia = "3";
      //prepare a query
      $sql = "SELECT n.*, p.*, d.*, i.*  FROM negocio AS n
      INNER JOIN promocion AS p ON n.id_p1 = p.id_p
      INNER JOIN dia AS d ON p.id_d1 = d.id_d
      INNER JOIN images AS i ON p.id_i1 = i.id_i
      WHERE n.tipo_n = ? AND d.id_d = ?;";            //consulta
      //create a prepared statement
      $stmt = mysqli_stmt_init($conn);
      //prepare the prepared statement
      if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL STATEMENT FAILED";
      } else {
          //bind parameters to the placeholder. s = string, i = integer, b = boolean
          mysqli_stmt_bind_param($stmt, "ss", $local, $dia);
          //run parameters inside database
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);

          while($row = mysqli_fetch_assoc($result)){                                  //desplegará la info de la bd si es que aún hay

            echo '
            <div class="container mt-3 pt-3 pb-3" style="background-color: #F2F2F2">
              <div class="list-group">
                <img class="card-img-middle img-fluid" src="'.$row['dir_i'].'" alt="Card image cap">
                <div class="list-group-item list-group-item-action card-title">'. $row['nombre_n'] . '</div>
                <div class="list-group-item list-group-item-action text-center">'. $row['titulo_p'] . '</div>
                <div class="list-group-item">
                  <div class="row">
                    <a href="'. $row['face_n'] . '" class="col text-center border-right">
                      <i class="fab fa-facebook-square"></i>
                    </a>
                    <a href="'. $row['dir_n'] . '" class="col text-center">
                      <i class="fas fa-map-marker-alt"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            ';
          }
      }

       ?>

    </div>
  </div>
</div>



</body>

<?php
require "footer.php";
?>
