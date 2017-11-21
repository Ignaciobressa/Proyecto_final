<<<<<<< HEAD:admin/nuestros_productos_a.php
<!DOCTYPE html>

<?php
  require '../include/conexion.php';

  //consulta de poductos.
  $query = "se";
 ?>

=======
x<!DOCTYPE html>
>>>>>>> a0322e6ed78231710776962a79f2a7e27ece8338:admin/nuestros_productos_a.php
<html lang="el">
<head>
  <title>Bodega Familia Cecchin en la Patagonia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/nuestros_productos_a.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
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
          <li><a href="admin.php"><span class="glyphicon glyphicon-text-background"></span> Admin</a></li>
          <li><a href="index_a.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
          <li><a href="quienes_somos_a.php"><span class="glyphicon glyphicon-eye-open"></span> Quiénes somos?</a></li>
          <li class="active"><a href="nuestros_productos_a.php"><span class="glyphicon glyphicon-glass"></span> Nuestros Productos</a></li>
          <li><a href="contacto_a.php"><span class="glyphicon glyphicon-envelope"></span> Contacto</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="registro_a.php"><span class="glyphicon glyphicon-user"></span> Registro</a></li>
        <li><a href="ingresar_a.php"><span class="glyphicon glyphicon-log-in"></span> Ingresar</a></li>
      </ul>
      </div>
    </div>
  </nav>

<div class="container">
  <div id="contenedor">
    <h1>Modificar pagina nuestros_productos.html</h1>
    <br>
    <form class="modificar" action="nuestros_productos_a.html" method="post">
      <div class="row">
      <div class="col-md-12">
        <label>Titulo de página</label>
          <input type="text" name="titulo" value="Nuestros Productos">
      </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <label>Subtitulo de página</label>
          <input type="text" name="subtitulo" value="Familia Cecchin y Raices">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <label>Texto Explicativo</label>
          <textarea name="texto_explicativo" style="width: 1065px; height: 150px" placeholder="Cosechamos  los frutos en el
tiempo y espacio preciso,adecuando así, nuestro proceso de producción y elaboración natural acompañando al medioambiente,
sosteniendo siempre el no uso de agroquímicos en el suelo y la viña, ni químicos en la botella para así poder acercar el
producto a las mesas con todas sus propiedades orgánicas intactas. Vinos, aceites y jugos de uva, son trabajados con la misma filosofía
que  desde hace más de 100 años, Santiago y María supieron transmitir cultivando este modo de generar verdaderos productos orgánicos."></textarea>
        </div>
      </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            <label>Titulo varietales</label>
            <input type="text" name="titulo_varietales" value="Nuestros Varietales">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            <label>Tintos</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <input type="text" name="blend" value="Blend">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <input type="text" name="malbec_rob" value="Malbec Roble">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <input type="text" name="malbec_s/sul" value="Malbec natural sin sulfito">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <input type="text" name="malbec" value="Malbec">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <input type="text" name="graciana" value="Graciana (cepa única en el país)">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <input type="text" name="carignan" value="Carignan (cepa única en el país)">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <input type="text" name="cabernet" value="Cabernet Sauvignon">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <input type="text" name="syrah" value="Syrah">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <input type="text" name="merlot" value="Merlot">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            <label>Blancos</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <input type="text" name="moscatel" value="Moscatel de Alejandría">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <input type="text" name="pedro" value="Pedro Gimenez - Chardonnay">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <input type="text" name="malbec rosé" value="Rosé Malbec">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            <label>Otros Productos</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <input type="text" name="jugo_uvas" value="Jugos de Uvas Naturales (sin alcohol)">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <input type="text" name="aceite" value="Aceite de Oliva">
          </div>
        </div>
        <br>
        <br>
        <div class="row">
          <div class="col-md-4">
          </div>
          <div class="col-md-1">
            <input type="submit" value="GUARDAR" href="../admin/admin.html">
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-1">
            <input type="reset" value="Limpiar">
          </div>
          <div class="col-md-5">
          </div>
        </div>
  </form>
</div>
<br>

<div class="separador">
</div>
<footer class="container-fluid text-center">
  <div class="panel_footer">
    <div class="row">
      <div class="col-md-12">
        <p class="texto_footer">Sitio construido por Facundo, Ignacio y Ramiro. Alumnos del Instituto Capacitas. Carrera: Desarrollador de sistemas.</p>
      </div>
    </div>
  </div>
</footer>

</body>
</html>
