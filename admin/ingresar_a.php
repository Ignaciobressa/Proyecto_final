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
    <script type="text/javascript" src="js/ingresar.js"></script>
  </head>
  <body>

    <!--Menu Superior-->

    <?php
      require "../include/menu_back.php";
    ?>

      <!--Logo de la Empresa-->

      <div class="row">

        <div class="col-md-4"></div>

        <div class="col-md-4">
          <div class="logo">
            <img src="../imagenes/logo_vino.gif" high="150px" width="150px">
          </div>
        </div>

        <div class="col-md-4"></div>

      </div>

      <br>  <!--Formulario de ingreso-->

      <form name="ingresar">
        <div id="contenedor">
          <div class="row">
            <div class="col-md-6">
              <div class="input-group">
                <input type="text" class="form-control" value="E-Mail:" aria-describedby="basic-addon1">
                <span class="input-group-addon" id="basic-addon1"><b>:</b></span>
                <input type="text" class="form-control" value="vinicultores@gmail.com" aria-describedby="basic-addon1">
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-group">
                <input type="texto" class="form-control" aria-label="Amount (to the nearest dollar)" value="Contraseña">
                <span class="input-group-addon"><b>:</b></span>
                <input type="password" class="form-control" aria-label="Amount (to the nearest dollar)" value="Escriba contraseña">
                <span id="show-hide-passwd" action="hide" class="input-group-addon"><span class="glyphicon glyphicon-eye-open"></span></span>
              </div>
            </div>
          </div>

          <br>

          <div class="row">

            <div class="col-md-5"></div>

            <div class="col-md-2">
              <span class="input-group-addon" style="border-radius: 5px;"><span class="glyphicon glyphicon-log-in"><input type="text" style="text-align:center; width:80px; margin-left: 10px" value="Ingresar"></span></span>
            </div>

            <div class="col-md-5"></div>

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
