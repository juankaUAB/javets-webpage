<div id="grid-cat" class="grid-categorias">
    <?php foreach ($categories as $categoria) { ?>
        <div class="grid_elementos">
            <h2> <?php echo htmlentities($categoria["nombre"],ENT_QUOTES | ENT_HTML5, 'UTF-8') ?> </h2>
            <a onclick="carregaProductes(<?php echo $categoria["id"]; ?>);"> <img src="<?php echo $categoria["link_foto"] ?>" class="foto_catgeories"> </a>
        </div>
    <?php } ?>
</div>

