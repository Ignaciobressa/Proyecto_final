<?php
//Conectar con la base de datos de Vinos.

$link = mysqli_connect('127.0.0.1:3306', 'root', 'root');

$db = 'vinos';
mysqli_select_db($link, $db);


?>
