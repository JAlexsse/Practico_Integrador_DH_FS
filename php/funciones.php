<?php 

// validar usuarios

    function validarEmail (array $jsonUsers){
        foreach ($jsonUsers as $usuario ) {  
            foreach ($usuario as $atributo["email"] => $value) {
                if ($value == $_POST["email"]){
                   return true;
                }
            }
        }
        return false;
    }

    function validarPassword(array $jsonUsers){
        foreach ($jsonUsers as $usuario ) {  
            foreach ($usuario as $atributo["password"] => $value) {
                if (password_verify($_POST["password"],$value)){
                    return true;
                  }
            }
        }
        return false;
    }