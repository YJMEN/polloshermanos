<?php
include('./conexion.php');

$sql = "SELECT * FROM productos";
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros|productos</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styleregistros.css">
</head>
<body>

<?php
if ($result->num_rows > 0) {
    echo "<h1>Productos registrados</h1>";
    echo "<table>";
    echo "<thead>
            <tr>
                <th>ID_Producto</th>
                <th>Producto</th>
                <th>ID_Provedor</th>
                <th>ID_Tipo_producto</th>
                <th>Precio</th>
                <th>Descripción</th>
            </tr>
          </thead>
          <tbody>";

    // Imprime los resultados en forma de tabla
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['idproducto']}</td>
                <td>{$row['nomproduct']}</td>
                <td>{$row['idproovedor']}</td>
                <td>{$row['idtipprocucto']}</td>
                <td>$ {$row['valorunitario']}</td>
                <td>{$row['descripcion']}</td>
              </tr>";
    }
    echo "</tbody></table>";
    echo "<button onclick=\"window.location.href='productos.html'\">NUEVO INGRESO</button><br>";
    echo "<button onclick=\"window.location.href='registros.html'\">VOLVER A REGISTROS</button>";
    
} else {
    echo "<h2>No se encontraron registros.</h2>";
    echo "<button onclick=\"window.location.href='productos.html'\">INGRESAR PRODUCTO</button><br>";
    echo "<button onclick=\"window.location.href='registros.html'\">VOLVER A REGISTROS</button>";
}

$con->close();
?>

</body>
</html>
