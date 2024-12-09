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
                        <h1 class="display-3 text-white animated slideInLeft">Reserva y no te pierdas <br>el delicioso sabor de nuestra comida</h1>
                        <p class="text-white animated slideInLeft mb-4 pb-2">Déjate llevar por los sabores de nuestros platillos tradicionales, ideales para cada momento.</p>
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
    <title>Reservar Evento</title>
    <!-- Estilos básicos -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
        }
        form {
            max-width: 400px;
            margin: auto;
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input, textarea, select, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        button {
            background-color: #007BFF;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <h1>Reservar Evento</h1>
    <form action="procesar_reserva.php" method="POST">
        <label for="nombre">Nombre Completo:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>
        
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" placeholder="Tu correo electrónico" required>
        
        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" placeholder="Tu número de teléfono" required>
        
        <label for="fecha">Fecha del Evento:</label>
        <input type="date" id="fecha" name="fecha" required>
        
        <label for="hora">Hora del Evento:</label>
        <input type="time" id="hora" name="hora" required>
        
        <label for="personas">Número de Personas:</label>
        <input type="number" id="personas" name="personas" min="1" placeholder="Cantidad de invitados" required>
        
        <label for="mensaje">Comentarios/Detalles:</label>
        <textarea id="mensaje" name="mensaje" rows="4" placeholder="Especifica algún detalle importante (opcional)"></textarea>
        
        <button type="submit">Reservar</button>
    </form>
</body>

</html>
