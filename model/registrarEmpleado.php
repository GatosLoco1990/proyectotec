<?php


require_once 'conexion.php';

$directorio = "archivos/imagenes/empleados/";

$apellido = $_POST['apellidoEmpleado'];
$nombre = $_POST['nombreEmpleado'];
$documento = $_POST['documentoEmpleado'];
$fenac = $_POST['fenacEmpleado'];
$telefono = $_POST['telEmpleado'];
$direccion = $_POST['dirEmpleado'];
$correo = $_POST['correoEmpleado'];
$fecha = $_POST['fechaingEmpleado'];
$sucursal = $_POST['sucursalEmpleado'];
$rol = $_POST['rolEmpleado'];


if (empty($apellido)) {
    $respuesta = array('respuesta' => 'Vacio');
} else {
    if (!is_dir($directorio)) {
        mkdir($directorio, 0755, true); // MK DIR crear carpeta 0755 permisos de escritura
    }
    if ($_FILES['fotoEmpleado']['size'] <= 4000000) {

        if (
            $_FILES['fotoEmpleado']['type'] == "image/jpg"
            || $_FILES['fotoEmpleado']['type'] == "image/jpeg"
            || $_FILES['fotoEmpleado']['type'] == "image/png"
            || $_FILES['fotoEmpleado']['type'] == "image/gif"
        ) {
            if (move_uploaded_file($_FILES['fotoEmpleado']['tmp_name'], $directorio . $_FILES['fotoEmpleado']['name'])) {

                $archivo_url = $directorio . $_FILES['fotoEmpleado']['name'];
                $nombreImagen = $_FILES['fotoEmpleado']['name'];
                $sql = "INSERT INTO empleado (id_emp, ape_emp, nom_emp, doc_emp, fecha_nac_emp, telefono_emp, dir_emp, mail_emp, fecha, id_sucursal, ruta_imagen, imagen, rol) VALUES (NULL, '$apellido', '$nombre', '$documento', '$fenac', '$telefono', '$direccion', '$correo', '$fecha', '$sucursal', '$archivo_url', '$nombreImagen', '$rol')";

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
