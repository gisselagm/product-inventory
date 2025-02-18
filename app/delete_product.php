<?php
include 'db_config.php';

$id = $_GET["id"];
$sql = "DELETE FROM productos WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
