    <?php
    $server="localhost";
    $usuario="root";
    $contraseña="";
    $bd="inmobiliaria";
    $conexion= mysqli_connect($server, $usuario, $contraseña, $bd)
    or die ("error de conexion...");

    $idpr= $_POST['idpr'];
    $tipo= $_POST['tipo'];
    $direccion= $_POST['direccion'];
    $precio= $_POST['precio'];
    $moneda= $_POST['moneda'];
    $habitaciones= $_POST['habitaciones'];
    $baños= $_POST['baños'];
    $garage= $_POST['garage'];
    $superficie= $_POST['superficie'];
    $idag= $_POST['idag'];
    

    $insertar= "INSERT INTO propiedades (ID_propiedad, tipo, direccion, precio, moneda, habitaciones, baños, garage, superficie, ID_agente) VALUES ('$idpr', '$tipo', '$direccion', '$precio', '$moneda', '$habitaciones', '$baños', '$garage', '$superficie', '$idag')";

    $resultado= mysqli_query($conexion, $insertar)
    or die ("error al insertar registro o Datos repetidos ");

    mysqli_close($conexion);
    
    echo "datos insertados correctamente...";
    echo "<a href='index.html'>Volver al Inicio</a>";
    ?>