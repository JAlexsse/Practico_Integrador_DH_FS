<?php

class Color{
private $id;
private $nombre;
private $imagen;

public function __construct($id=null, $nombre, $imagen){
    $this->id = $id;
    $this->nombre = $nombre;
    $this->imagen = $imagen;
}

public function getId(){
    return $this->id;
}
public function setId(){
     $this->id =$id;
}
public function getNombre(){
    return $this->nombre;
}
public function setNombre(){
     $this->nombre =$nombre;
}
public function getImagen(){
    return $this->imagen;
}
public function setImagen(){
     $this->imagen =$imagen;
}

}


?>