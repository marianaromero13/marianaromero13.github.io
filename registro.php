<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "caninos";

// Crear conexión
$conn = new mysqli($host, $user, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

// Insertar en la base de datos
$sql = "INSERT INTO registro (nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
