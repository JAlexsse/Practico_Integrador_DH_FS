<?php

class Personas{
private $id;
private $nombre;
private $apellido;
private $email;
private $password;
private $dni;
private $fecha_de_nacimiento;
private $descripcion;
private $imagen_perfil;
private $favoritos;

public function __construct ($id = null, $nombre, $apellido, $email, $password){
    $this->id=$id;
    $this->nombre=$nombre;
    $this->apellido=$apellido;
    $this->email = $email;
    $this->password = $password; 
  }
public function getId (){
    return $this->id;
  }
public function getNombre (){
    return $this->nombre;
}
public function setNombre ($nombre){
     $this->nombre= $nombre;
}
public function getApellido (){
    return $this->apellido;
}
public function setApellido ($apellido){
     $this->apellido= $apellido;
}
public function getEmail (){
    return $this->email;
} 
public function setEmail($email){
    $this->email = $email;
}
public function getPassword (){
    return $this->password;
}
public function setPassword($password){
    $this->password = $password;
}
private function encriptarPassword(){

}
public function getDni(){
    return $this->dni;
}
public function setDni($dni){
    $this->dni =$dni;
}
public function getFechaDeNacimiento(){
    return $this->fecha_de_nacimiento;
}
public function setFechaDeNacimiento($fecha_de_nacimiento){
    $this->fecha_de_nacimiento =$fecha_de_nacimiento;
}
public function setDescripcion(){
    $this->descripcion = $descripcion;
}
public function getImagenPerfil(){
    return $this->imagen_perfil;
}
public function setImagenPerfil(){
     $this->imagen_perfil = $imagen_perfil;
}
public function getFavoritos(){
    return $this->favoritos;
}

public function create($connect) {
    $query = $connect->prepare("
    INSERT INTO
    personas (id,nombre,apellido,email,)
    values (null,:nombre,:apellido, :email)
    ");
    $query->bindValue(':nombre',$this->nombre);
    $query->bindValue(':apellido',$this->apellido);
    $query->bindValue(':email',$this->email);
    $query->execute();
  }

}


?>