<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Modificar Registros</title>
</head>
<body>
	<?php
	//Incluimos los datos de conexion y las funciones:
	include("conexion.php");
	include("funciones.php");
	//Verificamos la presencia del codigo esperado:
	if(isset($_GET["codigo"]) and $_GET ["codigo"] <> "") {
		$codigo = $_GET["codigo"];
		//Nos conectamos:
		if($con = conectarbase($host,$usuario,$clave,$base)) {
			//Traspasamos a una variable local para evitar problemas con las comillas:
			$consulta = "SELECT * FROM usuarios WHERE id_user = '$codigo'";
			if($paquete = consultar($con,$consulta)) {
				$resultado = editarRegistros($paquete);
				echo $resultado;
			}
			else{
				echo "El usuario no se pudo modificar";
			}
		}
		else{
			echo "Servicio interrumpido";
		}
	}
	else{
		echo "No se ha identificado el registro identificar";
	}
	echo '<p>Regresar al <a href = "captura.html"> Listado </a> </p>';

	?>

</body>
</html>