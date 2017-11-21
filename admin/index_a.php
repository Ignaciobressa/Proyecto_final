<!DOCTYPE html>
<html lang="el">
<head>
  <title>Bodega Familia Cecchin en la Patagonia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/estilos_a.css">
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
          <li class="active"><a href="index_a.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
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

  <div class="container">
    <div id="contenedor">
      <h1>Modificar pagina index.html</h1>
      <br>
      <form class="modificar" action="index_a.html" method="post">
        <div class="row">
          <div class="col-md-4">
            <label>Imagen 1 carousel</label>
            <input type="file" name="imagen_1">
          </div>
          <div class="col-md-4">
            <label>Imagen 2 carousel</label>
            <input type="file" name="imagen_2">
          </div>
          <div class="col-md-4">
            <label>Imagen 3 carousel</label>
            <input type="file" name="Imagen 3">
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-md-12">
            <label>Texto imagen 1 carousel</label>
            <input type="text" name="imagen_1" value="Para disfrutar en todo momento" style="width: 350px">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <label>Texto imagen 2 carousel</label>
            <input type="text" name="imagen_2" value="Una experiencia innolvidable" style="width: 350px">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <label>Texto imagen 3 carousel</label>
            <input type="text" name="Imagen 3" value="Gran selección de vinos en nuestra cava" style="width: 350px">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            <label>Texto Principal</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <textarea style="width: 1065px; height: 150px" placeholder="Concebimos nuestro vino orgánico y natural con las vides que conviven rodeadas de hierbas y todo tipo de  frutales, bajo el estricto control de mantener el equilibrio ecológico, siendo la propia Naturaleza quien provee la protección de las enfermedades que podrían ocasionarse en
nuestras plantaciones, gracias a lo cual no utilizamos ningún tipo de químicos sobre el suelo o las plantas que nos regalan sus frutos en estado natural, para
lograr NUESTRO REAL VINO ORGÁNICO, cumpliendo todos los estándares que las normas internacionales
exigen.  Siendo calificados con el título de AGRICULTORES ARTISTAS ARTESANOS, lo que nos acredita y permite llevar un verdadero VINO ORGÁNICO desde nuestras viñas a su boca, sin los agregados
en la botella que limitaría nuestra calificación Internacional."></textarea>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-4">
          </div>
          <div class="col-md-1">
            <input type="submit" value="GUARDAR">
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

<br>


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
