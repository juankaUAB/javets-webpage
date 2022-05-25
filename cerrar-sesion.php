<?php
session_start();
unset($_SESSION["correo"]);
unset($_SESSION["password"]);
unset($_SESSION["id"]);
$missatge = "CLOSE-SESSION";
include __DIR__.'/resource_paginaInformativa.php';
?>

