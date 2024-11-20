<?php
// Simulación de envío de mensaje sin conexión a la base de datos
$messageSent = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $messageSent = true;
    $successMessage = "¡Gracias, $nombre! Tu mensaje ha sido enviado con éxito. (Simulación sin base de datos)";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Rivera's Grill</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }
        .background {
            background: url('img/menu-1.jpg') no-repeat center center/cover;
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
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }
        .social-icons a {
            font-size: 24px;
            color: #fff;
            transition: transform 0.3s ease;
        }
        .social-icons a:hover {
            transform: scale(1.2);
        }
        .success {
            color: green;
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
            <li class="nav-item"><a class="nav-link" href="service.html">Servicios</a></li>
            <li class="nav-item"><a class="nav-link" href="menu.html">Menú</a></li>
            <li class="nav-item"><a class="nav-link active" href="contact.php">Contacto</a></li>
            <li class="nav-item"><a class="nav-link" href="login.php">Inicio de Sesión</a></li>
        </ul>
        <a href="reserva.php" class="btn btn-primary py-2 px-4">Reserva tu evento</a>
    </div>
</nav>

<div class="background"></div>
<div class="overlay"></div>

<!-- Formulario de Contacto -->
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <h2 class="text-center text-primary mb-4">Contáctanos</h2>

                <!-- Mostramos el mensaje de éxito si se envió -->
                <?php if ($messageSent): ?>
                    <p class="success"><?= $successMessage ?></p>
                <?php endif; ?>

                <form action="contact.php" method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="mensaje">Mensaje</label>
                        <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Íconos de Redes Sociales -->
<div class="social-icons">
    <a class="btn-social" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
    <a class="btn-social" href="https://facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
    <a class="btn-social" href="https://youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
    <a class="btn-social" href="https://linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html>
