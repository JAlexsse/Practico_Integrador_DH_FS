<?php

class Favoritos{
private $id;
private $Personas;
private $Productos;

public function __construct ($id = null, $Personas, $Productos){
    $this->id=$id;
    $this->Personas =$Personas;
    $this->Productos =$Productos;
  
  }
public function getId (){
    return $this->id;
  }
public function getPersonas (){
    return $this->Personas;
}
public function setPersonas ($Personas){
     $this->Personas= $Personas;
}
public function getProductos (){
    return $this->Productos;
}
public function setProductos ($Productos){
     $this->Productos= $Productos;
}

public function agregarProductos(){

}

public function eliminarProtductos(){

}

}

?>