-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 17, 2020 at 06:30 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ShishaTime`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `nombre` varchar(1000) NOT NULL,
  `precio` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `nombre`, `precio`, `cantidad`) VALUES
(7, 42, 'Black Coco 4Kg', 20, 3),
(8, 42, 'Black Coco 1Kg', 5, 4),
(9, 42, 'CocoSoul 1Kg', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `total` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pedidos`
--

INSERT INTO `pedidos` (`id`, `correo`, `total`, `created_at`) VALUES
(42, 'christiangaleano.p@gmail.com', 105, '2020-05-17 16:10:45');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `name`, `code`, `price`, `image`, `tipo`) VALUES
(1, 'Wookah Oak 2.0', 'Wookah', 250, 'images/wookah.jpg', 'cachimba'),
(2, 'Alpha', 'Alpha1', 300, 'images/alpha.jpg', 'cachimba'),
(3, 'Geometry', 'geometry01', 400, 'images/geometry.jpg', 'cachimba'),
(4, 'Manguera 1.0', 'manguera01', 10, 'images/manguera01.jpg', 'manguera'),
(5, 'Manguera Camuflaje', 'manguera02', 10, 'images/manguera02.jpg', 'manguera'),
(6, 'Manguera Madera', 'manguera03', 10, 'images/manguera03.jpg', 'manguera'),
(7, 'Black Coco 4Kg', 'carbon01', 20, 'images/carbon01.jpg', 'carbon'),
(8, 'Black Coco 1Kg', 'carbon02', 5, 'images/carbon02.jpg', 'carbon'),
(9, 'CocoSoul 1Kg', 'carbon03', 5, 'images/carbon03.jpg', 'carbon'),
(10, 'Hellium Bowl Small SE', 'cazoleta01', 12, 'images/cazoleta01.jpg', 'cazoleta'),
(11, 'Hellium Bowl', 'cazoleta02', 12, 'images/cazoleta02.jpg', 'cazoleta'),
(12, 'Carmela Maxiestanco', 'cazoleta03', 12, 'images/cazoleta03.jpg', 'cazoleta'),
(13, 'Oudman N2 + Hornillo + 1Kg', 'pack01', 90, 'images/pack1.jpg', 'pack'),
(14, 'Carbon + Hornillo', 'pack02', 90, 'images/pack2.jpg', 'pack'),
(15, 'Oferta Base', 'oferta01', 20, 'images/oferta01.jpg', 'oferta'),
(17, 'Oferta Pinzas', 'oferta01', 20, 'images/oferta02.jpg', 'oferta'),
(19, 'Oferta Cazoleta', 'oferta03', 12, 'images/oferta03.jpg', 'oferta');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(256) NOT NULL,
  `apellidos` varchar(256) NOT NULL,
  `correo` varchar(256) NOT NULL,
  `direccion` varchar(256) NOT NULL,
  `direccion2` varchar(256) NOT NULL,
  `ciudad` varchar(256) NOT NULL,
  `cp` int(5) NOT NULL,
  `provincia` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellidos`, `correo`, `direccion`, `direccion2`, `ciudad`, `cp`, `provincia`, `password`) VALUES
('Christian', 'Galeano', 'christiangaleano.p@gmail.com', 'C/ Villar 1', 'Portal 1 Piso 2B', 'GriÃ±on', 28971, 'Madrid', 'christian'),
('Lorena', 'Gregorio', 'lorevirgo94@gmail.com', 'Alamo Blanco', '1', 'Cubas de la Sagra', 28972, 'Madrid', 'lorena');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`correo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
