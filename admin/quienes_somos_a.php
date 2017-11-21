<!DOCTYPE html>
<html lang="el">
<head>
  <title>Bodega Familia Cecchin en la Patagonia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/quienes_somos_a.css">
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
          <li class="active"><a href="quienes_somos_a.php"><span class="glyphicon glyphicon-eye-open"></span> Quiénes somos?</a></li>
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

 <div class="container">
   <div id ="contenedor">
     <h1>Modificar pagina quienes_somos.html</h1>
     <br>
      <form class="modificar" action="quienes_somos_a.html" method="post">
      <div clas="row">
        <div class="col-md-12">
          <label>Titulo de pagina</label>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <input type="text" name="titulo" value="¿Quienes Somos?">
        </div>
      </div>
      <br>
      <div clas="row">
        <div class="col-md-12">
          <label>Subtitulo</label>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <input type="text" name="subtitulo" value="Historia">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <textarea style="width: 1065px; height: 150px" placeholder="Cargando sólo sus sueños y una aventura por descubrir,
Santiago Cecchin y María pisan suelo argentino allá por 1910, dejando atrás su tierra natal. Con claridad transmitieron su amor por la madre tierra, a quien se
debía preservar con pasión y cariño artesanal. Allá por 1959 Don Pedro y Jorge Cecchin abrazan esta tradición familiar,
apuntalando aquel sueño con sus productos naturales, respetando el encanto por la vida natural y protegiendo a “la madre de todos los frutos”. Hoy, Alberto Cecchin consolida
más de 100 años de productos artesanales libres de agregados químicos y nos invita a soñar un lugar mejor, a vivir el paisaje, a disfrutar
esta casa, a apasionarse por el mundo orgánico, un mundo… para todos."></textarea>
        </div>
      </div>
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
</div>
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
