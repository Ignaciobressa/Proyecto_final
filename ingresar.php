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

//Logo de la Empresa

  require 'include/logo.php';
  if(isset($_GET['alt'])){
    if($_GET['alt'] == 1){
      echo '<script lenguage="javascript">alert("Este usuario no existe.. Intentelo nuevamente!!");</script>';
    }
  }

  $data_queryIngreso = mysqli_query($link, "SELECT * FROM BEingreso WHERE id = 1;");
  $data_BEingreso = $data_queryIngreso->fetch_array(MYSQLI_ASSOC);

 ?>


      <br>  <!--Formulario de ingreso-->

      <form name="ingresar" action="include/session_check.php" method="post">

        <div id="contenedor">

          <div class="row">
            <div class="col-md-12">
              <h3 style="text-align: center; color: white; font-family: arial sans-serif;"><em>Ingrese con una <strong>cuenta registrada</strong></em></h3>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><b><?php echo $data_BEingreso['emailIng']; ?>:</b></span>
                <input type="email" id="email" name="email" class="form-control" placeholder="<?php echo $data_BEingreso['PHemailIng']; ?>" aria-describedby="basic-addon1">
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><b><?php echo $data_BEingreso['passIng']; ?>:</b></span>
                <input type="password" name="pass" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="<?php echo $data_BEingreso['PHpassIng']; ?>">
                <span id="show-hide-passwd" action="hide" class="input-group-addon"><span class="glyphicon glyphicon-eye-open"></span></span>
              </div>
            </div>
          </div>

          <br>
          <div class="row">
            <div class="col-md-12">
              <a style="text-align: center" href="registro.php">Aún no estoy registrado...</a>
            </div>
          </div>
          <div class="row">

            <div class="col-md-5"></div>

            <div class="col-md-2">
              <button type="submit" name="ingresar" style="color: black"><span class="glyphicon glyphicon-log-in"> <?php echo $data_BEingreso['txtBtnIng']; ?></span></button>
              <!--<span class="input-group-addon"><span class="glyphicon glyphicon-log-in"></span><button type="submit" value="Ingresar" name="ingresar"></button></span>-->
            </div>

            <div class="col-md-5"></div>

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
