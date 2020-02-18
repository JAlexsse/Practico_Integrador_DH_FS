<div class="row">
                    <div class="col-8 mx-auto">
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
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Seleccione Marca</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01" name="marcaP">
                                        <?php 
                                                $marca = new Marcas();
                                                $marcas = $marca->getMarcas($db);
                                                foreach ($marcas as $key) : ?>
                                                <option value="<?php echo $key["id_marca"] ?>"><?=$key["nombre"]?></option>
                                        <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <?php 	$Categoria = new Categorias();
						                        $categoriaPadre = $Categoria->getPadres($db);
						                        $categoriaHijo = $Categoria->getAllCategoria($db);
                                                $defaultCategoria = true;
						                        foreach($categoriaPadre as $keyP): ?>

                                        <div class="col-6 mb-2">
                                            <div class="card card-body">
                                                <h5 class="card-title"><?php echo $keyP["nombre_categoria"] ?></h5>
                                                <?php 
								                foreach ($categoriaHijo as $keyH) : 
									                if ($keyH["id_categoria_padre"] == $keyP["id_categoria"]):
								                ?>
                                                <div class="input-group mb-1">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <input type="radio" id="radioC" name="idCategoria" value="<?=$keyH['id_categoria']?>">
                                                        </div>
                                                    </div>
                                                    <label for="radioC" class="form-control" ><?=$keyH['nombre_categoria']?></label>
                                                </div>
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