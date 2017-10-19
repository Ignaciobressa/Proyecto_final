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

<form action="/action_page.php">
  </form>
<div class="contacto">
<div class="container">
 <div class= "row" >
    <div class="title">
    <div class= "col-md-12"> <h1> Contacto </h1> </div>
  </div>
    <br>
    <br>
    <br>
    <br>
<div class="row">
    <div class="col-md-6"><input type="mail" name="fname" placeholder="Nombre"></div>
    <div class="col-md-6"> </div>
 </div>
 <div class="row">
    <div class="col-md-6"><input type="mail" name="fname" placeholder="Apellido"></div>
    <div class="col-md-6"> </div>
 </div>
 <div class="row">
    <div class="col-md-6"> <input type="text" name="fname" placeholder="Telefono"></div>
    <div class="col-md-6">  </div>
 </div>
 <div class="row">
    <div class="col-md-6"> <input type="mail" name="fname" placeholder="Mail"> </div>
    <div class="col-md-6">  </div>
 </div>
 <div class="row">
    <div class="col-md-6"> </div>
    <div class="col-md-6"> <label> Deje aqui su comentario </label> </div>
 </div>
 <div class="row">
    <div class="col-md-6"> </div>
    <div class="col-md-6"> <textarea style="width: 500px; height: 150px"></textarea>  </div>
 </div>
 <div class="row">
    <div class="col-md-6"> </div>
    <div class="col-md-1"> <input type="submit" value="Guardar"> </div>
    <div class="col-md-1"> <input type="reset" value="Limpiar"> </div>
    <div class="col-md-4">  </div>
  </div>
 </div>

<?php
  require 'include/footer.php'
 ?>


</body>
</html>
