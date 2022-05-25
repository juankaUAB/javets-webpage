<?php

function registrarUsuari($connexio, $nombre, $email, $password, $codigo_postal, $municipio, $direccion)
{
    try {
        $registrar_usuari = $connexio->prepare("INSERT INTO usuaris(nombre, direccion, password, codigo_postal, municipio, email)
                                                  VALUES (:nombre,:direccion,:password,:codigo_postal,:municipio,:email)");
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