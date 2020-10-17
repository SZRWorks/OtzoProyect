CREATE TABLE `Categoria` (
  `id_Categoria` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `Nombre` varchar(30) NOT NULL
);

CREATE TABLE `Marca` (
  `id_Marca` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `Nombre` varchar(30)
);

CREATE TABLE `Producto` (
  `id_Producto` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `Imagen` longblob,
   `Titulo` varchar,
  `id_Marca` INT, 
    FOREIGN KEY (id_Marca) REFERENCES Marca(id_Marca),
  `Descripcion` varchar(255),
  `Precio` DECIMAL(5,3),
  `id_Categoria` INT, 
    FOREIGN KEY (id_Categoria) REFERENCES Categoria(id_Categoria)
);

CREATE TABLE `MCporProducto` (
  `id_MCporProducto` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `id_Marca` INT,
  `id_Categoria` INT,
  `id_Producto` INT
);


CREATE TABLE `Usuarios` (
  `id_Usuario` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `Nombre ` varchar(55),
  `Apellido_P` varchar(55),
  `Apellido_M` varchar(55),
  `Correo` varchar(100) UNIQUE,
  `Domicilio` varchar(100),
  `Telefono` INT(10),
  `Password` varchar(255)
);



CREATE TABLE `Pedidos` (
  `id_Pedido` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `id_Usuario` INT NOT NULL, FOREIGN KEY (id_Usuario) REFERENCES Usuarios(id_Usuario),
  `id_ProductoporMC` INT, FOREIGN KEY (id_ProductoporMC) REFERENCES McporProducto(id_MCporProducto),
  `Cantidad` INT
);

/*POBLAR BD */
INSERT INTO marca (Nombre) VALUES ("Rik-Cola") , ("La Rosa") , ("Microsoft");
INSERT INTO categoria (Nombre) VALUES ("Tecnologia"), ("Comida") , ("Varios");

INSERT INTO Producto (Titulo, Imagen, id_Marca, Descirpcion, Precio, Precio, id_Categoria) VALUES ("Refresco", LOAD_FILE(DIR), "LALALAL", 100, 2);

INSERT INTO mcporproducto (id_Marca, id_Categoria, id_Producto) 
	SELECT e.id_Marca, e.id_Categoria, e.id_Producto FROM producto AS e ORDER BY e.id_Producto ASC;
