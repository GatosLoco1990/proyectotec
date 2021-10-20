<?php


require_once 'conexion.php';
//die(json_encode($_POST)) ;

$codigo = $_POST['codigoProd'];
$nombre = $_POST['nombreProducto'];
$descripcion = $_POST['descripcionProducto'];
$precio = $_POST['precioProducto'];
$stock = $_POST['stock'];
$marca = $_POST['marcaProducto'];
$categoria = $_POST['categoriaProducto'];
$fecha = $_POST['fechaProducto'];

$directorio = "archivos/imagenes/productos/";

if (empty($descripcion)) {
    $respuesta = array('respuesta' => 'Vacio');
} else {
    if (!is_dir($directorio)) {
        mkdir($directorio, 0755, true); // MK DIR crear carpeta 0755 permisos de escritura
    }
    if ($_FILES['fotoProducto']['size'] <= 4000000) {

        if (
            $_FILES['fotoProducto']['type'] == "image/jpg"
            || $_FILES['fotoProducto']['type'] == "image/jpeg"
            || $_FILES['fotoProducto']['type'] == "image/png"
            || $_FILES['fotoProducto']['type'] == "image/gif"
        ) {
            if (move_uploaded_file($_FILES['fotoProducto']['tmp_name'], $directorio . $_FILES['fotoProducto']['name'])) {

                $archivo_url = $directorio . $_FILES['fotoProducto']['name'];
                $nombreImagen = $_FILES['fotoProducto']['name'];
                $sql = "INSERT INTO `producto` (`id_producto`, `cod_producto`, `nom_producto`, `desc_producto`, `precio`, `stock`, `marca`, `id_categoria`, `fecha_creacion`, `ruta_imagen`, `imagen`) VALUES (NULL, '$codigo', '$nombre', '$descripcion', '$precio', '$stock', '$marca', '$categoria', '$fecha', '$archivo_url', '$nombreImagen')";
                
                $query = $conexion->query($sql);

                if ($query) {
                    $respuesta = array('respuesta' => 'exito');
                } else {
                    $respuesta = array('respuesta' => 'error');
                }
            } else {
                echo '->' . error_get_last();
            }
        } else {
            $respuesta = array('respuesta' => 'noformato');
        }
    } else {
        $respuesta = array('respuesta' => 'notamano');
    }
}
echo json_encode($respuesta);

mysqli_close($conexion);
