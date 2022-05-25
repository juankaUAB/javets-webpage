<?php
function guardarComanda($connexio)
{
    $fecha = date('Y-m-d H:i:s');
    try {
        $comanda = $connexio->prepare("INSERT INTO comanda(fecha, precio, usuaris_id)
                                                  VALUES (:fecha,:precio,:usuari_id)");
        $comanda->bindParam(':precio', $_SESSION["precio_total"]);
        $comanda->bindParam(':usuari_id', $_SESSION["id"]);
        $comanda->bindParam(':fecha', $fecha);
        $result = $comanda->execute();
        return $connexio->lastInsertId();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

}
function guardarProductos($connexio, $ultim_id)
{
    try {
        for ($i = 0; $i < sizeof($_SESSION["carrito"]["id"]); $i++) {
            $comanda = $connexio->prepare("INSERT INTO productes_comandes(comanda_id, productes_id, preu_producte,quantitat)
                                                  VALUES (:c_id,:p_id,:preu,:quantitat)");
            $comanda->bindParam(':c_id', $ultim_id);
            $comanda->bindParam(':p_id', $_SESSION["carrito"]["id"][$i]);
            $comanda->bindParam(':preu', $_SESSION["carrito"]["precio"][$i]);
            $comanda->bindParam(':quantitat', $_SESSION["carrito"]["unitats"][$i]);
            $result = $comanda->execute();
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>