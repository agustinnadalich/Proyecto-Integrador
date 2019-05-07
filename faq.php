<!-- Head -->

<?php
// TODO: Tenemos que agregar la arquitectura de la pagina. (El archivo php con todas las funciones)

$pagetitle= "FAQ";
require_once 'partials/head.php';
?>
  <!-- nav bar -->

<?php require_once 'partials/navbar.php' ?>


  <div class="container">

                <!-- PREGUNTAS FRECUENTES -->

    <section class="FAQ">
      <h1 class="titulo_FAQ">FAQ - PREGUNTAS FRECUENTES</h1>
      <article class="FAQ-CUENTA">
        <h4 class="titulo_FAQ-CUENTA">CUENTA</h4>
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="preg-faq-cuenta-1">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed btn-preg-faq" data-toggle="collapse" data-target="#faq-cuenta-1" aria-expanded="true" aria-controls="faq-cuenta-1">
                  ¿Cómo crear una cuenta?
                </button>
              </h5>
            </div>

            <div id="faq-cuenta-1" class="collapse" aria-labelledby="preg-faq-cuenta-1" data-parent="#accordion">
              <div class="card-body">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="preg-faq-cuenta-2">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed btn-preg-faq" data-toggle="collapse" data-target="#faq-cuenta-2" aria-expanded="false" aria-controls="faq-cuenta-2">
                  ¿Cómo configurar mi perfil?
                </button>
              </h5>
            </div>
            <div id="faq-cuenta-2" class="collapse" aria-labelledby="preg-faq-cuenta-2" data-parent="#accordion">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="preg-faq-cuenta-3">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed btn-preg-faq" data-toggle="collapse" data-target="#faq-cuenta-3" aria-expanded="false" aria-controls="faq-cuenta-3">
                  ¿Cómo eliminar cuenta?
                </button>
              </h5>
            </div>
            <div id="faq-cuenta-3" class="collapse" aria-labelledby="preg-faq-cuenta-3" data-parent="#accordion">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>
            </div>
          </div>
        </div>
<hr>
      </article>
      <article class="FAQ-pass">
        <h4 class="titulo_pass">USUARIO Y CONTRASEÑA</h4>
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="preg-faq-pass-1">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed btn-preg-faq" data-toggle="collapse" data-target="#faq-pass-1" aria-expanded="true" aria-controls="faq-pass-1">
                  ¿Cómo puedo recuperar mi nombre de usuario?
                </button>
              </h5>
            </div>

            <div id="faq-pass-1" class="collapse" aria-labelledby="preg-faq-pass-1" data-parent="#accordion">
              <div class="card-body">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="preg-faq-pass-2">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed btn-preg-faq" data-toggle="collapse" data-target="#faq-pass-2" aria-expanded="false" aria-controls="faq-pass-2">
                  ¿Cómo puedo recuperar mi contraseña?
                </button>
              </h5>
            </div>
          </div>
          <div id="faq-pass-2" class="collapse" aria-labelledby="preg-faq-pass-2" data-parent="#accordion">
            <div class="card-body">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
          </div>

        </div>

      </article>
<hr>
      <article class="FAQ-Ofrecer">
        <h4 class="titulo_Ofrecer">¿CÓMO DONAR?</h4>
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="preg-faq-ofrecer-1">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed btn-preg-faq" data-toggle="collapse" data-target="#faq-ofrecer-1" aria-expanded="true" aria-controls="faq-ofrecer-1">
                  ¿Cómo puedo ofrecer una donación?
                </button>
              </h5>
            </div>

            <div id="faq-ofrecer-1" class="collapse" aria-labelledby="preg-faq-ofrecer-1" data-parent="#accordion">
              <div class="card-body">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="preg-faq-ofrecer-2">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed btn-preg-faq" data-toggle="collapse" data-target="#faq-ofrecer-2" aria-expanded="false" aria-controls="faq-ofrecer-2">
                  ¿Cómo hago la entrega?
                </button>
              </h5>
            </div>
          </div>
          <div id="faq-ofrecer-2" class="collapse" aria-labelledby="preg-faq-ofrecer-2" data-parent="#accordion">
            <div class="card-body">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="preg-faq-ofrecer-3">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed btn-preg-faq" data-toggle="collapse" data-target="#faq-ofrecer-3" aria-expanded="false" aria-controls="faq-ofrecer-3">
                  ¿Cómo me aseguro que mi donación llega?
                </button>
              </h5>
            </div>
            <div id="faq-ofrecer-3" class="collapse" aria-labelledby="preg-faq-ofrecer-3" data-parent="#accordion">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>
            </div>
        </div>
      </article>
<hr>
      <article class="FAQ-organizaciones">
        <h4 class="titulo_organizaciones">ORGANIZACIONES</h4>
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="preg-faq-org-1">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed btn-preg-faq" data-toggle="collapse" data-target="#faq-org-1" aria-expanded="true" aria-controls="faq-org-1">
                  ¿Cómo puedo agregar mi organización?
                </button>
              </h5>
            </div>

            <div id="faq-org-1" class="collapse" aria-labelledby="preg-faq-org-1" data-parent="#accordion">
              <div class="card-body">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="preg-faq-org-2">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed btn-preg-faq" data-toggle="collapse" data-target="#faq-org-2" aria-expanded="false" aria-controls="faq-org-2">
                  ¿Cómo solicito donaciones?
                </button>
              </h5>
            </div>
          </div>
          <div id="faq-org-2" class="collapse" aria-labelledby="preg-faq-org-2" data-parent="#accordion">
            <div class="card-body">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
          </div>
        </div>
      </article>
    </section>
</div>

<!-- FOOTER -->

<?php require_once 'partials/footer.php' ?>
