DROP DATABASE IF EXISTS prototipo;
CREATE DATABASE prototipo;
use prototipo;

DROP TABLE IF EXISTS radicacion;

CREATE TABLE radicacion(
    radicado int primary key AUTO_INCREMENT,
    nombre_remitente varchar(45) not null,
    cedula_remitente varchar(45),
    telefono varchar(35) not null,
    direccion varchar(80) not null,
    correo varchar(100) not null,
    fecha_radicado date not null,
    medio_recepcion varchar(45) not null,
    asunto varchar(45) not null,
    dependecia varchar(50),
    pais varchar(45) not null,
    departamento varchar(45) not null,
    municipio varchar(45) not null,
    documento varchar(100)
);


CREATE TABLE funcionario(
    cedula int primary key not null,
    nombre_funcionario varchar(45) not null,
    correo varchar(100) not null,
    contrasena varchar(50) not null,
    telefono varchar(35) not null,
    direccion varchar(80) not null
);

ALTER TABLE radicacion AUTO_INCREMENT = 100;

INSERT INTO funcionario (cedula, nombre_funcionario, correo, contrasena, telefono, direccion)
VALUES
  (1, 'Juan Pérez', 'juan.perez@example.com', 'contraseña123', '555-1234', 'Calle 123, Ciudad'),
  (2, 'María González', 'maria.gonzalez@example.com', 'clave456', '555-5678', 'Avenida Principal, Pueblo');
