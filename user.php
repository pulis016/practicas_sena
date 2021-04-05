<?php
$conn = new mysqli("localhost", "root", "", "negocio");
if ($conn->connect_error){
	die ("error no se puede conectar al servidor: " . $conn->connect_error);
}
$query = "INSERT INTO usuarios(nombre, apellido, user, pass, localidad, correo) VALUES('$_REQUEST[nom]', '$_REQUEST[ape]', '$_REQUEST[user]', '$_REQUEST[pass]', '$_REQUEST[localidad]', '$_REQUEST[correo]')";
$result = $conn -> query ($query);
if (!$result) die ("Falla al acceder a la base de datos");
echo "El usuario fue dado de alta";
$conn -> close();  
?>