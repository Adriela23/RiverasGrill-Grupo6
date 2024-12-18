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


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];


    if (empty($email) || empty($password)) {
        $mensaje = "Todos los campos son obligatorios.";
    } else {
   
        $sql = "SELECT id, nombre, password FROM usuarios WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $usuario = $result->fetch_assoc();

  
            if (password_verify($password, $usuario['password'])) {
                $_SESSION['nombre'] = $usuario['nombre'];
                $_SESSION['email'] = $email;


                $_SESSION['mensaje_bienvenida'] = "¡Bienvenido, " . $usuario['nombre'] . "! Has iniciado sesión con éxito.";

       
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
