<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/javets.css">
    <link rel="stylesheet" type="text/css" href="css/slideshow.css">
    <script src="js/slideshow.js"> </script>
    <script src="js/funcions.js"> </script>
    <title>JA&Vets</title>
</head>
<body onLoad="javascript:currentSlide(1)">
    <header class="cap">
        <img src="imgs/perro.png" id="perro" width="150px" height="150px">
        <img src="imgs/gato.png" id="gato" width="150px" height="150px">
        <h3> J&A Vets </h3>
        <h3>¡Cuidamos de ti y de tus mascotas!</h3>
        <div class="barra">
            <a href="index.php" ><img src="imgs/house.png" id="home" class="carrito" style="order: 2"></a>
            <a href="index.php?accio=carrito" ><img src="imgs/carrito.png" id="carrito" class="carrito" style="order: 2"></a>
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
    <section id="titulo">
        <h1>Tienda de productos para animales online</h1>
    </section>
    <section class="grid-cat">
        <div class="slideshow-container" >

            <div class="mySlides fade">
                <div class="numbertext"></div>
                <a href="index.php?accio=llistar-categories"><img src="imgs/ban1.jpg" style="width:100%"></a>
            </div>

            <div class="mySlides fade">
                <div class="numbertext"></div>
                <a href="index.php?accio=registro"> <img src="imgs/ban2.jpg" style="width:100%"></a>

            </div>

            <div class="mySlides fade">
                <div class="numbertext"></div>
                <a href="index.php?accio=inicio_sesion"><img src="imgs/ban3.jpg" style="width:100%"></a>

            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </section>
<section class="section-resumen-carrito">
    <div class="resumen-carrito">
        <a href="index.php?accio=carrito"><h1> Resumen del carrito</h1></a>
        <hr>
        <h3> Numero de productos: <?php echo $_SESSION["numero_productos"]; ?></h3>
        <h3> Precio total: <?php echo $_SESSION["precio_total"]; ?></h3>
    </div>
</section>
</body>
</html>