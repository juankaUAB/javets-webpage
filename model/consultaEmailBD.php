<?php
function consultaEmail($connexio, $email)
{
    try{
        $query = "SELECT email FROM usuaris WHERE email=:email";
        $resultat_query = $connexio->prepare($query);
        $resultat_query->bindParam(":email",$email);
        $resultat_query->execute();
        $resultat_query = $resultat_query->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    return ($resultat_query);
}
?>