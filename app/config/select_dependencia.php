<?php
session_start();
if(!isset($_SESSION['password'])&& !isset($_SESSION['usuario'])){ header('Location: ../../index.php');}
// Conexión a la base de datos
include('conexion.php');

// if (isset($fila["id_cliente"])) {
//     echo obtenerClientePorID($conexion, $fila["id_cliente"]);
// }

$query_select = "SELECT * FROM dependencia";
$resultado_select = $conexion->query($query_select);


if ($resultado_select->num_rows > 0) {
    while ($fila_select = $resultado_select->fetch_assoc()) {
        
        echo "<option value='" . $fila_select["id_dependencia"] . "'>" .$fila_select["id_dependencia"].' - '. $fila_select["nombre_dependencia"] . "</option>";
    }
} else {
    echo "No hay registros en la base de datos.";
}





?>