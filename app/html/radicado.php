<?php
include_once('../config/conexion.php');
$query = "SELECT * FROM radicacion";
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
        <!-- radicados.php visualizar los radicados -->
        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="table-responsive p-3">
              <h3 class="text-left">REGISTRO DE CORRESPONDENCIA RECIBIDA</h3>
              <table class="table align-items-center table-flush" id="dataTable">
                <thead>
                  <td>Documento</td>
                  <td>Radicado</td>
                  <td>Cédula</td>
                  <td>Teléfono</td>
                  <td>Dirección</td>
                  <td>Correo</td>
                  <td>Fecha Radicado</td>
                  <td>Medio Recepción</td>
                  <td>Asunto</td>
                  <td>Dependencia</td>
                  <td>Pais</td>
                  <td>Departamento</td>
                  <td>Municipio</td>
                  <td>Actualizar</td>
                  <td>Eliminar</td>
                  <td></td>

                </thead>
                <tbody>
                  <?php
                  if ($resultado->num_rows > 0) {
                    while ($fila = $resultado->fetch_assoc()) {
                      echo "<tr>";
                      echo "<td>" . $fila["documento"] . "</td>";
                      echo "<td>" . $fila["radicado"] . "</td>";
                      echo "<td>" . $fila["cedula_remitente"] . "</td>";
                      echo "<td>" . $fila["nombre_remitente"] . "</td>";
                      echo "<td>" . $fila["telefono"] . "</td>";
                      echo "<td>" . $fila["correo"] . "</td>";
                      echo "<td>" . $fila["fecha_radicado"] . "</td>";
                      echo "<td>" . $fila["medio_recepción"] . "</td>";
                      echo "<td>" . $fila["asunto"] . "</td>";
                      echo "<td>" . $fila["dependencia"] . "</td>";
                      echo "<td>" . $fila["pais"] . "</td>";
                      echo "<td>" . $fila["departamento"] . "</td>";
                      echo "<td>" . $fila["municipio"] . "</td>";
                      echo "<td><a href='../config/op_eliminar_radicado.php?id=" . $fila["radicado"] . "'><i class='bi bi-pencil-square'></i></a></td>";
                      echo "<td><a href='../config/op_actulizar_radicado.php?id=" . $fila["radicado"] . "'><i class='bi bi-trash-fill'></i></a></td>";
                      echo "</tr>";
                    }
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- FIN radicados.php visualizar los radicados -->
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">AdminMart.com</a></p>
        </div>
      </div>
    </div>
  </div>
  <?php include('modulos/script.php') ?>
</body>

</html>

<?php
// Cerrar la conexión
$conexion->close();
?>