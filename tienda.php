<?php
session_start();

  include ("php/funciones.php");

  $producto = json_decode(file_get_contents("json/tienda.json"), true);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Bitter|Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/stylehome.css">

  <title>Tienda</title>
</head>

<body>

  <?php include 'php/header.php'; ?>

  <main class="container-fluid my-3 main-tienda">
    <div class="row justify-content-center">

      <div class="col-12 bg-light text-center py-2 border">
        <h6 class="titulos-importantes">Tienda</h6>
      </div> <!-- Titulo -->

      <div class="col-12 col-lg-2  m-2 text-left pl-0">

        <h3 class="mt-2 titulos-medio d-none d-lg-block">Categorias</h3>

        <div id="acordion" role="tablist" aria-multiselectable="true">
          <div class="navbar navbar-expand-lg">
            <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#fm-menu" aria-controls="fm-menu" aria-expanded="false" aria-label="Menu">
              <span class="titulos-medio">Categorias ▼</span>
            </button> 
            <div class="collapse navbar-collapse" id="fm-menu">
              <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <div class="card p-0">
                      <div class="card-header px-0" role="tab" id="heading1">
                        <h5 class="mb-0 titulos-categorias-tienda">
                          <a href="#collapse1" data-toggle="collapse" data-parent="#acordion" aria-expanded="true"
                            aria-controls="collapse1">
                            Bicicletas
                          </a>
                        </h5>
                      </div>
                      <!--fin div card-header px-0 -->

                      <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="heading1">
                        <div class="card-block">
                          <ul class="nav flex-column">
                            <li class="nav-item">
                              <a class="nav-link active hov-bici categorias-tienda" href="#">Adventure</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link hov-bici categorias-tienda" href="#">Road</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link hov-bici categorias-tienda" href="#">City</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link hov-bici categorias-tienda" href="#">Cruisers</a>
                            </li>
                          </ul>
                        </div>

                      </div>
                    </div><!-- Bicicletas -->
                </li>
                <li class="nav-item">
                  <div class="card">
                    <div class="card-header px-0" role="tab" id="heading2">
                      <h5 class="mb-0 titulos-categorias-tienda">
                        <a href="#collapse2" data-toggle="collapse" data-parent="#acordion" aria-expanded="true"
                          aria-controls="collapse2">
                          Accesorios
                        </a>
                      </h5>
                    </div>
                    <!--fin div card-header px-0 -->

                    <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2">
                      <div class="card-block">
                        <ul class="nav flex-column">
                          <li class="nav-item">
                            <a class="nav-link active hov-acce categorias-tienda" href="#">Protector Bicicletas</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link hov-acce categorias-tienda" href="#">Guardabarros</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link hov-acce categorias-tienda" href="#">Botellas</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link hov-acce categorias-tienda" href="#">Luces</a>
                          </li>
                        </ul>
                      </div>

                    </div>
                  </div><!-- Accesorios -->
                </li>
                <li class="nav-item">
                  <div class="card">
                    <div class="card-header px-0" role="tab" id="heading3">
                      <h5 class="mb-0 titulos-categorias-tienda">
                        <a href="#collapse3" data-toggle="collapse" data-parent="#acordion" aria-expanded="true"
                          aria-controls="collapse3">
                          Partes
                        </a>
                      </h5>
                    </div>
                    <!--fin div card-header px-0 -->

                    <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3">
                      <div class="card-block">
                        <ul class="nav flex-column">
                          <li class="nav-item">
                            <a class="nav-link active hov-part categorias-tienda" href="#">Pedales</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link hov-part categorias-tienda" href="#">Asientos</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link hov-part categorias-tienda" href="#">Cuadro</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link hov-part categorias-tienda" href="#">Frenos</a>
                          </li>
                        </ul>
                      </div>

                    </div>
                  </div><!-- Partes -->
                </li>
                <li class="nav-item">
                  <div class="card">
                    <div class="card-header px-0" role="tab" id="heading4">
                      <h5 class="mb-0 titulos-categorias-tienda">
                        <a href="#collapse4" data-toggle="collapse" data-parent="#acordion" aria-expanded="true"
                          aria-controls="collapse4">
                          Cubiertas
                        </a>
                      </h5>
                    </div>
                    <!--fin div card-header -->

                    <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4">
                      <div class="card-block">
                        <ul class="nav flex-column">
                          <li class="nav-item">
                            <a class="nav-link active hov-cubrt categorias-tienda" href="#">Adventure</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link hov-cubrt categorias-tienda" href="#">Road</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link hov-cubrt categorias-tienda" href="#">City</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link hov-cubrt categorias-tienda" href="#">Cruisers</a>
                          </li>
                        </ul>
                      </div>

                    </div>
                  </div><!-- Cubierta -->
                </ul>

            </div>
          </div><!-- navbar -->
        </div>
      </div> <!-- Filtros -->

      <div class="col px-0">
        <div class="row justify-content-center m-0">

          <?php foreach ($producto as $producto1): ?>

          <div class="col-10 col-md-4 text-center border shadow-item">
            <div class="row item">
              <div class="col-12 my-2">
                <div class="row item-header justify-content-between align-items-center" style="height: 30px;">
                  <div class="col-4 d-flex">
                    <?php if ($producto1["stock"]){
                          echo(" <span class='badge badge-success mr-1'>Stock</span> ");
                        } 
                        if ($producto1["nuevo"]){
                          echo(" <span class='badge badge-info'>Nuevo</span> ");
                        }
                        ?>
                  </div>
                  <div class="col-2 conte-fav">
                    <a href="#" ><ion-icon name="heart-empty" class="fav"></ion-icon></a>
                  </div>
                </div>
              </div> <!-- item header -->

              <div class="col-12">
                <a href="item.php">
                  <img src=<?= $producto1["ubicacion"] ?> class="card-img-top" alt="...">
                  <div class="row btn-group btn-group-toggle justify-content-center mt-2" data-toggle="buttons">

                    <?php foreach ($producto1["color"] as $nombre => $valor): ?>
                      
                      <label class="col-2 btn btn-ligh active tooltipt" style="background-color: <?=$valor?>;">
                        
                          <input type="radio" name="options" id="option1" checked>
                          <span class="tooltiptextt"><?=$nombre?></span>
                        
                        </label>
                      

                    <?php endforeach; ?>

                  </div>
                </a>
              </div> <!-- imagen -->

              <div class="col-12 mt-3">
                <h1 class="h5 titulos-categorias-tienda"><?= $producto1["nombre"] ?></h1>
                <h6 class="categorias-tienda">$<?= $producto1["precio"] ?></h6>
              </div> <!-- Informacion item -->

              <a class="col-12 py-2 mb-3 btn-comprar categorias-tienda" href="carrito.php">Comprar</a>
          
            </div>
          </div> <!-- Producto -->

          <?php endforeach; ?>
        </div>
      </div> <!-- Productos -->

      <div class="col-12 border-top pt-2">
        <div class="row justify-content-between align-items-center">
          <div class="col">
            <p class="m-0">Articulos 1-12 de 30</p>
          </div> <!-- Cantidad de Articulos -->
          <div class="col">
            <ul class="pagination justify-content-end mb-0">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </div> <!-- Navegacion entre paginas -->
        </div>

      </div> <!-- Navegacion -->
    </div>
  </main> <!-- container -->
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
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>


</body>

</html>