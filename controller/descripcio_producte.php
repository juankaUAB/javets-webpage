<?php
require_once __DIR__.'/../model/connectaBd.php';
require_once __DIR__.'/../model/consultaDescripcio.php';

$id = $_GET["prod_id"];

$connexio = connectaBD();
$descripcio = consultaDescripcio($connexio, $id);

echo json_encode($descripcio);
?>