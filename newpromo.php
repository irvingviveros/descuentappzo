<?php
require "header.php";
require 'includes/dbh.inc.php';
?>

<body>

  <div class="etiqueta-default etiqueta-agregarPromo" style="margin-top: 25px;">
    <span class="etiqueta-texto">AÑADIR PROMOCIÓN</span>
  </div>

  <form action="includes/addp.inc.php" method="post" enctype="multipart/form-data">
    <div class="container form-group col-md-5 mt-4">
      <input type="text" class="form-control" name="nomN" placeholder="Nombre del negocio">
    </div>

    <div class="container form-group col-sm-5">
      <select class="form-control" name="tipoN">
        <option selected disabled>Tipo de negocio</option>
        <option value="bar">Bar</option>
        <option value="cafe">Postres y café</option>
        <option value="restaurante">Restaurante</option>
      </select>
    </div>

    <div class="container form-group col-md-5">
      <input type="text" class="form-control" name="titP" placeholder="Encabezado de la promoción">
    </div>

    <div class="container form-group col-sm-5">
      <select class="form-control" name="diaP">
        <option selected disabled>Día de la promoción</option>
        <option value="1">Lunes</option>
        <option value="2">Martes</option>
        <option value="3">Miércoles</option>
        <option value="4">Jueves</option>
        <option value="5">Viernes</option>
        <option value="6">Sábado</option>
        <option value="7">Domingo</option>
        <option value="8">Todos los días</option>
      </select>
    </div>

    <div class="container form-group col-md-5">
      <input type="text" class="form-control" name="dirN" placeholder="Dirección (Enlace Google Maps)">
    </div>

    <div class="container form-group col-md-5">
      <input type="text" class="form-control" name="faceN" placeholder="Facebook (Enlace)">
    </div>

    <div class="container form-group col-md-5">
      <label for="controlFile1">Imágen de la promoción</label>
      <input type="file" class="form-control-file" name="file" id="controlFile1">
    </div>


    <div class="container form-group col-md-2">
      <button type="submit" class="form-control " name="addp-submit">AÑADIR</button>
    </div>
  </div>
</form>

<?php
require "footer.php";
?>
