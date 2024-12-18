<?php
session_start();

// Datos de conexión a MySQL
$servername = "localhost";  // Cambia esto si tu servidor MySQL tiene un nombre distinto
$username = "root";         // Nombre de usuario de MySQL
$password = "hola123";      // Contraseña de MySQL
$dbname = "Proyecto";       // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$mensaje = "";

// Procesar el registro
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registro'])) {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    // Verificar que los campos no estén vacíos
    if (empty($nombre) || empty($email) || empty($password)) {
        $mensaje = "Todos los campos son obligatorios.";
    } else {
        // Verificar si el correo ya está registrado
        $sql = "SELECT id FROM crearUsuarios WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $mensaje = "El correo electrónico ya está registrado.";
        } else {
            // Encriptar la contraseña
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insertar el nuevo usuario
            $sql = "INSERT INTO crearUsuarios (nombre, email, password) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $nombre, $email, $hashed_password);

            if ($stmt->execute()) {
                $mensaje = "Su cuenta ha sido creada con éxito. Puedes iniciar sesión ahora.";
            } else {
                $mensaje = "Error al crear la cuenta. Intenta nuevamente.";
            }
        }

        $stmt->close();
    }
}

$conn->close();
?>
