<?php


require_once 'conexion.php';
//die(json_encode($_POST));
//die(json_encode($_FILES));

$descripcion = $_POST['desc_servicio'];
$empleado =  $_SESSION['idemp'];
$cliente = $_POST['Cliente'];
$tipo = $_POST['tserv'];
$fecha = $_POST['fechaIngreso'];
$estado = $_POST['estado'];

$directorio = "archivos/imagenes/servicios/";

if (empty($descripcion) || empty($estado)) {
    $respuesta = array('respuesta' => 'Vacio');
} else {
    if (!is_dir($directorio)) {
        mkdir($directorio, 0755, true); // MK DIR crear carpeta 0755 permisos de escritura
    }
    if ($_FILES['fotoServicio']['size'] <= 4000000) {

        if (
            $_FILES['fotoServicio']['type'] == "image/jpg"
            || $_FILES['fotoServicio']['type'] == "image/jpeg"
            || $_FILES['fotoServicio']['type'] == "image/png"
            || $_FILES['fotoServicio']['type'] == "image/gif"
        ) {
            if (move_uploaded_file($_FILES['fotoServicio']['tmp_name'], $directorio . $_FILES['fotoCategoria']['name'])) {

                $archivo_url = $directorio . $_FILES['fotoServicio']['name'];
                $nombreImagen = $_FILES['fotoServicio']['name'];
                $sql = "INSERT INTO servicio (id_servicio, descripcion, id_empleado, id_cliente, id_tservicio, fecha, estado, ruta_imagen, imagen) VALUES (NULL, '$descripcion', '$empleado', '$cliente', '$tipo', '$fecha','$estado', '$archivo_url', '$nombreImagen')";
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
