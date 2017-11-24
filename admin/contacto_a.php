<!DOCTYPE html>
<html lang="el">
<head>
  <title>Bodega Familia Cecchin en la Patagonia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/contacto_a.css">
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
      <div class="row">
        <div class="col-md-12">
          <h1> Modificar contacto.php </h1>
          <form name="contacto" method="POST" action="send_form_email.php">
            <label>Titulo</label><br>
            <input type="text" name="tituloCon" value="Contacto">
            <br>
            <br>
            <label>Subtitulo</label><br>
            <input type="text" name="subtituloCon" value="Escriba sus datos y dejenos su consulta.En la brevedad nos comunicaremos con usted!!">
            <br>
            <br>
            
          </form>
        </div>
      </div>
    </div>
    </div>

</body>
</html>
