<?php
$accio = $_GET['accio'] ?? "";
session_start();

if (!isset($_SESSION["numero_productos"]) && !isset($_SESSION["precio_total"]) && !isset($_SESSION["carrito"]))
{
    $_SESSION["numero_productos"] = 0;
    $_SESSION["precio_total"] = 0;
    $_SESSION["carrito"] = array( "id" => array(),
                                  "nombre" => array(),
                                  "descripcion" => array(),
                                  "precio" => array(),
                                  "marca" => array(),
                                  "unitats" => array(),
                                  "imagen" => array());
}

switch ($accio) {
    case 'inicio_sesion':
        include __DIR__.'/resource-inicio-sesion.php';
        break;
    case 'registro':
        include __DIR__.'/resource-registro.php';
        break;
    case 'llistar-categories':
        include __DIR__.'/resource_llistar-categories.php';
        break;
    case 'carrito':
        include __DIR__.'/resource_carrito.php';
        break;
    case 'mi_cuenta':
        include __DIR__.'/resource_mi-cuenta.php';
        break;
    case 'confirmar_compra':
        include __DIR__.'/resource_confirmar-compra.php';
        break;
    case 'message':
        include __DIR__.'/resource_paginaInformativa.php';
        break;
    case 'pedidos':
        include __DIR__.'/resource_pedidos.php';
        break;
    default:
        include __DIR__.'/resource_portada.php';
        break;

}