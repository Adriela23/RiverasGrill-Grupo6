<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root"; // Usuario de MySQL
$password = "hola123"; // Contraseña de MySQL
$dbname = "proyecto"; // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consultar las reservas
$sql = "SELECT id, nombre, email, telefono, fecha, hora, personas, mensaje FROM reservas";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Reservas</title>
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

        .header {
            text-align: center;
            margin-bottom: 2rem;
            color: #1b1f3b;
        }

        h1 {
            color: #1b1f3b;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #ff6700;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #ff6700;
            color: white;
        }

        .no-reservations {
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
        <h1 class="header">Reservas Realizadas</h1>

        <?php
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Personas</th>
                    <th>Mensaje</th>
                  </tr>";
            // Mostrar los datos de cada reserva
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . htmlspecialchars($row["nombre"]) . "</td>
                        <td>" . htmlspecialchars($row["email"]) . "</td>
                        <td>" . htmlspecialchars($row["telefono"]) . "</td>
                        <td>" . htmlspecialchars($row["fecha"]) . "</td>
                        <td>" . htmlspecialchars($row["hora"]) . "</td>
                        <td>" . htmlspecialchars($row["personas"]) . "</td>
                        <td>" . htmlspecialchars($row["mensaje"]) . "</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "<p class='no-reservations'>No hay reservas registradas.</p>";
        }
        // Cerrar la conexión
        $conn->close();
        ?>
    </div>
</body>
</html>

