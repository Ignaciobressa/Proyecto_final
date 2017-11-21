<!DOCTYPE html>
<html lang="el">
<head>

  <title>Registrarse</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/registro.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/registro.js"></script>

</head>
<body>

<!--Menu Superior-->
<?php
  require 'include/menu.php';
 ?>

<!--Logo de la Empresa-->
<?php
  require 'include/logo.php';
 ?>

  <br>  <!--Formulario de Registro-->

  <form name="Registro" action="include/registro_usuario.php" method="post">
    <div id="contenedor">
      <div class="row">
        <div class="col-md-12">
          <h3 style="text-align: center; color: white; font-family: arial sans-serif"><em>Registre una cuenta de manera <strong>totalmente gratuita</strong> para realizar consultas, <br>
              pedir presupuestos o recibir promociones!!</em></h3>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><b>Nombre:</b></span>
            <input type="text" class="form-control" name="name" placeholder="Coloque aquí su nombre" aria-describedby="basic-addon1" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><b>Apellido:</b></span>
            <input type="text" class="form-control" name="lastName" placeholder="Coloque aquí su apellido" aria-describedby="basic-addon1" required>
          </div>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-6">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><b>Tel.:</b></span>
            <input type="text" class="form-control" name="phone" placeholder="0294-4******" aria-describedby="basic-addon1">
          </div>
        </div>
        <div class="col-md-6">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><b>E-Mail:</b></span>
            <input type="email" class="form-control" name="email" placeholder="vinicultores@gmail.com" aria-describedby="basic-addon1" required>
          </div>
        </div>
      </div>

      <br>

      <div class="row">

        <div class="col-md-6">

          <div class="input-group">

            <span class="input-group-addon"><b>Contraseña:</b></span>
            <input type="password" id="pass" name="password" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Escriba contraseña" required>
            <span class="input-group-addon"><span id="show-hide-passwd" action="hide" class="glyphicon glyphicon-eye-open"></span></span>

            </div>
        </div>

        <div class="col-md-6">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon2"><b>Confirmar contraseña:</b></span>
            <input type="password" class="form-control" name="rpassword" placeholder="Repita contraseña" aria-describedby="basic-addon2" required>
          </div>
        </div>

      </div>

      <br>

      <div class="row">

        <div class="col-md-4"></div>

        <div class="col-md-4" id="promocion">
            <input type="checkbox" name="prom" checked>
          <span>Desea recibir promociones?</span>
        </div>

        <div class="col-md-4"></div>

      </div>

      <div class="row">
        <div class="col-md-12 reg">
          <button type="submit" class="btn btn-default " name="Reg">Registrar</button>
        </div>
      </div>

    </div>
  </form>

  <div class="separador"></div>   <!--Separador de pagina-->

  <br>  <!--Pie de pagina-->

<?php
  require 'include/footer.php'
?>

</body>
</html>