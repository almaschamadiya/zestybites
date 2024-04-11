-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 26, 2023 at 12:00 PM
-- Server version: 10.5.19-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u383631461_zestybites`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `id` int(10) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`id`, `photo`, `name`, `job`, `address`, `phone`, `email`, `password`, `username`) VALUES
(21, 'uvesh amin chamadiya.jpg', 'Uvesh Amin Chamadiya', 'Full Stack Developer', 'Block No. 101, Aman Palace, Jagmal Chowk Bhatia Dharmsala Road, Junagadh 362001, Gujarat, India.', '+91 8200872202', 'uveshchamadiya0501@gmail.com', 'suaa511313', 'uvesh@13');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(10) NOT NULL,
  `orderId` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productPrice` varchar(255) NOT NULL,
  `TotalPrice` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `orderStatus` varchar(255) NOT NULL,
  `deliveryTime` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `orderId`, `name`, `address`, `productName`, `productPrice`, `TotalPrice`, `qty`, `orderStatus`, `deliveryTime`, `date`) VALUES
(4, 'ZBOI_2029', 'Uvesh Amin Chamadiya', 'Block No. 101, Aman Palace, Jagmal Chowk Bhatia Dharmsala Road, Junagadh 362001, Gujarat, India.', 'Cheese Burger', '150', '150', '1', 'delivered', '30 min', '07/09/2023'),
(5, 'ZBOI_78489', 'Almas Chamadiya', 'gandhi street zalorapa road junagadh gujarat 362001', 'Cheese Burger', '150', '300', '2', 'delivered', '30 min', '08/09/2023'),
(6, 'ZBOI_99914', 'Almas Chamadiya', 'gandhi street zalorapa road junagadh gujarat 362001', 'cheese pizza', '300', '300', '1', 'delivered', '45 min', '09/09/2023'),
(7, 'ZBOI_49669', 'Almas Chamadiya', 'gandhi street zalorapa road junagadh gujarat 362001', 'Masala Pasta', '80', '160', '2', 'delivered', '25 min', '09/09/2023'),
(8, 'ZBOI_93582', 'Almas Chamadiya', 'gandhi street zalorapa road junagadh gujarat 362001', 'Cheese Burger', '150', '600', '4', 'canceled', '30 min', '09/09/2023'),
(9, 'ZBOI_10304', 'Uvesh Amin Chamadiya', 'Block No. 101, Aman Palace, Jagmal Chowk Bhatia Dharmsala Road, Junagadh 362001, Gujarat, India.', 'Cheese Burger', '150', '300', '2', 'delivered', '30 min', '09/09/2023'),
(10, 'ZBOI_11275', 'Uvesh Amin Chamadiya', 'Gandi Street, Zalorapa Road, Junagadh 362001, Gujarat India', 'Masala Pasta', '80', '240', '3', 'delivered', '25 min', '09/09/2023'),
(11, 'ZBOI_76234', 'Almas Chamadiya', 'gandhi street zalorapa road junagadh gujarat 362001', 'cheese burger', '150', '300', '2', 'delivered', '35 min', '09/09/2023'),
(12, 'ZBOI_78567', 'Uvesh Amin Chamadiya', 'Block No. 101, Aman Palace, Jagmal Chowk Bhatia Dharmsala Road, Junagadh 362001, Gujarat, India.', 'BBQ Chicken Pizza', '499', '998', '2', 'delivered', '25 min', '10/09/2023'),
(13, 'ZBOI_31006', 'Uvesh Amin Chamadiya', 'Block No. 101, Aman Palace, Jagmal Chowk Bhatia Dharmsala Road, Junagadh 362001, Gujarat, India.', 'Veggie Delight Wrap', '109', '218', '2', 'delivered', '8 min', '10/09/2023'),
(14, 'ZBOI_10215', 'DHARVIK DHOLAKIYA', 'NEAR RAM TEMPLE GANJIVADA\r\n', 'Margherita Pizza', '259', '518', '2', 'delivered', '20 min', '11/09/2023'),
(15, 'ZBOI_67717', 'Uvesh Amin Chamadiya', 'Block No. 101, Aman Palace, Jagmal Chowk Bhatia Dharmsala Road, Junagadh 362001, Gujarat, India.', 'Classic Sandwich', '79', '79', '1', 'delivered', '10 min', '11/09/2023'),
(16, 'ZBOI_78362', 'Almas Chamadiya', 'gandhi street zalorapa road junagadh gujarat 362001', 'Classic Hamburger', '139', '139', '1', 'delivered', '12 min', '11/09/2023'),
(17, 'ZBOI_91787', 'Uvesh Amin Chamadiya', 'Block No. 101, Aman Palace, Jagmal Chowk Bhatia Dharmsala Road, Junagadh 362001, Gujarat, India.', 'Classic Hamburger', '139', '556', '4', 'delivered', '12 min', '14/09/2023'),
(18, 'ZBOI_89354', 'Uvesh Amin Chamadiya', 'Block No. 101, Aman Palace, Jagmal Chowk Bhatia Dharmsala Road, Junagadh 362001, Gujarat, India.', 'Classic Hamburger', '139', '139', '1', 'canceled', '12 min', '26/09/2023');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `productCategory` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `description`, `price`, `productCategory`, `time`) VALUES
(5, 'Classic Hamburger', 'classic burger.jpg', 'A juicy beef patty with lettuce, tomato and onions.', '139', 'burger', '12 min'),
(6, 'Cheese Burger', 'cheese burger.jpg', 'Our Classic Burger with melted Cheese.', '179', 'burger', '15 min'),
(7, 'Chicken Burger', 'chicken burger.jpg', 'Tender chicken breast with lettuce and tomato.', '329', 'burger', '15 min'),
(9, 'Margherita Pizza', 'margherita pizza.jpg', 'Pizza with tomato sauce and mozzarella cheese.', '259', 'pizza', '20 min'),
(10, 'Pepperoni Pizza', 'pepperoni pizza.jpg', 'Pizza with pepperoni slices and melted cheese.', '329', 'pizza', '22 min'),
(11, 'BBQ Chicken Pizza', 'non veg pizza.jpg', 'Tangy barbecue sauce and grilled chicken pieces.', '499', 'pizza', '25 min'),
(12, 'Classic Sandwich', 'classic snadwich.jpg', 'Crispy bacon and fresh lettuce on toasted bread.', '79', 'sandwich', '10 min'),
(13, 'Grilled Chicken Panini', 'non veg sandwich.jpg', 'Tender grilled chicken breast with melted cheese.', '149', 'sandwich', '12 min'),
(14, 'Veggie Delight Wrap', 'veg sandwich.jpg', 'A flavorful wrap roasted vegetables, and greens.', '109', 'sandwich', '8 min');

-- --------------------------------------------------------

--
-- Table structure for table `productcategory`
--

CREATE TABLE `productcategory` (
  `id` int(255) NOT NULL,
  `categoryName` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productcategory`
--

INSERT INTO `productcategory` (`id`, `categoryName`, `image`) VALUES
(9, 'burger', 'burger.png'),
(10, 'pizza', 'pizza.png'),
(14, 'sandwich', 'sandwhich.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `address`, `password`) VALUES
(1, 'Uvesh Amin Chamadiya', 'uveshchamadiya0501@gmail.com', '8200272202', 'Block No. 101, Aman Palace, Jagmal Chowk Bhatia Dharmsala Road, Junagadh 362001, Gujarat, India.', '123'),
(2, 'Almas Chamadiya', 'almaschamadiya13@gmail.com', '7863051375', 'gandhi street zalorapa road junagadh gujarat 362001', '123'),
(3, 'test', 'test@gmail.com', '387397383', 'hkjahsjka', 'test123'),
(4, 'DHARVIK DHOLAKIYA', 'dharvikdholakiya@gmail.com', '+919426740199', 'NEAR RAM TEMPLE GANJIVADA\r\n', '123456'),
(5, 'almas chamadiya', 'almaschamadiya13@gmail.com', '7863051375', 'dcvjbnvb', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
