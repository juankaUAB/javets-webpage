<?php foreach($accioons as $accio) { ?>
        <a href="/index.php?accio=<?php echo $accio["id_nombre"]; ?>"> <?php echo $accio["nombre"]; ?> </a>
<?php } ?>
