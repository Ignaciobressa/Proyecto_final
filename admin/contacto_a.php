<!DOCTYPE html>
<html lang="el">
<head>
  <title>Bodega Familia Cecchin en la Patagonia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/contacto_a.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <!--Conexion con la base de Datos-->

  <?php

    session_start();

    if(!isset($_SESSION['ingresoAdmin'])){
      //Session no iniciada
      header('Location: admin_login.php?alt=4');
    }

    require "../include/conexion.php";

    $data_queryContacto = mysqli_query($link, "SELECT * FROM BEcontacto WHERE id = 1;");
    $data_BEcontacto = $data_queryContacto->fetch_array(MYSQLI_ASSOC);

  ?>

  <!--Menu Superior-->

  <?php
    require "../include/menu_back.php";
  ?>

  <div class="container">
    <div id ="contenedor">
      <h1>Modificar pagina contacto.php</h1>
      <br>

      <form class="modificar" action="../include/upload_backend_mod.php" method="post">

        <!--Edicion de Titulo-->

        <div clas="row">
          <div class="col-md-12">
            <label>Titulo de pagina</label>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <input type="text" name="tituloCon" value="<?php echo $data_BEcontacto['tituloCon']; ?>">
          </div>
        </div>

        <br>

        <!--Edicion de Subtitulo-->

        <div clas="row">
          <div class="col-md-12">
            <label>Subtitulo</label>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <input type="text" name="subtituloCon" value="<?php echo $data_BEcontacto['subtituloCon']; ?>">
          </div>
        </div>

        <br>

        <!--Edicion del Texto Principal-->

        <div class="row">

          <div class="col-md-12">
            <label>Nombre datos Formulario de contacto</label>
          </div>

        </div>


        <div class="row">

          <div class="col-md-12">
            <input type="text" name="nombreCon" value="<?php echo $data_BEcontacto['nombreCon']; ?>">
          </div>

        </div>

        <div class="row">

          <div class="col-md-12">
            <input type="text" name="emailCon" value="<?php echo $data_BEcontacto['emailCon']; ?>">
          </div>

        </div>

        <div class="row">

          <div class="col-md-12">
            <input type="text" name="telefonoCon" value="<?php echo $data_BEcontacto['telefonoCon']; ?>">
          </div>

        </div>

        <div class="row">

          <div class="col-md-12">
            <input type="text" name="empresaCon" value="<?php echo $data_BEcontacto['empresaCon']; ?>">
          </div>

        </div>

        <div class="row">

          <div class="col-md-12">
            <input type="text" name="mensajeCon" value="<?php echo $data_BEcontacto['mensajeCon']; ?>">
          </div>

        </div>

        <br>

        <div class="row">
          <div class="col-md-5">
          </div>
          <div class="col-md-1">
            <input type="hidden" name="Pag" value="5">
            <input type="submit" value="Subir Cambios" name="submit_quieness">
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-5">
          </div>
        </div>

      </form>

    </div>

    <!--Footer del back end-->

    <?php
      require "../include/footer_back.php";
    ?>

  </div>

</body>
</html>
