<?php
Class Marcas{

    private $idMarca;
    private $marca;

    public function getMarcas($conexion){
        $sql="select * from marcas ";
        $conectar = $conexion->prepare($sql);
        $conectar->execute();
        return $conectar->fetchAll(PDO::FETCH_ASSOC);
    }

    public function __construct ($idMarca = null, $marca = null){ 
        $this->idMarca = $idMarca;
        $this->marca = $marca;
     }

    public function getIdMarca(){
        return $this->idMarca;
    }

}





?>