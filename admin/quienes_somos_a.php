<!DOCTYPE html>
<html lang="el">
<head>
  <title>Bodega Familia Cecchin en la Patagonia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/quienes_somos_a.css">
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

  //Menu Superior

    require "../include/menu_back.php";

    $data_queryQuienesS = mysqli_query($link, "SELECT * FROM BEQuienesS WHERE id = 1;");
    $data_BEQuienesS = $data_queryQuienesS->fetch_array(MYSQLI_ASSOC);

  ?>

<!--Formulario de edicion Quienes somos-->

<div class="container">
  <div id ="contenedor">
    <h1>Modificar pagina quienes_somos.php</h1>
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
          <input type="text" name="tituloQS" value="<?php echo $data_BEQuienesS['tituloQS']; ?>">
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
          <input type="text" name="subtituloQS" value="<?php echo $data_BEQuienesS['subtituloQS']; ?>">
        </div>
      </div>

      <br>

      <!--Edicion del Texto Principal-->

      <div class="row">
        <div class="col-md-12">
          <textarea name="txtPrincipalQS" style="width: 1065px; height: 150px" ><?php echo $data_BEQuienesS['txtPrincipalQS']; ?></textarea>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-5">
        </div>
        <div class="col-md-1">
          <input type="hidden" name="Pag" value="3">
          <input type="submit" value="Subir Cambios" name="submit_quieness">
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-5">
        </div>
      </div>

    </form>

  </div>
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
