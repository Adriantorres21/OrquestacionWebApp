CREATE SCHEMA IF NOT EXISTS mascotas;
USE mascotas;

DROP TABLE IF EXISTS mascotas;
CREATE TABLE mascotas (
  id int AUTO_INCREMENT PRIMARY KEY,
  nombre varchar(50),
  anios int,
  raza varchar(50),
  sexo varchar(20),
  dueno varchar(50)
);

INSERT INTO mascotas(id,nombre,anios,raza,sexo,dueno) 
            VALUES (1, 'Tobi', 10, 'Chihuaha', 'Macho', 'Adrian Torres');