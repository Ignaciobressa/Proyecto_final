<?php

  require "conexion.php";

  //Falta ver lo de las imagenes cuando no suben ninguna!!!!------------

  //Variable que muestra la pagina de la que recibe las modificaciones------------------------------------------------------------------------

  $Pag = $_POST['Pag'];

  //Back End Admin (Datos generales)-----------------------------------------------------------------------------------------------------------

  if ($Pag == 1) {

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

    $imgs = mysqli_query($link, "SELECT logo, imgFondo FROM BEadmin where id = 1;");
    $result = $imgs->fetch_array(MYSQLI_ASSOC);
/*
    if (strlen($logo) < 3){
      echo $logo;
    } else {

    }

    if ($logo == " ") {

    } else {

      $logo = $result['logo'];

    }

    if ($imgFondo == " "){

    } else {

      $imgFondo = $result['imgFondo'];

    }
  */

    $query_admin = "UPDATE BEadmin SET logo = '$logo', inicio = '$inicio', quienesSomos = '$quienesSomos', nuestrosP = '$nuestrosP', contacto = '$contacto', registro = '$registro', ingresar = '$ingresar', imgFondo = '$imgFondo', footer = '$footer', face = '$face' WHERE id = 1;";

    mysqli_query($link, $query_admin);

    header('Location: ../admin/admin.php?id=1');
  }
  //Back End Inicio----------------------------------------------------------------------------------------------------------------------------


  elseif($Pag == 2){

    $imgCar1 = $_POST['imgCar1'];
    $imgCar2 = $_POST['imgCar2'];
    $imgCar3 = $_POST['imgCar3'];
    $txtCar1 = $_POST['txtCar1'];
    $txtCar2 = $_POST['txtCar2'];
    $txtCar3 = $_POST['txtCar3'];
    $tituloTxtPrin = $_POST['tituloTxtPrin'];
    $txtPrincipal = $_POST['txtPrincipal'];

    $query_inicio = "UPDATE BEinicio SET imgCar1 = '$imgCar1', imgCar2 = '$imgCar2', imgCar3 = '$imgCar3', txtCar1 = '$txtCar1', txtCar2 = '$txtCar2', txtCar3 = '$txtCar3', tituloTxtPrin = '$tituloTxtPrin', txtPrincipal = '$txtPrincipal' WHERE id = 1;";

    mysqli_query($link, $query_inicio);

    header('Location: ../admin/index_a.php?id=1');
  }

  //Back End Quienes somos-----------------------------------------------------------------------------------------------------------------

  elseif($Pag == 3){

  $tituloQS = $_POST['tituloQS'];
  $subtituloQS = $_POST['subtituloQS'];
  $txtPrincipal = $_POST['txtPrincipalQS'];

  $query_quieness = "UPDATE BEQuienesS SET tituloQS = '$tituloQS', subtituloQS = '$subtituloQS', txtPrincipalQS = '$txtPrincipal' WHERE id = 1;";

  mysqli_query($link, $query_quieness);

  header('Location: ../admin/quienes_somos_a.php?id=1');

  }

  //Back End Nuestros productos-----------------------------------------------------------------------------------------------------------
  elseif($Pag == 4){

  $tituloNP = $_POST['tituloNP'];
  $subtituloNP = $_POST['subtituloNP'];
  $txtExp = $_POST['txtExp'];
  $titVar = $_POST['titVar'];

  $query_nuestrosp = "UPDATE BENuestrosP SET tituloNP = '$tituloNP', subtituloNP = '$subtituloNP', txtExp = '$txtExp', titVar = '$titVar' WHERE id = 1;";

  mysqli_query($link, $query_nuestrosp);

  header('Location: ../admin/nuestros_productos_a.php?id=1');
  }
  //Back End Contacto---------------------------------------------------------------------------------------------------------------------------

  elseif($Pag == 5){

    $tituloCon = $_POST['tituloCon'];
    $subtituloCon = $_POST['subtituloCon'];
    $nombreCon = $_POST['nombreCon'];
    $emailCon = $_POST['emailCon'];
    $telefonoCon = $_POST['telefonoCon'];
    $empresaCon = $_POST['empresaCon'];
    $mensajeCon = $_POST['mensajeCon'];

    $query_contacto = "UPDATE BEcontacto SET tituloCon = '$tituloCon', subtituloCon = '$subtituloCon', nombreCon = '$nombreCon', emailCon = '$emailCon', telefonoCon = '$telefonoCon', empresaCon = '$empresaCon', mensajeCon = '$mensajeCon' where id = 1;";

    mysqli_query($link, $query_contacto);

    header('Location: ../admin/contacto_a.php?id=1');

  }

  //Back End Registro-----------------------------------------------------------------------------------------------------------------------------
  elseif ($Pag == 6) {

    $tituloReg = $_POST['tituloReg'];
    $nombreReg = $_POST['nombreReg'];
    $PHnombreReg = $_POST['PHnombreReg'];
    $apellidoReg = $_POST['apellidoReg'];
    $PHapellidoReg = $_POST['PHapellidoReg'];
    $telefonoReg = $_POST['telefonoReg'];
    $PHtelefonoReg = $_POST['PHtelefonoReg'];
    $emailReg = $_POST['emailReg'];
    $PHemailReg = $_POST['PHemailReg'];
    $passReg = $_POST['passReg'];
    $PHpassReg = $_POST['PHpassReg'];
    $conPassReg = $_POST['conPassReg'];
    $PHconPassReg = $_POST['PHconPassReg'];
    $promReg = $_POST['promReg'];
    $txtPromReg = $_POST['txtPromReg'];
    $txtBtnReg = $_POST['txtBtnReg'];

    $query_registro1 = "UPDATE BEregistro SET tituloReg = '$tituloReg', nombreReg = '$nombreReg', PHnombreReg = '$PHnombreReg', apellidoReg = '$apellidoReg', PHapellidoReg = '$PHapellidoReg', telefonoReg = '$telefonoReg', PHtelefonoReg = '$PHtelefonoReg', emailReg = '$emailReg', PHemailReg = '$PHemailReg', passReg = '$passReg', PHpassReg = '$PHpassReg', conPassReg = '$conPassReg' WHERE id =1;";
    $query_registro2 = "UPDATE BEregistro SET PHconPassReg = '$PHconPassReg', promReg = '$promReg', txtPromReg = '$txtPromReg', txtBtnReg = '$txtBtnReg' WHERE id = 1;";

    mysqli_query($link, $query_registro1);
    mysqli_query($link, $query_registro2);

    header('Location: ../admin/registro_a.php?id=1');

  }
  //Back End Ingresar------------------------------------------------------------------------------------------------------------------------------
  elseif($Pag == 7){

    $tituloIng = $_POST['tituloIng'];
    $emailIng = $_POST['emailIng'];
    $PHemailIng = $_POST['PHemailIng'];
    $passIng = $_POST['passIng'];
    $PHpassIng = $_POST['PHpassIng'];
    $regIng = $_POST['regIng'];
    $txtBtnIng = $_POST['txtBtnIng'];

    $query_ingreso = "UPDATE BEingreso SET emailIng = '$emailIng', PHemailIng = '$PHemailIng', passIng = '$passIng', PHpassIng = '$PHpassIng', regIng = '$regIng', txtBtnIng = '$txtBtnIng' WHERE id = 1;";

    mysqli_query($link, $query_ingreso);

    header('Location: ../admin/ingresar_a.php?id=1');

  }

?>
