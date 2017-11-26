<!DOCTYPE html>
<html lang="el">
<head>
  <title>¿Quienes Somos?</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/quienes_somos.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <?php

    require 'include/conexion.php';

    $data_queryAdmin = mysqli_query($link, "SELECT * FROM BEadmin WHERE id = 1;");
    $data_BEadmin = $data_queryAdmin->fetch_array(MYSQLI_ASSOC);
  ?>

</head>
<body background="../imagenes/<?php echo $data_BEadmin['imgFondo']; ?>" style="background-repeat: round; background-attachment: fixed;">


<?php
  require 'include/menu.php';

  require 'include/logo.php';

  $data_queryQuienesS = mysqli_query($link, "SELECT * FROM BEQuienesS WHERE id = 1;");
  $data_BEQuienesS = $data_queryQuienesS->fetch_array(MYSQLI_ASSOC);

 ?>

<div id="contenedor_grande">
  <div class="container">
    <div clas="row">
      <div class="col-md-12">
        <h1><?php echo $data_BEQuienesS['tituloQS']; ?></h1>
      </div>
    </div>
    <br>
    <div clas="row">
      <div class="col-md-12">
        <h2><i><?php echo $data_BEQuienesS['subtituloQS']; ?></i></h2>
      </div>
    </div>
    <br>
    <div id="contenedor">
      <div class="row">
        <div class="col-md-12">
          <div class="texto_principal">
            <p><em><?php echo $data_BEQuienesS['txtPrincipalQS']; ?></em></p>
          </div>
        </div>
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
