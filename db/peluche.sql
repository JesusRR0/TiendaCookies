DROP DATABASE IF EXISTS peluche;
DROP USER IF EXISTS dwes;

CREATE DATABASE peluche DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE peluche;

CREATE TABLE producto(
    cod INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(1000) NOT NULL,
    descripcion VARCHAR(1000) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    imagen LONGBLOB NULL
);

INSERT INTO producto(cod, nombre, descripcion, precio)VALUES
(1,'Gro Ollie The Owl - Peluche duermebebés','Innovador CrySensor - se activa automáticamente siempre que el bebé llore
4 sonidos relajantes - latido del corazón, lluvia, ruido blanco estático y nanas de Brahms
Cierre de velcro – se ajusta a la cuna, a los moisés, a las sillitas o a los cochecitos
Los sonidos se reproducen durante 20 minutos','30.51'),
(2,'SuperZings Superzings-41946 Mochila, Letter Print, Multicolor, Talla Única (Cife Spain 41946)','Merender será más divertido que nunca con los personajes de superzings
Color, Multicolor
Cife Spain 41946','24.95'),
(3,'TY – ty95007 – Peluche – Mochila Slush – El perro, 50 cm , color/modelo surtido','Los Beanie Boos más populares para viajar.
Disponible como cartera, bandolera y mochila en diferentes diseños.
Con 2 correas de hombro ajustables y cremallera en la parte trasera.
Edad recomendada: a partir de 3 años.','17.99'),
(4,'Cerdá - Mochila Peluche para Guarderia de Minnie y Mickey - Licencia Oficial Disney','Mochila guarderia con peluche de Minnie Mouse','19.80');


CREATE USER 'dwes' IDENTIFIED BY 'abc123';
GRANT ALL ON peluche.* TO dwes;

