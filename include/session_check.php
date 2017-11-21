<?php
session_start();
require 'conexion.php';

$datUs = "select * from Users where email= '". $_POST['email'] ."' and password = '". $_POST['pass'] ."'";

echo $datUs;
exit();

$query = "select count(*) from Users where email = '". $_POST['email'] ."' and password = '". $_POST['pass'] ."'";

$result = mysqli_query($query);

if($result == 1) {

  $usuario =mysqli_fetch_object($datUs);

  $_SESSION['name'] = $datUs->name;
  $_SESSION['lastName'] = $datUs->lastName;
  $_SESSION['email'] = $datUs->email;
  $_SESSION['phone'] = $datUs->phone;

  echo "<p>Se inicio sesion exitosamente</p><br><p>Bienvenido '". $_SESSION['name'] ."'!";
}

?>
