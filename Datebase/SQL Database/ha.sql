-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2021 at 12:45 AM
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
  `HA_U_Last_Name` varchar(255) NOT NULL,
  `HA_U_Country` varchar(255) NOT NULL,
  `HA_U_User_Type` varchar(255) NOT NULL,
  `HA_P_Views` varchar(255) NOT NULL,
  `HA_U_Sales` varchar(255) NOT NULL,
  `HA_U_Date_Created` varchar(255) NOT NULL,
  `HA_U_Time_Created` varchar(255) NOT NULL,
  `HA_P_Permission_Seller_Manager` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ha_users`
--

INSERT INTO `ha_users` (`HA_U_ID`, `HA_U_Username`, `HA_U_Password`, `HA_U_First_Name`, `HA_U_Second_Name`, `HA_U_Last_Name`, `HA_U_Country`, `HA_U_User_Type`, `HA_P_Views`, `HA_U_Sales`, `HA_U_Date_Created`, `HA_U_Time_Created`, `HA_P_Permission_Seller_Manager`) VALUES
(1, 'HadyMM', '123', 'Hady', 'Muhammed', 'Morsy', 'Egypt', 'Employee', '', '', '2021/09/15', '08:43:13 PM', 'Available'),
(2, 'AbdulBasetRS', '123', 'AbdulBaset', 'Reda', 'Sayed', 'Egypt', 'Employee', '', '', '2021/09/15', '08:43:13 PM', 'Available'),
(3, 'FatmaMM', '123', 'Fatma', 'Muhammed', 'Morsy', 'Egypt', 'Seller', '3051', '5400', '2021/09/15', '08:43:13 PM', 'Unavailable'),
(4, 'SayedMM', '123', 'Sayed', 'Muhammed', 'Morsy', 'Egypt', 'Client', '', '', '2021/09/15', '08:43:13 PM', 'Unavailable'),
(5, 'MuhammedMM', '123', 'Muhammed', 'Muhammed', 'Morsy', 'Egypt', 'Client', '', '', '2021/09/15', '08:43:13 PM', 'Unavailable'),
(6, 'RedaSH', '123', 'Reda', 'Sayed', 'Hussien', 'Egypt', 'Client', '', '', '2021/09/15', '08:43:13 PM', 'Unavailable'),
(7, 'MahmoudME', '123', 'Mahmoud', 'Mosad', 'El-Adawy', 'Egypt', 'Client', '', '', '2021/09/15', '08:45:58 PM', 'Unavailable'),
(8, 'MariamMM', '123', 'Mariam', 'Muhammed', 'Morsy', 'Egypt', 'Seller', '1516457', '78500', '2021/09/18', '08:43:13 PM', 'Unavailable');

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
  ADD UNIQUE KEY `HA_U_ID` (`HA_U_ID`),
  ADD UNIQUE KEY `HA_U_Username` (`HA_U_Username`);

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
  MODIFY `HA_U_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
