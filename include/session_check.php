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
    header('Location: ../index.php?alt=2');
  } else{
    header('Location: ../ingresar.php?alt=1');
    exit();
  }
}else{
  header('Location: ../ingresar.php?alt=1');
  exit();
}

?>
