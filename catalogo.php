<!-- array productos y filtros -->

<?php
$filtroDePost = "";

if ($_POST) {
  $filtroDePost = $_POST["filtro"];
}

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
];

$filtros = ["Zona", "Tamaño", "Urgencia"];
$cantFiltros = count($filtros);
 ?>

<!-- array productos y filtros  -->

<!-- Head -->

<?php
// TODO: Tenemos que agregar la arquitectura de la pagina. (El archivo php con todas las funciones)

$pagetitle= "CATÁLOGO";
require_once 'partials/head.php';
?>
  <!-- nav bar -->

<?php require_once 'partials/navbar.php' ?>

  <!-- Banner-->


  <div class="container container-general">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div class="col-2">
            <div class="row">
              <div class="col-10">
                <label class="" for="filtros">Filtros</label>
                <select class="" name="filtros">
                <option value="0"></option>
                <?php foreach ($filtros as $filtro): ?>
                 <option
                 value="<?= $filtro ?>" <?= $filtro == $filtroDePost ? 'selected' : null; ?>
                 >
                 <?= $filtro ?>
                 </option>
                <?php endforeach; ?>
               <select>
              </div>
              <div class="col-2">
                <hr class="hr-1">
              </div>
            </div>
          </div>
          <div class="col-10">
            <div class="row">
              <?php foreach ($productos as $producto): ?>
      					<div class="col-6 col-md-4 col-sm-6 col-lg-4 carac">
                  <img src=<?php echo $producto["imagen"] ?> width="100%" alt="Etiqueta producto 1" class="imagenes-catalogo">
      						<h2> <?php echo $producto["nombre"] ?> </h2>
      						<p> <?php echo $producto["detalle"] ?> </p>
                  <a class="a_btn"href="'partials/ver_producto.php">Ver producto</a>
      					</div>
      				<?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- FOOTER -->

    <?php require_once 'partials/footer.php' ?>
