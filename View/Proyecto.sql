create database proyecto;
use proyecto;


CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,      
    nombre VARCHAR(100) NOT NULL,             
    email VARCHAR(100) NOT NULL UNIQUE,      
    password VARCHAR(255) NOT NULL           
);

CREATE TABLE crearUsuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

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

