<!DOCTYPE html>

<html lang="el">
<head>
  <title>Bodega Familia Cecchin en la Patagonia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/nuestros_productos_a.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <!--Conexion con la base de datos-->

  <?php

    session_start();
    
    if(!isset($_SESSION['ingresoAdmin'])){
      //Session no iniciada
      header('Location: admin_login.php?alt=4');
    }

    require "../include/conexion.php";

    $data_queryNuestrosP = mysqli_query($link, "SELECT * FROM BENuestrosP WHERE id = 1;");
    $data_BENuestrosP = $data_queryNuestrosP->fetch_array(MYSQLI_ASSOC);


  ?>

  <!--Menu Superior-->

  <?php
    require "../include/menu_back.php";
  ?>

<div class="container">
  <div id="contenedor">

    <h1>Modificar pagina nuestros_productos.php</h1>

    <br>

    <form class="modificar" action="../include/upload_backend_mod.php" method="post">

      <!--Modificacion titulo Nuestros Productos-->

      <div class="row">

        <div class="col-md-12">
          <label>Titulo de página</label>
          <br>
          <input type="text" name="tituloNP" value="<?php echo $data_BENuestrosP['tituloNP']; ?>">
        </div>

      </div>

      <br>

      <div class="row">

        <!--Modificacion subtitulo Nuestros Productos-->

        <div class="col-md-12">
          <label>Subtitulo de página</label>
          <br>
          <input type="text" name="subtituloNP" value="<?php echo $data_BENuestrosP['subtituloNP']; ?>">
        </div>

      </div>

      <br>

      <div class="row">

        <!--Modificacion del texto explicativo de Nuestros Productos-->

        <div class="col-md-12">
          <label>Texto Explicativo</label>
          <textarea name="txtExp" style="width: 1065px; height: 150px"><?php echo $data_BENuestrosP['txtExp']; ?></textarea>
        </div>

      </div>

      <br>

      <div class="row">

        <!--Modificacion de titulo Varietales de Nuestros Productos-->

        <div class="col-md-12">
          <label>Titulo varietales</label>
          <input type="text" name="titVar" value="<?php echo $data_BENuestrosP['titVar']; ?>">
        </div>

      </div>

      <br>

      <div class="row">

        <div class="col-md-5">
        </div>

        <div class="col-md-1">
          <input type="hidden" name="Pag" value="4">
          <input type="submit" value="Subir Cambios" href="../admin/admin.html">
        </div>

        <div class="col-md-1">
        </div>

        <div class="col-md-5">
        </div>

      </div>


  </form>

</div>
<br>

<div class="separador">
</div>

<!--Footer del Back End-->

<?php
  require "../include/footer_back.php";
?>

</body>
</html>
