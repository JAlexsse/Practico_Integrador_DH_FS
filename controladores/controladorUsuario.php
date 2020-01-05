<?php

function armarArrayUsuario($array) {
    $usuarioParaGuardar = [
        "nombre" => trim($array['nombre']),
        "apellido" => trim($array['apellido']),
        "email" => $array['email'],
        "password" => password_hash($array['password'], PASSWORD_DEFAULT)
    ];
    return $usuarioParaGuardar;
}

?>
