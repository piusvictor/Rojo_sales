-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 10:35 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serialize_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `delivery_order`
--

CREATE TABLE `delivery_order` (
  `id` int(11) NOT NULL,
  `delivery_no` varchar(20) NOT NULL,
  `delivery_details` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_order`
--

INSERT INTO `delivery_order` (`id`, `delivery_no`, `delivery_details`, `created_at`) VALUES
(1, 'R-DO-0038', 'a:2:{s:7:\"salesno\";s:9:\"R-DO-0038\";s:7:\"details\";O:8:\"stdClass\":12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:1:{i:0;s:19:\"Galaxy (270x70x2)cm\";}s:9:\"item_unit\";a:1:{i:0;s:4:\"slab\";}s:8:\"quantity\";a:1:{i:0;s:1:\"1\";}s:5:\"price\";a:1:{i:0;s:6:\"200000\";}s:5:\"total\";a:1:{i:0;s:6:\"200000\";}s:9:\"sub_total\";s:6:\"200000\";s:8:\"discount\";s:1:\"0\";s:14:\"discount_total\";s:6:\"200000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:11:\"hjhjhhkjhkj\";}}', '2020-11-25 20:07:15'),
(2, 'R-DO-0039', 'a:2:{s:7:\"salesno\";s:9:\"R-DO-0039\";s:7:\"details\";O:8:\"stdClass\":12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:1:{i:0;s:19:\"Galaxy (290x70x2)cm\";}s:9:\"item_unit\";a:1:{i:0;s:4:\"slab\";}s:8:\"quantity\";a:1:{i:0;s:1:\"2\";}s:5:\"price\";a:1:{i:0;s:6:\"300000\";}s:5:\"total\";a:1:{i:0;s:6:\"600000\";}s:9:\"sub_total\";s:6:\"600000\";s:8:\"discount\";s:5:\"60000\";s:14:\"discount_total\";s:6:\"540000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:20:\"Six Hundred Thousand\";}}', '2020-12-01 13:11:28'),
(3, 'R-DO-0040', 'a:2:{s:7:\"salesno\";s:9:\"R-DO-0040\";s:7:\"details\";O:8:\"stdClass\":12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:13:\"Daizy Lwetaka\";s:7:\"address\";s:6:\"Tegeta\";s:8:\"location\";s:6:\"Madale\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:1:{i:0;s:19:\"Galaxy (290x70x2)cm\";}s:9:\"item_unit\";a:1:{i:0;s:4:\"slab\";}s:8:\"quantity\";a:1:{i:0;s:1:\"1\";}s:5:\"price\";a:1:{i:0;s:6:\"300000\";}s:5:\"total\";a:1:{i:0;s:6:\"300000\";}s:9:\"sub_total\";s:6:\"300000\";s:8:\"discount\";s:5:\"15000\";s:14:\"discount_total\";s:6:\"285000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:32:\"Two Hundred Eighty five Thousand\";}}', '2020-12-02 08:27:39');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `rate` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `unit`, `rate`, `created_at`) VALUES
(1, 'Galaxy(270 * 168 * 7)cm', 'slab', 200000, '2020-12-09 06:08:48');

-- --------------------------------------------------------

--
-- Table structure for table `products_store`
--

CREATE TABLE `products_store` (
  `id` int(11) NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_store`
--

INSERT INTO `products_store` (`id`, `product_id`, `quantity`, `created_at`) VALUES
(1, 1, 10, '2020-12-09 06:08:48');

-- --------------------------------------------------------

--
-- Table structure for table `product_unit`
--

CREATE TABLE `product_unit` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_unit`
--

INSERT INTO `product_unit` (`id`, `name`) VALUES
(1, 'slab'),
(3, 'm2'),
(4, 'box');

-- --------------------------------------------------------

--
-- Table structure for table `proforma_invoice`
--

CREATE TABLE `proforma_invoice` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `proforma_details` mediumtext NOT NULL,
  `created_At` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proforma_invoice`
--

INSERT INTO `proforma_invoice` (`id`, `customer_name`, `proforma_details`, `created_At`) VALUES
(1, 'Pius Victor', 'a:12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:19:\"Galaxy (270x70x2)cm\";i:1;s:19:\"Galaxy (290x70x2)cm\";}s:9:\"item_unit\";a:2:{i:0;s:4:\"slab\";i:1;s:4:\"slab\";}s:8:\"quantity\";a:2:{i:0;s:1:\"3\";i:1;s:1:\"2\";}s:5:\"price\";a:2:{i:0;s:6:\"200000\";i:1;s:6:\"300000\";}s:5:\"total\";a:2:{i:0;s:6:\"600000\";i:1;s:6:\"600000\";}s:9:\"sub_total\";s:7:\"1200000\";s:8:\"discount\";s:6:\"120000\";s:14:\"discount_total\";s:7:\"1080000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:31:\"One Million and Eighty Thousand\";}', '2020-11-25 12:51:27'),
(2, 'Pius Victor', 'a:12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:19:\"Galaxy (270x70x2)cm\";i:1;s:19:\"Galaxy (290x70x2)cm\";}s:9:\"item_unit\";a:2:{i:0;s:4:\"slab\";i:1;s:4:\"slab\";}s:8:\"quantity\";a:2:{i:0;s:1:\"3\";i:1;s:1:\"2\";}s:5:\"price\";a:2:{i:0;s:6:\"200000\";i:1;s:6:\"300000\";}s:5:\"total\";a:2:{i:0;s:6:\"600000\";i:1;s:6:\"600000\";}s:9:\"sub_total\";s:7:\"1200000\";s:8:\"discount\";s:6:\"120000\";s:14:\"discount_total\";s:7:\"1080000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:31:\"One Million and Eighty Thousand\";}', '2020-11-25 13:01:45'),
(3, 'Pius Victor', 'a:12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:3:{i:0;s:19:\"Galaxy (290x70x2)cm\";i:1;s:24:\"Galaxy(270 * 168 * 12)cm\";i:2;s:22:\"Galaxy(300 x 75 x62)cm\";}s:9:\"item_unit\";a:3:{i:0;s:4:\"slab\";i:1;s:2:\"pc\";i:2;s:2:\"pc\";}s:8:\"quantity\";a:3:{i:0;s:1:\"1\";i:1;s:1:\"1\";i:2;s:2:\"70\";}s:5:\"price\";a:3:{i:0;s:6:\"300000\";i:1;s:6:\"350000\";i:2;s:6:\"230000\";}s:5:\"total\";a:3:{i:0;s:6:\"300000\";i:1;s:6:\"350000\";i:2;s:8:\"16100000\";}s:9:\"sub_total\";s:8:\"16750000\";s:8:\"discount\";s:7:\"1680000\";s:14:\"discount_total\";s:8:\"15070000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:19:\"gfgfgfggfgfgfgfggfg\";}', '2020-12-01 13:31:44'),
(4, 'Daizy Lwetaka', 'a:12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:13:\"Daizy Lwetaka\";s:7:\"address\";s:6:\"Tegeta\";s:8:\"location\";s:6:\"Madale\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:1:{i:0;s:19:\"Galaxy (290x70x2)cm\";}s:9:\"item_unit\";a:1:{i:0;s:4:\"slab\";}s:8:\"quantity\";a:1:{i:0;s:1:\"1\";}s:5:\"price\";a:1:{i:0;s:6:\"300000\";}s:5:\"total\";a:1:{i:0;s:6:\"300000\";}s:9:\"sub_total\";s:6:\"300000\";s:8:\"discount\";s:5:\"15000\";s:14:\"discount_total\";s:6:\"285000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:32:\"Two Hundred Eighty five Thousand\";}', '2020-12-02 08:15:09'),
(5, 'Pius Victor', 'a:12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:1:{i:0;s:22:\"Galaxy(300 x 75 x66)cm\";}s:9:\"item_unit\";a:1:{i:0;s:4:\"slab\";}s:8:\"quantity\";a:1:{i:0;s:1:\"3\";}s:5:\"price\";a:1:{i:0;s:6:\"200000\";}s:5:\"total\";a:1:{i:0;s:6:\"600000\";}s:9:\"sub_total\";s:6:\"600000\";s:8:\"discount\";s:1:\"0\";s:14:\"discount_total\";s:6:\"600000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:10:\"hghghghghj\";}', '2020-12-08 16:18:06'),
(6, 'Pius Victor', 'a:12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:1:{i:0;s:22:\"Galaxy(300 x 75 x66)cm\";}s:9:\"item_unit\";a:1:{i:0;s:4:\"slab\";}s:8:\"quantity\";a:1:{i:0;s:1:\"3\";}s:5:\"price\";a:1:{i:0;s:6:\"200000\";}s:5:\"total\";a:1:{i:0;s:6:\"600000\";}s:9:\"sub_total\";s:6:\"600000\";s:8:\"discount\";s:5:\"60000\";s:14:\"discount_total\";s:6:\"540000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:10:\"hghghghghj\";}', '2020-12-08 16:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `purchase_details` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`id`, `customer_name`, `purchase_details`, `created_at`) VALUES
(1, 'Pius Victor', 'a:12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:19:\"Galaxy (270x70x2)cm\";i:1;s:19:\"Galaxy (290x70x2)cm\";}s:9:\"item_unit\";a:2:{i:0;s:4:\"slab\";i:1;s:4:\"slab\";}s:8:\"quantity\";a:2:{i:0;s:1:\"1\";i:1;s:1:\"3\";}s:5:\"price\";a:2:{i:0;s:4:\"2000\";i:1;s:4:\"3000\";}s:5:\"total\";a:2:{i:0;s:4:\"2000\";i:1;s:4:\"9000\";}s:9:\"sub_total\";s:5:\"11000\";s:8:\"discount\";s:3:\"300\";s:14:\"discount_total\";s:5:\"11000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:6:\"Dollar\";s:15:\"amount_in_words\";s:27:\"Four Thousand Seven Hundred\";}', '2020-11-25 09:16:04'),
(2, 'Pius Victor', 'a:12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:19:\"Galaxy (270x70x2)cm\";i:1;s:19:\"Galaxy (290x70x2)cm\";}s:9:\"item_unit\";a:2:{i:0;s:4:\"slab\";i:1;s:4:\"slab\";}s:8:\"quantity\";a:2:{i:0;s:1:\"3\";i:1;s:1:\"4\";}s:5:\"price\";a:2:{i:0;s:4:\"2000\";i:1;s:4:\"3000\";}s:5:\"total\";a:2:{i:0;s:4:\"6000\";i:1;s:5:\"12000\";}s:9:\"sub_total\";s:5:\"18000\";s:8:\"discount\";s:4:\"3000\";s:14:\"discount_total\";s:5:\"15000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:6:\"Dollar\";s:15:\"amount_in_words\";s:0:\"\";}', '2020-11-25 09:57:49'),
(3, 'Pius Victor', 'a:12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:1:{i:0;s:19:\"Galaxy (270x70x2)cm\";}s:9:\"item_unit\";a:1:{i:0;s:2:\"m2\";}s:8:\"quantity\";a:1:{i:0;s:1:\"1\";}s:5:\"price\";a:1:{i:0;s:4:\"2000\";}s:5:\"total\";a:1:{i:0;s:4:\"2000\";}s:9:\"sub_total\";s:4:\"2000\";s:8:\"discount\";s:1:\"0\";s:14:\"discount_total\";s:4:\"2000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:6:\"Dollar\";s:15:\"amount_in_words\";s:12:\"Two Thousand\";}', '2020-12-02 16:53:00'),
(4, '', 'a:12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:0:\"\";s:7:\"address\";s:0:\"\";s:8:\"location\";s:0:\"\";s:5:\"phone\";s:0:\"\";}s:12:\"item_details\";a:1:{i:0;s:5:\"msasa\";}s:9:\"item_unit\";a:1:{i:0;s:2:\"pc\";}s:8:\"quantity\";a:1:{i:0;s:1:\"1\";}s:5:\"price\";a:1:{i:0;s:6:\"200000\";}s:5:\"total\";a:1:{i:0;s:6:\"200000\";}s:9:\"sub_total\";s:6:\"200000\";s:8:\"discount\";s:1:\"0\";s:14:\"discount_total\";s:6:\"200000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:20:\"Two hundred Thousand\";}', '2020-12-02 16:55:56'),
(5, 'Pius Victor', 'a:12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:1:{i:0;s:19:\"Galaxy (270x70x2)cm\";}s:9:\"item_unit\";a:1:{i:0;s:2:\"m2\";}s:8:\"quantity\";a:1:{i:0;s:1:\"1\";}s:5:\"price\";a:1:{i:0;s:4:\"2000\";}s:5:\"total\";a:1:{i:0;s:4:\"2000\";}s:9:\"sub_total\";s:4:\"2000\";s:8:\"discount\";s:1:\"0\";s:14:\"discount_total\";s:4:\"2000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:12:\"Two Thousand\";}', '2020-12-07 10:24:09'),
(6, 'Pius Victor', 'a:12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:1:{i:0;s:19:\"Galaxy (270x70x2)cm\";}s:9:\"item_unit\";a:1:{i:0;s:2:\"m2\";}s:8:\"quantity\";a:1:{i:0;s:1:\"1\";}s:5:\"price\";a:1:{i:0;s:4:\"2000\";}s:5:\"total\";a:1:{i:0;s:4:\"2000\";}s:9:\"sub_total\";s:4:\"2000\";s:8:\"discount\";s:3:\"200\";s:14:\"discount_total\";s:4:\"1800\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:6:\"Dollar\";s:15:\"amount_in_words\";s:30:\"One Thousand and Eight Hundred\";}', '2020-12-07 10:29:27'),
(7, 'Pius Victor', 'a:12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:1:{i:0;s:19:\"Galaxy (270x70x2)cm\";}s:9:\"item_unit\";a:1:{i:0;s:2:\"m2\";}s:8:\"quantity\";a:1:{i:0;s:1:\"1\";}s:5:\"price\";a:1:{i:0;s:4:\"2000\";}s:5:\"total\";a:1:{i:0;s:4:\"2000\";}s:9:\"sub_total\";s:4:\"2000\";s:8:\"discount\";s:1:\"0\";s:14:\"discount_total\";s:4:\"2000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:4:\"jjjj\";}', '2020-12-07 10:31:28'),
(8, '', 'a:12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:0:\"\";s:7:\"address\";s:0:\"\";s:8:\"location\";s:0:\"\";s:5:\"phone\";s:0:\"\";}s:12:\"item_details\";a:1:{i:0;s:19:\"Galaxy (270x70x2)cm\";}s:9:\"item_unit\";a:1:{i:0;s:2:\"m2\";}s:8:\"quantity\";a:1:{i:0;s:1:\"1\";}s:5:\"price\";a:1:{i:0;s:4:\"2000\";}s:5:\"total\";a:1:{i:0;s:4:\"2000\";}s:9:\"sub_total\";s:4:\"2000\";s:8:\"discount\";s:1:\"0\";s:14:\"discount_total\";s:4:\"2000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:6:\"Dollar\";s:15:\"amount_in_words\";s:3:\"ass\";}', '2020-12-07 10:32:19');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_products`
--

CREATE TABLE `purchase_products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `rate` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_products`
--

INSERT INTO `purchase_products` (`id`, `product_name`, `unit`, `rate`, `created_at`) VALUES
(1, 'Galaxy (270x70x2)cm', 'm2', 2000, '2020-11-22 13:24:50'),
(2, 'Galaxy (290x70x2)cm', 'slab', 3500, '2020-11-22 13:24:50'),
(5, 'Galaxy(300 x 75 x60)cm ', 'pc', 2500, '2020-12-02 16:44:26'),
(6, 'msasa', 'pc', 200000, '2020-12-02 16:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `sales_details` mediumtext NOT NULL,
  `proforma_id` int(11) NOT NULL DEFAULT '0',
  `created_At` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`id`, `customer_name`, `street`, `location`, `sales_details`, `proforma_id`, `created_At`) VALUES
(3, 'Pius Victor', 'Mbezi', 'luis', 'a:11:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:1:{i:0;s:22:\"galaxy(270 * 65 * 3)cm\";}s:8:\"quantity\";a:1:{i:0;s:1:\"1\";}s:5:\"price\";a:1:{i:0;s:3:\"200\";}s:5:\"total\";a:1:{i:0;s:3:\"200\";}s:9:\"sub_total\";s:3:\"200\";s:8:\"discount\";i:2000;s:14:\"discount_total\";i:0;s:3:\"vat\";i:0;s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:11:\"ggjgjgjhghj\";}', 0, '2020-11-22 09:55:07'),
(4, 'Tasiana Castor', 'Tabata', 'Segerea', 'a:11:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:14:\"Tasiana Castor\";s:7:\"address\";s:6:\"Tabata\";s:8:\"location\";s:7:\"Segerea\";s:5:\"phone\";s:13:\"+255716566563\";}s:12:\"item_details\";a:2:{i:0;s:22:\"galaxy(270 * 65 * 3)cm\";i:1;s:22:\"galaxy(280 * 67 * 4)cm\";}s:8:\"quantity\";a:2:{i:0;s:1:\"4\";i:1;s:1:\"4\";}s:5:\"price\";a:2:{i:0;s:3:\"200\";i:1;s:3:\"200\";}s:5:\"total\";a:2:{i:0;s:3:\"800\";i:1;s:3:\"800\";}s:9:\"sub_total\";s:5:\"1,600\";s:8:\"discount\";i:2000;s:14:\"discount_total\";i:0;s:3:\"vat\";i:0;s:8:\"currency\";s:6:\"Dollar\";s:15:\"amount_in_words\";s:24:\"One thousand six hundred\";}', 0, '2020-11-22 11:05:47'),
(5, 'Tasiana Castor', 'Tabata', 'Segerea', 'a:11:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:14:\"Tasiana Castor\";s:7:\"address\";s:6:\"Tabata\";s:8:\"location\";s:7:\"Segerea\";s:5:\"phone\";s:13:\"+255716566563\";}s:12:\"item_details\";a:2:{i:0;s:22:\"galaxy(270 * 65 * 3)cm\";i:1;s:22:\"galaxy(280 * 67 * 4)cm\";}s:8:\"quantity\";a:2:{i:0;s:2:\"50\";i:1;s:2:\"50\";}s:5:\"price\";a:2:{i:0;s:3:\"200\";i:1;s:3:\"200\";}s:5:\"total\";a:2:{i:0;s:6:\"10,000\";i:1;s:6:\"10,000\";}s:9:\"sub_total\";s:6:\"20,000\";s:8:\"discount\";i:2000;s:14:\"discount_total\";i:0;s:3:\"vat\";i:0;s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:24:\"One thousand six hundred\";}', 0, '2020-11-22 11:23:25'),
(6, 'Peter Victor', 'Mbezi', 'Goms', 'a:11:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:12:\"Peter Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Goms\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:22:\"galaxy(270 * 65 * 3)cm\";i:1;s:22:\"galaxy(280 * 67 * 4)cm\";}s:8:\"quantity\";a:2:{i:0;s:2:\"16\";i:1;s:2:\"78\";}s:5:\"price\";a:2:{i:0;s:3:\"200\";i:1;s:3:\"200\";}s:5:\"total\";a:2:{i:0;s:5:\"3,200\";i:1;s:6:\"15,600\";}s:9:\"sub_total\";i:18;s:8:\"discount\";i:2000;s:14:\"discount_total\";i:0;s:3:\"vat\";i:0;s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:31:\"Eighteen thousand eight hundred\";}', 0, '2020-11-22 11:41:12'),
(7, 'Peter Victor', 'Mbezi', 'Goms', 'a:11:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:12:\"Peter Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Goms\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:1:{i:0;s:22:\"galaxy(270 * 65 * 3)cm\";}s:8:\"quantity\";a:1:{i:0;s:2:\"57\";}s:5:\"price\";a:1:{i:0;s:3:\"200\";}s:5:\"total\";a:1:{i:0;s:6:\"11,400\";}s:9:\"sub_total\";i:11;s:8:\"discount\";i:2000;s:14:\"discount_total\";i:0;s:3:\"vat\";i:0;s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:31:\"Eighteen thousand eight hundred\";}', 0, '2020-11-22 11:43:48'),
(8, 'Pius Victor', 'Mbezi', 'luis', 'a:11:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:1:{i:0;s:22:\"galaxy(270 * 65 * 3)cm\";}s:8:\"quantity\";a:1:{i:0;s:2:\"10\";}s:5:\"price\";a:1:{i:0;s:3:\"200\";}s:5:\"total\";a:1:{i:0;s:5:\"2,000\";}s:9:\"sub_total\";i:2;s:8:\"discount\";i:2000;s:14:\"discount_total\";i:0;s:3:\"vat\";i:0;s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:8:\"ghghghgh\";}', 0, '2020-11-22 11:46:44'),
(9, 'Pius Victor', 'Mbezi', 'luis', 'a:11:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:1:{i:0;s:22:\"galaxy(280 * 67 * 4)cm\";}s:8:\"quantity\";a:1:{i:0;s:3:\"100\";}s:5:\"price\";a:1:{i:0;s:3:\"200\";}s:5:\"total\";a:1:{i:0;s:6:\"20,000\";}s:9:\"sub_total\";i:20;s:8:\"discount\";i:2000;s:14:\"discount_total\";i:0;s:3:\"vat\";i:0;s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:15:\"Twenty thousand\";}', 0, '2020-11-22 11:48:31'),
(10, 'Pius Victor', 'Mbezi', 'Luis', 'a:11:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:22:\"galaxy(270 * 65 * 3)cm\";i:1;s:22:\"galaxy(280 * 67 * 4)cm\";}s:8:\"quantity\";a:2:{i:0;s:1:\"5\";i:1;s:3:\"100\";}s:5:\"price\";a:2:{i:0;s:3:\"200\";i:1;s:3:\"200\";}s:5:\"total\";a:2:{i:0;s:5:\"1,000\";i:1;s:6:\"20,000\";}s:9:\"sub_total\";i:21;s:8:\"discount\";i:2000;s:14:\"discount_total\";i:0;s:3:\"vat\";i:0;s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:19:\"Twenty One Thousand\";}', 0, '2020-11-22 11:51:20'),
(11, 'Pius Victor', 'Mbezi', 'Luis', 'a:11:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:22:\"galaxy(270 * 65 * 3)cm\";i:1;s:22:\"galaxy(280 * 67 * 4)cm\";}s:8:\"quantity\";a:2:{i:0;s:3:\"100\";i:1;s:1:\"1\";}s:5:\"price\";a:2:{i:0;s:3:\"200\";i:1;s:3:\"200\";}s:5:\"total\";a:2:{i:0;s:6:\"20,000\";i:1;s:3:\"200\";}s:9:\"sub_total\";i:20;s:8:\"discount\";i:2000;s:14:\"discount_total\";i:0;s:3:\"vat\";i:0;s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:19:\"Twenty One Thousand\";}', 0, '2020-11-22 11:53:22'),
(12, 'Pius Victor', 'Mbezi', 'luis', 'a:11:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:1:{i:0;s:22:\"galaxy(270 * 65 * 3)cm\";}s:8:\"quantity\";a:1:{i:0;s:3:\"100\";}s:5:\"price\";a:1:{i:0;s:3:\"200\";}s:5:\"total\";a:1:{i:0;s:6:\"20,000\";}s:9:\"sub_total\";s:6:\"20,000\";s:8:\"discount\";s:4:\"2000\";s:14:\"discount_total\";s:1:\"0\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:9:\"asdsadsad\";}', 0, '2020-11-22 11:57:51'),
(13, 'Pius Victor', 'Mbezi', 'luis', 'a:11:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:22:\"galaxy(270 * 65 * 3)cm\";i:1;s:22:\"galaxy(280 * 67 * 4)cm\";}s:8:\"quantity\";a:2:{i:0;s:1:\"1\";i:1;s:1:\"1\";}s:5:\"price\";a:2:{i:0;s:3:\"200\";i:1;s:3:\"200\";}s:5:\"total\";a:2:{i:0;s:3:\"200\";i:1;s:3:\"200\";}s:9:\"sub_total\";s:3:\"400\";s:8:\"discount\";s:4:\"2000\";s:14:\"discount_total\";s:1:\"0\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:8:\"jjjjjjjj\";}', 0, '2020-11-22 12:04:04'),
(14, 'Pius Victor', 'Mbezi', 'luis', 'a:11:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:22:\"galaxy(270 * 65 * 3)cm\";i:1;s:22:\"galaxy(280 * 67 * 4)cm\";}s:8:\"quantity\";a:2:{i:0;s:1:\"6\";i:1;s:1:\"1\";}s:5:\"price\";a:2:{i:0;s:3:\"200\";i:1;s:3:\"200\";}s:5:\"total\";a:2:{i:0;s:5:\"1,200\";i:1;s:3:\"200\";}s:9:\"sub_total\";s:5:\"1,400\";s:8:\"discount\";s:4:\"2000\";s:14:\"discount_total\";s:1:\"0\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:7:\"fdsfsds\";}', 0, '2020-11-22 12:06:40'),
(15, 'Pius Victor', 'Mbezi', 'luis', 'a:11:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:22:\"galaxy(270 * 65 * 3)cm\";i:1;s:22:\"galaxy(280 * 67 * 4)cm\";}s:8:\"quantity\";a:2:{i:0;s:1:\"5\";i:1;s:1:\"1\";}s:5:\"price\";a:2:{i:0;s:3:\"200\";i:1;s:3:\"200\";}s:5:\"total\";a:2:{i:0;s:5:\"1,000\";i:1;s:3:\"200\";}s:9:\"sub_total\";s:5:\"1,200\";s:8:\"discount\";s:4:\"2000\";s:14:\"discount_total\";s:1:\"0\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:7:\"fdsfsds\";}', 0, '2020-11-22 12:08:39'),
(16, '', '', '', 'a:11:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:0:\"\";s:7:\"address\";s:0:\"\";s:8:\"location\";s:0:\"\";s:5:\"phone\";s:0:\"\";}s:12:\"item_details\";a:2:{i:0;s:22:\"galaxy(270 * 65 * 3)cm\";i:1;s:22:\"galaxy(280 * 67 * 4)cm\";}s:8:\"quantity\";a:2:{i:0;s:1:\"5\";i:1;s:1:\"1\";}s:5:\"price\";a:2:{i:0;s:3:\"200\";i:1;s:3:\"200\";}s:5:\"total\";a:2:{i:0;s:5:\"1,000\";i:1;s:3:\"200\";}s:9:\"sub_total\";s:5:\"1,200\";s:8:\"discount\";s:4:\"2000\";s:14:\"discount_total\";s:1:\"0\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:4:\"dddd\";}', 0, '2020-11-22 12:38:10'),
(17, 'Pius Victor', 'Mbezi', 'luis', 'a:11:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:22:\"galaxy(270 * 65 * 3)cm\";i:1;s:22:\"galaxy(280 * 67 * 4)cm\";}s:8:\"quantity\";a:2:{i:0;s:1:\"5\";i:1;s:1:\"5\";}s:5:\"price\";a:2:{i:0;s:3:\"200\";i:1;s:3:\"200\";}s:5:\"total\";a:2:{i:0;s:4:\"1000\";i:1;s:4:\"1000\";}s:9:\"sub_total\";s:4:\"2000\";s:8:\"discount\";s:4:\"2000\";s:14:\"discount_total\";s:1:\"0\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:12:\"Tewgfgffshfw\";}', 0, '2020-11-22 13:01:18'),
(18, 'Pius Victor', 'Mbezi', 'ssdsads', 'a:11:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:7:\"ssdsads\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:22:\"galaxy(270 * 65 * 3)cm\";i:1;s:22:\"galaxy(280 * 67 * 4)cm\";}s:8:\"quantity\";a:2:{i:0;s:3:\"100\";i:1;s:4:\"1000\";}s:5:\"price\";a:2:{i:0;s:3:\"200\";i:1;s:3:\"200\";}s:5:\"total\";a:2:{i:0;s:5:\"20000\";i:1;s:6:\"200000\";}s:9:\"sub_total\";s:6:\"220000\";s:8:\"discount\";s:4:\"2000\";s:14:\"discount_total\";s:1:\"0\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:12:\"jhjhkjhkjhkj\";}', 0, '2020-11-22 13:04:07'),
(19, 'Pius Victor', 'Mbezi', 'ssdsads', 'a:11:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:7:\"ssdsads\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:22:\"galaxy(270 * 65 * 3)cm\";i:1;s:22:\"galaxy(280 * 67 * 4)cm\";}s:8:\"quantity\";a:2:{i:0;s:4:\"1000\";i:1;s:1:\"1\";}s:5:\"price\";a:2:{i:0;s:3:\"200\";i:1;s:3:\"200\";}s:5:\"total\";a:2:{i:0;s:6:\"200000\";i:1;s:3:\"200\";}s:9:\"sub_total\";s:6:\"200200\";s:8:\"discount\";s:4:\"2000\";s:14:\"discount_total\";s:1:\"0\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:12:\"jhjhkjhkjhkj\";}', 0, '2020-11-22 13:07:20'),
(20, 'Pius Victor', 'Mbezi', 'ssdsads', 'a:11:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:7:\"ssdsads\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:22:\"galaxy(270 * 65 * 3)cm\";i:1;s:22:\"galaxy(280 * 67 * 4)cm\";}s:8:\"quantity\";a:2:{i:0;s:1:\"5\";i:1;s:3:\"100\";}s:5:\"price\";a:2:{i:0;s:3:\"200\";i:1;s:3:\"200\";}s:5:\"total\";a:2:{i:0;s:4:\"1000\";i:1;s:5:\"20000\";}s:9:\"sub_total\";s:5:\"21000\";s:8:\"discount\";s:4:\"2000\";s:14:\"discount_total\";s:1:\"0\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:12:\"jhjhkjhkjhkj\";}', 0, '2020-11-22 13:12:56'),
(21, 'Pius Victor', 'Mbezi', 'Luis', 'a:11:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:19:\"Galaxy (270x70x2)cm\";i:1;s:19:\"Galaxy (290x70x2)cm\";}s:8:\"quantity\";a:2:{i:0;s:1:\"5\";i:1;s:1:\"3\";}s:5:\"price\";a:2:{i:0;s:6:\"200000\";i:1;s:6:\"300000\";}s:5:\"total\";a:2:{i:0;s:7:\"1000000\";i:1;s:6:\"900000\";}s:9:\"sub_total\";s:7:\"1900000\";s:8:\"discount\";s:4:\"2000\";s:14:\"discount_total\";s:1:\"0\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:33:\"One Million Nine Hundred Thousand\";}', 0, '2020-11-23 05:53:45'),
(22, 'Pius Victor', 'Mbezi', 'Luis', 'a:11:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:1:{i:0;s:19:\"Galaxy (270x70x2)cm\";}s:8:\"quantity\";a:1:{i:0;s:1:\"3\";}s:5:\"price\";a:1:{i:0;s:6:\"200000\";}s:5:\"total\";a:1:{i:0;s:6:\"600000\";}s:9:\"sub_total\";s:6:\"600000\";s:8:\"discount\";s:4:\"2000\";s:14:\"discount_total\";s:1:\"0\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:20:\"Six Hundred Thousand\";}', 0, '2020-11-23 08:28:22'),
(23, 'Pius Victor', 'Mbezi', 'Luis', 'a:11:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:1:{i:0;s:19:\"Galaxy (270x70x2)cm\";}s:8:\"quantity\";a:1:{i:0;s:1:\"3\";}s:5:\"price\";a:1:{i:0;s:6:\"200000\";}s:5:\"total\";a:1:{i:0;s:6:\"600000\";}s:9:\"sub_total\";s:6:\"600000\";s:8:\"discount\";s:4:\"2000\";s:14:\"discount_total\";s:1:\"0\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:20:\"Six Hundred Thousand\";}', 0, '2020-11-23 08:28:37'),
(24, 'Pius Victor', 'Mbezi', 'Kinondoni', 'a:11:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:9:\"Kinondoni\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:19:\"Galaxy (270x70x2)cm\";i:1;s:19:\"Galaxy (290x70x2)cm\";}s:8:\"quantity\";a:2:{i:0;s:1:\"3\";i:1;s:1:\"3\";}s:5:\"price\";a:2:{i:0;s:6:\"200000\";i:1;s:6:\"300000\";}s:5:\"total\";a:2:{i:0;s:6:\"600000\";i:1;s:6:\"900000\";}s:9:\"sub_total\";s:7:\"1500000\";s:8:\"discount\";s:4:\"2000\";s:14:\"discount_total\";s:1:\"0\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:33:\"One Million Five Hundred Thousand\";}', 0, '2020-11-23 10:07:36'),
(25, 'Pius Victor', 'Mbezi', 'Kinondoni', 'a:11:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:9:\"Kinondoni\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:19:\"Galaxy (270x70x2)cm\";i:1;s:19:\"Galaxy (290x70x2)cm\";}s:8:\"quantity\";a:2:{i:0;s:1:\"4\";i:1;s:1:\"3\";}s:5:\"price\";a:2:{i:0;s:6:\"200000\";i:1;s:6:\"300000\";}s:5:\"total\";a:2:{i:0;s:6:\"800000\";i:1;s:6:\"900000\";}s:9:\"sub_total\";s:7:\"1700000\";s:8:\"discount\";s:4:\"2000\";s:14:\"discount_total\";s:1:\"0\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:34:\"One Million Seven Hundred Thousand\";}', 0, '2020-11-23 10:15:34'),
(26, 'Pius Victor', 'Mbezi', 'Luis', 'a:12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:1:{i:0;s:19:\"Galaxy (270x70x2)cm\";}s:9:\"item_unit\";a:1:{i:0;s:4:\"slab\";}s:8:\"quantity\";a:1:{i:0;s:1:\"2\";}s:5:\"price\";a:1:{i:0;s:6:\"200000\";}s:5:\"total\";a:1:{i:0;s:6:\"400000\";}s:9:\"sub_total\";s:6:\"400000\";s:8:\"discount\";s:4:\"2000\";s:14:\"discount_total\";s:1:\"0\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:21:\"djskjaksljdkljsalkjds\";}', 0, '2020-11-23 11:13:24'),
(27, 'Pius Victor', 'Mbezi', 'Luis', 'a:12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:19:\"Galaxy (270x70x2)cm\";i:1;s:19:\"Galaxy (290x70x2)cm\";}s:9:\"item_unit\";a:2:{i:0;s:4:\"slab\";i:1;s:4:\"slab\";}s:8:\"quantity\";a:2:{i:0;s:1:\"2\";i:1;s:1:\"5\";}s:5:\"price\";a:2:{i:0;s:6:\"200000\";i:1;s:6:\"300000\";}s:5:\"total\";a:2:{i:0;s:6:\"400000\";i:1;s:7:\"1500000\";}s:9:\"sub_total\";s:7:\"1900000\";s:8:\"discount\";s:4:\"2000\";s:14:\"discount_total\";s:1:\"0\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:33:\"One Million Nine Hundred Thousand\";}', 0, '2020-11-23 17:40:49'),
(28, 'Pius Victor', 'Mbezi', 'Luis', 'a:11:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:19:\"Galaxy (270x70x2)cm\";i:1;s:19:\"Galaxy (290x70x2)cm\";}s:9:\"item_unit\";a:2:{i:0;s:4:\"slab\";i:1;s:4:\"slab\";}s:8:\"quantity\";a:2:{i:0;s:1:\"3\";i:1;s:1:\"4\";}s:5:\"price\";a:2:{i:0;s:6:\"200000\";i:1;s:6:\"300000\";}s:5:\"total\";a:2:{i:0;s:6:\"600000\";i:1;s:7:\"1200000\";}s:9:\"sub_total\";s:7:\"1800000\";s:14:\"discount_total\";s:9:\"1,500,000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:33:\"One Million five Hundred Thousand\";}', 0, '2020-11-25 06:50:52'),
(29, 'Pius Victor', 'Mbezi', 'Luis', 'a:11:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:19:\"Galaxy (270x70x2)cm\";i:1;s:19:\"Galaxy (290x70x2)cm\";}s:9:\"item_unit\";a:2:{i:0;s:4:\"slab\";i:1;s:4:\"slab\";}s:8:\"quantity\";a:2:{i:0;s:1:\"1\";i:1;s:1:\"2\";}s:5:\"price\";a:2:{i:0;s:6:\"200000\";i:1;s:6:\"300000\";}s:5:\"total\";a:2:{i:0;s:6:\"200000\";i:1;s:6:\"600000\";}s:9:\"sub_total\";s:6:\"800000\";s:14:\"discount_total\";s:7:\"640,000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:26:\"Six Hundred Forty Thousand\";}', 0, '2020-11-25 06:59:16'),
(30, 'Pius Victor', 'Mbezi', 'Luis', 'a:11:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:19:\"Galaxy (270x70x2)cm\";i:1;s:19:\"Galaxy (290x70x2)cm\";}s:9:\"item_unit\";a:2:{i:0;s:4:\"slab\";i:1;s:4:\"slab\";}s:8:\"quantity\";a:2:{i:0;s:1:\"2\";i:1;s:1:\"2\";}s:5:\"price\";a:2:{i:0;s:6:\"200000\";i:1;s:6:\"300000\";}s:5:\"total\";a:2:{i:0;s:6:\"400000\";i:1;s:6:\"600000\";}s:9:\"sub_total\";s:7:\"1000000\";s:14:\"discount_total\";s:7:\"800,000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:22:\"Eight Hundred Thousand\";}', 0, '2020-11-25 07:03:17'),
(31, 'Pius Victor', 'Mbezi', 'Luis', 'a:11:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:19:\"Galaxy (270x70x2)cm\";i:1;s:19:\"Galaxy (290x70x2)cm\";}s:9:\"item_unit\";a:2:{i:0;s:4:\"slab\";i:1;s:4:\"slab\";}s:8:\"quantity\";a:2:{i:0;s:1:\"3\";i:1;s:1:\"2\";}s:5:\"price\";a:2:{i:0;s:6:\"200000\";i:1;s:6:\"300000\";}s:5:\"total\";a:2:{i:0;s:6:\"600000\";i:1;s:6:\"600000\";}s:9:\"sub_total\";s:7:\"1200000\";s:14:\"discount_total\";s:9:\"1,020,000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:11:\"asdasdasdas\";}', 0, '2020-11-25 07:07:36'),
(32, 'Pius Victor', 'Mbezi', 'Luis', 'a:12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:19:\"Galaxy (270x70x2)cm\";i:1;s:19:\"Galaxy (290x70x2)cm\";}s:9:\"item_unit\";a:2:{i:0;s:4:\"slab\";i:1;s:4:\"slab\";}s:8:\"quantity\";a:2:{i:0;s:1:\"1\";i:1;s:1:\"1\";}s:5:\"price\";a:2:{i:0;s:6:\"200000\";i:1;s:6:\"300000\";}s:5:\"total\";a:2:{i:0;s:6:\"200000\";i:1;s:6:\"300000\";}s:9:\"sub_total\";s:6:\"500000\";s:8:\"discount\";s:5:\"80000\";s:14:\"discount_total\";s:6:\"420000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:5:\"asasa\";}', 0, '2020-11-25 07:38:52'),
(33, 'Pius Victor', 'Mbezi', 'Luis', 'a:12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:19:\"Galaxy (270x70x2)cm\";i:1;s:19:\"Galaxy (290x70x2)cm\";}s:9:\"item_unit\";a:2:{i:0;s:4:\"slab\";i:1;s:4:\"slab\";}s:8:\"quantity\";a:2:{i:0;s:1:\"6\";i:1;s:1:\"5\";}s:5:\"price\";a:2:{i:0;s:6:\"200000\";i:1;s:6:\"300000\";}s:5:\"total\";a:2:{i:0;s:7:\"1200000\";i:1;s:7:\"1500000\";}s:9:\"sub_total\";s:7:\"2700000\";s:8:\"discount\";s:6:\"660000\";s:14:\"discount_total\";s:7:\"2040000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:26:\"Two Million Forty Thousand\";}', 0, '2020-11-25 12:46:55'),
(34, 'Pius Victor', 'Mbezi', 'Luis', 'a:12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:19:\"Galaxy (270x70x2)cm\";i:1;s:19:\"Galaxy (290x70x2)cm\";}s:9:\"item_unit\";a:2:{i:0;s:4:\"slab\";i:1;s:4:\"slab\";}s:8:\"quantity\";a:2:{i:0;s:1:\"3\";i:1;s:1:\"2\";}s:5:\"price\";a:2:{i:0;s:6:\"200000\";i:1;s:6:\"300000\";}s:5:\"total\";a:2:{i:0;s:6:\"600000\";i:1;s:6:\"600000\";}s:9:\"sub_total\";s:7:\"1200000\";s:8:\"discount\";s:6:\"120000\";s:14:\"discount_total\";s:7:\"1080000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:31:\"One Million and Eighty Thousand\";}', 0, '2020-11-25 13:01:00'),
(35, 'Pius Victor', 'Mbezi', 'Luis', 'a:12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:19:\"Galaxy (270x70x2)cm\";i:1;s:19:\"Galaxy (290x70x2)cm\";}s:9:\"item_unit\";a:2:{i:0;s:4:\"slab\";i:1;s:4:\"slab\";}s:8:\"quantity\";a:2:{i:0;s:1:\"1\";i:1;s:1:\"1\";}s:5:\"price\";a:2:{i:0;s:6:\"200000\";i:1;s:6:\"300000\";}s:5:\"total\";a:2:{i:0;s:6:\"200000\";i:1;s:6:\"300000\";}s:9:\"sub_total\";s:6:\"500000\";s:8:\"discount\";s:5:\"80000\";s:14:\"discount_total\";s:6:\"420000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:28:\"Four hundred Twenty thousand\";}', 0, '2020-11-25 13:12:22'),
(36, 'Pius Victor', 'Mbezi', 'Luis', 'a:12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:19:\"Galaxy (270x70x2)cm\";i:1;s:19:\"Galaxy (290x70x2)cm\";}s:9:\"item_unit\";a:2:{i:0;s:4:\"slab\";i:1;s:4:\"slab\";}s:8:\"quantity\";a:2:{i:0;s:1:\"1\";i:1;s:1:\"1\";}s:5:\"price\";a:2:{i:0;s:6:\"200000\";i:1;s:6:\"300000\";}s:5:\"total\";a:2:{i:0;s:6:\"200000\";i:1;s:6:\"300000\";}s:9:\"sub_total\";s:6:\"500000\";s:8:\"discount\";s:5:\"20000\";s:14:\"discount_total\";s:6:\"480000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:9:\"dsddsdsds\";}', 0, '2020-11-25 19:50:56'),
(37, 'Pius Victor', 'Mbezi', 'liuu', 'a:12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"liuu\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:1:{i:0;s:19:\"Galaxy (270x70x2)cm\";}s:9:\"item_unit\";a:1:{i:0;s:4:\"slab\";}s:8:\"quantity\";a:1:{i:0;s:1:\"1\";}s:5:\"price\";a:1:{i:0;s:6:\"200000\";}s:5:\"total\";a:1:{i:0;s:6:\"200000\";}s:9:\"sub_total\";s:6:\"200000\";s:8:\"discount\";s:1:\"0\";s:14:\"discount_total\";s:6:\"200000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:7:\"hjhjjhj\";}', 0, '2020-11-25 19:55:59'),
(38, 'Pius Victor', 'Mbezi', 'luis', 'a:12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:1:{i:0;s:19:\"Galaxy (270x70x2)cm\";}s:9:\"item_unit\";a:1:{i:0;s:4:\"slab\";}s:8:\"quantity\";a:1:{i:0;s:1:\"1\";}s:5:\"price\";a:1:{i:0;s:6:\"200000\";}s:5:\"total\";a:1:{i:0;s:6:\"200000\";}s:9:\"sub_total\";s:6:\"200000\";s:8:\"discount\";s:1:\"0\";s:14:\"discount_total\";s:6:\"200000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:11:\"hjhjhhkjhkj\";}', 0, '2020-11-25 20:07:11'),
(39, 'Pius Victor', 'Mbezi', 'Luis', 'a:12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:1:{i:0;s:19:\"Galaxy (290x70x2)cm\";}s:9:\"item_unit\";a:1:{i:0;s:4:\"slab\";}s:8:\"quantity\";a:1:{i:0;s:1:\"2\";}s:5:\"price\";a:1:{i:0;s:6:\"300000\";}s:5:\"total\";a:1:{i:0;s:6:\"600000\";}s:9:\"sub_total\";s:6:\"600000\";s:8:\"discount\";s:5:\"60000\";s:14:\"discount_total\";s:6:\"540000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:20:\"Six Hundred Thousand\";}', 0, '2020-12-01 13:10:12'),
(40, 'Daizy Lwetaka', 'Tegeta', 'Madale', 'a:12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:13:\"Daizy Lwetaka\";s:7:\"address\";s:6:\"Tegeta\";s:8:\"location\";s:6:\"Madale\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:1:{i:0;s:19:\"Galaxy (290x70x2)cm\";}s:9:\"item_unit\";a:1:{i:0;s:4:\"slab\";}s:8:\"quantity\";a:1:{i:0;s:1:\"1\";}s:5:\"price\";a:1:{i:0;s:6:\"300000\";}s:5:\"total\";a:1:{i:0;s:6:\"300000\";}s:9:\"sub_total\";s:6:\"300000\";s:8:\"discount\";s:5:\"15000\";s:14:\"discount_total\";s:6:\"285000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:32:\"Two Hundred Eighty five Thousand\";}', 0, '2020-12-02 08:27:30'),
(41, 'Pius Victor', 'Mbezi', 'Luis', 'a:12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:19:\"Galaxy (290x70x2)cm\";i:1;s:24:\"Galaxy(270 * 168 * 12)cm\";}s:9:\"item_unit\";a:2:{i:0;s:4:\"slab\";i:1;s:2:\"pc\";}s:8:\"quantity\";a:2:{i:0;s:1:\"1\";i:1;s:1:\"1\";}s:5:\"price\";a:2:{i:0;s:6:\"300000\";i:1;s:6:\"350000\";}s:5:\"total\";a:2:{i:0;s:6:\"300000\";i:1;s:6:\"350000\";}s:9:\"sub_total\";s:6:\"650000\";s:8:\"discount\";s:1:\"0\";s:14:\"discount_total\";s:6:\"650000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:26:\"Six Hundred Fifty thousand\";}', 0, '2020-12-02 13:47:35'),
(42, 'Pius Victor dsfdfdsfdsfdsfdsfdsfdsfsdfsdsfsdfsfsd', 'Mbezi', 'Luis', 'a:12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:49:\"Pius Victor dsfdfdsfdsfdsfdsfdsfdsfsdfsdsfsdfsfsd\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:12:\"item_details\";a:2:{i:0;s:19:\"Galaxy (290x70x2)cm\";i:1;s:24:\"Galaxy(270 * 168 * 12)cm\";}s:9:\"item_unit\";a:2:{i:0;s:4:\"slab\";i:1;s:2:\"pc\";}s:8:\"quantity\";a:2:{i:0;s:1:\"1\";i:1;s:1:\"1\";}s:5:\"price\";a:2:{i:0;s:6:\"300000\";i:1;s:6:\"350000\";}s:5:\"total\";a:2:{i:0;s:6:\"300000\";i:1;s:6:\"350000\";}s:9:\"sub_total\";s:6:\"650000\";s:8:\"discount\";s:1:\"0\";s:14:\"discount_total\";s:6:\"650000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:26:\"Six Hundred Fifty thousand\";}', 0, '2020-12-02 13:59:43'),
(43, 'Pius Victor', 'Mbezi', 'Daressalamm', 'a:12:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:11:\"Daressalamm\";s:5:\"phone\";s:10:\"0716581629\";}s:12:\"item_details\";a:2:{i:0;s:19:\"Galaxy (290x70x2)cm\";i:1;s:24:\"Galaxy(270 * 168 * 12)cm\";}s:9:\"item_unit\";a:2:{i:0;s:4:\"slab\";i:1;s:2:\"pc\";}s:8:\"quantity\";a:2:{i:0;s:1:\"2\";i:1;s:1:\"2\";}s:5:\"price\";a:2:{i:0;s:6:\"300000\";i:1;s:6:\"350000\";}s:5:\"total\";a:2:{i:0;s:6:\"600000\";i:1;s:6:\"700000\";}s:9:\"sub_total\";s:7:\"1300000\";s:8:\"discount\";s:6:\"200000\";s:14:\"discount_total\";s:7:\"1100000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:12:\"One Million \";}', 0, '2020-12-02 16:10:56'),
(44, 'Pius Victor', 'Mbezi', 'luia', 'a:13:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"luia\";s:5:\"phone\";s:13:\"+255716581629\";}s:7:\"item_id\";a:1:{i:0;s:1:\"5\";}s:12:\"item_details\";a:1:{i:0;s:22:\"Galaxy(300 x 75 x66)cm\";}s:9:\"item_unit\";a:1:{i:0;s:4:\"slab\";}s:8:\"quantity\";a:1:{i:0;s:1:\"2\";}s:5:\"price\";a:1:{i:0;s:6:\"200000\";}s:5:\"total\";a:1:{i:0;s:6:\"400000\";}s:9:\"sub_total\";s:6:\"400000\";s:8:\"discount\";s:1:\"0\";s:14:\"discount_total\";s:6:\"400000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:8:\"jhjhkjhj\";}', 0, '2020-12-07 14:52:22'),
(45, 'Pius Victor', 'Mbezi', 'Luis', 'a:13:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:7:\"item_id\";a:1:{i:0;s:1:\"4\";}s:12:\"item_details\";a:1:{i:0;s:22:\"Galaxy(300 x 75 x62)cm\";}s:9:\"item_unit\";a:1:{i:0;s:4:\"slab\";}s:8:\"quantity\";a:1:{i:0;s:1:\"1\";}s:5:\"price\";a:1:{i:0;s:6:\"230000\";}s:5:\"total\";a:1:{i:0;s:6:\"230000\";}s:9:\"sub_total\";s:6:\"230000\";s:8:\"discount\";s:1:\"0\";s:14:\"discount_total\";s:6:\"230000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:12:\"Thghshaghsaj\";}', 0, '2020-12-07 14:54:25'),
(46, 'Pius Victor', 'Mbezi', 'hhhh', 'a:13:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"hhhh\";s:5:\"phone\";s:13:\"+255716581629\";}s:7:\"item_id\";a:1:{i:0;s:2:\"22\";}s:12:\"item_details\";a:1:{i:0;s:22:\"Galaxy(300 x 75 x62)cm\";}s:9:\"item_unit\";a:1:{i:0;s:4:\"slab\";}s:8:\"quantity\";a:1:{i:0;s:1:\"3\";}s:5:\"price\";a:1:{i:0;s:6:\"230000\";}s:5:\"total\";a:1:{i:0;s:6:\"690000\";}s:9:\"sub_total\";s:6:\"690000\";s:8:\"discount\";s:1:\"0\";s:14:\"discount_total\";s:6:\"690000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:9:\"sdssdsdsa\";}', 0, '2020-12-07 15:14:27'),
(47, '', '', '', 'a:13:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:0:\"\";s:7:\"address\";s:0:\"\";s:8:\"location\";s:0:\"\";s:5:\"phone\";s:0:\"\";}s:7:\"item_id\";a:2:{i:0;s:2:\"22\";i:1;s:2:\"23\";}s:12:\"item_details\";a:2:{i:0;s:22:\"Galaxy(300 x 75 x62)cm\";i:1;s:22:\"Galaxy(300 x 75 x66)cm\";}s:9:\"item_unit\";a:2:{i:0;s:4:\"slab\";i:1;s:4:\"slab\";}s:8:\"quantity\";a:2:{i:0;s:1:\"4\";i:1;s:1:\"6\";}s:5:\"price\";a:2:{i:0;s:6:\"230000\";i:1;s:6:\"200000\";}s:5:\"total\";a:2:{i:0;s:6:\"920000\";i:1;s:7:\"1200000\";}s:9:\"sub_total\";s:7:\"2120000\";s:8:\"discount\";s:1:\"0\";s:14:\"discount_total\";s:7:\"2120000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:6:\"ssdsda\";}', 0, '2020-12-07 15:16:11'),
(48, 'Pius Victor', 'Mbezi', 'ffff', 'a:13:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"ffff\";s:5:\"phone\";s:13:\"+255716581629\";}s:7:\"item_id\";a:1:{i:0;s:2:\"22\";}s:12:\"item_details\";a:1:{i:0;s:22:\"Galaxy(300 x 75 x62)cm\";}s:9:\"item_unit\";a:1:{i:0;s:4:\"slab\";}s:8:\"quantity\";a:1:{i:0;s:1:\"2\";}s:5:\"price\";a:1:{i:0;s:6:\"230000\";}s:5:\"total\";a:1:{i:0;s:6:\"460000\";}s:9:\"sub_total\";s:6:\"460000\";s:8:\"discount\";s:1:\"0\";s:14:\"discount_total\";s:6:\"460000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:6:\"ffffff\";}', 0, '2020-12-07 15:20:01'),
(49, 'Pius Victor', 'Mbezi', 'Luis', 'a:13:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:7:\"item_id\";a:1:{i:0;s:2:\"23\";}s:12:\"item_details\";a:1:{i:0;s:22:\"Galaxy(300 x 75 x66)cm\";}s:9:\"item_unit\";a:1:{i:0;s:4:\"slab\";}s:8:\"quantity\";a:1:{i:0;s:1:\"3\";}s:5:\"price\";a:1:{i:0;s:6:\"200000\";}s:5:\"total\";a:1:{i:0;s:6:\"600000\";}s:9:\"sub_total\";s:6:\"600000\";s:8:\"discount\";s:1:\"0\";s:14:\"discount_total\";s:6:\"600000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:10:\"hghghghghj\";}', 0, '2020-12-08 16:16:28'),
(50, 'Pius Victor', 'Mbezi', 'Luis', 'a:13:{s:6:\"client\";O:8:\"stdClass\":4:{s:4:\"name\";s:11:\"Pius Victor\";s:7:\"address\";s:5:\"Mbezi\";s:8:\"location\";s:4:\"Luis\";s:5:\"phone\";s:13:\"+255716581629\";}s:7:\"item_id\";a:1:{i:0;s:2:\"22\";}s:12:\"item_details\";a:1:{i:0;s:22:\"Galaxy(300 x 75 x62)cm\";}s:9:\"item_unit\";a:1:{i:0;s:4:\"slab\";}s:8:\"quantity\";a:1:{i:0;s:1:\"1\";}s:5:\"price\";a:1:{i:0;s:6:\"240000\";}s:5:\"total\";a:1:{i:0;s:6:\"240000\";}s:9:\"sub_total\";s:6:\"240000\";s:8:\"discount\";s:5:\"24000\";s:14:\"discount_total\";s:6:\"216000\";s:3:\"vat\";s:1:\"0\";s:8:\"currency\";s:18:\"Tanzanian Shilling\";s:15:\"amount_in_words\";s:6:\"gfgfgg\";}', 0, '2020-12-08 16:21:49');

-- --------------------------------------------------------

--
-- Table structure for table `serialize_table`
--

CREATE TABLE `serialize_table` (
  `id` int(11) NOT NULL,
  `member` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serialize_table`
--

INSERT INTO `serialize_table` (`id`, `member`) VALUES
(1, 'a:5:{s:12:\"item_details\";a:2:{i:0;s:22:\"galaxy(270 * 65 * 3)cm\";i:1;s:22:\"galaxy(280 * 67 * 4)cm\";}s:8:\"quantity\";a:2:{i:0;s:1:\"1\";i:1;s:1:\"1\";}s:5:\"price\";a:2:{i:0;s:3:\"200\";i:1;s:3:\"200\";}s:5:\"total\";a:2:{i:0;s:3:\"200\";i:1;s:3:\"200\";}s:9:\"sub_total\";s:3:\"400\";}'),
(2, 'a:5:{s:12:\"item_details\";a:2:{i:0;s:22:\"galaxy(280 * 67 * 4)cm\";i:1;s:22:\"galaxy(270 * 65 * 3)cm\";}s:8:\"quantity\";a:2:{i:0;s:1:\"3\";i:1;s:1:\"5\";}s:5:\"price\";a:2:{i:0;s:3:\"200\";i:1;s:3:\"200\";}s:5:\"total\";a:2:{i:0;s:3:\"600\";i:1;s:4:\"1000\";}s:9:\"sub_total\";s:4:\"1600\";}');

-- --------------------------------------------------------

--
-- Table structure for table `system_users`
--

CREATE TABLE `system_users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'user',
  `isActive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_users`
--

INSERT INTO `system_users` (`id`, `username`, `password`, `role`, `isActive`) VALUES
(1, 'owner', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', 1),
(2, 'saler', 'e10adc3949ba59abbe56e057f20f883e', 'user', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delivery_order`
--
ALTER TABLE `delivery_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_store`
--
ALTER TABLE `products_store`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product_unit`
--
ALTER TABLE `product_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proforma_invoice`
--
ALTER TABLE `proforma_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_products`
--
ALTER TABLE `purchase_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serialize_table`
--
ALTER TABLE `serialize_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_users`
--
ALTER TABLE `system_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delivery_order`
--
ALTER TABLE `delivery_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products_store`
--
ALTER TABLE `products_store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_unit`
--
ALTER TABLE `product_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `proforma_invoice`
--
ALTER TABLE `proforma_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `purchase_products`
--
ALTER TABLE `purchase_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `serialize_table`
--
ALTER TABLE `serialize_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `system_users`
--
ALTER TABLE `system_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products_store`
--
ALTER TABLE `products_store`
  ADD CONSTRAINT `products_store_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
