-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2018 a las 03:48:57
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sitio-novedades`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'facundo@estudiorochayasoc.com.ar', 'faAr2010');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenidos`
--

CREATE TABLE `contenidos` (
  `id` int(11) NOT NULL,
  `contenido` longtext,
  `codigo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contenidos`
--

INSERT INTO `contenidos` (`id`, `contenido`, `codigo`) VALUES
(4, '<div class=\"btgrid\">\r\n<div class=\"row row-1\">\r\n<div class=\"col col-md-4\">\r\n<div class=\"content\">\r\n<p style=\"text-align:center\"><img alt=\"ENVIO\" src=\"http://delagro.com.ar/archivos/image/52d220e.png\" style=\"width:20%\" /></p>\r\n\r\n<h3 style=\"text-align:center\">ENV&Iacute;O A CONVENIR CON EL CLIENTE<br />\r\n<strong>ENVIAMOS A TODA LA ARGENTINA</strong></h3>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col col-md-4\">\r\n<div class=\"content\">\r\n<h3 style=\"text-align:center\"><img alt=\"PAGOS\" src=\"http://delagro.com.ar/archivos/image/74f54eb.png\" style=\"width:20%\" /></h3>\r\n\r\n<h3 style=\"text-align:center\">SEGUINOS EN LAS REDES<br />\r\n<strong>INGRES&Aacute; A NUESTRO FACEBOOK</strong></h3>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col col-md-4\">\r\n<div class=\"content\">\r\n<h3 style=\"text-align:center\"><img alt=\"WHATSAPP\" src=\"http://delagro.com.ar/archivos/image/6665be8.png\" style=\"width:20%\" /></h3>\r\n\r\n<h3 style=\"text-align:center\">CONTACTANOS V&Iacute;A WHATSAPP<br />\r\n<strong>A NUESTROS CELULARES</strong></h3>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n', 'FOOTER BOX'),
(5, '<h3>&iquest;Quer&eacute;s Recibir tu cup&oacute;n de descuento?</h3>\r\n\r\n<p>&iexcl;Si quer&eacute;s recibir tu cup&oacute;n envianos en el cuerpo del mensaje CUP&Oacute;N DE DESCUENTO y cantidad de metros a comprar, luego te enviaremos el CUP&Oacute;N!</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'OFERTAS ESPECIALES CONTACTO'),
(6, '<p>&iexcl;Muchas gracias!<br />\r\n<strong>Agromade</strong><br />\r\n356 469-6748 &nbsp;<br />\r\nLun - Viernes: 9:00 - 18:00 &nbsp;<br />\r\nventas@agro-made.com.ar</p>\r\n', 'PIE CORREOS'),
(7, '<h2 style=\"text-align:center\"><span style=\"color:#27ae60; font-family:Tahoma,Geneva,sans-serif\"><span style=\"font-size:36px\"><strong>PAGANOS EN<br />\r\n12 CUOTAS</strong></span><br />\r\n<span style=\"font-size:22px\"><strong>CON MERCADOPAGO</strong></span></span></h2>\r\n', 'alerta sesion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galerias`
--

CREATE TABLE `galerias` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) DEFAULT NULL,
  `titulo` text,
  `desarrollo` text,
  `categoria` text,
  `keywords` text,
  `description` text,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `galerias`
--

INSERT INTO `galerias` (`id`, `cod`, `titulo`, `desarrollo`, `categoria`, `keywords`, `description`, `fecha`) VALUES
(1, '0105b02863', 'ASFASFA', '<p>asfasf</p>\r\n', 'Galerias', '', '', '2018-11-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL,
  `ruta` varchar(255) NOT NULL,
  `codigo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `ruta`, `codigo`) VALUES
(1, 'assets/archivos/03dad5319e.jpg', 'e6050b40d3'),
(3, 'assets/archivos/recortadas/a_0533340f22.jpeg', 'f9b26462cf'),
(4, '', '20056bd729'),
(5, '', '5263960eee'),
(6, '', 'b7e2c86845'),
(7, 'assets/archivos/recortadas/a_4b6249010e.jpg', 'dc83a5a5f3'),
(8, '', '2c47a421a0'),
(9, '', '5a9f8f6e0b'),
(10, 'assets/archivos/recortadas/a_a6e90bec8e.jpeg', '8a56100015'),
(11, 'assets/archivos/recortadas/a_43df37e665.jpg', '8a56100015'),
(12, 'assets/archivos/recortadas/a_8575771422.jpg', '0e18e8287a'),
(13, 'assets/archivos/recortadas/a_4f6191dac3.jpeg', '0e18e8287a'),
(14, 'assets/archivos/recortadas/a_80878be327.jpg', '0e18e8287a'),
(15, 'assets/archivos/recortadas/a_d09b4d6f16.png', '0e18e8287a'),
(16, 'assets/archivos/recortadas/a_1da7092be2.jpg', 'ec38288a70'),
(17, 'assets/archivos/recortadas/a_d0c5822d2d.jpg', 'ec38288a70'),
(18, 'assets/archivos/recortadas/a_ce320b8a16.jpg', '01bedd6172'),
(19, 'assets/archivos/recortadas/a_b00d8e7e89.jpg', '01bedd6172'),
(21, 'assets/archivos/recortadas/a_d8bb20bb46.jpg', '68a2b61029'),
(23, 'assets/archivos/recortadas/a_7ac9098748.jpeg', '68a2b61029'),
(29, 'assets/archivos/recortadas/a_b6216f84e3.jpg', '6342994662'),
(30, 'assets/archivos/recortadas/a_0e053e3dbc.jpg', ''),
(31, 'assets/archivos/recortadas/a_efb57995fe.jpg', '2454bd9bf8'),
(32, 'assets/archivos/recortadas/a_cac18acd10.jpg', 'cb94488ef4'),
(33, 'assets/archivos/recortadas/a_5cbf74a2c4.jpg', 'cb94488ef4'),
(35, 'assets/archivos/recortadas/a_bf120ed30e.jpg', '0105b02863'),
(36, 'assets/archivos/recortadas/a_9c99be9cc7.jpg', '4bf55ecd30'),
(37, 'assets/archivos/recortadas/a_ec802520d0.jpg', '1'),
(38, 'assets/archivos/recortadas/a_4b693bde48.jpg', '536b9896b5'),
(39, 'assets/archivos/recortadas/a_74a50aa590.jpg', 'db75369cc5'),
(40, 'assets/archivos/recortadas/a_0cbf3ecc20.jpg', '43e7251d2c'),
(41, 'assets/archivos/recortadas/a_e7d7edc056.jpg', '43e7251d2c'),
(42, 'assets/archivos/recortadas/a_62b51eab52.jpg', 'f13949ecf2'),
(43, 'assets/archivos/recortadas/a_4a267b4a74.jpg', '4184f44b2e'),
(44, 'assets/archivos/recortadas/a_3f98d9e726.jpg', '767db7eed9'),
(45, 'assets/archivos/recortadas/a_58e2de7069.jpg', '504faea620');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

CREATE TABLE `novedades` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) DEFAULT NULL,
  `titulo` text,
  `desarrollo` text,
  `categoria` text,
  `keywords` text,
  `description` text,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `novedades`
--

INSERT INTO `novedades` (`id`, `cod`, `titulo`, `desarrollo`, `categoria`, `keywords`, `description`, `fecha`) VALUES
(1, '43e7251d2c', 'afasfasf', '<p>asfasf</p>\r\n', 'Novedades', 'asf', 'asf', '2018-11-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) NOT NULL,
  `pedido` text NOT NULL,
  `estado` int(11) DEFAULT '0',
  `tipo` int(11) DEFAULT '0',
  `usuario` varchar(255) NOT NULL,
  `detalle` text,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) DEFAULT NULL,
  `titulo` text,
  `desarrollo` text,
  `categoria` text,
  `keywords` text,
  `description` text,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `portfolio`
--

INSERT INTO `portfolio` (`id`, `cod`, `titulo`, `desarrollo`, `categoria`, `keywords`, `description`, `fecha`) VALUES
(1, '', 'aasf', '<p>asf</p>\r\n', 'Novedades', 'asfasf,asf,asf,as,fas,f', 'asf', '2018-10-29'),
(2, 'c095659144', 'aasf', '<p>asf</p>\r\n', 'Novedades', 'asfasf,asf,asf,as,fas,f', 'asf', '2018-10-29'),
(3, '44da9b397e', 'aasf', '<p>asf</p>\r\n', 'Novedades', 'asfasf,asf,asf,as,fas,f', 'asf', '2018-10-29'),
(4, '6642a70026', 'aasf', '<p>asf</p>\r\n', 'Novedades', 'asfasf,asf,asf,as,fas,f', 'asf', '2018-10-29'),
(5, 'e6050b40d3', 'aasf', '<p>asf</p>\r\n', 'Novedades', 'asfasf,asf,asf,as,fas,f', 'asf', '2018-10-29'),
(6, '6efae836a7', 'prueba', '<p>asf</p>\r\n', 'Marketing', 'asf,asf,asfa', 'asfaf', '2018-10-29'),
(7, '68a2b61029', 'f22 q 2', '<p>asfasfasf</p>\r\n', 'Novedades', 'asfafasf,asfasfa,asfan', 'anskfa', '2018-10-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) DEFAULT NULL,
  `titulo` text,
  `precio` float DEFAULT NULL,
  `precioDescuento` float DEFAULT NULL,
  `stock` int(11) DEFAULT '0',
  `desarrollo` text,
  `categoria` text,
  `subcategoria` text,
  `keywords` text,
  `description` text,
  `fecha` date DEFAULT NULL,
  `meli` varchar(255) DEFAULT NULL,
  `url` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `cod`, `titulo`, `precio`, `precioDescuento`, `stock`, `desarrollo`, `categoria`, `subcategoria`, `keywords`, `description`, `fecha`, `meli`, `url`) VALUES
(2, '1', 'asf', 1, 1, 124, '<p>1</p>\r\n', 'Marketing', 'Novedades', '', '', '2018-11-06', '', '1'),
(3, '124', 'asf', 1, 1, 1, '<p>1241</p>\r\n', 'Novedades', '', '', '', '2018-11-06', '', '1'),
(4, '124', '124', 124, 124, 124, '<p>124</p>\r\n', 'Novedades', 'Novedades', '', '', '2018-11-06', '', '124'),
(5, '124', 'asf', 12, 412, 124, '<p>124124</p>\r\n', '', 'Novedades', '', '', '2018-11-06', '', '124'),
(6, '124', '214', 1, 124, 124, '<p>124</p>\r\n', 'Marketing', 'Novedades', '', '', '2018-11-06', '', '124'),
(7, '767db7eed9', '214', 1, 124, 124, '<p>124</p>\r\n', 'Marketing', 'Novedades', '', '', '2018-11-06', '', '124'),
(8, '504faea620', 'afa', 124, 124, 124, '<p>124</p>\r\n', 'Novedades', 'Novedades', '', '', '2018-11-06', '', '124');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) DEFAULT NULL,
  `titulo` text,
  `desarrollo` text,
  `categoria` text,
  `keywords` text,
  `description` text,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `cod`, `titulo`, `desarrollo`, `categoria`, `keywords`, `description`, `fecha`) VALUES
(8, '6342994662', 'asf124', '<p>asf 12412&nbsp;</p>\r\n', 'Novedades', 'asfa,afsfa,', 'asjfa', '2018-10-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) DEFAULT NULL,
  `titulo` text,
  `subtitulo` text,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `cod`, `titulo`, `subtitulo`, `fecha`) VALUES
(1, '2454bd9bf8', 'asf', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) DEFAULT NULL,
  `nombre` text,
  `apellido` text,
  `doc` text,
  `email` text,
  `password` text,
  `postal` text,
  `localidad` text,
  `provincia` text,
  `pais` text,
  `telefono` text,
  `celular` text,
  `invitado` int(11) NOT NULL DEFAULT '0',
  `descuento` float DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `cod`, `nombre`, `apellido`, `doc`, `email`, `password`, `postal`, `localidad`, `provincia`, `pais`, `telefono`, `celular`, `invitado`, `descuento`, `fecha`) VALUES
(9, '3c1670b491', 'Facundo', 'Rocha', '37754994', 'facundoestudiorocha@gmail.com', 'faAr2010', '2400', 'San Francisco', 'CÃ³rdoba', 'Argentina', '3564570789', '3564570789', 1, 20, '2018-10-31'),
(10, '965a2f1fe1', 'Facundo 21412 412124 1241', 'Rocha124124', '37754994', 'facundoestudioroch2a@gmail.com', 'faAr2010', '2400', 'San Francisco', 'CÃ³rdoba', 'Argentina', '3564570789', '3564570789', 0, 0, '2018-10-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `titulo` text,
  `link` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `titulo`, `link`) VALUES
(3, 'AA1 1 1 as f', 'HTTP://WWW.ARGENLAB.COM.AR');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galerias`
--
ALTER TABLE `galerias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `novedades`
--
ALTER TABLE `novedades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `galerias`
--
ALTER TABLE `galerias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `novedades`
--
ALTER TABLE `novedades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
