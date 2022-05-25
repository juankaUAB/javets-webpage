<div id="grid-carrito">
    <?php foreach ($pedidos as $pedido) { ?>
        <?php $productos = consultaProductosPedido($connexio, $pedido["id"]);?>
        <div class="producto_carrito">
            <h1> Id del pedido: <?php echo $pedido["id"]; ?> </h1>
            <h3> Fecha: <?php echo $pedido["fecha"]; ?> </h3>
            <h3> Precio total: <?php echo $pedido["precio"]; ?> </h3>
            <hr>
            <h1> Resumen de los productos </h1>
            <ol>
                <?php foreach ($productos as $producto) {?>
                        <?php $info_producto = consultarInfoDelProducto($connexio, $producto["productes_id"]); ?>
                    <li> <b> <?php echo $info_producto[0]["nombre"]; ?> </b> . Unidades: <?php echo $producto["quantitat"]; ?> </li>
                <?php }?>
            </ol>
        </div>
    <?php } ?>
