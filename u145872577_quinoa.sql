-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 06-06-2024 a las 20:37:57
-- Versión del servidor: 10.11.7-MariaDB-cll-lve
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u145872577_quinoa`
--
CREATE DATABASE IF NOT EXISTS `u145872577_quinoa` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `u145872577_quinoa`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `descrip` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id`, `name`, `descrip`, `category`, `price`, `img`, `state`) VALUES
(1, 'Ensalada de Quinoa', 'Ensalada fresca con quinoa, tomate, pepino y aderezo de limón.', 'Entrante', 10.99, 'img/food/ensalada_quinoa.png', 1),
(2, 'Curry de Vegetales', 'Curry vegetariano con una mezcla de vegetales frescos y arroz basmati.', 'Principal', 12.99, 'img/food/curry_vegetales.png', 1),
(3, 'Burger de Lentejas', 'Hamburguesa vegetariana a base de lentejas con guarnición de patatas fritas.', 'Principal', 8.99, 'img/food/burger_lentejas.png', 1),
(4, 'Sushi Vegano', 'Sushi roll vegano con aguacate, pepino y zanahoria.', 'Principal', 14.99, 'img/food/sushi_vegano.png', 1),
(5, 'Pizza de Verduras', 'Pizza vegetariana con una variedad de verduras frescas y queso vegano.', 'Principal', 11.99, 'img/food/pizza_verduras.png', 1),
(17, 'Nachos mexicanos', 'Nachos con guacamole, tomate, frijoles negros, tomate y jalapeño', 'Entrante', 6.00, 'img/food/mexican-nachos-tortilla-chips-with-black-beans-guacamole-tomato-jalapeno-isolated-white-background.png', 1),
(24, 'Paella de verduras', 'Arroz, verduras de temporada, azafrán y pimentón', 'Principal', 10.00, 'img/food/24_Paella-8V.png', 1),
(25, 'Espaguetis', 'Espaguetis con salsa boloñesa de soja y tomate, con opción de queso vegano', 'Principal', 8.00, 'img/food/25_spaghetti-with-bolognese-sauce-isolated-white-background.png', 1),
(26, 'Cheese cake', 'Cheese cake de arándanos', 'Postre', 4.00, 'img/food/blueberry-cheese-cake.jpg', 1),
(27, 'Cinnamon Roll', 'Rollo de canela', 'Postre', 3.00, 'img/food/27_cinnamon-roll.jpg', 1),
(28, 'Hummus', 'Hummus con crudités de zanahoria', 'Entrante', 3.00, 'img/food/28_foto-hummus-de-zanahoria-tamaño-sitio-web-540x458.jpg', 1),
(29, 'Cupcake', 'Cupcake de oreo', 'Postre', 3.00, 'img/food/cupcakes.jpg', 1),
(33, 'Tarta de chocolate', 'Tarta de chocolate con frambuesas', 'Postre', 4.50, 'img/food/33_slice-tasty-chocolate-cake-with-strawberry-top.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserves`
--

CREATE TABLE `reserves` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `people` int(11) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `table_num` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reserves`
--

INSERT INTO `reserves` (`id`, `id_usuario`, `date`, `time`, `people`, `msg`, `type`, `table_num`) VALUES
(20, 22, '2024-05-31', '14:00 - 15:00', 4, '', 'Cliente', 2),
(24, 4, '2024-06-01', '14:00 - 15:00', 3, '', 'Cliente', 2),
(27, 25, '2024-06-15', '13:00 - 14:00', 5, '', 'Cliente', 20),
(28, 25, '2024-06-14', '15:00 - 16:00', 4, '', 'Cliente', 2),
(29, 4, '2024-06-15', '13:00 - 14:00', 4, 'tres personas veganas', 'Cliente', 2),
(30, 4, '2024-06-21', '14:00 - 15:00', 2, '', 'Cliente', 23),
(47, 30, '2024-06-15', '13:00 - 14:00', 6, 'Un alérgico a los champiñones', 'Cliente', 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tables`
--

CREATE TABLE `tables` (
  `id` int(11) NOT NULL,
  `sites` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tables`
--

INSERT INTO `tables` (`id`, `sites`) VALUES
(1, 4),
(2, 4),
(3, 4),
(4, 8),
(5, 4),
(6, 8),
(7, 4),
(8, 4),
(9, 8),
(10, 8),
(11, 4),
(12, 8),
(13, 4),
(14, 4),
(15, 4),
(16, 4),
(17, 4),
(20, 5),
(22, 6),
(23, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `pass`, `mail`, `phone`, `type`, `state`) VALUES
(1, 'Admin', 'adminpass', 'admin@example.es', '999888770', 'Administrador', 1),
(2, 'Empleado1', 'emppass1', 'empleado1@example.com', '111111111', 'Empleado', 1),
(3, 'Empleado2', 'emppass2', 'empleado2@example.com', '22222222', 'Empleado', 0),
(4, 'Cliente1', 'clientepass1', 'cliente1@example.com', '333333333', 'Cliente', 1),
(22, 'cliente10', 'clientepass10', 'cliente10@example.com', '', 'Cliente', 1),
(25, 'cliente33', 'cliente3', 'cliente3@example.com', '600100333', 'Cliente', 1),
(26, 'cliente4', 'cliente4', 'cliente4@example.com', '600100104', 'Cliente', 1),
(27, 'cliente5', 'cliente5', 'cliente5@example.com', '600100105', 'Cliente', 1),
(28, 'cliente2', 'cliente2', 'cliente2@example.com', '600100102', 'Cliente', 1),
(29, 'cliente6', 'cliente6', 'cliente6@example.com', '600100106', 'Cliente', 1),
(30, 'cliente7', 'cliente7', 'cliente7@example.com', '600100107', 'Cliente', 1),
(31, 'cliente8', 'cliente8', 'cliente8@example.com', '600100108', 'Cliente', 1),
(32, 'cliente9', 'cliente9', 'cliente9@example.com', '600100109', 'Cliente', 1),
(33, 'PruebaUser', 'prueba', 'prueba@example.com.es', '144', 'Cliente', 0),
(34, 'cliente11', 'cliente11', 'cliente11@example.com', '', 'Cliente', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_usuario` (`id_usuario`),
  ADD KEY `fk_table_num` (`table_num`);

--
-- Indices de la tabla `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `reserves`
--
ALTER TABLE `reserves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reserves`
--
ALTER TABLE `reserves`
  ADD CONSTRAINT `fk_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fk_reserves_tables` FOREIGN KEY (`table_num`) REFERENCES `tables` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_table_num` FOREIGN KEY (`table_num`) REFERENCES `tables` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
