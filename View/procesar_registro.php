<?php
session_start();

$servername = "localhost"; 
$username = "root";   
$password = "hola123";  
$dbname = "Proyecto";  


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$mensaje = "";


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registro'])) {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];


    if (empty($nombre) || empty($email) || empty($password)) {
        $mensaje = "Todos los campos son obligatorios.";
    } else {
   
        $sql = "SELECT id FROM crearUsuarios WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $mensaje = "El correo electrónico ya está registrado.";
        } else {
    
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

     
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
