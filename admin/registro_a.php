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

  <!--Menu Superior-->

  <?php
    require "../include/menu_back.php";
  ?>

  <!--Logo de la Empresa-->

  <div class="logo">
        <img src="../imagenes/logo_vino.gif" high="150px" width="150px">
  </div>

  <br>  <!--Formulario de Registro-->

  <form name="Registro">
    <div id="contenedor">

      <div class="row">

        <div class="col-md-6">
          <div class="input-group">
            <input type="text" class="form-control" value="Nombre" id="basic-addon1">
            <span class="input-group-addon" aria-describedby="basic-addon1"><b>:</b></span>
            <input type="text" class="form-control" aria-describedby="bassic-addon1" value="Coloque aquí su nombre">
          </div>
        </div>

        <div class="col-md-6">
          <div class="input-group">
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="Apellido">
            <span class="input-group-addon" id="basic-addon1"><b>:</b></span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="Coloque aquí su apellido">
          </div>
        </div>

      </div>

      <br>

      <div class="row">

        <div class="col-md-6">
          <div class="input-group">
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="Tel.">
            <span class="input-group-addon" id="basic-addon1"><b>:</b></span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="0294-4******">
          </div>
        </div>

        <div class="col-md-6">
          <div class="input-group">
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="E-Mail">
            <span class="input-group-addon" id="basic-addon1"><b>:</b></span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="vinicultores@gmail.com">
          </div>
        </div>

      </div>

      <br>

      <div class="row">

        <div class="col-md-6">
          <div class="input-group">
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="Contraseña">
            <span class="input-group-addon"><b>:</b></span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="Escriba contraseña">
            <span class="input-group-addon"><span id="show-hide-passwd" action="hide" class="glyphicon glyphicon-eye-open"></span></span>
          </div>
        </div>

        <div class="col-md-6">
          <div class="input-group">
            <input type="text" class="form-control" value="Confirmar Contraseña" aria-describedby="basic-addon2">
            <span class="input-group-addon" id="basic-addon2"><b>:</b></span>
            <input type="text" class="form-control" value="Escriba contraseña" aria-describedby="basic-addon2">
          </div>
        </div>

      </div>

      <br>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-lg-4">
          <div class="input-group">
            <span class="input-group-addon">
              <input type="checkbox" aria-label="..." checked style="width:20px">
            </span>
            <input type="text" class="form-control" aria-label="..." value="Desea recibir promociónes?">
          </div>
        </div>
      </div>
        <div class="col-md-4"></div>
        <br>
        <div class="row">
          <div class="col-md-4">
          </div>
          <div class="col-md-4">
            <span class="input-group-addon" style="border-radius: 5px; align: center"><span class="glyphicon glyphicon-log-in"><input type="text" style="text-align:left; width: 100px; margin-left: 10px" value="Registrarse"></span></span>
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
