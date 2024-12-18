<?php

$servername = "localhost";
$username = "root"; 
$password = "hola123"; 
$dbname = "proyecto"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$personas = $_POST['personas'];
$mensaje = $_POST['mensaje'];


$sql = "INSERT INTO reservas (nombre, email, telefono, fecha, hora, personas, mensaje)
        VALUES ('$nombre', '$email', '$telefono', '$fecha', '$hora', $personas, '$mensaje')";


if ($conn->query($sql) === TRUE) {
    echo "Reserva realizada con éxito";
} else {
    echo "Error al realizar la reserva: " . $conn->error;
}

$conn->close();
?>
