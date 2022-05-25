<?php
function connectaBD(){
    $servidor = "127.0.0.1";
    $usuari = "juanka";
    $clau = "javets";
    try{
        $connexio = new PDO("mysql:host=$servidor;dbname=pruebas;charset=UTF8",
            $usuari, $clau);
        $connexio->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    return($connexio);
}
?>

