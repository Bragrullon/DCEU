<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ID = $_POST["ID"];
    $nombre = $_POST["Nombre"];
    $correo = $_POST["Correo"];
    $contraseña = $_POST["Contraseña"];
    $Telefono = $_POST["Telefono"];

    // Conexión a la base de datos (reemplaza con tus propios detalles)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "datos";

    $conexion = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Preparar la consulta SQL
    $sql = "INSERT INTO usuarios (ID, Nombre, Correo, Contraseña,Telefono) VALUES ('$ID','$nombre', '$correo','$contraseña','$Telefono')";

    // Ejecutar la consulta
    if ($conexion->query($sql) === TRUE) {
        echo "Registro exitoso.ID: $ID,  Nombre: $nombre, Correo: $correo, Contraseña: $contraseña, Telefono: $telefono";
    } else {
        echo "Error al registrar: " . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
} else {
    echo "Acceso no válido.";
}
?>