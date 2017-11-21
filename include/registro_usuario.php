<?php
$db_host="localhost";
$db_user="root";
$db_password="root";
$db_name="vinos";
$db_table_name="Users";
$db_connection = mysqli_connect($db_host, $db_user, $db_password);

if (!$db_connection) {
	die('No se ha podido conectar a la base de datos');
}
$form_name = ($_POST['name']);
$form_last = ($_POST['lastName']);
$form_phone = ($_POST['phone']);
$form_email = ($_POST['email']);
$form_pass = ($_POST['password']);
$form_rpass = ($_POST['rpassword']);
$form_prom = ($_POST['prom']);
$form_admin = '1';

$resultado = mysql_query("SELECT * FROM ".$db_table_name." WHERE Email = '".$form_email."'", $db_connection);

if (mysql_num_rows($resultado)>0)
{

echo "Registro fallido";
// header('Location: Fail.html');

} else {

  if (($_POST['password'])==($_POST['rpassword'])) {

    $insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`name` , `lastName` , `phone`, `password`, `email`, `admin`, `prom`) VALUES ("' . $form_name . '", "' . $form_last . '", "' . $form_phone . '", "' . $form_pass . '", "' . $form_email . '", "' . $form_admin . '", "' . $form_prom . '")';

  mysqli_select_db($db_name, $db_connection);
  $retry_value = mysqli_query($insert_value, $db_connection);

  if (!$retry_value) {
     die('Error: ' . mysql_error());
  }

  echo "Registro exitoso";
  // header('Location: Success.html');
  }

  mysql_close($db_connection);
  }


?>
