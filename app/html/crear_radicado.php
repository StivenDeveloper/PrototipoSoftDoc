<?php session_start(); 
if(!isset($_SESSION['name'])&& !isset($_SESSION['id'])){
    header('Location: ../../index.php');
  
  }
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
                <!-- Formulario para crear un radicado-->
                <div class="container-fluid">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title fw-semibold mb-4">FORMULARIO REGISTRO DE CORRESPONDENCIA</h5>
                                <div class="card">
                                    <div class="card-body">
                                        <form action="../config/op_crear_radicado.php" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="admin">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Nombre Remitente</label>
                                                <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required">
                                                <div id="emailHelp" class="form-text">Ingrese el nombre completo del Remitente.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputGroupSelect02" class="form-label">Tipo documento</label>
                                                <select class="form-select" id="inputGroupSelect02" name="tipo">
                                                    <option selected>Seleccionar...</option>
                                                    <option>CC</option>
                                                    <option>TI</option>
                                                    <option>NIT</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Número de Documento</label>
                                                <input type="number" name="cedula" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                                <div id="emailHelp" class="form-text">Ingrese la cédula.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Teléfono</label>
                                                <input type="text" name="telefono" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                                <div id="emailHelp" class="form-text">Ingrese el teléfono.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Dirección</label>
                                                <input type="text" name="direccion" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                                <div id="emailHelp" class="form-text">Ingrese el dirección.</div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Correo</label>
                                                <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                                <div id="emailHelp" class="form-text">Correo Electrónico.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Fecha radicado</label>
                                                <input type="date" name="fecha" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required min="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>">
                                                <div id="emailHelp" class="form-text">Ingrese la fecha de radicación.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputGroupSelect02" class="form-label">Medio de recepción</label>
                                                <select class="form-select" id="inputGroupSelect02" name="medio">
                                                    <option selected>Seleccionar...</option>
                                                    <option>Físico</option>
                                                    <option>Electrónico</option>
                                                    <option>Fax</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Asunto</label>
                                                <input type="text" name="asunto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                                <div id="emailHelp" class="form-text">Ingrese el asunto.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="inputGroupSelect02">Ingrese la dependendencia compentente.</label>
                                                <select class="form-select" id="inputGroupSelect02" name="dependencia">
                                                    <option selected>Seleccionar...</option>
                                                    <?php include('../config/select_dependencia.php'); ?>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">País</label>
                                                <input type="text" name="pais" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required value="Colombia">
                                                <div id="emailHelp" class="form-text">Ingrese el Pais.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Departamento</label>
                                                <input type="text" name="departamento" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required value="Caldas">
                                                <div id="emailHelp" class="form-text">Ingrese el departemento.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Municipio</label>
                                                <input type="text" name="municipio" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required value="Manizales">
                                                <div id="emailHelp" class="form-text">Ingrese el municipio.</div>
                                            </div>
                                            <label for="documento" class="form-label">Adjuntar documento</label>
                                            <div class="input-group" id="adjuntarDocumento">
                                                <input type="file" name="file" class="form-control" id="documento" aria-describedby="inputGroupFileAddon04" aria-label="Upload" re>
                                                <button class="btn btn-danger" type="button" id="inputGroupFileAddon04" onclick='eliminarAdjunto()'>Eliminar adjunto</button>
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-3">Radicar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin formulario para crear un radicado-->
                <div class="py-6 px-6 text-center">
                    <p class="mb-0 fs-4">Diseñado y desarrollado por <a href="https://softDocument.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">SoftDocument.com</a></p>
                </div>
            </div>
        </div>
    </div>
    <?php include('modulos/script.php') ?>

</body>

</html>