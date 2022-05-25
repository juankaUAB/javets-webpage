function anadirAlCarrito(id)
{
    unitats = document.getElementById("units").value;
    fetch("../controller/anadirAlCarrito.php?id=" + id + "&unitats=" + unitats)
        .then(response => { return response.json(); } )
        .then(data =>  {return(JSON.parse(JSON.stringify(data)));})
        .then(data => { document.getElementById("resumen-carrito").innerHTML = "<h3> Numero de productos: " + data[0] + "</h3>" +
            "<h3> Precio total: " + Math.round(data[1] * 100) / 100 + "</h3>   ";
            if (data[2] == true) {
                document.getElementById("boton_añadir_carrito").innerHTML = '<button class="boton_correcto"> ¡Producto añadido! </button>';
            }
            else
            {
                document.getElementById("boton_añadir_carrito").innerHTML = '<button class="boton_incorrecto"> ¡Error añadiendo el producto! </button>';
            }
            document.getElementById("boton_añadir_carrito").style.backgroundColor = "transparent";})
}

function carregaProductes(id) {
    fetch("../controller/titol_categoria.php?cat_id=" + id)
        .then(response => { return response.text(); } )
        .then(data => { document.getElementById("titulo").innerHTML = "<h1>" + data + "</h1>"; })
    fetch("../controller/productes.php?cat_id=" + id)
        .then(response => { return response.json(); } )
        .then(data =>  {return(JSON.parse(JSON.stringify(data)));}) //linea que se puede borrar
        .then(data => {document.getElementById("grid-cat").innerHTML= "" ;for (let clave in data){
        if (data.hasOwnProperty(clave)) {
            document.getElementById("grid-cat").innerHTML += '<div class="producto"> <img src="' + data[clave]["link_foto"] +'" width="150px" height="150px" class="imagen">\n' +
                '<h1>' + data[clave]["nombre"] +' </h1><hr/>\n' + '<h3>'+ data[clave]["precio"]+' € </h3>\n' + '<button class="boton_detalles" onclick="mostraDescripcio('+ data[clave]["id"]+');"> Ver detalles </button></div> ' ;}}
            document.getElementById("grid-cat").style.display = "grid";
            document.getElementById("grid-cat").style.marginLeft = "50px";
            document.getElementById("grid-cat").style.marginRight = "50px";
            document.getElementById("grid-cat").style.marginTop = "10px";})
}

function mostraDescripcio(id_producte) {
    document.getElementById("titulo").innerHTML = "";
    fetch("../controller/descripcio_producte.php?prod_id=" + id_producte)
        .then(response => { return response.json(); })
        .then(data =>  {return(JSON.parse(JSON.stringify(data)));})
        .then(data => { document.getElementById("grid-cat").innerHTML = '<div id="descr" class="descripcion"> <h1> '+ data[0]["nombre"] +'</h1> ' +
            ' <img class="foto_producte" src="' + data[0]["link_foto"] +'" width="200px" height="200px"> ' +
            '<p> '+ data[0]["descripcion"] +'</p> <p>'+ data[0]["marca"] +' <br /> <br /> '+data[0]["precio"]+' € </p> ' +
            'Unidades: <select name="unitats" id="units"> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option>' +
            '<option value="4">4</option> <option value="5">5</option> </select>'+
            '<button id="boton_añadir_carrito" class="boton_detalles" onclick="anadirAlCarrito('+data[0]["id"]+')"> Añadir al carrito</button> ' +
            '<button class="boton_detalles" onclick="carregaProductes('+data[0]["categories_id"]+')"> Volver </button></div>';
            document.getElementById("grid-cat").style.display = "block";
            document.getElementById("grid-cat").style.padding = "30px";
            document.getElementById("grid-cat").style.textAlign = "center";})
}

function vaciarCarrito() {
    fetch("../controller/vaciarCarrito.php")
        .then(response => { return response.json(); } )
        .then(data =>  {return(JSON.parse(JSON.stringify(data)));})
        .then(data => { document.getElementById("grid-carrito").innerHTML = ""; document.getElementById("resumen-carrito").innerHTML = "<h3> Numero de productos: " + data[0] + "</h3>" +
            "<h3> Precio total: " + Math.round(data[1] * 100) / 100 + "</h3>   ";})
}