
  <div class="navbar_rec">

  </div>


<nav class="navbar navbar-expand-md sticky-top" role="navitation">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse_target">
      <span class="navbar-toggler-icon"><img src="img/menu_icon.png" height="30" width="30"></span>
    </button>

                      <!-- Look Empresa -->

    <div class="collapse navbar-collapse" id="collapse_target">
      <a class="navbar-brand" href="index.php"><img class="logo_JM" src="img/logo_JM.png" height="50" width="50"></a>

                      <!-- links navbar -->

     <ul class="navbar-nav">
       <?php if ( !isLogged() ) : ?>
         <li class="nav-item">
           <a href="login.php" class="nav-link">Ingresar</a>
         </li>
         <li class="nav-item">
           <a href="signup.php" class="nav-link">Registrarse</a>
         </li>
       </ul>

     <?php else: ?>
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="profile.php" id="dropNavBar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <?php if (isset($_SESSION["userLoged"])) {
             echo $_SESSION["userLoged"]['username'];}?>
           </a>
           <div class="dropdown-menu" aria-labelledby="dropNavBar">
             <a class="dropdown-item" href="logout.php">Salir</a>
             <a class="dropdown-item" href="profile.php">Mi perfil</a>
           </div>
         </li>
       <?php endif ?>

       <li class="navbar-nav dropdown">
         <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target">Menu
          <span class="caret"></span>
         </a>

        <div class="dropdown-menu" aria-labelledby="dropdown_target">
          <a href="index.php" class="dropdown-item">Nosotros</a>
          <div class="dropdown-divider"></div>
          <a href="contacto.php" class="dropdown-item">Contacto</a>
          <a href="faq.php" class="dropdown-item">FAQ</a>
          <a href="catalogo.php" class="dropdown-item">Catálogo</a>
        </div>
       </li>

    </div>
 </nav>
