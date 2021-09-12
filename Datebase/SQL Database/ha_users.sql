-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2021 at 04:44 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ha`
--

-- --------------------------------------------------------

--
-- Table structure for table `ha_products`
--

CREATE TABLE `ha_products` (
  `ha_P_ID` bigint(20) UNSIGNED NOT NULL,
  `ha_P_Number` int(11) NOT NULL,
  `ha_P_Name` varchar(255) NOT NULL,
  `ha_P_Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ha_users`
--

CREATE TABLE `ha_users` (
  `HA_U_ID` bigint(20) UNSIGNED NOT NULL,
  `HA_U_Username` varchar(255) NOT NULL,
  `HA_U_Password` varchar(255) NOT NULL,
  `HA_U_First_Name` varchar(255) NOT NULL,
  `HA_U_Second_Name` varchar(255) NOT NULL,
  `HA_U_Last_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ha_users`
--

INSERT INTO `ha_users` (`HA_U_ID`, `HA_U_Username`, `HA_U_Password`, `HA_U_First_Name`, `HA_U_Second_Name`, `HA_U_Last_Name`) VALUES
(1, 'HadyMM', '123', 'Hady', 'Muhammed', 'Morsy'),
(2, 'AbdulBasetRS', '123', 'AbdulBaset', 'Reda', 'Sayed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ha_products`
--
ALTER TABLE `ha_products`
  ADD UNIQUE KEY `ha_P_ID` (`ha_P_ID`);

--
-- Indexes for table `ha_users`
--
ALTER TABLE `ha_users`
  ADD UNIQUE KEY `HA_U_ID` (`HA_U_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ha_products`
--
ALTER TABLE `ha_products`
  MODIFY `ha_P_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ha_users`
--
ALTER TABLE `ha_users`
  MODIFY `HA_U_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;