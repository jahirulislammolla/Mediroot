-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2018 at 06:19 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mediroot_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(3) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_email`, `admin_password`) VALUES
(1, 'pmd_ck@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `brand_generic_table`
--

CREATE TABLE `brand_generic_table` (
  `brand_generic_id` int(4) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `generic_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_table`
--

CREATE TABLE `customer_table` (
  `customer_id` int(6) NOT NULL,
  `customer_company_name` varchar(150) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_table`
--

INSERT INTO `customer_table` (`customer_id`, `customer_company_name`, `customer_name`, `customer_contact`, `customer_address`) VALUES
(1, '', 'j', 'j', 'j '),
(2, '', 'Md. Jahirul Islam', '01684908986', 'Barisal '),
(3, '', 'abc', '01710684220', 'asdg '),
(4, '', 'jahirul', '01710684220', ' sag'),
(5, '', 'Sifat', '01710684220', 'uganda '),
(6, '', 'Torres', '01710684220', 'Uganda '),
(7, '', 'new', '01896374563', 'asd '),
(8, '', 'Torres', '0194378179', 'BD '),
(9, '', 'Jahir', '01710684220', 'Noakhali '),
(10, 'kal', 'kal', '123', 'dsf '),
(11, 'we', 'er', '123', ' wer'),
(12, 'u', 'u', 'u', 'u '),
(13, 'q', 'q', 'q', 'q '),
(14, 'q', 'q', 'qq', 'q '),
(15, 'q', 'q', 'qq', 'q '),
(16, 'g', 'g', 'g', 'g '),
(17, 'mayer doa', 'kawsar', '01632456453', 'bandura bazar ');

-- --------------------------------------------------------

--
-- Table structure for table `discount_table`
--

CREATE TABLE `discount_table` (
  `discount_id` int(2) NOT NULL,
  `discount` float NOT NULL,
  `discount_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discount_table`
--

INSERT INTO `discount_table` (`discount_id`, `discount`, `discount_date`) VALUES
(1, 7, 'May 30, 2018');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_products_table`
--

CREATE TABLE `invoice_products_table` (
  `id` int(10) NOT NULL,
  `invoice_id` int(10) NOT NULL,
  `invoice_product_id` int(6) NOT NULL,
  `invoice_product_quantity` int(5) NOT NULL,
  `invoice_product_tp` float NOT NULL,
  `invoice_product_foc` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_products_table`
--

INSERT INTO `invoice_products_table` (`id`, `invoice_id`, `invoice_product_id`, `invoice_product_quantity`, `invoice_product_tp`, `invoice_product_foc`) VALUES
(1, 2, 2, 50, 788, 4),
(2, 2, 3, 50, 555, 0),
(3, 3, 3, 10, 555, 0),
(4, 4, 1, 10, 677, 2),
(5, 5, 2, 20, 788, 2),
(6, 5, 1, 20, 677, 4),
(7, 6, 3, 10, 555, 0),
(8, 7, 2, 20, 788, 2),
(9, 8, 2, 12, 788, 0),
(10, 9, 2, 20, 788, 2),
(11, 9, 1, 5, 677, 0),
(12, 10, 1, 23, 677, 4),
(13, 11, 2, 1, 788, 0),
(14, 12, 1, 10, 677, 2),
(15, 13, 2, 20, 788, 2),
(16, 14, 1, 50, 677, 10),
(17, 13, 2, 50, 788, 4);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_table`
--

CREATE TABLE `invoice_table` (
  `invoice_id` int(10) NOT NULL,
  `invoice_date` varchar(50) NOT NULL,
  `invoice_delivery_date` varchar(50) NOT NULL,
  `invoice_mpo` varchar(60) NOT NULL,
  `invoice_territory_id` int(5) NOT NULL,
  `invoice_discount` float NOT NULL,
  `invoice_discount_total` float NOT NULL,
  `invoice_total` float NOT NULL,
  `invoice_price` float NOT NULL,
  `invoice_customer_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_table`
--

INSERT INTO `invoice_table` (`invoice_id`, `invoice_date`, `invoice_delivery_date`, `invoice_mpo`, `invoice_territory_id`, `invoice_discount`, `invoice_discount_total`, `invoice_total`, `invoice_price`, `invoice_customer_id`) VALUES
(5, '2018-05-09', '2018-12-01', 'rifat', 1, 2, 0, 29300, 29300, 5),
(6, '2018-05-11', '2018-01-01', 'Shakib', 1, 2, 111, 0, 5439, 6),
(7, '2018-05-12', '2018-01-01', 'ad', 3, 1, 0, 15760, 15760, 7),
(8, '2018-05-15', '2018-01-31', 'Jahir', 3, 1, 95, 0, 9361, 8),
(9, '2018-05-15', '2018-07-14', 'humayun', 1, 2, 68, 15760, 19077, 9),
(10, '2018-05-27 0:13 am', '2018-01-01', 'hui', 0, 3, 467, 15571, 15104, 10),
(11, '2018-05-27 0:15 am', '2018-05-19', 'qwer', 0, 23, 181, 788, 607, 11),
(12, '2018-05-27 0:56 am', '2018-12-31', '8', 0, 9, 609, 6770, 6161, 12),
(13, '2018-06-02 3:13 pm', '2018-06-03', 'Jalil', 3, 7, 2758, 39400, 36642, 17);

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `product_id` int(6) NOT NULL,
  `product_brand_name` varchar(100) NOT NULL,
  `product_generic_name` varchar(100) NOT NULL,
  `product_pack_size` varchar(100) NOT NULL,
  `product_dosage_form` varchar(50) NOT NULL,
  `product_quantity` int(6) NOT NULL,
  `product_cog` float NOT NULL,
  `product_tp` float NOT NULL,
  `product_mrp` float NOT NULL,
  `product_foc_of` int(3) NOT NULL,
  `product_foc` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`product_id`, `product_brand_name`, `product_generic_name`, `product_pack_size`, `product_dosage_form`, `product_quantity`, `product_cog`, `product_tp`, `product_mrp`, `product_foc_of`, `product_foc`) VALUES
(2, 'Cal-Med', 'Calcium Solution', '500 ml', 'Liquid', 201, 566, 788, 899, 20, 2),
(4, 'Cal-Med', 'Calcium Solution', '5 Litre', 'Liquid', 0, 1000, 1200, 1400, 10, 1),
(5, 'Calus-D', 'Calcium Granular', '500 gm', 'Granular', 0, 333, 344, 355, 0, 0),
(6, 'Calus-D', 'Calcium Granular', '1 Kg', 'Granular', 0, 455, 560, 760, 0, 0),
(7, 'DCP-M', 'DCP', '1 Kg Sachet', 'Powder', 0, 0, 0, 0, 0, 0),
(9, 'Duo-Vit', 'E-Selenium', '100 ml', 'Liquid', 100, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_type_table`
--

CREATE TABLE `product_type_table` (
  `product_type_id` int(3) NOT NULL,
  `product_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock_record_table`
--

CREATE TABLE `stock_record_table` (
  `stock_id` int(10) NOT NULL,
  `product_id` int(5) NOT NULL,
  `quantity` int(5) NOT NULL,
  `add_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_record_table`
--

INSERT INTO `stock_record_table` (`stock_id`, `product_id`, `quantity`, `add_date`) VALUES
(1, 2, 100, 'June 2, 2018');

-- --------------------------------------------------------

--
-- Table structure for table `territory_table`
--

CREATE TABLE `territory_table` (
  `territory_id` int(4) NOT NULL,
  `territory_name` varchar(100) NOT NULL,
  `territory_district` varchar(30) NOT NULL,
  `territory_add_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `territory_table`
--

INSERT INTO `territory_table` (`territory_id`, `territory_name`, `territory_district`, `territory_add_date`) VALUES
(1, 'Bhola', 'Barishal', 'May 30, 2018'),
(3, 'Nawabgonj', 'Dhaka', 'June 1, 2018');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(2) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `user_email`, `user_password`) VALUES
(1, 'admin@gmail.com', 'admin'),
(2, 'new@gmail.com', 'new');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brand_generic_table`
--
ALTER TABLE `brand_generic_table`
  ADD PRIMARY KEY (`brand_generic_id`);

--
-- Indexes for table `customer_table`
--
ALTER TABLE `customer_table`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `discount_table`
--
ALTER TABLE `discount_table`
  ADD PRIMARY KEY (`discount_id`);

--
-- Indexes for table `invoice_products_table`
--
ALTER TABLE `invoice_products_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_table`
--
ALTER TABLE `invoice_table`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_type_table`
--
ALTER TABLE `product_type_table`
  ADD PRIMARY KEY (`product_type_id`);

--
-- Indexes for table `stock_record_table`
--
ALTER TABLE `stock_record_table`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `territory_table`
--
ALTER TABLE `territory_table`
  ADD PRIMARY KEY (`territory_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand_generic_table`
--
ALTER TABLE `brand_generic_table`
  MODIFY `brand_generic_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_table`
--
ALTER TABLE `customer_table`
  MODIFY `customer_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `discount_table`
--
ALTER TABLE `discount_table`
  MODIFY `discount_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoice_products_table`
--
ALTER TABLE `invoice_products_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `invoice_table`
--
ALTER TABLE `invoice_table`
  MODIFY `invoice_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `product_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_type_table`
--
ALTER TABLE `product_type_table`
  MODIFY `product_type_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock_record_table`
--
ALTER TABLE `stock_record_table`
  MODIFY `stock_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `territory_table`
--
ALTER TABLE `territory_table`
  MODIFY `territory_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
