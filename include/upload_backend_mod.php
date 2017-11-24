<?php

  require "conexion.php";

  //Back End Admin (Datos generales)-----------------------------------------------------------------------------------------------------------

  $logo = $_POST['logo'];
  $inicio = $_POST['inicio'];
  $quienesSomos = $_POST['quienesSomos'];
  $nuestrosP = $_POST['nuestrosP'];
  $contacto = $_POST['contacto'];
  $registro = $_POST['registro'];
  $ingresar = $_POST['ingresar'];
  $imgFondo = $_POST['imgFondo'];
  $footer = $_POST['footer'];
  $face = $_POST['face'];

  $query_admin = "UPDATE beadmin SET logo = $logo, inicio = $inicio, quienesSomos = $quienesSomos, nuestrosP = $nuestrosP, contacto = $contacto, registro = $registro, ingresar = $ingresar, imgFondo = $imgFondo, footer = $footer, face = $face WHERE id = 1;";

  mysqli_query($link, $query_admin);

  header('Location: ../admin/admin.php?id=1');

  //Back End Inicio----------------------------------------------------------------------------------------------------------------------------

  //-----------------------------Hay que modificar BD-----------------------------------

  //Back End Quienes somos-----------------------------------------------------------------------------------------------------------------

  $tituloQS = $_POST['titulo'];
  $subtituloQS = $_POST['subtitulo'];
  $txtPrincipal = $_POST['txtPrincipal'];

  $query_quieness = "UPDATE bequieness SET titulo = $tituloQS, subtitulo = $subtituloQS, txtPrincipal = $txtPrincipal WHERE id = 1;";

  mysqli_query($link, $query_quieness);

  header('Location: ../admin/quienes_somos_a.php?id=1');

  //Back End Nuestros productos-----------------------------------------------------------------------------------------------------------

  $tituloNP = $_POST['tituloNP'];
  $subtituloNP = $_POST['subtituloNP'];
  $txtExp = $_POST['txtExp'];
  $titVar = $_POST['titVar'];

  $query_nuestrosp = "UPDATE benuestrosp SET titulo = $tituloNP, subtitulo = $subtituloNP, txtExp = $txtExp, titVar = $titVar WHERE id = 1;";

  mysqli_query($link, $query_nuestrosp);

  header('Location: ../admin/nuestros_productos_a.php?id=1');

  //Back End Contacto---------------------------------------------------------------------------------------------------------------------------

  //------------Modificar back end contacto-----------

  //Back End Registro-----------------------------------------------------------------------------------------------------------------------------

  //--------Agregar Placeholders-----------

  //Back End Ingresar------------------------------------------------------------------------------------------------------------------------------

  //--------Agregar Placeholders-----------

?>
