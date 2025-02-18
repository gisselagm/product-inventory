CREATE DATABASE IF NOT EXISTS inventario;
USE inventario;

-- Crear usuario 'daw' con contraseña 'feb2025'
CREATE USER IF NOT EXISTS 'daw'@'%' IDENTIFIED BY 'feb2025';
GRANT ALL PRIVILEGES ON inventario.* TO 'daw'@'%';
FLUSH PRIVILEGES;

-- Crear la tabla de productos
CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL
);

-- Insertar productos de ejemplo
INSERT INTO productos (nombre, precio, stock) VALUES
('Laptop HP', 699.99, 15),
('Monitor Samsung', 199.99, 30),
('Teclado Mecanico', 89.99, 20),
('Raton Inalambrico', 29.99, 50);
