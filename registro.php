<?php
    $conta=0;
    if ($_POST){

        // Validaciones

        foreach($_POST as $nombre => $datos)
        {
            if (strlen($datos) == 0)
            {
                echo ('falta completar '. $nombre);
                return;
            }
        }
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
            return "El campo no es un email";
        }
        
        $usuariosJson = json_decode(file_get_contents("json/usuarios.json"), true);
        foreach ($usuariosJson as $usuario ) {  
            foreach ($usuario as $atributo["email"] => $value) {
                if ($value == $_POST["email"]){
                    echo("el email existe");
                    return;
                }
            }
        }
        
        if ($_POST["password"] != $_POST["passwordC"])
        {
            echo( "Las contraseñas no coincide");
            return;
        }

        // Fin Validaciones 

        $usuarioNuevo = [
            "nombre" => $_POST["nombre"],
            "apellido" => $_POST["apellido"],
            "email" => $_POST["email"],
            "password" => password_hash($_POST["password"], PASSWORD_DEFAULT)
        ];
        $usuariosJson[] = $usuarioNuevo;
        file_put_contents("json/usuarios.json",json_encode($usuariosJson));
        header('location: login.php');
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Bitter|Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/stylehome.css">

    <title>Registrate</title>
</head>

<body>

    <?php include 'php/header.php'; ?>

    <div class="container-fluid container-registro d-flex justify-content-center align-items-center vh-100 bg-logreg">
        <div class="row vw-100 justify-content-center">
            <div class="col-12 col-sm-10 col-md-5">
                <!--Formulario-->
                <form action="registro.php" method="POST" class="row form-registro justify-content-center py-3">
                    <div class="col-6 p-md-0 form-min">
                        <img src="img/ICONOS/LOGO/Recurso 11.svg" alt="Logo" class="img-fluid">
                    </div>
                    <div class="col-10 text-left text-white titulos-categorias-tienda">
                        <h4>Registrarse</h4>
                    </div>
                    <div class="col-9 my-2 form-min subtitulos">
                        <label for="" class="text-white label-aviso">Nombre</label>
                        <input type="text" name="nombre" class="form-control" required placeholder="Nombre*">
                        <label for="" class="text-white label-aviso mt-1">Apellido</label>
                        <input type="text" name="apellido" class="form-control" required placeholder="Apellido*">
                        <label for="" class="text-white label-aviso mt-1">Email</label>
                        <input type="email" name="email" class="form-control" required placeholder="Email*">
                        <label for="" class="text-white label-aviso mt-1">Contraseña</label>
                        <input type="password" name="password" class="form-control" required placeholder="Contraseña*">
                        <label for="" class="text-white label-aviso mt-1">Confirmar Contraseña</label>
                        <input type="password" name="passwordC" class="form-control" required placeholder="Confirmar Contraseña*">
                    </div>
                    <div class="col-12 py-3 text-center botones-texto">
                        <input type="submit" class="btn btn-lg btn-light" value="Registrar" />
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include 'php/footer.php'; ?>

    <!--Script Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>