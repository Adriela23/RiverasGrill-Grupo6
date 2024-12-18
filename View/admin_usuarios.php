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


$sql = "SELECT id, nombre, email, fecha_registro FROM crearUsuarios";
$result = $conn->query($sql);


$conn->close();
?>

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

        .btn {
            background-color: #ff6700;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #e65c00;
        }

        .no-users {
            text-align: center;
            font-size: 18px;
            color: #555;
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

        <div class="dashboard-section">
            <h2>Usuarios Registrados</h2>

            <?php if ($result->num_rows > 0): ?>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo Electrónico</th>
                            <th>Fecha de Registro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($usuario = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $usuario['id']; ?></td>
                                <td><?php echo $usuario['nombre']; ?></td>
                                <td><?php echo $usuario['email']; ?></td>
                                <td><?php echo $usuario['fecha_registro']; ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p class="no-users">No se han encontrado usuarios registrados.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>



