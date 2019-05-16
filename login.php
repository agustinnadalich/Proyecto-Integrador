<!-- Head -->

<?php
// TODO: Tenemos que agregar la arquitectura de la pagina. (El archivo php con todas las funciones)

$pagetitle= "LOGIN";
require_once 'partials/head.php';
include 'funcionesMatias.php';
include 'controller-json.php';
?>
  <!-- nav bar -->

<?php require_once 'partials/navbar.php' ?>
<div class="container">


     <div class="formsignup">


       <form class="" action="navbarpi.php" method="post">
         <div class="container">
           <div class="row">
             <div class="col-12">
               <div class="form-group">
                  <label class="textoform" for="email">Email | Usuario:</label>
                    <input type="email" name="email" value="">
                </div>
              </div>
            <div class="col-12">
              <div class="form-group">
          <label class="textoform" for="pass">Contraseña</label>
          <input type="password" name="pass" value="">
        </div>
      </div>

        <div class="col-12">
          <div class="form-group">
            <button type="submit" class="a_btn">Ingresar</button>
          </div>
        </div>
      </form>
      </div>
      </div>

</div>
</div>
<!-- FOOTER -->

<?php require_once 'partials/footer.php' ?>
