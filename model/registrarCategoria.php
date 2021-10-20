<?php


require_once 'conexion.php';

$descripcion = $_POST['desc_categoria'];
$directorio = "archivos/imagenes/categorias/";

if (empty($descripcion)) {
    $respuesta = array('respuesta' => 'Vacio');
} else {
    if (!is_dir($directorio)) {
        mkdir($directorio, 0755, true); // MK DIR crear carpeta 0755 permisos de escritura
    }
    if ($_FILES['fotoCategoria']['size'] <= 4000000) {

        if (
            $_FILES['fotoCategoria']['type'] == "image/jpg"
            || $_FILES['fotoCategoria']['type'] == "image/jpeg"
            || $_FILES['fotoCategoria']['type'] == "image/png"
            || $_FILES['fotoCategoria']['type'] == "image/gif"
        ) {
            if (move_uploaded_file($_FILES['fotoCategoria']['tmp_name'], $directorio . $_FILES['fotoCategoria']['name'])) {

                $archivo_url = $directorio . $_FILES['fotoCategoria']['name'];
                $nombreImagen = $_FILES['fotoCategoria']['name'];
                $sql = "INSERT INTO `categoria` (`id_categoria`, `desc_categoria`, `ruta_imagen`, `imagen`) VALUES (NULL, '$descripcion', '$archivo_url', '$nombreImagen')";
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
