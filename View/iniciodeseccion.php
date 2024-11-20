<?php

$showRegisterForm = false;
$loginError = '';
$registerSuccess = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        //  (conéctalo a la base de datos aquí)
        if ($email === 'usuario@ejemplo.com' && $password === '123456') {
            header("Location: home.php"); // Redirige a home.php si es válido
            exit;
        } else {
            $loginError = 'Correo o contraseña incorrectos.';
        }
    } elseif (isset($_POST['goToRegister'])) {
        $showRegisterForm = true;
    } elseif (isset($_POST['register'])) {
        $email = $_POST['reg_email'];
        $password = $_POST['reg_password'];
        $phone = $_POST['phone'];

        // Simulación de registro
        $registerSuccess = '¡Registro exitoso! Ahora puedes iniciar sesión.';
        $showRegisterForm = false;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de Sesión - Rivera's Grill</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <style>
    :root {
      --primary: #e76920;
      --light: #F1F8FF;
      --dark: #0F172B;
    }

    body, html {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      height: 100%;
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
      background-color: var(--light);
      border-radius: 15px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
    }

    .btn-primary {
      background-color: var(--primary);
      border: none;
    }

    .btn-primary:hover {
      background-color: var(--dark);
      color: var(--light);
    }

    .error {
      color: red;
    }

    .success {
      color: green;
    }

    .logo-title {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
    }

    .logo-title img {
      max-height: 60px;
      margin-right: 15px;
    }

    /* Ajuste para que el navbar ocupe todo el ancho de la página */
    .navbar {
      width: 100%;
      margin: 0;
      padding: 0;
      background-color: #333;
    }

    .navbar-nav {
      flex-direction: row;
    }

    .navbar-nav .nav-item {
      padding: 10px;
      font-size: 1rem;
    }

    .navbar-toggler {
      border: none;
    }

    .navbar-brand {
      font-size: 1.5rem;
    }

    /* Asegura que el contenedor principal ocupe el espacio debajo del navbar */
    .container {
      margin-top: 120px; /* Ajusta según la altura de tu navbar */
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: calc(100vh - 120px); /* Asegura que ocupe toda la altura disponible */
      padding-bottom: 30px; /* Espacio en la parte inferior */
    }

    .form-container {
      width: 100%;
      max-width: 400px;
      padding: 30px;
      background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco con opacidad */
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.25);
    }

    /* Estilo de los enlaces activos */
    .navbar-nav .nav-item.active {
      background-color: var(--primary);
      color: #fff;
      border-radius: 5px;
    }

  </style>
</head>
<body>

<div class="background"></div>
<div class="overlay"></div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
    <a href="home.php" class="navbar-brand p-0">
        <h1 class="text-primary m-0"><img src="img/Logo.png" alt="Logo" style="height: 50px;"> Rivera's Grill</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4">
            <a href="home.php" class="nav-item nav-link active">Inicio</a>
            <a href="sobrenosotros.php" class="nav-item nav-link">Sobre Nosotros</a>
            <a href="servicios.php" class="nav-item nav-link">Servicios</a>
            <a href="menu.php" class="nav-item nav-link">Menu</a>
            <a href="contacto.php" class="nav-item nav-link">Contacto</a>
            <a href="iniciodeseccion.php" class="nav-item nav-link">Inicio de Sesión</a>
        </div>
        <a href="reserva.php" class="btn btn-primary py-2 px-4">Reserva tu evento</a>
    </div>
</nav>

<div class="container">
    <div class="form-container">
        <div class="logo-title">
            <img src="img/Logo.png" alt="Logo">
            <h3 class="text-primary">Rivera's Grill</h3>
        </div>
        <?php if ($showRegisterForm): ?>
            <!-- Formulario de Registro -->
            <h4 class="mb-4">Registro</h4>
            <form method="POST">
                <div class="form-group">
                    <label for="reg_email">Correo Electrónico</label>
                    <input type="email" class="form-control" id="reg_email" name="reg_email" required>
                </div>
                <div class="form-group">
                    <label for="reg_password">Contraseña</label>
                    <input type="password" class="form-control" id="reg_password" name="reg_password" required>
                </div>
                <div class="form-group">
                    <label for="phone">Número de Teléfono</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>
                <button type="submit" name="register" class="btn btn-primary mt-3">Registrarse</button>
                <button type="submit" name="goToLogin" class="btn btn-link mt-3">Volver al inicio de sesión</button>
            </form>
        <?php else: ?>
            <!-- Formulario de Inicio de Sesión -->
            <h4 class="mb-4">Inicio de Sesión</h4>
            <form method="POST">
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <?php if ($loginError): ?>
                    <p class="error"><?= $loginError ?></p>
                <?php endif; ?>
                <button type="submit" name="login" class="btn btn-primary mt-3">Iniciar Sesión</button>
                <button type="submit" name="goToRegister" class="btn btn-link mt-3">¿No tienes cuenta? Regístrate aquí</button>
            </form>
        <?php endif; ?>
        <?php if ($registerSuccess): ?>
            <p class="success mt-3"><?= $registerSuccess ?></p>
        <?php endif; ?>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
