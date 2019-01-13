<?php
require "header.php";
require 'includes/dbh.inc.php';
?>

<body>
<h1 class="text-center mt-3">DOMINGO</h1>

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

      $sql = "SELECT n.*, p.*, d.* FROM negocio AS n INNER JOIN promocion AS p ON n.id_p1 = p.id_p INNER JOIN dia AS d ON p.id_d1 = id_d WHERE n.tipo_n = 'restaurante' AND d.dia_d = 'Domingo';";            //consulta
      $result = mysqli_query($conn, $sql);          //la consulta conecta a la BD
      $resultCheck = mysqli_num_rows($result);      //guarda el núm de filas que existen
      if ($resultCheck > 0 ){                       //comprueba si hay información
          while($row = mysqli_fetch_assoc($result)){
            echo '

            <div class="container mt-3 pt-3 pb-3" style="background-color: #F2F2F2">
              <div class="list-group">
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

      $sql = "SELECT n.*, p.*, d.* FROM negocio AS n INNER JOIN promocion AS p ON n.id_p1 = p.id_p INNER JOIN dia AS d ON p.id_d1 = id_d WHERE n.tipo_n = 'cafe' AND d.dia_d = 'Domingo';";            //consulta
      $result = mysqli_query($conn, $sql);          //la consulta conecta a la BD
      $resultCheck = mysqli_num_rows($result);      //guarda el núm de filas que existen
      if ($resultCheck > 0 ){                       //comprueba si hay información
          while($row = mysqli_fetch_assoc($result)){
            echo '

            <div class="container mt-3 pt-3 pb-3" style="background-color: #F2F2F2">
              <div class="list-group">
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

      $sql = "SELECT n.*, p.*, d.* FROM negocio AS n INNER JOIN promocion AS p ON n.id_p1 = p.id_p INNER JOIN dia AS d ON p.id_d1 = id_d WHERE n.tipo_n = 'bar' AND d.dia_d = 'Domingo';";            //consulta
      $result = mysqli_query($conn, $sql);          //la consulta conecta a la BD
      $resultCheck = mysqli_num_rows($result);      //guarda el núm de filas que existen
      if ($resultCheck > 0 ){                       //comprueba si hay información
          while($row = mysqli_fetch_assoc($result)){
            echo '

            <div class="container mt-3 pt-3 pb-3" style="background-color: #F2F2F2">
              <div class="list-group">
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
