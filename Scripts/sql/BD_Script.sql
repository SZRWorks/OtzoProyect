CREATE DATABASE Otzo;
USE Otzo;

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
  `Titulo` varchar(255),
  `id_Marca` INT,
  `Descripcion` varchar(255),
  `Precio` DECIMAL(10, 2),
  `id_Categoria` INT,
  FOREIGN KEY (id_Categoria) REFERENCES Categoria(id_Categoria),
  FOREIGN KEY (id_Marca) REFERENCES Marca(id_Marca)
);

CREATE TABLE `MCporProducto` (
  `id_MCporProducto` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `id_Marca` INT,
  `id_Categoria` INT,
  `id_Producto` INT UNIQUE
);


CREATE TABLE `Usuarios` (
  `id_Usuario` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `Nombre` varchar(55),
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
INSERT INTO marca (Nombre) VALUES ("Microsoft"), ("Sony"), ("Otzo"), ("Sabritas");
INSERT INTO categoria (Nombre) VALUES ("Tecnologia"), ("Comida") , ("Bedidas"), ("Golosinas"), ("Bebidas +18") ,("Medicina") , ("Varios");

INSERT INTO `producto` (`Imagen`, `Titulo`, `id_Marca`, `Descripcion`, `Precio`, `id_Categoria`) VALUES (LOAD_FILE("C:/Users/Gael/Desktop/imagenes/remasterizado.png"), "Refresco Otzo", 3, "Refresco de Cola lleno de sabor y burbujas", 12.50, 3);

INSERT INTO `producto` (`Imagen`, `Titulo`, `id_Marca`, `Descripcion`, `Precio`, `id_Categoria`) 
    VALUES (LOAD_FILE("C:/Users/Gael/Desktop/imagenes/desechables.png"), "Desechables Otzo", 3, "Ahorra con nuestros platos y vasos aprueba de todo", 20, 7), 
           (LOAD_FILE("C:/Users/Gael/Desktop/imagenes/Dulce.png"), "Dulce Otzo", 3, "Antes o despues de la accion", 1.50, 4), (LOAD_FILE("C:/Users/Gael/Desktop/imagenes/papas.png"), "Cheetos Flaming Hot", 4, "De parte de Cheester Cheetos", 13, 2), (LOAD_FILE("C:/Users/Gael/Desktop/imagenes/Limpieza.png"), "Kit de Limpieza Otzo", 3, "Elimina al coronavirus con nuestro Kit!", 150, 7), 
           (LOAD_FILE("C:/Users/Gael/Desktop/imagenes/recargas.png"), "Recargas Otzo", 3, "No te quedes sin saldo", 0, 1), 
           (LOAD_FILE("C:/Users/Gael/Desktop/imagenes/tarjeta de regalo.png"), "Tarjeta de regalo Otzo", 3, "Regala Credito a una persona especial o a ti mismo claro...", 100, 3)

INSERT INTO mcporproducto (id_Marca, id_Categoria, id_Producto)
	SELECT P.id_Marca, P.id_Categoria, P.id_Producto FROM producto P;

/* COSAS */

SELECT P.Titulo, P.Imagen, P.Precio, P.Descripcion AS "Producto", M.Nombre AS "Marca", C.Nombre AS "Categoria" 
    FROM mcporproducto X JOIN producto P ON X.id_Producto = P.id_Producto 
    JOIN Marca M ON X.id_Marca = M.id_Marca 
    JOIN Categoria C ON X.id_Categoria = C.id_Categoria;