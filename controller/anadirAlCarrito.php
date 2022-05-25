<?php
session_start();
require_once __DIR__.'/../model/connectaBd.php';
require_once __DIR__.'/../model/consultarProducte.php';

$id = $_GET["id"];

$connexio = connectaBD();
$productes = consultaProducte($connexio, $id);

if (!in_array($productes[0]["nombre"], $_SESSION["carrito"]["nombre"]))
{
    $_SESSION["numero_productos"] += $_GET["unitats"];
    $_SESSION["precio_total"] += $_GET["unitats"] * $productes[0]["precio"];
    array_push($_SESSION["carrito"]["id"], $productes[0]["id"]);
    array_push($_SESSION["carrito"]["nombre"], $productes[0]["nombre"]);
    array_push($_SESSION["carrito"]["descripcion"], $productes[0]["descripcion"]);
    array_push($_SESSION["carrito"]["precio"], $productes[0]["precio"]);
    array_push($_SESSION["carrito"]["marca"], $productes[0]["marca"]);
    array_push($_SESSION["carrito"]["unitats"], $_GET["unitats"]);
    array_push($_SESSION["carrito"]["imagen"], $productes[0]["link_foto"]);
    echo json_encode(array($_SESSION["numero_productos"],$_SESSION["precio_total"],true));
}
else
{
    echo json_encode(array($_SESSION["numero_productos"],$_SESSION["precio_total"],false));
}
?>