<?php
    $actualDay = date("l");     //día actual
    if ($actualDay == 'Monday'){

      $local = "cafe";
      $dia = "Lunes";
      //prepare a query
      $sql = "SELECT n.*, p.*, d.*, i.*  FROM negocio AS n
      INNER JOIN promocion AS p ON n.id_p1 = p.id_p
      INNER JOIN dia AS d ON p.id_d1 = d.id_d
      INNER JOIN images AS i ON p.id_i1 = i.id_i
      WHERE n.tipo_n = ? AND d.dia_d = ?;";            //consulta
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

    } else if ($actualDay == 'Tuesday'){

      $local = "cafe";
      $dia = "Martes";
      //prepare a query
      $sql = "SELECT n.*, p.*, d.*, i.*  FROM negocio AS n
      INNER JOIN promocion AS p ON n.id_p1 = p.id_p
      INNER JOIN dia AS d ON p.id_d1 = d.id_d
      INNER JOIN images AS i ON p.id_i1 = i.id_i
      WHERE n.tipo_n = ? AND d.dia_d = ?;";            //consulta
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

    } else if($actualDay == 'Wednesday'){

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
          mysqli_stmt_bind_param($stmt, "si", $local, $dia);
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

    } else if ($actualDay == 'Thursday'){

      $local = "cafe";
      $dia = "Jueves";
      //prepare a query
      $sql = "SELECT n.*, p.*, d.*, i.*  FROM negocio AS n
      INNER JOIN promocion AS p ON n.id_p1 = p.id_p
      INNER JOIN dia AS d ON p.id_d1 = d.id_d
      INNER JOIN images AS i ON p.id_i1 = i.id_i
      WHERE n.tipo_n = ? AND d.dia_d = ?;";            //consulta
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

    } else if ($actualDay == 'Friday'){

      $local = "cafe";
      $dia = "Viernes";
      //prepare a query
      $sql = "SELECT n.*, p.*, d.*, i.*  FROM negocio AS n
      INNER JOIN promocion AS p ON n.id_p1 = p.id_p
      INNER JOIN dia AS d ON p.id_d1 = d.id_d
      INNER JOIN images AS i ON p.id_i1 = i.id_i
      WHERE n.tipo_n = ? AND d.dia_d = ?;";            //consulta
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
            <div class="slide">
              <div class="contenedor">
            <div class="card card-s">
              <img class="card-img-middle img-fluid" src="images/food2.jpg" alt="Card image cap">
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

    } else if ($actualDay == 'Saturday'){

      $local = "cafe";
      $dia = "6";
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
          mysqli_stmt_bind_param($stmt, "si", $local, $dia);
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

    } else if ($actualDay == 'Sunday'){

      $local = "cafe";
      $dia = "Domingo";
      //prepare a query
      $sql = "SELECT n.*, p.*, d.*, i.*  FROM negocio AS n
      INNER JOIN promocion AS p ON n.id_p1 = p.id_p
      INNER JOIN dia AS d ON p.id_d1 = d.id_d
      INNER JOIN images AS i ON p.id_i1 = i.id_i
      WHERE n.tipo_n = ? AND d.dia_d = ?;";            //consulta
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
    }
 ?>
