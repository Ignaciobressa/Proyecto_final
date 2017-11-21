<?php
session_start();
require '../include/conexion.php';
$query="select * from Users where email= '" .$_POST['mail']."' and password = '" .$_POST['password']."'";
echo $query;
exit();

$result = mysqli_query($query);
echo $result;

if (1 == mysql_num_rows($result)) {

  $usuario =mysqli_fetch_object($result);

  $_SESSION['name'] = $usuario->name;
  $_SESSION['log'] = 1;
  echo "Inicio de sesión exitosa!!<br>";
  echo "<a href='ejemplo2.php'>Acceder</a>";
}
 ?>
