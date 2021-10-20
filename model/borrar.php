<?php
include('conexion.php');
//conectarme a mysql

$id = $_GET['id_cliente'];

echo $id;

$opcion=$_GET['opcion'];

	if ($opcion)
	{
		$id=$_GET['id_cliente'];

   		$sqlb = mysqli_query($conexion,"delete from cliente where id_cliente='$id'");


		header('location.href="../Ver-clientes"');
		}
	else {


	echo 
    "<script>
 		var p;
 		p = confirm('¿Seguro Desea Borrar el registro?');
 		if(!p)
		{
 			location.href='../Ver-clientes';
		}
		else
		{
 			location.href='borrar.php?opcion=borrar&id_cliente=$id';
		}
 		</script>";
	}

    mysqli_close($conexion);
