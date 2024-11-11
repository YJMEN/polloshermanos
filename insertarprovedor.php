<?php
include('./conexion.php');

$idtipdoc = $_POST['idtipdoc'];
$numdoc = $_POST['numdoc'];
$idciu = $_POST['idciu'];
$nombres = $_POST['nombres'];
$direccion = $_POST['dir'];
$email = $_POST['email'];
$telefono = $_POST['tel'];

$sql = "CALL addproovedor('$idtipdoc','$numdoc','$idciu','$nombres','$direccion','$email','$telefono');";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Venta</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/styleforms.css">
</head>
<body>

<?php
if ($con->query($sql) === TRUE) {
    echo '<script>
    Swal.fire({
        title: "Hecho!",
        text: "Registro exitoso",
        icon: "success",
        background: "#2980b9",
        color: "#FFC300",
        confirmButtonColor: "#FFC3OO"
        }).then(() => {
        window.location.href = "consultaprovedor.php";
    });
</script>';
    $con->close();
    
} else {
    echo '<script>
    Swal.fire({
        title: "Error",
        text: "Hubo un error al insertar los datos!",
        icon: "error",
        background: "#2980b9", 
        color: "#FFC300", // Texto blanco
        confirmButtonColor: "#FFC300",
        }).then(() => {
        window.location.href = "cuidad.html";
    });
</script>';
    $con->close();
}
?>

</body>
</html>
