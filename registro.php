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
  <script type="text/javascript" src="js/hide_show_pass.js"></script>
  <?php

    require 'include/conexion.php';

    $data_queryAdmin = mysqli_query($link, "SELECT * FROM BEadmin WHERE id = 1;");
    $data_BEadmin = $data_queryAdmin->fetch_array(MYSQLI_ASSOC);
  ?>

</head>
<body background="imagenes/<?php echo $data_BEadmin['imgFondo']; ?>" style="background-repeat: round; background-attachment: fixed;">

<!--Menu Superior-->
<?php
  require 'include/menu.php';
  if(isset($_GET['alt'])){
    if ($_GET['alt'] == 4) {
      echo '<script lenguage="javascript">alert("Las claves no son iguales.. Pruebe escribir la misma clave en el campo de contraseña y de comprobación de contraseña");</script>';
    } elseif ($_GET['alt'] == 5) {
      echo '<script lenguage="javascript">alert("Esta cuenta de Email ya ha sido utilizada");</script>';
    }
  }

 //Logo de la Empresa

  require 'include/logo.php';

  $data_queryRegistro = mysqli_query($link, "SELECT * FROM BEregistro WHERE id = 1;");
  $data_BEregistro = $data_queryRegistro->fetch_array(MYSQLI_ASSOC);

 ?>

  <br>  <!--Formulario de Registro-->

  <form name="Registro" action="include/registro_usuario.php" method="post">
    <div id="contenedor">

      <div class="row">

        <div class="col-md-12">
          <h3 style="text-align: center; color: white; font-family: arial sans-serif"><em><?php echo $data_BEregistro['tituloReg']; ?></em></h3>
        </div>

      </div>

      <br>

      <div class="row">

        <div class="col-md-6">

          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><b><?php echo $data_BEregistro['nombreReg']; ?>:</b></span>
            <input type="text" class="form-control" name="name" placeholder="<?php echo $data_BEregistro['PHnombreReg']; ?>" aria-describedby="basic-addon1" required>
          </div>

        </div>

        <div class="col-md-6">

          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><b><?php echo $data_BEregistro['apellidoReg']; ?>:</b></span>
            <input type="text" class="form-control" name="lastName" placeholder="<?php echo $data_BEregistro['PHapellidoReg']; ?>" aria-describedby="basic-addon1" required>
          </div>

        </div>

      </div>

      <br>

      <div class="row">

        <div class="col-md-6">

          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><b><?php echo $data_BEregistro['telefonoReg']; ?>:</b></span>
            <input type="text" class="form-control" name="phone" placeholder="<?php echo $data_BEregistro['PHtelefonoReg']; ?>" aria-describedby="basic-addon1">
          </div>

        </div>

        <div class="col-md-6">

          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><b><?php echo $data_BEregistro['emailReg']; ?>:</b></span>
            <input type="email" class="form-control" name="email" placeholder="<?php echo $data_BEregistro['PHemailReg']; ?>" aria-describedby="basic-addon1" required>
          </div>

        </div>

      </div>

      <br>

      <div class="row">

        <div class="col-md-6">

          <div class="input-group">

            <span class="input-group-addon"><b><?php echo $data_BEregistro['passReg']; ?>:</b></span>
            <input type="password" id="pass" name="password" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="<?php echo $data_BEregistro['PHpassReg']; ?>" required>
            <span class="input-group-addon"><span id="show-hide-passwd" action="hide" class="glyphicon glyphicon-eye-open"></span></span>

            </div>
        </div>

        <div class="col-md-6">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon2"><b><?php echo $data_BEregistro['conPassReg']; ?>:</b></span>
            <input type="password" id="passCon" class="form-control" name="repassword" placeholder="<?php echo $data_BEregistro['PHconPassReg']; ?>" aria-describedby="basic-addon2" required>
            <span class="input-group-addon"><span id="show-hide-passwd-con" actionCon="hideCon" class="glyphicon glyphicon-eye-open"></span></span>
          </div>
        </div>

      </div>

      <br>

      <div class="row">

        <div class="col-md-4"></div>

        <div class="col-md-4" id="promocion">
            <input type="checkbox" name="prom" <?php if ($data_BEregistro['promReg'] == "on") { echo "checked";} ?>>
          <span><?php echo $data_BEregistro['txtPromReg']; ?></span>
        </div>

        <div class="col-md-4"></div>

      </div>

      <div class="row">
        <div class="col-md-12 reg">
          <button type="submit" class="btn btn-default" name="registrar"><?php echo $data_BEregistro['txtBtnReg']; ?></button>
        </div>
      </div>

    </div>
  </form>

  <div class="separador"></div>   <!--Separador de pagina-->

  <!--Pie de pagina-->

<?php
  require 'include/footer.php'
?>

</body>
</html>
