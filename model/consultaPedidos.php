<?php
function consultaPedidos($connexio, $id_usuario){
    try{
        $consulta_pedidos = $connexio->prepare("SELECT * FROM comanda WHERE usuaris_id=$id_usuario");
        $consulta_pedidos->execute();
        $resultat_pedidos = $consulta_pedidos->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    return($resultat_pedidos);
}

function consultaProductosPedido($connexio, $id_comanda){
    try{
        $consulta_prod_pedidos = $connexio->prepare("SELECT * FROM productes_comandes WHERE comanda_id=$id_comanda");
        $consulta_prod_pedidos->execute();
        $resultat_prod_pedidos = $consulta_prod_pedidos->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    return($resultat_prod_pedidos);
}

function consultarInfoDelProducto($connexio, $id_producto){
    try{
        $consulta_producto = $connexio->prepare("SELECT * FROM productes WHERE id=$id_producto");
        $consulta_producto->execute();
        $resultat_producte = $consulta_producto->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    return($resultat_producte);
}
?>