<?php
require "header.php";
require 'includes/dbh.inc.php';
?>

<body>
<h1 class="text-center mt-2">Lunes</h1>

<div class="etiqueta-default etiqueta-restaurantes" style="margin-top: 2em">
  <span class="etiqueta-texto">RESTAURANTES</span>
</div>


<div class="container mt-4 pt-3 pb-3">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Restaurante</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Café</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Bar</a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

      <div class="container mt-4 pt-3 pb-3" style="background-color: #F2F2F2">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action"><h5>Promoción</h5></a>
          <a href="#" class="list-group-item list-group-item-action">Restaurante</a>
          <div class="list-group-item">
            <div class="row">
              <a href="http://fb.com" class="col text-center border-right">
                <i class="fab fa-facebook-square"></i>
              </a>
              <a href="http://google.com" class="col text-center">
                <i class="fas fa-map-marker-alt"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="container mt-4 pt-3 pb-3" style="background-color: #F2F2F2">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action"><h5>Promoción</h5></a>
          <a href="#" class="list-group-item list-group-item-action">Restaurante</a>
          <div class="list-group-item">
            <div class="row">
              <a href="http://fb.com" class="col text-center border-right">
                <i class="fab fa-facebook-square"></i>
              </a>
              <a href="http://google.com" class="col text-center">
                <i class="fas fa-map-marker-alt"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
  </div>
</div>



</body>

<?php
require "footer.php";
?>
