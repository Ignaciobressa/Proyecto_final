<!DOCTYPE html>
<html lang="el">
<head>
  <title>Nuestros Productos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/quienes_somos.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
  require 'include/conexion.php';
  require 'include/menu.php';
  require 'include/logo.php';

  $blend = mysqli_query($link, "SELECT name FROM Product WHERE id=1");
  $result = $blend->fetch_array(MYSQLI_ASSOC);
  $malbecR = mysqli_query($link, "SELECT name FROM Product WHERE id=2");
  $result1 = $malbecR->fetch_array(MYSQLI_ASSOC);
  $malbecN = mysqli_query($link, "SELECT name FROM Product WHERE id=3");
  $result2 = $malbecN->fetch_array(MYSQLI_ASSOC);
  $malbec = mysqli_query($link, "SELECT name FROM Product WHERE id=4");
  $result3 = $malbec->fetch_array(MYSQLI_ASSOC);
  $graciana = mysqli_query($link, "SELECT name FROM Product WHERE id=5");
  $result4 = $graciana->fetch_array(MYSQLI_ASSOC);
  $carignan = mysqli_query($link, "SELECT name FROM Product WHERE id=6");
  $result5 = $carignan->fetch_array(MYSQLI_ASSOC);
  $cabernet = mysqli_query($link, "SELECT name FROM Product WHERE id=7");
  $result6 = $cabernet->fetch_array(MYSQLI_ASSOC);
  $syrah = mysqli_query($link, "SELECT name FROM Product WHERE id=8");
  $result7 = $syrah->fetch_array(MYSQLI_ASSOC);
  $merlot = mysqli_query($link, "SELECT name FROM Product WHERE id=9");
  $result8 = $merlot->fetch_array(MYSQLI_ASSOC);
  $moscatel = mysqli_query($link, "SELECT name FROM Product WHERE id=10");
  $result9 = $moscatel->fetch_array(MYSQLI_ASSOC);
  $pedro = mysqli_query($link, "SELECT name FROM Product WHERE id=11");
  $result10 = $pedro->fetch_array(MYSQLI_ASSOC);
  $rose = mysqli_query($link, "SELECT name FROM Product WHERE id=12");
  $result11 = $rose->fetch_array(MYSQLI_ASSOC);
  $jugo = mysqli_query($link, "SELECT name FROM Product WHERE id=13");
  $result12 = $jugo->fetch_array(MYSQLI_ASSOC);
  $aceite = mysqli_query($link, "SELECT name FROM Product WHERE id=14");
  $result13 = $aceite->fetch_array(MYSQLI_ASSOC);
 ?>

  <div class="container">
    <div class="texto_principal">
      <div class="row">
        <div class="col-md-12">
          <h1>Nuestros Productos</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h2><em>Familia Cecchin y Raices</em></h2>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
            <p><em>Cosechamos  los frutos en el tiempo y espacio preciso,<br>
              adecuando así, nuestro proceso de producción y <br>
              elaboración natural acompañando al medioambiente,<br>
              sosteniendo siempre el no uso de agroquímicos en el suelo<br>
              y la viña, ni químicos en la botella para así poder acercar el <br>
              producto a las mesas con todas sus propiedades orgánicas intactas.<br>
              Vinos, aceites y jugos de uva, son trabajados con la misma filosofía<br>
              que  desde hace más de 100 años, Santiago y María supieron transmitir<br>
              cultivando este modo de generar verdaderos productos orgánicos.</em></p>
            <br>
            <br>
            <h2>Nuestros Varietales</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <h3><em>Vinos Tintos</em></h3>
          <ul>
            <li><?echo $result['name'];?>
            </li>
            <li><?echo $result1['name'];?></li>
            <li><?echo $result2['name'];?></li>
            <li><?echo $result3['name'];?></li>
            <li><?echo $result4['name'];?></li>
            <li><?echo $result5['name'];?></li>
            <li><?echo $result6['name'];?></li>
            <li><?echo $result7['name'];?></li>
            <li><?echo $result8['name'];?></li>
          </ul>
        </div>
        <div class="col-md-6">
          <h3><em>Vinos Blancos</em></h3>
          <ul>
            <li><?echo $result9['name'];?></li>
            <li><?echo $result10['name'];?></li>
            <li><?echo $result11['name'];?></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h4><em>Otros Productos</em></h4>
          <ul>
            <li><?echo $result12['name'];?></li>
            <li><?echo $result13['name'];?></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
<br>

<div class="separador">
</div>

<?php
  require 'include/footer.php'
 ?>
</body>
</html>
