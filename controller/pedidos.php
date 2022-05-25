<?php

require_once __DIR__.'/../model/connectaBd.php';
require_once __DIR__.'/../model/consultaPedidos.php';

$connexio = connectaBD();
$pedidos = consultaPedidos($connexio, $_SESSION["id"]);
$pedidos = array_reverse($pedidos);

include __DIR__."/../view/vistaPedidos.php";