-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2021 at 12:26 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manegedatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `manegedieren`
--

CREATE TABLE `manegedieren` (
  `id` int(11) NOT NULL,
  `naam` text NOT NULL,
  `leeftijd` int(11) NOT NULL,
  `ras` text NOT NULL,
  `soort` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manegedieren`
--

INSERT INTO `manegedieren` (`id`, `naam`, `leeftijd`, `ras`, `soort`, `img`) VALUES
(17, 'pferd', 12, 'paard', '???', 'https://static.praxisdienst.com/out/pictures/generated/product/1/800_800_90/221261_putzibuddy_pferd2(1).jpg'),
(18, 'dood', 99, 'rest in peace', 'paard', 'https://images.tijd.be/view?iid=Elvis:20nn_caRabUAXnm-Gb4pFJ&context=ONLINE&ratio=16/9&width=640&u=1609684002000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manegedieren`
--
ALTER TABLE `manegedieren`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manegedieren`
--
ALTER TABLE `manegedieren`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
