<?php
session_start();

require 'conexion.php';

$data_queryAdmin = mysqli_query($link, "SELECT * FROM BEadmin WHERE id = 1;");
$data_BEadmin = $data_queryAdmin->fetch_array(MYSQLI_ASSOC);

?>

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

        <li
          <?php
          if (basename($_SERVER["SCRIPT_FILENAME"], '.php')=="index") {
            echo "class='active'";
          }?>><a href="index.php"><span class="glyphicon glyphicon-home"></span> <?php echo $data_BEadmin['inicio']; ?></a></li>

        <li
        <?php
        if (basename($_SERVER["SCRIPT_FILENAME"], '.php')=="quienes_somos") {
          echo "class='active'";
        }?>><a href="quienes_somos.php"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $data_BEadmin['quienesSomos']; ?></a></li>

        <li
        <?php
        if (basename($_SERVER["SCRIPT_FILENAME"], '.php')=="nuestros_productos") {
          echo "class='active'";
        }?>><a href="nuestros_productos.php"><span class="glyphicon glyphicon-glass"></span> <?php echo $data_BEadmin['nuestrosP']; ?></a></li>

        <li
        <?php
        if (basename($_SERVER["SCRIPT_FILENAME"], '.php')=="contacto") {
          echo "class='active'";
        }?>><a href="contacto.php"><span class="glyphicon glyphicon-envelope"></span> <?php echo $data_BEadmin['contacto']; ?></a></li>

      </ul>

      <ul class="nav navbar-nav navbar-right">

        <li
        <?php
        if (isset($_SESSION['login'])){
          ?>><a><span style="color: white; font-size: 12px; font-weight: bold" class="glyphicon glyphicon-user"></span> Bienvenido, <?php echo $_SESSION['name']; ?>!</a> </li>
          <li><a href="include/logout.php"><span style="color: white; font-size: 12px; font-weight: bold" class="glyphicon glyphicon-off"></span></a></li>
          <?php
        } else{
          ?>

          <li
          <?php
          if (basename($_SERVER["SCRIPT_FILENAME"], '.php')=="registro") {
            echo "class='active'";
          } ?> ><a href="registro.php"><span class="glyphicon glyphicon-user"></span> <?php echo $data_BEadmin['registro']; ?></a></li>

          <li
          <?php
          if (basename($_SERVER["SCRIPT_FILENAME"], '.php')=="ingresar") {
            echo "class='active'";
          }?>><a href="ingresar.php"><span class="glyphicon glyphicon-log-in"></span> <?php echo $data_BEadmin['ingresar']; ?></a></li><?php
        }?>

    </ul>

    </div>
  </div>
</nav>
