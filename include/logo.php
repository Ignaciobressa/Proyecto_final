<?php
  require "conexion.php";

  $logo = mysqli_query($link, "SELECT logo FROM BEadmin where id=1");

  $result = $logo->fetch_array(MYSQLI_ASSOC);
?>

<div id="encabezado">
  <div class="logo">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <img src="imagenes/<?echo $result['logo'];?>" height="150">
        </div>
      </div>
    </div>
  </div>
</div>
