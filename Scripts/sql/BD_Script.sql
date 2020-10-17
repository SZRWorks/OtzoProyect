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
  `id_Producto` INT UNIQUE
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

INSERT INTO Producto (Titulo, Imagen, id_Marca, Descripcion, Precio, id_Categoria) VALUES ("Cola", LOAD_FILE("C:/Users/Gael/Desktop/imagenes/remasterizado.png"), 1, 50, 1);

INSERT INTO mcporproducto (id_Marca, id_Categoria, id_Producto)
	SELECT P.id_Marca, P.id_Categoria, P.id_Producto FROM producto P;

/* COSAS */
SELECT P.Titulo AS "Producto", M.Nombre AS "Marca" FROM producto P JOIN Marca M ON P.id_Marca = M.id_Marca;

SELECT P.Titulo, P.Imagen, P.Precio, P.Descripcion AS "Producto", M.Nombre AS "Marca", C.Nombre AS "Categoria" 
    FROM mcporproducto X JOIN producto P ON X.id_Producto = P.id_Producto 
    JOIN Marca M ON X.id_Marca = M.id_Marca 
    JOIN Categoria C ON X.id_Categoria = C.id_Categoria;