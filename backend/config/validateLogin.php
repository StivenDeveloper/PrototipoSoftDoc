<?php
include ("conexion.php");

//Validamos y Capturar los datos enviados por el metodo post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correo = $_POST['correo'];
    $password = $_POST['contrasena'];

    $query = "SELECT * FROM funcionario WHERE correo = '$correo' AND contrasena = '$password'";
    $validate = $conexion->query($query);

    if($validate->num_rows > 0){
        $row = $validate->fetch_assoc();
        session_start();
        $_SESSION['validate'] = TRUE;
        $_SESSION['name'] = $row['nombre_funcionario'];
        $_SESSION['id'] = $row['cedula'];
        echo "<script>
            alert('BIENVENIDO ". $row['nombre_funcionario'] ."');
            window.location = '../html/radicado.php';
        </script>";
    }else{
        echo "<script>
            alert('USUARIO O CONTRASEÑA INCORRECTAS');
            window.location = '../login.php';
        </script>";
        session_destroy();
    }
}