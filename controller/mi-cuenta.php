<?php
require_once __DIR__.'/../model/connectaBd.php';
require_once __DIR__.'/../model/consultaUsuari.php';

$email = $_SESSION["correo"];

$connexio = connectaBD();
$datos = consultaUsuari($connexio, $email);

require_once __DIR__.'/../view/vistaMiCuenta.php';

