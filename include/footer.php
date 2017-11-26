
<!--Conexion a Base de Datos-->

<?php
  require "include/conexion.php";

  $data_queryAdmin = mysqli_query($link, "SELECT * FROM BEadmin WHERE id = 1;");
  $data_BEadmin = $data_queryAdmin->fetch_array(MYSQLI_ASSOC);

?>

<footer class="container-fluid text-center">
  <div class="panel_footer">
    <div class="row">
      <div class="col-md-12">
        <p class="texto_footer"> <?php echo $data_BEadmin['footer']; ?></p>
        <a href="<?php echo $data_BEadmin['face']; ?>"><img width="25px" src="imagenes/facebook_logo_red.png"></a>
      </div>
    </div>
  </div>
</footer>
