<?php

  if(isset($_COOKIE["conectado"]))
  {
    if ($_COOKIE["conectado"] == true)
    {
      echo("conectado");
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Bitter|Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css\fonts.css">
  <link rel="stylesheet" href="css\stylehome.css">
  <title>HOME </title>
</head>
<body>
    <?php include 'php/header.php'; ?>

    <main>
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/INDEX/carousel/PROMO 1-100.jpg" class="d-block w-100 col-12" alt="imagen-repuestosS">
            <div class="carousel-caption">

            </div>
          </div>
          <div class="carousel-item">
            <img src="img/INDEX/carousel/PROMO 2-100.jpg" class="d-block w-100 col-12" alt="imagen-accesorios" >
            <div class="carousel-caption">

            </div>
          </div>
          <div class="carousel-item">
            <img src="img/INDEX/carousel/PROMO 3-100.jpg" class="d-block w-100 col-12" alt="bicicletas" >
            <div class="carousel-caption">

            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> <!-- Slider -->

      <section class="section-productos container-fluid d-flex">
        <div class="productos d-flex justify-content-center align-items-end w-100">
          <div class="row">
            <div class="col-6 col-md-3 text-center" id="bicicletas">
            <a href="tienda.html"><img src="img/ICONOS/SVG/SVG/Recurso 5.svg" alt="Bicicletas" width="30%" height="50">
              <h3>BICICLETAS</h3>
            </a>
            </div>

            <div class="col-6 col-md-3 text-center" id="accesorios">
              <a href="tienda.html"><img src="img/ICONOS/SVG/SVG/Recurso 6.svg" alt="Accesorios" width="30%" height="50">
              <h3>ACCESORIOS</h3>
              </a>
            </div>

            <div class="col-6 col-md-3 text-center" id="cubiertas">
              <a href="tienda.html"><img src="img/ICONOS/SVG/SVG/Recurso 9.svg" alt="Cubiertas" width="30%" height="50">
              <h3>CUBIERTAS</h3>
              </a>
            </div>

            <div class="col-6 col-md-3 text-center" id="repuestos">
              <a href="tienda.html"><img src="img/ICONOS/SVG/SVG/Recurso 10.svg" alt="Repuestos" width="30%" height="50">
              <h3>REPUESTOS</h3>
              </a>
            </div>

          </div>
        </div>
      </section> <!-- Acceso a la tienda -->

      <section class="nuestras-bicis container-fluid d-flex">
        <div class="productos d-flex justify-content-center align-items-end w-100">
          <div class="row col-lg-10">
            <div class="col-md-6 p-2">
              <a href="tienda.html"><img src="img/index/CIUDAD-100.jpg" alt="" width="100%"></a>
            </div>
            <div class="col-md-6 p-2">
              <a href="tienda.html"><img src="img/index/RUTA-100.jpg" alt="" width="100%"></a>
            </div>
            <div class="col-md-6 p-2">
              <a href="tienda.html"><img src="img/index/MONTAÑA-100.jpg" alt="" width="100%"></a>
            </div>
            <div class="col-md-6 p-2">
              <a href="tienda.html"><img src="img/index/FIXED-100.jpg" alt="" width="100%"></a>
            </div>
          </div>
        </div>
      </section> <!-- Seccion de Categorias -->

      <span class="border-top"></span>

    </main>


    <?php include 'php/footer.php'; ?>

    <!--Script Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>
</html>
