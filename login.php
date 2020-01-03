<?php
    include ("php/funciones.php");
    if($_POST)
    {
        if(isset($_POST["conectado"]))
        {
            setcookie("conectado", true);
            setcookie("emailLog",$_POST["email"]);
            setcookie("passLog",password_hash($_POST["password"], PASSWORD_DEFAULT)) ;
        }else{
            setcookie("conectado",null);
        }
        $usuariosJson = json_decode(file_get_contents("json/usuarios.json"), true);
        if(validarEmail($usuariosJson) && validarPassword($usuariosJson)){

            header('location: index.php');
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
                <form class="row form-registro justify-content-center" action="login.php" method="POST">
                    <div class="col-6 p-md-0 form-min">
                        <a href="index.html">
                            <img src="img/ICONOS/LOGO/Recurso 11.svg" alt="Logo" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-7 mt-1 form-min">
                        <input type="email" class="form-control my-4" required value="" name="email" placeholder="Correo Electronico *">
                         <input type="password" class="form-control" required placeholder="Contraseña *" name="password">


                        <small class="text-danger"><?php
                                    if ($_POST) {

                                        if(!validarEmail($usuariosJson)){
                                            echo("el email ingresado no esta registrado");
                                        } elseif (!validarPassword($usuariosJson) ){
                                            echo("el password no coincide");
                                        }else{
                                            header('location: usuario.php');
                                        }
                                    }
                        ?></small>


                        <div class="form-group reset-pass d-flex justify-content-between subtitulos">
                            <a href="#" class="ForgetPwd" value="Login">Olvidaste tu contraseña?</a>
                            <a href="registro.php" class="ForgetPwd">Registrarse</a>
                        </div>
                        <div class="form-group reset-pass  subtitulos">
                            <label for="conectado" class="text-white">Recordar</label>
                            <input type="checkbox" class="" >
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
