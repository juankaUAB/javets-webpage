<?php

require_once __DIR__.'/../model/connectaBd.php';
require_once __DIR__.'/../model/consultaLlistaCategories.php';

$connexio = connectaBD();
$categories = consultaCategories($connexio);

include __DIR__."/../view/vistaCategories.php";

?>