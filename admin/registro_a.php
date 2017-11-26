<!DOCTYPE html>
<html lang="el">
<head>
  <title>Registrarse</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../css/registro_a.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/registro.js"></script>

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

    $data_queryRegistro = mysqli_query($link, "SELECT * FROM BEregistro WHERE id = 1;");
    $data_BEregistro = $data_queryRegistro->fetch_array(MYSQLI_ASSOC);

  //Menu Superior

    require "../include/menu_back.php";

  ?>


  <br>  <!--Formulario de Registro-->

  <form name="Registro" method="post" action="../include/upload_backend_mod.php">
    <div id="contenedor">

      <div class="row">

        <div class="col-md-12">
          <textarea name="tituloReg" style="width: 940px; height: 50px; color: black;"><?php echo $data_BEregistro['tituloReg']; ?></textarea>
        </div>

      </div>

      <br>

      <div class="row">

        <div class="col-md-6">
          <div class="input-group">
            <input type="text" class="form-control" value="<?php echo $data_BEregistro['nombreReg']; ?>" id="basic-addon1" name="nombreReg">
            <span class="input-group-addon" aria-describedby="basic-addon1"><b>:</b></span>
            <input type="text" class="form-control" aria-describedby="bassic-addon1" value="<?php echo $data_BEregistro['PHnombreReg']; ?>" name="PHnombreReg">
          </div>
        </div>

        <div class="col-md-6">
          <div class="input-group">
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $data_BEregistro['apellidoReg']; ?>" name="apellidoReg">
            <span class="input-group-addon" id="basic-addon1"><b>:</b></span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $data_BEregistro['PHapellidoReg']; ?>" name="PHapellidoReg">
          </div>
        </div>

      </div>

      <br>

      <div class="row">

        <div class="col-md-6">
          <div class="input-group">
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $data_BEregistro['telefonoReg']; ?>" name="telefonoReg">
            <span class="input-group-addon" id="basic-addon1"><b>:</b></span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $data_BEregistro['PHtelefonoReg']; ?>" name="PHtelefonoReg">
          </div>
        </div>

        <div class="col-md-6">
          <div class="input-group">
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $data_BEregistro['emailReg']; ?>" name="emailReg">
            <span class="input-group-addon" id="basic-addon1"><b>:</b></span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $data_BEregistro['PHemailReg']; ?>" name="PHemailReg">
          </div>
        </div>

      </div>

      <br>

      <div class="row">

        <div class="col-md-6">
          <div class="input-group">
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="<?php echo $data_BEregistro['passReg']; ?>" name="passReg">
            <span class="input-group-addon"><b>:</b></span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="<?php echo $data_BEregistro['PHpassReg']; ?>" name="PHpassReg">
            <span class="input-group-addon"><span id="show-hide-passwd" action="hide" class="glyphicon glyphicon-eye-open"></span></span>
          </div>
        </div>

        <div class="col-md-6">
          <div class="input-group">
            <input type="text" class="form-control" value="<?php echo $data_BEregistro['conPassReg']; ?>" aria-describedby="basic-addon2" name="conPassReg">
            <span class="input-group-addon" id="basic-addon2"><b>:</b></span>
            <input type="text" class="form-control" value="<?php echo $data_BEregistro['PHconPassReg']; ?>" aria-describedby="basic-addon2" name="PHconPassReg">
            <span class="input-group-addon"><span id="show-hide-passwd" action="hide" class="glyphicon glyphicon-eye-open"></span></span>
          </div>
        </div>

      </div>

      <br>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-lg-4">
          <div class="input-group">
            <span class="input-group-addon">
              <input type="checkbox" aria-label="..." <?php if ($data_BEregistro['promReg'] == "on") { echo "checked";} ?> style="width:20px" name="promReg">
            </span>
            <input type="text" class="form-control" aria-label="..." value="<?php echo $data_BEregistro['txtPromReg']; ?>" name="txtPromReg">
          </div>
        </div>
      </div>
        <div class="col-md-4"></div>
        <br>
        <div class="row">
          <div class="col-md-4">
          </div>
          <div class="col-md-4">
            <span class="input-group-addon" style="border-radius: 5px; align: center"><span class="glyphicon glyphicon-log-in"><input type="text" style="text-align:left; width: 100px; margin-left: 10px" value="<?php echo $data_BEregistro['txtBtnReg']; ?>" name="txtBtnReg"></span></span>
          </div>
          <div class="col-md-4">
          </div>

      </div>

      <br>

      <div class="row">
        <div class="col-md-5">

        </div>
        <div class="col-md-3">
          <input type="hidden" name="Pag" value="6">
          <input type="submit" value="Subir Cambios" name="submit_registro" style="color: black;">
        </div>
        <div class="col-md-4">

        </div>
      </div>

    </div>
  </form>

  <br>

  <!--Footer del Back End-->

  <?php
    require "../include/footer_back.php";
  ?>

</body>
</html>
