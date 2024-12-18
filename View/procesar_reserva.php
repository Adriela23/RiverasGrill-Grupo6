<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root"; // Usuario de MySQL
$password = "hola123"; // Contraseña de MySQL
$dbname = "proyecto"; // Nombre de la base de datos (ya que creaste 'proyecto')

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$personas = $_POST['personas'];
$mensaje = $_POST['mensaje'];

// Preparar la consulta SQL para insertar los datos
$sql = "INSERT INTO reservas (nombre, email, telefono, fecha, hora, personas, mensaje)
        VALUES ('$nombre', '$email', '$telefono', '$fecha', '$hora', $personas, '$mensaje')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Reserva realizada con éxito";
} else {
    echo "Error al realizar la reserva: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
