-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2024 at 07:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_to_cart`
--

CREATE TABLE `add_to_cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `size` varchar(65) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `discount_price` decimal(10,2) NOT NULL,
  `selling_price` decimal(10,2) NOT NULL,
  `cart_entry_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(250) NOT NULL,
  `admin_email` text NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_mobile` bigint(20) NOT NULL,
  `admin_gender` varchar(30) NOT NULL,
  `admin_address` text NOT NULL,
  `admin_state` varchar(200) NOT NULL,
  `admin_city` varchar(200) NOT NULL,
  `admin_profile` text NOT NULL,
  `admin_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `admin_entry_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_mobile`, `admin_gender`, `admin_address`, `admin_state`, `admin_city`, `admin_profile`, `admin_status`, `admin_entry_date`) VALUES
(1, 'lata nikunj chapadia', 'latarana4u@gmail.com', 'lata123', 9909901077, 'female', '145,shiv shakti society near tara vidhyalaya school,udhna,surat.', '1', '17', 'image/admin_profile.jpg', 'Active', '2022-01-04 11:48:04'),
(2, 'nikunj chapadia', 'nikunj12@yahoo.com', '123456', 9909901077, 'male', '32,rameshwar nagar society, surat.', '1', '18', 'image/IMG-20160622-WA0000.jpg', 'Active', '2022-01-04 11:50:40');

-- --------------------------------------------------------

--
-- Table structure for table `cancel_order`
--

CREATE TABLE `cancel_order` (
  `cancel_order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_no` int(11) NOT NULL,
  `reason` text NOT NULL,
  `reason_detail` text NOT NULL,
  `cancel_order_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `cancel_order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cancel_order`
--

INSERT INTO `cancel_order` (`cancel_order_id`, `user_id`, `product_id`, `order_id`, `order_no`, `reason`, `reason_detail`, `cancel_order_status`, `cancel_order_date`) VALUES
(1, 2, 15, 73, 1198873739, 'Expected delivery date has changed and the product is arriving at a later date.', 'nfjefhiefofoelfielfklfjf', 'Active', '2022-03-24 12:28:38'),
(2, 2, 15, 73, 1198873739, 'Product is being delivered to a wrong address(Customer’s mistake)', 'dv dmjdvekake', 'Active', '2022-03-24 12:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_image` text NOT NULL,
  `category_entry_date` datetime NOT NULL DEFAULT current_timestamp(),
  `category_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_image`, `category_entry_date`, `category_status`) VALUES
(2, 'beauty&health', 'product/Swiss_Beauty.jpg', '2022-01-07 11:22:28', 'Active'),
(4, 'Computers', 'product/computer.jpg', '2022-01-07 13:19:38', 'Active'),
(6, 'Computer Accessories', 'product/comp_accessories.jpg', '2022-01-08 12:21:28', 'Active'),
(9, 'Fashions', 'product/fashions.jpg', '2022-01-08 12:43:25', 'Active'),
(10, 'Home Appliances', 'product/home.jpg', '2022-01-10 10:59:49', 'Active'),
(11, 'Mobiles accessories', 'product/mobiles.jpg', '2022-01-20 12:04:17', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `coupon_info`
--

CREATE TABLE `coupon_info` (
  `coupon_id` int(11) NOT NULL,
  `coupon_code` text NOT NULL,
  `coupon_percentage` int(11) NOT NULL,
  `coupon_price` decimal(10,2) NOT NULL,
  `coupon_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `coupon_entry_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` text NOT NULL,
  `customer_password` varchar(155) NOT NULL,
  `customer_mobile` bigint(20) NOT NULL,
  `customer_gender` varchar(30) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_state` varchar(155) NOT NULL,
  `customer_city` varchar(155) NOT NULL,
  `customer_profile` text NOT NULL,
  `customer_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `customer_entry_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offer_info`
--

CREATE TABLE `offer_info` (
  `offer_id` int(11) NOT NULL,
  `offer_name` varchar(300) NOT NULL,
  `offer_price` decimal(10,0) NOT NULL,
  `offer_percentage` int(11) NOT NULL,
  `offer_desc` text NOT NULL,
  `offer_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `offer_entry_date` datetime NOT NULL DEFAULT current_timestamp(),
  `offer_expirydate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offer_info`
--

INSERT INTO `offer_info` (`offer_id`, `offer_name`, `offer_price`, `offer_percentage`, `offer_desc`, `offer_status`, `offer_entry_date`, `offer_expirydate`) VALUES
(2, 'xyz', 100, 0, 'nfjenhfjehgh', 'Active', '2022-01-21 18:34:44', '2022-03-29'),
(3, 'pqr', 130, 0, 'ejhbvurh3', 'Active', '2022-01-21 18:34:54', '2022-03-29'),
(4, 'new summer offert', 0, 0, '', 'Active', '2022-03-28 13:13:56', '2022-03-29'),
(5, 'new summer offer', 2585, 20, 'this summer is n20%off on product', 'Active', '2022-03-28 13:27:09', '2022-03-29'),
(6, 'scevekk', 0, 75, 's cnjshvudeh', 'Active', '2022-03-28 13:28:18', '2022-03-29'),
(7, 'mega offer', 0, 12, 'mega offer ', 'Active', '2024-08-09 19:42:26', '2024-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_no` bigint(20) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_method` varchar(155) NOT NULL,
  `shipping_charge` varchar(200) NOT NULL,
  `selling_price` decimal(10,2) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `discount_price` decimal(10,2) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `paid_unpaid` enum('Paid','Unpaid') NOT NULL DEFAULT 'Unpaid',
  `order_status` enum('Pending','Exchange','Shipped','Confirm','Reject','Delievered','Cancel','Return','Packed') NOT NULL DEFAULT 'Pending',
  `order_entry_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_no`, `product_id`, `order_method`, `shipping_charge`, `selling_price`, `order_qty`, `discount_price`, `total_amount`, `paid_unpaid`, `order_status`, `order_entry_date`) VALUES
(1, 2, 12, 0, 220898849, 7, 'Cash On Delievery', 'Free ', 870.00, 1, 130.00, 870.00, 'Unpaid', 'Delievered', '2022-03-29 07:55:53'),
(2, 2, 12, 0, 220898849, 15, 'Cash On Delievery', 'Free ', 225.00, 4, 130.00, 900.00, 'Paid', 'Pending', '2022-03-29 07:55:53'),
(3, 2, 12, 0, 975789393, 20, 'Cash On Delievery', '60₹ ', 160.00, 1, 130.00, 160.00, 'Unpaid', 'Pending', '2022-03-31 07:08:17'),
(4, 1, 3, 0, 99311426, 15, 'Online Payment', '60₹ ', 225.00, 1, 130.00, 225.00, 'Paid', 'Pending', '2022-05-07 06:46:06'),
(5, 1, 3, 0, 2016036334, 15, 'Online Payment', '60₹ ', 225.00, 1, 130.00, 225.00, 'Paid', 'Pending', '2022-05-07 06:52:01'),
(6, 1, 3, 0, 1769535239, 7, 'Online Payment', '60₹ ', 870.00, 1, 130.00, 870.00, 'Paid', 'Pending', '2022-05-07 06:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `order_return_exchange`
--

CREATE TABLE `order_return_exchange` (
  `return/exch_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `reason_id` int(11) NOT NULL,
  `reason_detail_id` int(11) NOT NULL,
  `return_method` varchar(50) NOT NULL,
  `return_image` text NOT NULL,
  `comment` text NOT NULL,
  `bank_id` int(11) NOT NULL,
  `return/ex_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `return/ex_entry_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_return_exchange`
--

INSERT INTO `order_return_exchange` (`return/exch_id`, `product_id`, `order_id`, `user_id`, `shipping_id`, `reason_id`, `reason_detail_id`, `return_method`, `return_image`, `comment`, `bank_id`, `return/ex_status`, `return/ex_entry_date`) VALUES
(1, 16, 74, 2, 12, 2, 6, 'Return', 'index/product5132XePkulL._SL1500_.jpg', 'dvwleekgogko', 0, 'Active', '2022-03-23 08:11:00'),
(2, 16, 74, 2, 12, 1, 2, 'Exachange', 'index/product5132XePkulL._SL1500_.jpg', 'wdjewfjekjijiiiiiiiiiiiiiiiiiiiiii', 0, 'Active', '2022-03-23 08:11:34'),
(3, 16, 74, 2, 12, 4, 12, 'Return', 'index/product5132XePkulL._SL1500_.jpg', 'namhdkajkaj', 1, 'Active', '2022-03-23 08:15:26'),
(4, 16, 74, 2, 12, 2, 6, 'Exachange', 'index/product5132XePkulL._SL1500_.jpg', 'sc mafkjkle,fke', 2, 'Active', '2022-03-24 13:12:08');

-- --------------------------------------------------------

--
-- Table structure for table `order_track`
--

CREATE TABLE `order_track` (
  `track_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_no` int(11) NOT NULL,
  `order_status` varchar(200) NOT NULL,
  `order_track_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_track`
--

INSERT INTO `order_track` (`track_id`, `order_id`, `order_no`, `order_status`, `order_track_date`) VALUES
(1, 41, 881382624, 'Pending', '2022-03-21 07:15:28'),
(2, 42, 2111302853, 'Pending', '2022-03-21 07:18:12'),
(3, 43, 2111302853, 'Pending', '2022-03-21 07:18:12'),
(4, 42, 2111302853, 'Pending', '2022-03-21 07:18:12'),
(5, 47, 1661344604, 'Pending', '2022-03-21 07:47:32'),
(6, 48, 1661344604, 'Pending', '2022-03-21 07:47:32'),
(7, 47, 1661344604, 'Pending', '2022-03-21 07:47:32'),
(8, 49, 2074412120, 'Pending', '2022-03-21 07:49:31'),
(9, 49, 2074412120, 'Pending', '2022-03-21 07:49:31'),
(10, 50, 2074412120, 'Pending', '2022-03-21 07:49:31'),
(11, 51, 1538735750, 'Pending', '2022-03-21 07:52:29'),
(12, 51, 1538735750, 'Pending', '2022-03-21 07:52:29'),
(13, 52, 1538735750, 'Pending', '2022-03-21 07:52:29'),
(14, 55, 691095990, 'Pending', '2022-03-21 08:07:01'),
(15, 55, 691095990, 'Pending', '2022-03-21 08:07:01'),
(16, 56, 691095990, 'Pending', '2022-03-21 08:07:01'),
(17, 73, 1198873739, 'Pending', '2022-03-21 08:15:08'),
(18, 74, 1198873739, 'Pending', '2022-03-21 08:15:08'),
(19, 73, 1198873739, 'Confirm', '2022-03-21 08:17:34'),
(20, 74, 1198873739, 'Delievered', '2022-03-21 08:17:43'),
(21, 74, 1198873739, 'Return', '2022-03-21 08:28:33'),
(22, 73, 1198873739, 'Cancel', '2022-03-24 12:32:10'),
(23, 74, 0, 'Exachange', '2022-03-24 13:12:08'),
(24, 75, 2027514072, 'Pending', '2022-03-25 05:44:51'),
(25, 76, 2027514072, 'Pending', '2022-03-25 05:44:51'),
(26, 75, 2027514072, 'Confirm', '2022-03-25 05:46:29'),
(27, 76, 2027514072, 'Delievered', '2022-03-25 05:46:34'),
(28, 77, 110458248, 'Pending', '2022-03-25 08:20:07'),
(29, 79, 1252810813, 'Pending', '2022-03-25 11:39:21'),
(30, 80, 1675213051, 'Pending', '2022-03-25 11:40:59'),
(31, 81, 602027199, 'Pending', '2022-03-25 12:05:53'),
(32, 85, 1627253665, 'Pending', '2022-03-25 12:41:53'),
(33, 86, 483943964, 'Pending', '2022-03-25 12:49:58'),
(34, 87, 611030887, 'Pending', '2022-03-25 12:50:22'),
(35, 88, 43466685, 'Pending', '2022-03-25 13:07:30'),
(36, 89, 1960014878, 'Pending', '2022-03-25 13:43:02'),
(37, 90, 292294710, 'Pending', '2022-03-25 13:44:01'),
(38, 91, 1767625826, 'Pending', '2022-03-25 13:49:58'),
(39, 92, 878185789, 'Pending', '2022-03-26 06:22:35'),
(40, 93, 1305360019, 'Pending', '2022-03-26 06:25:54'),
(41, 94, 1118676550, 'Pending', '2022-03-26 06:43:20'),
(42, 96, 1754667938, 'Pending', '2022-03-26 06:54:19'),
(43, 97, 852628030, 'Pending', '2022-03-26 06:58:50'),
(44, 98, 69628950, 'Pending', '2022-03-26 07:19:56'),
(45, 100, 706867601, 'Pending', '2022-03-26 07:27:12'),
(46, 102, 1511280564, 'Pending', '2022-03-26 07:36:09'),
(47, 103, 872021271, 'Pending', '2022-03-26 13:05:16'),
(48, 104, 16154396, 'Pending', '2022-03-26 13:06:14'),
(49, 105, 371975493, 'Pending', '2022-03-26 16:32:07'),
(50, 106, 371975493, 'Pending', '2022-03-26 16:32:07'),
(51, 107, 371975493, 'Pending', '2022-03-26 16:32:07'),
(52, 108, 1485780709, 'Pending', '2022-03-26 16:33:24'),
(53, 110, 167631474, 'Pending', '2022-03-26 16:47:06'),
(54, 111, 2028472016, 'Pending', '2022-03-26 16:49:03'),
(55, 112, 780317298, 'Pending', '2022-03-26 16:52:48'),
(56, 113, 1046445135, 'Pending', '2022-03-26 16:55:49'),
(57, 114, 972959774, 'Pending', '2022-03-26 16:57:23'),
(58, 115, 408751888, 'Pending', '2022-03-26 16:58:31'),
(59, 116, 1313954675, 'Pending', '2022-03-26 17:03:31'),
(60, 117, 530607179, 'Pending', '2022-03-26 17:04:57'),
(61, 118, 900020632, 'Pending', '2022-03-26 17:05:53'),
(62, 119, 1553978464, 'Pending', '2022-03-26 17:06:37'),
(63, 120, 2050461202, 'Pending', '2022-03-26 17:10:14'),
(64, 121, 1775217055, 'Pending', '2022-03-26 17:13:19'),
(65, 122, 983277515, 'Pending', '2022-03-28 05:45:49'),
(66, 123, 1619167486, 'Pending', '2022-03-28 05:47:03'),
(67, 124, 805381620, 'Pending', '2022-03-28 05:49:34'),
(68, 125, 577107396, 'Pending', '2022-03-28 05:52:30'),
(69, 126, 1710535384, 'Pending', '2022-03-28 05:53:03'),
(70, 127, 948074946, 'Pending', '2022-03-28 05:54:08'),
(71, 128, 1157309293, 'Pending', '2022-03-28 05:56:27'),
(72, 129, 1770352726, 'Pending', '2022-03-28 05:58:22'),
(73, 130, 1461644456, 'Pending', '2022-03-28 06:00:09'),
(74, 131, 509830731, 'Pending', '2022-03-28 06:01:30'),
(75, 132, 883332839, 'Pending', '2022-03-28 06:02:05'),
(76, 133, 196589748, 'Pending', '2022-03-28 06:16:31'),
(77, 134, 1672669779, 'Pending', '2022-03-28 06:19:08'),
(78, 135, 1021480066, 'Pending', '2022-03-28 06:19:54'),
(79, 136, 2091105077, 'Pending', '2022-03-28 06:20:57'),
(80, 137, 1221974949, 'Pending', '2022-03-28 06:21:55'),
(81, 138, 1155825252, 'Pending', '2022-03-28 06:22:39'),
(82, 139, 872057825, 'Pending', '2022-03-28 06:23:04'),
(83, 140, 897800302, 'Pending', '2022-03-28 06:23:40'),
(84, 141, 1816527779, 'Pending', '2022-03-28 07:11:33'),
(85, 142, 1906603755, 'Pending', '2022-03-28 07:16:12'),
(86, 142, 1906603755, 'Delievered', '2022-03-28 07:17:51'),
(87, 142, 1906603755, 'Confirm', '2022-03-28 07:22:31'),
(88, 142, 1906603755, 'Delievered', '2022-03-28 07:22:36'),
(89, 1, 220898849, 'Pending', '2022-03-29 07:55:53'),
(90, 2, 220898849, 'Pending', '2022-03-29 07:55:53'),
(91, 2, 220898849, 'Delievered', '2022-03-29 08:30:06'),
(92, 3, 975789393, 'Pending', '2022-03-31 07:08:17'),
(93, 4, 99311426, 'Pending', '2022-05-07 06:46:06'),
(94, 5, 2016036334, 'Pending', '2022-05-07 06:52:01'),
(95, 6, 1769535239, 'Pending', '2022-05-07 06:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `payment_info`
--

CREATE TABLE `payment_info` (
  `pay_id` int(11) NOT NULL,
  `payment_id` text NOT NULL,
  `order_no` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `payment_method` varchar(200) NOT NULL,
  `payment_status` enum('Pending','Credit','Debit') NOT NULL DEFAULT 'Pending',
  `payment_entry_date` datetime DEFAULT current_timestamp(),
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_info`
--

INSERT INTO `payment_info` (`pay_id`, `payment_id`, `order_no`, `customer_id`, `payment_method`, `payment_status`, `payment_entry_date`, `order_id`) VALUES
(1, 'MOJO2326H05A42723923', 94, 2, 'Online Payment', 'Credit', '2022-03-26 12:13:20', 0),
(2, 'MOJO2326H05A42723923', 96, 2, 'Online Payment', 'Credit', '2022-03-26 12:24:19', 0),
(3, 'MOJO2326H05A42723923', 97, 2, 'Online Payment', 'Credit', '2022-03-26 12:28:50', 0),
(4, 'MOJO2326H05A42723923', 98, 2, 'Online Payment', 'Credit', '2022-03-26 12:49:56', 0),
(5, 'MOJO2326H05A42723923', 706867601, 2, 'Online Payment', 'Credit', '2022-03-26 12:57:12', 0),
(6, 'MOJO2326A05A42723924<br>', 1511280564, 102, '2', 'Credit', '2022-03-26 13:06:09', 0),
(7, '', 872021271, 103, '2', 'Pending', '2022-03-26 18:35:16', 0),
(8, '', 16154396, 104, '2', 'Pending', '2022-03-26 18:36:14', 0),
(9, '', 1485780709, 108, '1', 'Pending', '2022-03-26 22:03:24', 0),
(10, '', 110, 167631474, '1', 'Pending', '2022-03-26 22:17:06', 0),
(11, '', 2028472016, 1, 'Online Payment', 'Pending', '2022-03-26 22:19:03', 111),
(12, '', 780317298, 1, 'Online Payment', 'Pending', '2022-03-26 22:22:48', 112),
(13, '', 1046445135, 1, 'Online Payment', 'Pending', '2022-03-26 22:25:49', 113),
(14, '', 972959774, 1, 'Online Payment', 'Pending', '2022-03-26 22:27:23', 114),
(15, '', 408751888, 1, 'Online Payment', 'Pending', '2022-03-26 22:28:31', 115),
(16, '', 530607179, 1, 'Online Payment', 'Pending', '2022-03-26 22:34:57', 117),
(17, '', 1553978464, 1, 'Online Payment', 'Pending', '2022-03-26 22:36:37', 119),
(18, '', 983277515, 1, 'Online Payment', 'Pending', '2022-03-28 11:15:49', 122),
(19, 'MOJO2328H05A23459847<br>', 1619167486, 1, 'Online Payment', 'Credit', '2022-03-28 11:17:03', 123),
(20, '', 805381620, 1, 'Online Payment', 'Pending', '2022-03-28 11:19:34', 124),
(21, '', 577107396, 1, 'Online Payment', 'Pending', '2022-03-28 11:22:30', 125),
(22, '', 1710535384, 1, 'Online Payment', 'Pending', '2022-03-28 11:23:03', 126),
(23, '', 948074946, 1, 'Online Payment', 'Pending', '2022-03-28 11:24:08', 127),
(24, '', 1157309293, 1, 'Online Payment', 'Pending', '2022-03-28 11:26:27', 128),
(25, '', 1770352726, 1, 'Online Payment', 'Pending', '2022-03-28 11:28:22', 129),
(26, '', 1461644456, 1, 'Online Payment', 'Pending', '2022-03-28 11:30:09', 130),
(27, '', 509830731, 1, 'Online Payment', 'Pending', '2022-03-28 11:31:30', 131),
(28, '', 883332839, 1, 'Online Payment', 'Pending', '2022-03-28 11:32:05', 132),
(29, '', 196589748, 1, 'Online Payment', 'Pending', '2022-03-28 11:46:31', 133),
(30, '', 1672669779, 1, 'Online Payment', 'Pending', '2022-03-28 11:49:08', 134),
(31, '', 1021480066, 1, 'Online Payment', 'Pending', '2022-03-28 11:49:54', 135),
(32, '', 2091105077, 1, 'Online Payment', 'Pending', '2022-03-28 11:50:57', 136),
(33, '', 1221974949, 1, 'Online Payment', 'Pending', '2022-03-28 11:51:55', 137),
(34, '', 1155825252, 1, 'Online Payment', 'Pending', '2022-03-28 11:52:39', 138),
(35, '', 872057825, 1, 'Online Payment', 'Pending', '2022-03-28 11:53:04', 139),
(36, 'MOJO2328605A23459869', 897800302, 1, 'Online Payment', 'Credit', '2022-03-28 11:53:40', 140),
(37, 'MOJO2328105A23459895', 1816527779, 1, 'Online Payment', 'Credit', '2022-03-28 12:41:33', 141),
(38, '', 99311426, 1, 'Online Payment', 'Pending', '2022-05-07 12:16:06', 4),
(39, '', 2016036334, 1, 'Online Payment', 'Pending', '2022-05-07 12:22:01', 5),
(40, '', 1769535239, 1, 'Online Payment', 'Pending', '2022-05-07 12:24:51', 6);

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `prod_img_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `prod_img_path` text NOT NULL,
  `prod_img_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `prod_img_entry_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`prod_img_id`, `product_id`, `prod_img_path`, `prod_img_status`, `prod_img_entry_date`) VALUES
(1, 6, 'product/computer.jpg', 'Active', '2022-01-26 13:56:46'),
(2, 6, 'product/keyboard.jpg', 'Active', '2022-01-26 13:56:46'),
(3, 7, 'product/FROCK.jpg', 'Active', '2022-01-26 14:00:43'),
(4, 7, 'product/FROCK.jpg', 'Active', '2022-01-26 14:00:43'),
(5, 8, 'product/', 'Active', '2022-01-26 14:01:36'),
(6, 9, 'product/', 'Active', '2022-01-26 14:01:42'),
(7, 10, 'product/1643373891', 'Active', '2022-01-28 12:40:34'),
(8, 10, 'product/1643373891', 'Active', '2022-01-28 12:40:34'),
(9, 1, 'product/1644308287download.jpg', 'Active', '2022-01-31 18:25:42'),
(15, 1, 'product/1644385633download - Copy.jpg', 'Active', '2022-02-09 11:17:13'),
(18, 1, 'product/1644385831computer.jpg', 'Active', '2022-02-09 11:20:31'),
(19, 1, 'product/1644385831download (1).jpg', 'Active', '2022-02-09 11:20:31'),
(20, 20, 'product/1648534744Huda-Beauty-Pressed-Powder-Power-SDL071785804-1-c6bf5.jpg', 'Active', '2022-03-29 11:45:32'),
(21, 20, 'product/1648534753OIP (1).jpg', 'Active', '2022-03-29 11:45:32'),
(22, 20, 'product/1648534760OIP (2).jpg', 'Active', '2022-03-29 11:45:32'),
(23, 20, 'product/1648534771OIP.jpg', 'Active', '2022-03-29 11:45:32'),
(24, 20, 'product/1648534784Huda-Pressed-Powder-Translucent-10-SDL607401825-1-03473.jpg', 'Active', '2022-03-29 11:45:32'),
(26, 22, 'product/1648819836download.jpg', 'Active', '2022-04-01 19:00:36'),
(27, 22, 'product/1648819836OIP (1).jpg', 'Active', '2022-04-01 19:00:36'),
(28, 22, 'product/1648819836OIP (2).jpg', 'Active', '2022-04-01 19:00:36'),
(29, 22, 'product/1648819836OIP (3).jpg', 'Active', '2022-04-01 19:00:36'),
(30, 22, 'product/1648819836OIP (4).jpg', 'Active', '2022-04-01 19:00:36'),
(31, 22, 'product/1648819836OIP.jpg', 'Active', '2022-04-01 19:00:36');

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE `product_info` (
  `product_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `offer_id` int(11) NOT NULL,
  `product_name` varchar(355) NOT NULL,
  `product_size` varchar(300) NOT NULL,
  `product_desc` text NOT NULL,
  `product_category` varchar(200) NOT NULL,
  `product_subcategory` varchar(200) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `cost_price` decimal(10,2) NOT NULL,
  `selling_price` decimal(10,0) NOT NULL,
  `discount_price` decimal(10,0) NOT NULL,
  `product_brand` varchar(200) NOT NULL,
  `product_image` text NOT NULL,
  `product_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `product_entry_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`product_id`, `seller_id`, `offer_id`, `product_name`, `product_size`, `product_desc`, `product_category`, `product_subcategory`, `product_qty`, `product_price`, `cost_price`, `selling_price`, `discount_price`, `product_brand`, `product_image`, `product_status`, `product_entry_date`) VALUES
(1, 2, 3, 'mouse123', 'none', 'wireless mouse', '6', '5', 3, 740.00, 450.00, 610, 130, 'iball', 'product/OIP.jpg', 'Active', '2022-01-26 13:45:31'),
(4, 2, 3, 'keyboard', 'none', 'wireless keyboard ', '6', '1', 5, 1700.00, 1500.00, 1570, 130, 'iball', 'product/keyboard.jpg', 'Active', '2022-01-26 13:52:36'),
(5, 2, 3, 'mouse456', 'none', 'wireless mouse', '6', '5', 3, 650.00, 450.00, 520, 130, 'iball', 'product/319jchMEcKL._AC_SX184_.jpg', 'Active', '2022-01-26 13:53:15'),
(6, 2, 3, 'keyboard', 'none', 'wireless keyboard', '6', '1', 3, 650.00, 450.00, 520, 130, 'iball', 'product/keyboard.jpg', 'Active', '2022-01-26 13:56:46'),
(7, 2, 3, 'frock123', 'small,medium,l,xl,xxl,xxxl', 'pink frock', '9', '4', 9, 1000.00, 650.00, 870, 130, 'myntra', 'product/FROCK.jpg', 'Active', '2022-01-26 14:00:43'),
(10, 2, 2, 'LG ', 'none', 'dddfkjui8uu', '4', '15', 15, 1650.00, 1250.00, 1550, 100, 'LG', 'product/computer.jpg', 'Active', '2022-01-28 12:40:34'),
(11, 2, 2, 'MAC foundation', 'none', 'Foundation of mac is  so good,', '2', '8', 20, 250.00, 180.00, 150, 100, 'mac', 'product/OIP (1).jpg', 'Active', '2022-01-29 12:32:33'),
(12, 3, 3, 'LED TV ', 'none', 'With the LG 43LM5650PTA Television, immerse into the world of your favorite shows and movies with vibrant, detailed visuals and crystal-clear audio.', '10', '7', 5, 32999.00, 30500.00, 32869, 130, 'LG', 'product/OIP (3).jpg', 'Active', '2022-01-29 12:42:27'),
(14, 3, 2, 'LG 43 inch ultra  LED TELEVISION', 'none', 'tablet of samsung', '4', '19', 5, 5263.00, 4630.00, 5163, 100, 'samsung', 'product/51S2OfjRkIL._AC_UL480_QL65_.jpg', 'Active', '2022-02-14 10:58:50'),
(15, 2, 3, 'dress', 'small,medium,l,xl,xxl,xxxl', 'peplum kurti', '9', '25', 8, 355.00, 250.00, 225, 130, 'liba', 'product/download (3).jpg', 'Active', '2022-02-14 11:14:43'),
(16, 2, 2, 'mi charger', 'none', 'charge in white', '11', '22', 2, 650.00, 530.00, 550, 100, 'mi', 'product/16448178625132XePkulL._SL1500_.jpg', 'Active', '2022-02-14 11:21:02'),
(17, 2, 2, 'kurti', 'small,medium,l,xl,xxl,xxxl', 'single slit kurti \r\nsize: l,xl,xxl\r\nbottom wear :no\r\nmaterial-cotton \r\n', '9', '25', 5, 250.00, 130.00, 150, 100, 'liba', 'product/1647233742download (2).jpg', 'Active', '2022-03-14 10:25:42'),
(18, 3, 3, 'kurti', 'small,medium,l,xl,xxl,xxxl', 'umbrella full ger kurti\r\nmaterial-cotton\r\nbottom wear - no \r\nsize:l,xl,xxl,xxxl\r\n', '9', '25', 3, 370.00, 250.00, 240, 130, 'liba', 'product/1647233837download (1).jpg', 'Active', '2022-03-14 10:27:17'),
(19, 3, 2, 'kurtis', 'small,medium,l,xl,xxl,xxxl', 'single slit kurti with long sleave\r\nmateria;l- polyester\r\nbottom wear:yes\r\nsize:l,xl,xxl,xxxl\r\n', '9', '25', 9, 420.00, 230.00, 320, 100, 'myntra', 'product/1647233958kurti.jpg', 'Active', '2022-03-14 10:29:18'),
(20, 4, 3, 'compaq powder', '', 'best beauty product compay and compaq is so nice', '2', '8', 5, 290.00, 110.00, 160, 130, 'huda beauty', 'product/1648534440Huda-Pressed-Powder-Translucent-10-SDL607401825-1-03473.jpg', 'Active', '2022-03-29 11:44:00'),
(21, 4, 5, 'dell laptop', '', 'DELL Inspiron Core i5 11th Gen - (16 GB/512 GB SSD/Windows 11 Home) Inspiron 5518 Thin and Light Laptop  (15.6 Inch, Platinum Silver, 1.64 Kgs, With MS Office)\r\n4 ', '4', '16', 3, 70954.00, 69854.00, 68369, 2585, 'dell', 'product/1648541767na-thin-and-light-laptop-dell-original-imag2qm3x6zhexrf.webp', 'Active', '2022-03-29 13:46:07'),
(22, 2, 3, 'tshirt for men', '', 'cotton material .size all are available', '9', '24', 6, 470.00, 350.00, 340, 130, 'adidas', 'product/1648819816OIP (1).jpg', 'Active', '2022-04-01 19:00:16');

-- --------------------------------------------------------

--
-- Table structure for table `rating_info`
--

CREATE TABLE `rating_info` (
  `rating_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `rating_point` int(11) NOT NULL,
  `rating_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `rating_entry_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating_info`
--

INSERT INTO `rating_info` (`rating_id`, `product_id`, `customer_id`, `rating_point`, `rating_status`, `rating_entry_date`) VALUES
(1, 15, 2, 5, 'Active', '2022-03-29 18:38:28'),
(2, 15, 2, 2, 'Active', '2022-03-29 18:39:12'),
(3, 15, 2, 4, 'Active', '2022-03-29 18:40:34'),
(4, 15, 2, 5, 'Active', '2022-03-29 18:40:48'),
(5, 15, 2, 2, 'Active', '2022-03-30 13:03:13'),
(6, 1, 2, 1, 'Active', '2022-04-02 14:08:22'),
(7, 6, 2, 5, 'Active', '2022-04-02 14:09:08'),
(8, 6, 2, 5, 'Active', '2022-04-02 14:22:34'),
(9, 15, 2, 5, 'Active', '2022-04-02 17:50:17'),
(10, 15, 2, 4, 'Active', '2022-04-02 17:50:23'),
(11, 15, 2, 3, 'Active', '2022-04-02 17:50:43'),
(12, 15, 2, 5, 'Active', '2022-04-02 18:02:38'),
(13, 15, 2, 5, 'Active', '2022-04-02 18:03:05'),
(14, 4, 0, 0, 'Active', '2022-04-04 11:51:43'),
(15, 4, 2, 3, 'Active', '2022-04-04 11:52:30'),
(16, 4, 2, 5, 'Active', '2022-04-04 11:52:51'),
(17, 4, 2, 4, 'Active', '2022-04-04 11:59:11'),
(18, 4, 0, 3, 'Active', '2022-04-04 12:05:18'),
(19, 4, 2, 2, 'Active', '2022-04-04 12:08:41'),
(20, 4, 2, 2, 'Active', '2022-04-04 12:10:11'),
(21, 4, 2, 1, 'Active', '2022-04-04 12:11:52'),
(22, 4, 2, 1, 'Active', '2022-04-04 12:13:08'),
(23, 4, 2, 5, 'Active', '2022-04-04 12:13:31'),
(24, 4, 2, 4, 'Active', '2022-04-04 12:14:33'),
(25, 4, 2, 3, 'Active', '2022-04-04 12:15:36'),
(26, 4, 2, 3, 'Active', '2022-04-04 12:15:50'),
(27, 4, 2, 3, 'Active', '2022-04-04 12:16:20'),
(28, 5, 2, 4, 'Active', '2022-04-04 12:19:17'),
(29, 6, 2, 4, 'Active', '2022-04-04 12:47:33'),
(30, 6, 2, 3, 'Active', '2022-04-04 12:47:51'),
(31, 6, 2, 3, 'Active', '2022-04-04 12:47:52'),
(32, 6, 2, 1, 'Active', '2022-04-04 12:48:25'),
(33, 1, 2, 3, 'Active', '2022-04-23 11:33:22'),
(34, 1, 2, 3, 'Active', '2022-04-23 11:33:57'),
(35, 1, 2, 0, 'Active', '2022-04-23 11:34:15');

-- --------------------------------------------------------

--
-- Table structure for table `reason_detail`
--

CREATE TABLE `reason_detail` (
  `reas_detail_id` int(11) NOT NULL,
  `reason_id` int(11) NOT NULL,
  `reason_detail_text` text NOT NULL,
  `reason_detail_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `reason_detail_entrydate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reason_detail`
--

INSERT INTO `reason_detail` (`reas_detail_id`, `reason_id`, `reason_detail_text`, `reason_detail_status`, `reason_detail_entrydate`) VALUES
(1, 1, 'Found Lower Price elsewhere', 'Active', '2022-03-15 12:14:58'),
(2, 1, 'Did not like the product', 'Active', '2022-03-15 12:24:59'),
(3, 1, 'Delivery was late', 'Active', '2022-03-15 12:25:09'),
(4, 1, 'Ordered by mistake', 'Active', '2022-03-15 12:25:18'),
(5, 1, 'Changed my mind', 'Active', '2022-03-15 12:25:28'),
(6, 2, 'Product\'s quality or performance is not good', 'Active', '2022-03-15 13:07:01'),
(7, 3, 'Size Correct but too tight', 'Active', '2022-03-15 13:42:00'),
(8, 3, 'Size Correct but too loose', 'Active', '2022-03-15 13:43:32'),
(9, 3, 'Did not like to fit', 'Active', '2022-03-15 13:44:58'),
(10, 4, 'Product was dirty or had stains', 'Active', '2022-03-15 13:45:23'),
(11, 4, 'Product was broken or torn', 'Active', '2022-03-15 13:45:34'),
(12, 4, 'Both packaging and product were broken or torn', 'Active', '2022-03-15 13:45:53'),
(13, 5, 'Part of the product missing', 'Active', '2022-03-15 13:46:13'),
(14, 5, 'Got less quantity than ordered', 'Active', '2022-03-15 13:46:32'),
(16, 6, 'Same product but different colour', 'Active', '2022-03-15 13:47:10'),
(17, 6, 'Completely different product from shown', 'Active', '2022-03-15 13:47:39'),
(18, 6, 'Wrond size different', 'Active', '2022-03-16 04:28:06');

-- --------------------------------------------------------

--
-- Table structure for table `reason_info`
--

CREATE TABLE `reason_info` (
  `reason_id` int(11) NOT NULL,
  `reason_text` text NOT NULL,
  `reason_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `reason_entry_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reason_info`
--

INSERT INTO `reason_info` (`reason_id`, `reason_text`, `reason_status`, `reason_entry_date`) VALUES
(1, 'Don\'t Need the Product Anymore                            ', 'Active', '2022-03-15 07:35:05'),
(2, 'Have Other Quality Related Issues ', 'Active', '2022-03-15 07:39:28'),
(3, 'Have Size/Fit Related Issues', 'Active', '2022-03-15 07:39:42'),
(4, 'Received Defective Product(Stains/Damaged/Torn)', 'Active', '2022-03-15 07:40:16'),
(5, 'Received Incomplete Product(Missing Quantity / Accessory) ', 'Active', '2022-03-15 07:40:38'),
(7, 'Recieved Wrong Product(Different Color /Size/Product)', 'Active', '2022-03-16 04:55:15');

-- --------------------------------------------------------

--
-- Table structure for table `reg_city`
--

CREATE TABLE `reg_city` (
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `city_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `city_entrydate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg_city`
--

INSERT INTO `reg_city` (`city_id`, `state_id`, `city_name`, `city_status`, `city_entrydate`) VALUES
(1, 4, 'Ludhiana', 'Active', '2021-11-29 13:25:09'),
(2, 4, 'Rajpura', 'Active', '2021-11-29 13:25:09'),
(3, 4, 'Patiala', 'Active', '2021-11-29 13:25:09'),
(4, 4, 'Moga', 'Active', '2021-11-29 13:25:09'),
(5, 6, 'Manglore', 'Active', '2021-11-29 13:27:29'),
(6, 6, 'Banglore', 'Active', '2021-11-29 13:27:29'),
(7, 6, 'Udupi', 'Active', '2021-11-29 13:27:29'),
(8, 6, 'Mysor', 'Active', '2021-11-29 13:27:29'),
(9, 6, 'Belguam', 'Active', '2021-11-29 13:27:29'),
(10, 3, 'Guwahati', 'Active', '2021-11-29 13:28:50'),
(11, 3, 'Tezpur', 'Active', '2021-11-29 13:28:50'),
(12, 3, 'Dhubri', 'Active', '2021-11-29 13:28:50'),
(13, 7, 'Madgoan', 'Active', '2021-11-29 13:31:20'),
(14, 7, 'Panji', 'Active', '2021-11-29 13:31:20'),
(15, 1, 'Ahmedabad', 'Active', '2021-11-29 13:33:02'),
(16, 1, 'Amreli', 'Active', '2021-11-29 13:33:02'),
(17, 1, 'Bharuch', 'Active', '2021-11-29 13:33:02'),
(18, 1, 'Surat', 'Active', '2021-11-29 13:33:02'),
(19, 1, 'Navsari', 'Active', '2021-11-29 13:33:02'),
(20, 2, 'Mumbai', 'Active', '2021-11-29 13:35:08'),
(21, 2, 'Nagpur', 'Active', '2021-11-29 13:35:08'),
(22, 2, 'Nashik', 'Active', '2021-11-29 13:35:08'),
(23, 2, 'Kolhapur', 'Active', '2021-11-29 13:35:08'),
(24, 2, 'Pune', 'Active', '2021-11-29 13:35:08'),
(25, 5, 'Agra', 'Active', '2021-11-29 13:37:03'),
(26, 5, 'Ayodhya', 'Active', '2021-11-29 13:37:03'),
(27, 5, 'Bonda', 'Active', '2021-11-29 13:37:03'),
(28, 5, 'Lucknow', 'Active', '2021-11-29 13:37:03'),
(29, 5, 'Meerut', 'Active', '2021-11-29 13:37:03');

-- --------------------------------------------------------

--
-- Table structure for table `reg_state`
--

CREATE TABLE `reg_state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(100) NOT NULL,
  `state_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `state_entrydate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg_state`
--

INSERT INTO `reg_state` (`state_id`, `state_name`, `state_status`, `state_entrydate`) VALUES
(1, 'Gujarat', 'Active', '2021-11-29 13:22:59'),
(2, 'Maharastra', 'Active', '2021-11-29 13:22:59'),
(3, 'Assam', 'Active', '2021-11-29 13:22:59'),
(4, 'Punjab', 'Active', '2021-11-29 13:22:59'),
(5, 'Uttarpradesh', 'Active', '2021-11-29 13:22:59'),
(6, 'Karnataka', 'Active', '2021-11-29 13:22:59'),
(7, 'Goa', 'Active', '2021-11-29 13:22:59');

-- --------------------------------------------------------

--
-- Table structure for table `review_info`
--

CREATE TABLE `review_info` (
  `review_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `review_desc` text NOT NULL,
  `review_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `review_entry_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review_info`
--

INSERT INTO `review_info` (`review_id`, `product_id`, `customer_id`, `review_desc`, `review_status`, `review_entry_date`) VALUES
(1, 15, 2, 'good', 'Active', '2022-03-29 18:39:12'),
(2, 15, 2, '587887877', 'Active', '2022-03-29 18:40:34'),
(3, 15, 2, '587887877', 'Active', '2022-03-29 18:40:48'),
(4, 15, 2, 'Description', 'Active', '2022-03-30 13:03:13'),
(5, 1, 2, 'nice', 'Active', '2022-04-02 14:08:22'),
(6, 6, 2, 'very good', 'Active', '2022-04-02 14:09:08'),
(7, 6, 2, 'nicde', 'Active', '2022-04-02 14:22:34'),
(8, 15, 0, 'sasac', 'Active', '2022-04-02 17:34:33'),
(9, 15, 2, 'okay', 'Active', '2022-04-02 17:50:17'),
(10, 15, 2, 'okay', 'Active', '2022-04-02 17:50:23'),
(11, 15, 2, 'jj', 'Active', '2022-04-02 17:50:43'),
(12, 15, 2, 'very good', 'Active', '2022-04-02 18:02:38'),
(13, 15, 2, 'nice', 'Active', '2022-04-02 18:03:05'),
(14, 4, 0, '1trlmgihi4hi4hj', 'Active', '2022-04-04 11:51:43'),
(15, 4, 2, 'good', 'Active', '2022-04-04 11:52:30'),
(16, 4, 2, 'very nice', 'Active', '2022-04-04 11:52:51'),
(17, 4, 2, ' D DZ DZ', 'Active', '2022-04-04 11:59:11'),
(18, 4, 0, 'ca,dcld,c', 'Active', '2022-04-04 12:05:18'),
(19, 4, 2, 'its okay product', 'Active', '2022-04-04 12:08:41'),
(20, 4, 2, 'giood', 'Active', '2022-04-04 12:10:11'),
(21, 4, 2, 'okay', 'Active', '2022-04-04 12:11:52'),
(22, 4, 2, 'okay', 'Active', '2022-04-04 12:13:08'),
(23, 4, 2, 'just ok', 'Active', '2022-04-04 12:13:31'),
(24, 4, 2, 'just ok.nice product', 'Active', '2022-04-04 12:14:33'),
(25, 4, 2, 'just ok.nice productdcdvc', 'Active', '2022-04-04 12:15:36'),
(26, 4, 2, 'just ok.nice productdcdvc', 'Active', '2022-04-04 12:15:50'),
(27, 4, 2, 'good .', 'Active', '2022-04-04 12:16:20'),
(28, 5, 2, 'just okay', 'Active', '2022-04-04 12:19:17'),
(29, 6, 2, 'MNICE', 'Active', '2022-04-04 12:47:33'),
(30, 6, 2, 'GOOD', 'Active', '2022-04-04 12:47:51'),
(31, 6, 2, 'GOOD', 'Active', '2022-04-04 12:47:52'),
(32, 6, 2, 'NICE', 'Active', '2022-04-04 12:48:25'),
(33, 1, 2, 'nice', 'Active', '2022-04-23 11:33:22'),
(34, 1, 2, 'good\n', 'Active', '2022-04-23 11:33:57'),
(35, 1, 2, '123456', 'Active', '2022-04-23 11:34:15');

-- --------------------------------------------------------

--
-- Table structure for table `seller_info`
--

CREATE TABLE `seller_info` (
  `seller_id` int(11) NOT NULL,
  `seller_name` varchar(255) NOT NULL,
  `seller_email` text NOT NULL,
  `seller_password` varchar(155) NOT NULL,
  `seller_mobile` bigint(20) NOT NULL,
  `seller_gender` varchar(30) NOT NULL,
  `seller_address` text NOT NULL,
  `seller_state` varchar(155) NOT NULL,
  `seller_city` varchar(155) NOT NULL,
  `seller_profile` text NOT NULL,
  `seller_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `seller_entry_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller_info`
--

INSERT INTO `seller_info` (`seller_id`, `seller_name`, `seller_email`, `seller_password`, `seller_mobile`, `seller_gender`, `seller_address`, `seller_state`, `seller_city`, `seller_profile`, `seller_status`, `seller_entry_date`) VALUES
(2, 'hemant jariwala', 'hemant123@yahoo.in', '412', 9685966523, '', 'guvahati villege,assam.', '3', '10', 'product/IMG_20150207_205525.jpg', 'Active', '2022-01-21 13:24:28'),
(3, 'ashish kulkarni', 'ashish12@yahoo.in', '885', 8572482214, '', 'mumbai ', '2', '20', 'image/IMG_20141023_194125 - Copy.jpg', 'Active', '2022-01-21 13:28:34'),
(4, 'kulkarni singh', 'kulkarni12@yahoo.in', '155', 9085968122, '', '145-A shivshakti society near taravidhyalaya school,surat-394210', '5', '27', 'product/pngtree-user-vector-avatar-png-image_1541962.jpg', 'Active', '2022-03-29 11:40:49');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_details`
--

CREATE TABLE `shipping_details` (
  `shipping_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `cust_name` varchar(200) NOT NULL,
  `shipping_address` text NOT NULL,
  `shipping_mobile` bigint(20) NOT NULL,
  `shipping_email` text NOT NULL,
  `shipping_state` varchar(155) NOT NULL,
  `shipping_city` varchar(200) NOT NULL,
  `shipping_pincode` int(11) NOT NULL,
  `shippinhg_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `shipping_entry_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shipping_details`
--

INSERT INTO `shipping_details` (`shipping_id`, `customer_id`, `cust_name`, `shipping_address`, `shipping_mobile`, `shipping_email`, `shipping_state`, `shipping_city`, `shipping_pincode`, `shippinhg_status`, `shipping_entry_date`) VALUES
(3, 1, 'hemant', 'shivshakti society near taravidhyalaya school,surat', 9638598860, 'hemant@yahoo.com', '2', '20', 0, 'Active', '2022-03-19 10:22:07'),
(5, 2, 'Hemant D. Rana', '145-A,shivshakti society near taravidhyalaya school,surat-394210', 9875812554, 'latarana4u@gmail.com', 'Select State', 'Select City', 0, 'Active', '2022-03-19 23:57:44'),
(6, 2, 'Hemant D. Rana', '145-A,shivshakti society near taravidhyalaya school,surat-394210', 9875812554, 'latarana4u@gmail.com', 'Select State', 'Select City', 0, 'Active', '2022-03-19 23:57:56'),
(7, 2, 'Hemant D. Rana', '145-A shivshakti society near taravidhyalaya school,surat-394210', 9875812554, 'latarana4u@gmail.com', 'Select State', 'Select City', 0, 'Active', '2022-03-20 00:06:30'),
(8, 2, '', ' ', 0, '', 'Select State', 'Select City', 0, 'Active', '2022-03-20 00:06:36'),
(10, 2, 'rahul jariwala', '145-A shivshakti society near taravidhyalaya school,surat-394210', 1234567890, 'rahul@gmail.com', '1', 'Select City', 0, 'Active', '2022-03-21 12:14:15'),
(11, 2, 'rahul.s.gupta', '145-A shivshakti society near taravidhyalaya school,surat-394210', 9875812554, 'latarana4u@gmail.com', '7', 'Select City', 0, 'Active', '2022-03-21 12:25:18'),
(12, 2, 'rahul D. Rana', '145-A shivshakti society near taravidhyalaya school,surat ', 9875812554, 'rahul@gmail.com', '4', '4', 394521, 'Active', '2022-03-21 12:26:35'),
(13, 2, 'rahul.s.gupta', '145-A,shivshakti society near taravidhyalaya school,surat ', 9875812554, 'latarana4u@gmail.com', '1', '18', 394210, 'Active', '2022-03-21 12:30:54');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcategory_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) NOT NULL,
  `subcategory_image` text NOT NULL,
  `subcategory_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `subcategory_entry_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcategory_id`, `category_id`, `subcategory_name`, `subcategory_image`, `subcategory_status`, `subcategory_entry_date`) VALUES
(1, 6, 'keyboard', 'product/keyboard.jpg', 'Active', '2022-01-10 12:16:42'),
(4, 9, 'kids fashion', 'product/kids clothes.jpg', 'Active', '2022-01-10 17:27:44'),
(5, 6, 'mouse', 'product/OIP.jpg', 'Active', '2022-01-26 12:54:57'),
(6, 2, 'beauty and grooming', 'product/OIP (1).jpg', 'Active', '2022-01-29 12:31:12'),
(7, 10, 'LED TV', 'product/OIP (2).jpg', 'Active', '2022-01-29 12:40:40'),
(8, 2, 'Make Up', 'product/Swiss_Beauty.jpg', 'Active', '2022-02-12 16:44:40'),
(9, 2, 'Health & Personal Care', 'product/SBC-4.jpg', 'Active', '2022-02-12 16:48:06'),
(10, 2, 'Diet Nutrition', 'product/SBC-3.jpg', 'Active', '2022-02-12 16:48:36'),
(11, 2, 'Household Supplies', 'product/SBC-5.jpg', 'Active', '2022-02-12 16:49:25'),
(12, 2, 'Hair Care', 'product/Hex-card_02._SY530_QL85_.jpg', 'Active', '2022-02-12 16:54:07'),
(13, 2, 'Skin Care', 'product/Hex-card_03._SY530_QL85_.jpg', 'Active', '2022-02-12 16:54:24'),
(14, 2, 'Fragrance', 'product/51EW7sSIXVL._AC_UL480_QL65_.jpg', 'Active', '2022-02-12 16:54:59'),
(15, 4, 'Desktop', 'product/1644667095', 'Active', '2022-02-12 17:24:32'),
(16, 4, 'laptops', 'product/1644667198laptop.jpg', 'Active', '2022-02-12 17:29:58'),
(17, 4, 'Printers', 'product/1644667278514BLc5lxFL._SL1000_.jpg', 'Active', '2022-02-12 17:31:18'),
(18, 4, 'scanners', 'product/16446673576112UAdIbFL._SL1000_.jpg', 'Active', '2022-02-12 17:32:37'),
(19, 4, 'tablets', 'product/164466744951S2OfjRkIL._AC_UL480_QL65_.jpg', 'Active', '2022-02-12 17:34:09'),
(20, 11, 'Cabels & Adapters', 'product/1644822407', 'Active', '2022-02-12 17:36:20'),
(21, 11, 'Cases & Covers', 'product/1644822417', 'Active', '2022-02-12 17:37:00'),
(22, 11, 'Chargers', 'product/1644822429', 'Active', '2022-02-12 17:37:48'),
(23, 11, 'Headphones', 'product/164466771971ByNT34bfL._AC_UL480_QL65_.jpg', 'Active', '2022-02-12 17:38:39'),
(24, 9, 'mens fashion', 'product/1644816728download (2).jpg', 'Active', '2022-02-14 11:02:08'),
(25, 9, 'women fashion', 'product/1644816789download (3).jpg', 'Active', '2022-02-14 11:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `user_bank`
--

CREATE TABLE `user_bank` (
  `bank_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bank_name` varchar(500) NOT NULL,
  `bank_address` text NOT NULL,
  `bank_ifsc` varchar(300) NOT NULL,
  `branch` varchar(300) NOT NULL,
  `acc_no` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_bank`
--

INSERT INTO `user_bank` (`bank_id`, `user_id`, `bank_name`, `bank_address`, `bank_ifsc`, `branch`, `acc_no`) VALUES
(1, 2, 'sbi', 'somnath society udhna m.d.road,surat.', 'efeefe4', 'u.m.road', '12345664889'),
(2, 2, 'bank of baroda', '145-A,shiv shakti society near tara vidhyalay school,udhna ,bhathena,surat', '148521549', 'bhatar', '5482185');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` text NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_mobile` bigint(20) NOT NULL,
  `user_gender` varchar(20) NOT NULL,
  `user_state` varchar(150) NOT NULL,
  `user_city` varchar(150) NOT NULL,
  `user_address` text NOT NULL,
  `user_profile` text NOT NULL,
  `user_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `user_entrydate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `user_name`, `user_email`, `user_password`, `user_mobile`, `user_gender`, `user_state`, `user_city`, `user_address`, `user_profile`, `user_status`, `user_entrydate`) VALUES
(1, '  Hemant D. Rana  ', 'hemant@yahoo.com', '123456', 998524562, 'Male', '2', '20', '145-A,shiv shakti society near bhathena ,surat', 'index/user/IMG_20150207_205525.jpg', 'Active', '2022-02-12 11:26:15'),
(2, 'rahul singh m.', 'rahul@gmail.com', '123456', 9067124044, 'Male', '1', '15', 'surat', 'index/user/IMG_20171023_085833.jpg', 'Active', '2022-02-12 12:11:02'),
(3, 'nikunj chapadia', 'nchapadia@gmail.com', '123456', 9909901077, 'male', '7', '14', '32,rameshwar nagar soc.near udhna', 'user/download.jpg', 'Active', '2022-03-13 17:15:32'),
(4, 'priya rai', 'priya@gmail.com', '414141', 8754214523, 'female', '4', '3', 'patiala,punjab', 'index/user/download.jpg', 'Active', '2022-03-13 17:18:07'),
(5, '      komal 123     ', '      komal@yahoo.in      ', '757575', 7521622586, 'Female', '3', '10', 'pandesara', 'index/user/download.jpg', 'Active', '2022-03-13 17:21:01'),
(6, 'manish', 'mansi@rediffmail.com', '121212', 899648525, 'Male', '6', '9', 'cskcfkjeifwiuufiwfuifkllksdkkwkd', 'index/user/pngtree-user-vector-avatar-png-image_1541962.jpg', 'Active', '2022-03-13 17:48:36'),
(7, 'lata', 'lata12@gmail.com', '141414', 757585965, 'Female', '1', '15', 'kjcisciwioowodo', 'index/user/download.jpg', 'Active', '2022-03-13 17:53:06');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist_info`
--

CREATE TABLE `wishlist_info` (
  `wishlist_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `wishlist_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `wishlist_entry_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist_info`
--

INSERT INTO `wishlist_info` (`wishlist_id`, `product_id`, `customer_id`, `wishlist_status`, `wishlist_entry_date`) VALUES
(5, 4, 2, 'Active', '2022-02-26 12:25:59'),
(17, 11, 2, 'Active', '2022-03-09 12:34:49'),
(23, 5, 2, 'Active', '2022-03-09 12:40:44'),
(26, 6, 2, 'Active', '2022-03-09 12:49:03'),
(35, 10, 2, 'Active', '2022-03-09 13:22:52'),
(38, 1, 2, 'Active', '2022-03-09 13:40:17'),
(40, 1, 1, 'Active', '2022-03-12 13:51:11'),
(43, 15, 2, 'Active', '2022-04-02 18:31:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  ADD PRIMARY KEY (`cart_id`) USING BTREE,
  ADD KEY `product_id` (`user_id`,`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `admin_state` (`admin_state`,`admin_city`);

--
-- Indexes for table `cancel_order`
--
ALTER TABLE `cancel_order`
  ADD PRIMARY KEY (`cancel_order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `offer_info`
--
ALTER TABLE `offer_info`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`,`product_id`),
  ADD KEY `shipping_id` (`shipping_id`),
  ADD KEY `order_no` (`order_no`),
  ADD KEY `payment_id` (`payment_id`);

--
-- Indexes for table `order_return_exchange`
--
ALTER TABLE `order_return_exchange`
  ADD PRIMARY KEY (`return/exch_id`),
  ADD KEY `reason_id` (`reason_id`),
  ADD KEY `reason_detail_id` (`reason_detail_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `shipping_id` (`shipping_id`),
  ADD KEY `bank_id` (`bank_id`);

--
-- Indexes for table `order_track`
--
ALTER TABLE `order_track`
  ADD PRIMARY KEY (`track_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `payment_info`
--
ALTER TABLE `payment_info`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `order_id_2` (`order_id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`prod_img_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `seller_id` (`seller_id`,`offer_id`);

--
-- Indexes for table `rating_info`
--
ALTER TABLE `rating_info`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `reason_detail`
--
ALTER TABLE `reason_detail`
  ADD PRIMARY KEY (`reas_detail_id`),
  ADD KEY `reason_id` (`reason_id`);

--
-- Indexes for table `reason_info`
--
ALTER TABLE `reason_info`
  ADD PRIMARY KEY (`reason_id`);

--
-- Indexes for table `reg_city`
--
ALTER TABLE `reg_city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `reg_state`
--
ALTER TABLE `reg_state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `review_info`
--
ALTER TABLE `review_info`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `seller_info`
--
ALTER TABLE `seller_info`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `shipping_details`
--
ALTER TABLE `shipping_details`
  ADD PRIMARY KEY (`shipping_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcategory_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `user_bank`
--
ALTER TABLE `user_bank`
  ADD PRIMARY KEY (`bank_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wishlist_info`
--
ALTER TABLE `wishlist_info`
  ADD PRIMARY KEY (`wishlist_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cancel_order`
--
ALTER TABLE `cancel_order`
  MODIFY `cancel_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offer_info`
--
ALTER TABLE `offer_info`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_return_exchange`
--
ALTER TABLE `order_return_exchange`
  MODIFY `return/exch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_track`
--
ALTER TABLE `order_track`
  MODIFY `track_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `payment_info`
--
ALTER TABLE `payment_info`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `prod_img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `product_info`
--
ALTER TABLE `product_info`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `rating_info`
--
ALTER TABLE `rating_info`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `reason_detail`
--
ALTER TABLE `reason_detail`
  MODIFY `reas_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `reason_info`
--
ALTER TABLE `reason_info`
  MODIFY `reason_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reg_city`
--
ALTER TABLE `reg_city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `reg_state`
--
ALTER TABLE `reg_state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `review_info`
--
ALTER TABLE `review_info`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `seller_info`
--
ALTER TABLE `seller_info`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shipping_details`
--
ALTER TABLE `shipping_details`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_bank`
--
ALTER TABLE `user_bank`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wishlist_info`
--
ALTER TABLE `wishlist_info`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
