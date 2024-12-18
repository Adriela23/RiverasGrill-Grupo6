create database proyecto;
use proyecto;

CREATE TABLE reservas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    fecha DATE NOT NULL,
    hora TIME NOT NULL,
    personas INT NOT NULL,
    mensaje TEXT,
    fecha_reserva TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
