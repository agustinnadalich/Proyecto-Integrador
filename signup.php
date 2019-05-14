<!-- paises -->
<?php
$paises = [
		'ar' => 'Argentina',
		'bo' => 'Bolivia',
		'br' => 'Brasil',
		'co' => 'Colombia',
		'cl' => 'Chile',
		'cr' => 'Costa Rica',
		'cu' => 'Cuba',
		'ec' => 'Ecuador',
		'ho' => 'Honduras',
		'gu' => 'Guatemala',
		'mx' => 'Mexico',
		'ni' => 'Nicaragua',
		'pa' => 'Paraguay',
		'pn' => 'Panama',
		'pe' => 'Perú',
		'uy' => 'Uruguay',
		've' => 'Venezuela',
]
 ?>
<!-- paises -->


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
		// si está seteado en $_FILES la posición "avatar"
		if (isset($_FILES["avatar"])) {
			function saveImage(){
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
	$username = "";
	$email = "";
	$pass = "";
	$rePass = "";
	$paisDePost = '';

	function registerValidate(){
		$nombre = trim($_POST["nombre"]);
		$username = trim($_POST["username"]);
		$email = trim($_POST["email"]);
		$pass = trim($_POST["pass"]);
		$rePass = trim($_POST["rePass"]);

		$errores = [];

		if ( $nombre === "" ) {
			$errores ["nombre"] = "Error. El nombre es obligatorio <br>";
		}

		if ( $username === "" ) {
			$errores ["username"] = "Error. El usuario es obligatorio <br>";
		}

		if ( $email === "" ) {
			$errores ["email"] = "Error. El email es obligatorio <br>";
		} elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
			$errores ["email"] = "Error. El email debe tener un formato válido <br>";
		}

		if ( $pass === "" ) {
			$errores ["pass"] = "Error. El password es obligatorio <br>";
		} elseif ( strlen($pass) < 5 ) {
			$errores ["pass"] = "Error. El password debe tener más de 5 letras <br>";
		} elseif ( !contieneDH($pass) ) {
			$errores ["pass"] = "Error. El password debe tener las letras DH en él <br>";
		}

		function contieneDH($stringPassword){
			if (strpos($stringPassword, 'DH')) {
			return true;}
		}

		if ( $rePass === "" ) {
			$errores ["rePass"] = "Error. El password es obligatorio <br>";
		} elseif ( $rePass != $pass ) {
			$errores ["rePass"] = "Error. Las contraseñas deben coincidir <br>";
		}

		return $errores;

	}

	if ($_POST) {

		$errores = registerValidate();
		$paisDePost = $_POST["pais"];

		var_dump($_POST);

		// si todo esta ok
		if (count($errores) == 0) {
			// Hasheamos la contraseña antes de guardar
			$_POST["pass"] = password_hash($_POST["pass"], PASSWORD_DEFAULT);
			// Redirección al salir todo ok
			header("location: profile.php");
			exit;
		}
		// si todo esta ok

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


    <form class="formregistro" method="post">
			<div class="container">
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label for="nombre">Nombre completo:</label>
			        <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control">
			        <?php if ( isset($errores["nombre"]) ): ?>
								<p style = "color: red; font-weight: bold"><?= $errores["nombre"]; ?></p>
							<?php endif; ?>
						</div>
					</div>

					<div class="col-6">
						<div class="form-group">
						<label for="username">Nombre de usuario:</label>
						<input type="text" name="username" value="<?= $username; ?>" class="form-control">
						<?php if ( isset($errores["username"]) ): ?>
							<h3 style = "color: red", "font-weight: bold"><?= $errores["username"]; ?></h3>
						<?php endif; ?>
						</div>
					</div>

					<div class="col-6">
						<div class="form-group">
		      	<label class="textoform" for="email">Email:</label>
		        <input id="email"type="email" name="email" value="<?= $email; ?>" placeholder="user@email.com">
		        <?php if ( isset($errores["mail"]) ): ?>
		  			<h3 style = "color: red", "font-weight: bold"><?= $errores["email"]; ?></h3>
		  			<?php endif; ?>
						</div>
		      </div>

					<div class="col-6">
						<div class="form-group">
		        <label class="textoform" for="pass">Contraseña</label>
		        <input id="pass"type="password" name="pass" value="<?= $pass; ?>">
		        <?php if ( isset($errores["pass"]) ): ?>
		  			<h3 style = "color: red", "font-weight: bold"><?= $errores["pass"]; ?></h3>
		  			<?php endif; ?>
						</div>
		      </div>

					<div class="col-6">
						<div class="form-group">
		        <label class="textoform" for="rePass">Repetir contraseña</label>
		        <input id="rePass"type="password" name="rePass" value="<?= $rePass; ?>">
		        <?php if ( isset($errores["rePass"]) ): ?>
		  			<h3 style = "color: red", "font-weight: bold"><?= $errores["rePass"]; ?></h3>
		  			<?php endif; ?>
						</div>
		      </div>

					<!-- pais de nacimiento  -->
					<div class="col-6">
						<div class="form-group">
							<label class="textoform" for="paises">Pais de origen</label>
							<select class="" name="pais">
							<option value="0"></option>
								<?php foreach ($paises as $code => $pais): ?>
									<option
									value="<?= $pais ?>"
									<?= $pais == $paisDePost ? 'selected' : null; ?>
									>
									<?= $pais ?>
									</option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<!-- pais de nacimiento -->

					<!-- poner imagen -->
					<div class="col-6">
						<div class="form-group">
							<button type="submit" class="a_btn">Registrarse</button>
						</div>
					</div>
					<!-- poner imagen -->


				</div>
			</div>


    </form>

</div>
<!-- FOOTER -->

<?php require_once 'partials/footer.php' ?>
