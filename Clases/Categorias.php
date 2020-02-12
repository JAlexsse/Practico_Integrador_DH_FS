<?php
Class Categorias{

	private $id_categoria;
	private $nombre;
	private $descripcion;
	private $id_categoria_padre;

	public function __construct($id_categoria=null,$nombre=null,$descripcion=null,$id_categoria_padre=null){
		$this->id_categoria = $id_categoria;
		$this->nombre = $nombre;
		$this->descripcion = $descripcion;
		$this->id_categoria_padre = $id_categoria_padre;
	}

	public function getId(){
		return $this->id_categoria;
	}

	public function getPadres($conexion){
	$sql = "Select * from categorias where id_categoria_padre is null";
	$consulta = $conexion->prepare($sql);
	$consulta->execute();
        $categoria = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $categoria;
	}

	public function getAllCategoria ($conexion){
	$sql = "Select * from categorias";
	$consulta = $conexion->prepare($sql);
	$consulta->execute();
        $categoria = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $categoria;
	}







}



?>