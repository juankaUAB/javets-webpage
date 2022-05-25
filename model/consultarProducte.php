<?php
function consultaProducte($connexio, $id)
{
    try {
        $consulta_productes = $connexio->prepare("SELECT * FROM productes where id=$id");
        $consulta_productes->execute();
        $resultat_productes = $consulta_productes->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return ($resultat_productes);
}