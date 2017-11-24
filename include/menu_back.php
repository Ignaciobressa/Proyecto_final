<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">

        <li
          <?php
          if (basename($_SERVER["SCRIPT_FILENAME"], '.php')=="admin") {
            echo "class='active'";
          }?>><a href="admin.php"><span class="glyphicon glyphicon-text-background"></span> Admin</a></li>

          <li
            <?php
            if (basename($_SERVER["SCRIPT_FILENAME"], '.php')=="index_a") {
              echo "class='active'";
            }?>><a href="index_a.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>

            <li
              <?php
              if (basename($_SERVER["SCRIPT_FILENAME"], '.php')=="quienes_somos_a") {
                echo "class='active'";
              }?>><a href="quienes_somos_a.php"><span class="glyphicon glyphicon-eye-open"></span> Quiénes somos?</a></li>

              <li
                <?php
                if (basename($_SERVER["SCRIPT_FILENAME"], '.php')=="nuestros_productos_a") {
                  echo "class='active'";
                }?>><a href="nuestros_productos_a.php"><span class="glyphicon glyphicon-glass"></span> Nuestros Productos</a></li>

                <li
                  <?php
                  if (basename($_SERVER["SCRIPT_FILENAME"], '.php')=="contacto_a") {
                    echo "class='active'";
                  }?>><a href="contacto_a.php"><span class="glyphicon glyphicon-envelope"></span> Contacto</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">

        <li
          <?php
          if (basename($_SERVER["SCRIPT_FILENAME"], '.php')=="registro_a") {
            echo "class='active'";
          }?>><a href="registro_a.php"><span class="glyphicon glyphicon-user"></span> Registro</a></li>

          <li
            <?php
            if (basename($_SERVER["SCRIPT_FILENAME"], '.php')=="ingresar_a") {
              echo "class='active'";
            }?>><a href="ingresar_a.php"><span class="glyphicon glyphicon-log-in"></span> Ingresar</a></li>

    </ul>
    </div>
  </div>
</nav>
