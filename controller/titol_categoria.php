<?php
$id = $_GET["cat_id"];
require_once __DIR__.'/../model/connectaBd.php';
$connexio = connectaBD();
$consulta_titol = $connexio->prepare("SELECT * FROM categories where id=$id");
$consulta_titol->execute();
$resultat_titol = $consulta_titol->fetchAll(PDO::FETCH_ASSOC);

print_r(htmlentities($resultat_titol[0]["nombre"], ENT_QUOTES | ENT_HTML5, 'UTF-8'));

?>