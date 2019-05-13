<!-- generar id  -->
<?php
function generateID() {
		// Traigo a todos los usuarios
		$allUsers = getAllUsers();

		// Si el conteo del array de usuarios es igual a cero
		if ( count($allUsers) == 0 ) {
			return 1;
		}

		// Si el conteo del array de usuarios es superior a cero, obtengo el último usuario registrado
		$lastUser = array_pop($allUsers);

		// Retorno el ID del último usuario registrado + 1
		return $lastUser['id'] + 1;
	}
?>

<!-- generar id -->

<!-- validaciones img -->

<?php

function saveImage(){
// si está seteado en $_FILES la posición "avatar"
if (isset($_FILES["avatar"])) {
	// Si el error de subida es igual a 0
	if ($_FILES["avatar"]["error"] === UPLOAD_ERR_OK) {
		// Obtengo el nombre de la imagen
		$nombreDeLaImagen = $_FILES["avatar"]["name"];
		// Del nombre de la imagen obtengo la extensión
		$ext = pathinfo($nombreDeLaImagen, PATHINFO_EXTENSION);

		// Si la extesión de la imagen NO es JPG, NO es png ni tampoco gif
		if ($ext != "jpg" && $ext != "png" && $ext != "gif") {
			echo "Formato invalido";
		} else {
			// Si se cumple con el formato valido obtenemos el archivo temporal
			$archivoTemporal = $_FILES["avatar"]["tmp_name"];

			// Nos creamos un nombre de imagen único usando la extensión que capturamos
			$nombreImagenFinal = uniqid("img_") . "." . $ext;

			// Definimos el destino en donde se guardará la imagen
			// dirname(__FILE__) nos deja ubicados en la posición de este archivo
			$destino = dirname(__FILE__) . "/avatars/" . $nombreImagenFinal;

			// Subimos finalmente la imagen a donde deseamos
			move_uploaded_file($archivoTemporal, $destino);

			echo "Imagen se subió";
		}
	}
}
}
?>

<!-- validaciones img -->

<!-- validaciones user, mail, pass -->
<?php

	$nombre = "";
	$apellido = "";
	$email = "";
	$pass = "";

	function registerValidate(){
	if ($_POST) {

		$nombre = trim($_POST["nombre"]);
		$apellido = trim($_POST["apellido"]);
		$email = trim($_POST["email"]);
		$pass = trim($_POST["pass"]);

    $errores = [];

		if ( $nombre === "" ) {
			$errores ["nombre"] = "Error. El nombre es obligatorio <br>";
		}

		if ( $apellido === "" ) {
			$errores ["apellido"] = "Error. El apellido es obligatorio <br>";
		}

		if ( $email === "" ) {
			$errores ["email"] = "Error. El email es obligatorio <br>";
		} elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
			$errores ["email"] = "Error. El email debe tener un formato válido <br>";
		}

		if ( $pass === "" ) {
			$errores ["pass"] = "Error. El password es obligatorio <br>";
		} elseif ( strlen($pass) < 8 ) {
			$errores ["pass"] = "Error. El password debe tener más de 8 letras <br>";
		}

    // agregar mas elseifs con validaciones aca

		// if ($inputUser != "" && $inputEmail != "" && $inputPass != "") {
		// 	header("location: welcome.php");
		// 	exit;
		// }

	}
}
?>
<!-- validaciones user, mail, pass -->

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
        <input id="nombre" type="text" name="" value="<?php echo $nombre; ?>">
        <?php if ( isset($errores["nombre"]) ): ?>
					<h3 style = "color: red", "font-weight: bold"><?= $errores["nombre"]; ?></h3>
				<?php endif; ?>
      </p>
      <p>
        <label class="textoform" for="apellido">Apellido:</label>
        <input id="apellido" type="text" name="" value="<?= $apellido; ?>">
        <?php if ( isset($errores["apellido"]) ): ?>
					<h3 style = "color: red", "font-weight: bold"><?= $errores["apellido"]; ?></h3>
				<?php endif; ?>
      </p>
        <p>
          <label class="textoform" for="email">Email:</label>
          <input id="email"type="email" name="email" value="<?= $email; ?>" placeholder="user@email.com">
          <?php if ( isset($errores["mail"]) ): ?>
  					<h3 style = "color: red", "font-weight: bold"><?= $errores["email"]; ?></h3>
  				<?php endif; ?>
        </p>
        <p>
          <label class="textoform" for="pass">Contraseña</label>
          <input id="pass"type="password" name="pass" value="<?= $pass; ?>">
          <?php if ( isset($errores["pass"]) ): ?>
  					<h3 style = "color: red", "font-weight: bold"><?= $errores["pass"]; ?></h3>
  				<?php endif; ?>
        </p>

        <!-- poner imagen -->

				<input type="file" name="avatar"> <br><br>

				<!-- poner imagen -->

        <a class="a_btn"href="profile.php">Registrarse</a>

    </form>

</div>
<!-- FOOTER -->

<?php require_once 'partials/footer.php' ?>
