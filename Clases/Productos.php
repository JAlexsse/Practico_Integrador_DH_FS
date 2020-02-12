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
    public function setId($id){
         $this->id = $id;
    }
    public function getPrecio(){
        return $this->precio;
   }
    public function setPrecio($precio){
        $this->precio = $precio;
   }
   public function getStock(){
        return $this->stock;
  }
  public function setStock($stock){
     $this->stock = $stock;
}
public function setFechaPublicacion($fechaPublicacion){
    $this->fechaPublicacion = $fechaPublicacion;
}
public function mostrarImagenes(){
    
}

public function consulta_stock($db){
    ///consultas de stock para el negocio, consultas generales,
    ///la idea no es busquedas por nombres sino por categoria, por grupos,
    ///para tener idea de numeros generales.

    if($_GET){
      $info = array(
        'categoria' => $_GET['categoria'],
        'marca' => $_GET['marca']
      );

      if ($info['categoria']!=null and $info['marca']!=null) {
        $ext = 'SELECT Marcas.nombre AS "Marcas",
                Categorias.nombre AS "Categorias",
                COUNT(*) as "Cantidad" FROM Productos
                INNER JOIN Marcas ON Productos.id_marca = Marca.id
                INNER JOIN Categorias ON Categorias.id = Productos.id_categoria
                GROUP BY Marcas.nombre, Categorias.nombre';
        $query = $connection->prepare($ext);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
      }

      if ($info['categoria']!=null and $info['marca']=null) {
        $ext = 'SELECT Categorias.nombre AS "Categorias",
                COUNT(*) as "Cantidad" FROM Productos
                INNER JOIN Categorias ON Categorias.id = Productos.id_categoria
                GROUP BY Categorias.nombre';
        $query = $connection->prepare($ext);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
      }

      if ($info['categoria']=null and $info['marca']!=null) {
        $ext = 'SELECT Marcas.nombre AS "Marcas",
                COUNT(*) as "Cantidad" FROM Productos
                INNER JOIN Marcas ON Productos.id_marca = Marca.id
                GROUP BY Marcas.nombre';
        $query = $connection->prepare($ext);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
      }
    }
  }

  

}

?>