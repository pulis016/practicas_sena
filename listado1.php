<html>
<head>
    <title>Reporte 1</title>
</head>
<body>
    
<?php
$conexion = new mysqli("localhost", "root", "", "negocio");
if($conexion -> connect_error){
    die("ERROR en la conexion con el servidor" . $conexion -> connect_error);
}
$registro = mysqli_query($conexion, "SELECT id_user, nombre, apellido, correo, localidad FROM usuarios")
or die("Problemas en el select: " . mysqli_error($conexion));
while ($reg = mysqli_fetch_array($registro)) {
    echo "Codigo Usuario: " . $reg['id_user'] . "<br>";
    echo "Nombre : " . $reg['nombre'] . "<br>";
    echo "Apellido : " . $reg['apellido'] . "<br>";
    echo "Correo Electronico : " . $reg['correo'] . "<br>";
    echo "Localidad: " . $reg['localidad'] . "<br>";
    echo "<br>";
    echo "<hr>";
}
mysqli_close($conexion);

?>
</body>
</html>