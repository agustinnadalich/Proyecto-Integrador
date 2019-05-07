<!-- Head -->

<?php
// TODO: Tenemos que agregar la arquitectura de la pagina. (El archivo php con todas las funciones)

$pagetitle= "CONTACTO";
require_once 'partials/head.php';
?>
  <!-- nav bar -->

<?php require_once 'partials/navbar.php' ?>


    <div class="contact">
      <form>
        <p>
          <label for="email">Email:</label>
          <input id="email"type="email" name="email" value=""placeholder="user@email.com">
        </p>

        <div class="form-group">
          <label for="exampleFormControlTextarea1"></label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

          <a class="a_btn"href="#">Send</a>
      </form>
    </div>

    <!-- FOOTER -->

    <?php require_once 'partials/footer.php' ?>
