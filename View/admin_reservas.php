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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Reservas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color:  #ff6700;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
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
        echo "<p>No hay reservas registradas.</p>";
    }
    // Cerrar la conexión
    $conn->close();
    ?>
</body>
</html>
