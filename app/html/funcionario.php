<?php
include_once('../config/conexion.php');
$query = "SELECT * FROM funcionario";
$resultado = $conexion->query($query);

?>


<!doctype html>
<html lang="en">

<head>
    <?php include('modulos/head.php') ?>
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <?php include('modulos/sidebar.php') ?>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <?php include('modulos/header.php') ?>
            <!--  Header End -->
            <div class="container-fluid">
                <!-- funcioario.php visualizar los funcionarios -->
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="table-responsive p-3">
                            <h3 class="text-left">REGISTRO DE CORRESPONDENCIA RECIBIDA</h3>
                            <table class="table align-items-center table-flush" id="dataTable">
                                <thead>
                                    <td>Tipo documento</td>
                                    <td>Cédula</td>
                                    <td>Nombre</td>
                                    <td>Teléfono</td>
                                    <td>Dirección</td>
                                    <td>Correo</td>
                                    <td>Dependencia</td>
                                    <td>Actualizar</td>
                                    <td>Eliminar</td>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($resultado->num_rows > 0) {
                                        while ($fila = $resultado->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>" . $fila["tipo_documento"] . "</td>";
                                            echo "<td>" . $fila["cedula"] . "</td>";
                                            echo "<td>" . $fila["nombre_funcionario"] . "</td>";
                                            echo "<td>" . $fila["telefono"] . "</td>";
                                            echo "<td>" . $fila["direccion"] . "</td>";
                                            echo "<td>" . $fila["correo"] . "</td>";
                                            echo "<td>" . obtenerDependenciaPorCodigo($conexion,$fila['id_dependencia']). "</td>";
                                            echo "<td><a href='../config/op_actualizar_funcionario.php'><i class='ti ti-edit'></i></a></td>";
                                            echo "<td><a href='../config/op_eliminar_funcionario.php'><i class='ti ti-backspace'></i></a></td>";
                                            echo "</tr>";
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- funcioario.php visualizar los funcionarios -->
                <div class="py-6 px-6 text-center">
                    <p class="mb-0 fs-4">Design and Developed by wei,dir and evert <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">AdminMart.com</a></p>
                </div>
            </div>
        </div>
    </div>
    <?php include('modulos/script.php') ?>
    <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/dashboard.js"></script> -->
</body>


<?php
function obtenerDependenciaPorCodigo($conexion, $ID)
{
    $query = "SELECT * FROM dependencia WHERE id_dependencia = '$ID'";
    $resultado = $conexion->query($query);

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        return $fila["nombre_dependencia"];
    } else {
        return "No se encontró ninguna dependencia con el código especificado.";
    }
} 
?>

</html>