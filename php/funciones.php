<?php

// validar usuarios

    function validarEmail (array $jsonUsers){


        foreach ($jsonUsers as $usuario) {
            $usuarioFinal = json_decode($usuario, true);



            if ($usuarioFinal["email"] == $_POST["email"]){
                return true;
            }
        }
        return false;
    }

    function validarPassword(array $jsonUsers){
        foreach ($jsonUsers as $usuario ) {
            $usuarioFinal = json_decode($usuario, true);

            if (password_verify($_POST["password"],$usuarioFinal["password"]) && $usuarioFinal["email"] == $_POST["email"]){
                return true;
            }
        }
        return false;
    }
