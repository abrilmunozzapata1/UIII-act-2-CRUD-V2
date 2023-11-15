CREATE DATABASE pandoraa;

 use pandoraa;

CREATE TABLE producto(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(50),
  categoria VARCHAR(50),
  precio float(10,2),
  descripcion VARCHAR(1000),
  material VARCHAR(50),
  talla float(10,2),
  piedra VARCHAR(50)
);

DESCRIBE producto;