<?php 

	include "../conexion.php";

	$conexion = $con;


	$id = $_GET["id"];
	$estado = 1;

	
	$sentencia = $conexion->prepare("UPDATE producto SET estado = 1 WHERE id = '$id'");
	$sentencia->bindParam(1, $estado);
	
	if ($sentencia->execute()) {
			echo "Actualizado";
			header("Location: ../../view_producto.php");
		
	}else{
			echo "Ocurrio un error";
			header("Location: index.php");
		}
	

?>