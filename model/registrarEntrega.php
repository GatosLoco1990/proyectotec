<?php


require_once 'conexion.php';

$fecha = $_POST['fechaing'];
$resultado = $_POST['resultado'];
$valor = $_POST['valor'];
$servicio = $_POST['servicio'];



$query = "INSERT INTO entrega (id_entrega, fecha_entrega, resultado, costo_neto, id_servicio) VALUES (NULL, '$fecha', '$resultado', '$valor', '$servicio')";

$sql = $conexion->query($query );


if ($sql) {
    $respuesta = array('respuesta' => 'exito');
} else {
    $respuesta = array('respuesta' => 'error');
}

echo json_encode($respuesta);

mysqli_close($conexion);
