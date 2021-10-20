<?php
require_once 'conexion.php';

$empleado = $_POST['Empleado'];
$cliente = $_POST['Cliente'];
$modopago = $_POST['ModoPago'];
$producto = $_POST['Producto'];
$cantidad = $_POST['Cantidad'];
$precio = $_POST['Precio'];
$total = $precio * $cantidad;

date_default_timezone_set('America/Bogota');

$fecha = date('Y-m-d h:i:s', time());

$query = "INSERT INTO factura (id_fact, id_emp, id_modopago, id_cliente, fecha_pago, total_pagar) VALUES (NULL, '$empleado', '$modopago', '$cliente', '$fecha', '100')";
$sql = $conexion->query($query);

$factura = "SELECT id_fact FROM `factura` ORDER BY id_fact DESC LIMIT 1";

$ejecutar = mysqli_query($conexion, $factura);
$row = $ejecutar->fetch_array(MYSQLI_ASSOC);
$idFactura = $row['id_fact'];
if ($sql) {

    $query2 = "INSERT INTO detalle (id_detalle, id_producto, id_factura, cantidad, total) VALUES (NULL, '$producto', '$idFactura', '$cantidad', '$total')";
    $sql = $conexion->query($query2);

    if ($sql) {
        $respuesta = array('respuesta' => 'exito');
    } else {
        $respuesta = array('respuesta' => 'error');
    }
} else {
    $respuesta = array('respuesta' => 'error');
}

echo json_encode($respuesta);

mysqli_close($conexion);
