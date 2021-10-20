<?php

require_once 'conexion.php';

//die(json_encode($_POST));

$identificacion = $_POST['ingresarCorreo'];
$contraseña = $_POST['ingresarContrasena'];
$tipo = $_POST['ingresarTipo'];


if ($tipo == '1' || $tipo == '2') {

    $sql = "SELECT e.id_emp, e.nom_emp, e.ape_emp, e.doc_emp, e.mail_emp, e.telefono_emp, e.dir_emp,e.ruta_imagen, s.desc_sucursal, c.desc_ciudad,
     e.rol  FROM empleado e INNER JOIN sucursal s on e.id_sucursal = s.id_sucursal INNER JOIN ciudad c on s.id_ciudad = c.id_ciudad 
     WHERE e.mail_emp = '$identificacion' and e.doc_emp = '$contraseña' and e.rol = '$tipo'";

    $ejecutar = mysqli_query($conexion, $sql);
    $rowcount = mysqli_num_rows($ejecutar);

    if ($rowcount > 0) {
        $row = $ejecutar->fetch_array(MYSQLI_ASSOC);

        session_start();
        $_SESSION['idemp'] = $row['id_emp'];
        $_SESSION['correo'] = $row['mail_emp'];
        $_SESSION['documento'] = $row['doc_emp'];
        $_SESSION['nombre'] = $row['nom_emp'];
        $_SESSION['apellido'] = $row['ape_emp'];
        $_SESSION['telefono'] = $row['telefono_emp'];
        $_SESSION['direccion'] = $row['dir_emp'];
        $_SESSION['ciudad'] = $row['desc_ciudad'];
        $_SESSION['sucursal'] = $row['desc_sucursal'];
        $_SESSION['imagen'] = $row['ruta_imagen'];
        $_SESSION['rol'] = $row['rol'];

        $respuesta = array('respuesta' => 'exito');
    } else {
        $respuesta = array('respuesta' => 'error');
    }
} else if ($tipo == '3') {


    $sql = "SELECT c.correo_cliente, c.doc_cliente, c.nom_cliente, c.ape_cliente, c.tel_cliente, c.dir_cliente, ci.desc_ciudad,
     c.rol  FROM cliente c INNER JOIN ciudad ci on c.id_ciudad = ci.id_ciudad 
     WHERE c.correo_cliente = '$identificacion' and c.doc_cliente = '$contraseña' and c.rol = '$tipo'";

    

    $ejecutar = mysqli_query($conexion, $sql);
    $rowcount = mysqli_num_rows($ejecutar);
    

    if ($rowcount > 0) {
        $row = $ejecutar->fetch_array(MYSQLI_ASSOC);
        
        session_start();
        //die(json_encode($row['correo_cliente']));
        $_SESSION['correo'] = $row['correo_cliente'];
        $_SESSION['documento'] = $row['doc_cliente'];
        $_SESSION['nombre'] = $row['nom_cliente'];
        $_SESSION['apellido'] = $row['ape_cliente'];
        $_SESSION['telefono'] = $row['tel_cliente'];
        $_SESSION['direccion'] = $row['dir_cliente'];
        $_SESSION['ciudad'] = $row['desc_ciudad'];
        $_SESSION['rol'] = $row['rol'];

        $respuesta = array('respuesta' => 'exito');
        
    } else {
        $respuesta = array('respuesta' => 'error');
    }
}


echo json_encode($respuesta);

mysqli_close($conexion);
