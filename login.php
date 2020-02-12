<?php

require_once 'controladores/controladorHeader.php';
require_once 'controladores/controladorValidacion.php';
require_once 'controladores/controladorUsuario.php';
require_once 'controladores/pre.php';
require_once 'pdo.php';

/*pre($_SESSION);
pre($_COOKIE);
*/



$erroresLogin = "";

if($_POST) {
    $erroresLogin = validarFormulario($_POST);
    if(count($erroresLogin) == 0) {
        $email = $_POST['email'];
        $query = $db-> prepare( "SELECT id_persona, nombre, apellido, email, password FROM persona WHERE email =:email");
        $query -> bindvalue(':email', $email);
        $query->execute();
        $usuarioFinal = $query->fetch(PDO::FETCH_ASSOC);

            if($usuarioFinal['email'] == $_POST['email']) {
                if( password_verify($_POST['password'], $usuarioFinal['password']) ) {
                    $_SESSION['emailUsuario'] = $usuarioFinal['email'];
                    if(isset($_POST['recordarme']) && $_POST['recordarme'] == 'on') {
                        $_SESSION["conectado"]=true;
                    }
                    setcookie("log", true);
                    $_SESSION['emailUsuario'] = $usuarioFinal['email'];
                    $_SESSION['passUsuario'] = $usuarioFinal['password'];
                    header("Location: index.php");
                }
            }




            }
        }
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Bitter|Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/stylehome.css">

    <title>Login</title>
</head>
<body>
    <?php include 'php/header.php'; ?>

    <div class="container-fluid container-registro d-flex justify-content-center align-items-center vh-100 bg-logreg">
        <div class="row vw-100 justify-content-center">
            <div class="col-12 col-sm-10 col-md-5">
                <!--Formulario-->



        <form method="post" class="row form-registro justify-content-center" action="login.php">
            <div class="col-6 p-md-0 form-min">
                <a href="index.html">
                    <img src="img/ICONOS/LOGO/Recurso 11.svg" alt="Logo" class="img-fluid">
                </a>
            </div>
        <div class="form-group col-7 mt-1 ">
            <label for="email"  class="text-white label-aviso">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= persistirDato($erroresLogin, 'email') ?>">
            <small class="text-danger"><?= isset($erroresLogin['email']) ? $erroresLogin['email'] : "" ?></small>



        </div>



        <div class=" form-group col-7 mt-1 ">
            <label for="password"  class="text-white label-aviso">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password">
            <small class="text-danger"><?= isset($erroresLogin['password']) ? $erroresLogin['password'] : "" ?></small>
            <small class="text-danger"><?php
            if ($_POST) {
                $usuario = new Personas("", $_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['password']);
                $erroresLogin = validarFormulario($_POST);
                if(count($erroresLogin) == 0) {
                    
                if(!$usuario->validarEmail($db)){
                    echo("el email ingresado no esta registrado");
                } elseif (!$usuario->validarPassword($db) ){
                    echo("el password no coincide");
                }else{
                    header('location: usuario.php');
                }
            }}

            ?></small>


        <div class="form-group reset-pass d-flex justify-content-between subtitulos">
            <a href="#" class="ForgetPwd" value="Login">Olvidaste tu contraseña?</a>
            <a href="registro.php" class="ForgetPwd">Registrarse</a>
        </div>




        </div>
        <div class="form-group col-7 mt-1 ">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="recordarme" name="recordarme">
                <label class="form-check-label" for="gridCheck">Recordarme como usuario</label>
            </div>
        </div>
        <div class="col-12 py-1 text-center botones-texto">
                <input type="submit" class="btn btn-lg btn-light" name="conectado"value="Ingresar" />
        </div>
    </form>



            </div>
        </div>
    </div>

    <?php include 'php/footer.php'; ?>

    <!--Script Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
