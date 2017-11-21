<?php
session_start();
 ?>

<a href="inicio.php?id=1">Login</a>
<br>
<br>

<?php
if(isset($_GET['error'])){
  echo "Termino sesion";
}
 ?>
