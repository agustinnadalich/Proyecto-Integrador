<!-- Head -->

<?php
// TODO: Tenemos que agregar la arquitectura de la pagina. (El archivo php con todas las funciones)

$pagetitle= "LOGIN";
require_once 'partials/head.php';
?>
  <!-- nav bar -->

<?php require_once 'partials/navbar.php' ?>

     <div class="formlogin">


    <form class="" action="navbarpi.php" method="post">
        <p>
          <label class="textoform" for="email">Email | Usuario:</label>
          <input id="email"type="email" name="email" value="">
        </p>
        <p>
          <label class="textoform" for="pass">Contraseña</label>
          <input id="pass"type="password" name="pass" value="">
        </p>

        <a class="a_btn"href="navbartpi.php">Ingresar</a>
    </form>

</div>

<!-- FOOTER -->

<?php require_once 'partials/footer.php' ?>
