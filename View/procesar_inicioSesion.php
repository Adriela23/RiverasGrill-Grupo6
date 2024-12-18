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

// Iniciar sesión
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    // Verificar que los campos no estén vacíos
    if (empty($email) || empty($password)) {
        $mensaje = "Todos los campos son obligatorios.";
    } else {
        // Consultar si el usuario existe
        $sql = "SELECT id, nombre, password FROM usuarios WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Verificar si el usuario existe
        if ($result->num_rows > 0) {
            $usuario = $result->fetch_assoc();

            // Verificar si la contraseña es correcta
            if (password_verify($password, $usuario['password'])) {
                $_SESSION['nombre'] = $usuario['nombre'];
                $_SESSION['email'] = $email;

                // Establecer mensaje de bienvenida
                $_SESSION['mensaje_bienvenida'] = "¡Bienvenido, " . $usuario['nombre'] . "! Has iniciado sesión con éxito.";

                // Redirigir a bienvenida.php
                header("Location: bienvenida.php");
                exit();
            } else {
                $mensaje = "Contraseña incorrecta.";
            }
        } else {
            $mensaje = "El usuario no existe.";
        }

        $stmt->close();
    }
}

$conn->close();
?>
