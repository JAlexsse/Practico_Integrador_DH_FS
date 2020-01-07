<?php

require_once 'controladores/controladorHeader.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Bitter|Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css\fonts.css">
  <link rel="stylesheet" href="css/stylehome.css">
  <link rel="stylesheet" href="css/style-carrito.css">
  <title>Carrito</title>
</head>

<body>
  <?php include 'php/header.php'; ?>

  <div style="margin: 15px;">
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-carrito-tab" data-toggle="tab" href="#nav-carrito" role="tab"
          aria-controls="nav-carrito" aria-selected="true">Carrito</a>
        <a class="nav-item nav-link" id="nav-guardados-tab" data-toggle="tab" href="#nav-guardados" role="tab"
          aria-controls="nav-guardados" aria-selected="false">Guardados</a>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-carrito" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="container px-3 py-2 mx-auto">
        <div class="row d-flex justify-content-center titulos-items">
            <div class="col-3">
                <h5 class="heading mt-2">Producto</h5>
            </div>
            <div class="col-9">
                <div class="row text-center">
                    <div class="col-6">
                      <h6 class="mt-2">Descripcion</h6>
                    </div>
                    <div class="col-3">
                      <h6 class="mt-2">Catidad</h6>
                    </div>
                    <div class="col-3">
                      <h6 class="mt-2">Precio</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center border-top">
            <div class="col-3">
                <div class="row d-flex">
                    <div class="producto"> 
                      <img src="img/PRODUCTOS/BICICLETAS/carretera.jpg" class="producto-img w-100"> 
                    </div>
                </div>
            </div>
            <div class="my-auto col-9">
                <div class="row text-center">
                    <div class="col-6">
                        <h6 class="mob-text">Bici Noe</h6>
                        <p class="mob-text"> Color: Amarillo </p>
                    </div>
                    <div class="col-3">
                      <div class="row d-flex justify-content-center px-3">
                        <p class="mb-0" id="cnt2">1</p>
                        <div class="d-flex flex-column plus-minus"> 
                          <span class="vsm-text plus">+</span> 
                          <span class="vsm-text minus">-</span> 
                        </div>
                      </div>
                    </div>
                    <div class="col-3">
                        <h6 class="mob-text">$18.150,00</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center border-top">
            <div class="col-3">
                <div class="row d-flex">
                    <div class="producto"> 
                      <img src="img/PRODUCTOS/EQUIPO Y ACCESORIOS/casco2.jpg" class="producto-img w-100 card-img"> 
                    </div>
                </div>
            </div>
            <div class="my-auto col-9">
                <div class="row text-center">
                    <div class="col-6">
                      <h6 class="mob-text">Casco Noe</h6>
                      <p class="mob-text"> Color: Negro </p>
                    </div>
                    <div class="col-3">
                        <div class="row d-flex justify-content-center px-3">
                            <p class="mb-0" id="cnt2">1</p>
                            <div class="d-flex flex-column plus-minus"> 
                              <span class="vsm-text plus">+</span> 
                              <span class="vsm-text minus">-</span> 
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <h6 class="mob-text">$3.500,00</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-3 radio-group">
                            <div class="row d-flex px-3 radio"> 
                              <img class="pay" src="https://i.imgur.com/WIAP9Ku.jpg">
                              <p class="my-auto">Credit Card</p>
                            </div>
                            <div class="row d-flex px-3 radio gray"> 
                              <img class="pay" src="https://i.imgur.com/OdxcctP.jpg">
                              <p class="my-auto">Debit Card</p>
                            </div>
                            <div class="row d-flex px-3 radio gray mb-3"> 
                              <img class="pay" src="https://i.imgur.com/cMk1MtK.jpg">
                              <p class="my-auto">PayPal</p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="row px-2">
                                <div class="form-group col-md-6"> 
                                  <label class="form-control-label">Name on Card</label>
                                    <input type="text" id="cname" name="cname" placeholder="Johnny Doe"> 
                                </div>
                                <div class="form-group col-md-6"> 
                                  <label class="form-control-label">Card Number</label>
                                  <input type="text" id="cnum" name="cnum" placeholder="1111 2222 3333 4444"> 
                                </div>
                            </div>
                            <div class="row px-2">
                                <div class="form-group col-md-6"> 
                                  <label class="form-control-label">Expiration Date</label> 
                                  <input type="text" id="exp" name="exp" placeholder="MM/YYYY">
                                </div>
                                <div class="form-group col-md-6"> 
                                  <label class="form-control-label">CVV</label> 
                                  <input type="text" id="cvv" name="cvv" placeholder="***"> 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-2">
                            <div class="row d-flex justify-content-between px-4">
                                <p class="mb-1 text-left">Subtotal</p>
                                <h6 class="mb-1 text-right">$21.650,00</h6>
                            </div>
                            <div class="row d-flex justify-content-between px-4">
                                <p class="mb-1 text-left">Envío</p>
                                <h6 class="mb-1 text-right">$0,00</h6>
                            </div>
                            <div class="row d-flex justify-content-between px-4" id="tax">
                                <p class="mb-1 text-left">Total (tax included)</p>
                                <h6 class="mb-1 text-right">$21.650,00</h6>
                            </div> 
                            <button class="btn-block btn-yellow"> 
                              <span> 
                                <span id="checkout">Checkout</span> 
                                <span id="check-amt">$21.650,00</span> 
                              </span> 
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
    
  <div class="tab-pane fade" id="nav-guardados" role="tabpanel" aria-labelledby="nav-profile-tab">
        <div class="row">
          <div class="col-12 col-md-12 text-center" height="50%">
            <h4> Aún no tenes productos guardados.</h4>
            <p>Si aún no estás decidido en comprar algún producto de tu carrito, podés dejarlo aquí.</p>
          </div>
        </div>
      </div>
    </div>
  </div>


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

<?php
        }

      } else { 
          
        header("Location: login.php");

              } ?>