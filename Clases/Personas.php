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
private $nombre_tabla = 'personas';

public function __construct ($id = null, $nombre=null, $apellido=null, $email=null, $password=null){
    $this->id=$id;
    $this->nombre=$nombre;
    $this->apellido=$apellido;
    $this->email = $email;
    $this->password = $password; 
  }
public function getId (){
    return $this->id;
  }
public function getNombreCompleto ($db){

    $query = $db-> prepare ("SELECT nombre, apellido FROM personas");
    $query->execute();
    $usuario = $query->fetch(PDO::FETCH_ASSOC);
    return $usuario['nombre'] ." ".$usuario['apellido'];
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
 $this->password = password_hash($_POST['password'],PASSWORD_DEFAULT);
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


function validarEmail ($db){

    if($_POST){
        $usuarioLogueado= array(
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'],PASSWORD_DEFAULT)
        );

    $query = $db->prepare('SELECT email FROM persona');
    $query->execute();
    $usuario = $query->fetch(PDO::FETCH_ASSOC);

        if ($usuario["email"] == $usuarioLogueado["email"]){
            return true;
        }
        return false;
    }
}
function validarPassword ($db){
    if($_POST){
    $usuarioLogueado= array(
        'email' => $_POST['email'],
        'password' => password_hash($_POST['password'],PASSWORD_DEFAULT)
    );

    $query = $db->prepare('SELECT email, password FROM persona');
    $query->execute();
    $usuario = $query->fetch(PDO::FETCH_ASSOC);

        if (password_verify($usuarioLogueado["password"],$usuario["password"]) && $usuarioLogueado["email"] == $usuario["email"]){
            return true;
        }
        return false;
    }
}


  function agregar_usuario($db){
    if($_POST){
      $info = array(
        'nombre' => $_POST['nombre'],
        'apellido' => $_POST['apellido'],
        'email' => $_POST['email'],
        'password' => password_hash($_POST['password'],PASSWORD_DEFAULT)
      );

      $query = $db->prepare("INSERT INTO personas (id_persona, nombre, apellido, email, password)
        VALUES (null, :nombre, :apellido, :email, :password)");

      $query->bindValue(':nombre', $info['nombre']);
      $query->bindValue(':apellido', $info['apellido']);
      $query->bindValue(':email', $info['email']);
      $query->bindValue(':password', $info['password']);
      
      $query->execute();
    }
  }

  function modificar_usuarios($db){
    if($_POST){
      ///esta funcion deberia traer en el post el id siempre
      $id=$_POST['id'];
      $info = array(
        'nombre' => $_POST['nombre'],
        'apellido' => $_POST['apellido'],
        'email' => $_POST['email'],
        'password' => password_hash($_POST['password'],PASSWORD_DEFAULT),
        'dni' => $_GET['dni'],
        'fecha_de_nacimiento' => $_GET['fecha_de_nacimiento'],
        'descripcion' => $_GET['descripcion'],
        'imagen_de_perfil' => $_GET['imagen_de_perfil']
      );

      $query = $db->prepare('SELECT nombre, apellido, email, password,
        dni, fecha_de_nacimiento, descripcion, imagen_de_perfil FROM persona
        WHERE id = '.$id);
      $query->execute();

      $usuario = $query->fetch(PDO::FETCH_ASSOC);

      $ext = 'UPDATE Personas SET id ='.$id.',';

      if($info['nombre']!=null){
        $ext = $ext . ', nombre = '. $info['nombre'];
      } else {
        $ext = $ext . ', nombre = '. $usuario['nombre'];
      }

      if($info['apellido']!=null){
        $ext = $ext . ', apellido = '. $info['apellido'];
      } else {
        $ext = $ext . ', apellido = '. $usuario['apellido'];
      }

      if($info['email']!=null){
        $ext = $ext . ', email = '. $info['email'];
      } else {
        $ext = $ext . ', email = '. $usuario['email'];
      }

      if($info['password']!=null){
        $ext = $ext . ', password = '. $info['password'];
      } else {
        $ext = $ext . ', password = '. $usuario['password'];
      }

      /// a partir de aqui los campos no importa si son en null, seran
      /// guardados como tal por preferencia del usuario
      if($info['dni']){
        $ext = $ext . ', dni = '. $info['dni'];
      }

      if($info['fecha_de_nacimiento']){
        $ext = $ext . ', fecha_de_nacimiento = '. $info['fecha_de_nacimiento'];
      }

      if($info['descripcion']){
        $ext = $ext . ', descripcion = '. $info['descripcion'];
      }

      if($info['imagen_de_perfil']){
        $ext = $ext . ', imagen_de_perfil = '. $info['imagen_de_perfil'];
      }

      $query = $db->prepare($ext.'WHERE id = '.$id);

      $query->execute();

    }else {
      return 'No se realizo ninguna actualizacion en la informacion.';
    }
  }

}


?>