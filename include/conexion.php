<?php
//Conectar con la base de datos de Vinos.

$link = mysqli_connect('localhost', 'root', 'root');
  echo "Conexión O.K.";
$vinos = 'vinos';
mysqli_select_db($link, 'vinos');
echo "Ha seleccionado la base de datos: ", $vinos;

?>
