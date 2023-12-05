<?php 
include_once ("conexion.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $conexion->real_escape_string($_POST['nombre']);
    $tipo = $conexion->real_escape_string($_POST['tipo']);
    $cedula = $conexion->real_escape_string($_POST['cedula']);
    $telefono = $conexion->real_escape_string($_POST['telefono']);
    $direccion = $conexion->real_escape_string($_POST['direccion']);
    $correo = $conexion->real_escape_string($_POST['correo']);
    $fecha = $conexion->real_escape_string($_POST['fecha']);
    $medio = $conexion->real_escape_string($_POST['medio']);
    $asunto = $conexion->real_escape_string($_POST['asunto']);
    $dependencia = $conexion->real_escape_string($_POST['dependencia']);
    $pais = $conexion->real_escape_string($_POST['pais']);
    $departamento = $conexion->real_escape_string($_POST['departamento']);
    $municipio = $conexion->real_escape_string($_POST['municipio']);
    
    //Verificación del archivo
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == UPLOAD_ERR_OK) {
        $nombre_archivo = $_FILES["file"]["name"];
        $ruta_temporal = $_FILES["file"]["tmp_name"];

        // Mover el archivo a una ubicación permanente en tu servidor
        $ruta_destino = "../document/" . $nombre_archivo;
        move_uploaded_file($ruta_temporal, $ruta_destino);
        $ruta_final = "app/document/" . $nombre_archivo;

        echo "Archivo subido con éxito.";
    } else {
        echo "Error al subir el archivo.";
    }
    //Creamos la query
    $query = "INSERT INTO radicacion(
    nombre_remitente,
    tipo_documento,
    cedula_remitente,
    telefono,
    direccion,
    correo,
    fecha_radicado,
    medio_recepcion,
    asunto,
    dependencia,
    pais,
    departamento,
    municipio,
    documento
    )
    VALUES(
        '$nombre',
        '$tipo',
        '$cedula',
        '$telefono',
        '$direccion',
        '$correo',
        '$fecha',
        '$medio',
        '$asunto',
        '$dependencia',
        '$pais',
        '$departamento',
        '$municipio',
        '$ruta_final'

    )";
//Inicializamos la query
if($conexion->query($query)){
    echo "Radicado creado con exito";
    echo "<script>
            alert('RADICADO CREADO CORRECTAMENTE');
            window.location = '../html/radicado.php';
        </script>";
    exit();
}else{
    echo "Error al crear al Radicado: ". $conexion->error;
}
//Cierre de la conexion
$conexion->close();
}
?>