/**
 * METODO PARA OBTENER EL ID DE LA CATEGORIA 
 * Y LUEGO ENVIARLA A OTRA VISTA CON ESE PARAMETRO
 * @param  id 
 */
 function verCategoria(id) {
    categoria = id;
    var datos = new FormData();
    datos.append("categoria", categoria);
    $.ajax({
        url: "model/proceso.php",
        type: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function (respuesta) {
            window.location.href = "Categoria";
        }
    });
}

/**
 * METODO PARA OBTENER EL ID DE LA PRODUCTO 
 * Y LUEGO ENVIARLA A OTRA VISTA CON ESE PARAMETRO
 * @param  id 
 */
 function verProducto(id) {
    producto = id;
    console.log(producto)
    var datos = new FormData();
    datos.append("producto", producto);
    $.ajax({
        url: "model/producto.php",
        type: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function (respuesta) {
            window.location.href = "producto";
        }
    });
}