<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RiverasGrill & MexicanFood</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">

        <!-- Navbar Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><img src="img/Logo.png" alt="Logo"> RiverasGrill</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                    <a href="home.php" class="nav-item nav-link active">Inicio</a>
                        <a href="sobrenosotros.php" class="nav-item nav-link">Sobre Nosotros</a>
                        <a href="servicios.php" class="nav-item nav-link">Servicios</a>
                        <a href="menu.php" class="nav-item nav-link active">Menu</a>
                        <a href="contacto.php" class="nav-item nav-link">Contacto</a>
                        <a href="iniciodeseccion.php" class="nav-item nav-link">Inicio de Sesion</a>
                    </div>
                    <a href="reserva.php" class="btn btn-primary py-2 px-4">Reserva tu evento</a>
                </div>
            </nav>
        </div>
          <!-- Hero Start -->
          <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container my-5 py-5">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="display-3 text-white animated slideInLeft">inicia seccion <br>o create una cuenta nueva</h1>
                        <p class="text-white animated slideInLeft mb-4 pb-2">y no te pierdas de todos los beneficios y promociones que tenemos para ti</p>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión o registrarse</title>
    <style>
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #e76920;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #d05d1c;
        }
        .mensaje {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #e76920;
            border-radius: 4px;
            background-color: #ffe5d0;
            color: #0F172B;
        }
    </style>
</head>
<div class="container">
        <h2>Iniciar Sesión</h2>
        <!-- Formulario de inicio de sesión -->
        <form method="POST" action="procesar_inicioSesion.php">
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="login">Iniciar Sesión</button>
        </form>

        <h2>Crear Cuenta</h2>
        <!-- Formulario de creación de cuenta -->
        <form method="POST" action="procesar_registro.php">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="registro">Crear Cuenta</button>
        </form>

        <?php if (!empty($mensaje)): ?>
        <div class="mensaje">
            <?php echo $mensaje; ?>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>