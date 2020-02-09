<?php

class Productos{
    private $id;
    private $nombre;
    private $descripcion;
    private $Categoria;
    private $precio;
    private $stock;
    private $fechaPublicacion;
    private $Marca;

    public function __construct($id=null, $nombre, $descripcion=null, $Categoria, $precio, $stock, $fechaPublicacion=null, $Marca){
       $this->id= $id;
       $this->nombre= $nombre;
       $this->descripcion= $descripcion;
       $this->Categoria= $Categoria;
       $this->precio= $precio;
       $this->stock= $stock;
       $this->fechaPublicacion= $fechaPublicacion;
       $this->Marca= $Marca;
    }

    public function getId(){
        return $this->id;
    }
    public function setId(){
         $this->id = $id;
    }
    public function getPrecio(){
        return $this->precio;
   }
    public function setPrecio(){
        $this->precio = $precio;
   }
   public function getStock(){
        return $this->stock;
  }
  public function setStock(){
     $this->stock = $stock;
}
public function setFechaPublicacion(){
    $this->fechaPublicacion = $fechaPublicacion;
}
public function mostrarImagenes(){
    
}



}

?>