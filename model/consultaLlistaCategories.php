<?php
function consultaCategories($connexio){
    try{
        $consulta_categories = $connexio->prepare("SELECT * FROM categories");
        $consulta_categories->execute();
        $resultat_categories = $consulta_categories->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    return($resultat_categories);
}
?>
