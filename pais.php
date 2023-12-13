<?php
// Conexión a la base de datos
include_once ("app/config/conexion.php");
// Verificar la conexión
if ($conexion->connect_error){
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener la lista de países
$query_countries = "SELECT Code, Name FROM country";
$result_countries = $conexion->query($query_countries);

// Obtener las provincias del primer país por defecto
$default_country = $result_countries->fetch_assoc();
$default_country_code = $default_country['Code'];
$query_provinces = "SELECT Name FROM province WHERE Country = '$default_country_code'";
$result_provinces = $conexion->query($query_provinces);

// Obtener las ciudades de la primera provincia por defecto
$default_province = $result_provinces->fetch_assoc();
$default_province_name = $default_province['Name'];
$query_cities = "SELECT Name FROM city WHERE Province = '$default_province_name'";
$result_cities = $conexion->query($query_cities);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selección de País, Provincia y Ciudad</title>
</head>
<body>
    <form action="" method="post">
        <label for="country">País:</label>
        <select name="country" id="country">
            <?php
            // Mostrar la lista de países
            while ($row = $result_countries->fetch_assoc()) {
                echo "<option value='{$row['Code']}'>{$row['Name']}</option>";
            }
            ?>
        </select>

        <label for="province">Provincia:</label>
        <select name="province" id="province">
            <?php
            // Mostrar la lista de provincias del primer país por defecto
            while ($row = $result_provinces->fetch_assoc()) {
                echo "<option>{$row['Name']}</option>";
            }
            ?>
        </select>

        <label for="city">Ciudad:</label>
        <select name="city" id="city">
            <?php
            // Mostrar la lista de ciudades de la primera provincia por defecto
            while ($row = $result_cities->fetch_assoc()) {
                echo "<option>{$row['Name']}</option>";
            }
            ?>
        </select>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php
// Cerrar la conexión a la base de datos al finalizar
$conexion->close();
?>
