<!DOCTYPE html>

<html lang="el">
<head>
  <title>Bodega Familia Cecchin en la Patagonia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/nuestros_productos_a.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <!--Menu Superior-->

  <?php
    require "../include/menu_back.php";
  ?>

<div class="container">
  <div id="contenedor">

    <h1>Modificar pagina nuestros_productos.html</h1>

    <br>

    <form class="modificar" action="nuestros_productos_a.html" method="post">

      <!--Modificacion titulo Nuestros Productos-->

      <div class="row">

        <div class="col-md-12">
          <label>Titulo de página</label>
          <input type="text" name="tituloNP" value="Nuestros Productos">
        </div>

      </div>

      <div class="row">

        <!--Modificacion subtitulo Nuestros Productos-->

        <div class="col-md-12">
          <label>Subtitulo de página</label>
          <input type="text" name="subtituloNP" value="Familia Cecchin y Raices">
        </div>

      </div>

      <br>

      <div class="row">

        <!--Modificacion del texto explicativo de Nuestros Productos-->

        <div class="col-md-12">
          <label>Texto Explicativo</label>
          <textarea name="txtExp" style="width: 1065px; height: 150px">Cosechamos  los frutos en el
tiempo y espacio preciso,adecuando así, nuestro proceso de producción y elaboración natural acompañando al medioambiente,
sosteniendo siempre el no uso de agroquímicos en el suelo y la viña, ni químicos en la botella para así poder acercar el
producto a las mesas con todas sus propiedades orgánicas intactas. Vinos, aceites y jugos de uva, son trabajados con la misma filosofía
que  desde hace más de 100 años, Santiago y María supieron transmitir cultivando este modo de generar verdaderos productos orgánicos.</textarea>
        </div>

      </div>

      <br>

      <div class="row">

        <!--Modificacion de titulo Varietales de Nuestros Productos-->

        <div class="col-md-12">
          <label>Titulo varietales</label>
          <input type="text" name="titVar" value="Nuestros Varietales">
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

<!--Footer del Back End-->

<?php
  require "../include/footer_back.php";
?>

</body>
</html>
