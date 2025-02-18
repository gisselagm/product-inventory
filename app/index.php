<?php
include 'db_config.php';

$sql = "SELECT * FROM productos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario de Productos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Inventario de Productos</h1>
    
    <button onclick="window.location.href='add_product.php'">Añadir Producto</button>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio (€)</th>
            <th>Stock</th>
            <th>Acciones</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["nombre"]; ?></td>
                <td><?php echo $row["precio"]; ?></td>
                <td><?php echo $row["stock"]; ?></td>
                <td>
                    <a href="edit_product.php?id=<?php echo $row['id']; ?>">✏️ Editar</a> |
                    <a href="delete_product.php?id=<?php echo $row['id']; ?>" onclick="return confirm('¿Estás seguro de eliminar este producto?');">❌ Eliminar</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
