<?php
//Conectar con la base de datos de Vinos.

$link = mysqli_connect('localhost', 'root', 'root');
  echo "Conexión O.K.";
<<<<<<< HEAD
$db = 'vinos';
mysqli_select_db($link, $db);
echo "Ha seleccionado la base de datos: ", $db;
=======
$vinos = 'vinos';
mysqli_select_db($link, 'vinos');
echo "Ha seleccionado la base de datos: ", $vinos;
>>>>>>> a0322e6ed78231710776962a79f2a7e27ece8338

?>
