<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/contacto.css">
</head>

<?php

$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$telefono = $_POST['telefono'];
$empresa = $_POST['empresa'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ", de la empresa " . $empresa . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = "relezcano369@gmail.com";
$asunto = "Consulta sitio de Vinos";

mail($para, $asunto, utf8_decode($mensaje), $header);

echo "<center><font face=Arial color=khaki>Su email fue enviado a nuestra casilla de correo... Muchas gracias por ponerse en contacto con nosotros</center>";
echo '<center><p style="color: khaki">Para volver al Inicio <a href="index.php">Haga click aquí</a></p></center>';

?>
