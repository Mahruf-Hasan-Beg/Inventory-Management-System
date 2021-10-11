-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2021 at 09:51 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `n1`
--

-- --------------------------------------------------------

--
-- Table structure for table `godown`
--

CREATE TABLE `godown` (
  `GoDown_ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `godown`
--

INSERT INTO `godown` (`GoDown_ID`, `Name`, `Location`) VALUES
(1, 'Storage1', 'Dhanmondi'),
(2, 'Storage2', 'Gulshan');

-- --------------------------------------------------------

--
-- Table structure for table `informs`
--

CREATE TABLE `informs` (
  `Name_Product` varchar(50) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `Reg_no` int(11) NOT NULL,
  `Code` int(11) NOT NULL,
  `Availability` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informs`
--

INSERT INTO `informs` (`Name_Product`, `Type`, `Reg_no`, `Code`, `Availability`) VALUES
('Samsung 65\" LED', 'TV', 1008, 111, 10),
('LG v30', 'Mobile', 1008, 12014, 20),
('TV', 'Samsung', 15555, 147, 10),
('Monitor', 'Acer', 15555, 1555, 20);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `Manager_ID` int(11) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`Manager_ID`, `Phone`, `Email`, `Name`) VALUES
(1101, 1914521, 'admin@shop.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `new_products`
--

CREATE TABLE `new_products` (
  `Available_Date` date DEFAULT NULL,
  `Code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_products`
--

INSERT INTO `new_products` (`Available_Date`, `Code`) VALUES
('2021-09-15', 111),
('2021-09-09', 147),
('2021-09-25', 1555),
('2021-09-14', 12014);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Varient` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `SKU` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Reg_no` int(11) NOT NULL,
  `Part_no` int(11) NOT NULL,
  `imagepath` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `Address` varchar(50) NOT NULL,
  `Serial_no` int(11) NOT NULL,
  `shipout_date` date NOT NULL,
  `Reg_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`Address`, `Serial_no`, `shipout_date`, `Reg_no`) VALUES
('Gazipur', 1235, '2021-07-06', 1008);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `Manufacturer` varchar(50) NOT NULL,
  `Item_Name` varchar(50) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Part_no` int(11) NOT NULL,
  `Date_Added` date NOT NULL,
  `GoDown_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`Manufacturer`, `Item_Name`, `Quantity`, `Part_no`, `Date_Added`, `GoDown_ID`) VALUES
('LG', 'TV', 0, 5, '2021-09-09', 1),
('Apple', 'Smart Watch', 0, 10, '2021-09-29', 1),
('Asus', 'Laptop', 0, 16, '2021-09-08', 2),
('Acer', 'Laptop', 0, 17, '2021-09-02', 2),
('Apple', 'Mobile', 0, 20, '2021-09-16', 2),
('Samsung', 'Mobile', 0, 41, '2020-09-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `Reg_no` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Supplier_Type` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`Reg_no`, `Name`, `Supplier_Type`, `Location`) VALUES
(1008, 'Kuddus', 'Local', 'Dhanmondi'),
(1009, 'Min', 'Global', 'China'),
(1201, 'karim', 'Global', 'USA'),
(5555, 'random', 'GLOBAL', 'USA'),
(15555, 'neaz', 'local', 'dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_product_type`
--

CREATE TABLE `supplier_product_type` (
  `Product_Type` varchar(50) NOT NULL,
  `Reg_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `Tran_ID` int(11) NOT NULL,
  `Payment_Method` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `Reg_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`Tran_ID`, `Payment_Method`, `Date`, `amount`, `Reg_no`) VALUES
(1114, 'Cash', '2021-09-09', 75000, 1008),
(1350, 'BKash', '2021-09-09', 12000, 1008),
(5454, 'Mobile Banking', '2021-09-10', 1500, 1008),
(5566, 'bkash', '2021-09-18', 555, 15555),
(10000, 'Cash', '2019-12-01', 1000, 1008),
(14455, 'Cash', '2021-09-09', 1008, 1008),
(15821, 'Cash', '2021-09-16', 1008, 1008),
(24444, 'cash', '2021-09-24', 155, 1008),
(112222, 'Mobile Banking', '2021-09-11', 20000, 1201);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `godown`
--
ALTER TABLE `godown`
  ADD PRIMARY KEY (`GoDown_ID`);

--
-- Indexes for table `informs`
--
ALTER TABLE `informs`
  ADD PRIMARY KEY (`Reg_no`,`Code`),
  ADD KEY `Code` (`Code`);

--
-- Indexes for table `new_products`
--
ALTER TABLE `new_products`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`SKU`),
  ADD KEY `Reg_no` (`Reg_no`),
  ADD KEY `Part_no` (`Part_no`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`Serial_no`),
  ADD KEY `Reg_no` (`Reg_no`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`Part_no`),
  ADD KEY `GoDown_ID` (`GoDown_ID`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`Reg_no`);

--
-- Indexes for table `supplier_product_type`
--
ALTER TABLE `supplier_product_type`
  ADD PRIMARY KEY (`Product_Type`,`Reg_no`),
  ADD KEY `Reg_no` (`Reg_no`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`Tran_ID`),
  ADD KEY `Reg_no` (`Reg_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shipment`
--
ALTER TABLE `shipment`
  MODIFY `Serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12037;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `Reg_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1124447;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `Tran_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158856;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `informs`
--
ALTER TABLE `informs`
  ADD CONSTRAINT `informs_ibfk_1` FOREIGN KEY (`Reg_no`) REFERENCES `supplier` (`Reg_no`),
  ADD CONSTRAINT `informs_ibfk_2` FOREIGN KEY (`Code`) REFERENCES `new_products` (`Code`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`Reg_no`) REFERENCES `supplier` (`Reg_no`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`Part_no`) REFERENCES `stock` (`Part_no`);

--
-- Constraints for table `shipment`
--
ALTER TABLE `shipment`
  ADD CONSTRAINT `shipment_ibfk_1` FOREIGN KEY (`Reg_no`) REFERENCES `supplier` (`Reg_no`);

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`GoDown_ID`) REFERENCES `godown` (`GoDown_ID`);

--
-- Constraints for table `supplier_product_type`
--
ALTER TABLE `supplier_product_type`
  ADD CONSTRAINT `supplier_product_type_ibfk_1` FOREIGN KEY (`Reg_no`) REFERENCES `supplier` (`Reg_no`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`Reg_no`) REFERENCES `supplier` (`Reg_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
