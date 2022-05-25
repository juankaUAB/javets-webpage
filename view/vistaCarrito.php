<div id="grid-carrito">
    <?php for ($i = 0; $i < count($_SESSION["carrito"]["id"]); $i++) { ?>
        <div class="producto_carrito">
            <img src=<?php echo $_SESSION["carrito"]["imagen"][$i]?> width="150px" height="150px" class="foto_producte">
            <h1> <?php echo $_SESSION["carrito"]["nombre"][$i]; ?> </h1>
            <h3> <?php echo $_SESSION["carrito"]["marca"][$i]; ?> </h3>
            <p> Precio unitario: <?php echo $_SESSION["carrito"]["precio"][$i]; ?> </p>
            <p> Numero de unidades: <?php echo $_SESSION["carrito"]["unitats"][$i]; ?></p>
        </div>
    <?php } if (!empty($_SESSION["carrito"]["id"])) { ?>
        <div class="barra_botones">
            <button class="boton_carrito" onclick="vaciarCarrito();"> Vaciar el carrito </button>
            <a href="../index.php?accio=confirmar_compra"> <button class="boton_carrito" > Confirmar la compra </button> </a>
        </div>
    <?php } ?>
</div>