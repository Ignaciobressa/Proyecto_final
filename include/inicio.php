<?php
session_start();
if(isset($_GET['id'])){
  $_SESSION['nombre']="Ramiro";
} else {
  header("Location: login.php?error=1");
  exit();
}
echo "Bienvenido ".$_SESSION['nombre'];
 ?>
<br>
<br>
<a href="logout.php">Logout</a>
