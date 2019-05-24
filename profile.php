<!-- Head -->

<?php
// TODO: Tenemos que agregar la arquitectura de la pagina. (El archivo php con todas las funciones)

$pagetitle= "PERFIL";
require_once 'partials/head.php';

// Traer de session
$paisDelUser = "";

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
];


?>
  <!-- nav bar -->

<?php require_once 'partials/navbar.php';


// var_dump(dirname(__FILE__) . "/data/avatars/" . "img_5ce851aa2f692.jpg");

// debug(changeInfo());

if ($_POST) {
	$theUser = changeInfo();
}

?>



                      <!-- container -->
<div class="profile_container">
  <div class="row">
      <!-- 1 columna -->
      <div class="col-md-4">
        <img class="profile_pic"width="50%"src="data/avatars/<?= $_SESSION["userLoged"]['avatar']; ?>"alt="Foto de perfil">
        <h2>Mi Perfil</h2>
          <form class="" action="profile.php" method="post">
          <p>
            <label class="textoform"  for="name">Nombre:</label>
            <input id="name" type="text" name="name" value="<?= $_SESSION["userLoged"]['name'];?>">
          </p>
          <p>
            <label class="textoform" for="username">Username:</label>
            <input id="username" type="text" name="username" value="<?= $_SESSION["userLoged"]['username'];?>">
          </p>
            <p>
              <label class="textoform" for="email">Email:</label>
              <input readonly type="email" name="email" value="<?= $_SESSION["userLoged"]['email'];?>" style="background-color: lightgray;">
            </p>
            <p>
              <label class="textoform" for="pais">País/Ciudad:</label>
              <select class="pais" name="pais">
							<option value="0"></option>
								<?php foreach ($paises as $code => $pais): ?>
									<option
									value="<?= $pais ?>"
									<?= $pais == $_SESSION["userLoged"]['pais'] ? 'selected' : null; ?>
									>
									<?= $pais ?>
									</option>
								<?php endforeach; ?>
							</select>
            </p>
            <!-- <p>
              <label class="textoform" for="ocup">Ocupación:</label>
              <input id="pass"type="text" name="" value="">
            </p> -->
            <br>
            <button type="submit" class="a_btn">Guardar Cambios</button>
      </div>
      <!-- 1 columna -->
      <!-- 2 columna -->
      <div class="donacion col-md-4">
        <article class="article">
          <img src="img/square.jpg" width="50%"alt="Donación 1">
          <h3>Donación 1</h3>
        </article>
      </div>
      <!-- 2 columna -->
      <!-- 3 columna -->
      <div class="donacion col-md-4">
        <article class="article">
          <img src="img/square.jpg" width="50%" alt="Donación 2">
          <h3>Donación 2</h3>
        </article>
      </div>
      <!-- 3 columna -->
  </div>
</div>

          <!-- FOOTER -->

          <?php require_once 'partials/footer.php' ?>
