<!DOCTYPE html>
<html lang="el">
<head>
  <title>Bodega Familia Cecchin en la Patagonia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <?php

    require 'include/conexion.php';

    $data_queryAdmin = mysqli_query($link, "SELECT * FROM BEadmin WHERE id = 1;");
    $data_BEadmin = $data_queryAdmin->fetch_array(MYSQLI_ASSOC);
  ?>

</head>
<body background="imagenes/<?php echo $data_BEadmin['imgFondo']; ?>" style="background-repeat: round; background-attachment: fixed;">

<?php

  //Menu superior y alertas varias, más la conexion a la base de datos y la extraccion de los datos

  require 'include/menu.php';
  if(isset($_GET['alt'])){
    if($_GET['alt'] == 2){
      echo '<script lenguage="javascript">alert("Ingreso Exitoso!!!");</script>';
    } elseif($_GET['alt'] == 3){
      echo '<script lenguage="javascript">alert("Usted se ha registrado exitosamente!!!");</script>';
    } elseif($_GET['alt'] == 6){
      echo '<script lenguage="javascript">alert("Sesión cerrada exitosamente!!!");</script>';
    }
  }

  $data_queryInicio = mysqli_query($link, "SELECT * FROM BEinicio WHERE id = 1;");
  $data_BEinicio = $data_queryInicio->fetch_array(MYSQLI_ASSOC);

 ?>

<!-- Logo -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div id="encabezado">
        <div class="logo">
          <img src="imagenes/logo_vino.gif">
        </div>
      </div>
    </div>
  </div>
</div>

<br>
<div id="myCarousel" class="carousel slide" data-ride="carousel" align="center">
  <!-- Indicadores -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Contenedores para slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="imagenes/<?php echo $data_BEinicio['imgCar1']; ?>" alt="Vino">
      <div class="carousel-caption">
        <h3 style="color: khaki"><?php echo $data_BEinicio['txtCar1']; ?></h3>
      </div>
    </div>
    <div class="item">
      <img src="imagenes/<?php echo $data_BEinicio['imgCar2']; ?>" alt="vinos organicos">
      <div class="carousel-caption">
        <h3 style="text-align: left; color: khaki"><?php echo $data_BEinicio['txtCar2']; ?></h3>
      </div>
    </div>
    <div class="item">
      <img src="imagenes/<?php echo $data_BEinicio['imgCar3']; ?>" alt="cava vinos">
      <div class="carousel-caption">
        <h3 style="color: khaki"><?php echo $data_BEinicio['txtCar3']; ?></h3>
      </div>
    </div>
  </div>

  <!-- Controles derecha e izquierda -->

  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>

<br>

<br>

<div id="contenedor">
  <div class="row">
    <div class="col-md-12">
      <div class="texto_principal">
        <h1><strong><?php echo $data_BEinicio['tituloTxtPrin']; ?></strong></h1>
          <br>
          <p><em><?php echo $data_BEinicio['txtPrincipal']; ?></em></p>
      </div>
    </div>
  </div>
</div>
<br>
<div class="separador">
</div>

<?php
  require 'include/footer.php';
?>

</body>
</html>
