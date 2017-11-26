<?php
  session_start();

  $email = $_POST['email'];
  $password = $_POST['pass'];

  require 'conexion.php';

  $result     = mysqli_query($link, "SELECT * FROM Users WHERE email= '$email'");
  $data_user  = $result->fetch_array(MYSQLI_ASSOC);
  //$name       = mysqli_query($link, "SELECT name FROM Users Where email= '$email'");

  echo $data_user['admin'];

  if($data_user['email'] == $email){
    if ($data_user['password'] == $password) {
      $_SESSION['login'] = true;
      $_SESSION['email'] = $email;
      $_SESSION['phone'] = $data_user['phone'];
      $_SESSION['name'] = $data_user['name'];
      if($data_user['admin'] == 1){
        $_SESSION['ingresoAdmin'] = true;
      }
      //Sesion iniciada correctamente, redirecciona al index
      header('Location: ../index.php?alt=2');
    } else {
      //Contraseña erronea
      header('Location: ../ingresar.php?alt=2');
    }
  } else {
    //No existe cuenta asociada a este email.
    header('Location: ../ingresar.php?alt=1');
  }
/*
if($row = mysqli_fetch_array($result)){
  if($row['password'] == $password){
    $_SESSION['login'] = true;
    $_SESSION['email'] = $email;
    if($data_user['admin'] == 1){
      $_SESSION['ingresoAdmin'] == true;
    }

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
}*/

?>
