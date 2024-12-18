<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrativo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            display: flex;
        }

        .sidebar {
            width: 250px;
            background-color: #1b1f3b;
            color: #ffffff;
            height: 100vh;
            padding: 1rem;
            box-sizing: border-box;
            position: fixed;
        }

        .sidebar h2 {
            text-align: center;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 1rem 0;
        }

        .sidebar ul li a {
            color: #ff6700;
            text-decoration: none;
            display: block;
            padding: 0.5rem 1rem;
            border-radius: 5px;
        }

        .sidebar ul li a:hover {
            background-color: #ff6700;
            color: #ffffff;
        }

        .content {
            margin-left: 250px;
            padding: 2rem;
            width: calc(100% - 250px);
            box-sizing: border-box;
        }

        .dashboard-section {
            margin-bottom: 2rem;
            background-color: #ffffff;
            padding: 1rem;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .dashboard-section h2 {
            color: #1b1f3b;
            border-bottom: 2px solid #ff6700;
            padding-bottom: 0.5rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
            background-color: #ffffff;
        }

        table th, table td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 0.75rem;
        }

        table th {
            background-color: #ff6700;
            color: #ffffff;
        }

        table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        a {
            text-decoration: none;
            color: #1b1f3b;
            font-weight: bold;
        }

        a:hover {
            color: #ff6700;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
            <li><a href="admin_reservas.php">Reservas</a></li>
            <li><a href="admin_usuarios.php">Clientes</a></li>
            <li><a href="admin_pedidos.php">Pedidos Realizados</a></li>
        </ul>
    </div>

    <div class="content">
        <h1 style="text-align: center; color: #1b1f3b;">Bienvenido al Panel Administrativo de Riveras Grill</h1>
    </div>
</body>
</html>



