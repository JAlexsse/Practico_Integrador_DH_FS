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
}





?>