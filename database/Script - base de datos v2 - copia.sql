
USE id11393144_dbvet;

DROP TABLE IF EXISTS usuario;

CREATE TABLE IF NOT EXISTS usuario (
  idUsuario INT NOT NULL AUTO_INCREMENT, 
  nombre VARCHAR(45) NOT NULL, 
  apellidos VARCHAR(45) NOT NULL,
  genero VARCHAR(10) NOT NULL,
  fNacimiento VARCHAR(45) NOT NULL,
  telefono INT NOT NULL, 
  email VARCHAR(45) NOT NULL,
  password VARCHAR(32) NOT NULL,
  privilegio INT NOT NULL,
  PRIMARY KEY (idUsuario));

DROP TABLE IF EXISTS cita;

CREATE TABLE IF NOT EXISTS cita (
  idCita INT NOT NULL AUTO_INCREMENT,
  usuario_idUsuario INT NOT NULL,
  nombreCliente VARCHAR(45) NOT NULL,
  apellidosCliente VARCHAR(45) NOT NULL,
  telefonoCliente INT NOT NULL,
  nomMascota VARCHAR(45) NOT NULL,
  razaMascota VARCHAR(45) NOT NULL,
  generoMascota VARCHAR(45) NOT NULL,
  edadMascota VARCHAR(45) NOT NULL,
  pesoMascota VARCHAR(45) NOT NULL,
  padecimiento VARCHAR(250) NOT NULL,
  fechaCita DATE NOT NULL,
  horaCita TIME NOT NULL,
  PRIMARY KEY (idCita),
  FOREIGN KEY (usuario_idUsuario) REFERENCES usuario (idUsuario)
  ON DELETE CASCADE ON UPDATE CASCADE);

DROP TABLE IF EXISTS producto; 

CREATE TABLE IF NOT EXISTS producto (
  idProducto INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(45) NOT NULL,
  imagen LONGBLOB NOT NULL,
  precio DECIMAL NOT NULL,
  descripcion VARCHAR(45) NOT NULL,
  PRIMARY KEY (idProducto));

DROP TABLE IF EXISTS pedido;

CREATE TABLE IF NOT EXISTS pedido (
  idPedido VARCHAR(45) NOT NULL,
  usuario_idUsuario INT NOT NULL,
  producto_idProducto INT NOT NULL,
  fPedido VARCHAR(45) NOT NULL,
  PRIMARY KEY (idPedido),
  FOREIGN KEY (usuario_idUsuario)  REFERENCES usuario (idUsuario)
  ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (producto_idProducto) REFERENCES producto (idProducto)
  ON DELETE CASCADE ON UPDATE CASCADE);

DROP TABLE IF EXISTS opinion;

CREATE TABLE IF NOT EXISTS opinion (
  idOpinion INT NOT NULL AUTO_INCREMENT,
  usuario_idUsuario INT NOT NULL,
  asunto VARCHAR(45) NOT NULL,
  mensaje VARCHAR(300) NOT NULL,
  fecha TIMESTAMP NOT NULL,
  PRIMARY KEY (idOpinion),
  FOREIGN KEY (usuario_idUsuario) REFERENCES usuario (idUsuario)
  ON DELETE CASCADE ON UPDATE CASCADE);