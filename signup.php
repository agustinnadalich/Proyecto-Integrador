<?php
	if ($_POST) {

		$inputUser = trim($_POST["user"]);
		$inputEmail = trim($_POST["email"]);
		$inputPass = trim($_POST["password"]);

    $errores = [];

		if ( $inputUser === "" ) {
			$errores ["nombre"] = "Error. El nombre es obligatorio <br>";
		}

		if ( $inputEmail === "" ) {
			$errores ["mail"] = "Error. El email es obligatorio <br>";
		} elseif ( !filter_var($inputEmail, FILTER_VALIDATE_EMAIL) ) {
			$errores ["mail"] = "Error. El email debe tener un formato válido <br>";
		}

		if ( $inputPass === "" ) {
			$errores ["pass"] = "Error. El password es obligatorio <br>";
		} elseif ( strlen($inputPass) < 8 ) {
			$errores ["pass"] = "Error. El password debe tener más de 8 letras <br>";
		}

    // agregar mas elseifs con validaciones aca

		// if ($inputUser != "" && $inputEmail != "" && $inputPass != "") {
		// 	header("location: welcome.php");
		// 	exit;
		// }

	}
?>

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
        <?php if ( isset($errores["nombre"]) ): ?>
					<h3 style = "color: red", "font-weight: bold"><?= $errores["nombre"]; ?></h3>
				<?php endif; ?>
      </p>
      <p>
        <label class="textoform" for="apellido">Apellido:</label>
        <input id="apellido" type="text" name="" value="">
        <?php if ( isset($errores["nombre"]) ): ?>
					<h3 style = "color: red", "font-weight: bold"><?= $errores["nombre"]; ?></h3>
				<?php endif; ?>
      </p>
        <p>
          <label class="textoform" for="email">Email:</label>
          <input id="email"type="email" name="email" value=""placeholder="user@email.com">
          <?php if ( isset($errores["mail"]) ): ?>
  					<h3 style = "color: red", "font-weight: bold"><?= $errores["mail"]; ?></h3>
  				<?php endif; ?>
        </p>
        <p>
          <label class="textoform" for="pass">Contraseña</label>
          <input id="pass"type="password" name="pass" value="">
          <?php if ( isset($errores["pass"]) ): ?>
  					<h3 style = "color: red", "font-weight: bold"><?= $errores["pass"]; ?></h3>
  				<?php endif; ?>
        </p>

        <!-- poner imagen -->

        <p>
          <label class="textoform" for="pass">Contraseña</label>
          <input id="pass"type="password" name="pass" value="">
          <?php if ( isset($errorUser) ): ?>
  					<h3 style = "color: red", "font-weight: bold"><?= $errorPass; ?></h3>
  				<?php endif; ?>
        </p>


        <a class="a_btn"href="profile.php">Registrarse</a>

    </form>

</div>
<!-- FOOTER -->

<?php require_once 'partials/footer.php' ?>
