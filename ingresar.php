<!DOCTYPE html>
<html>
  <head>

    <title>Ingresar</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/ingresar.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/ingresar.js"></script>

  </head>
  <body>

<!--Menu Superior-->
<?php
  require 'include/menu.php'
?>

<!--Logo de la Empresa-->
<?php
  require 'include/logo.php'
 ?>


      <br>  <!--Formulario de ingreso-->

<<<<<<< HEAD
      <form name="ingresar" action="include/session_check.php" method="post">
        <div id="contenedor">
          <div class="row">
            <div class="col-md-12">
              <h3 style="text-align: center; color: white; font-family: arial sans-serif"><em>Ingrese con una <strong>cuenta registrada</strong></em></h3>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><b>E-Mail:</b></span>
                <input type="email" id="email" class="form-control" placeholder="vinicultores@gmail.com" aria-describedby="basic-addon1">
=======
      <form name="ingresar">
        <div id="contenedor">
          <div class="row">
            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><b>E-Mail:</b></span>
                <input type="email" class="form-control" placeholder="vinicultores@gmail.com" aria-describedby="basic-addon1">
>>>>>>> a0322e6ed78231710776962a79f2a7e27ece8338
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><b>Contraseña:</b></span>
<<<<<<< HEAD
                <input type="password" name="pass" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Escriba contraseña">
=======
                <input type="password" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Escriba contraseña">
>>>>>>> a0322e6ed78231710776962a79f2a7e27ece8338
                <span id="show-hide-passwd" action="hide" class="input-group-addon"><span class="glyphicon glyphicon-eye-open"></span></span>
              </div>
            </div>
          </div>

          <br>
<<<<<<< HEAD
          <div class="row">
            <div class="col-md-12">
              <a style="text-align: center" href="registro.php">Olvidé mi contraseña</a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <a style="text-align: center" href="registro.php">Aún no estoy registrado...</a>
            </div>
          </div>
=======

>>>>>>> a0322e6ed78231710776962a79f2a7e27ece8338
          <div class="row">

            <div class="col-md-5"></div>

            <div class="col-md-2">
<<<<<<< HEAD
              <button type="submit" name="ingresar" value="Ingresar"><span class="glyphicon glyphicon-log-in"></span></button>
              <!--<span class="input-group-addon"><span class="glyphicon glyphicon-log-in"></span><button type="submit" value="Ingresar" name="ingresar"></button></span>-->
            </div>

            <div class="col-md-5"></div>
=======
              <span class="input-group-addon"><span class="glyphicon glyphicon-log-in"><b> Ingresar</b></span></span>
            </div>

            <div class="col-md-"></div>
>>>>>>> a0322e6ed78231710776962a79f2a7e27ece8338

          </div>
        </div>
      </form>
    </div>
      <br>  <!--Pie de pagina-->
      <br>
      <br>
      <br>
      <br>

<?php
  require 'include/footer.php'
?>

  </body>
</html>
