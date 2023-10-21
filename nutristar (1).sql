-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2023 a las 02:59:32
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nutristar`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_LISTAR_COMIDA` (IN `IDDETIPO` INT)  SELECT * FROM comida where idecom = IDDETIPO$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_LISTAR_RECETA` ()  SELECT * FROM tipo$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comida`
--

CREATE TABLE `comida` (
  `idcom` int(11) NOT NULL,
  `nombre` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comida`
--

INSERT INTO `comida` (`idcom`, `nombre`) VALUES
(1, 'Desayuno'),
(2, 'Almuerzo'),
(3, 'Cena');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_receta`
--

CREATE TABLE `plan_receta` (
  `id_pr` int(11) NOT NULL,
  `nombre_rec` varchar(255) NOT NULL,
  `idtipo` int(11) NOT NULL,
  `idcom` int(11) NOT NULL,
  `idre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta`
--

CREATE TABLE `receta` (
  `idre` int(11) NOT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `receta`
--

INSERT INTO `receta` (`idre`, `nombre`, `descripcion`) VALUES
(1, 'Yogur griego con cereales y frutos secos', ' El yogur griego, además de nutritivo, posee una textura cremosa muy agradable al paladar.'),
(2, 'pan integral con cereales, tortilla y brotes germi', 'te aportarán calorías llenas de proteínas y grasas no saturadas'),
(3, 'Requesón con fruta', 'Un estupendo desayuno que te hará aumentar tu masa muscular'),
(4, ' batido de cambur y avena', 'es una excelente alternativas para consumir en el desayuno'),
(5, 'Tostadas de pan integral con aguacate y queso fres', 'aportará a tu organismo calorías beneficiosas que te ayudarán a desarrollar tus músculos'),
(6, 'Avena, kiwi y semillas de chia', 'aporte calorico: 376,45 KCAL'),
(7, 'Tortillas de espinaca con bicote integral', 'aporte nutricional adecuado'),
(8, 'batido con cambur y fresa', 'deliciosa receta para bajar de peso'),
(9, 'Avena con yogurt y frutos rojos', 'alto en fibras'),
(10, 'Tostdas de aguacate y germinados', 'rico en omega3 '),
(11, 'Burrito de guacamole', 'buena eleccion para nutrir'),
(12, 'Pan proteico con pavo natural y aguacate', ' El pan de espelta, por sus beneficios, también es perfecto'),
(13, ' Estofado de pollo', ' Estofado de pollo'),
(14, 'Pasta cremosa con pollo cajún', 'deliciosa receta proteica de pasta cremosa con pollo estilo cajún'),
(15, 'Ensalada de pollo con cuscús', 'Esta ensalada templada es muy completa'),
(16, 'Atún salteado con verduras', 'ste alimento contiene abundante omega 3'),
(17, 'Fiambre de pavo casero', 'Sin duda, esta carne baja en grasas y calorías'),
(18, 'Abanico de calabacines al parmesano', 'El calabacín es una verdura con grandes nutrientes'),
(19, 'Alcachofas con apio y manzanas', 'Las alcachofas son una fuente de vitamina'),
(20, 'Brocoli con vinagreta de hortalizas', 'nutritivo en vitaminas'),
(21, ' Ensalada de papaya y tofu', 'las ensaladas frescas son la opción perfecta para una cena ligera'),
(22, 'Tortitas rellenas', 'receta de cena para ganar músculo'),
(23, 'Pasta cremosa con pollo cajún', 'deliciosa receta proteica de pasta cremosa con pollo estilo cajún'),
(24, 'crema de verduras y guisantes', ' resultan saciantes y muy saludables'),
(25, 'gazpacho y carne de ave', 'La combinación es perfecta y la podremos digerir c'),
(26, 'pescado y piña asada', 'El pescado es proteína animal baja en grasa'),
(27, 'Aguacate relleno', 'contine grasas naturales'),
(28, 'Sándwich de pollo asado con ensalada', 'La combinación es perfecta'),
(29, 'Salmón con verduritas', 'nutritivo en vitaminas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL,
  `rol` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Entrenador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `idtipo` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`idtipo`, `nombre`) VALUES
(1, 'aumento de peso'),
(2, 'bajar de peso'),
(3, 'nutritivo'),
(4, 'vegetariano'),
(5, 'vegano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `usuario` varchar(15) DEFAULT NULL,
  `clave` varchar(100) DEFAULT NULL,
  `rol` int(11) DEFAULT NULL,
  `estatus` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `correo`, `usuario`, `clave`, `rol`, `estatus`) VALUES
(1, 'Abel', 'info@abelosh.com', 'admin', '202cb962ac59075b964b07152d234b70', 1, 1),
(2, 'Julio Estrada', 'julio@gmail.com', 'julio', 'c027636003b468821081e281758e35ff', 2, 1),
(7, 'Carol Cabrera', 'carol@gmail.com', 'carol', 'a9a0198010a6073db96434f6cc5f22a8', 2, 0),
(9, 'Alan Melgar', 'alan@gmail.com', 'alan', '02558a70324e7c4f269c69825450cec8', 2, 1),
(10, 'Efrain GÃ³mez', 'efrain@gmail.com', 'efrain', '69423f0c254e5c1d2b0f5ee202459d2c', 2, 1),
(11, 'Fran Escobar', 'fran@gmail.com', 'fran', '2c20cb5558626540a1704b1fe524ea9a', 1, 1),
(37, 'nicolas', 'aimos@gmail.com', 'admin22', 'e10adc3949ba59abbe56e057f20f883e', 1, 1),
(38, 'nicolas', 'avmos@gmail.com', 'admin55', 'e10adc3949ba59abbe56e057f20f883e', 1, 1),
(39, 'nicolas', 'amo2s@gmail.com', 'admin85', 'e10adc3949ba59abbe56e057f20f883e', 1, 1),
(42, 'nicolas', 'nicol4ramos@gmail.com', 'admin1', 'e10adc3949ba59abbe56e057f20f883e', 1, 1),
(43, 'nicolas', 'mos@gmail.com', 'pepe', 'e10adc3949ba59abbe56e057f20f883e', 2, 1),
(44, 'nicolas', 'nicol4ramo1s@gmail.com', 'admin23', 'c4d9341a47faa55662aa017ae0c7b613', 1, 1),
(45, 'nicolas', 'nicol4ramos1@gmail.com', 'admin235', 'c4d9341a47faa55662aa017ae0c7b613', 1, 1),
(46, 'hector', 'amos2@gmail.com', 'entrenador1', '07f07bb971302916fdbedc2cb568167d', 2, 1),
(47, 'nicolas', 'gamos@gmail.com', 'admin20', 'c4d9341a47faa55662aa017ae0c7b613', 1, 1),
(48, 'nicolas', 'amos@gmail.com', 'etnador', 'c4d9341a47faa55662aa017ae0c7b613', 2, 1),
(49, '21fsd', 'user22@gmail.com', 'admin222', 'e10adc3949ba59abbe56e057f20f883e', 1, 1),
(50, 'dfgd', 'nicol4am4os@gmail.com', 'adminn', 'e10adc3949ba59abbe56e057f20f883e', 1, 1),
(51, 'nicolas', 'nicol4ramos55@gmail.com', 'admin34', 'e10adc3949ba59abbe56e057f20f883e', 2, 1),
(52, 'nicolas', 'gamos2@gmail.com', 'admine', 'e10adc3949ba59abbe56e057f20f883e', 1, 1),
(53, 'nicolas', 'nicol4ssramos@gmail.com', 'adminet', 'e10adc3949ba59abbe56e057f20f883e', 2, 1),
(54, 'nico00', 'gamo2s@gmail.com', 'adminnic', 'e10adc3949ba59abbe56e057f20f883e', 1, 1),
(55, 'German F', 'germanfigueroa770@gmail.com', 'ger', '81dc9bdb52d04dc20036dbd8313ed055', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comida`
--
ALTER TABLE `comida`
  ADD PRIMARY KEY (`idcom`);

--
-- Indices de la tabla `plan_receta`
--
ALTER TABLE `plan_receta`
  ADD PRIMARY KEY (`id_pr`),
  ADD KEY `idtipo_fk` (`idtipo`),
  ADD KEY `idcom_fk` (`idcom`),
  ADD KEY `idrec_fk` (`idre`);

--
-- Indices de la tabla `receta`
--
ALTER TABLE `receta`
  ADD PRIMARY KEY (`idre`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`idtipo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `rol` (`rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comida`
--
ALTER TABLE `comida`
  MODIFY `idcom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `plan_receta`
--
ALTER TABLE `plan_receta`
  MODIFY `id_pr` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `receta`
--
ALTER TABLE `receta`
  MODIFY `idre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `idtipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `plan_receta`
--
ALTER TABLE `plan_receta`
  ADD CONSTRAINT `idcom_fk` FOREIGN KEY (`idcom`) REFERENCES `comida` (`idcom`),
  ADD CONSTRAINT `idrec_fk` FOREIGN KEY (`idre`) REFERENCES `receta` (`idre`),
  ADD CONSTRAINT `idtipo_fk` FOREIGN KEY (`idtipo`) REFERENCES `tipo` (`idtipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
