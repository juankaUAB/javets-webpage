<?php
require_once __DIR__.'/../model/connectaBd.php';
require_once __DIR__.'/../model/guardarComandaBD.php'; //guardar tod BD

if(isset($_SESSION["id"])){
    $connexio = connectaBD();
    $ultim_id = guardarComanda($connexio);
    $productes = guardarProductos($connexio, $ultim_id);

    $_SESSION["carrito"]["id"] = array();
    $_SESSION["carrito"]["nombre"] = array();
    $_SESSION["carrito"]["descripcion"] = array();
    $_SESSION["carrito"]["precio"] = array();
    $_SESSION["carrito"]["marca"] = array();
    $_SESSION["carrito"]["unitats"] = array();
    $_SESSION["carrito"]["imagen"] = array();

    $_SESSION["numero_productos"] = 0;
    $_SESSION["precio_total"] = 0;
    include __DIR__.'/../view/vistaComandaProcesada.php';
}
else{
    $missatge = "ERROR-PEDIDO";
    include __DIR__.'/../view/vistaErrorComanda.php';
}



