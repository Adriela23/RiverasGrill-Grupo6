<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros - RiverasGrill</title>

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

    <!-- Estilos personalizados -->
    <style>
        /* Barra de navegación fija */
        nav.navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 9999;
        }

        
        body {
            margin-top: 80px; 
        }

        
        .sobre-nosotros-header {
            background-color: var(--primary); 
            color: #F1F8FF; 
            padding: 40px;
            text-align: center;
        }

        
        .sobre-nosotros-header img {
            max-width: 100%;
            height: auto;
        }

        
        .features-list {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
        }

        .feature-item {
            flex: 1;
            text-align: center;
            padding: 20px;
            background-color: #f8f9fa;
            margin: 10px;
            border-radius: 8px;
        }

        .feature-item h4 {
            color: var(--primary);
        }

        .feature-item p {
            color: #333;
        }

        
        footer {
            background-color: #222;
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="home.php" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><img src="img/Logo.png" alt="Logo"> RiverasGrill</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="home.php" class="nav-item nav-link active">Inicio</a>
                <a href="sobrenosotros.php" class="nav-item nav-link">Sobre Nosotros</a>
                <a href="service.html" class="nav-item nav-link">Servicios</a>
                <a href="menu.html" class="nav-item nav-link">Menu</a>
                <a href="contact.html" class="nav-item nav-link">Contacto</a>
                <a href="iniciodeseccion.php" class="nav-item nav-link">Inicio de seccion</a>
            </div>
            <a href="" class="btn btn-primary py-2 px-4">Reserva tu evento</a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Sección "Sobre Nosotros" -->
    <div class="sobre-nosotros-header">
        <h1>Sobre Nosotros</h1>
        <p>Somos una empresa comprometida con la calidad y el servicio, ofreciendo productos frescos y deliciosos en un ambiente único. Con el esfuerzo y dedicación de todo nuestro equipo, buscamos siempre superar las expectativas de nuestros clientes.</p>
    </div>

    <!-- Imagen destacada -->
    <div class="container text-center my-5">
        <img src="img/about-3.jpg" alt="Nuestra Empresa" class="img-fluid" style="max-width: 600px; height: auto;">
    </div>

    <!-- Características/Lo que ofrecemos -->
    <div class="container">
        <h2 class="text-center my-4">¿Qué ofrecemos?</h2>
        <div class="features-list">
            <div class="feature-item">
                <h4>Comida fresca</h4>
                <p>Usamos solo ingredientes frescos y de la mejor calidad en todos nuestros platos.</p>
            </div>
            <div class="feature-item">
                <h4>Ambiente único</h4>
                <p>Disfruta de un ambiente acogedor y cálido para compartir con tu familia y amigos.</p>
            </div>
            <div class="feature-item">
                <h4>Atención al cliente</h4>
                <p>Nuestro equipo está siempre disponible para ofrecerte un servicio de calidad.</p>
            </div>
            <div class="feature-item">
                <h4>Precios competitivos</h4>
                <p>Ofrecemos productos de alta calidad a precios justos y accesibles.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container text-center py-4">
            <p>&copy; 2024 RiverasGrill. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
