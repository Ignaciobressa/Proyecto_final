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
    require "../include/conexion.php";
  ?>

  <!--Menu Superior-->

  <?php
    require "../include/menu_back.php";
  ?>

<!--Formulario de edicion Quienes somos-->

<div class="container">
  <div id ="contenedor">
    <h1>Modificar pagina quienes_somos.html</h1>
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
          <input type="text" name="titulo" value="¿Quienes Somos?">
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
          <input type="text" name="subtitulo" value="Historia">
        </div>
      </div>

      <br>

      <!--Edicion del Texto Principal-->

      <div class="row">
        <div class="col-md-12">
          <textarea name="txtPrincipal" style="width: 1065px; height: 150px" >Cargando sólo sus sueños y una aventura por descubrir,
  Santiago Cecchin y María pisan suelo argentino allá por 1910, dejando atrás su tierra natal. Con claridad transmitieron su amor por la madre tierra, a quien se
  debía preservar con pasión y cariño artesanal. Allá por 1959 Don Pedro y Jorge Cecchin abrazan esta tradición familiar,
  apuntalando aquel sueño con sus productos naturales, respetando el encanto por la vida natural y protegiendo a “la madre de todos los frutos”. Hoy, Alberto Cecchin consolida
  más de 100 años de productos artesanales libres de agregados químicos y nos invita a soñar un lugar mejor, a vivir el paisaje, a disfrutar
  esta casa, a apasionarse por el mundo orgánico, un mundo… para todos.</textarea>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-1">
          <input type="submit" value="GUARDAR" name="submit_quieness">
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-1">
          <input type="reset" value="Limpiar">
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
