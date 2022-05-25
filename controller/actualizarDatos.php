<?php
session_start();

$nombre = $_POST["nombre"];
$email = $_POST["correo"];
$cp = $_POST["cp"];
$municipio = $_POST["municipio"];
$direccion = $_POST["direccion"];
$length = strlen((string) $cp);

if($_POST["contraseña"] == "")
{
    $passwd = password_hash($_SESSION["password"], PASSWORD_DEFAULT);
}
else{
    $passwd = password_hash($_POST["contraseña"], PASSWORD_DEFAULT);
}

if(filter_var($email, FILTER_VALIDATE_EMAIL) != false && !filter_var($cp, FILTER_VALIDATE_INT) != false && $length == 5){
    include __DIR__.'/../model/connectaBd.php';
    $connexio = connectaBD();
    include __DIR__.'/../model/actualizarDatos.php';
    $resultat_query = actualizarDatos($connexio, $email, $nombre,$cp, $municipio, $direccion, $passwd);
    include __DIR__.'/../view/vistaEmailCorrecte.php'; #falta cambiar esto
}
else{
    include __DIR__.'/../view/vistaDadesIncorrectes.php'; #falta cambiar esto
}

?>