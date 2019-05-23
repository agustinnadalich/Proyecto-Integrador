
    <div class="navbar_rec">

    </div>

    
    <nav class="navbar navbar-expand-md sticky-top" role="navitation">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"><img src="img/hambg.png" height="30" width="30"></span>
      </button>

                        <!-- Look Empresa -->

                        <div class="collapse navbar-collapse" id="collapse_target">
                          <a class="navbar-brand" href="index.php"><img class="logo_JM" src="img/logo_JM.png" height="50" width="50"></a>
                          <a class="navbar-text"href="profile.php">
                            <?php if (isset($_SESSION["userLoged"])) {
                          echo $_SESSION["userLoged"]['username'];}?></a>

                        <!-- links navbar -->

       <ul class="navbar-nav">
         <li class="nav-item dropdown">
           <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target">Menu
            <span class="caret"></span>
           </a>
          <div class="dropdown-menu" aria-labelledby="dropdown_target">
            <a href="index.php" class="dropdown-item">Nosotros</a>
            <div class="dropdown-divider"></div>
            <a href="contacto.php" class="dropdown-item">Contacto</a>
            <a href="faq.php" class="dropdown-item">FAQ</a>
          </div>

         </li>
         <li class="nav-item">
           <a href="login.php" class="nav-link">Ingresar</a>
         </li>
         <li class="nav-item">
           <a href="signup.php" class="nav-link">Registrarse</a>
         </li>
         <li class="nav-item">
           <a href="catalogo.php" class="nav-link">Catálogo</a>
         </li>
       </ul>
      </div>


     </nav>
