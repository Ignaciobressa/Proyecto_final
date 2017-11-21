<!DOCTYPE html>
<html lang="el">
<head>
  <title>Bienvenido admin!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

    <!--Menu Superior-->

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="admin.php"><span class="glyphicon glyphicon-text-background"></span> Admin</a></li>
          <li><a href="index_a.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
          <li><a href="quienes_somos_a.php"><span class="glyphicon glyphicon-eye-open"></span> Quiénes somos?</a></li>
          <li><a href="nuestros_productos_a.php"><span class="glyphicon glyphicon-glass"></span> Nuestros Productos</a></li>
          <li><a href="contacto_a.php"><span class="glyphicon glyphicon-envelope"></span> Contacto</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="registro_a.php"><span class="glyphicon glyphicon-user"></span> Registro</a></li>
        <li><a href="ingresar_a.php"><span class="glyphicon glyphicon-log-in"></span> Ingresar</a></li>
      </ul>
      </div>
    </div>
  </nav>

    <!--Modificar logo empresa-->

  <div class="row">
    <div class="logo">
      <img src="../imagenes/logo_vino.gif" high="150px" width="150px">
    </div>
    <div id="subir_logo">
      <input type="file" value="Seleccione la imagen para su logo">
    </div>
  </div>

    <!--Modificacion del menu Superior-->

  <div id="contenedor">

      <div class="row">

        <div class="col-md-5">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">
              <span class="glyphicon glyphicon-home">
              </span>
            </span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="Inicio">
          </div>
        </div>

      </div>

      <div class="row">

        <div class="col-md-5">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">
              <span class="glyphicon glyphicon-eye-open">
              </span>
            </span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="Quiénes somos?">
          </div>
        </div>

        <div class="col-md-5">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">
              <span class="glyphicon glyphicon-user">
              </span>
            </span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="Registro">
          </div>
        </div>

      </div>

      <div class="row">

        <div class="col-md-5">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">
              <span class="glyphicon glyphicon-glass">
              </span>
            </span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="Nuestros Productos">
          </div>
        </div>

        <div class="col-md-5">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">
              <span class="glyphicon glyphicon-log-in">
              </span>
            </span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="Ingresar">
          </div>
        </div>

      </div>

      <div class="row">

        <div class="col-md-5">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">
              <span class="glyphicon glyphicon-envelope">
              </span>
            </span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" value="Contacto">
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
          <input type="file" value="Subir imagen de fondo." style="color:black">
        </div>
      </div>

    </div>

    <!--Modificador del Footer-->

    <!--Modificar footer-->

    <!--Modificar footer-->

  <div id="contenedor">

    <div class="row">
      <div class="col-md-12">
        <p id="texto_footer">Texto para el footer</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-10">
        <input type="text" class="form-control" value="Jorge Omar Lezano - Representante de la Bodega y Viñedos Familia Cecchín. Telefono: 0294-154519915. San Carlos de Bariloche, Río Negro, Argentina." style="high:200px; width:945px">
        <br>
      </div>
    </div>

    <div class="row">

      <div class="col-md-3"></div>

      <div class="col-md-7">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1"><b>Facebook:</b></span>
          <input type="text" class="form-control" aria-describedby="basic-addon1" placeholder="Ingrese el facebook que desea agregar al footer">
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

</body>
</html>