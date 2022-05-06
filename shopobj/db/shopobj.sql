-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: May 06, 2022 at 06:49 PM
-- Server version: 8.0.24
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopobj`
--

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `id` int NOT NULL,
  `session_id` text NOT NULL,
  `product_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`id`, `session_id`, `product_id`) VALUES
(1, '111', 1),
(4, '111', 2),
(5, '222', 1),
(27, 'v8n6a1s4d13tqot97uah1om3vvlov17n', 3),
(42, 'em92611q33mm2a1gr7vcl1u8qg3u48vc', 1),
(43, 'em92611q33mm2a1gr7vcl1u8qg3u48vc', 1),
(44, 'em92611q33mm2a1gr7vcl1u8qg3u48vc', 1),
(53, 'mfo9kvleslr4qmceaa500l6ocq0ba9mi', 1),
(54, 'mfo9kvleslr4qmceaa500l6ocq0ba9mi', 1),
(55, 'mfo9kvleslr4qmceaa500l6ocq0ba9mi', 1),
(56, 'mfo9kvleslr4qmceaa500l6ocq0ba9mi', 1),
(59, 'b8drfplpr4k0ek2qigb8b8pvulqgbjkj', 1),
(68, 'llrjgolp71cc95meqc2easebfd2u0tid', 1),
(69, 'llrjgolp71cc95meqc2easebfd2u0tid', 1),
(70, 'llrjgolp71cc95meqc2easebfd2u0tid', 2),
(72, 'llrjgolp71cc95meqc2easebfd2u0tid', 1),
(73, 'llrjgolp71cc95meqc2easebfd2u0tid', 1),
(74, 'llrjgolp71cc95meqc2easebfd2u0tid', 1),
(80, '3ha5n6ji85io8htt06nm9tqvahr6752e', 1),
(81, '3ha5n6ji85io8htt06nm9tqvahr6752e', 1),
(82, '3ha5n6ji85io8htt06nm9tqvahr6752e', 1),
(83, '3ha5n6ji85io8htt06nm9tqvahr6752e', 1),
(90, '71lhgkptgdfe5bc51qtp4dc8867n824s', 2),
(91, '71lhgkptgdfe5bc51qtp4dc8867n824s', 2),
(92, '71lhgkptgdfe5bc51qtp4dc8867n824s', 2),
(93, 'bvesilfpiuergs06kj24nfunig0lfal5', 2),
(94, 'bvesilfpiuergs06kj24nfunig0lfal5', 2),
(95, 'bvesilfpiuergs06kj24nfunig0lfal5', 2),
(97, 'bvesilfpiuergs06kj24nfunig0lfal5', 2),
(98, '1padbemjqehtp40ltb3kr2b33duvpkau', 2),
(99, '1padbemjqehtp40ltb3kr2b33duvpkau', 2),
(100, '1padbemjqehtp40ltb3kr2b33duvpkau', 2),
(101, 'r6vi50blek16b14l80jur322qb8gs7vo', 2),
(102, 'r6vi50blek16b14l80jur322qb8gs7vo', 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `size` int NOT NULL,
  `type` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `session_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `description`, `price`) VALUES
(2, 'Pizza', 'pizza.jpeg', 'Margarita', 43),
(20, 'apple', 'apple.jpg', 'apple red', 12),
(22, 'tea', 'tea.png', 'blck tea', 24);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` text NOT NULL,
  `pass` text NOT NULL,
  `hash` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `hash`) VALUES
(1, 'admin', '$2y$10$xM0.cmkMkAV54mtYxUJzw.8mFIpRKg/Tt8y382GsQoG/4MWFGCKJO', ''),
(8, 'robert', '12345', ''),
(9, 'user', '123', ''),
(10, 'robert', '12345', ''),
(11, 'user', '123', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
