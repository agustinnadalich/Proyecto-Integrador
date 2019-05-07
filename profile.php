<!-- Head -->

<?php
// TODO: Tenemos que agregar la arquitectura de la pagina. (El archivo php con todas las funciones)

$pagetitle= "PERFIL";
require_once 'partials/head.php';
?>
  <!-- nav bar -->

<?php require_once 'partials/navbar.php' ?>


                      <!-- container -->
<div class="profile_container">
  <div class="row">
      <!-- 1 columna -->
      <div class="col-md-4">
        <img class="profile_pic"width="50%"src="img/polaroid_frame.png" alt="Foto de perfil">
        <h2>Mi Perfil</h2>
          <form class="" action="profile.php" method="post">
          <p>
            <label class="textoform"  for="nombre">Nombre:</label>
            <input id="nombre" type="text" name="" value=""placeholder="Juan">
          </p>
          <p>
            <label class="textoform" for="apellido">Apellido:</label>
            <input id="apellido" type="text" name="" value=""placeholder="Pérez">
          </p>
            <p>
              <label class="textoform" for="email">Email:</label>
              <input id="email"type="email" name="email" value=""placeholder="user@email.com">
            </p>
            <p>
              <label class="textoform" for="lugar">País/Ciudad:</label>
              <input id="pass"type="text" name="" value="">
            </p>
            <p>
              <label class="textoform" for="ocup">Ocupación:</label>
              <input id="pass"type="text" name="" value="">
            </p>
            <br>
            <a class="a_btn"href="profile.php">Guardar cambios</a>
      </div>
      <!-- 1 columna -->
      <!-- 2 columna -->
      <div class="donacion col-md-4">
        <article class="article">
          <img src="img/square.jpg" width="100%"alt="Donación 1">
          <h3>Donación 1</h3>
        </article>
      </div>
      <!-- 2 columna -->
      <!-- 3 columna -->
      <div class="donacion col-md-4">
        <article class="article">
          <img src="img/square.jpg" width="100%" alt="Donación 2">
          <h3>Donación 2</h3>
        </article>
      </div>
      <!-- 3 columna -->
  </div>
</div>

          <!-- FOOTER -->

          <?php require_once 'partials/footer.php' ?>
