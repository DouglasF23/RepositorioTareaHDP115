
CREATE TABLE IF NOT EXISTS `#__usuariosgp15`(
  `id_usuario` VARCHAR(45) NOT NULL,
  `contrasena` VARCHAR(45) NOT NULL,
  `nombres` VARCHAR(45) NOT NULL,
  `apellidos` VARCHAR(45) NOT NULL,
   
  PRIMARY KEY (`id_usuario`)
  );
  

INSERT INTO `#__usuariosgp15`(`id_usuario`,`contrasena`,`nombres`,`apellidos`)
VALUES('grupo15','1234','Grupo15', 'Grupo15');


CREATE TABLE IF NOT EXISTS `#__organismosgp15`(
  `id_organismo` VARCHAR(100) NOT NULL,
  `telefono` VARCHAR(45) NOT NULL,
  `pais` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
   
  PRIMARY KEY (`id_organismo`)
  );
  
INSERT INTO `#__organismosgp15`(`id_organismo`,`telefono`,`pais`,`correo`)
VALUES('JICA','2565-8700','Japon', 'jicaes-recep@jica.go.jp');

INSERT INTO `#__organismosgp15`(`id_organismo`,`telefono`,`pais`,`correo`)
VALUES('GIZ','2121-5100','Alemania', 'giz-es-elsalvador@giz.de');

INSERT INTO `#__organismosgp15`(`id_organismo`,`telefono`,`pais`,`correo`)
VALUES('KOiKA','22252-6133','Corea', 'kes@koika.go.kz');

INSERT INTO `#__organismosgp15`(`id_organismo`,`telefono`,`pais`,`correo`)
VALUES('USAID','2121-5100','USA', 'usaid@usaid.de');

INSERT INTO `#__organismosgp15`(`id_organismo`,`telefono`,`pais`,`correo`)
VALUES('BID','2345-4567','Internacional', 'bidesv@adb.org.');




CREATE TABLE IF NOT EXISTS `#__inversiongp15`(
  `id_inversion` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(45) NOT NULL,
  `ano` VARCHAR(45) NOT NULL,
  `organismo_id` VARCHAR(100)NOT NULL,
  `total` FLOAT NOT NULL,
  
 
PRIMARY KEY (`id_inversion`)
  );
  
INSERT INTO `#__inversiongp15`(`id_inversion`,`descripcion`,`ano`,`organismo_id`,`total`)
VALUES(1,'Equipo Ministerio de Prev','2013', 'JICA',15000);

INSERT INTO `#__inversiongp15`(`id_inversion`,`descripcion`,`ano`,`organismo_id`,`total`)
VALUES(2,'Equipo Ministerio de Prev','2014', 'USAID',10000);

INSERT INTO `#__inversiongp15`(`id_inversion`,`descripcion`,`ano`,`organismo_id`,`total`)
VALUES(3,'Equipo Ministerio de Prev','2014', 'BID',149856);

INSERT INTO `#__inversiongp15`(`id_inversion`,`descripcion`,`ano`,`organismo_id`,`total`)
VALUES(4,'Equipo Ministerio de Prev','2013', 'USAID',25841.29);


