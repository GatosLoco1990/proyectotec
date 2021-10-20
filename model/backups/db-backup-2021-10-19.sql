

CREATE TABLE `categoria` (
  `id_categoria` int(10) NOT NULL AUTO_INCREMENT,
  `desc_categoria` varchar(45) NOT NULL,
  `ruta_imagen` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO categoria VALUES("1","Audio","archivos/imagenes/categorias/altavoz-de-audio.png","altavoz-de-audio.png");
INSERT INTO categoria VALUES("2","Celulares","archivos/imagenes/categorias/celular.png","celular.png");
INSERT INTO categoria VALUES("3","Computadores","archivos/imagenes/categorias/ordenador-personal.png","ordenador-personal.png");
INSERT INTO categoria VALUES("4","Electrodomesticos","archivos/imagenes/categorias/electrodomesticos.png","electrodomesticos.png");
INSERT INTO categoria VALUES("5","Videojuegos","archivos/imagenes/categorias/videojuegos.png","videojuegos.png");
INSERT INTO categoria VALUES("6","Accesorios","archivos/imagenes/categorias/raton-de-computadora.png","raton-de-computadora.png");
INSERT INTO categoria VALUES("7","Sillas","archivos/imagenes/categorias/Silla.png","Silla.png");
INSERT INTO categoria VALUES("8","Televisor","archivos/imagenes/categorias/televisor.png","televisor.png");





CREATE TABLE `ciudad` (
  `id_ciudad` int(10) NOT NULL AUTO_INCREMENT,
  `desc_ciudad` varchar(45) NOT NULL,
  PRIMARY KEY (`id_ciudad`),
  UNIQUE KEY `id_ciudad_UNIQUE` (`id_ciudad`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO ciudad VALUES("1","Ragonvalia");
INSERT INTO ciudad VALUES("2","Cúcuta");
INSERT INTO ciudad VALUES("3","Medellín");
INSERT INTO ciudad VALUES("4","Pamplona");
INSERT INTO ciudad VALUES("5","N/A");





CREATE TABLE `cliente` (
  `id_cliente` int(10) NOT NULL AUTO_INCREMENT,
  `nom_cliente` varchar(45) NOT NULL,
  `ape_cliente` varchar(45) NOT NULL,
  `tipodoc` int(11) NOT NULL,
  `doc_cliente` varchar(25) NOT NULL,
  `tel_cliente` varchar(20) NOT NULL,
  `sexo_cliente` int(11) NOT NULL,
  `correo_cliente` varchar(45) NOT NULL,
  `fecha_nac_cliente` date NOT NULL,
  `fecha_cliente` date NOT NULL,
  `dir_cliente` varchar(100) NOT NULL,
  `id_ciudad` int(11) NOT NULL,
  `rol` int(11) NOT NULL,
  PRIMARY KEY (`id_cliente`),
  KEY `sexo_cliente` (`sexo_cliente`),
  KEY `tipodoc` (`tipodoc`),
  KEY `id_ciudad` (`id_ciudad`),
  KEY `rol` (`rol`),
  CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`sexo_cliente`) REFERENCES `sexo` (`id`),
  CONSTRAINT `cliente_ibfk_2` FOREIGN KEY (`tipodoc`) REFERENCES `tipodoc` (`id`),
  CONSTRAINT `cliente_ibfk_3` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudad` (`id_ciudad`) ON UPDATE CASCADE,
  CONSTRAINT `cliente_ibfk_4` FOREIGN KEY (`rol`) REFERENCES `rol` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

INSERT INTO cliente VALUES("8","Marta Eugenia","Santafe Pinto","1","60255264","3003424123","1","mareusapi@hotmail.com","1965-12-03","2021-10-10","Conjunto r T4 Apto 204","3","3");
INSERT INTO cliente VALUES("13","Pancho","Villa","2","1091354158","3108148484","2","pancho@hotmail.com","2021-12-12","2021-10-17","AAA","4","3");





CREATE TABLE `detalle` (
  `id_detalle` int(10) NOT NULL AUTO_INCREMENT,
  `id_producto` int(10) NOT NULL,
  `id_factura` int(10) NOT NULL,
  `cantidad` int(3) NOT NULL,
  `total` int(10) NOT NULL,
  PRIMARY KEY (`id_detalle`),
  KEY `fk_detalle_factura1_idx` (`id_factura`),
  KEY `fk_detalle_producto1_idx` (`id_producto`),
  CONSTRAINT `fk_detalle_factura1` FOREIGN KEY (`id_factura`) REFERENCES `factura` (`id_fact`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_detalle_producto1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;






CREATE TABLE `empleado` (
  `id_emp` int(11) NOT NULL AUTO_INCREMENT,
  `ape_emp` varchar(45) NOT NULL,
  `nom_emp` varchar(45) NOT NULL,
  `doc_emp` varchar(45) NOT NULL,
  `fecha_nac_emp` date NOT NULL,
  `telefono_emp` varchar(20) NOT NULL,
  `dir_emp` varchar(45) NOT NULL,
  `mail_emp` varchar(45) NOT NULL,
  `fecha` date NOT NULL,
  `id_sucursal` int(10) NOT NULL,
  `ruta_imagen` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `rol` int(11) NOT NULL,
  PRIMARY KEY (`id_emp`),
  KEY `fk_empleado_sucursal_idx` (`id_sucursal`),
  KEY `rol` (`rol`),
  CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `rol` (`id`),
  CONSTRAINT `fk_empleado_sucursal` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursal` (`id_sucursal`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

INSERT INTO empleado VALUES("8","Gandica Velasco","Jesús Ricardo","1091354158","2004-12-05","3184827442","Conjunto residencia Portachuelo","ricardogandica@hotmail.com","2021-10-10","2","archivos/imagenes/empleados/fotico.jpg","fotico.jpg","1");
INSERT INTO empleado VALUES("9","Velasco","Katherine","1092334828","1985-08-05","3162082139","Garciaherreros","katherinevs86@gmail.com","2021-10-13","2","archivos/imagenes/empleados/Menor.jpg","Menor.jpg","2");
INSERT INTO empleado VALUES("10","INTERNET","INTERNET","1","2021-10-18","1","N/A","N/A","2021-10-18","3","N/A","N/A","2");
INSERT INTO empleado VALUES("12","Jaimes","Sebastian","1091634182","2003-03-12","3003251236","Conjunto residencia Portachuelo","jaimes@gmail.com","2021-10-18","2","archivos/imagenes/empleados/chamoy.jpg","chamoy.jpg","2");





CREATE TABLE `factura` (
  `id_fact` int(11) NOT NULL AUTO_INCREMENT,
  `id_emp` int(10) NOT NULL,
  `id_modopago` int(10) NOT NULL,
  `id_cliente` int(10) NOT NULL,
  `fecha_pago` datetime NOT NULL,
  `total_pagar` int(30) NOT NULL,
  PRIMARY KEY (`id_fact`),
  KEY `fk_factura_modopago1_idx` (`id_modopago`),
  KEY `fk_factura_empleado1_idx` (`id_emp`),
  KEY `fk_factura_cilente1_idx` (`id_cliente`),
  CONSTRAINT `fk_factura_cilente1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_factura_empleado1` FOREIGN KEY (`id_emp`) REFERENCES `empleado` (`id_emp`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_factura_modopago1` FOREIGN KEY (`id_modopago`) REFERENCES `modopago` (`id_modopago`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO factura VALUES("1","9","1","8","0000-00-00 00:00:00","0");
INSERT INTO factura VALUES("2","9","1","8","0000-00-00 00:00:00","100");
INSERT INTO factura VALUES("3","9","2","13","0000-00-00 00:00:00","100");
INSERT INTO factura VALUES("4","9","2","13","0000-00-00 00:00:00","100");
INSERT INTO factura VALUES("5","9","2","13","0000-00-00 00:00:00","100");
INSERT INTO factura VALUES("7","9","1","13","0000-00-00 00:00:00","100");
INSERT INTO factura VALUES("8","9","1","13","0000-00-00 00:00:00","100");





CREATE TABLE `modopago` (
  `id_modopago` int(11) NOT NULL AUTO_INCREMENT,
  `metodo` varchar(45) NOT NULL,
  PRIMARY KEY (`id_modopago`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO modopago VALUES("1","Credito");
INSERT INTO modopago VALUES("2","Debito");
INSERT INTO modopago VALUES("3","Efectivo");





CREATE TABLE `producto` (
  `id_producto` int(10) NOT NULL AUTO_INCREMENT,
  `cod_producto` varchar(20) NOT NULL,
  `nom_producto` varchar(45) NOT NULL,
  `desc_producto` text NOT NULL,
  `precio` int(10) NOT NULL,
  `stock` int(11) NOT NULL,
  `marca` varchar(45) NOT NULL,
  `id_categoria` int(10) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `ruta_imagen` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `fk_producto_categoria1_idx` (`id_categoria`),
  CONSTRAINT `fk_producto_categoria1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

INSERT INTO producto VALUES("6","tuki","Y7 2019","Celular Huawei","600000","30","Huawei","2","2021-10-10","archivos/imagenes/productos/Biblia satanica.jpg","Biblia satanica.jpg");
INSERT INTO producto VALUES("13","skjdk","BB","BB","190000","14","Biblia","4","2021-10-22","archivos/imagenes/productos/Biblia satanica.jpg","Biblia satanica.jpg");
INSERT INTO producto VALUES("14","EEF","EF","EF","12","12","ss","6","2021-10-17","archivos/imagenes/productos/WTD.jpg","WTD.jpg");
INSERT INTO producto VALUES("15","Xiaomi1","Xiaomi Redmi 9 (Global) Dual SIM 64 GB carbon","Lo que tienes que saber de este producto Dispositivo desbloqueado para que elijas la compañía telefónica que prefieras. 4 cámaras traseras de 13 Mpx, 8 Mpx, 5 Mpx y 2 Mpx con inteligencia artificial. Lente macro, doble gran angular y sensor de profundidad. Cámara frontal de 8 Mpx con modo retrato. Pantalla FHD+ para una visión nítida y envolvente. Batería con carga rápida para que navegues 19 horas y reproduzcas videos 19 horas.","580000","120","Xiaomi","2","2021-10-18","archivos/imagenes/productos/Xiaomi.jpg","Xiaomi.jpg");





CREATE TABLE `rol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO rol VALUES("1","Administrador");
INSERT INTO rol VALUES("2","Empleado");
INSERT INTO rol VALUES("3","Cliente");





CREATE TABLE `sexo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO sexo VALUES("1","Femenino");
INSERT INTO sexo VALUES("2","Masculino");





CREATE TABLE `sucursal` (
  `id_sucursal` int(11) NOT NULL AUTO_INCREMENT,
  `desc_sucursal` varchar(45) NOT NULL,
  `dir_sucursal` varchar(45) NOT NULL,
  `tel_sucursal` varchar(45) NOT NULL,
  `id_ciudad` int(10) NOT NULL,
  `fecha_creacion` date NOT NULL,
  PRIMARY KEY (`id_sucursal`),
  KEY `fk_sucursal_ciudad1_idx` (`id_ciudad`),
  CONSTRAINT `fk_sucursal_ciudad1` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudad` (`id_ciudad`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO sucursal VALUES("2","Exito centro","Avenida 5 calle 16","3182835226","3","2021-10-08");
INSERT INTO sucursal VALUES("3","N/A","N/A","1","5","2021-10-18");





CREATE TABLE `tipodoc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO tipodoc VALUES("1","Cedula de ciudadania");
INSERT INTO tipodoc VALUES("2","Cedula extranjeria");
INSERT INTO tipodoc VALUES("3","Tarjeta de identidad");



