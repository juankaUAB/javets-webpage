<?php

session_start();

$_SESSION["carrito"]["id"] = array();
$_SESSION["carrito"]["nombre"] = array();
$_SESSION["carrito"]["descripcion"] = array();
$_SESSION["carrito"]["precio"] = array();
$_SESSION["carrito"]["marca"] = array();
$_SESSION["carrito"]["unitats"] = array();
$_SESSION["carrito"]["imagen"] = array();

$_SESSION["numero_productos"] = 0;
$_SESSION["precio_total"] = 0;

echo json_encode(array($_SESSION["numero_productos"],$_SESSION["precio_total"]));

?>