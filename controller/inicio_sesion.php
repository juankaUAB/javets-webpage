<?php
session_start();

$email = $_POST["ce"];
$passwd = $_POST["password"];

require __DIR__.'/../model/connectaBd.php';
$connexio = connectaBD();
require __DIR__.'/../model/consultaInicioSesionBD.php';
$resultat_query = consultaInicioSesion($connexio, $email);

if (empty($resultat_query))
{
    include __DIR__.'/../resource_paginaInformativa.php';
}
else{
    if(password_verify( $passwd, $resultat_query[0]['password']))
    {
        $missatge = "ISOK";
        $_SESSION["correo"] = $email;
        $_SESSION["password"] = $passwd;
        $_SESSION["id"] = $resultat_query[0]['id'];
        include __DIR__.'/../resource_paginaInformativa.php';
    }
    else {
        $missatge = "BADPASSWD";
        include __DIR__.'/../resource_paginaInformativa.php';
    }
}
