-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 03, 2021 at 12:57 PM
-- Server version: 8.0.13-4
-- PHP Version: 7.2.24-0ubuntu0.18.04.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pXTbMHDknr`
--

-- --------------------------------------------------------

--
-- Table structure for table `ha_category_list`
--

CREATE TABLE `ha_category_list` (
  `HA_C_L_ID` bigint(20) UNSIGNED NOT NULL,
  `HA_C_L_Category_Name` varchar(255) NOT NULL,
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

INSERT INTO `ha_category_list` (`HA_C_L_ID`, `HA_C_L_Category_Name`, `HA_C_L_Parent_ID`, `HA_C_L_Status`, `HA_C_L_Count_Products`, `HA_C_L_Count_Sales`, `HA_C_L_Count_Returns`, `HA_C_L_Date_Created`, `HA_C_L_Time_Created`, `HA_C_L_User_ID_Created`) VALUES
(1, 'Electronics', '', 'Active', '0', '0', '0', '2021/09/29', '10:57:00 AM', '2'),
(2, 'Food', '', 'Active', '0', '0', '0', '2021/09/29', '10:57:00 AM', '2'),
(3, 'Fruits', '2', 'Active', '0', '0', '0', '2021/09/29', '10:57:00 AM', '2'),
(4, 'Laptops', '1', 'Active', '0', '0', '0', '2021/09/29', '10:57:00 AM', '2'),
(5, 'Men Fashion', '', 'Active', '0', '0', '0', '2021/09/29', '10:57:00 AM', '2'),
(6, 'Girl Fashion', '', 'Active', '0', '0', '0', '2021/09/29', '10:57:00 AM', '2'),
(7, 'Monitor', '1', 'Active', '0', '0', '0', '2021/09/29', '11:50:27 AM', '2'),
(8, 'Shorts', '5', 'Active', '0', '0', '0', '2021/09/29', '11:52:53 AM', '2'),
(9, 'Shorts', '6', 'Active', '0', '0', '0', '2021/09/29', '12:06:46 PM', '2'),
(10, 'Vegetable', '2', 'Active', '0', '0', '0', '2021/09/29', '01:22:03 PM', '2'),
(11, 'T-shirts', '6', 'Active', '0', '0', '0', '2021/09/29', '01:22:38 PM', '2'),
(12, 'T-shirts', '5', 'Active', '0', '0', '0', '2021/09/29', '01:22:42 PM', '2'),
(13, 'Boots', '6', 'Active', '0', '0', '0', '2021/09/29', '01:26:16 PM', '1'),
(14, 'Boots', '5', 'Active', '0', '0', '0', '2021/09/29', '01:27:13 PM', '1'),
(15, 'Meat', '2', 'Active', '0', '0', '0', '2021/09/29', '02:34:01 PM', '2'),
(16, 'Watch', '5', 'Active', '1', '0', '0', '2021/09/30', '06:45:54 PM', '2'),
(17, 'Watch', '6', 'Active', '0', '0', '0', '2021/09/30', '06:46:11 PM', '2'),
(18, 'Computer', '', 'Active', '0', '0', '0', '2021/10/01', '07:00:00 AM', '2'),
(19, 'Mobile', '', 'Active', '0', '0', '0', '2021/10/01', '07:02:29 AM', '2'),
(20, 'Tablet', '19', 'Active', '0', '0', '0', '2021/10/01', '07:04:16 AM', '2'),
(21, 'Phone\'s', '19', 'Active', '0', '0', '0', '2021/10/01', '07:11:42 AM', '2'),
(22, 'Phone\'s', '', 'Deactivate', '0', '0', '0', '2021/10/01', '08:02:09 AM', '2'),
(23, 'Mouse', '18', 'Active', '0', '0', '0', '2021/10/03', '08:45:09 AM', '2'),
(24, 'Keyboard', '18', 'Active', '0', '0', '0', '2021/10/03', '08:47:27 AM', '2'),
(25, 'Rings Gold', '6', 'Active', '0', '0', '0', '2021/10/03', '02:15:51 PM', '2');

-- --------------------------------------------------------

--
-- Table structure for table `ha_products`
--

CREATE TABLE `ha_products` (
  `HA_P_ID` bigint(20) UNSIGNED NOT NULL,
  `HA_P_Name` varchar(255) NOT NULL,
  `HA_P_Price` varchar(255) NOT NULL,
  `HA_P_Description` text NOT NULL,
  `HA_P_Category_ID` varchar(255) NOT NULL,
  `HA_P_Qty` varchar(255) NOT NULL,
  `HA_P_Alert_Qty` varchar(255) NOT NULL,
  `HA_P_Brand` varchar(255) NOT NULL,
  `HA_P_Available_From_Date` varchar(255) NOT NULL,
  `HA_P_Date_Created` varchar(255) NOT NULL,
  `HA_P_Time_Created` varchar(255) NOT NULL,
  `HA_P_User_ID_Created` varchar(255) NOT NULL,
  `HA_P_Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ha_products`
--

INSERT INTO `ha_products` (`HA_P_ID`, `HA_P_Name`, `HA_P_Price`, `HA_P_Description`, `HA_P_Category_ID`, `HA_P_Qty`, `HA_P_Alert_Qty`, `HA_P_Brand`, `HA_P_Available_From_Date`, `HA_P_Date_Created`, `HA_P_Time_Created`, `HA_P_User_ID_Created`, `HA_P_Status`) VALUES
(1, 'Pre-Owned Rolex', '23000', 'Rolex watches are symbols of excellence, performance and prestige. Throughout its history, Rolex has pioneered the development of the wristwatch for the modern era. The company is at the origin of landmark innovations in watchmaking, including the first waterproof wristwatch, the Oyster, and the Perpetual rotor self-winding mechanism. Today, Rolex is also actively involved in supporting the arts, exploration, sports and the environment through sponsoring and philanthropic programmes.', '16', '5', '3', 'Rolex', '2021/09/30 07:00:00 PM', '2021/09/30', '06:41:00 PM', '2', 'Active'),
(2, 'TUF Gaming VG24VQ Curved Gaming', '4399', 'Asus TUF Gaming VG24VQ Curved Gaming Monitor 23.6 inch Full HD (1920 x 1080) 144Hz, Extreme Low Motion Blur, FreeSync, 1ms (MPRT), Shadow Boost', '7', '15', '5', 'Asus', '2021/09/30 07:57:22 PM', '2021/09/30', '07:57:22 PM', '2', 'Pending'),
(3, 'Gold Rings', '15000', 'Tiffany rings are renowned for their exceptional craftsmanship and timeless style. Explore classic signet rings or create your own ring stack.', '25', '10', '3', 'Gloria', '2021/10/03 02:19:54 PM', '2021/10/03', '02:19:54 PM', '2', 'Pending'),
(4, 'Gold Rings', '15000', 'Tiffany rings are renowned for their exceptional craftsmanship and timeless style. Explore classic signet rings or create your own ring stack.', '25', '10', '3', 'Gloria', '2021/10/03 02:21:55 PM', '2021/10/03', '02:21:55 PM', '2', 'Pending'),
(5, 'Gold Rings', '15000', 'Tiffany rings are renowned for their exceptional craftsmanship and timeless style. Explore classic signet rings or create your own ring stack.', '25', '10', '3', 'Gloria', '2021/10/03 02:25:44 PM', '2021/10/03', '02:25:44 PM', '2', 'Pending'),
(6, 'Gold Rings', '15000', 'Tiffany rings are renowned for their exceptional craftsmanship and timeless style. Explore classic signet rings or create your own ring stack.', '25', '10', '3', 'Gloria', '2021/10/03 02:33:13 PM', '2021/10/03', '02:33:13 PM', '2', 'Pending'),
(7, 'Gold Rings', '15000', 'Tiffany rings are renowned for their exceptional craftsmanship and timeless style. Explore classic signet rings or create your own ring stack.', '25', '10', '3', 'Gloria', '2021/10/03 02:37:47 PM', '2021/10/03', '02:37:47 PM', '2', 'Pending'),
(8, 'Gold Rings', '15000', 'Tiffany rings are renowned for their exceptional craftsmanship and timeless style. Explore classic signet rings or create your own ring stack.', '25', '10', '3', 'Gloria', '2021/10/03 02:38:43 PM', '2021/10/03', '02:38:43 PM', '2', 'Pending'),
(9, 'Gold Rings', '15000', 'Tiffany rings are renowned for their exceptional craftsmanship and timeless style. Explore classic signet rings or create your own ring stack.', '25', '10', '3', 'Gloria', '2021/10/03 02:39:12 PM', '2021/10/03', '02:39:12 PM', '2', 'Pending'),
(10, 'Gold Rings', '15000', 'Tiffany rings are renowned for their exceptional craftsmanship and timeless style. Explore classic signet rings or create your own ring stack.', '25', '10', '3', 'Gloria', '2021/10/03 02:46:23 PM', '2021/10/03', '02:46:23 PM', '2', 'Pending'),
(11, 'Gold Rings', '15000', 'Tiffany rings are renowned for their exceptional craftsmanship and timeless style. Explore classic signet rings or create your own ring stack.', '25', '10', '3', 'Gloria', '2021/10/03 02:48:18 PM', '2021/10/03', '02:48:18 PM', '2', 'Pending'),
(12, 'Mouse Gaming M112', '120', 'Package Dimensions ‏ : ‎ 20.6 x 13.6 x 6.2 cm; 180 Grams\r\nDate First Available ‏ : ‎ 1 April 2021\r\nManufacturer ‏ : ‎ MARVO\r\nASIN ‏ : ‎ B091J5RW58\r\nItem model number ‏ : ‎ M112', '23', '20', '3', 'N/A', '2021/10/03 02:53:52 PM', '2021/10/03', '02:53:52 PM', '2', 'Pending');

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
  `HA_U_Gender` varchar(255) NOT NULL,
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

INSERT INTO `ha_users` (`HA_U_ID`, `HA_U_Username`, `HA_U_Password`, `HA_U_User_Status`, `HA_U_Last_Login`, `HA_U_First_Name`, `HA_U_Gender`, `HA_U_Second_Name`, `HA_U_Last_Name`, `HA_U_Country`, `HA_U_Email`, `HA_U_User_Type`, `HA_P_Views`, `HA_U_Sales`, `HA_U_Purchase`, `HA_U_Date_Created`, `HA_U_Time_Created`) VALUES
(1, 'HadyMM', '123', 'Active', '2021/09/29 01:25:34 PM', 'Hady', 'Male', 'Muhammed', 'Morsy', 'Egypt', 'HadyMM@Gmail.com', 'Employee', '', '', '', '2021/09/15', '08:43:13 PM'),
(2, 'AbdulBasetRS', '123', 'Active', '2021/10/03 01:05:19 PM', 'AbdulBaset', 'Male', 'Reda', 'Sayed', 'Egypt', 'AbdulBasetRS@Gmail.com', 'Employee', '', '', '', '2021/09/15', '08:43:13 PM'),
(3, 'FatmaMM', '123', 'Active', '2021/10/03 06:00:25 AM', 'Fatma', 'Female', 'Muhammed', 'Morsy', 'Egypt', 'FatmaMM@Gmail.com', 'Seller', '3051', '5400', '0', '2021/09/15', '08:43:13 PM'),
(4, 'SayedMM', '123', 'Pending', '2021/09/29 01:44:34 PM', 'Sayed', 'Female', 'Muhammed', 'Morsy', 'Egypt', 'SayedMM@Gmail.com', 'Client', '', '', '', '2021/09/15', '08:43:13 PM'),
(5, 'MuhammedMM', '123', 'Active', '2021/09/28 04:12:05 PM', 'Muhammed', 'Male', 'Muhammed', 'Morsy', 'Egypt', 'MuhammedMM@Gmail.com', 'Client', '', '', '', '2021/09/15', '08:43:13 PM'),
(6, 'RedaSH', '123', 'Suspended', '2021/09/28 04:12:05 PM', 'Reda', 'Male', 'Sayed', 'Hussien', 'Egypt', 'RedaSH@Gmail.com', 'Client', '', '', '', '2021/09/15', '08:43:13 PM'),
(7, 'MahmoudME', '123', 'Active', '2021/09/28 04:12:05 PM', 'Mahmoud', 'Male', 'Mosad', 'El-Adawy', 'Egypt', 'MahmoudME@Gmail.com', 'Client', '', '', '1200', '2021/09/15', '08:45:58 PM'),
(8, 'MariamMM', '123', 'Active', '2021/09/28 04:12:05 PM', 'Mariam', 'Female', 'Muhammed', 'Morsy', 'Egypt', 'MariamMM@Gmail.com', 'Seller', '1516457', '78500', '0', '2021/09/18', '08:43:13 PM'),
(9, 'ClientDemo', '123', 'Active', '2021/10/01 08:19:00 AM', 'Client', 'Male', 'Demo', '', 'Egypt', 'Client_Demo@Gmail.com', 'Client', '', '', '', '2021/09/15', '08:43:13 PM'),
(10, 'SellerDemo', '123', 'Active', '2021/10/01 08:23:45 AM', 'Seller', 'Female', 'Demo', '', 'Egypt', 'Client_Demo@Gmail.com', 'Seller', '0', '0', '0', '2021/09/15', '08:43:13 PM');

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
  `HA_U_P_Add_Product` varchar(255) NOT NULL,
  `HA_U_P_Products_List` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ha_user_permission`
--

INSERT INTO `ha_user_permission` (`HA_U_P_ID`, `HA_U_P_User_ID`, `HA_U_P_Clients_Manager`, `HA_U_P_Seller_Manager`, `HA_U_P_Employee_Manager`, `HA_U_P_Category_Manager`, `HA_U_P_Category_List`, `HA_U_P_Add_Product`, `HA_U_P_Products_List`) VALUES
(1, '1', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available'),
(2, '2', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available'),
(3, '3', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Available', 'Unavailable'),
(4, '4', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable'),
(5, '5', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable'),
(6, '6', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable'),
(7, '7', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable'),
(8, '8', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Available', 'Unavailable'),
(9, '9', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable'),
(10, '10', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Unavailable', 'Available', 'Unavailable');

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
  ADD UNIQUE KEY `ha_P_ID` (`HA_P_ID`);

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
  MODIFY `HA_C_L_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `ha_products`
--
ALTER TABLE `ha_products`
  MODIFY `HA_P_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ha_users`
--
ALTER TABLE `ha_users`
  MODIFY `HA_U_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ha_user_permission`
--
ALTER TABLE `ha_user_permission`
  MODIFY `HA_U_P_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
