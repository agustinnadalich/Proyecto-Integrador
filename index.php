  <!-- Head -->

<?php
// TODO: Tenemos que agregar la arquitectura de la pagina. (El archivo php con todas las funciones)

$pagetitle= "HOME";
require_once 'partials/head.php';
?>
    <!-- nav bar -->

<?php require_once 'partials/navbar.php' ?>

    <!-- Banner-->

<div class="navbar_rec">

</div>

<section class="recepcion">
  <div class="div_titulo_recepcion">

    <h1 class="titulo_recepcion">Entre todos podemos ayudarnos para dar una mano a quien más lo necesita.</h1>

  </div>

</section>


  <div class="container">


<hr>


        <!-- CARACTERISTICAS -->
<section class="caracteristicas row">
  <!-- <h1 class="titulo_caracteristicas?"></h1> -->
    <article class="carac caracteristicas1 jumbotron col-sm-12 col-md-5">
    <h2 class="titulo_caracteristicas1">¿Qué es?</h2>
    <p class="parrafo_caracteristicas1">Juntando Manos es una plataforma que busca juntar a través de organizaciones solidarias a aquellos que tienen donaciones para ofrecer con aquellos que las necesitan.</p>
  </article>
  <article class="carac caracteristicas2 jumbotron col-sm-12 col-md-5">
    <h2 class="titulo_caracteristicas2">¿Cómo ayudo?</h2>
    <p class="parrafo_caracteristicas2">Muy fácil! Cuando tengas algo para donar, accedés al buscador de pedidos, seleccionás a alguien que lo necesite y lo ofrecés. </p>
  </article>
  <article class="carac caracteristicas3 jumbotron col-sm-12 col-md-5">
    <h2 class="titulo_caracteristicas3">¿Y si lo que tengo no aparece?</h2>
    <p class="parrafo_caracteristicas3">Seguramente alguien lo vaya a necesitar en algún momento. Cargalo en la sección de ofrecimientos y cuando alguien lo precise, la organización se pondrá en contacto con vos.</p>
  </article>
  <article class="carac caracteristicas4 jumbotron col-sm-12 col-md-5">
    <h2 class="titulo_caracteristicas4">¿Más preguntas?</h2>
    <p class="parrafo_caracteristicas4">Accedé a las <a href="FAQ.php">"FAQ"</a> o ponete en contacto con nosotros que con gusto responderemos tus dudas.</p>
  </article>
</section>
<hr>

<!-- ESTADISTICAS DE ORGANIZACIONES REGISTRADAS, CASOS DE EXITO, COSAS OFRECIDAS, ETC. -->

<section class="estadisticas row">

  <article class="estad estadistica_1 col-sm-10 col-md-5 col-lg-3">
    <h2 class="titulo_estadistica">+50</h2>
    <p class="parrafo_estadistica">Organizaciones Conectadas</p>
  </article>
  <article class="estad estadistica_2 col-sm-10 col-md-5 col-lg-3">
    <h2 class="titulo_estadistica">+2500</h2>
    <p class="parrafo_estadistica">Donaciones concretadas</p>
  </article>
  <article class="estad estadistica_2 col-sm-10 col-md-5 col-lg-3">
    <h2 class="titulo_estadistica">+600 </h2>
    <p class="parrafo_estadistica">Donantes inscriptos</p>
  </article>

</section>
<hr>


<!-- MAPA DE FUNDACIONES. -->

<br>
<h1>MAPA DE FUNDACIONES</h1>
<div class="mapa">


<iframe class= "mapa-google" src="https://www.google.com/maps/d/embed?mid=1kT0Weo9kVnePGUz3tfJl2bN3VPlBSZg9" width="640" height="480"></iframe>

</div>
</div>
<!-- FOOTER -->

<?php require_once 'partials/footer.php' ?>
