<?php
SESSION_start();

if(isset($_SESSION["conectado"]) && $_SESSION["conectado"] == true){
    setcookie("log", true);
}

if(isset($_COOKIE['log']) && $_COOKIE['log'] == true){
    if (strpos($_SERVER["PHP_SELF"], 'login') || strpos($_SERVER["PHP_SELF"], 'registro') ){
        header('location: usuario.php');
    }

}

if(!isset($_COOKIE['log']) ){
    if (strpos($_SERVER["PHP_SELF"], 'carrito') || strpos($_SERVER["PHP_SELF"], 'usuario') ){
        header('location: login.php');
    }
}

if(isset($_POST['nombre_del_boton']) && $_POST['nombre_del_boton'] == "Salir"  )
{
    $_SESSION['conectado']=false;
    $_SESSION['emailUsuario'] ="";
    $_SESSION['passUsuario'] = "";
    setcookie ("log",NULL);
    header('Location:'.$_SERVER["PHP_SELF"]);
} /* Deslogear Usuario */


?>