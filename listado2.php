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
$registro = mysqli_query($conexion, "SELECT id_user, nombre, apellido, correo, user FROM usuarios")
or die("Problemas en el select: " . mysqli_error($conexion));
?>
<table border="1">
    <thead>
        <tr>
            <td>CODIGO</td>
            <td>NOMBRE</td>
            <td>APELLIDO</td>
            <td>CORREO</td>
            <td>USUARIO</td>
        </tr>
    </thead>
<?php
while ($row = mysqli_fetch_array($registro)) {
    ?>
<tr>
    <td><?php echo $row['id_user']?></td>
    <td><?php echo $row['nombre']?></td>
    <td><?php echo $row['apellido']?></td>
    <td><?php echo $row['correo']?></td>
    <td><?php echo $row['user']?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>