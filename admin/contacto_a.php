<!DOCTYPE html>
<html lang="el">
<head>
  <title>Bodega Familia Cecchin en la Patagonia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/contacto_a.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <!--Menu Superior-->

  <?php
    require "../include/menu_back.php";
  ?>

<div id="encabezado">
  <div class="logo">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <img src="../imagenes/logo_vino.gif" height="150">
        </div>
      </div>
    </div>
  </div>
</div>

<form action="/action_page.php">
  <div class="contacto">
    <div class="container">
      <div class= "row" >
        <div class="title">
          <div class= "col-md-3"></div>
          <div class= "col-md-3"></div>
          <div class= "col-md-3"><h1> Contacto </h1></div>
          <div class= "col-md-3"></div>
        </div>
      </div>
    <br>
    <br>
    <div class="row">
      <div class="col-md-6"> <label> Deje aqui su comentario </label> </div>
      <div class="col-md-6">  <input type="text" name="fname" placeholder="Nombre"> </div>
    </div>
    <div clas="row">
      <div class="col-md-6">  <textarea style="width: 500px; height: 150px"></textarea> </div>
      <div class="col-md-6">  <input type="text" name="fname" placeholder="Apellido"> </div>
    </div>
    <div clas="row">
      <div class="col-md-6"> </div>
      <div class="col-md-6">  <input type="mail" name="fname" placeholder="Direccion de email"> </div>
    </div>
    <div clas="row">
      <div class="col-md-6"> </div>
      <div class="col-md-6">  <input type="text" name="fname" placeholder="Telefono"> </div>
    </div>
 </form>
 <div class="row">
  <div class="col-md-5"> <input type="submit" value="Guardar"> </div>
  <div class="col-md-1"> </div>
  <div class="col-md-5"> <input type="reset" value="Limpiar"> </div>
  <div class="col-md-1"> </div>
 </div>
 </div>
</body>
</html>
