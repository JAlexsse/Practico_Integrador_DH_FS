<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Bitter|Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/stylehome.css">


    <title>CONTACTO</title>
  </head>
  <body>
    <?php include 'php/header.php'; ?>


    <div class="jumbotron header-contacto">
      <div class="row container col-md-12 h-100 justify-content-center m-0 ">

        <h2 class="text-white my-auto titulos-importantes">
          <strong>
            CONTACTO
          </strong>
        </h2>

      </div>
    </div>


    <section class="servicios">

        <div class="container">
            <div class="row">

                <div class="col-12 col-md-4 col-lg-4 col-xl-4">

                    <div class="elServicio">
                        <img src="img/iconos/telefono.svg" alt="">
                        <p class="texto-parrafo"><a href="tel:0351-157870362">0351-157870362</a></p>

                        <img src="img/iconos/utilidades redes/locate.ico" alt="">
                        <p class="texto-parrafo"><a href="https://www.google.com/maps?ll=-31.409205,-64.189415&z=16&t=m&hl=es-419&gl=AR&mapclient=embed&q=La+Rioja+532+X5022+FRL+C%C3%B3rdoba">La Rioja 532 Cordoba</a></p>


                    </div>

                </div> <!--fin class col-->


                <div class="col-12 col-md-4 col-lg-4 col-xl-4">

                    <div class="elServicio">

                        <img src="img/iconos/mail.svg" alt="">
                        <p class="texto-parrafo"> <a href="mailto:elcorreoquequieres@correo.com">info@bicisnoe.com.ar</a></p>

                        <img src="img/iconos/utilidades redes/instagram.svg" alt="">
                        <p class="texto-parrafo"> <a href="https://www.instagram.com/">/noebikes</a> </p>





                    </div>

                </div> <!--fin class col-->

                <div class="col-12 col-md-4 col-lg-4 col-xl-4">

                    <div class="elServicio">

                        <img src="img/iconos/utilidades redes/facebook.ico" alt="">
                        <p class="texto-parrafo">  <a href="https://www.facebook.com">/noebikes</a> </p>

                        <img src="img/iconos/utilidades redes/twitter.ico" alt="">
                        <p class="texto-parrafo"> <a href="https://twitter.com/">@noebikes</a> </p>

                    </div>

                </div> <!--fin class col-->




                <div class="col-12 col-md-12 col-lg-6">

                    <div class="elServicio" id="mapa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3405.1785826029077!2d-64.1916032853326!3d-31.409205481406484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9432987eb497a393%3A0x7b306ed4738710de!2sLa%20Rioja%20532%2C%20X5022%20FRL%2C%20C%C3%B3rdoba!5e0!3m2!1ses-419!2sar!4v1576044188634!5m2!1ses-419!2sar" width="540" height="540" frameborder="0" style="border:0;" allowfullscreen=""></iframe>



                    </div>

                </div> <!--fin class col-->
                <div class="col-12 col-md-12 col-lg-6">

                    <div c  lass="elServicio" id="formulario">
                        <h2 class="titulos-medio">Contactate con nosotros</h2>
                        <img src="img/iconos/utilidades redes/chat.ico" alt="">
                        <form class="row justify-content-center py-3">
                            <div class="col-9 my-2 texto-parrafo">
                                <label for="" class="text-white" ></label>
                                <input type="text" class="form-control" required placeholder="Nombre*">
                                <label for="" class="text-white mt-1"></label>
                                <input type="email" class="form-control" required placeholder="Email*">
                                <label for="message" class="h4 "></label>
                                <textarea id="message" class="form-control" rows="5" placeholder="Escriba su consulta" required></textarea>
                            </div>
                            <div class="col-12 py-3 text-center botones-texto">
                                    <input type="submit" class="btn btn-lg bg-yellow" value="Enviar" />
                            </div>
                        </form>

                    </div> <!--  Formulario para contacto -->

                </div> <!--fin class col-->



            </div>

        </div>

    </section> <!--fin clase servicios-->

    <?php include 'php/footer.php';?>

    

  </body>
</html>
