<?php

class ProductosPorColor{
private $id;
private $Productos;
private $Color;

public function getId(){
    return $this->id;
}
public function setId(){
     $this->id = $id;
}
public function getProductos(){
    return $this->Productos;
}
public function setProductos(){
     $this->Productos = $Productos;
}
public function getColor(){
    return $this->Color;
}
public function setColor(){
     $this->Color = $Color;
}

}


?>
