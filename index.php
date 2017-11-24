<!DOCTYPE html>
<html lang="el">
<head>
  <title>Bodega Familia Cecchin en la Patagonia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
  require 'include/menu.php';
  if(isset($_GET['alt'])){
    if($_GET['alt'] == 2){
      echo '<script lenguage="javascript">alert("Ingreso Exitoso!!!");</script>';
    } elseif($_GET['alt'] == 3){
      echo '<script lenguage="javascript">alert("Usted se ha registrado exitosamente!!!");</script>';
    } elseif($_GET['alt'] == 6){
      echo '<script lenguage="javascript">alert("Sesión cerrada exitosamente!!!");</script>';
    }
  }

 ?>

<!-- Logo -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div id="encabezado">
        <div class="logo">
          <img src="imagenes/logo_vino.gif">
        </div>
      </div>
    </div>
  </div>
</div>

<br>
<div id="myCarousel" class="carousel slide" data-ride="carousel" align="center">
  <!-- Indicadores -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Contenedores para slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="imagenes/vinos_car3.jpg" alt="Vino">
      <div class="carousel-caption">
        <h3 style="color: khaki">Para disfrutar en todo momento</h3>
      </div>
    </div>
    <div class="item">
      <img src="imagenes/cecchin_car.jpg" alt="vinos organicos">
      <div class="carousel-caption">
        <h3 style="text-align: left; color: khaki">Una experiencia innolvidable</h3>
      </div>
    </div>
    <div class="item">
      <img src="imagenes/vinos_car4.jpg" alt="cava vinos">
      <div class="carousel-caption">
        <h3 style="color: khaki">Gran selección de vinos en nuestra cava</h3>
      </div>
    </div>
  </div>
  <!-- Controles derecha e izquierda -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<br>
<br>
<div id="contenedor">
  <div class="row">
    <div class="col-md-12">
      <div class="texto_principal">
        <h1><strong>La excelencia en vinos</strong></h1>
          <br>
          <p><em>Concebimos nuestro vino orgánico y natural con<br>
             las vides que conviven rodeadas de hierbas y<br>
             todo tipo de  frutales, bajo el estricto control de<br>
            mantener el equilibrio ecológico, siendo la propia<br>
            Naturaleza quien provee la protección de las<br>
            enfermedades que podrían ocasionarse en <br>
            nuestras plantaciones, gracias a lo cual no<br> utilizamos
            ningún tipo de químicos sobre el suelo<br> o las plantas
            que nos regalan sus frutos en estado<br> natural, para
            lograr NUESTRO REAL VINO ORGÁNICO<br> cumpliendo
            todos los estándares que las normas<br> internacionales
            exigen.  Siendo calificados con el título<br> de
            AGRICULTORES ARTISTAS ARTESANOS, lo que nos<br>
            acredita y permite llevar un verdadero VINO ORGÁNICO<br>
            desde nuestras viñas a su boca, sin los agregados<br>
            en la botella que limitaría nuestra calificación Internacional.</em></p>
      </div>
    </div>
  </div>
</div>
<br>
<div class="separador">
</div>

<?php
  require 'include/footer.php';
?>

</body>
</html>
