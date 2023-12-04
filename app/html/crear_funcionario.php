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
                <!-- radicados.php visualizar los funcionarios -->
                <div class="container-fluid">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title fw-semibold mb-4">REGISTRO DE FUNCIONARIOS - SOPORTE HISTORIAS LABORALES</h5>
                                <div class="card">
                                    <div class="card-body">
                                        <form action="../config/op_crear_funcionario.php" method="POST">
                                            <input type="hidden" name="admin">
                                            <div class="mb-3">
                                                <label for="inputGroupSelect02" class="form-label">Tipo documento</label>
                                                <select class="form-select" id="inputGroupSelect02" name="tipo">
                                                    <option selected>Seleccionar...</option>
                                                    <option>CC</option>
                                                    <option>TI</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Cedula</label>
                                                <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
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
                                            <div class="input-group mb-3">
                                                <select class="form-select" id="inputGroupSelect02" name="dependencia">
                                                    <option selected>Seleccionar...</option>
                                                    <?php include('../config/select_dependencia.php'); ?>
                                                </select>
                                                <label class="input-group-text" for="inputGroupSelect02">Ingrese la dependendencia donde labora.</label>
                                            </div>
                                            <div class="mb-4">
                                                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                                                <div class="input-group">
                                                    <input type="password" name="contrasena" class="form-control" id="exampleInputPassword1" required>
                                                    <button type="button" id="showPassword" class="btn btn-outline-secondary">Mostrar</button>
                                                </div>
                                            </div>
                                            <div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Registrar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin formulario para crear los funcionarios-->
                <div class="py-6 px-6 text-center">
                    <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">AdminMart.com</a></p>
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

</html>