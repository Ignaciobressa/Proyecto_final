<!DOCTYPE html>
<html lang="el">
<head>
  <title>Bienvenido admin!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/admin.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

    <!--Menu Superior-->

  <?php
    require "../include/menu_back.php";
  ?>

    <!--Modificar logo empresa-->

  <div class="row">
    <div class="logo">
      <img src="../imagenes/logo_vino.gif" high="150px" width="150px">
    </div>
    <div id="subir_logo">
      <input type="file" value="Seleccione la imagen para su logo" name="logo">
    </div>
  </div>

    <!--Modificacion del menu Superior-->

  <div id="contenedor">

      <div class="row">

        <!--Modificacion texto menu inicio-->

        <div class="col-md-5">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">
              <span class="glyphicon glyphicon-home">
              </span>
            </span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="Inicio" name="inicio">
          </div>
        </div>

      </div>

      <div class="row">

        <!--Modificacion texto menu ¿Quienes Somos?-->

        <div class="col-md-5">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">
              <span class="glyphicon glyphicon-eye-open">
              </span>
            </span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="Quiénes somos?" name="quienesSomos">
          </div>
        </div>

        <!--Modificacion texto menu Registro-->

        <div class="col-md-5">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">
              <span class="glyphicon glyphicon-user">
              </span>
            </span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="Registro" name="registro">
          </div>
        </div>

      </div>

      <div class="row">

        <!--Modificacion texto menu Nuestros Productos-->

        <div class="col-md-5">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">
              <span class="glyphicon glyphicon-glass">
              </span>
            </span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="Nuestros Productos" name="nuestrosP">
          </div>
        </div>

        <!--Modificacion texto menu Ingresar-->

        <div class="col-md-5">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">
              <span class="glyphicon glyphicon-log-in">
              </span>
            </span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="Ingresar" name="ingresar">
          </div>
        </div>

      </div>

      <div class="row">

        <!--Modificacion texto menu Contacto-->

        <div class="col-md-5">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">
              <span class="glyphicon glyphicon-envelope">
              </span>
            </span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="Contacto" name="contacto">
          </div>
        </div>

      </div>
    </div>

  <br>

    <!--Modificar fondo de pagina-->

  <div id="contenedor_fondo">

      <div class="row">

        <div class="col-md-5">
          <img src="../imagenes/fondo_vino_index.jpg" height="300px" id="imagen_fondo">
        </div>
        <div class="col-md-5" id="subir_fondo">
          <p id="texto_fondo">Seleccionar imagen de fondo</p>
          <input type="file" value="Subir imagen de fondo." style="color:black" name="imgFondo">
        </div>

      </div>

    </div>

    <!--Modificar footer-->

  <div id="contenedor">

    <div class="row">
      <div class="col-md-12">
        <p id="texto_footer">Texto para el footer</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-10">
        <input type="text" class="form-control" value="Jorge Omar Lezano - Representante de la Bodega y Viñedos Familia Cecchín. Telefono: 0294-154519915. San Carlos de Bariloche, Río Negro, Argentina." style="high:200px; width:945px" name="footer">
        <br>
      </div>
    </div>

    <div class="row">

      <div class="col-md-3"></div>

      <div class="col-md-7">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1"><b>Facebook:</b></span>
          <input type="text" class="form-control" aria-describedby="basic-addon1" placeholder="Ingrese el facebook que desea agregar al footer" name="face">
        </div>
      </div>

      <div class="col-md-2"></div>
    </div>
  </div>

    <!--Subir Modificaciones-->

  <div id="contenedor">
    <div class="row">
      <div class="col-md-12 reg">
        <button type="submit" class="btn btn-default " id="subir_cambios" name="SubCam">Subir Cambios</button>
      </div>
    </div>
  </div>

  <!--Footer del Back End-->

  <?php
    require "../include/footer_back.php";
  ?>

</body>
</html>
