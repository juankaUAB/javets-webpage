<?php
function actualizarDatos($connexio, $email, $nombre, $codigo_postal, $municipio,$direccion, $password)
{
    $id = $_SESSION["id"];
    try {
        $registrar_usuari = $connexio->prepare("UPDATE usuaris SET nombre=:nombre, direccion=:direccion, password=:password, codigo_postal=:codigo_postal, municipio=:municipio, email=:email WHERE id=$id");
        $registrar_usuari->bindParam(':nombre', $nombre);
        $registrar_usuari->bindParam(':email', $email);
        $registrar_usuari->bindParam(':password', $password);
        $registrar_usuari->bindParam(':codigo_postal', $codigo_postal);
        $registrar_usuari->bindParam(':municipio', $municipio);
        $registrar_usuari->bindParam(':direccion', $direccion);
        $result = $registrar_usuari->execute();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}