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

echo $header;
echo "<br>";
echo $mensaje;
echo "<br>";

mail($para, $asunto, utf8_decode($mensaje), $header);

echo "<center><font face=Arial color=black>Su email fue enviado a nuestra casilla de correo... Muchas gracias por ponerse en contacto con nosotros</center>";
echo "<center><a href=index.php>Volver a la pagina principal</a></center></font>";

?>
