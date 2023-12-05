DROP DATABASE IF EXISTS prototipo;
CREATE DATABASE prototipo;
use prototipo;

DROP TABLE IF EXISTS radicacion;

CREATE TABLE radicacion(
    radicado int primary key AUTO_INCREMENT,
    nombre_remitente varchar(45) not null,
    tipo_documento varchar(10) not null,
    cedula_remitente varchar(45),
    telefono varchar(35) not null,
    direccion varchar(80) not null,
    correo varchar(100) not null,
    fecha_radicado date not null,
    medio_recepcion varchar(45) not null,
    asunto varchar(45) not null,
    dependencia varchar(50),
    pais varchar(45) not null,
    departamento varchar(45) not null,
    municipio varchar(45) not null,
    documento varchar(100)
);

DROP TABLE IF EXISTS dependencia;

CREATE TABLE dependencia(
    id_dependencia varchar(10) primary key,
    nombre_dependencia varchar(45),
    telefono varchar(50)
);

DROP TABLE IF EXISTS funcionario;

CREATE TABLE funcionario(
    id_funcionario int primary key AUTO_INCREMENT,
    tipo_documento varchar(10) not null,
    cedula varchar(45)  not null,
    nombre_funcionario varchar(45) not null,
    correo varchar(100) not null,
    contrasena varchar(50) not null,
    telefono varchar(35) not null,
    direccion varchar(80) not null,
    id_dependencia varchar(10),
    foreign key(id_dependencia) references dependencia(id_dependencia)
);



ALTER TABLE radicacion AUTO_INCREMENT = 100;

INSERT INTO dependencia (id_dependencia, nombre_dependencia, telefono) 
VALUES
    ('MDK123', 'Mercadeo', '+1234567890'),
    ('DIR456', 'Dirección', '+9876543210'),
    ('CNT789', 'Contabilidad y Administración', '+1112223333'),
    ('CAA987', 'Coordinación Académica', '+4445556666'),
    ('CBQC654', 'Coordinación de Bienestar y Calidad', '+7778889999'),
    ('Admin', 'Administrador', '8876387');



INSERT INTO funcionario (tipo_documento,cedula, nombre_funcionario, correo, contrasena, telefono, direccion,id_dependencia)
VALUES
  ('cc','1121323', 'Juan Pérez', 'juan.perez@example.com', 'contraseña123', '555-1234', 'Calle 123, Ciudad','CBQC654'),
  ('cc','2234234', 'Flor Ruiz', 'flor@gmail.com', '987', '555-5678', 'Avenida Principal, Pueblo','MDK123'),
  ('cc','3234234', 'María González', 'maria.gonzalez@example.com', 'clave456', '555-5678', 'Avenida Principal, Pueblo','DIR456'),
  ('cc','4234234', 'evert', 'evert@gmail.com', 'admin', '555-5678', 'Avenida Principal, Pueblo','admin'),
  ('cc','5545345', 'Martha González', 'martha.gonzalez@example.com', 'clave123', '555-5678', 'Avenida 34, Pablo','CNT789');
