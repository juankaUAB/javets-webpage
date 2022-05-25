<?php

require_once __DIR__.'/../model/connectaBd.php';
require_once __DIR__.'/../model/consultaAccions.php';

$connexio = connectaBD();
$accioons = consultaAccions($connexio);

include __DIR__."/../view/vistaAccions.php";

?>