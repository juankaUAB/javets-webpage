<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/registre.css">
    <script src="js/funcions.js"> </script>
    <title>JA&Vets</title>
</head>
<body>
<header class="cap">
    <img src="imgs/perro.png" id="perro" width="150px" height="150px">
    <img src="imgs/gato.png" id="gato" width="150px" height="150px">
    <h3> J&A Vets </h3>
    <h3>¡Cuidamos de ti y de tus mascotas!</h3>
    <div class="barra">
        <a href="index.php" ><img src="imgs/house.png" id="home" class="carrito" style="order: 2"></a>
        <a href="index.php?accio=carrito"><img src="imgs/carrito.png" id="carrito" class="carrito"></a>
        <div class="dropdown"; style="order: 1">
            <img src="imgs/menu.png" class="dropbtn"></img>
            <div class="dropdown-content">
                <?php if(isset($_SESSION["correo"])){  ?>
                    <a href="/index.php?accio=llistar-categories"> Categorias </a>
                    <a href="index.php?accio=mi_cuenta"> Mi cuenta </a>
                    <a href="index.php?accio=pedidos"> Mis compras </a>
                    <a href="cerrar-sesion.php"> Cerrar sesión </a>
                <?php  } else {  ?>
                    <a href="/index.php?accio=llistar-categories"> Categorias </a>
                    <a href="index.php?accio=inicio_sesion"> Iniciar sesión </a>
                    <a href="index.php?accio=registro"> Registrarse</a>
                <?php } ?>
            </div>
        </div>
    </div>
</header>
<section class="registro">
    <h3>Mi cuenta</h3>
    <?php include __DIR__.'/controller/mi-cuenta.php'; ?>
</section>