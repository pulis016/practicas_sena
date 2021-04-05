<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Consulta</title>
<!--http://localhost/CRUD/captura.html -->
</head>
<body>

<?php

//incluimos los datos de la conexion y las funciones:-->

include("conexion.php");
include("funciones.php");

// usamos esas variables-->
if($conexion = conectarbase($host,$usuario,$clave,$base)){
	echo "<p> msqli da acceso para realizar la consulta";
	//preparamos la orden sql
	$consulta = "SELECT * FROM usuarios WHERE localidad = '$_REQUEST[local]' ";
	//Ejecutar la orden y obtener datos... devuleve $enlace
	if($paquete = consultar($conexion, $consulta)){
		//Aqui llamaremos a una funcion que muestre los datos
		$codigoTable = tabular($paquete);
		echo $codigoTable;

	}
	else{
		echo "<p>No se encontraron datos";
	}
}
	else{
		echo "<p>No se conoce el usuario";
	}

?>
</body>
</html>