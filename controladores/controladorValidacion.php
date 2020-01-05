<?php

function validarFormulario($array) {
    $errores = [];
    // Validamos el input "nombre"
    if(isset($array['nombre'])) {
        if(empty($array['nombre'])) {
            $errores['nombre'] = "Debés completar este campo";
        }
        elseif(strlen($array['nombre']) < 2) {
            $errores['nombre'] = "Tu nombre debe tener al menos 2 caracteres";
        }
    }
    if(isset($array['apellido'])) {
        if(empty($array['apellido'])) {
            $errores['apellido'] = "Debés completar este campo";
        }
        elseif(strlen($array['apellido']) < 2) {
            $errores['apellido'] = "Tu apellido debe tener al menos 2 caracteres";
        }
    }
    // Validams el input "email"
    if(isset($array['email'])) {
        if(empty($array['email'])) {
            $errores['email'] = "Debés completar este campo";
        }
        elseif(!filter_var($array['email'], FILTER_VALIDATE_EMAIL)) {
            $errores['email'] = "Debés ingresar un email válido. No te olvides de usar @ y un dominio válido también (.com, .ar, etc)";
        }
    }
    // Validamos el input "password"
    if(isset($array['password'])) {
        if(empty($array['password'])) {
            $errores['password'] = "Debés completar este campo";
        }
        if(strlen($array['password']) < 6) {
            $errores['password'] = "Tu contraseña debe tener como mínimo 6 caracteres";
        }
    }
    if(isset($array['repassword'])) {
        if(empty($array['repassword'])) {
            $errores['repassword'] = "Debés completar este campo";
        }
        if($array['repassword'] != $array['password'] ) {
            $errores['repassword'] = "Las contraseñas deben coincidir";
        }
    }
    return $errores;
}

function persistirDato($arrayE, $string) {
    if(isset($arrayE[$string])) {
        return "";
    } else {
        if(isset($_POST[$string])) {
            return $_POST[$string];
        }
    }
}

?>
