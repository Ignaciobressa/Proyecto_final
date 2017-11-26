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
  <?php

    require 'include/conexion.php';

    $data_queryAdmin = mysqli_query($link, "SELECT * FROM BEadmin WHERE id = 1;");
    $data_BEadmin = $data_queryAdmin->fetch_array(MYSQLI_ASSOC);
  ?>

</head>
<body background="imagenes/<?php echo $data_BEadmin['imgFondo']; ?>" style="background-repeat: round; background-attachment: fixed;">

<?php
  require 'include/menu.php';
  require 'include/logo.php';

  $data_queryNuestrosP = mysqli_query($link, "SELECT * FROM BENuestrosP WHERE id = 1;");
  $data_BENuestrosP = $data_queryNuestrosP->fetch_array(MYSQLI_ASSOC);



  /*
  while ($data_categorias = $categorias->fetch_array(MYSQLI_ASSOC)) {
    printf("ID: %s  Nombre: %s", $data_categorias["id"], $data_categorias["name"]);
  }
  /*
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
  */
 ?>

  <div class="container">

    <div class="texto_principal">

      <div class="row">
        <div class="col-md-12">
          <h1><?php echo $data_BENuestrosP['tituloNP']; ?></h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h2><em><?php echo $data_BENuestrosP['subtituloNP']; ?></em></h2>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-12">
            <p><em><?php echo $data_BENuestrosP['txtExp']; ?></em></p>
            <br>
            <br>
            <h2><?php echo $data_BENuestrosP['titVar']; ?></h2>
        </div>
      </div>

      <div class="row">

        <?php

        $categorias = mysqli_query($link, "SELECT * FROM Category;");
        $filasCat = mysqli_num_rows($categorias);
        //$data_categorias = $categorias->fetch_array(MYSQLI_ASSOC);

        $productos = mysqli_query($link, "SELECT * FROM Product;");
        //$data_productos = $productos->fetch_array(MYSQLI_ASSOC);



        while($data_categorias = $categorias->fetch_array(MYSQLI_ASSOC)) {
        ?>  <div class="col-md-6">
            <h3><em><?php echo $data_categorias['name']; ?></em></h3>
            <ul>
            <?php
            while($data_productos = $productos->fetch_array(MYSQLI_ASSOC)){
              if($data_productos['idCategory'] == $data_categorias['id']){
            ?>  <li><?php echo $data_productos['name']; ?></li>
            <?php
              }
            }?>
            </ul>
          </div><?php
        }?>


        <?php /*
        <div class="col-md-6">
          <h3><em>Vinos Tintos</em></h3>
          <ul>
            <li><?echo $result['name'];?></li>
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
    */?>
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
