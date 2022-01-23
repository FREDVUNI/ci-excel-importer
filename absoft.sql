-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 22, 2022 at 05:35 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absoft`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_items`
--

CREATE TABLE `db_items` (
  `id` int(5) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `item_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom_barcode` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(10) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `sku` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsn` varbinary(50) DEFAULT NULL,
  `unit_id` int(10) DEFAULT NULL,
  `alert_qty` int(10) DEFAULT NULL,
  `brand_id` int(5) DEFAULT NULL,
  `lot_number` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expire_date` date DEFAULT NULL,
  `price` double(10,2) DEFAULT NULL,
  `tax_id` int(5) DEFAULT NULL,
  `purchase_price` double(10,2) DEFAULT NULL,
  `tax_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profit_margin` double(10,2) DEFAULT NULL,
  `sales_price` double(10,2) DEFAULT NULL,
  `stock` int(10) DEFAULT NULL,
  `item_image` mediumtext COLLATE utf8mb4_unicode_ci,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_popular` int(11) NOT NULL DEFAULT '0',
  `system_ip` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `system_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `created_time` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_id` int(5) DEFAULT NULL,
  `dimension_description` text COLLATE utf8mb4_unicode_ci,
  `status` int(5) DEFAULT NULL,
  `is_bundle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `db_items`
--

INSERT INTO `db_items` (`id`, `parent_id`, `item_code`, `custom_barcode`, `item_name`, `category_id`, `subcategory_id`, `supplier_id`, `sku`, `hsn`, `unit_id`, `alert_qty`, `brand_id`, `lot_number`, `expire_date`, `price`, `tax_id`, `purchase_price`, `tax_type`, `profit_margin`, `sales_price`, `stock`, `item_image`, `size`, `color`, `is_popular`, `system_ip`, `system_name`, `created_date`, `created_time`, `created_by`, `company_id`, `dimension_description`, `status`, `is_bundle`) VALUES
(1, NULL, 'IT15832', '', 'PARADISE COLLECTION  SOFA AND LOVESEAT', 10, 0, 3, 'P750-SET S L', NULL, 0, 0, 0, '', '0000-00-00', 0.00, 0, 971.00, '', 75.00, 1700.00, 0, NULL, '', '', 0, '47.21.32.30', 'ool-2f15201e.static.optonline.net', '2021-04-30', '04:57:18 pm', 'admin', NULL, '', 1, 0),
(2, NULL, '1110216', NULL, 'Baskove', NULL, NULL, NULL, 'LAF Corner Chaise', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, NULL, 0.00, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(3, NULL, '1110216', NULL, 'Baskove', NULL, NULL, NULL, 'LAF Corner Chaise', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, NULL, 0.00, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, NULL, '1110216', NULL, 'Baskove', NULL, NULL, NULL, 'LAF Corner Chaise', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, NULL, 0.00, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(5, NULL, '1110216', NULL, 'Baskove', NULL, NULL, NULL, 'LAF Corner Chaise', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, NULL, 0.00, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(6, NULL, '1110216', NULL, 'Baskove', NULL, NULL, NULL, 'LAF Corner Chaise', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, NULL, 0.00, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_items`
--
ALTER TABLE `db_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_items`
--
ALTER TABLE `db_items`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
