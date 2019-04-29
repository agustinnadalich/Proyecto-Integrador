<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HOME - Juntando Manos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="css/body.css">
    <!-- <link rel="stylesheet" href="css/styles.css"> -->
  </head>
  <body>
  <div class="container">

              <!-- HEADER -->

    <?php

    //Includes es el directorio donde estaría header.php. Puedes darle el nombre que quieras
    require("navbar.html");

    ?>

    <!-- body -->
<section class="recepcion row">
  <div class="div_titulo_recepcion col-md-12 col-lg-6">

  <h1 class="titulo_recepcion">Entre todos, podemos ayudarnos para dar una mano a quien mas lo necesita.</h1>
  <!-- <h2 class="subtitulo_recepcion"></h2> -->
  </div>

</section>

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
    <p class="parrafo_caracteristicas4">Accedé a las <a href="FAQ.html">"FAQ"</a> o ponete en contacto con nosotros que con gusto responderemos tus dudas.</p>
  </article>
</section>
<hr>
      <!-- BANNER -->
<!-- <section class="banner">
<article class="banner_mision-cumplida">
  <h2> Casos de exito</h2>
  <img src="img/pjimage.jpg" alt="mision-cumplida"class="img-fluid">
  <h2 class="titulo_mision-cumplida">Mision Cumplida!!</h2>
  <p class="parrafo_mision-cumplida">Entre todos logramos que los chicos tengan los bancos y sillas escolares para poder comenzar las clases!!</p>
  <a class="link_mision-cumplida" href="#">Ver mas</a>
</article>

</section>
<hr> -->
<!-- ESTADISTICAS DE ORGANIZACIONES REGISTRADAS, CASOS DE EXITO, COSAS OFRECIDAS, ETC. -->

<section class="estadisticas row">
  <!-- <h1 class="titulo_estadisticas">ESTADÍSTICAS</h1> -->
  <!-- <div class="row justify-content-center"> -->

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
<!-- </div> -->
</section>
<hr>




<br>
<h1>MAPA DE FUNDACIONES</h1>
<div class="mapa">


<iframe class= "mapa-google" src="https://www.google.com/maps/d/embed?mid=1kT0Weo9kVnePGUz3tfJl2bN3VPlBSZg9" width="640" height="480"></iframe>

</div>
<hr>
<br>
<br>
<br>
<!-- FOOTER -->



</div>
  </body>
</html>
