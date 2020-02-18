<?php

    $sql=" select * from productos where id_producto = ".$_GET["id"];
    $consulta = $db->prepare($sql);  
    $consulta->execute();
    $productoUpda = $consulta->fetch(PDO::FETCH_ASSOC); 
    
?>

<div class="row justify-content-center">
    <div class="col-8 text-center bg-light">
        <div class="card-body">
            <h3 class="card-title"> Subir Imagenes </h3>
                <form enctype="multipart/form-data" action="Panel.php" method="POST">
                    <div class="form-group d-flex align-items-center">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="input-id">Id</span>
                            </div>
                            <input type="text" name="id" value="<?php echo $productoUpda["id_producto"] ?>" class="form-control" aria-label="Recipient's username" aria-describedby="input-id">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="input-id">Nombre</span>
                            </div>
                            <input type="text" name="nombre" value="<?php echo $productoUpda["nombre"] ?>" class="form-control" aria-label="Recipient's username" aria-describedby="input-nombre">
                        </div>
                    </div>
                    <div class="custom-file mb-2">
                        <input type="file" class="custom-file-input" id="customFileLang" lang="es" name="imagen">
                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                    </div>
                    <button class="btn btn-success" name="subirImg">Subir</button>
                </form>
        </div>
    </div> <!-- subir imagen -->

    <div class="col-8 mt-4">
        <div class="row">
        <?php $galeria = $producto->mostrarImagenes($db);

            foreach($galeria as $img){
                foreach ($img as $columna => $valor ) {
                    if ($columna == "id_galeria"){
                        $id_galeria = $valor;
                    } 
                    if ($columna == "id_producto"){
                        $id_producto = $valor;
                    } 
                    if ($columna == "url") {
                        $url =  $valor;
                    }
                    if ($columna == "tienda" && $valor == FALSE) { ?>
                        <div class="col-3 mb-2 text-center">
                            <a href="Panel.php?tiendaIMG=1&&idProducto=<?php echo $id_producto ?>&&idGaleria=<?php echo $id_galeria ?>">
                                <img src='<?php echo $url ?>' alt='12' class='img-thumbnail'>
                            </a>
                            <a href="Panel.php?borrarIMG&&idProducto=<?php echo $id_producto ?>&&idGaleria=<?php echo $id_galeria ?>" class="btn btn-danger btn-sm mt-1">
                                Eliminar
                            </a>
                        </div> 
            <?php   }
                    if ($columna == "tienda" && $valor == TRUE) {    ?>
                        <div class="col-3 mb-2 text-center">
                            <a href="Panel.php?tiendaIMG=1&&idProducto=<?php echo $id_producto ?>&&idGaleria=<?php echo $id_galeria ?>">
                                <img src='<?php echo $url ?>' alt='12' class='img-thumbnail bg-success'>
                            </a>
                            <a href="Panel.php?borrarIMG&&idProducto=<?php echo $id_producto ?>&&idGaleria=<?php echo $id_galeria ?>" class="btn btn-danger btn-sm mt-1">
                                Eliminar
                            </a>
                        </div> 
            <?php   }
                }
            }   ?>

        </div>
    </div>
</div>