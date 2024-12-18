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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ventas que se realizaron en los ultimos meses </title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f4f4f9;
    }

    .dashboard {
      display: flex;
      flex-direction: column;
      height: 100vh;
    }

    .header {
      background-color: #ff6700;
      color: white;
      text-align: center;
      padding: 1rem 0;
    }

    .main-content {
      display: flex;
      justify-content: center;
      align-items: center;
      flex: 1;
    }

    .chart-container {
      width: 80%;
      max-width: 800px;
    }
  </style>
</head>
<body>
  <div class="dashboard">
    <header class="header">
      <h1>Ventas que se realizaron en los últimos meses</h1>
    </header>
    <main class="main-content">
      <section class="chart-container">
        <canvas id="salesChart"></canvas>
      </section>
    </main>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const ctx = document.getElementById('salesChart').getContext('2d');
      

      const data = {
        labels: [
          "Enero", "Febrero", "Marzo", 
          "Abril", "Mayo", "Junio", 
          "Julio", "Agosto", "Septiembre", 
          "Octubre", "Noviembre", "Diciembre"
        ],
        datasets: [{
          label: 'Ventas Mensuales ($)',
          data: [500, 700, 1200, 900, 1500, 2000, 1700, 1600, 1800, 2100, 2500, 3000],
          backgroundColor: [
            '#4CAF50', '#2196F3', '#FFC107',
            '#FF5722', '#9C27B0', '#00BCD4',
            '#673AB7', '#E91E63', '#607D8B',
            '#795548', '#3F51B5', '#8BC34A'
          ],
          borderWidth: 1
        }]
      };


      const config = {
        type: 'bar',
        data: data,
        options: {
          responsive: true,
          plugins: {
            legend: {
              display: true,
              position: 'top',
            },
            tooltip: {
              callbacks: {
                label: (context) => `Ventas: $${context.raw}`
              }
            }
          },
          scales: {
            x: {
              title: {
                display: true,
                text: 'Meses'
              }
            },
            y: {
              title: {
                display: true,
                text: 'Ventas ($)'
              },
              beginAtZero: true
            }
          }
        }
      };


      new Chart(ctx, config);
    });
  </script>

    </div>
</body>
</html>



