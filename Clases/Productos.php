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
    private $estado;

    public function __construct($id=null, $nombre=null, $descripcion=null, $precio=null, $stock=null, $fechaPublicacion=null,$Categoria=null, $Marca=null, $estado = true){
       $this->id= $id; 
       $this->nombre= $nombre;
       $this->descripcion= $descripcion;
       $this->Categoria= $Categoria;
       $this->precio= $precio;
       $this->stock= $stock;
       $this->fechaPublicacion= $fechaPublicacion;
       $this->Marca= $Marca;
       $this->estado = $estado;
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

    public function setEstado($estado,$id,$conexion){
        $sql="  update productos
                set estados = ".$estado." where id_producto = "."$id";
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
    }

public function setFechaPublicacion(){
    $this->fechaPublicacion = $fechaPublicacion;
}
public function mostrarImagenes(){
    
}

    public function setProductosPanel($conexion){
        
        $sql="  select p.id_producto, p.nombre as nombreProducto, p.precio as precio, p.stock as stock,p.estados as estado, m.nombre as marca, c.nombre_categoria as categoria   
                from productos p 
                join marcas m on m.id_marca = p.id_marca 
                join categorias c on c.id_categoria = p.id_categoria ";

        $consulta = $conexion->prepare($sql);  
        $consulta->execute();
        $producto = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $producto;
    }

    public function agregar_productos($connection){
        $query = $connection->prepare("INSERT INTO productos (`id_producto`, `nombre`, `descripcion`, `precio`, `stock`, `id_categoria`, `id_marca`, `estados`) 
          VALUES (NULL,:nombre, :descripcion, :precio, :stock,:categoria, :marca, :estado)");
    
        $query->bindValue(':nombre', $this->nombre);
        $query->bindValue(':descripcion', $this->descripcion);
        $query->bindValue(':precio', $this->precio);
        $query->bindValue(':stock', $this->stock);
        $query->bindValue(':categoria', $this->Categoria->getId());
        $query->bindValue(':marca', $this->Marca->getIdMarca());
        $query->bindValue(':estado', $this->estado);
    
        $query->execute();
      }

      public function actualizar_producto($conexion){
          $sql= $conexion->prepare ("Update productos set nombre = :nombre, precio = :precio, stock = :stock, descripcion = :descripcion, id_categoria = :categoria, id_marca = :marca
           where id_producto = :id ;");

        $query->bindValue(':id', $_POST["id"]);
        $query->bindValue(':nombre', $_POST["nombre"]);
        $query->bindValue(':descripcion', $_POST["descripcion"]);
        $query->bindValue(':precio', $_POST["precio"]);
        $query->bindValue(':stock', $_POST["stock"]);
        $query->bindValue(':categoria', $_POST["idCategoria"]);
        $query->bindValue(':marca', $_POST["marcaP"]);
    
        $query->execute();

      }   



}

?>