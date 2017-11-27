<!DOCTYPE html>
<html>
  <head>
    <title>Ingresar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/ingresar_a.css">
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

      $data_queryIngreso = mysqli_query($link, "SELECT * FROM BEingreso WHERE id = 1;");
      $data_BEingreso = $data_queryIngreso->fetch_array(MYSQLI_ASSOC);

    ?>

    <!--Menu Superior-->

    <?php
      require "../include/menu_back.php";
    ?>

      <br>

      <!--Modificar formulario de Ingreso-->

      <form name="ingresar" method="post" action="../include/upload_backend_mod.php">

        <div id="contenedor">

          <!--Modificacion del titulo del formulario-->
          <div class="row">
            <div class="row">

              <div class="col-md-3"></div>

              <div class="col-md-7">
                <input style="text-align: center; color: black; width: 350px;" type="text" name="tituloIng" value="<?php echo $data_BEingreso['tituloIng']; ?>">
              </div>
              <div class="col-md-2"></div>
            </div>
          </div>

          <br>

          <div class="row">

            <!--Modificacoin del input email-->

            <div class="col-md-6">
              <div class="input-group">
                <input type="text" class="form-control" value="<?php echo $data_BEingreso['emailIng']; ?>" aria-describedby="basic-addon1" name="emailIng">
                <span class="input-group-addon" id="basic-addon1"><b>:</b></span>
                <input type="text" class="form-control" value="<?php echo $data_BEingreso['PHemailIng']; ?>" aria-describedby="basic-addon1" name="PHemailIng" style="width: 190px;">
              </div>
            </div>

            <!--Modificacion del input contraseña-->

            <div class="col-md-6">
              <div class="input-group">
                <input type="texto" class="form-control" aria-label="Amount (to the nearest dollar)" value="<?php echo $data_BEingreso['passIng']; ?>" name="passIng">
                <span class="input-group-addon"><b>:</b></span>
                <input type="texto" class="form-control" aria-label="Amount (to the nearest dollar)" value="<?php echo $data_BEingreso['PHpassIng']; ?>" name="PHpassIng" style="width: 150px;">
                <span class="input-group-addon"><span class="glyphicon glyphicon-eye-open"></span></span>
              </div>
            </div>

          </div>

          <br>

          <div class="row">
            <div class="col-md-12">
              <input type="text" name="regIng" value="<?php echo $data_BEingreso['regIng']; ?>" style="color: black; width: 500px;">
            </div>
          </div>

          <br>

          <div class="row">

            <div class="col-md-5"></div>

            <!--Modificacion texto del boton para ingresar-->

            <div class="col-md-2">
              <span class="input-group-addon" style="border-radius: 5px;"><span class="glyphicon glyphicon-log-in"><input type="text" style="text-align:center; width:80px; margin-left: 10px" value="<?php echo $data_BEingreso['txtBtnIng']; ?>" name="txtBtnIng"></span></span>
            </div>

            <div class="col-md-5"></div>

          </div>

          <br>

          <div class="row">

            <div class="col-md-5">

            </div>
            <div class="col-md-3">
              <input type="hidden" name="Pag" value="7">
              <input type="submit" value="Subir Cambios" name="submit_registro" style="color: black;">
            </div>
            <div class="col-md-4">

            </div>

          </div>
        </div>

      </form>

      <br>  <!--Pie de pagina-->
      <br>
      <br>
      <br>
      <br>


      <!--Footer del Back End-->

      <?php
        require "../include/footer_back.php";
      ?>

  </body>
</html>
