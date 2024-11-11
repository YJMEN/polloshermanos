<?php
include('./conexion.php');

$sql = "SELECT * FROM ventas";
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros de Ventas</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styleregistros.css">
</head>
<body>

<?php
if ($result->num_rows > 0) {
    echo "<h1>Registros de Ventas</h1>";
    echo "<table>";
    echo "<thead>
            <tr>
                <th>ID Producto</th>
                <th>Valor</th>
                <th>Cantidad</th>
                <th>IVA</th>
                <th>Subtotal</th>
                <th>Total</th>
                <th>Cliente</th>
                <th>Vendedor</th>
            </tr>
          </thead>
          <tbody>";

    // Imprime los resultados en forma de tabla
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['idproducto']}</td>
                <td>$ {$row['vunitario']}</td>
                <td>{$row['cantidad']}</td>
                <td>$ {$row['iva']}</td>
                <td>$ {$row['subtotal']}</td>
                <td>$ {$row['total']}</td>
                <td>{$row['idcliente']}</td>
                <td>{$row['idvendedor']}</td>
              </tr>";
    }
    echo "</tbody></table>";
    echo "<button onclick=\"window.location.href='ventas.html'\">NUEVO INGRESO</button><br>";
    echo "<button onclick=\"window.location.href='registros.html'\">VOLVER A REGISTROS</button>";
    
} else {
    echo "<h2>No se encontraron registros.</h2>";
    echo "<button onclick=\"window.location.href='ventas.html'\">INGRESAR VENTA</button><br>";
    echo "<button onclick=\"window.location.href='registros.html'\">VOLVER A REGISTROS</button>";
}

$con->close();
?>

</body>
</html>
