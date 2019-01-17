<?php
require "header.php";
require 'includes/dbh.inc.php';
?>

<style media="screen">

@media (max-width: 737px) {
  #container-top-web{
    display: none;
  }
}

@media (min-width: 737px) {
  #container-top-mobile{
    display: none;
  }
}

</style>

<body>
  <div class="top-container">

    <!-- TOP Container for mobile -->

    <div id="container-top-mobile" class="container-fluid mb-2">
      <div class="etiqueta-destacados">
        <span class="etiqueta-texto-destacado">TOP</span>
      </div>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner row w-100 mx-auto">

          <div class="carousel-item col-md-4 active">
            <div class="card">
              <img class="card-img-top img-fluid" src="images/food1.jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">LE VLÚ</h4>
                <div class="card-header header-descatado">
                  <span class="list-group-item">Hamburguesa y malteada por $73</span>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><i class="far fa-calendar pr-3"></i>Jueves</li>
                  <li class="list-group-item link-color"> <a href="https://goo.gl/maps/26q61GNfTs52">
                    <i class="fas fa-map-marker-alt pr-3"></i>Ubicación</li></a>
                  <li class="list-group-item link-color"> <a href="https://www.facebook.com/levluhamburguesas/">
                    <i class="fab fa-facebook-square pr-3"></i></i>Página en Facebook</li></a>
                </ul>
              </div>
            </div>
          </div>

          <div class="carousel-item col-md-4">
            <div class="card">
              <img class="card-img-top img-fluid" src="images/food3.jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">McCarthy's</h4>
                <div class="card-header header-descatado">
                 <span class="list-group-item">Alitas a $4.90 c/u</span>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><i class="far fa-calendar pr-3"></i>Lunes</li>
                  <li class="list-group-item link-color"> <a href="https://goo.gl/maps/YcGw3VjapXr">
                    <i class="fas fa-map-marker-alt pr-3"></i>Ubicación</li></a>
                  <li class="list-group-item link-color"> <a href="https://www.facebook.com/mccarthysbocadelrio/">
                    <i class="fab fa-facebook-square pr-3"></i></i>Página en Facebook</li></a>
                </ul>
              </div>
            </div>
          </div>

          <div class="carousel-item col-md-4">
            <div class="card">
              <img class="card-img-top img-fluid" src="images/food3.jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">KONTAINER</h4>
                <div class="card-header header-descatado">
                  <span class="list-group-item">Bebidas preparadas al 2x1</span>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><i class="far fa-calendar pr-3"></i>Jueves</li>
                  <li class="list-group-item link-color"> <a href="https://goo.gl/maps/bJ2jufXjymp">
                    <i class="fas fa-map-marker-alt pr-3"></i>Ubicación</li></a>
                  <li class="list-group-item link-color"> <a href="https://www.facebook.com/kontaineroficial/">
                    <i class="fab fa-facebook-square pr-3"></i></i>Página en Facebook</li></a>
                </ul>
              </div>
            </div>
          </div>

        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

  <!-- TOP CARD CONTAINER FOR WEB -->
  <div id="container-top-web">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="images/food1.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="bg-dark d-inline-block">Imagen 1</h5>
            <br>
            <p class="bg-dark d-inline-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/food2.jpg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="bg-dark d-inline-block">Imagen 2</h5>
            <br>
            <p class="bg-dark d-inline-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/food3.jpg" alt="Mariscos">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="bg-dark d-inline-block">Mariscos en Mardel</h5>
            <br>
            <p class="bg-dark d-inline-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </div> <!-- Fin container-top-web -->
</div> <!-- Fin container -->

<!-- MIDDLE CARD CONTAINER FOR MOBILE -->

<div class="middle-container">

  <!-- promo del día -->


  <!-- fin promo por día -->

  <!-- divisón promo por restaurante -->
  <div class="etiqueta-default etiqueta-restaurantes">
    <span class="etiqueta-texto">RESTAURANTES</span>
  </div>
  <div class="card-container-default">
    <div class="slideshow">

      <?php
        include 'includes/cardr.inc.php';
       ?>

    </div>
  </div>

  <!-- fin promo Restaurantes -->

  <!-- promo por café -->
  <div class="etiqueta-default etiqueta-cafe">
    <span class="etiqueta-texto">CAFÉ Y POSTRES</span>
  </div>
  <div class="card-container-default">
    <div class="slideshow">

      <?php
        include 'includes/cardc.inc.php';
       ?>

    </div>
  </div>

  <!-- fin promo café -->

  <!-- promo por bares -->
  <div class="etiqueta-default etiqueta-bares">
    <span class="etiqueta-texto">BARES</span>
  </div>
  <div class="card-container-default">
    <div class="slideshow">

      <?php
        include 'includes/cardb.inc.php';
       ?>

    </div>
  </div>

  <!-- fin promo bares -->

  <div class="etiqueta-default etiqueta-promoDelDia">
    <span class="etiqueta-texto">TODOS LOS DÍAS</span>
  </div>
  <div class="card-container-default">


      <div class="container pt-3 pb-3 link-color">
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
            <div class="slideshow">
              <?php
                    $local = "restaurante";
                    $dia = "8";
                    $birthdayPromo = 0;
                    //prepare a query
                    $sql = "SELECT n.*, p.*, d.*, i.*  FROM negocio AS n
                    INNER JOIN promocion AS p ON n.id_p1 = p.id_p
                    INNER JOIN dia AS d ON p.id_d1 = d.id_d
                    INNER JOIN images AS i ON p.id_i1 = i.id_i
                    WHERE n.tipo_n = ? AND d.id_d = ? AND p.birthday_p = ?;";            //consulta
                    //create a prepared statement
                    $stmt = mysqli_stmt_init($conn);
                    //prepare the prepared statement
                    if(!mysqli_stmt_prepare($stmt, $sql)){
                      echo "SQL STATEMENT FAILED";
                    } else {
                        //bind parameters to the placeholder. s = string, i = integer, b = boolean
                        mysqli_stmt_bind_param($stmt, "ssi", $local, $dia, $birthdayPromo);
                        //run parameters inside database
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        while($row = mysqli_fetch_assoc($result)){                                  //desplegará la info de la bd si es que aún hay

                          echo '
                          <div class="slide">
                            <div class="contenedor">
                          <div class="card card-s">
                            <img class="card-img-middle img-fluid" src="'.$row['dir_i'].'" alt="Card image cap">
                            <div class="card-body">
                              <h4 class="card-title">'. $row['nombre_n'] . '</h4>
                              <div class="card-header">
                                '. $row['titulo_p'] . '
                              </div>
                              <ul class="list-group list-group-flush">
                                <li class="list-group-item list-group-center"></i>'. $row['dia_d'] . '</li>
                                <div class="list-group-item">
                                  <div class="row link-color">
                                    <a href="'. $row['face_n'] . '" class="col">
                                      <div class="col">
                                        <div class="row justify-content-center">
                                            <i class="fab fa-facebook-square"></i>
                                        </div>
                                        <div class="row justify-content-center">
                                          <span>Facebook</span>
                                        </div>
                                      </div>
                                    </a>

                                    <a href="'. $row['dir_n'] . '" class="col">
                                      <div class="col">
                                        <div class="row justify-content-center">
                                          <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="row justify-content-center">
                                          <span class="link-color">Ubicación</span>
                                        </div>
                                      </div>
                                    </a>
                                  </div>
                                </div>
                                <!-- FIN LIST-GROUP ITEM -->
                              </ul>
                            </div>
                          </div>
                          </div>
                        </div>';
                        }
                    }
               ?>
           </div>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="cafe-tab">
            <div class="slideshow">
            <?php
                  $local = "cafe";
                  $dia = "8";
                  $birthdayPromo = 0;
                  //prepare a query
                  $sql = "SELECT n.*, p.*, d.*, i.*  FROM negocio AS n
                  INNER JOIN promocion AS p ON n.id_p1 = p.id_p
                  INNER JOIN dia AS d ON p.id_d1 = d.id_d
                  INNER JOIN images AS i ON p.id_i1 = i.id_i
                  WHERE n.tipo_n = ? AND d.id_d = ? AND p.birthday_p = ?;";            //consulta
                  //create a prepared statement
                  $stmt = mysqli_stmt_init($conn);
                  //prepare the prepared statement
                  if(!mysqli_stmt_prepare($stmt, $sql)){
                    echo "SQL STATEMENT FAILED";
                  } else {
                      //bind parameters to the placeholder. s = string, i = integer, b = boolean
                      mysqli_stmt_bind_param($stmt, "ssi", $local, $dia, $birthdayPromo);
                      //run parameters inside database
                      mysqli_stmt_execute($stmt);
                      $result = mysqli_stmt_get_result($stmt);
                      while($row = mysqli_fetch_assoc($result)){                                  //desplegará la info de la bd si es que aún hay

                        echo '
                        <div class="slide">
                          <div class="contenedor">
                        <div class="card card-s">
                          <img class="card-img-middle img-fluid" src="'.$row['dir_i'].'" alt="Card image cap">
                          <div class="card-body">
                            <h4 class="card-title">'. $row['nombre_n'] . '</h4>
                            <div class="card-header">
                              '. $row['titulo_p'] . '
                            </div>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item list-group-center"></i>'. $row['dia_d'] . '</li>
                              <div class="list-group-item">
                                <div class="row link-color">
                                  <a href="'. $row['face_n'] . '" class="col">
                                    <div class="col">
                                      <div class="row justify-content-center">
                                          <i class="fab fa-facebook-square"></i>
                                      </div>
                                      <div class="row justify-content-center">
                                        <span>Facebook</span>
                                      </div>
                                    </div>
                                  </a>

                                  <a href="'. $row['dir_n'] . '" class="col">
                                    <div class="col">
                                      <div class="row justify-content-center">
                                        <i class="fas fa-map-marker-alt"></i>
                                      </div>
                                      <div class="row justify-content-center">
                                        <span class="link-color">Ubicación</span>
                                      </div>
                                    </div>
                                  </a>
                                </div>
                              </div>
                              <!-- FIN LIST-GROUP ITEM -->
                            </ul>
                          </div>
                        </div>
                        </div>
                      </div>';
                      }
                  }
             ?>
           </div>
          </div>
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="bar-tab">
            <div class="slideshow">
            <?php
                  $local = "bar";
                  $dia = "8";
                  $birthdayPromo = 0;
                  //prepare a query
                  $sql = "SELECT n.*, p.*, d.*, i.*  FROM negocio AS n
                  INNER JOIN promocion AS p ON n.id_p1 = p.id_p
                  INNER JOIN dia AS d ON p.id_d1 = d.id_d
                  INNER JOIN images AS i ON p.id_i1 = i.id_i
                  WHERE n.tipo_n = ? AND d.id_d = ?;  AND p.birthday_p = ?";            //consulta
                  //create a prepared statement
                  $stmt = mysqli_stmt_init($conn);
                  //prepare the prepared statement
                  if(!mysqli_stmt_prepare($stmt, $sql)){
                    echo "SQL STATEMENT FAILED";
                  } else {
                      //bind parameters to the placeholder. s = string, i = integer, b = boolean
                      mysqli_stmt_bind_param($stmt, "ssi", $local, $dia, $birthdayPromo);
                      //run parameters inside database
                      mysqli_stmt_execute($stmt);
                      $result = mysqli_stmt_get_result($stmt);
                      while($row = mysqli_fetch_assoc($result)){                                  //desplegará la info de la bd si es que aún hay

                        echo '
                        <div class="slide">
                          <div class="contenedor">
                        <div class="card card-s">
                          <img class="card-img-middle img-fluid" src="'.$row['dir_i'].'" alt="Card image cap">
                          <div class="card-body">
                            <h4 class="card-title">'. $row['nombre_n'] . '</h4>
                            <div class="card-header">
                              '. $row['titulo_p'] . '
                            </div>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item list-group-center"></i>'. $row['dia_d'] . '</li>
                              <div class="list-group-item">
                                <div class="row link-color">
                                  <a href="'. $row['face_n'] . '" class="col">
                                    <div class="col">
                                      <div class="row justify-content-center">
                                          <i class="fab fa-facebook-square"></i>
                                      </div>
                                      <div class="row justify-content-center">
                                        <span>Facebook</span>
                                      </div>
                                    </div>
                                  </a>

                                  <a href="'. $row['dir_n'] . '" class="col">
                                    <div class="col">
                                      <div class="row justify-content-center">
                                        <i class="fas fa-map-marker-alt"></i>
                                      </div>
                                      <div class="row justify-content-center">
                                        <span class="link-color">Ubicación</span>
                                      </div>
                                    </div>
                                  </a>
                                </div>
                              </div>
                              <!-- FIN LIST-GROUP ITEM -->
                            </ul>
                          </div>
                        </div>
                        </div>
                      </div>';
                      }
                  }
             ?>
           </div>
          </div>
        </div>
      </div>

  </div>

</div>

<?php
require "footer.php";
?>
