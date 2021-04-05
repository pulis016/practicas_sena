<html>

<head>
<title>Profes</title>
</head>
<body>
<?php
  //$link
$conexion = mysqli_connect("localhost", "root", "", "negocio") or
    die("Problemas con la conexión"  . mysqli_error($conexion));
$registros = mysqli_query($conexion, "SELECT id_user,nombre, apellido, correo
from usuarios") or
    die("Problemas en el select:" . mysqli_error($conexion));
?>
<table border="1" cellspacing=1 cellpadding=2 style="font-size: 10pt">    
    <thead>
    <tr>
    <th>ID</th>
    <th>NOMBRE</th>
    <th>APELLIDO</th>
    <th>CORREO</th>
    </tr>
    </thead>
<?php
$numero = 0;
while($row = mysqli_fetch_array($registros))
{
    echo "<tr><td width=\"25%\"><font face=\"verdana\">" . 
    $row["id_user"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
    $row["nombre"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
    $row["apellido"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
    $row["correo"]. "</font></td></tr>";    
    $numero++;
}

?>

</table>
</body>