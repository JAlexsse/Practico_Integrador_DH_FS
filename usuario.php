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
  <link rel="stylesheet" href="css\styleusuario.css">

  <title>Mi usuario</title>
</head>

<body>

  <?php include 'php/header.php'; ?>
    <!--DETALLE USUARIO-->
    <main>
      <!-- Header Main -->
      <div class="header-usuario mb-3 row justify-content-center">
        <div class="col-lg-12 justify-content-center m-0">
          <img src="img/IMAGENES/HEADER_USUARIO-100.jpg" alt="" class="img-fluid" alt="Responsive image">
        </div>
      </div>
      <div class="container col-md-12 h-100 usuario overflow-hidden p-0">
        <!--fila-->
        <div class="row">
          <!--imagen de usuario-->
          <div class="d-flex foto float-left bg-white  justify-content-center col-lg-4 usuario_col align-items-center">
            <img src="img/ICONOS/Maria-Sharapova.jpg" width="200" height="200" alt="user-image" class="user-image">
          </div>

          <!--descripcion del usuario-->
          <div class="informacion float-left p-5  col-lg-4 usuario_col">
            <!--nombre de usuario-->
            <h4 class="titulos-medio">
                Maria Sharapova
            </h4>
            <!--texto del usuario-->
            <p class="texto-parrafo">I am a person who is positive about every aspect of life.</p>
            <p class="texto-parrafo">There are many things I like to do, to see, and to experience.
            I like to read, I like to write; I like to think, I like to dream;
            I like to talk, I like to listen.
            </p>
          </div>

          <!--informacion personal-->
          <div class="detalles float-left text-white p-5 col-lg-4 usuario_col">
            <h4 class="align-center titulos-medio">
                Informacion Personal
            </h4>
            <!--lista con mail, sexo, fecha de nacimiento y link a wishlist-->
            <ul class="p-0 row align-items-start">
              <li class="col-md-12">
                <h5 class="col-md-6 texto-parrafo">
                  <strong>Email</strong>
                  </h5><p class="col-md-6 texto-parrafo">maria_sharapova@email.com</p>
              </li>
              <li class="col-md-12">
                <h5 class="col-md-6 texto-parrafo">
                  <strong>Sexo</strong>
                </h5><p class="col-md-6 texto-parrafo">Femenino</p>
              </li>
              <li class="col-md-12">
                <h5 class="col-md-6 texto-parrafo">
                  <strong>Fecha de nacimiento</strong>
                </h5><p class="col-md-6 texto-parrafo">13/11</p>
              </li>
              <li class="col-md-12">
                <h5 class="col-md-6 texto-parrafo">
                  <strong>Wishlist</strong>
                </h5><a href="Lista de deseos" class="col-md-6 texto-parrafo">Lista de deseos</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
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
