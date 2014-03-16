
CREATE TABLE promocion (
                promocion_id INT AUTO_INCREMENT NOT NULL,
                foto_promocion VARCHAR(300) NOT NULL,
                PRIMARY KEY (promocion_id)
);


CREATE TABLE Categoria (
                categoria_id INT AUTO_INCREMENT NOT NULL,
                nombre_categoria VARCHAR(300) NOT NULL,
                PRIMARY KEY (categoria_id)
);


CREATE TABLE imagen_categoria (
                imagen_categoria_id INT AUTO_INCREMENT NOT NULL,
                categoria_id INT NOT NULL,
                PRIMARY KEY (imagen_categoria_id, categoria_id)
);


CREATE TABLE Producto (
                producto_id INT AUTO_INCREMENT NOT NULL,
                nombre_producto VARCHAR(300) NOT NULL,
                categoria_id INT NOT NULL,
                ingredientes VARCHAR(300) NOT NULL,
                precio_producto INT NOT NULL,
                PRIMARY KEY (producto_id)
);


CREATE TABLE Administrador (
                administrador_id INT AUTO_INCREMENT NOT NULL,
                email VARCHAR(300) NOT NULL,
                password VARCHAR(500) NOT NULL,
                PRIMARY KEY (administrador_id)
);


ALTER TABLE Producto ADD CONSTRAINT categoria_producto_fk
FOREIGN KEY (categoria_id)
REFERENCES Categoria (categoria_id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE imagen_categoria ADD CONSTRAINT categoria_imagen_categoria_fk
FOREIGN KEY (categoria_id)
REFERENCES Categoria (categoria_id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;
