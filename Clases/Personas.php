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
private $nombre_tabla = 'persona';

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
public function setDescripcion($descripcion){
    $this->descripcion = $descripcion;
}
public function getImagenPerfil(){
    return $this->imagen_perfil;
}
public function setImagenPerfil($imagen_perfil){
     $this->imagen_perfil = $imagen_perfil;
}
public function getFavoritos(){
    return $this->favoritos;
}

public function create($db) {
    $query = $db->prepare("INSERT INTO personas (id,nombre,apellido, email, contraseña)
    values (null,:nombre,:apellido, :email, :contraseña)");

    $query->bindValue(':nombre',$this->nombre);
    $query->bindValue(':apellido',$this->apellido);
    $query->bindValue(':email',$this->email);
    $query->bindValue(':contraseña',$this->contraseña);
    $query->execute();
  }

  function agregar_usuario($db){
    if($_POST){
      $info = array(
        'nombre' => $_POST['nombre'],
        'apellido' => $_POST['apellido'],
        'email' => $_POST['email'],
        'password' => password_hash($_POST['password'],PASSWORD_DEFAULT)
      );

      $query = $db->prepare("INSERT INTO persona (id_persona, nombre, apellido, email, password)
        VALUES (null, :nombre, :apellido, :email, :password)");

      $query->bindValue(':nombre', $info['nombre']);
      $query->bindValue(':apellido', $info['apellido']);
      $query->bindValue(':email', $info['email']);
      $query->bindValue(':password', $info['password']);
      
      $query->execute();
    }
  }




}


?>