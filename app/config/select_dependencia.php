<?php
session_start();
if(!isset($_SESSION['password'])&& !isset($_SESSION['usuario'])){ header('Location: ../../index.php');}
// Conexión a la base de datos
include('conexion.php');


// Función para obtener una opción la dependencia por código
// function obtenerClientePorID($conexion, $clienteID) {
//     $query = "SELECT * FROM dependencia WHERE id_cliente = '$clienteID'";
//     $resultado = $conexion->query($query);
    
//     if ($resultado->num_rows > 0) {
//         $fila = $resultado->fetch_assoc();
//         return "<option value='" . $fila['id_dependencia'] . "'>" . $fila['nombre_dependencia'] . "</option>";
//     } else {
//         return "No se encontró ninguna dependencia con el código especificado.";
//     }
// }

// if (isset($fila["id_cliente"])) {
//     echo obtenerClientePorID($conexion, $fila["id_cliente"]);
// }

$query_select = "SELECT * FROM dependencia";
$resultado_select = $conexion->query($query_select);


if ($resultado_select->num_rows > 0) {
    while ($fila_select = $resultado_select->fetch_assoc()) {
        
        echo "<option value='" . $fila_select["id_dependencia"] . "'>" . $fila_select["nombre_dependencia"] . "</option>";
    }
} else {
    echo "No hay registros en la base de datos.";
}

// Cerrar la conexión
// $conexion->close();
?>