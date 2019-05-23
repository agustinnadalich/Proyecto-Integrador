<?php



$pagetitle= "REGISTRO";
require_once 'partials/head.php';

if ( isLogged() ) {
  header("location: profile.php");
  exit;
}


 ?>

 <!-- nav bar -->
 <?php require_once 'partials/navbar.php' ?>
 <!-- nav bar -->


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


<!-- validaciones img -->
<?php
		// si está seteado en $_FILES la posición "avatar"
		if (isset($_FILES["avatar"])) {
			saveImage();
		}
?>
<!-- validaciones img -->


<!-- validaciones user, mail, pass -->
<?php

	$name = "";
	$username = "";
	$email = "";
	$pass = "";
	$rePass = "";
	$paisDePost = '';

	if ($_POST) {

		$errores = registerValidate();
		$paisDePost = $_POST["pais"];

		// si todo esta ok
		if (count($errores) == 0) {

			// // Hasheamos la contraseña antes de guardar
     // passHash();

      // Salvo el usuario
      $userToLogin = saveUser();


      login($userToLogin);

      //unset($userToLogin["pass"]);

      //header('location: profile.php');
			// Redirección al salir todo ok
			header("location: profile.php");
			exit;
		}
		// si todo esta ok

}
?>
<!-- validaciones user, mail, pass -->



<div class="formsignup">


	<form class="formregistro" method="post">
			<div class="container">
				<div class="row">

					<div class="col-6">
						<div class="form-group">
							<label for="name">Nombre completo:</label>
			        <input type="text" name="name" value="<?php echo $name; ?>" class="form-control">
			        <?php if ( isset($errores["name"]) ): ?>
								<p style = "color: red; font-weight: bold"><?= $errores["name"]; ?></p>
							<?php endif; ?>
						</div>
					</div>

					<?php

					?>

					<div class="col-6">
						<div class="form-group">
						<label for="username">Nombre de usuario:</label>
						<input type="text" name="username" value="<?= $username; ?>" class="form-control">
						<?php if ( isset($errores["username"]) ): ?>
							<p style = "color: red; font-weight: bold"><?= $errores["username"]; ?></p>
						<?php endif; ?>
						</div>
					</div>

					<div class="col-6">
						<div class="form-group">
		      	<label for="email">Email:</label>
		        <input type="email" name="email" value="<?= $email; ?>" class="form-control">
		        <?php if ( isset($errores["email"]) ): ?>
		  				<p style = "color: red; font-weight: bold"><?= $errores["email"]; ?></p>
		  			<?php endif; ?>
						</div>
		      </div>

					<div class="col-6">
						<div class="form-group">
		        <label for="pass">Contraseña</label>
		        <input type="password" name="pass" value="<?= $pass; ?>" class="form-control">
		        <?php if ( isset($errores["pass"]) ): ?>
		  			<p style = "color: red; font-weight: bold"><?= $errores["pass"]; ?></p>
		  			<?php endif; ?>
						</div>
		      </div>

					<div class="col-6">
						<div class="form-group">
		        <label for="rePass">Repetir contraseña</label>
		        <input type="password" name="rePass" value="<?= $rePass; ?>" class="form-control">
		        <?php if ( isset($errores["rePass"]) ): ?>
		  			<p style = "color: red; font-weight: bold"><?= $errores["rePass"]; ?></p>
		  			<?php endif; ?>
						</div>
		      </div>

					<!-- pais de nacimiento  -->
					<div class="col-6">
						<div class="form-group">
							<label class="textoform" for="paises">Pais de origen</label>
							<select class="location" name="pais">
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
					<div class="col-12">
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
