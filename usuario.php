<?php

require_once 'controladores/controladorHeader.php';


//





// Foto perfil //


$errores=[];

if(!empty($_FILES['foto-perfil'])){
  $maximobytes=3000000;
  if($_FILES['foto-perfil']['size']>$maximobytes){ 
    $errores['foto-perfil'][]="El tamaño de la imagen debe ser menor a ...bytes";
  }
  $nombreArchivo= $_FILES['foto-perfil']['name'];
  $extension=pathinfo($nombreArchivo, PATHINFO_EXTENSION);
  $extension=strtolower($extension);
  if($extension !="jpg" && $extension !="png" && $extension !="jpeg"){
    $errores['foto-perfil'][]="Las extensiones válidas son JPG, PNG o JPEG.";
  }


if(count($errores)==0){
  
  $extension = pathinfo($_FILES['foto-perfil']['name'], PATHINFO_EXTENSION);
  $archivoTemporal = $_FILES['foto-perfil']['tmp_name'];
  $nuevaRuta = dirname(__file__);
  $nuevaRuta = $nuevaRuta . "/archivos/" ;
  $nombreArchivo = "foto-perfil_" .uniqid() ."." .$extension; 

  move_uploaded_file($archivoTemporal, $nuevaRuta . $nombreArchivo);
}
}

?>

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
    <link rel="stylesheet" href="css/style_usuario.css">
    <link rel="stylesheet" href="css/fonts.css">

    <title>Mi Usuario</title>
  </head>
  <body>
    
    <?php include 'php/header.php'; ?>

    <!--DETALLE USUARIO-->
    <main>

      <!-- Header Main -->
      <div class="header-usuario mb-3 m-auto row justify-content-center p-0 w-100">
        <div class="col-lg-12 justify-content-center m-0 p-0">
          <img src="img/IMAGENES/HEADER_USUARIO-100.jpg" alt="" class="img-fluid" alt="Responsive image">
        </div>
      </div>
      
      <div class="usuario overflow-hidden p-0 my-3">
        <!--fila-->
        <div class="row px-0">
          <!--imagen de usuario-->
          <div class="foto bg-white  justify-content-center col-lg-3 usuario_col align-items-center">

            <div class="row px-0">

              <div class="col-12 text-center"> 
                <img src="archivos/<?php echo($nombreArchivo) ?>" width="200" height="200" alt="foto-perfil" class="user-image"> 
              </div>
              <div class="col-12 text-center">
                <form action="" method="post" enctype="multipart/form-data">
                  <div class="row px-0">
                    <div class="col-12 p-3"> 
                      <span class="btn btn-file position-relative overflow-hidden">
                        <label for="foto-perfil">Agregar/ Cambiar foto</label>
                        <input type="file" class="position-absolute" name="foto-perfil">
                      </span>
                    </div>
                    <div class="col-12 py-2 text-center botones-texto">
                      <input type="submit" class="btn btn-lg btn-light" value="Subir" />
                    </div> 
                  </div>
                </form>
              </div>
              <div class="col-12 text-center">
                <?php 
                  if(isset($errores['foto-perfil'])){
                    foreach($errores['foto-perfil'] as $error){
                      echo "<small class='text-danger'>".$error .'</small>';
                    }
                  }
                ?>
              </div>
            
            </div>
          
          </div>
          
          <!--descripcion del usuario-->
          <div class="informacion py-3 px-4 col-lg-4 usuario_col">
            <!--nombre de usuario-->
            <h4 class="titulos-medio px-3">
                Maria Sharapova
            </h4>
            <!--texto del usuario-->
            <p class="texto-parrafo px-3">I am a person who is positive about every aspect of life.</p>
            <p class="texto-parrafo px-3">There are many things I like to do, to see, and to experience.
            I like to read, I like to write; I like to think, I like to dream;
            I like to talk, I like to listen.
            </p>
          </div>

          <!--informacion personal-->
          <div class="detalles noe-black text-white py-3 px-4 col-lg-5 usuario_col">
            <h4 class="titulos-medio px-3">Informacion Personal </h4>
            <!--lista con mail, sexo, fecha de nacimiento y link a wishlist-->
            <div class="row pt-3">
              <div class="col-12 row p-2">
                <h5 class="col-md-4 texto-parrafo px-4">
                  <strong>Email</strong>
                </h5>
                <p class="col-md-8 texto-parrafo px-4">maria_sharapova@email.com</p>
              </div>
              <div class="col-12 row p-2">
                <h5 class="col-md-4 texto-parrafo px-4">
                  <strong>Sexo</strong>
                </h5>
                <p class="col-md-8 texto-parrafo px-4">Femenino</p>
              </div>
              <div class="col-12 row p-2">
                <h5 class="col-md-4 texto-parrafo px-4">
                  <strong>Fecha de Nacimiento</strong>
                </h5>
                <p class="col-md-8 texto-parrafo px-4">13/11</p>
              </div>
              <div class="col-12 row p-2">
                <h5 class="col-md-4 texto-parrafo px-4">
                  <strong>Wishlist</strong>
                </h5>
                <a href="carrito.php#nav-guardados-tab" class="col-md-8 texto-parrafo px-4 text-white wishlist">
                  Lista de deseos
                </a>
              </div>
           

            </div>
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
