<form target="_self" action="../controller/actualizarDatos.php" method="post" class="formulari_registre">
    Nombre: <input value="<?php echo $datos[0]["nombre"];?>" type="text" class="campos" name="nombre" > <br/>
    Correo electronico: <input value="<?php echo $datos[0]["email"];?>" type="email" class="campos" name="correo" > <br/>
    Contraseña: <input value="" type="password" class="campos" name="contraseña"> <br/>
    Dirección: <input value="<?php echo $datos[0]["direccion"];?>" type="text" class="campos" name="direccion" > <br/>
    Municipio: <input value="<?php echo $datos[0]["municipio"];?>" type="text" class="campos" name="municipio" > <br/>
    Codigo postal: <input value="<?php echo $datos[0]["codigo_postal"];?>" type="text" class="campos" name="cp" > <br/>
    <div class="boton">
        <input type="submit" value="Actualizar Datos">
    </div>
</form>
<h3>Foto de perfil</h3>
<form method="post" enctype="multipart/form-data" action="../controller/actualizarFoto.php" class="formulari_registre">
    <div>
        <img src="../profile_pictures/<?php echo $datos[0]["foto"];?>" width="200px" height="200px" </img>
    </div>
     <input type="file" name="profile_image" id="image"/>
    <div class="boton">
        <input type="submit" value="Subir foto">
    </div>
</form>
