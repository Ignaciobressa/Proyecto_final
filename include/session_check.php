<?php
session_start();
$email = $_POST['email'];
$password = $_POST['pass'];

require 'conexion.php';

$result = mysqli_query($link, "SELECT * FROM Users WHERE email= '$email'");
$name = mysqli_query($link, "SELECT name FROM Users Where email= '$email'");

if($row = mysqli_fetch_array($result)){
  if($row['password'] == $password){
    $_SESSION['login'] = true;
    $_SESSION['email'] = $email;

    while($row = $name->fetch_assoc()){
      $_SESSION['name'] = $row['name'];
    }
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
