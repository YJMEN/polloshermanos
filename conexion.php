
<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";
$bdmpmparts = "pollos";

$con = new mysqli($servidor, $usuario, $clave, $bdmpmparts);

if ($con->connect_error) {
    die("Error de conexión: " . $con->connect_error);
}
?>
