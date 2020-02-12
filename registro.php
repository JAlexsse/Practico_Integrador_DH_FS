<?php

require_once 'controladores/controladorHeader.php';
require_once 'controladores/controladorValidacion.php';
require_once 'controladores/controladorUsuario.php';
include_once 'pdo.php';
include_once 'clases/Personas.php';


$erroresRegistro = "";


if($_POST) {
    $erroresRegistro = validarFormulario($_POST);
    if(count($erroresRegistro) == 0) {
        // Guardar en base de datos 
        $usuario = new Personas("", $_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['password']);
        $usuario->agregar_usuario($db);

        header("Location: login.php");
    }
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

    <div class="container-fluid container-registro d-flex justify-content-center align-items-center bg-logreg">
        <div class="row vw-100 justify-content-center">
            <div class="col-12 col-sm-10 col-md-5 my-3">


                <form method="post" action="" class="row form-registro justify-content-center py-3 ">

            <div class="col-6 p-md-0 form-min">
                <img src="img/ICONOS/LOGO/Recurso 11.svg" alt="Logo" class="img-fluid">
            </div>
            <div class="col-10 text-left text-white titulos-categorias-tienda">
                    <h4>Registrarse</h4>
            </div>


        <div class="form-group col-9 my-2 form-min subtitulos">
            <label for="nombre" class="text-white label-aviso">Nombre</label>
            <!-- (CONDICION) ? A : B -->
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= persistirDato($erroresRegistro, 'nombre') ?>">
            <small class="text-danger"><?= isset($erroresRegistro['nombre']) ? $erroresRegistro['nombre'] : "" ?></small>
        </div>
        <div class="form-group col-9 my-2 form-min subtitulos">
            <label for="nombre" class="text-white label-aviso">Apellido</label>
            <!-- (CONDICION) ? A : B -->
            <input type="text" class="form-control" id="apellido" name="apellido" value="<?= persistirDato($erroresRegistro, 'apellido') ?>">
            <small class="text-danger"><?= isset($erroresRegistro['apellido']) ? $erroresRegistro['apellido'] : "" ?></small>
        </div>

        <div class="form-group col-9 my-2 form-min subtitulos">
            <label for="email" class="text-white label-aviso">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= persistirDato($erroresRegistro, 'email') ?>">
            <small class="text-danger"><?= isset($erroresRegistro['email']) ? $erroresRegistro['email'] : "" ?></small>
        </div>
        <div class="form-group col-9 my-2 form-min subtitulos">
            <label for="password" class="text-white label-aviso">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password">
            <small class="text-danger"><?= isset($erroresRegistro['password']) ? $erroresRegistro['password'] : "" ?></small>
        </div>
        <div class="form-group col-9 my-2 form-min subtitulos">
            <label for="repassword" class="text-white label-aviso">Repetir contraseña</label>
            <input type="password" class="form-control" id="repassword" name="repassword">
            <small class="text-danger"><?= isset($erroresRegistro['repassword']) ? $erroresRegistro['repassword'] : "" ?></small>
        </div>

        <div class="col-12 py-3 text-center botones-texto">
        <button type="submit" class="btn btn-lg btn-light ">Registrarse</button>
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
