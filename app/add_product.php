<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $stock = $_POST["stock"];

    $sql = "INSERT INTO productos (nombre, precio, stock) VALUES ('$nombre', '$precio', '$stock')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Producto</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Añadir Producto</h1>
    <form method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label>Precio (€):</label>
        <input type="number" name="precio" step="0.01" required><br>

        <label>Stock:</label>
        <input type="number" name="stock" required><br>

        <button type="submit">Guardar</button>
        <button type="button" onclick="window.location.href='index.php'">Cancelar</button>
    </form>
</body>
</html>

<?php $conn->close(); ?>
