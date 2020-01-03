<?php

  if($_COOKIE){
    if ($_COOKIE["conectado"]==true)
    {
      echo("conectado");
      return;
    }
  }

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
      <?php
      $cid = $_POST["cid"];
      $uid = $_POST["uid"];
      $date = $_POST["date"];
      $message = $_POST["message"];

      echo '<div class="flex justify-content-center col-md-8">
            <div class="card producto col-md-12 p-0 mt-3">
              <div class="card-header text-light noe-black">
                <p class="titulos-medio">Edita tu comentario</p>
              </div>
              <div class="card-body">
                <!-- seccion para dejar comentarios -->
                <form action="'.editComentarios($conn).'" method="post">
                  <input type="hidden" name="cid" value="'.$cid.'">
                  <input type="hidden" name="uid" value="'.$uid.'">
                  <input type="hidden" name="date" value="'.$date.'">

                  <textarea name="message" class="col-md-12">'.$message.'</textarea>
                  <button name="commentSubmit" type="submit" class="btn noe-yellow botones-texto"> Editar </button>
                </form>
              </div>
            </div>

          </div>
        </div>';
        ?>

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
