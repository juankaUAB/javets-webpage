<?php

session_start();

$nombre = $_POST["nombre"];
$email = $_POST["correo"];
$passwd = password_hash($_POST["contraseña"], PASSWORD_DEFAULT);
$cp = $_POST["cp"];
$municipio = $_POST["municipio"];
$direccion = $_POST["direccion"];
$length = strlen((string) $cp);

if (filter_var($email, FILTER_VALIDATE_EMAIL) != false && filter_var($cp, FILTER_VALIDATE_INT) != false && $length == 5){
    require __DIR__.'/../model/connectaBd.php';
    $connexio = connectaBD();
    require __DIR__.'/../model/consultaEmailBD.php';
    $resultat_query = consultaEmail($connexio, $email);

    if (empty($resultat_query))
    {
        require __DIR__.'/../model/registrarUsuari.php';

        $connexio = connectaBD();
        registrarUsuari($connexio, $nombre, $email, $passwd, $cp, $municipio, $direccion);
        $missatge = "OKEMAIL";
        include __DIR__.'/../resource_paginaInformativa.php';

    }
    else{
        $missatge = "BADEMAIL";
        include __DIR__.'/../resource_paginaInformativa.php';
    }

}
else{
    $missatge = "ERROR-DATOS";
    include __DIR__.'/../resource_paginaInformativa.php';
}
?>


