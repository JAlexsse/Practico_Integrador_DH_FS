<?php 

// validar usuarios

    function validarEmail (array $jsonUsers){
        foreach ($jsonUsers as $usuario ) {  
            if ($usuario["email"] == $_POST["email"]){
                return true;
            }
        }
        return false;
    }

    function validarPassword(array $jsonUsers){
        foreach ($jsonUsers as $usuario ) {  
            if (password_verify($_POST["password"],$usuario["password"]) && $usuario["email"] == $_POST["email"]){
                return true;
            } 
        }
        return false;
    }