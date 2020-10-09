-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 24, 2019 at 05:15 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `milk_dairy`
--
CREATE DATABASE IF NOT EXISTS `milk_dairy` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `milk_dairy`;

-- --------------------------------------------------------

--
-- Table structure for table `cattle_feed`
--

CREATE TABLE IF NOT EXISTS `cattle_feed` (
  `feed_id` int(100) NOT NULL AUTO_INCREMENT,
  `depositor_id` int(100) NOT NULL,
  `feed_type` varchar(100) NOT NULL,
  `given_date` date NOT NULL,
  `quantity` int(100) NOT NULL,
  `feed_amount` int(100) NOT NULL,
  PRIMARY KEY (`feed_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cattle_feed`
--

INSERT INTO `cattle_feed` (`feed_id`, `depositor_id`, `feed_type`, `given_date`, `quantity`, `feed_amount`) VALUES
(1, 1, 'qwqw', '2019-03-20', 100, 10);

-- --------------------------------------------------------

--
-- Table structure for table `depositors`
--

CREATE TABLE IF NOT EXISTS `depositors` (
  `depositor_id` int(100) NOT NULL AUTO_INCREMENT,
  `depositor_name` varchar(100) NOT NULL,
  `depositor_contact` varchar(25) NOT NULL,
  `depositor_address` varchar(100) NOT NULL,
  `depositor_adhar` varchar(100) NOT NULL,
  `account_no` varchar(100) NOT NULL,
  PRIMARY KEY (`depositor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `depositors`
--

INSERT INTO `depositors` (`depositor_id`, `depositor_name`, `depositor_contact`, `depositor_address`, `depositor_adhar`, `account_no`) VALUES
(1, 'Shivprasad', '9743320840', 'Dharwad', '123456789012', '123456789'),
(2, 'Mahesh', '9886591563', 'Dharwad', '897612348976', '67890'),
(3, 'Chetan', '9988776655', 'Dharwad', '234512345678', '23456');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `employee_id` int(100) NOT NULL AUTO_INCREMENT,
  `employee_name` varchar(100) NOT NULL,
  `employee_contact` int(100) NOT NULL,
  `employee_address` varchar(100) NOT NULL,
  `monthly_salary` int(100) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kmf`
--

CREATE TABLE IF NOT EXISTS `kmf` (
  `kmf_id` int(100) NOT NULL AUTO_INCREMENT,
  `milk_type` varchar(100) NOT NULL,
  `total_litre` int(100) NOT NULL,
  `sent_date` date NOT NULL,
  `cost_per_litre` int(100) NOT NULL,
  `total_amount` int(100) NOT NULL,
  PRIMARY KEY (`kmf_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kmf`
--

INSERT INTO `kmf` (`kmf_id`, `milk_type`, `total_litre`, `sent_date`, `cost_per_litre`, `total_amount`) VALUES
(1, 'Buffalo', 230, '2019-03-20', 18, 4140),
(2, 'Cow', 25, '2019-03-20', 16, 400);

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE IF NOT EXISTS `loans` (
  `loan_id` int(100) NOT NULL AUTO_INCREMENT,
  `depositor_id` int(100) NOT NULL,
  `loan_date` date NOT NULL,
  `total_given_amount` int(100) NOT NULL,
  `paid_amount` int(100) NOT NULL,
  `balance_amount` int(100) NOT NULL,
  `loan_paid_date` date NOT NULL,
  PRIMARY KEY (`loan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`loan_id`, `depositor_id`, `loan_date`, `total_given_amount`, `paid_amount`, `balance_amount`, `loan_paid_date`) VALUES
(4, 1, '2019-03-20', 25000, 5000, 20000, '2019-03-20'),
(5, 2, '2019-03-20', 20000, 0, 20000, '0000-00-00'),
(6, 3, '2019-03-20', 20000, 12000, 8000, '2019-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `local_sale`
--

CREATE TABLE IF NOT EXISTS `local_sale` (
  `sale_id` int(100) NOT NULL AUTO_INCREMENT,
  `sale_date` date NOT NULL,
  `milk_type` varchar(50) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price_per_litre` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  PRIMARY KEY (`sale_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `local_sale`
--

INSERT INTO `local_sale` (`sale_id`, `sale_date`, `milk_type`, `quantity`, `price_per_litre`, `amount`) VALUES
(2, '2019-03-20', 'Cow', 220, 23, 5060),
(3, '2019-03-20', 'Buffalo', 40, 20, 800);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `hint_question` varchar(25) NOT NULL,
  `hint_answer` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `user_type`, `hint_question`, `hint_answer`) VALUES
('ad123', '123', 'admin', 'my registered email id', 'admin@gmail.com'),
('emp123', '123456', 'employee', 'my registered email id', 'emp@gmail.com'),
('123456789012', '123456', 'depositor', 'My registered contact no', '9743320840'),
('897612348976', '123456', 'depositor', 'My registered contact no', '9886591563'),
('234512345678', '123456', 'depositor', 'My registered contact no', '9988776655');

-- --------------------------------------------------------

--
-- Table structure for table `milk`
--

CREATE TABLE IF NOT EXISTS `milk` (
  `milk_id` int(100) NOT NULL AUTO_INCREMENT,
  `depositor_id` int(100) NOT NULL,
  `deposited_date` date NOT NULL,
  `deposited_time` varchar(20) NOT NULL,
  `quantity` int(100) NOT NULL,
  `fat_content` int(100) NOT NULL,
  `milk_type` varchar(100) NOT NULL,
  PRIMARY KEY (`milk_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `milk`
--

INSERT INTO `milk` (`milk_id`, `depositor_id`, `deposited_date`, `deposited_time`, `quantity`, `fat_content`, `milk_type`) VALUES
(1, 1, '2019-03-20', '10', 20, 5, 'Cow'),
(2, 3, '2019-03-20', '10', 20, 5, 'Buffalo');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `payment_id` int(100) NOT NULL AUTO_INCREMENT,
  `paid_date` date NOT NULL,
  `milk_id` int(100) NOT NULL,
  `total_milk_dep` int(100) NOT NULL,
  `amount_per_litre` int(100) NOT NULL,
  `total_amount` int(100) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `paid_date`, `milk_id`, `total_milk_dep`, `amount_per_litre`, `total_amount`) VALUES
(1, '0000-00-00', 1, 20, 24, 480),
(2, '2019-03-20', 2, 20, 15, 300);

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE IF NOT EXISTS `testing` (
  `test_id` int(100) NOT NULL AUTO_INCREMENT,
  `test_date` date NOT NULL,
  `milk_id` int(100) NOT NULL,
  `fat_content` int(100) NOT NULL,
  `water_content` int(100) NOT NULL,
  `cost_per_litre` int(100) NOT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`test_id`, `test_date`, `milk_id`, `fat_content`, `water_content`, `cost_per_litre`) VALUES
(2, '2019-03-20', 1, 5, 10, 24),
(3, '2019-03-20', 2, 8, 10, 15);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
