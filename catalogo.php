<!-- array productos -->

<?php

$productos = [
  [
    "nombre" => "Nombre Producto 1",
    "detalle" => "Detalle Producto 1",
    "imagen" => "https://loremflickr.com/320/240"
  ],
  [
    "nombre" => "Nombre Producto 2",
    "detalle" => "Detalle Producto 2",
    "imagen" => "https://loremflickr.com/320/240"
  ],
  [
    "nombre" => "Nombre Producto 3",
    "detalle" => "Detalle Producto 3",
    "imagen" => "https://loremflickr.com/320/240"
  ],
  [
    "nombre" => "Nombre Producto 4",
    "detalle" => "Detalle Producto 4",
    "imagen" => "https://loremflickr.com/320/240"
  ],
]
 ?>

<!-- array productos  -->

<!-- Head -->

<?php
// TODO: Tenemos que agregar la arquitectura de la pagina. (El archivo php con todas las funciones)

$pagetitle= "CATALOGO";
require_once 'partials/head.php';
?>
  <!-- nav bar -->

<?php require_once 'partials/navbar.php' ?>

  <!-- Banner-->


  <div class="container container-general">
  <div class="row">
      <div class="container container-filtros col-2">
      <div class="row">
      <div class="col-10">
      <p>Este es el container filtros</p>
        <nav>
          <ul>
          <ul class="lista-de-filtros">
            <li><a href="#" class="elemento-lista-de-filtros">Elemento 1</a></li>
            <li><a href="#" class="elemento-lista-de-filtros">Elemento 2</a></li>
            <li><a href="#" class="elemento-lista-de-filtros">Elemento 3</a></li>
            <li><a href="#" class="elemento-lista-de-filtros">Elemento 4</a></li>
            <li><a href="#" class="elemento-lista-de-filtros">Elemento 5</a></li>
            <li><a href="#" class="elemento-lista-de-filtros">Elemento 6</a></li>
          </ul>
          </ul>
        </nav>

        <!-- <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target">Filtros<span class="caret"></span>
          </a>
         <div class="dropdown-menu" aria-labelledby="dropdown_target">
           <a href="index.php" class="dropdown-item">Nosotros</a>
           <div class="dropdown-divider"></div>
           <a href="contacto.php" class="dropdown-item">Contacto</a>
           <a href="faq.php" class="dropdown-item">FAQ</a>
         </div>

        </li> -->


      </div>
      <div class="col-2">
        <hr class="hr-1">
      </div>
      </div>
      </div>
      <div class="container container-productos col-10">
        <p>Este es el container productos</p>
        <!-- 3 columnas  -->
        <div class="row">
        <!-- prueba php embebido -->

        <?php foreach ($productos as $producto): ?>
					<div class="col-6 col-md-4 col-sm-6 col-lg-4 carac">
            <img src=<?php echo $producto["imagen"] ?> width="100%">
						<h2 class="text-danger"> <?php echo $producto["nombre"] ?> </h2>
						<p> <?php echo $producto["detalle"] ?> </p>
					</div>
				<?php endforeach; ?>

        <!-- prueba php embebido -->
        <!-- 1 columna -->
        <div class="col-6 col-md-4 carac">
          <article class="article">
            <img src="img/rebel-symbol.jpg" alt="Etiqueta producto 1" class="imagenes-catalogo">
            <h2>Nombre producto 1</h2>
            <p>Descripcion producto 1</p>
          </article>
        </div>
        <!-- 1 columna -->
        <!-- 2 columna -->
        <div class="col-6 col-md-4 carac">
          <article class="article">
            <img src="img/S_3717-MLM49050938_9284-O.jpg" alt="Etiqueta producto 2" class="imagenes-catalogo">
            <h2>Nombre producto 2</h2>
            <p>Descripcion producto 2</p>
          </article>
        </div>
        <!-- 2 columna -->
        <!-- 3 columna -->
        <div class="col-6 col-md-4 carac">
          <article class="article">
            <img src="img/imperialseal.jpg" alt="Etiqueta producto 3" class="imagenes-catalogo">
            <h2>Nombre producto 3</h2>
            <p>Descripcion producto 3</p>
          </article>
        </div>
        <!-- 3 columna -->
        <!-- 4 columna -->
        <div class="col-6 col-md-4 carac">
          <article class="article">
            <img src="img/imperialseal.jpg" alt="Etiqueta producto 3" class="imagenes-catalogo">
            <h2>Nombre producto 4</h2>
            <p>Descripcion producto 4</p>
          </article>
        </div>
        <!-- 4 columna -->
      </div>
      <!-- 3 columnas -->
      </div>
  </div>
  </div>

    <!-- FOOTER -->

    <?php require_once 'partials/footer.php' ?>
