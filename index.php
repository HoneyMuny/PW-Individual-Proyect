<?php
    echo '

<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="UTF-8">
        <title>Mi primer página HTML5</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css\estilos.css" rel="stylesheet">
    </head>
    <body>
        <header class="d-flex justify-content-between align-items-center">
            <div id="menu">
                <button class="btns material-symbols-outlined">
                menu
                </button></div>
            <div class="d-flex align-items-center">
                <img src="img/logotipo.png" id="logo">
                <h1>Tienda Online</h1>
            </div>
            <nav class="material-symbols-outlined">
                <button id="btn1" class="btns">
                    search
                </button>
                <button id="btn2" class="btns">
                    person
                </button>
                <button id="btn3" class="btns">
                    shopping_bag
                </button>
            </nav>
        </header>
        <main>
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>';
                  for ($i=0; $i<4; $i++){
                    echo '<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="'.$i.'" aria-label="Slide '.($i+1).' 2"></button>'

                  } ?>

                echo '</div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img\slider\c1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img\slider\c2.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img\slider\c3.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Some representative placeholder content for the third slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img\slider\c4.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Fourth slide label</h5>
                      <p>Some representative placeholder content for the fourth slide.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
            <section id="ctaegorias" class="d-flex flex-wrap">
              <div class="card w-25 m-*.25">
                <img src="img\categorias\cd1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Aerobics</h5>
                  <a href="#" class="btn btn-primary">Comprar</a>
                </div>
              </div>
              <div class="card w-25 m-*.25">
                <img src="img\categorias\cd2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Running</h5>
                  <a href="#" class="btn btn-primary">Comprar</a>
                </div>
              </div>
              <div class="card w-25 m-*.25">
                <img src="img\categorias\cd3.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Ciclismo</h5>
                  <a href="#" class="btn btn-primary">Comprar</a>
                </div>
              </div>
              <div class="card w-25 m-*.25">
                <img src="img\categorias\cd4.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Baloncesto</h5>
                  <a href="#" class="btn btn-primary">Comprar</a>
                </div>
              </div>
            </section>
        </main>
        <footer>Pie de página</footer>
    </body>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</html>'

?>