<?php

require_once __DIR__.'/../model/connectaBd.php';
require_once __DIR__.'/../model/consultaProductes.php';

$id = $_GET["cat_id"];

$connexio = connectaBD();
$productes = consultaProductes($connexio, $id);

echo json_encode($productes) ;

?>
