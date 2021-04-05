<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Eliminar Registros</title>
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
			$consulta = "DELETE FROM usuarios WHERE id_user = '$codigo'";
			if(mysqli_query($con,$consulta)) {
				echo '<script >alert("El dato ha sido eliminado Satisfactoriamente ' . $codigo . '");</script>';
				echo "<p>Registro eliminado.</p>";
			}
			else{
				echo "<p>El registro no se pudo eliminar crack.</p>";
			}
		}
			else{
				echo "<p>Servicio Interrumpido.</p>";
			}
		}
			else{
				echo "<p>No se ha indicado el registro eliminar.</p>";
			}
		
			echo '<p>Regresar al <a href = "captura.html"> Listado </a> </p>';
	




	?>
</body>
</html>