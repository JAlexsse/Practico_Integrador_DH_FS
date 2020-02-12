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

      }
  }


  if ($_GET){
    if (isset($_GET["estadoLogico"])){
        $producto->setEstado($_GET["estadoLogico"],$_GET["id"],$db);
        $_GET["estadoLogico"]="";
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

            <div class="col-12 col-lg-2 text-left bg-dark pt-3">

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

            <div class="col-10 py-2">

                <?php if(isset($_GET["estado"]) && $_GET["estado"] == "update"){
                            
                            $sql=" select * from productos where id_producto = ".$_GET["id"];
                            $consulta = $db->prepare($sql);  
                            $consulta->execute();
                            $productoUpda = $consulta->fetch(PDO::FETCH_ASSOC);    
                ?>

                <div class="row">
                    <div class="col-4 mx-auto">
                        <h3 class="text-muted text-center">Actualizar Producto</h3>
                        <div class="card card-body">
                            <form action="Panel.php" method="POST">
                                <div class="form-group">
                                    <label for="nombre" class=""> Id </label>
                                    <input type="text" disabled name="id" value="<?php echo $productoUpda["id_producto"] ?>"
                                        class="form-control" placeholder="Colocar Nombre">
                                    <label for="nombre" class=""> Nombre </label>
                                    <input type="text" name="nombre" value="<?php echo $productoUpda["nombre"] ?>"
                                        class="form-control" placeholder="Colocar Nombre">
                                    <label for="Precio" class=""> Precio $</label>
                                    <input type="text" name="precio" value="<?php echo $productoUpda["precio"] ?>"
                                        class="form-control" placeholder="Colocar Precio">
                                    <label for="Stock" class=""> Stock </label>
                                    <input type="text" name="stock" value="<?php echo $productoUpda["stock"] ?>"
                                        class="form-control" placeholder="Colocar Stock">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion" class=""> Descripcion </label>
                                    <textarea class="form-control" placeholder="Actualizar Descripcion"
                                        name="descripcion"
                                        rows="3"><?php echo $productoUpda["descripcion"] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="marca">Seleccione una Marca</label>
                                    <select id="marca" name="marcaP">
                                    <?php 
                                        $marca = new Marcas();
                                        $marcas = $marca->getMarcas($db);
                                        foreach ($marcas as $key):
                                            if($productoUpda['id_marca']==$key['id_marca']) {
                                                echo "<option selected value='".$key['id_marca']."'>".$key['nombre']."</option>";
                                            } else {
                                                echo "<option value='".$key['id_marca']."'>".$key['nombre']."</option>";
                                            }          
                                    endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <?php 	$Categoria = new Categorias();
						                        $categoriaPadre = $Categoria->getPadres($db);
						                        $categoriaHijo = $Categoria->getAllCategoria($db);
						                        foreach($categoriaPadre as $keyP): ?>

                                        <div class="col-6">
                                            <div class="card card-body">
                                                <h5 class="card-title"><?php echo $keyP["nombre_categoria"] ?></h5>
                                                <?php 
								                foreach ($categoriaHijo as $keyH) : 
									                if ($keyH["id_categoria_padre"] == $keyP["id_categoria"]):
								                ?>
                                                <label for=""><?=$keyH['nombre_categoria']?></label>
                                                <input type="radio" name="idCategoria" value="<?=$keyH['id_categoria']?>">
                                                <?php
									                endif;
								                endforeach;
								                ?>
                                            </div>
                                        </div>

                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <button class="btn btn-success" name="actualizar">Actualizar</button>
                            </form>
                        </div>
                    </div>
                </div>

                <?php } elseif(isset($_GET["estado"]) && $_GET["estado"] == "agregar" ){ ?>

                <div class="row">
                    <div class="col-4 mx-auto">
                        <h3 class="text-muted text-center">Agregar Producto</h3>
                        <div class="card card-body">
                            <form action="Panel.php" method="POST">
                                <div class="form-group">
                                    <label for="nombre" class=""> Nombre </label>
                                    <input type="text" name="nombre" value="" class="form-control"
                                        placeholder="Colocar Nombre">
                                    <label for="Precio" class=""> Precio $</label>
                                    <input type="text" name="precio" value="" class="form-control"
                                        placeholder="Colocar Precio">
                                    <label for="Stock" class=""> Stock </label>
                                    <input type="text" name="stock" value="" class="form-control"
                                        placeholder="Colocar Stock">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion" class=""> Descripcion </label>
                                    <textarea class="form-control" placeholder="Actualizar Descripcion"
                                        name="descripcion" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="marca">Seleccione una Marca</label>
                                    <select id="marca" name="marcaP">
                                    <?php 
                                        $marca = new Marcas();
                                        $marcas = $marca->getMarcas($db);
                                        foreach ($marcas as $key) : ?>
                                        <option value="<?php echo $key["id_marca"] ?>"><?=$key["nombre"]?></option>
                                    <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <?php 	$Categoria = new Categorias();
						                        $categoriaPadre = $Categoria->getPadres($db);
						                        $categoriaHijo = $Categoria->getAllCategoria($db);
						                        foreach($categoriaPadre as $keyP): ?>

                                        <div class="col-6">
                                            <div class="card card-body">
                                                <h5 class="card-title"><?php echo $keyP["nombre_categoria"] ?></h5>
                                                <?php 
								                foreach ($categoriaHijo as $keyH) : 
									                if ($keyH["id_categoria_padre"] == $keyP["id_categoria"]):
								                ?>
                                                <label for=""><?=$keyH['nombre_categoria']?></label>
                                                <input type="radio" name="idCategoria" value="<?=$keyH['id_categoria']?>">
                                                <?php
									                endif;
								                endforeach;
								                ?>
                                            </div>
                                        </div>

                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <button class="btn btn-success" name="nuevoProducto" value="TRUE">Agregar</button>
                            </form>
                        </div>
                    </div>
                </div>

                <?php } else { ?>

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
                    </thead>
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
                            </td>

                        </tr>
                        <?php endforeach;?>

                    </tbody>
                </table>

                <?php } ?>

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
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</body>

</html>