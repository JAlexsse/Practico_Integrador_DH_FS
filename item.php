<?php

  include "php\comentarios.inc.php";
  include "php\databaseconnection.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Item</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Bitter|Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style_item.css">

</head>

<body>
  <?php include 'php/header.php'; ?>

    <main class="my-5">

      <div class="row justify-content-around">
        <!-- PRODUCTO + COMENTARIOS -->
        <div class="col-10 col-lg-9">
          <div class="row">

            <!-- Card de producto -->
            <div class="card col-md-12 producto p-0">
              <div class="row no-gutters">
                <!-- Galeria -->
                <aside class="col-md-6">
                  <div class="row">
                      <div class="preview-pic tab-content">
          						  <div class="tab-pane active" id="pic-1"><img class="col-12" src="img\PRODUCTOS\BICICLETAS\aventura.jpg"></div>
          						  <div class="tab-pane" id="pic-2"><img class="col-12" src="img\PRODUCTOS\BICICLETAS\item1.jpg"></div>
          						  <div class="tab-pane" id="pic-3"><img class="col-12" src="img\PRODUCTOS\BICICLETAS\item2.jpg"></div>
                        <div class="tab-pane" id="pic-4"><img class="col-12" src="img\PRODUCTOS\BICICLETAS\item3.jpg"></div>
                        <div class="tab-pane" id="pic-5"><img class="col-12" src="img\PRODUCTOS\BICICLETAS\item4.jpg"></div>
          						</div>
          						<ul class="preview-thumbnail nav overflow-hidden mb-3 mt-2">
          						  <li class="active flaot-left col-3"><a data-target="#pic-1" data-toggle="tab"><img class="col-12" src="img\PRODUCTOS\BICICLETAS\aventura.jpg"></a></li>
          						  <li class="float-left col-3"><a data-target="#pic-2" data-toggle="tab"><img class="col-12" src="img\PRODUCTOS\BICICLETAS\item1.jpg"></a></li>
          						  <li class="float-left col-3"><a data-target="#pic-3" data-toggle="tab"><img class="col-12" src="img\PRODUCTOS\BICICLETAS\item2.jpg"></a></li>
                        <li class="float-left col-3"><a data-target="#pic-4" data-toggle="tab"><img class="col-12" src="img\PRODUCTOS\BICICLETAS\item3.jpg"></a></li>
                        <li class="float-left col-3"><a data-target="#pic-5" data-toggle="tab"><img class="col-12" src="img\PRODUCTOS\BICICLETAS\item4.jpg"></a></li>
          						</ul>
                  </div> <!-- FIN ROW -->
                </aside>

                <!-- Descripcion del producto -->
                <main class="col-md-6 border-left p-1">

                  <article class="content-body">
                    <!-- Titulo -->
                    <h2 class="title titulos-medio mt-2">Bicicleta de carretera</h2>
                    <!-- estrellas y reviews del producto -->
                    <div class="rating-wrap my-3 overflow-hidden">
                      <div class="float-left ml-1">
                        <small class="tex-noe-black botones-texto">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                      <p class="text-muted float-left ml-1 texto-parrafo">132 reviews</p>
                      <p class="text-success float-left ml-1 texto-parrafo"></i> 154 orders </p>
                    </div>
                    <!-- precio -->
                    <div class="mb-3">
                      <p class="price titulos-medio">$18150.00</p>
                    </div>
                    <!-- descripcion del producto -->
                    <p class="texto-parrafo">Virgil Abloh’s Off-White is a streetwear-inspired collection that continues to break away from the conventions of mainstream fashion. Made in Italy, these black and brown Odsy-1000 low-top sneakers.</p>
                    <!-- relativo al modelo color y desde donde proviene -->
                    <dl class="row">
                      <dt class="col-sm-3 botones-texto">Model</dt>
                      <dd class="col-sm-9 botones-texto">Odsy-1000</dd>
                      <dt class="col-sm-3 botones-texto">Color</dt>
                      <dd class="col-sm-9 botones-texto">Noe Yellow</dd>

                      <dt class="col-sm-3 botones-texto">Delivery</dt>
                      <dd class="col-sm-9 botones-texto">Russia, USA, and Europe </dd>
                    </dl>
                    <!-- linea separadora entre descripcion y detalles de compra -->
                    <hr>

                    <div class="form-row p-1">
                      <!-- botones para elegir cantidad de productos -->
                      <div class="botones-texto">
                        <label>Cantidad</label>
                        <div class="input-group mb-3 input-spinner">
                          <div class="input-group-prepend">
                            <button class="btn btn-dark" type="button" id="button-plus"> + </button>
                          </div>
                          <input type="text" class="form-control col-md-3" value="1">
                          <div class="input-group-append">
                            <button class="btn btn-dark" type="button" id="button-minus"> − </button>
                          </div>
                        </div>
                        <!-- botones de compra y agregar al carrito -->
                        <a href="#" class="btn noe-yellow float-left botones-texto"> Comprar </a>
                        <a href="#" class="btn noe-yellow float-left ml-1 botones-texto"> <span class="text">Agregar al carrito</span> <i class="fas fa-shopping-cart"></i> </a>
                        <img src="img\ICONOS\UTILIDAD AMARILLOS\carrito.svg" width="40" alt="">
                      </div>
                    </div>
                  </article>
                </main>

              </div>
            </div>

            <!-- CARD DE COMENTARIOS -->
            <div class="card producto col-md-12 p-0 mt-3">
              <div class="card-header text-light noe-black">
                <p class="titulos-medio">Principales Comentarios</p>
              </div>
              <div class="card-body">
                <<?php getComentarios($conn); ?>
                <!-- boton para dejar comentarios -->
                <a class="btn noe-yellow botones-texto mb-3" data-toggle="collapse" href="#collapseComentario" role="button" aria-expanded="false" aria-controls="collapseComentario">Deja un comentario!</a>
                <!-- seccion para dejar comentarios -->
                <form action='<?php setComentarios($conn);?>' method='post' class='collapse' id='collapseComentario'>
                  <input type="hidden" name="uid" value="Anonymous">
                  <input type="hidden" name="date" value="<?php fecha(); ?>">

                  <textarea name="message" class="col-md-12"></textarea>
                  <button name="commentSubmit" type="submit" class="btn noe-yellow botones-texto"> Comenta! </button>
                </form>
              </div>
            </div>

          </div>
        </div>

        <!-- COLUMNA DE PRODUCTOS RELACIONADOS -->
        <div class="col-12 col-lg-2">

          <div class="row justify-content-center">

            <div class="col-10 noe-black my-2">
              <p class="titulos-header text-light ">Productos Relacionados</p>
            </div> <!-- fin titulo -->

            <div class="col-12">
              <div class="row justify-content-around">

                <div class="card producto mb-3 col-10 p-0">
                  <a href="" class="text-center p-3">
                    <img src="img\PRODUCTOS\CUBIERTAS\mavic-ksyrium-elite-wts-red-shimano.jpg" class="card-img-top img-fluid" alt="..." style="max-width: 13rem;">
                  </a>
                  <div class="card-body botones-texto my-0 py-0">
                    <a href="#">
                      <h6 class="mb-1">Cubiertas para ciudad</h6>
                    </a>
                    <p class="texto-parrafo mb-1">$1224.99</p>
                    <div class="overflow-hidden">
                      <!-- relativo a productos destacados -->
                      <img src="img\ICONOS\UTILIDAD AMARILLOS\etiqueta.svg" width="20" alt="" class="float-left">
                      <p class="float-left texto-parrafo text-noe-yellow mb-1">Producto destacado</p>
                    </div>
                  </div>
                  <div class="card-footer">
                    <small class="text-noe-black botones-texto">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  </div>
                </div>

                <div class="card producto mb-3 col-10 p-0">
                  <a href="" class="text-center p-3">
                    <img src="img\PRODUCTOS\CUBIERTAS\mavic-ksyrium-elite-wts-red-shimano.jpg" class="card-img-top img-fluid" alt="..." style="max-width: 13rem;">
                  </a>
                  <div class="card-body botones-texto my-0 py-0">
                    <a href="#">
                      <h6 class="mb-1">Cubiertas para ciudad</h6>
                    </a>
                    <p class="texto-parrafo mb-1">$1224.99</p>
                    <div class="overflow-hidden">
                      <!-- relativo a productos destacados -->
                      <img src="img\ICONOS\UTILIDAD AMARILLOS\etiqueta.svg" width="20" alt="" class="float-left">
                      <p class="float-left texto-parrafo text-noe-yellow mb-1">Producto destacado</p>
                    </div>
                  </div>
                  <div class="card-footer">
                    <small class="text-noe-black botones-texto">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  </div>
                </div>

                <div class="card producto mb-3 col-10 p-0">
                  <a href="" class="text-center p-3">
                    <img src="img\PRODUCTOS\CUBIERTAS\mavic-ksyrium-elite-wts-red-shimano.jpg" class="card-img-top img-fluid" alt="..." style="max-width: 13rem;">
                  </a>
                  <div class="card-body botones-texto my-0 py-0">
                    <a href="#">
                      <h6 class="mb-1">Cubiertas para ciudad</h6>
                    </a>
                    <p class="texto-parrafo mb-1">$1224.99</p>
                    <div class="overflow-hidden">
                      <!-- relativo a productos destacados -->
                      <img src="img\ICONOS\UTILIDAD AMARILLOS\etiqueta.svg" width="20" alt="" class="float-left">
                      <p class="float-left texto-parrafo text-noe-yellow mb-1">Producto destacado</p>
                    </div>
                  </div>
                  <div class="card-footer">
                    <small class="text-noe-black botones-texto">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  </div>
                </div>

                <div class="card producto mb-3 col-10 p-0">
                  <a href="" class="text-center p-3">
                    <img src="img\PRODUCTOS\CUBIERTAS\mavic-ksyrium-elite-wts-red-shimano.jpg" class="card-img-top img-fluid" alt="..." style="max-width: 13rem;">
                  </a>
                  <div class="card-body botones-texto my-0 py-0">
                    <a href="#">
                      <h6 class="mb-1">Cubiertas para ciudad</h6>
                    </a>
                    <p class="texto-parrafo mb-1">$1224.99</p>
                    <div class="overflow-hidden">
                      <!-- relativo a productos destacados -->
                      <img src="img\ICONOS\UTILIDAD AMARILLOS\etiqueta.svg" width="20" alt="" class="float-left">
                      <p class="float-left texto-parrafo text-noe-yellow mb-1">Producto destacado</p>
                    </div>
                  </div>
                  <div class="card-footer">
                    <small class="text-noe-black botones-texto">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  </div>
                </div>

              </div> <!-- fin subrow -->
            </div> <!-- fin columnas productos -->

          </div> <!-- fin row productos relacionados -->
        </div>

      </div> <!-- fin row -->

  </main>


  <!--footer-->
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
