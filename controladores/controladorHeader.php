<?php
SESSION_start();

if(isset($_SESSION["conectado"]) && $_SESSION["conectado"] == true){
    setcookie("log", true);
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