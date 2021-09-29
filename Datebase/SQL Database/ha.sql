-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2021 at 02:40 PM
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
-- Table structure for table `ha_category_list`
--

CREATE TABLE `ha_category_list` (
  `HA_C_L_ID` bigint(20) UNSIGNED NOT NULL,
  `HA_C_L_Name_Parent` varchar(255) NOT NULL,
  `HA_C_L_Name_Child` varchar(255) NOT NULL,
  `HA_C_L_Parent_ID` varchar(255) NOT NULL,
  `HA_C_L_Status` varchar(255) NOT NULL,
  `HA_C_L_Count_Products` varchar(255) NOT NULL,
  `HA_C_L_Count_Sales` varchar(255) NOT NULL,
  `HA_C_L_Count_Returns` varchar(255) NOT NULL,
  `HA_C_L_Date_Created` varchar(255) NOT NULL,
  `HA_C_L_Time_Created` varchar(255) NOT NULL,
  `HA_C_L_User_ID_Created` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ha_category_list`
--

INSERT INTO `ha_category_list` (`HA_C_L_ID`, `HA_C_L_Name_Parent`, `HA_C_L_Name_Child`, `HA_C_L_Parent_ID`, `HA_C_L_Status`, `HA_C_L_Count_Products`, `HA_C_L_Count_Sales`, `HA_C_L_Count_Returns`, `HA_C_L_Date_Created`, `HA_C_L_Time_Created`, `HA_C_L_User_ID_Created`) VALUES
(1, 'Electronics', '', '', 'Active', '0', '0', '0', '2021/09/29', '10:57:00 AM', '2'),
(2, 'Food', '', '', 'Active', '0', '0', '0', '2021/09/29', '10:57:00 AM', '2'),
(3, '', 'Fruits ', '2', 'Active', '0', '0', '0', '2021/09/29', '10:57:00 AM', '2'),
(4, '', 'Laptops ', '1', 'Active', '0', '0', '0', '2021/09/29', '10:57:00 AM', '2'),
(5, 'Men Fashion', '', '', 'Active', '0', '0', '0', '2021/09/29', '10:57:00 AM', '2'),
(6, 'Girl Fashion', '', '', 'Active', '0', '0', '0', '2021/09/29', '10:57:00 AM', '2'),
(7, '', 'Monitor', '1', 'Active', '0', '0', '0', '2021/09/29', '11:50:27 AM', '2'),
(8, '', 'Shorts', '5', 'Active', '0', '0', '0', '2021/09/29', '11:52:53 AM', '2'),
(9, '', 'Shorts', '6', 'Active', '0', '0', '0', '2021/09/29', '12:06:46 PM', '2'),
(10, '', 'Vegetable', '2', 'Active', '0', '0', '0', '2021/09/29', '01:22:03 PM', '2'),
(11, '', 'T-shirts', '6', 'Active', '0', '0', '0', '2021/09/29', '01:22:38 PM', '2'),
(12, '', 'T-shirts', '5', 'Active', '0', '0', '0', '2021/09/29', '01:22:42 PM', '2'),
(13, '', 'Boots', '6', 'Active', '0', '0', '0', '2021/09/29', '01:26:16 PM', '1'),
(14, '', 'Boots', '5', 'Active', '0', '0', '0', '2021/09/29', '01:27:13 PM', '1'),
(15, '', 'Meat', '2', 'Active', '0', '0', '0', '2021/09/29', '02:34:01 PM', '2');

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
  `HA_U_User_Status` varchar(255) NOT NULL,
  `HA_U_Last_Login` varchar(255) NOT NULL,
  `HA_U_First_Name` varchar(255) NOT NULL,
  `HA_U_Second_Name` varchar(255) NOT NULL,
  `HA_U_Last_Name` varchar(255) NOT NULL,
  `HA_U_Country` varchar(255) NOT NULL,
  `HA_U_Email` varchar(255) NOT NULL,
  `HA_U_User_Type` varchar(255) NOT NULL,
  `HA_P_Views` varchar(255) NOT NULL,
  `HA_U_Sales` varchar(255) NOT NULL,
  `HA_U_Purchase` varchar(255) NOT NULL,
  `HA_U_Date_Created` varchar(255) NOT NULL,
  `HA_U_Time_Created` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ha_users`
--

INSERT INTO `ha_users` (`HA_U_ID`, `HA_U_Username`, `HA_U_Password`, `HA_U_User_Status`, `HA_U_Last_Login`, `HA_U_First_Name`, `HA_U_Second_Name`, `HA_U_Last_Name`, `HA_U_Country`, `HA_U_Email`, `HA_U_User_Type`, `HA_P_Views`, `HA_U_Sales`, `HA_U_Purchase`, `HA_U_Date_Created`, `HA_U_Time_Created`) VALUES
(1, 'HadyMM', '123', 'Active', '2021/09/29 01:25:34 PM', 'Hady', 'Muhammed', 'Morsy', 'Egypt', 'HadyMM@Gmail.com', 'Employee', '', '', '', '2021/09/15', '08:43:13 PM'),
(2, 'AbdulBasetRS', '123', 'Active', '2021/09/29 01:45:34 PM', 'AbdulBaset', 'Reda', 'Sayed', 'Egypt', 'AbdulBasetRS@Gmail.com', 'Employee', '', '', '', '2021/09/15', '08:43:13 PM'),
(3, 'FatmaMM', '123', 'Active', '2021/09/28 04:12:05 PM', 'Fatma', 'Muhammed', 'Morsy', 'Egypt', 'FatmaMM@Gmail.com', 'Seller', '3051', '5400', '', '2021/09/15', '08:43:13 PM'),
(4, 'SayedMM', '123', 'Pending', '2021/09/29 01:44:34 PM', 'Sayed', 'Muhammed', 'Morsy', 'Egypt', 'SayedMM@Gmail.com', 'Client', '', '', '', '2021/09/15', '08:43:13 PM'),
(5, 'MuhammedMM', '123', 'Active', '2021/09/28 04:12:05 PM', 'Muhammed', 'Muhammed', 'Morsy', 'Egypt', 'MuhammedMM@Gmail.com', 'Client', '', '', '', '2021/09/15', '08:43:13 PM'),
(6, 'RedaSH', '123', 'Suspended', '2021/09/28 04:12:05 PM', 'Reda', 'Sayed', 'Hussien', 'Egypt', 'RedaSH@Gmail.com', 'Client', '', '', '', '2021/09/15', '08:43:13 PM'),
(7, 'MahmoudME', '123', 'Active', '2021/09/28 04:12:05 PM', 'Mahmoud', 'Mosad', 'El-Adawy', 'Egypt', 'MahmoudME@Gmail.com', 'Client', '', '', '1200', '2021/09/15', '08:45:58 PM'),
(8, 'MariamMM', '123', 'Active', '2021/09/28 04:12:05 PM', 'Mariam', 'Muhammed', 'Morsy', 'Egypt', 'MariamMM@Gmail.com', 'Seller', '1516457', '78500', '', '2021/09/18', '08:43:13 PM');

-- --------------------------------------------------------

--
-- Table structure for table `ha_user_permission`
--

CREATE TABLE `ha_user_permission` (
  `HA_U_P_ID` bigint(20) UNSIGNED NOT NULL,
  `HA_U_P_User_ID` varchar(255) NOT NULL,
  `HA_U_P_Clients_Manager` varchar(255) NOT NULL,
  `HA_U_P_Seller_Manager` varchar(255) NOT NULL,
  `HA_U_P_Employee_Manager` varchar(255) NOT NULL,
  `HA_U_P_Category_Manager` varchar(255) NOT NULL,
  `HA_U_P_Category_List` varchar(255) NOT NULL,
  `HA_U_P_Add_Product` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ha_user_permission`
--

INSERT INTO `ha_user_permission` (`HA_U_P_ID`, `HA_U_P_User_ID`, `HA_U_P_Clients_Manager`, `HA_U_P_Seller_Manager`, `HA_U_P_Employee_Manager`, `HA_U_P_Category_Manager`, `HA_U_P_Category_List`, `HA_U_P_Add_Product`) VALUES
(1, '1', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available'),
(2, '2', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available'),
(3, '3', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Available'),
(4, '4', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable'),
(5, '5', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable'),
(6, '6', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable'),
(7, '7', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable'),
(8, '8', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ha_category_list`
--
ALTER TABLE `ha_category_list`
  ADD UNIQUE KEY `HA_C_L_ID` (`HA_C_L_ID`);

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
-- Indexes for table `ha_user_permission`
--
ALTER TABLE `ha_user_permission`
  ADD UNIQUE KEY `HA_U_P_ID` (`HA_U_P_ID`),
  ADD UNIQUE KEY `HA_U_P_User_ID` (`HA_U_P_User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ha_category_list`
--
ALTER TABLE `ha_category_list`
  MODIFY `HA_C_L_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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

--
-- AUTO_INCREMENT for table `ha_user_permission`
--
ALTER TABLE `ha_user_permission`
  MODIFY `HA_U_P_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
