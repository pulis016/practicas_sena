<html>
<?php
    $nombre = $_POST['usuario'];
    $password = $_POST['clave'];
   
    $conn = new mysqli("Localhost","root","","negocio");
    if ($conn-> connect_error){
        die("no se ha establecido conexion con el servidor:" . $conn -> connect_error);
    }
    $registros = mysqli_query($conn,"SELECT * FROM usuarios WHERE user = '$nombre' AND pass = '$password'");
        if ($reg = mysqli_fetch_array($registros)){
            echo "usuario existente" . $nombre . " " . $password . "Se ha permitido el cambio"; 
        mysqli_query($conn, "UPDATE usuarios SET pass='$_REQUEST[new]' WHERE pass='$password' AND user='$nombre' ") or die ("Problemas en el SELECT:" . mysql_error($conn));
            echo "El user fue modificado correctamente";
         }  
    else { "<script> alert('El cambio no se realizo con exito'; </script> )"; 
         
        
?>
    <a href="http://localhost/mio/change.html"><input type="button" value="VOLVER A INTENTAR"></a>
<?php
        
  }  
    
?>  
    
    
    
    
    