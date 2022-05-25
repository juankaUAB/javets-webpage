<?php
session_start();
$id = $_SESSION["id"];
$foto = $_FILES['profile_image']['name'];
$link_foto = "../profile_pictures/$foto";

include __DIR__.'/../model/connectaBd.php';
$connexio = connectaBD();
if(!empty($_FILES)){
    move_uploaded_file($_FILES["profile_image"]["tmp_name"], $link_foto );
    include_once __DIR__.'/../model/actualizarFoto.php';
    actualizarFoto($connexio, $foto);
    include __DIR__.'/../view/vistaEmailCorrecte.php';
}
