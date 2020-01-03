


<?php
/*var_dump($_POST['nombre_del_boton']);
var_dump($_COOKIE['conectado']);*/
if(isset($_POST['nombre_del_boton']) && $_POST['nombre_del_boton'] == "Salir"  )
{

    setcookie('conectado','',time()-100);
    setcookie('emailLog','',time()-100);
    setcookie('passLog','',time()-100);


}?>


<header>

    <div class="header-nav-top">
      <div class="nav-contacto float-left">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link active" href="tel:543516999999" target="_blank"> <img src="img/ICONOS/telefono.svg" alt="" height="16"> +54 3516 999 999</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mailto:info@bicisnoe.com.ar" target="_blank"> <img src="img/ICONOS/mail.svg" alt="" height="16"> info@bicisnoe.com.ar</a>
          </li>
        </ul>
      </div>
      <div class="nav-nosotros float-right d-none d-md-block"> <!--oculto en mobile-->
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link active" href="contacto.php">sobre nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="faq.php">preguntas frecuentes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.php">contactanos</a>
          </li>
          <li class="nav-item">



              <?php
              if(isset($_COOKIE["conectado"]) && !isset($_POST['nombre_del_boton']))
              {
                  if ($_COOKIE["conectado"] == true)
                  { ?>

                                  <a href="" class= "nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="buttom" aria-expanded="false" ><?php echo $_COOKIE['emailLog'] ; ?>

                                   <span class="glyphicon glyphicon-dashboard " aria-hidden="true" > </span>   <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu header-nav-top text-center text-uppercase font-weight-bold">
                                    <li>

                                        <a href="usuario.php">Perfil</a>

                                    </li>
                                    <li>
                                        <a href="tienda.php">Compras</a>
                                    </li>

                                    <li>
                                        <form name="form1" method="post" action="index.php">
                                            <input type="submit" name="nombre_del_boton" class="nav-menu-nosostros btn-sm btn btn-link text-dark list-unstyled small text-uppercase font-weight-bold "id="nombre_del_boton" value="Salir" >
                                        </form>


                                    </li>


                                </ul>




              <?php
                  }

              }

              else {
                  ?>


                  <a class="nav-link" href="login.php">Ingresar a mi cuenta</a>

                  <?php

              } ?>


          </li>
        </ul>
      </div>
    </div>
    <nav class="navbar navbar-expand-md navbar-dark col-12" style="background-color:rgb(30,30,30)">
      <a class="navbar-brand" href="index.php"> <img src="img/ICONOS/LOGO/logo_blanco.svg" alt="logo" height="35"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="text-align:center;">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link titulos-header text-light" href="tienda.php">BICICLETAS <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link titulos-header text-light" href="tienda.php">EQUIPOS Y ACCESORIOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link titulos-header text-light" href="tienda.php">REPUESTOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link titulos-header text-light" href="tienda.php">CUBIERTAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link titulos-header text-light" href="tienda.php">SALE !</a>
          </li>
        </ul>
      </div>
      <div class="nav-item d-block d-md-none"> <!--visible en mobile-->



          <?php
          if(!isset($_COOKIE["conectado"]) || isset($_POST['nombre_del_boton']))
          {
              ?>

              <a class="nav-link" href="login.php">Ingresar</a>


              <?php
          }
          ?>



      </div>
      <div class="navbar d-flex justify-content-end" style="background-color:rgb(30,30,30)"> 
        <a class="search" href="tienda.php"><img src="img/ICONOS/UTILIDAD AMARILLOS/busqueda.svg" alt="" height="18"></a>
        <a class="bag" href="usuario.php"><img src="img/ICONOS/UTILIDAD AMARILLOS/bolsa.svg" alt="" height="20"></a>
      </div>
    </nav>
    <div class="nav-menu-nosostros d-block d-md-none"> <!--visible en mobile-->
      <div class="row w-100" style="margin: 0%; padding: 0%;">
        <div class="nav-menu col-5">
          <a class="nav-link" href="faq.php">preguntas frecuentes</a>
        </div>
        <div class="nav-menu col-2">
          <a class="nav-link" href="contacto.php">contactanos</a>
        </div>
        <div class="nav-menu col-5">

            <?php
            if(isset($_COOKIE["conectado"]) && !isset($_POST['nombre_del_boton']))
            {
                if ($_COOKIE["conectado"] == true)
                { ?>

                    <!-- <a class="nav-link" href="registro.php"> <?php echo $_COOKIE['emailLog'] ; ?> </a>-->


                             <a href="" class= "nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="buttom" aria-expanded="false" ><?php echo $_COOKIE['emailLog'] ; ?>

                                 <span class="glyphicon glyphicon-dashboard " aria-hidden="true" > </span>   <span class="caret"></span>
                              </a>

                              <ul class="dropdown-menu nav-menu-nosostros text-center text-uppercase font-weight-bold">
                                  <li><a href="usuario.php">Perfil</a></li>
                                  <li> <a href="carrito.php">Compras</a></li>

                                  <li>
                                      <form name="form1" method="post" action="index.php">
                                          <input type="submit" name="nombre_del_boton" class=" btn-sm btn btn-link text-dark list-unstyled small text-uppercase font-weight-bold"id="nombre_del_boton" value="Salir" >
                                      </form>

                                  </li>


                              </ul>


            <?php
                }

            }

            else {
                ?>

                <a class="nav-link" href="registro.php">Registrate</a>

                <?php

            }


             ?>

        </div>
      </div>
    </div>
</header>
