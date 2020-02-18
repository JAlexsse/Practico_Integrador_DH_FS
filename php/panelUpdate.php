<?php

    $sql=" select * from productos where id_producto = ".$_GET["id"];
    $consulta = $db->prepare($sql);  
    $consulta->execute();
    $productoUpda = $consulta->fetch(PDO::FETCH_ASSOC); 
    
?>
<div class="row">

    <div class="col-12 col-lg-8 mx-auto">
        <h3 class="text-muted text-center">Actualizar Producto</h3>
        <div class="card card-body">
            <form action="Panel.php" method="POST">
                <div class="form-group">
                    <label for="id" class=""> Id </label>
                    <input type="text" name="id" value="<?php echo $productoUpda["id_producto"] ?>" class="form-control"
                        placeholder="Colocar Nombre">
                    <label for="nombre" class=""> Nombre </label>
                    <input type="text" name="nombre" value="<?php echo $productoUpda["nombre"] ?>" class="form-control"
                        placeholder="Colocar Nombre">
                    <label for="Precio" class=""> Precio $</label>
                    <input type="text" name="precio" value="<?php echo $productoUpda["precio"] ?>" class="form-control"
                        placeholder="Colocar Precio">
                    <label for="Stock" class=""> Stock </label>
                    <input type="text" name="stock" value="<?php echo $productoUpda["stock"] ?>" class="form-control"
                        placeholder="Colocar Stock">
                </div>
                <div class="form-group">
                    <label for="descripcion" class=""> Descripcion </label>
                    <textarea class="form-control" placeholder="Actualizar Descripcion" name="descripcion"
                        rows="3"><?php echo $productoUpda["descripcion"] ?></textarea>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Seleccione Marca</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="marcaP">
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
                </div> <!-- Modificar Marca -->
                <div class="form-group">
                    <div class="row">
                        <?php 	$Categoria = new Categorias();
						                        $categoriaPadre = $Categoria->getPadres($db);
						                        $categoriaHijo = $Categoria->getAllCategoria($db);
						                        foreach($categoriaPadre as $keyP): ?>

                        <div class="col-12 col-md-6 mb-2">
                            <div class="card card-body">
                                <h5 class="card-title"><?php echo $keyP["nombre_categoria"] ?></h5>
                                <?php 
								                foreach ($categoriaHijo as $keyH) : 
									                if ($keyH["id_categoria_padre"] == $keyP["id_categoria"]):
								                ?>
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <?php
                                                                if($productoUpda['id_categoria']==$keyH['id_categoria']) {
                                                                    echo "<input type='radio' checked id='radioC' name='idCategoria' value=".$keyH['id_categoria'];
                                                                } else {
                                                                    echo "<input type='radio' id='radioC' name='idCategoria' value=".$keyH['id_categoria'];
                                                                }          
                                                        ?>
                                            <input type="radio" id="radioC" name="idCategoria"
                                                value="<?=$keyH['id_categoria']?>">
                                        </div>
                                    </div>
                                    <label for="radioC" class="form-control"><?=$keyH['nombre_categoria']?></label>
                                </div>
                                <?php
									                endif;
								                endforeach;
								                ?>
                            </div>
                        </div>

                        <?php endforeach; ?>
                    </div>
                </div> <!-- Modificar Categoria -->
                <button class="btn btn-success" name="actualizar">Actualizar</button>
            </form>
        </div>
    </div>
</div> <!-- Actualizar Producto -->