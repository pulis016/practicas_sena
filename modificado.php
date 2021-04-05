<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Modificar</title>
</head>
<body>
	<?php
	//Incluimos los datos de conexion y las funciones:
	include("conexion.php");
	include("funciones.php");
	//Verificamos la presencia del codigo esperado:
	if ( isset ($_POST["nombre"], $_POST["apellido"], $_POST["user"], $_POST["localidad"], $_POST["correo"])){
		if($con = conectarbase($host,$usuario,$clave,$base)) {
			//Evitamos problemas con codificaciones:
			@mysqli_query($con,"SET NAMES 'UTF-8'");
			//TRASPASAMOS LAS VARIABLES LOCALES:
			$codigo = $_POST["usecode"];
			$user = $_POST["user"];
			$nombre = $_POST["nombre"];
			$apellido = $_POST["apellido"];
			$localidad = $_POST["localidad"];
			$correo = $_POST["correo"];
			$consulta = "UPDATE usuarios SET user ='$user', nombre ='$nombre', apellido ='$apellido', localidad ='$localidad', correo ='$correo' WHERE id_user ='$codigo' ";
			if(mysqli_query($con,$consulta)) {
				echo "El registro se ha actualizado crack";
				echo $user. " " .$nombre . " " .$apellido. " " .$localidad ;
			}

			else{
				echo "No se pudo actualizar el registro";
			}
		}
		else{
			echo "Servicio Interrumpido";
		}
	}
	else{
		echo "No se ha indicado el registro modificar";
	}
	echo '<p> Regresar al <a href="captura.html">lista FINAL </a></p>';

	?>
</body>
</html>