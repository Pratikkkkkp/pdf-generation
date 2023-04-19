-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 08:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdf`
--

-- --------------------------------------------------------

--
-- Table structure for table `insertdata`
--

CREATE TABLE `insertdata` (
  `id` int(11) NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insertdata`
--

INSERT INTO `insertdata` (`id`, `uuid`, `name`, `phone`, `city`) VALUES
(1, '643edddcb9d09', 'kiran kumar malik', '+917848051078', 'Dhamara'),
(2, '643ede3d160ab', 'kiran kumar malik', '+917848051078', 'Dhamara'),
(3, '643ede846f8c7', 'KIRAN KUMAR MALIK', '07077738622', 'Dhamara'),
(4, '643edfd3252d3', 'KIRAN KUMAR MALIK', '07077738622', 'Dhamara'),
(5, '643ee006b1aa7', 'KIRAN KUMAR MALIK', '07077738622', 'Dhamara'),
(6, '643ee05a104d1', 'KIRAN KUMAR MALIK', '07077738622', 'Dhamara'),
(7, '643ee0776aaac', 'KIRAN KUMAR MALIK', '07077738622', 'Dhamara'),
(8, '643ee0bc1a56a', 'KIRAN KUMAR MALIK', '07077738622', 'Dhamara'),
(9, '643ee1260d74a', 'KIRAN KUMAR MALIK', '07077738622', 'Dhamara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insertdata`
--
ALTER TABLE `insertdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `insertdata`
--
ALTER TABLE `insertdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
