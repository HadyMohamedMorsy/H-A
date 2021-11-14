-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 14, 2021 at 02:56 AM
-- Server version: 8.0.13-4
-- PHP Version: 7.2.24-0ubuntu0.18.04.10

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
-- Table structure for table `ha_cart`
--

CREATE TABLE `ha_cart` (
  `HA_C_ID` bigint(20) UNSIGNED NOT NULL,
  `HA_C_User_ID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HA_C_Product_ID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HA_C_Qty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HA_C_Unit_Price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HA_C_Date_Created` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HA_C_Time_Created` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HA_C_Status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ha_cart`
--

INSERT INTO `ha_cart` (`HA_C_ID`, `HA_C_User_ID`, `HA_C_Product_ID`, `HA_C_Qty`, `HA_C_Unit_Price`, `HA_C_Date_Created`, `HA_C_Time_Created`, `HA_C_Status`) VALUES
(1, '2', '12', '13', '120', '2021/11/11', '10:57:00 AM', 'Pending'),
(2, '2', '1', '17', '23000', '2021/11/11', '10:57:00 AM', 'Pending'),
(3, '2', '2', '2', '4399', '2021/11/11', '09:01:16 PM', 'Pending'),
(4, '2', '3', '1', '15000', '2021/11/11', '09:17:15 PM', 'Pending'),
(5, '1', '2', '6', '4399', '2021/11/11', '09:59:25 PM', 'Pending'),
(6, '1', '3', '6', '15000', '2021/11/11', '10:00:21 PM', 'Pending'),
(7, '1', '1', '3', '23000', '2021/11/11', '10:00:24 PM', 'Pending'),
(8, '2', '11', '1', '15000', '2021/11/13', '04:30:29 PM', 'Pending'),
(9, '1', '4', '2', '15000', '2021/11/13', '11:47:02 PM', 'Pending'),
(10, '1', '7', '3', '15000', '2021/11/13', '11:48:58 PM', 'Pending'),
(11, '1', '14', '2', '200', '2021/11/13', '11:50:19 PM', 'Pending'),
(12, '1', '6', '2', '15000', '2021/11/14', '12:09:02 AM', 'Pending'),
(13, '1', '10', '2', '15000', '2021/11/14', '12:30:08 AM', 'Pending'),
(14, '1', '5', '3', '15000', '2021/11/14', '12:33:56 AM', 'Pending'),
(15, '1', '8', '1', '15000', '2021/11/14', '12:44:12 AM', 'Pending'),
(16, '1', '13', '1', '20', '2021/11/14', '12:46:52 AM', 'Pending'),
(17, '1', '11', '1', '15000', '2021/11/14', '12:47:14 AM', 'Pending');

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
(25, 'Rings Gold', '6', 'Active', '0', '0', '0', '2021/10/03', '02:15:51 PM', '2'),
(26, 'Smart Home', '', 'Active', '0', '0', '0', '2021/10/10', '11:49:56 PM', '2'),
(27, 'New Smart Device', '26', 'Active', '0', '0', '0', '2021/10/10', '11:51:34 PM', '2'),
(28, 'Wifi Smart Device', '26', 'Active', '0', '0', '0', '2021/10/11', '01:43:50 AM', '2'),
(29, 'Books', '', 'Active', '0', '0', '0', '2021/10/11', '01:45:55 AM', '2'),
(30, 'Computer Since ', '29', 'Active', '0', '0', '0', '2021/10/11', '01:47:14 AM', '2'),
(31, 'Islamic', '29', 'Active', '0', '0', '0', '2021/10/11', '01:48:21 AM', '2');

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
  `HA_P_Status` varchar(255) NOT NULL,
  `HA_P_Views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ha_products`
--

INSERT INTO `ha_products` (`HA_P_ID`, `HA_P_Name`, `HA_P_Price`, `HA_P_Description`, `HA_P_Category_ID`, `HA_P_Qty`, `HA_P_Alert_Qty`, `HA_P_Brand`, `HA_P_Available_From_Date`, `HA_P_Date_Created`, `HA_P_Time_Created`, `HA_P_User_ID_Created`, `HA_P_Status`, `HA_P_Views`) VALUES
(1, 'Pre-Owned Rolex', '23000', 'Rolex watches are symbols of excellence, performance and prestige. Throughout its history, Rolex has pioneered the development of the wristwatch for the modern era. The company is at the origin of landmark innovations in watchmaking, including the first waterproof wristwatch, the Oyster, and the Perpetual rotor self-winding mechanism. Today, Rolex is also actively involved in supporting the arts, exploration, sports and the environment through sponsoring and philanthropic programmes.', '16', '0', '3', 'Rolex', '2021/09/30 07:00:00 PM', '2021/09/30', '06:41:00 PM', '2', 'Active', 150),
(2, 'TUF Gaming VG24VQ Curved Gaming', '4399', 'Asus TUF Gaming VG24VQ Curved Gaming Monitor 23.6 inch Full HD (1920 x 1080) 144Hz, Extreme Low Motion Blur, FreeSync, 1ms (MPRT), Shadow Boost', '7', '15', '5', 'Asus', '2021/10/22 06:30:22 PM', '2021/09/30', '07:57:22 PM', '2', 'Deactivated', 200),
(3, 'Gold Rings', '15000', 'Tiffany rings are renowned for their exceptional craftsmanship and timeless style. Explore classic signet rings or create your own ring stack.', '25', '10', '3', 'Gloria', '2021/10/03 02:19:54 PM', '2021/10/03', '02:19:54 PM', '2', 'Active', 50),
(4, 'Gold Rings', '15000', 'Tiffany rings are renowned for their exceptional craftsmanship and timeless style. Explore classic signet rings or create your own ring stack.', '25', '10', '3', 'Gloria', '2021/10/03 02:21:55 PM', '2021/10/03', '02:21:55 PM', '2', 'Active', 300),
(5, 'Gold Rings', '15000', 'Tiffany rings are renowned for their exceptional craftsmanship and timeless style. Explore classic signet rings or create your own ring stack.', '25', '10', '3', 'Gloria', '2021/10/03 02:25:44 PM', '2021/10/03', '02:25:44 PM', '2', 'Active', 2),
(6, 'Gold Rings', '15000', 'Tiffany rings are renowned for their exceptional craftsmanship and timeless style. Explore classic signet rings or create your own ring stack.', '25', '10', '3', 'Gloria', '2021/10/03 02:33:13 PM', '2021/10/03', '02:33:13 PM', '2', 'Active', 3),
(7, 'Gold Rings', '15000', 'Tiffany rings are renowned for their exceptional craftsmanship and timeless style. Explore classic signet rings or create your own ring stack.', '25', '10', '3', 'Gloria', '2021/10/03 02:37:47 PM', '2021/10/03', '02:37:47 PM', '2', 'Active', 4),
(8, 'Gold Rings', '15000', 'Tiffany rings are renowned for their exceptional craftsmanship and timeless style. Explore classic signet rings or create your own ring stack.', '25', '10', '3', 'Gloria', '2021/10/03 02:38:43 PM', '2021/10/03', '02:38:43 PM', '2', 'Active', 5),
(9, 'Gold Rings', '15000', 'Tiffany rings are renowned for their exceptional craftsmanship and timeless style. Explore classic signet rings or create your own ring stack.', '25', '10', '3', 'Gloria', '2021/10/03 02:39:12 PM', '2021/10/03', '02:39:12 PM', '2', 'Active', 6),
(10, 'Gold Rings', '15000', 'Tiffany rings are renowned for their exceptional craftsmanship and timeless style. Explore classic signet rings or create your own ring stack.', '25', '10', '3', 'Gloria', '2021/10/03 02:46:23 PM', '2021/10/03', '02:46:23 PM', '2', 'Active', 7),
(11, 'Gold Rings', '15000', 'Tiffany rings are renowned for their exceptional craftsmanship and timeless style. Explore classic signet rings or create your own ring stack.', '25', '10', '3', 'Gloria', '2021/10/03 02:48:18 PM', '2021/10/03', '02:48:18 PM', '2', 'Active', 8),
(12, 'Mouse Gaming M112', '120', 'Package Dimensions ‏ : ‎ 20.6 x 13.6 x 6.2 cm; 180 Grams\r\nDate First Available ‏ : ‎ 1 April 2021\r\nManufacturer ‏ : ‎ MARVO\r\nASIN ‏ : ‎ B091J5RW58\r\nItem model number ‏ : ‎ M112', '23', '20', '3', 'N/A', '2021/10/03 02:53:52 PM', '2021/10/03', '02:53:52 PM', '2', 'Deactivated', 1),
(13, 'Hady mohamed', '20', 'localsdasdasdas', '30', '30', '40', 'brand', '2021-11-05T21:30', '2021/11/02', '09:30:55 PM', '1', 'Active', 10),
(14, 'hady', '200', 'its good', '11', '20', '5', 'mercids', '2021-11-13T17:31', '2021/11/13', '05:38:03 PM', '2', 'Active', 0),
(15, 'whatcher', '23', 'adasdasdasdasdasd', '16', '2', '5', 'watcher', '2021-11-09T17:41', '2021/11/13', '05:42:05 PM', '1', 'Active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ha_product_status_activities`
--

CREATE TABLE `ha_product_status_activities` (
  `HA_P_S_A_ID` bigint(20) UNSIGNED NOT NULL,
  `HA_P_S_A_Product_ID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HA_P_S_A_Current_Status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HA_P_S_A_New_Status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HA_P_S_A_Action_From_User_ID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HA_P_S_A_Status_Reason` text COLLATE utf8_unicode_ci NOT NULL,
  `HA_P_S_A_Date_Created` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HA_P_S_A_Time_Created` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ha_product_status_activities`
--

INSERT INTO `ha_product_status_activities` (`HA_P_S_A_ID`, `HA_P_S_A_Product_ID`, `HA_P_S_A_Current_Status`, `HA_P_S_A_New_Status`, `HA_P_S_A_Action_From_User_ID`, `HA_P_S_A_Status_Reason`, `HA_P_S_A_Date_Created`, `HA_P_S_A_Time_Created`) VALUES
(1, '3', 'Pending', 'Active', '2', 'Null', '2021/11/02', '08:02:32 PM'),
(2, '4', 'Pending', 'Deactivated', '2', 'Null', '2021/11/02', '08:14:17 PM'),
(3, '12', 'Pending', 'Active', '2', 'Null', '2021/11/02', '08:19:21 PM'),
(4, '1', 'Active', 'Deactivated', '1', 'Null', '2021/11/02', '08:21:52 PM'),
(5, '12', 'Active', 'Deactivated', '2', 'Null', '2021/11/02', '08:22:03 PM'),
(6, '9', 'Pending', 'Active', '1', 'Null', '2021/11/02', '08:21:56 PM'),
(7, '9', 'Active', 'Deactivated', '1', 'Null', '2021/11/02', '08:21:59 PM'),
(8, '6', 'Pending', 'Active', '1', 'Null', '2021/11/02', '08:23:29 PM'),
(9, '6', 'Active', 'Deactivated', '1', 'Null', '2021/11/02', '08:24:20 PM'),
(10, '13', 'Pending', 'Active', '1', 'Null', '2021/11/02', '08:31:44 PM'),
(11, '13', 'Active', 'Deactivated', '1', 'Null', '2021/11/02', '08:31:57 PM'),
(12, '13', 'Pending', 'Deactivated', '1', 'Null', '2021/11/02', '08:39:33 PM'),
(13, '12', 'Pending', 'Deactivated', '1', 'Null', '2021/11/02', '08:39:41 PM'),
(14, '2', 'Pending', 'Active', '2', 'Null', '2021/11/03', '07:50:50 PM'),
(15, '1', 'Pending', 'Active', '2', 'Null', '2021/11/03', '07:51:00 PM'),
(16, '9', 'Pending', 'Deactivated', '2', 'Null', '2021/11/03', '07:51:05 PM'),
(17, '10', 'Pending', 'Deactivated', '2', 'Null', '2021/11/03', '07:51:08 PM'),
(18, '7', 'Pending', 'Active', '2', 'Null', '2021/11/05', '01:41:20 AM'),
(19, '5', 'Pending', 'Active', '2', 'Null', '2021/11/05', '01:41:53 AM'),
(20, '4', 'Pending', 'Active', '2', 'Null', '2021/11/05', '01:45:45 AM'),
(21, '4', 'Active', 'Deactivated', '2', 'Null', '2021/11/05', '01:45:54 AM'),
(22, '4', 'Deactivated', 'Deactivated', '2', 'Null', '2021/11/05', '01:46:30 AM'),
(23, '5', 'Active', 'Deactivated', '2', 'Null', '2021/11/05', '01:46:40 AM'),
(24, '7', 'Active', 'Deactivated', '2', 'Null', '2021/11/05', '01:48:41 AM'),
(25, '12', 'Pending', 'Active', '2', 'Null', '2021/11/08', '04:07:00 PM'),
(26, '4', 'Pending', 'Active', '1', 'Null', '2021/11/08', '07:02:55 PM'),
(27, '3', 'Pending', 'Active', '1', 'Null', '2021/11/10', '10:37:04 AM'),
(28, '5', 'Pending', 'Active', '1', 'Null', '2021/11/11', '12:04:41 PM'),
(29, '7', 'Pending', 'Active', '1', 'Null', '2021/11/11', '04:57:22 PM'),
(30, '5', 'Active', 'Deactivated', '1', 'Null', '2021/11/13', '08:45:03 AM'),
(31, '4', 'Active', 'Deactivated', '1', 'Null', '2021/11/13', '08:45:05 AM'),
(32, '3', 'Active', 'Deactivated', '1', 'Null', '2021/11/13', '08:45:08 AM'),
(33, '2', 'Active', 'Deactivated', '1', 'Null', '2021/11/13', '08:45:10 AM'),
(34, '1', 'Active', 'Deactivated', '1', 'Null', '2021/11/13', '08:45:13 AM'),
(35, '7', 'Active', 'Deactivated', '1', 'Null', '2021/11/13', '08:45:16 AM'),
(36, '12', 'Active', 'Deactivated', '1', 'Null', '2021/11/13', '08:45:20 AM'),
(37, '6', 'Pending', 'Active', '1', 'Null', '2021/11/13', '08:49:36 AM'),
(38, '8', 'Pending', 'Active', '1', 'Null', '2021/11/13', '08:49:38 AM'),
(39, '9', 'Pending', 'Active', '1', 'Null', '2021/11/13', '08:49:40 AM'),
(40, '9', 'Active', 'Deactivated', '1', 'Null', '2021/11/13', '08:50:45 AM'),
(41, '8', 'Active', 'Deactivated', '1', 'Null', '2021/11/13', '08:50:47 AM'),
(42, '6', 'Active', 'Deactivated', '1', 'Null', '2021/11/13', '08:50:49 AM'),
(43, '10', 'Pending', 'Active', '1', 'Null', '2021/11/13', '08:55:19 AM'),
(44, '11', 'Pending', 'Active', '1', 'Null', '2021/11/13', '08:55:21 AM'),
(45, '13', 'Pending', 'Active', '1', 'Null', '2021/11/13', '08:55:23 AM'),
(46, '13', 'Active', 'Deactivated', '1', 'Null', '2021/11/13', '04:40:31 PM'),
(47, '11', 'Active', 'Deactivated', '1', 'Null', '2021/11/13', '04:40:34 PM'),
(48, '10', 'Active', 'Deactivated', '1', 'Null', '2021/11/13', '04:40:36 PM'),
(49, '15', 'Pending', 'Active', '1', 'Null', '2021/11/13', '04:42:42 PM'),
(50, '14', 'Pending', 'Active', '1', 'Null', '2021/11/13', '04:42:45 PM'),
(51, '12', 'Active', 'Deactivated', '2', 'Null', '2021/11/14', '03:22:09 AM'),
(52, '2', 'Active', 'Deactivated', '2', 'Null', '2021/11/14', '03:50:43 AM');

-- --------------------------------------------------------

--
-- Table structure for table `ha_users`
--

CREATE TABLE `ha_users` (
  `HA_U_ID` bigint(20) UNSIGNED NOT NULL,
  `HA_U_Username` varchar(255) NOT NULL,
  `HA_U_Password` varchar(255) NOT NULL,
  `HA_U_User_Status` varchar(255) NOT NULL,
  `HA_U_First_Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `HA_U_Second_Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `HA_U_Last_Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `HA_U_Last_Login` varchar(255) NOT NULL,
  `HA_U_Login_From_IP` varchar(255) NOT NULL,
  `HA_U_Gender` varchar(255) NOT NULL,
  `HA_U_Birthday` varchar(255) NOT NULL,
  `HA_U_Country` varchar(255) NOT NULL,
  `HA_U_ZIP_Code` varchar(255) NOT NULL,
  `HA_U_Address` varchar(255) NOT NULL,
  `HA_U_Email` varchar(255) NOT NULL,
  `HA_U_Mobile_Number` varchar(255) NOT NULL,
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

INSERT INTO `ha_users` (`HA_U_ID`, `HA_U_Username`, `HA_U_Password`, `HA_U_User_Status`, `HA_U_First_Name`, `HA_U_Second_Name`, `HA_U_Last_Name`, `HA_U_Last_Login`, `HA_U_Login_From_IP`, `HA_U_Gender`, `HA_U_Birthday`, `HA_U_Country`, `HA_U_ZIP_Code`, `HA_U_Address`, `HA_U_Email`, `HA_U_Mobile_Number`, `HA_U_User_Type`, `HA_P_Views`, `HA_U_Sales`, `HA_U_Purchase`, `HA_U_Date_Created`, `HA_U_Time_Created`) VALUES
(1, 'HadyMM', '123', 'Active', 'Hady', 'Muhammed', 'Morsy', '2021/11/13 11:39:15 AM', '::1', 'Male', '1994/12/29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'HadyMM@Gmail.com', '01097579845', 'Employee', '', '', '', '2021/09/15', '08:43:13 PM'),
(2, 'AbdulBasetRS', '123', 'Active', 'AbdulBaset', 'Reda', 'Sayed', '2021/11/14 03:53:23 AM', '127.0.0.1', 'Male', '1994/12/29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'AbdulBasetRS@Gmail.com', '01097579845', 'Employee', '', '', '', '2021/09/15', '08:43:13 PM'),
(3, 'FatmaMM', '123', 'Pending', 'Fatma', 'Muhammed', 'Morsy', '2021/10/03 06:00:25 AM', '', 'Female', '1994/12/29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'FatmaMM@Gmail.com', '01097579845', 'Seller', '3051', '5400', '0', '2021/09/15', '08:43:13 PM'),
(4, 'SayedMM', '123', 'Suspended', 'Sayed', 'Muhammed', 'Morsy', '2021/11/11 08:20:11 PM', '127.0.0.1', 'Female', '1994-12-29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'SayedMM@Gmail.com', '01097579845', 'Client', '', '', '', '2021/09/15', '08:43:13 PM'),
(5, 'hadymohamed', '123', 'Pending', 'Muhammed', 'Muhammed', 'Morsy', '2021/09/28 04:12:05 PM', '', 'Male', '1994-12-29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'MuhammedMM@Gmail.com', '01097579845', 'Client', '', '', '', '2021/09/15', '08:43:13 PM'),
(6, 'RedaSH', '123', 'Pending', 'Reda', 'Sayed', 'Hussien', '2021/09/28 04:12:05 PM', '', 'Male', '1994/12/29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'RedaSH@Gmail.com', '01097579845', 'Client', '', '', '', '2021/09/15', '08:43:13 PM'),
(7, 'MahmoudME', '123', 'Deactivated', 'Mahmoud', 'Mosad', 'El-Adawy', '2021/09/28 04:12:05 PM', '', 'Male', '1994/12/29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'MahmoudME@Gmail.com', '01097579845', 'Client', '', '', '1200', '2021/09/15', '08:45:58 PM'),
(8, 'MariamMM', '123', 'Pending', 'Mariam', 'Muhammed', 'Morsy', '2021/09/28 04:12:05 PM', '', 'Female', '1994/12/29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'MariamMM@Gmail.com', '01097579845', 'Seller', '1516457', '78500', '0', '2021/09/18', '08:43:13 PM'),
(9, 'ClientDemo', '123', 'Pending', 'Client', 'Demo', 'Demo', '2021/11/13 12:06:29 AM', '::1', 'Male', '1994-12-29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'Client_Demo@Gmail.com', '01097579845', 'Client', '', '', '', '2021/09/15', '08:43:13 PM'),
(10, 'SellerDemo', '123', 'Deactivated', 'Seller', 'Demo', 'Demo', '2021/10/01 08:23:45 AM', '', 'Female', '1994/12/29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'Seller_Demo@Gmail.com', '01097579845', 'Seller', '0', '0', '0', '2021/09/15', '08:43:13 PM'),
(11, 'RamdanBM', '123', 'Pending', 'Ramdan', 'Pablo', 'Morsy', '2021/09/29 01:44:34 PM', '', 'Male', '1994-12-29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'SayedMM@Gmail.com', '01097579845', 'Client', '0', '0', '0', '2021/09/15', '08:43:13 PM'),
(12, 'AhmedEA', '123', 'Active', 'Ahmed', 'El-Gaml', 'Ahmed', '2021/11/05 04:09:05 PM', '', 'Male', '1994/12/29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'AhmedElGaml@Gmail.com', '01097579845', 'Client', '0', '0', '0', '2021/09/15', '08:43:13 PM'),
(13, 'HamzaMM', '123', 'Pending', 'Hamza', 'Muhammad', 'Mahmoud', '2021/09/29 01:44:34 PM', '', 'Male', '1994/12/29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'HamzaMMMuhammad@Gmail.com', '01097579845', 'Client', '0', '0', '0', '2021/09/15', '08:43:13 PM'),
(14, 'AbdulrahmanMM', '123', 'Pending', 'Abdulrahman', 'Muhammad', 'Mahmoud', '2021/09/29 01:44:34 PM', '', 'Male', '1994/12/29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'AbdulrahmanMuhammad@Gmail.com', '01097579845', 'Client', '0', '0', '0', '2021/09/15', '08:43:13 PM'),
(15, 'GlalMM', '123', 'Pending', 'Glal', 'Muhammad', 'Mahmoud', '2021/09/29 01:44:34 PM', '', 'Male', '1994/12/29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'Glal-Muhammad@Gmail.com', '01097579845', 'Client', '0', '0', '0', '2021/09/15', '08:43:13 PM'),
(16, 'DlalMM', '123', 'Pending', 'Dlal', 'Muhammad', 'Mahmoud', '2021/09/29 01:44:34 PM', '', 'Female', '1994/12/29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'Dlal-Muhammad@Gmail.com', '01097579845', 'Client', '0', '0', '0', '2021/09/15', '08:43:13 PM'),
(17, 'SalmaMM', '123', 'Active', 'Salma', 'Muhammad', 'Muhammad', '2021/11/08 07:12:54 PM', '', 'Female', '1994/12/29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'SalmaMM@Gmail.com', '01097579845', 'Employee', '', '', '', '2021/09/15', '08:43:13 PM'),
(18, 'UndertaikerMM', '123', 'Pending', 'UnderTaker', 'Muhammad', 'Muhammad', '2021/11/02 02:16:00 PM', '', 'Male', '1994/12/29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'UndertaikerMM@Gmail.com', '01097579845', 'Employee', '', '', '', '2021/09/15', '08:43:13 PM'),
(19, 'SaraMM', '123', 'Pending', 'AbdulBaset', 'Muhammad', 'Muhammad', '2021/11/02 02:16:00 PM', '', 'Male', '1994/12/29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'SaraMM@Gmail.com', '01097579845', 'Employee', '', '', '', '2021/09/15', '08:43:13 PM'),
(20, 'MernaRS', '123', 'Pending', 'Merna', 'Reda', 'Sayed', '2021/11/02 02:16:00 PM', '', 'Male', '1994/12/29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'MernaRS@Gmail.com', '01097579845', 'Employee', '', '', '', '2021/09/15', '08:43:13 PM'),
(21, 'SayedHH', '123', 'Deactivated', 'AbdulBaset', 'Hady', 'Hyidr', '2021/11/02 02:16:00 PM', '', 'Male', '1994/12/29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'SayedHH@Gmail.com', '01097579845', 'Employee', '', '', '', '2021/09/15', '08:43:13 PM'),
(22, 'HadyHH', '123', 'Active', 'Hady', 'Haydir', 'Morsy', '2021/11/05 06:25:10 PM', '', 'Male', '1994/12/29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'HadyMM@Gmail.com', '01097579845', 'Employee', '', '', '', '2021/09/15', '08:43:13 PM'),
(23, 'AhmedHM', '123', 'Pending', 'Hady', 'Hady', 'Morsy', '2021/10/31 06:47:25 PM', '', 'Male', '1994/12/29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'HadyMM@Gmail.com', '01097579845', 'Employee', '', '', '', '2021/09/15', '08:43:13 PM'),
(24, 'TawfikHM', '123', 'Pending', 'Tawfik', 'Hady', 'Muhaamad', '2021/11/02 02:16:00 PM', '', 'Male', '1994/12/29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'AbdulBasetRS@Gmail.com', '01097579845', 'Employee', '', '', '', '2021/09/15', '08:43:13 PM'),
(25, 'ZaabolaMM', '123', 'Pending', 'Zaabola', 'Muhammed', 'Morsy', '2021/10/31 06:47:25 PM', '', 'Male', '1994/12/29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'HadyMM@Gmail.com', '01097579845', 'Employee', '', '', '', '2021/09/15', '08:43:13 PM'),
(26, 'HussienMM', '123', 'Pending', 'Hussien', 'Muhammed', 'Morsy', '2021/10/31 06:47:25 PM', '', 'Male', '1994/12/29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'HadyMM@Gmail.com', '01097579845', 'Employee', '', '', '', '2021/09/15', '08:43:13 PM'),
(27, 'HassanMM', '123', 'Pending', 'Zaabola', 'Muhammed', 'Morsy', '2021/10/31 06:47:25 PM', '', 'Male', '1994/12/29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'HadyMM@Gmail.com', '01097579845', 'Employee', '', '', '', '2021/09/15', '08:43:13 PM'),
(28, 'Demo1', '123', 'Pending', 'Hady', 'Muhammed', 'Morsy', '2021/10/31 06:47:25 PM', '', 'Male', '1994/12/29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'HadyMM@Gmail.com', '01097579845', 'Employee', '', '', '', '2021/09/15', '08:43:13 PM'),
(29, 'Demo2', '123', 'Pending', 'Hady', 'Muhammed', 'Morsy', '2021/10/31 06:47:25 PM', '', 'Male', '1994/12/29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'HadyMM@Gmail.com', '01097579845', 'Employee', '', '', '', '2021/09/15', '08:43:13 PM'),
(30, 'Demo3', '123', 'Pending', 'Hady', 'Muhammed', 'Morsy', '2021/10/31 06:47:25 PM', '', 'Male', '1994/12/29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'HadyMM@Gmail.com', '01097579845', 'Employee', '', '', '', '2021/09/15', '08:43:13 PM'),
(31, 'Demo4', '123', 'Pending', 'Hady', 'Muhammed', 'Morsy', '2021/10/31 06:47:25 PM', '', 'Male', '1994/12/29', 'Egypt', '12651', '13 st ard el hdad from imbaba', 'HadyMM@Gmail.com', '01097579845', 'Employee', '', '', '', '2021/09/15', '08:43:13 PM');

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

-- --------------------------------------------------------

--
-- Table structure for table `ha_user_status_activities`
--

CREATE TABLE `ha_user_status_activities` (
  `HA_U_S_A_ID` bigint(20) UNSIGNED NOT NULL,
  `HA_U_S_A_User_ID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HA_U_S_A_Current_Status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HA_U_S_A_New_Status` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HA_U_S_A_Action_From_User_ID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HA_U_S_A_Status_Reason` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HA_U_S_A_Date_Created` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HA_U_S_A_Time_Created` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `ha_user_status_activities`
--

INSERT INTO `ha_user_status_activities` (`HA_U_S_A_ID`, `HA_U_S_A_User_ID`, `HA_U_S_A_Current_Status`, `HA_U_S_A_New_Status`, `HA_U_S_A_Action_From_User_ID`, `HA_U_S_A_Status_Reason`, `HA_U_S_A_Date_Created`, `HA_U_S_A_Time_Created`) VALUES
(1, '13', 'Pending', 'Active', '2', 'Null', '2021/10/18', '04:26:39 AM'),
(2, '14', 'Pending', 'Deactivated', '2', 'Null', '2021/10/18', '04:30:45 AM'),
(3, '7', 'Pending', 'Deactivated', '2', 'Null', '2021/10/18', '04:36:23 AM'),
(4, '12', 'Pending', 'Active', '2', 'Null', '2021/10/18', '04:53:13 AM'),
(5, '12', 'Active', 'Deactivated', '2', 'Null', '2021/10/18', '04:53:41 AM'),
(6, '13', 'Active', 'Deactivated', '2', 'Null', '2021/10/18', '04:54:37 AM'),
(7, '5', 'Pending', 'Active', '2', 'Null', '2021/10/18', '04:55:05 AM'),
(8, '4', 'Pending', 'Active', '1', 'Null', '2021/10/18', '08:00:35 AM'),
(9, '16', 'Pending', 'Active', '1', 'Null', '2021/10/18', '08:01:07 AM'),
(10, '6', 'Suspended', 'Deactivated', '1', 'Null', '2021/10/18', '01:38:22 PM'),
(11, '15', 'Pending', 'Active', '1', 'Null', '2021/10/18', '06:38:45 PM'),
(12, '15', 'Active', 'Deactivated', '1', 'Null', '2021/10/18', '06:38:55 PM'),
(159, '2', 'Pending', 'Deactivated', '1', 'Null', '2021/11/02', '06:23:38 PM'),
(160, '1', 'Pending', 'Active', '1', 'Null', '2021/11/02', '06:23:59 PM'),
(161, '8', 'Pending', 'Active', '1', 'Null', '2021/11/02', '06:24:35 PM'),
(162, '8', 'Active', 'Deactivated', '1', 'Null', '2021/11/02', '06:24:39 PM'),
(163, '16', 'Pending', 'Deactivated', '1', 'Null', '2021/11/02', '06:24:57 PM'),
(164, '6', 'Pending', 'Active', '1', 'Null', '2021/11/02', '06:25:23 PM'),
(165, '6', 'Active', 'Deactivated', '1', 'Null', '2021/11/02', '06:25:33 PM'),
(166, '5', 'Pending', 'Active', '2', 'Null', '2021/11/03', '07:49:20 PM'),
(167, '5', 'Active', 'Deactivated', '2', 'Null', '2021/11/03', '07:49:26 PM'),
(168, '13', 'Pending', 'Active', '2', 'Null', '2021/11/03', '07:49:30 PM'),
(169, '10', 'Pending', 'Active', '2', 'Null', '2021/11/03', '07:49:40 PM'),
(170, '22', 'Pending', 'Active', '2', 'Null', '2021/11/03', '07:49:52 PM'),
(171, '17', 'Pending', 'Active', '2', 'Null', '2021/11/05', '12:10:17 AM'),
(172, '18', 'Pending', 'Active', '2', 'Null', '2021/11/05', '12:13:06 AM'),
(173, '19', 'Pending', 'Active', '2', 'Null', '2021/11/05', '12:13:53 AM'),
(174, '20', 'Pending', 'Active', '2', 'Null', '2021/11/05', '12:16:20 AM'),
(175, '23', 'Pending', 'Active', '2', 'Null', '2021/11/05', '12:25:01 AM'),
(176, '21', 'Pending', 'Active', '2', 'Null', '2021/11/05', '12:26:04 AM'),
(177, '28', 'Pending', 'Active', '2', 'Null', '2021/11/05', '12:27:08 AM'),
(178, '31', 'Pending', 'Active', '2', 'Null', '2021/11/05', '12:28:27 AM'),
(179, '29', 'Pending', 'Active', '2', 'Null', '2021/11/05', '12:28:37 AM'),
(180, '30', 'Pending', 'Active', '2', 'Null', '2021/11/05', '12:29:31 AM'),
(181, '27', 'Pending', 'Active', '2', 'Null', '2021/11/05', '12:29:39 AM'),
(182, '19', 'Pending', 'Active', '2', 'Null', '2021/11/05', '12:34:49 AM'),
(183, '30', 'Pending', 'Active', '2', 'Null', '2021/11/05', '12:35:34 AM'),
(184, '22', 'Pending', 'Active', '2', 'Null', '2021/11/05', '12:38:41 AM'),
(185, '31', 'Pending', 'Active', '2', 'Null', '2021/11/05', '12:38:49 AM'),
(186, '29', 'Pending', 'Active', '2', 'Null', '2021/11/05', '12:39:13 AM'),
(187, '28', 'Pending', 'Active', '2', 'Null', '2021/11/05', '12:39:24 AM'),
(188, '27', 'Pending', 'Active', '2', 'Null', '2021/11/05', '12:39:29 AM'),
(189, '26', 'Pending', 'Active', '2', 'Null', '2021/11/05', '12:41:20 AM'),
(190, '25', 'Pending', 'Active', '2', 'Null', '2021/11/05', '12:41:31 AM'),
(191, '24', 'Pending', 'Active', '2', 'Null', '2021/11/05', '12:43:06 AM'),
(192, '17', 'Pending', 'Active', '2', 'Null', '2021/11/05', '12:44:10 AM'),
(193, '28', 'Active', 'Deactivated', '2', 'Null', '2021/11/05', '12:49:09 AM'),
(194, '24', 'Active', 'Deactivated', '2', 'Null', '2021/11/05', '12:49:27 AM'),
(195, '31', 'Active', 'Deactivated', '2', 'Null', '2021/11/05', '12:49:44 AM'),
(196, '7', 'Pending', 'Active', '2', 'Null', '2021/11/05', '01:17:47 AM'),
(197, '9', 'Pending', 'Active', '2', 'Null', '2021/11/05', '01:18:30 AM'),
(198, '11', 'Pending', 'Active', '2', 'Null', '2021/11/05', '01:21:39 AM'),
(199, '11', 'Active', 'Deactivated', '2', 'Null', '2021/11/05', '01:22:16 AM'),
(200, '9', 'Active', 'Deactivated', '2', 'Null', '2021/11/05', '01:22:31 AM'),
(201, '14', 'Pending', 'Active', '2', 'Null', '2021/11/05', '01:22:40 AM'),
(202, '8', 'Pending', 'Active', '2', 'Null', '2021/11/05', '01:24:44 AM'),
(203, '8', 'Active', 'Deactivated', '2', 'Null', '2021/11/05', '01:24:54 AM'),
(204, '10', 'Pending', 'Deactivated', '1', 'Null', '2021/11/05', '05:56:07 AM'),
(205, '21', 'Pending', 'Active', '1', 'Null', '2021/11/05', '06:54:24 AM'),
(206, '21', 'Active', 'Deactivated', '1', 'Null', '2021/11/05', '06:54:34 AM'),
(207, '12', 'Pending', 'Active', '1', 'Null', '2021/11/05', '03:08:12 PM'),
(208, '22', 'Pending', 'Active', '1', 'Null', '2021/11/05', '03:13:02 PM'),
(209, '1', 'Pending', 'Active', '1', 'Null', '2021/11/05', '03:14:46 PM'),
(210, '2', 'Pending', 'Active', '1', 'Null', '2021/11/05', '03:14:50 PM'),
(211, '7', 'Pending', 'Active', '1', 'Null', '2021/11/05', '05:23:36 PM'),
(212, '7', 'Active', 'Deactivated', '1', 'Null', '2021/11/05', '05:23:46 PM'),
(213, '17', 'Pending', 'Active', '2', 'Null', '2021/11/08', '06:09:38 PM'),
(214, '', '', 'Active', '2', 'Null', '2021/11/08', '07:03:40 PM'),
(215, '', '', 'Active', '2', 'Null', '2021/11/08', '07:03:42 PM'),
(216, '', '', 'Active', '2', 'Null', '2021/11/08', '07:03:42 PM');

-- --------------------------------------------------------

--
-- Table structure for table `ha_wishlist`
--

CREATE TABLE `ha_wishlist` (
  `HA_W_ID` bigint(20) UNSIGNED NOT NULL,
  `HA_W_Status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HA_W_User_ID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HA_W_Product_ID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HA_W_Date_Created` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HA_W_Time_Created` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ha_wishlist`
--

INSERT INTO `ha_wishlist` (`HA_W_ID`, `HA_W_Status`, `HA_W_User_ID`, `HA_W_Product_ID`, `HA_W_Date_Created`, `HA_W_Time_Created`) VALUES
(6, 'Active', '2', '2', '2021/11/14', '03:49:54 AM'),
(7, 'Deleted', '2', '12', '2021/11/10', '11:50:31 AM'),
(8, 'Active', '2', '4', '2021/11/14', '03:50:03 AM'),
(9, 'Deleted', '2', '1', '2021/11/11', '07:23:29 PM'),
(10, 'Active', '1', '4', '2021/11/14', '03:50:03 AM'),
(11, 'Deleted', '1', '12', '2021/11/10', '11:50:31 AM'),
(12, 'Active', '', '2', '2021/11/14', '03:49:54 AM'),
(13, 'Deleted', '', '12', '2021/11/10', '11:50:31 AM'),
(14, 'Deleted', '', '3', '2021/11/13', '09:01:31 PM'),
(15, 'Deleted', '2', '11', '2021/11/13', '04:30:02 PM'),
(16, 'Deleted', '2', '13', '2021/11/13', '05:13:17 PM'),
(17, 'Deleted', '1', '13', '2021/11/13', '05:13:17 PM'),
(18, 'Deleted', '1', '11', '2021/11/13', '04:30:02 PM'),
(19, 'Deleted', '1', '10', '2021/11/13', '02:12:08 PM'),
(20, 'Deleted', '', '11', '2021/11/13', '04:30:02 PM'),
(21, 'Deleted', '1', '3', '2021/11/13', '09:01:31 PM'),
(22, 'Active', '1', '2', '2021/11/14', '03:49:54 AM'),
(23, 'Active', '2', '3', '2021/11/14', '03:49:59 AM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ha_cart`
--
ALTER TABLE `ha_cart`
  ADD UNIQUE KEY `HA_C_ID` (`HA_C_ID`);

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
-- Indexes for table `ha_product_status_activities`
--
ALTER TABLE `ha_product_status_activities`
  ADD UNIQUE KEY `HA_P_S_A_ID` (`HA_P_S_A_ID`);

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
-- Indexes for table `ha_user_status_activities`
--
ALTER TABLE `ha_user_status_activities`
  ADD UNIQUE KEY `HA_U_S_A_ID` (`HA_U_S_A_ID`);

--
-- Indexes for table `ha_wishlist`
--
ALTER TABLE `ha_wishlist`
  ADD UNIQUE KEY `HA_W_ID` (`HA_W_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ha_cart`
--
ALTER TABLE `ha_cart`
  MODIFY `HA_C_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ha_category_list`
--
ALTER TABLE `ha_category_list`
  MODIFY `HA_C_L_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `ha_products`
--
ALTER TABLE `ha_products`
  MODIFY `HA_P_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ha_product_status_activities`
--
ALTER TABLE `ha_product_status_activities`
  MODIFY `HA_P_S_A_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `ha_users`
--
ALTER TABLE `ha_users`
  MODIFY `HA_U_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `ha_user_permission`
--
ALTER TABLE `ha_user_permission`
  MODIFY `HA_U_P_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ha_user_status_activities`
--
ALTER TABLE `ha_user_status_activities`
  MODIFY `HA_U_S_A_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `ha_wishlist`
--
ALTER TABLE `ha_wishlist`
  MODIFY `HA_W_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
