-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2021 a las 02:39:54
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jgandica_computeck`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(10) NOT NULL,
  `desc_categoria` varchar(45) NOT NULL,
  `ruta_imagen` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `desc_categoria`, `ruta_imagen`, `imagen`) VALUES
(1, 'Audio', 'archivos/imagenes/categorias/altavoz-de-audio.png', 'altavoz-de-audio.png'),
(2, 'Celulares', 'archivos/imagenes/categorias/celular.png', 'celular.png'),
(3, 'Computadores', 'archivos/imagenes/categorias/ordenador-personal.png', 'ordenador-personal.png'),
(4, 'Electrodomesticos', 'archivos/imagenes/categorias/electrodomesticos.png', 'electrodomesticos.png'),
(5, 'Videojuegos', 'archivos/imagenes/categorias/videojuegos.png', 'videojuegos.png'),
(6, 'Accesorios', 'archivos/imagenes/categorias/raton-de-computadora.png', 'raton-de-computadora.png'),
(7, 'Sillas', 'archivos/imagenes/categorias/Silla.png', 'Silla.png'),
(8, 'Televisor', 'archivos/imagenes/categorias/televisor.png', 'televisor.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id_ciudad` int(10) NOT NULL,
  `desc_ciudad` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id_ciudad`, `desc_ciudad`) VALUES
(1, 'Ragonvalia'),
(2, 'Cúcuta'),
(3, 'Medellín'),
(4, 'Pamplona'),
(5, 'N/A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(10) NOT NULL,
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
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nom_cliente`, `ape_cliente`, `tipodoc`, `doc_cliente`, `tel_cliente`, `sexo_cliente`, `correo_cliente`, `fecha_nac_cliente`, `fecha_cliente`, `dir_cliente`, `id_ciudad`, `rol`) VALUES
(8, 'Marta Eugenia', 'Santafe Pinto', 1, '60255264', '3003424123', 1, 'mareusapi@hotmail.com', '1965-12-03', '2021-10-10', 'Conjunto r T4 Apto 204', 3, 3),
(13, 'Pancho', 'Villa', 2, '1091354158', '3108148484', 2, 'pancho@hotmail.com', '2021-12-12', '2021-10-17', 'AAA', 4, 3),
(14, 'SS', 'Ss', 2, '123', '123', 1, 'ff@gmail.com', '2021-12-12', '2921-10-19', 'FF', 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `id_detalle` int(10) NOT NULL,
  `id_producto` int(10) NOT NULL,
  `id_factura` int(10) NOT NULL,
  `cantidad` int(3) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle`
--

INSERT INTO `detalle` (`id_detalle`, `id_producto`, `id_factura`, `cantidad`, `total`) VALUES
(1, 15, 26, 13, 7540000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_emp` int(11) NOT NULL,
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
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_emp`, `ape_emp`, `nom_emp`, `doc_emp`, `fecha_nac_emp`, `telefono_emp`, `dir_emp`, `mail_emp`, `fecha`, `id_sucursal`, `ruta_imagen`, `imagen`, `rol`) VALUES
(8, 'Gandica Velasco', 'Jesús Ricardo', '1091354158', '2004-12-05', '3184827442', 'Conjunto residencia Portachuelo', 'ricardogandica@hotmail.com', '2021-10-10', 2, 'archivos/imagenes/empleados/fotico.jpg', 'fotico.jpg', 1),
(9, 'Velasco', 'Katherine', '1092334828', '1985-08-05', '3162082139', 'Garciaherreros', 'katherinevs86@gmail.com', '2021-10-13', 2, 'archivos/imagenes/empleados/Menor.jpg', 'Menor.jpg', 2),
(10, 'INTERNET', 'INTERNET', '1', '2021-10-18', '1', 'N/A', 'N/A', '2021-10-18', 3, 'N/A', 'N/A', 2),
(12, 'Jaimes', 'Sebastian', '1091634182', '2003-03-12', '3003251236', 'Conjunto residencia Portachuelo', 'jaimes@gmail.com', '2021-10-18', 2, 'archivos/imagenes/empleados/jaimes.jpg', 'jaimes.jpg', 2),
(13, 'SS', 'SS', '123', '2002-12-12', '12', 'Conjunto residencia Portachuelo', 'skere@gmail.com', '2021-10-20', 2, 'archivos/imagenes/empleados/carnet.jpg', 'carnet.jpg', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrega`
--

CREATE TABLE `entrega` (
  `id_entrega` int(10) NOT NULL,
  `fecha_entrega` date NOT NULL,
  `resultado` text NOT NULL,
  `costo_neto` int(100) NOT NULL,
  `id_servicio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entrega`
--

INSERT INTO `entrega` (`id_entrega`, `fecha_entrega`, `resultado`, `costo_neto`, `id_servicio`) VALUES
(1, '2021-10-20', 'Exitosa', 130000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id_fact` int(11) NOT NULL,
  `id_emp` int(10) NOT NULL,
  `id_modopago` int(10) NOT NULL,
  `id_cliente` int(10) NOT NULL,
  `fecha_pago` datetime NOT NULL,
  `total_pagar` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id_fact`, `id_emp`, `id_modopago`, `id_cliente`, `fecha_pago`, `total_pagar`) VALUES
(12, 12, 1, 8, '2021-10-19 04:56:03', 100),
(13, 12, 1, 8, '2021-10-19 05:09:14', 100),
(14, 12, 1, 8, '2021-10-19 05:10:05', 100),
(21, 12, 1, 8, '2021-10-19 05:21:21', 100),
(22, 9, 3, 13, '2021-10-19 05:21:52', 100),
(23, 9, 1, 8, '2021-10-19 05:25:26', 100),
(24, 9, 1, 8, '2021-10-19 05:26:17', 100),
(25, 9, 3, 13, '2021-10-19 05:27:26', 100),
(26, 9, 1, 8, '2021-10-19 05:45:11', 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modopago`
--

CREATE TABLE `modopago` (
  `id_modopago` int(11) NOT NULL,
  `metodo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modopago`
--

INSERT INTO `modopago` (`id_modopago`, `metodo`) VALUES
(1, 'Credito'),
(2, 'Debito'),
(3, 'Efectivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(10) NOT NULL,
  `cod_producto` varchar(20) NOT NULL,
  `nom_producto` varchar(45) NOT NULL,
  `desc_producto` text NOT NULL,
  `precio` int(10) NOT NULL,
  `stock` int(11) NOT NULL,
  `marca` varchar(45) NOT NULL,
  `id_categoria` int(10) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `ruta_imagen` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `cod_producto`, `nom_producto`, `desc_producto`, `precio`, `stock`, `marca`, `id_categoria`, `fecha_creacion`, `ruta_imagen`, `imagen`) VALUES
(6, 'tuki', 'Y7 2019', 'Celular Huawei', 600000, 30, 'Huawei', 2, '2021-10-10', 'archivos/imagenes/productos/Biblia satanica.jpg', 'Biblia satanica.jpg'),
(13, 'skjdk', 'BB', 'BB', 190000, 14, 'Biblia', 4, '2021-10-22', 'archivos/imagenes/productos/Biblia satanica.jpg', 'Biblia satanica.jpg'),
(14, 'EEF', 'EF', 'EF', 12, 12, 'ss', 6, '2021-10-17', 'archivos/imagenes/productos/WTD.jpg', 'WTD.jpg'),
(15, 'Xiaomi1', 'Xiaomi Redmi 9 (Global) Dual SIM 64 GB carbon', 'Lo que tienes que saber de este producto Dispositivo desbloqueado para que elijas la compañía telefónica que prefieras. 4 cámaras traseras de 13 Mpx, 8 Mpx, 5 Mpx y 2 Mpx con inteligencia artificial. Lente macro, doble gran angular y sensor de profundidad. Cámara frontal de 8 Mpx con modo retrato. Pantalla FHD+ para una visión nítida y envolvente. Batería con carga rápida para que navegues 19 horas y reproduzcas videos 19 horas.', 580000, 120, 'Xiaomi', 2, '2021-10-18', 'archivos/imagenes/productos/Xiaomi.jpg', 'Xiaomi.jpg'),
(16, 'FEEE', 'Chamoy', 'El propio chamoy', 150000, 13, 'Chamoy', 6, '2021-10-19', 'archivos/imagenes/productos/chamoy.jpg', 'chamoy.jpg'),
(17, 'JOFE', 'Guitarra PRO', 'La propia guitarra Pro', 45000, 3, 'Ibanez', 6, '2021-10-19', 'archivos/imagenes/productos/Guitar.jpeg', 'Guitar.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Empleado'),
(3, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id_servicio` int(10) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `id_empleado` int(10) NOT NULL,
  `id_cliente` int(10) NOT NULL,
  `id_tservicio` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `estado` varchar(100) NOT NULL,
  `ruta_imagen` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id_servicio`, `descripcion`, `id_empleado`, `id_cliente`, `id_tservicio`, `fecha`, `estado`, `ruta_imagen`, `imagen`) VALUES
(1, 'asdas', 8, 8, 1, '2021-10-20', 'Pendiente', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`id`, `descripcion`) VALUES
(1, 'Femenino'),
(2, 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `id_sucursal` int(11) NOT NULL,
  `desc_sucursal` varchar(45) NOT NULL,
  `dir_sucursal` varchar(45) NOT NULL,
  `tel_sucursal` varchar(45) NOT NULL,
  `id_ciudad` int(10) NOT NULL,
  `fecha_creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`id_sucursal`, `desc_sucursal`, `dir_sucursal`, `tel_sucursal`, `id_ciudad`, `fecha_creacion`) VALUES
(2, 'Exito centro', 'Avenida 5 calle 16', '3182835226', 3, '2021-10-08'),
(3, 'N/A', 'N/A', '1', 5, '2021-10-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodoc`
--

CREATE TABLE `tipodoc` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipodoc`
--

INSERT INTO `tipodoc` (`id`, `descripcion`) VALUES
(1, 'Cedula de ciudadania'),
(2, 'Cedula extranjeria'),
(3, 'Tarjeta de identidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_servicio`
--

CREATE TABLE `tipo_servicio` (
  `id_tservicio` int(10) NOT NULL,
  `ti_descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_servicio`
--

INSERT INTO `tipo_servicio` (`id_tservicio`, `ti_descripcion`) VALUES
(1, 'Limpieza');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id_ciudad`),
  ADD UNIQUE KEY `id_ciudad_UNIQUE` (`id_ciudad`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `sexo_cliente` (`sexo_cliente`),
  ADD KEY `tipodoc` (`tipodoc`),
  ADD KEY `id_ciudad` (`id_ciudad`),
  ADD KEY `rol` (`rol`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `fk_detalle_factura1_idx` (`id_factura`),
  ADD KEY `fk_detalle_producto1_idx` (`id_producto`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_emp`),
  ADD KEY `fk_empleado_sucursal_idx` (`id_sucursal`),
  ADD KEY `rol` (`rol`);

--
-- Indices de la tabla `entrega`
--
ALTER TABLE `entrega`
  ADD PRIMARY KEY (`id_entrega`),
  ADD KEY `id_servicio` (`id_servicio`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id_fact`),
  ADD KEY `fk_factura_modopago1_idx` (`id_modopago`),
  ADD KEY `fk_factura_empleado1_idx` (`id_emp`),
  ADD KEY `fk_factura_cilente1_idx` (`id_cliente`);

--
-- Indices de la tabla `modopago`
--
ALTER TABLE `modopago`
  ADD PRIMARY KEY (`id_modopago`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `fk_producto_categoria1_idx` (`id_categoria`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id_servicio`),
  ADD KEY `id_tservicio` (`id_tservicio`),
  ADD KEY `id_empleado` (`id_empleado`,`id_cliente`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`id_sucursal`),
  ADD KEY `fk_sucursal_ciudad1_idx` (`id_ciudad`);

--
-- Indices de la tabla `tipodoc`
--
ALTER TABLE `tipodoc`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_servicio`
--
ALTER TABLE `tipo_servicio`
  ADD PRIMARY KEY (`id_tservicio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id_ciudad` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `id_detalle` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `entrega`
--
ALTER TABLE `entrega`
  MODIFY `id_entrega` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id_fact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `modopago`
--
ALTER TABLE `modopago`
  MODIFY `id_modopago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id_servicio` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `id_sucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipodoc`
--
ALTER TABLE `tipodoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_servicio`
--
ALTER TABLE `tipo_servicio`
  MODIFY `id_tservicio` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`sexo_cliente`) REFERENCES `sexo` (`id`),
  ADD CONSTRAINT `cliente_ibfk_2` FOREIGN KEY (`tipodoc`) REFERENCES `tipodoc` (`id`),
  ADD CONSTRAINT `cliente_ibfk_3` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudad` (`id_ciudad`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cliente_ibfk_4` FOREIGN KEY (`rol`) REFERENCES `rol` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `fk_detalle_factura1` FOREIGN KEY (`id_factura`) REFERENCES `factura` (`id_fact`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detalle_producto1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `rol` (`id`),
  ADD CONSTRAINT `fk_empleado_sucursal` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursal` (`id_sucursal`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `entrega`
--
ALTER TABLE `entrega`
  ADD CONSTRAINT `entrega_ibfk_1` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id_servicio`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `fk_factura_cilente1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_factura_empleado1` FOREIGN KEY (`id_emp`) REFERENCES `empleado` (`id_emp`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_factura_modopago1` FOREIGN KEY (`id_modopago`) REFERENCES `modopago` (`id_modopago`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_producto_categoria1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `servicio_ibfk_1` FOREIGN KEY (`id_tservicio`) REFERENCES `tipo_servicio` (`id_tservicio`),
  ADD CONSTRAINT `servicio_ibfk_2` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_emp`),
  ADD CONSTRAINT `servicio_ibfk_3` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD CONSTRAINT `fk_sucursal_ciudad1` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudad` (`id_ciudad`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
