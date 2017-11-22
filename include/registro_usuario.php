<?php
session_start();

require 'conexion.php';

if(isset($_POST['registrar'])) {
  if($_POST['name'] == '' or $_POST['email'] == '' or $_POST['password'] == '' or $_POST['repassword'] == '') {
    echo 'Por favor complete todos los campos para poder continuar.';//Si los campos están vacíos muestra el siguiente mensaje, caso contrario sigue el siguiente codigo.
  }else {
    $query = 'SELECT * FROM Users';
    $rec = mysqli_query($link, $query);
    $verificar_usuario = 0;//Creamos la variable $verificar_usuario que empieza con el valor 0 y si la condición que verifica el usuario(abajo), entonces la variable toma el valor de 1 que quiere decir que ya existe ese nombre de usuario por lo tanto no se puede registrar

    while($resultado = mysqli_fetch_object($rec)) {
      if($resultado->email == $_POST['email']) { //Esta condición verifica si ya existe el usuario
        $verificar_usuario = 1;
      }
    }

    if($verificar_usuario == 0)
      {
        if($_POST['password'] == $_POST['repassword'])//Si los campos son iguales, continua el registro y caso contrario saldrá un mensaje de error.
      {
          $form_name = ($_POST['name']);
          $form_last = ($_POST['lastName']);
          $form_phone = ($_POST['phone']);
          $form_email = ($_POST['email']);
          $form_pass = ($_POST['password']);
          $form_rpass = ($_POST['repassword']);
          $form_admin = 0;

          if ($_POST['prom'] == "on") {
            $form_prom = 1;
          } else {
            $form_prom = 0;
          }

          $sql = "INSERT INTO Users (name, lastName, phone, password, email, admin, prom) VALUES ('$form_name', '$form_last', '$form_phone', '$form_pass', '$form_email', '$form_admin', '$form_prom')";//Se insertan los datos a la base de datos y el usuario ya fue registrado con exito.
          mysqli_query($link, $sql);

          echo $sql;

          echo 'Usted se ha registrado correctamente.<br>';
          echo 'Para volver al inicio <a href="../index.php">Haga click aquí</a>';
        }else {
          echo 'Las claves no son iguales, intente nuevamente.';
        }
      }else {
        echo 'Este usuario ya ha sido registrado anteriormente.';
      }
    }
  }
  mysqli_close($link);

?>
