-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2018 at 12:19 PM
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
-- Database: `test`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `approveloan` (IN `l_id` INT(5))  NO SQL
update loan l set status="Approved",l_int='.5',approveddate=now() where l.l_id=l_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `loanreject` (IN `l_id` INT(10))  NO SQL
update loan l set status="Rejected",l_int='.5',approveddate=now() where l.l_id=l_id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `acc_no` int(10) NOT NULL,
  `c_id` int(8) NOT NULL,
  `acc_type` varchar(10) NOT NULL,
  `acc_bal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`acc_no`, `c_id`, `acc_type`, `acc_bal`) VALUES
(2, 10, 'STUDENT', 74850),
(5, 11, 'REGULAR', 8200),
(6, 57, 'STUDENT', 5650),
(12, 60, 'REGULAR', 100000),
(15, 58, 'STUDENT', 50000),
(18, 100, 'REGULAR', 150000),
(50, 63, 'STUDENT', 50000),
(90, 59, 'REGULAR', 100000000),
(102, 64, 'STUDENT', 50000),
(103, 101, 'Savings Ac', 0);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `b_id` int(5) NOT NULL,
  `b_name` varchar(25) NOT NULL,
  `b_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`b_id`, `b_name`, `b_address`) VALUES
(1, 'BOI Chennai', 'Chennai, Tamilnadu'),
(1000, 'BOI MICO LAYOUT', 'BTM Layout,BANGALORE'),
(1001, 'BOI DOLLERS COLONY', 'JP Nagar,BANGALORE'),
(1002, 'BOI GOTTIGERE ', 'Gottigere,BANGALORE'),
(1004, 'BOI Anekal', 'Anekal,bangalore'),
(1005, 'BOI KR Puram', 'KR Puram,Bangalore'),
(1006, 'BOI Jigini', 'Jigini,BANGALORE'),
(10004, 'BOI MARTHALLI', 'BANGALORE');

-- --------------------------------------------------------

--
-- Table structure for table `card_info`
--

CREATE TABLE `card_info` (
  `acc_no` int(10) NOT NULL,
  `c_no` int(12) NOT NULL,
  `c_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card_info`
--

INSERT INTO `card_info` (`acc_no`, `c_no`, `c_type`) VALUES
(2, 1, 'CREDIT '),
(6, 2, 'DEBIT');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `b_id` int(5) NOT NULL,
  `c_id` int(8) NOT NULL,
  `c_name` varchar(25) NOT NULL,
  `c_address` varchar(500) NOT NULL,
  `c_pno` varchar(15) NOT NULL,
  `c_dob` date NOT NULL,
  `c_gender` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`b_id`, `c_id`, `c_name`, `c_address`, `c_pno`, `c_dob`, `c_gender`) VALUES
(1000, 10, 'RAHUL GOWDA', 'COORG,KARANATAKA', '9141568689', '1998-11-12', 'M'),
(1000, 11, 'VINAY KUMAR', 'BANGALORE', '8890985340', '1997-05-10', 'M'),
(1006, 57, 'ANJALI', 'CHEENAI,TAMILNADU', '9145678887', '1998-05-10', 'F'),
(1001, 58, 'SANDEEP', 'BTM,BANGALORE', '8147799098', '0000-00-00', 'M'),
(10004, 59, 'STEPHEN RAJ', 'MYSORE,KARANATAKA', '8147445797', '1997-05-21', 'M'),
(1004, 60, 'ASWIN VASUDEV', 'BANGALORE', '7789145267', '1998-12-05', 'M'),
(1002, 63, 'SANJAY KUMAR', 'BANGALORE', '9856891057', '1998-09-09', 'M'),
(1001, 64, 'SHABARISH M', 'KORMANAGALA,BANGALORE', '9898754647', '1998-09-12', 'M'),
(1005, 65, 'PRIYANKA SK', 'HEBGODI,BANGALORE', '9440563210', '1998-05-01', 'F'),
(1006, 100, 'RANJITH JHON', 'JIGINI,BANGALORE', '7145896987', '1998-11-12', 'M'),
(1, 101, 'Tejaswini', 'RR Nagar Chennai, Tamilnadu', '8528529512', '0000-00-00', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `acc_no` int(10) NOT NULL,
  `d_amount` int(10) NOT NULL,
  `d_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`acc_no`, `d_amount`, `d_id`) VALUES
(2, 500, 15),
(5, 10000, 16),
(5, 1000, 17),
(102, 100, 18),
(90, 1500, 19),
(50, 6000, 20),
(18, 300, 21),
(6, 50000, 22),
(12, 2000, 24),
(15, 500, 25),
(18, 5000, 26),
(50, 100, 27),
(90, 100, 28),
(102, 5, 29),
(5, 1345, 30),
(6, 150, 31),
(5, 15, 32),
(2, 15, 33),
(103, 15000, 34),
(103, 25, 35),
(103, 5150, 36);

-- --------------------------------------------------------

--
-- Table structure for table `employeelogin`
--

CREATE TABLE `employeelogin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeelogin`
--

INSERT INTO `employeelogin` (`username`, `password`) VALUES
('prav', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `e_id` int(8) NOT NULL,
  `e_name` varchar(25) NOT NULL,
  `e_position` varchar(15) NOT NULL,
  `e_pno` varchar(15) NOT NULL,
  `e_sal` int(10) NOT NULL,
  `e_bid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`e_id`, `e_name`, `e_position`, `e_pno`, `e_sal`, `e_bid`) VALUES
(3, 'Suriya Kumar', 'Asst.Manager', '9980297138', 60000, 1000),
(5, 'Nithin S', 'Manager', '9535549336', 80000, 1001),
(7, 'Preethi P', 'Asst.Manager', '9980297138', 60000, 1000),
(8, 'Ayyanar', 'Asst.Manager', '8147438776', 55000, 1004),
(51, 'Alia B', 'Manager', '8898945554', 60000, 1006),
(81, 'Ayesha', 'Receptionist', '8542596352', 15000, 1002);

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `c_id` int(8) NOT NULL,
  `l_id` int(5) NOT NULL,
  `l_type` varchar(20) NOT NULL,
  `l_amt` int(10) NOT NULL,
  `l_int` varchar(10) NOT NULL,
  `l_duedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `applieddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(20) NOT NULL,
  `approveddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`c_id`, `l_id`, `l_type`, `l_amt`, `l_int`, `l_duedate`, `applieddate`, `status`, `approveddate`) VALUES
(57, 30, 'CAR LOAN', 50000, '7.5', '2018-11-06 09:13:15', '2018-11-06 03:50:42', 'Approved', '2018-11-19'),
(10, 37, 'BIKE LOAN', 100000, '11.5', '2018-11-04 09:13:15', '2018-11-04 09:13:15', 'Approved', '2018-10-19'),
(11, 38, 'STUDENT LOAN', 50000, '3', '2018-11-04 09:13:15', '2018-11-04 09:13:15', 'Pending', '0000-00-00'),
(58, 39, 'BUSINESS LOAN', 50000, '10', '2018-11-04 09:12:39', '2018-11-04 09:12:39', 'Approved', '0000-00-00'),
(59, 40, 'STUDENT LOAN', 50000, '7', '2018-11-04 09:12:39', '2018-11-04 09:12:39', 'Approved', '0000-00-00'),
(100, 43, 'BIKE LOAN', 100000, '12', '2021-12-29 18:30:00', '2018-01-27 10:51:50', 'Approved', '2018-11-28');

--
-- Triggers `loan`
--
DELIMITER $$
CREATE TRIGGER `date` AFTER INSERT ON `loan` FOR EACH ROW BEGIN
set @applieddate=now();
 END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('abc', 'abc'),
('rahul', 'rahul');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawl`
--

CREATE TABLE `withdrawl` (
  `acc_no` int(10) NOT NULL,
  `w_amount` int(10) NOT NULL,
  `w_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `withdrawl`
--

INSERT INTO `withdrawl` (`acc_no`, `w_amount`, `w_id`) VALUES
(2, 2000, 1),
(2, 10, 2),
(2, 3000, 3),
(2, 3000, 4),
(5, 5000, 5),
(5, 50000, 6),
(5, 50000, 7),
(2, 2000, 8),
(15, 2000, 9),
(90, 2000, 10),
(50, 1000, 11),
(102, 100, 12),
(15, 100, 13),
(18, 5, 14),
(15, 1345, 15),
(12, 150000, 16),
(5, 150, 17),
(50, 15, 18),
(5, 15, 19),
(103, 1515025, 20),
(103, 150, 21),
(2, 150, 22),
(103, 5000, 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`acc_no`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `card_info`
--
ALTER TABLE `card_info`
  ADD PRIMARY KEY (`c_no`),
  ADD KEY `acc_no` (`acc_no`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `b_id` (`b_id`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `acc_no` (`acc_no`);

--
-- Indexes for table `employeelogin`
--
ALTER TABLE `employeelogin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`e_id`),
  ADD KEY `employees_ibfk_1` (`e_bid`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`l_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `withdrawl`
--
ALTER TABLE `withdrawl`
  ADD PRIMARY KEY (`w_id`),
  ADD KEY `acc_no` (`acc_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `acc_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `card_info`
--
ALTER TABLE `card_info`
  MODIFY `c_no` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `d_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `e_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `l_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `withdrawl`
--
ALTER TABLE `withdrawl`
  MODIFY `w_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `c_id` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `card_info`
--
ALTER TABLE `card_info`
  ADD CONSTRAINT `acc_no` FOREIGN KEY (`acc_no`) REFERENCES `account` (`acc_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `b_id` FOREIGN KEY (`b_id`) REFERENCES `branch` (`b_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `deposit`
--
ALTER TABLE `deposit`
  ADD CONSTRAINT `deposit_ibfk_1` FOREIGN KEY (`acc_no`) REFERENCES `account` (`acc_no`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`e_bid`) REFERENCES `branch` (`b_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `loan`
--
ALTER TABLE `loan`
  ADD CONSTRAINT `loan_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`);

--
-- Constraints for table `withdrawl`
--
ALTER TABLE `withdrawl`
  ADD CONSTRAINT `withdrawl_ibfk_1` FOREIGN KEY (`acc_no`) REFERENCES `account` (`acc_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
