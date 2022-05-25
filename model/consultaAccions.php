<?php
function consultaAccions($connexio){
    try{
        $consulta_acciones = $connexio->prepare("SELECT * FROM acciones");
        $consulta_acciones->execute();
        $resultat_acciones = $consulta_acciones->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    return($resultat_acciones);
}
?>
