<?php


require_once 'conexion.php';

$nombre = $_POST['nombreCliente'];
$apellido = $_POST['apellidoCliente'];
$tipodoc = $_POST['tipodocCliente'];
$documento = $_POST['documentoCliente'];
$telefono = $_POST['telCliente'];
$sexo = $_POST['sexoCliente'];
$correo = $_POST['correoCliente'];
$fenac = $_POST['fenacCliente'];
$fecha = $_POST['fechaingCliente'];
$direccion = $_POST['dirCliente'];
$ciudad = $_POST['ciudadCliente'];


$query = "INSERT INTO cliente (id_cliente, nom_cliente, ape_cliente, tipodoc, doc_cliente, tel_cliente, sexo_cliente, correo_cliente, fecha_nac_cliente, fecha_cliente,dir_cliente, id_ciudad, rol) VALUES (NULL, '$nombre', '$apellido', '$tipodoc', '$documento', '$telefono', '$sexo', '$correo', '$fenac', '$fecha', '$direccion', '$ciudad', '3')";

$sql = $conexion->query($query );


if ($sql) {
    $respuesta = array('respuesta' => 'exito');
} else {
    $respuesta = array('respuesta' => 'error');
}

echo json_encode($respuesta);

mysqli_close($conexion);
