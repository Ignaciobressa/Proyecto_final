<?php
//Conectar con la base de datos de Vinos.

$link = mysqli_connect('localhost', 'root', 'root');
  echo "Conexión O.K.";
$db = 'vinos';
mysqli_select_db($link, $db);
echo "Ha seleccionado la base de datos: ", $db;

?>
