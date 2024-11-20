<?php
// Comentamos la parte de la conexión a la base de datos para evitar errores mientras no esté configurada.
$servername = "localhost"; // Cambia esto si tu servidor de base de datos está en otro lugar
$username = "root";        // Tu nombre de usuario de MySQL
$password = "";            // Tu contraseña de MySQL
$dbname = "nombre_de_tu_base_de_datos"; // El nombre de tu base de datos

// Crear la conexión (comentada temporalmente)
// $conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar si la conexión fue exitosa (comentada temporalmente)
// if ($conn->connect_error) {
//     die("Conexión fallida: " . $conn->connect_error);
// }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $fecha = $_POST['fecha'];
    $nombre = $_POST['nombre'];
    $personas = $_POST['personas'];

    // Comentamos la lógica de base de datos por ahora
    // Usar una sentencia preparada para evitar inyecciones SQL
    // $stmt = $conn->prepare("INSERT INTO reservas (fecha, nombre, personas) VALUES (?, ?, ?)");
    // $stmt->bind_param("ssi", $fecha, $nombre, $personas); // "ssi" significa String, String, Integer

    // Simulamos el éxito para poder ver el mensaje sin conectar a la base de datos
    // if ($stmt->execute()) {
    //     $successMessage = "Reserva realizada con éxito!";
    // } else {
    //     $errorMessage = "Error al realizar la reserva: " . $stmt->error;
    // }

    // Cerrar la sentencia y la conexión (comentado)
    // $stmt->close();
    // $conn->close();

    // Mensaje simulado de éxito
    $successMessage = "Reserva realizada con éxito! (Simulación sin base de datos)";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva tu evento - Rivera's Grill</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .background {
            background: url('img/menu-6.jpg') no-repeat center center/cover;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        .overlay {
            background-color: rgba(15, 23, 43, 0.7);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        .card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
            padding: 20px;
        }
        .btn-primary {
            background-color: #e76920;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0F172B;
            color: #fff;
        }
        .error {
            color: red;
        }
        .success {
            color: green;
        }
        .navbar {
            z-index: 1000;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
    <a href="home.php" class="navbar-brand p-0">
        <h1 class="text-primary m-0"><img src="img/Logo.png" alt="Logo" style="height: 50px;"> Rivera's Grill</h1>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="home.php">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="sobrenosotros.php">Sobre Nosotros</a></li>
            <li class="nav-item"><a class="nav-link" href="servicios.php">Servicios</a></li>
            <li class="nav-item"><a class="nav-link" href="menu.php">Menú</a></li>
            <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
            <li class="nav-item"><a class="nav-link" href="iniciodeseccion.php">Inicio de Sesión</a></li>
        </ul>
        <a href="reserva.php" class="btn btn-primary py-2 px-4">Reserva tu evento</a>
    </div>
</nav>

<div class="background"></div>
<div class="overlay"></div>

<!-- Formulario de Reserva -->
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <h2 class="text-center text-primary mb-4">Reserva tu evento</h2>
                
                <!-- Mostramos el mensaje de éxito (simulado) -->
                <?php if (isset($successMessage)): ?>
                    <p class="success"><?= $successMessage ?></p>
                <?php elseif (isset($errorMessage)): ?>
                    <p class="error"><?= $errorMessage ?></p>
                <?php endif; ?>

                <form action="reserva.php" method="POST">
                    <div class="form-group">
                        <label for="fecha">Fecha del evento</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="personas">Cantidad de personas</label>
                        <input type="number" class="form-control" id="personas" name="personas" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Reservar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
