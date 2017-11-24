<?php
session_start();
$email = $_POST['email'];
$password = $_POST['pass'];

require 'conexion.php';

$result = mysqli_query($link, "SELECT * FROM Users WHERE email= '$email'");

if($row = mysqli_fetch_array($result)){
  if($row['password'] == $password){
    $_SESSION['login'] = true;
    $_SESSION['name'] = $result->name;
    $_SESSION['email'] = $email;
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
