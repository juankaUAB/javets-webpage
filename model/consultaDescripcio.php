<?php

function consultaDescripcio($connexio, $id)
{
    try {
        $consulta_descripcio = $connexio->prepare("SELECT * FROM productes where id=$id");
        $consulta_descripcio->execute();
        $resultat_descripcio = $consulta_descripcio->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return ($resultat_descripcio);
}
?>
