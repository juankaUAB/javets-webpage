<?php

switch ($missatge)
{
    case 'ISOK':
        include_once __DIR__.'/../view/vistaInicioSesionCorrecto.php';
        break;
    case 'BADPASSWD':
        include __DIR__.'/../view/vistaContraseñaIncorrecta.php';
        break;
    case 'PEDIDO':
        include_once __DIR__.'/../view/vistaComandaProcesada.php';
        break;
    case 'ERROR-PEDIDO':
        include_once __DIR__.'/../view/vistaErrorComanda.php';
        break;
    case 'BADEMAIL':
        include_once __DIR__.'/../view/vistaEmailIncorrecto.php';
        break;
    case 'OKEMAIL':
        include_once __DIR__.'/../view/vistaEmailCorrecte.php';
        break;
    case 'NOEMAIL':
        include_once __DIR__.'/../view/vistaEmailNoExiste.php';
        break;
    case 'ERROR-DATOS':
        include_once __DIR__.'/../view/vistaDadesIncorrectes.php';
        break;
    case 'CLOSE-SESSION':
        include_once __DIR__.'/../view/vistaCerrarSesion.php';
        break;
    default:

}