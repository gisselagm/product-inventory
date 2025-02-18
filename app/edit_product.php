<?php
include 'db_config.php';

$id = $_GET["id"];
$sql = "SELECT * FROM productos WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $stock = $_POST["stock"];

    $sql = "UPDATE productos SET nombre='$nombre', precio='$precio', stock='$stock' WHERE id=$id";
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
    <title>Editar Producto</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Editar Producto</h1>
    <form method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required><br>

        <label>Precio (€):</label>
        <input type="number" name="precio" step="0.01" value="<?php echo $row['precio']; ?>" required><br>

        <label>Stock:</label>
        <input type="number" name="stock" value="<?php echo $row['stock']; ?>" required><br>

        <button type="submit">Actualizar</button>
        <button type="button" onclick="window.location.href='index.php'">Cancelar</button>
    </form>
</body>
</html>

<?php $conn->close(); ?>
