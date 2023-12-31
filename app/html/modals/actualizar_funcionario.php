
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar funcionario</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="../config/op_actualizar_funcionario.php" method="POST">
            <input type="hidden" name="id_funcionario" value="<?php echo $fila['id_funcionario'] ?>">
            <div class="modal-body">
                <div class="mb-3">
                    <label for="inputGroupSelect02" class="form-label">Tipo documento</label>
                    <select class="form-select" id="inputGroupSelect02" name="tipo">
                        <option selected><?php echo $fila['tipo_documento'] ?></option>
                        <option>CC</option>
                        <option>TI</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Cedula</label>
                    <input type="text" name="cedula" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $fila['cedula'] ?>" required>
                    <div id="emailHelp" class="form-text">Ingrese la cédula.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre funcionario</label>
                    <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $fila['nombre_funcionario'] ?>" required>
                    <div id="emailHelp" class="form-text">Nombre del funcionario.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Teléfono</label>
                    <input type="text" name="telefono" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $fila['telefono'] ?>" required>
                    <div id="emailHelp" class="form-text">Ingrese el teléfono.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Dirección</label>
                    <input type="text" name="direccion" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $fila['direccion'] ?>" required>
                    <div id="emailHelp" class="form-text">Ingrese el dirección.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                    <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $fila['correo'] ?>"  required>
                    <div id="emailHelp" class="form-text">Correo Electrónico.</div>
                </div>
                <label for="dependencia" class="form-label">Dependencia</label>
                <div class="mb-3">
                    <select class="form-select" id="inputGroupSelect02" name="dependencia">
                        <option selected> <?php echo obtenerDependenciaPorCodigo($fila["id_dependencia"]) ?></option>
                        <?php include('../config/select_dependencia.php'); ?>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <div class="input-group">
                        <input type="password" name="contrasena" class="form-control" id="exampleInputPassword1" value="<?php echo $fila['contrasena'] ?>" required>
                        <button type="button" id="showPassword" class="btn btn-outline-secondary">Mostrar</button>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
    </div>
</div>