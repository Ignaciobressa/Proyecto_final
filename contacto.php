<!DOCTYPE html>
<html lang="el">
<head>
  <title>Contacto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/contacto.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
  require 'include/menu.php'
 ?>

<?php
  require 'include/logo.php'
 ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 style="color: khaki; font-family: arial sans-serif"> Contacto </h1>
      <h2 style="color: khaki; font-family: arial sans-serif; font-size: 18px"><em> Escriba sus datos y dejenos su consulta.<br> En la brevedad nos comunicaremos con usted!!</em></h2>
      <br>
      <form name="contacto" method="POST" action="send_form_email.php">
        <tr>
          <td><div style="color: white; font-family: arial sans-serif; font-size: 12px"> <strong>NOMBRE: </font> </strong></div></td>
          <td><input type="text" name="nombre" size="30" maxlength="50"> <br></td>
        </tr>
        <tr>
          <td><div style="color: white; font-family: arial sans-serif; font-size: 12px"> <strong>E-MAIL: </font> </strong></div>
          <td><input  type="text" name="mail" size="30" maxlength="50"> <br></td>
        </tr>
        <tr>
          <td><div style="color: white; font-family: arial sans-serif; font-size: 12px"> <strong>TELÉFONO: </font> </strong></div>
          <td><input type="text" name="telefono" size="30" maxlength="30"> <br></td>
        </tr>
        <tr>
          <td><div style="color: white; font-family: arial sans-serif; font-size: 12px"> <strong>EMPRESA: </font> </strong></div>
          <td><input type="text" name="empresa" size="30" maxlength="50"> <br><br></td>
        </tr>
        <tr>
          <td colspan="2"><div><font face="Arial" size="2" color="white"> <strong> MENSAJE: </font> </strong></div>
          <textarea name="mensaje" cols="40" rows="5" ></textarea><br>
          <input type="reset" name="Reset" value="BORRAR TODO"/> <input type="submit" name="Submit" value="ENVIAR"/>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
      </form>
    </div>
  </div>
</div>

<?php

  require 'include/footer.php'
 ?>


</body>
</html>
