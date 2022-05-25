<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>J&AVets: Registro</title>
    <link rel="stylesheet" type="text/css" href="css/registre.css">
    <script src="/js/funcions.js"> </script>
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
    <h3> Regístrate como usuario</h3>
    <form target="_self" action="../controller/registro.php" method="post" class="formulari_registre">
        Nombre: <input type="text" class="campos" name="nombre" required> <br/>
        Correo electronico: <input type="email" class="campos" name="correo" required> <br/>
        Contraseña: <input type="password" class="campos" name="contraseña" required> <br/>
        Dirección: <input type="text" class="campos" name="direccion" required> <br/>
        Municipio: <input type="text" class="campos" name="municipio" required> <br/>
        Codigo postal: <input type="text" class="campos" name="cp" required> <br/>
        <div class="boton">
            <input type="reset" value="Limpiar">
            <input type="submit" value="Registrarse">
        </div>
        <div class="volver">
            <p> Ya estas registrado? <a href="index.php?accio=inicio_sesion"> Inicia sesión</a> </p>
        </div>
    </form>
</section>
<section>
    <div class="boton_return">
        <a href="index.php" class="b"> Volver al inicio </a>
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