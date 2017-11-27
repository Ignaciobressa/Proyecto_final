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
  <?php

    require 'include/conexion.php';

    $data_queryAdmin = mysqli_query($link, "SELECT * FROM BEadmin WHERE id = 1;");
    $data_BEadmin = $data_queryAdmin->fetch_array(MYSQLI_ASSOC);
  ?>

</head>
<body background="imagenes/<?php echo $data_BEadmin['imgFondo']; ?>" style="background-repeat: round; background-attachment: fixed;">


<?php

  //Menu superior

  require 'include/menu.php';

  //Logo de la empresa

  require 'include/logo.php';

  $data_queryContacto = mysqli_query($link, "SELECT * FROM BEcontacto WHERE id = 1;");
  $data_BEcontacto = $data_queryContacto->fetch_array(MYSQLI_ASSOC);

 ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 style="color: khaki; font-family: arial sans-serif"> <?php echo $data_BEcontacto['tituloCon']; ?> </h1>
      <h2 style="color: khaki; font-family: arial sans-serif; font-size: 18px"><em> <?php echo $data_BEcontacto['subtituloCon']; ?></em></h2>
      <br>
      <form name="contacto" method="POST" action="send_form_email.php">
        <tr>
          <?php if(isset($_SESSION['login'])){
            ?><td><div style="color: white; font-family: arial sans-serif; font-size: 12px"> <strong><?php echo $data_BEcontacto['nombreCon']; ?> </font> </strong></div>
              <td><input  type="text" name="mail" size="30" maxlength="50" value="<?php echo $_SESSION['name']; ?>"> <br></td><?php
          } else{
            ?><td><div style="color: white; font-family: arial sans-serif; font-size: 12px"> <strong><?php echo $data_BEcontacto['nombreCon']; ?> </font> </strong></div>
            <td><input  type="text" name="mail" size="30" maxlength="50"> <br></td><?php
          }?>
        </tr>
        <tr>
          <?php if(isset($_SESSION['login'])){
            ?><td><div style="color: white; font-family: arial sans-serif; font-size: 12px"> <strong><?php echo $data_BEcontacto['emailCon']; ?> </font> </strong></div>
              <td><input  type="text" name="mail" size="30" maxlength="50" value="<?php echo $_SESSION['email']; ?>"> <br></td><?php
          } else{
            ?><td><div style="color: white; font-family: arial sans-serif; font-size: 12px"> <strong><?php echo $data_BEcontacto['emailCon']; ?> </font> </strong></div>
            <td><input  type="text" name="mail" size="30" maxlength="50"> <br></td><?php
          }?>
        </tr>
        <tr>
          <?php if(isset($_SESSION['login'])){
            ?><td><div style="color: white; font-family: arial sans-serif; font-size: 12px"> <strong><?php echo $data_BEcontacto['telefonoCon']; ?> </font> </strong></div>
              <td><input  type="text" name="mail" size="30" maxlength="50" value="<?php echo $_SESSION['phone']; ?>"> <br></td><?php
          } else{
            ?><td><div style="color: white; font-family: arial sans-serif; font-size: 12px"> <strong><?php echo $data_BEcontacto['telefonoCon']; ?> </font> </strong></div>
            <td><input  type="text" name="mail" size="30" maxlength="50"> <br></td><?php
          }?>
        </tr>
        <tr>
          <td><div style="color: white; font-family: arial sans-serif; font-size: 12px"> <strong><?php echo $data_BEcontacto['empresaCon']; ?> </font> </strong></div>
          <td><input type="text" name="empresa" size="30" maxlength="50"> <br><br></td>
        </tr>
        <tr>
          <td colspan="2"><div style="color: white; font-family: arial sans-serif; font-size: 12px"> <strong> <?php echo $data_BEcontacto['mensajeCon']; ?> </font> </strong></div>
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
