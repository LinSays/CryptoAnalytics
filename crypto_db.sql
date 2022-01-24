-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 07:59 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crypto_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `name` varchar(16) NOT NULL,
  `price` int(11) NOT NULL,
  `total_supply` float NOT NULL,
  `market_cap` float NOT NULL,
  `logo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `name`, `price`, `total_supply`, `market_cap`, `logo`) VALUES
(1, 'Binance', 600, 111, 111, '0f7680ef954169baf8d4dae84541cedd.png'),
(2, 'Ethereum', 3000, 123, 123, '4b7610ccff41c21a30fe2812b54fa028.png'),
(3, 'Bytom', 1111, 123, 123, '1465621732592ee9808ef8ba9c7bd80b.png'),
(4, 'Dodge', 300, 1213, 124, '8a19ad28d90a90f3e9b7aa90fa9b5470.png'),
(5, 'Game Crypto', 1, 123, 123, 'ca95eda93f01e8ed18501b226c23c8cf.png'),
(6, 'ZCash', 20, 123, 124, 'd721f928abba735e29ccdb80a8671af9.png'),
(8, 'ZCoin', 111, 123, 123, 'e7c6c2f63fa7f40f67bcd69a0eb07c4f.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
