CREATE TABLE `usuarios` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `email` varchar(255) UNIQUE NOT NULL,
  `clave` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `rol` varchar(10) NOT NULL
);

CREATE TABLE `pqr` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `tipo` varchar(255) NOT NULL,
  `texto` text(500),
  `respuesta` text(500)
);

CREATE TABLE `catalogo` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
);
