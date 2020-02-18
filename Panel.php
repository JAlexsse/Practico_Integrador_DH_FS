<?php
  include ("Clases/Productos.php");
  include ("Clases/Marcas.php");
  include ("Clases/Categorias.php");
  include ("pdo.php");
  
  $producto = new Productos();

  if ($_POST){
      if (isset($_POST["nuevoProducto"])){
            $nombre = $_POST["nombre"];
            $precio = $_POST["precio"];
            $stock = $_POST["stock"];
            $marca = new Marcas($_POST["marcaP"]);
            $catego = new Categorias($_POST["idCategoria"]);
            $descripcion = $_POST["descripcion"];
            $productoNuevo = new Productos(null,$nombre,$descripcion,$precio,$stock,null,$catego,$marca,TRUE);
            $productoNuevo->agregar_productos($db);
      } 
      if(isset($_POST["actualizar"])){
        $producto->actualizar_producto($db);
      }
      if(isset($_POST["subirImg"])){

        $ext = pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
        $archivoTemporal = $_FILES['imagen']['tmp_name'];
        $nuevaRuta = dirname(__file__);
        $nuevaRuta = $nuevaRuta . '/img/PRODUCTOS/Online/';
        if( move_uploaded_file($archivoTemporal, $nuevaRuta . $_POST["id"] . $_FILES["imagen"]["name"]) ){
            $producto->agregarImagenes($db);
        }else{
            echo "No se pudo subir el archivo ";
        };

        header("location:Panel.php?estado=imagenes&&id=".$_POST["id"]);
      }
  }


  if ($_GET){
    if (isset($_GET["estadoLogico"])){
        $producto->setEstado($_GET["estadoLogico"],$_GET["id"],$db);
        header("location:Panel.php");
    }
    if (isset($_GET["tiendaIMG"])){
        $producto->imagenTienda($db);
        header("location:Panel.php?estado=imagenes&&id=".$_GET["idProducto"]);
    }
    if (isset($_GET["borrarIMG"])){
        $producto->borrarImagen($db);
        header("location:Panel.php?estado=imagenes&&id=".$_GET["idProducto"]);
    }
  }

  $producto = new Productos();
  $productos=$producto->setProductosPanel($db);

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css"
        integrity="sha384-v8BU367qNbs/aIZIxuivaU55N5GPF89WBerHoGA4QTcbUjYiLQtKdrfXnqAcXyTv" crossorigin="anonymous">

    <title>Panel de Control</title>
</head>

<body>

    <?php include 'php/header.php'; ?>

    <main class="container-fluid">

        <div class="row justify-content-center ">

            <div class="col-12 col-lg-2 text-left bg-dark pt-3 min-vh-100">

                <h4 class="my-2 text-white">Panel de Control</h4>

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="Panel.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Galeria Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Usuarios</a>
                    </li>
                </ul>
            </div> <!-- Nav Panel de Control -->

            <div class="col-12 col-lg-10 py-2">

                <?php if(isset($_GET["estado"]) && $_GET["estado"] == "update"){

                    include("php/panelUpdate.php");

                 } elseif(isset($_GET["estado"]) && $_GET["estado"] == "agregar" ){ 

                    include("php/panelAgregar.php");

                } elseif(isset($_GET["estado"]) && $_GET["estado"] == "imagenes" ){ 

                    include("php/panelImagenes.php");

                 } else { ?>
                <!-- Panel Default -->
                <div class="d-flex justify-content-end ">
                    <a href="Panel.php?estado=agregar" class="btn btn-success my-2">Agregar +</a>
                </div>

                <table class="table table-border">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead> <!-- Columnas Tabla -->
                    <tbody>
                        <?php foreach ($productos=$producto->setProductosPanel($db) as $key):?>
                        <tr>
                            <td><?=$key["id_producto"]?></td>
                            <td><?=$key["nombreProducto"]?></td>
                            <td>$<?=$key["precio"]?></td>
                            <td><?=$key["stock"]?></td>
                            <td><?=$key["marca"]?></td>
                            <td><?=$key["categoria"]?></td>
                            <td>
                                <a href="Panel.php?estado=update&&id=<?php echo $key["id_producto"]?>"
                                    class="btn btn-warning"><i class="fas fa-marker"></i></a>
                                <?php if ($key["estado"]==true): ?>
                                <a href="Panel.php?estadoLogico=FALSE&&id=<?php echo $key["id_producto"]?>"
                                    class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                <?php else: ?>
                                <a href="Panel.php?estadoLogico=TRUE&&id=<?php echo $key["id_producto"]?>"
                                    class="btn btn-success"><i class="fas fa-check-square"></i></a>
                                <?php endif; ?>
                                <a href="Panel.php?estado=imagenes&&id=<?php echo $key["id_producto"]?>"
                                    class="btn btn-info"><i class="fas fa-image"></i></i></a>
                            </td>

                        </tr>
                        <?php endforeach;?>

                    </tbody> <!-- Registros Tabla -->
                </table>

                <?php } ?>

            </div>

        </div>

    </main>


    <?php include 'php/footer.php'; ?>



    <!--Script Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</body>

</html>