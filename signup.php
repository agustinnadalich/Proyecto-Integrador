<!-- Head -->

<?php
// TODO: Tenemos que agregar la arquitectura de la pagina. (El archivo php con todas las funciones)

$pagetitle= "REGISTRO";
require_once 'partials/head.php';
?>
  <!-- nav bar -->

<?php require_once 'partials/navbar.php' ?>

    <div class="formsignup">


    <form class="formregistro" action="profile.php" method="post">
      <p>
        <label class="textoform"for="nombre">Nombre:</label>
        <input id="nombre" type="text" name="" value="">
      </p>
      <p>
        <label class="textoform" for="apellido">Apellido:</label>
        <input id="apellido" type="text" name="" value="">
      </p>
        <p>
          <label class="textoform" for="email">Email:</label>
          <input id="email"type="email" name="email" value=""placeholder="user@email.com">
        </p>
        <p>
          <label class="textoform" for="pass">Contraseña</label>
          <input id="pass"type="password" name="pass" value="">
        </p>

        <a class="a_btn"href="profile.php">Registrarse</a>

    </form>

</div>
<!-- FOOTER -->

<?php require_once 'partials/footer.php' ?>
