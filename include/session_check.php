<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/ingresar.css">
</head>

<?php

$usuario = $_POST['email'];
$pass = $_POST['pass'];

require 'conexion.php';

$result = mysqli_query($link, "SELECT * FROM Users WHERE email= '". $_POST['email'] ."'");

if($row = mysqli_fetch_array($result)){
  if($row['password'] == $pass){
    session_start();
    $_SESSION['email'] = $usuario;
    echo '<script lenguage="javascript">alert("Ingreso Exitoso!!!");</script>';
    echo '<center><p style="color: khaki">Para volver a la página de Inicio <a href="../index.php">Haga click aquí</a></p></center>';
  } else{
    echo '<script lenguage="javascript">alert("Error al Ingresar!!!");</script>';
    echo '<center><p style="color: khaki">Para volver a intentarlo <a href="../ingresar.php">Haga click aquí</a></p></center>';
    exit();
  }
}else{
  echo '<script lenguage="javascript">alert("Error al Ingresar!!!");</script>';
  echo '<center><p style="color: khaki">Para volver a intentarlo <a href="../ingresar.php">Haga click aquí</a></p></center>';
  exit();
}

?>
