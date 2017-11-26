<!DOCTYPE html>
<html lang="el">
<head>
  <title>Bodega Familia Cecchin en la Patagonia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/estilos_a.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <!--Conexion con base de datos-->

  <?php

    session_start();

    require "../include/conexion.php";
    
    if(!isset($_SESSION['ingresoAdmin'])){
      //Session no iniciada
      header('Location: admin_login.php?alt=4');
    }

    $data_queryInicio = mysqli_query($link, "SELECT * FROM BEinicio WHERE id = 1;");
    $data_BEinicio = $data_queryInicio->fetch_array(MYSQLI_ASSOC);

  ?>

  <!--Menu Superior-->

  <?php
    require "../include/menu_back.php";
  ?>

  <div class="container">
    <div id="contenedor">

      <h1>Modificar pagina index.php</h1>

      <br>

      <form class="modificar" action="../include/upload_backend_mod.php" method="post">

        <div class="row">

          <!--Modificar imagenes del Carousel-->

          <div class="col-md-4">
            <label>Imagen 1 carousel</label>
            <div class="logo">
              <img src="../imagenes/<?php echo $data_BEinicio['imgCar1']; ?>" high="150px" width="150px">
            </div>
            <br>
            <input type="file" name="imgCar1">
          </div>

          <div class="col-md-4">
            <label>Imagen 2 carousel</label>
              <div class="logo">
                <img src="../imagenes/<?php echo $data_BEinicio['imgCar2']; ?>" high="150px" width="150px">
              </div>
              <br>
            <input type="file" name="imgCar2">
          </div>

          <div class="col-md-4">
            <label>Imagen 3 carousel</label>
              <div class="logo">
                <img src="../imagenes/<?php echo $data_BEinicio['imgCar3']; ?>" high="150px" width="150px">
              </div>
              <br>
            <input type="file" name="imgCar3">
          </div>

        </div>

        <br>

        <!--Modificar el texto de las imagenes del Carousel-->

        <div class="row">

          <div class="col-md-12">
            <label>Texto imagen 1 carousel</label>
            <input type="text" name="txtCar1" value="<?php echo $data_BEinicio['txtCar1']; ?>" style="width: 350px">
          </div>

        </div>


        <div class="row">

          <div class="col-md-12">
            <label>Texto imagen 2 carousel</label>
            <input type="text" name="txtCar2" value="<?php echo $data_BEinicio['txtCar2']; ?>" style="width: 350px">
          </div>

        </div>


        <div class="row">

          <div class="col-md-12">
            <label>Texto imagen 3 carousel</label>
            <input type="text" name="txtCar3" value="<?php echo $data_BEinicio['txtCar3']; ?>" style="width: 350px">
          </div>

        </div>

        <br>

        <!--Modificar el titulo del texto principal-->

        <div clas="row">
          <div class="col-md-12">
            <label>Titulo texto principal</label>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <input type="text" name="tituloTxtPrin" value="<?php echo $data_BEinicio['tituloTxtPrin']; ?>">
          </div>
        </div>

        <br>

        <!--Modificar el texto principal-->

        <div class="row">
          <div class="col-md-12">
            <label>Texto Principal</label>
          </div>
        </div>

        <div class="row">

          <div class="col-md-12">
            <textarea style="width: 1065px; height: 150px" name="txtPrincipal"><?php echo $data_BEinicio['txtPrincipal']; ?></textarea>
          </div>

        </div>


        <br>


        <div class="row">

          <div class="col-md-5">
          </div>

          <div class="col-md-1">
            <input type="hidden" name="Pag" value="2">
            <input type="submit" value="Subir Cambios">
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


<br>
<div class="separador">
</div>

<!--Footer del Back End-->

<?php
  require "../include/footer_back.php";
?>

</body>
</html>
