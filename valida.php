<html>
    <?php
    $nombre = $_POST['usuario'];
    $password = $_POST['clave'];
    $conn = new mysqli("localhost","root","","negocio");
    if ($conn -> connect_error){
        die ("no se ha establecido conexion con el servidor: " . $conn -> connect_error);
    }
    $registros = mysqli_query($conn, "SELECT * FROM usuarios WHERE user = '$nombre' AND pass = '$password' ");
    if ($reg = mysqli_fetch_array($registros)){
        echo "Usuario Existente" . $nombre . " " . $password . " Permiso Concedido" 
    ?>
    <p>
        <br>
        <a href="http://localhost/Mio/Cambio.html"><input type="button" Value="Ingresar al Sitio"></a>
    </p>
    <?php
    }
    else {
        echo "<script> alert ('Informacion incorrecta') </script>";
        echo "Usuario Inexistente...";
        echo "Volver a intentar";
    ?>
    <p>
        <br>
        <a href="http://localhost/mio/Validacion.html"><input type="button" Value="Volver a Intentar"></a>
    </p>
    <?php
    }
    ?>
    
</html>