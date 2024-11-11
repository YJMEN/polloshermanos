<?php
include('./conexion.php');

$sql = "SELECT * FROM proovedores";
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos|Provedor</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styleregistros.css">
</head>
<body>

<?php
if ($result->num_rows > 0) {
    echo "<h1>Datos de Provedores</h1>";
    echo "<table>";
    echo "<thead>
            <tr>
                <th>ID_Provedor</th>
                <th>ID_tipo_documento</th>
                <th>Documento N°</th>
                <th>ID_ciudads</th>
                <th>Nombre</th>
                <th>Domicilio</th>
                <th>Email</th>
                <th>Telefono</th>
            </tr>
          </thead>
          <tbody>";

    // Imprime los resultados en forma de tabla
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['idproovedor']}</td>
                <td>{$row['idtipdocument']}</td>
                <td>{$row['numdocumento']}</td>
                <td>{$row['idciudad']}</td>
                <td>{$row['nombre']}</td>
                <td>{$row['direccion']}</td>
                <td>{$row['email']}</td>
                <td>{$row['telefono']}</td>
              </tr>";
    }
    echo "</tbody></table>";
    echo "<button onclick=\"window.location.href='provedores.html'\">NUEVO INGRESO</button><br>";
    echo "<button onclick=\"window.location.href='registros.html'\">VOLVER A REGISTROS</button>";
    
} else {
    echo "<h2>No se encontraron registros.</h2>";
    echo "<button onclick=\"window.location.href='provedores.html'\">INGRESAR PROVEDOR</button><br>";
    echo "<button onclick=\"window.location.href='registros.html'\">VOLVER A REGISTROS</button>";
}

$con->close();
?>

</body>
</html>
