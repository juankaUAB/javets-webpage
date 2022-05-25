<?php
function actualizarFoto($connexio, $foto)
{
    $id = $_SESSION["id"];
    try {
        $registrar_usuari = $connexio->prepare("UPDATE usuaris SET foto=:foto WHERE id=$id");
        $registrar_usuari->bindParam(':foto', $foto);
        $result = $registrar_usuari->execute();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}