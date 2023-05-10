-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2022 at 09:09 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `5thsem`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `uid` int(100) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `bookdate` date NOT NULL,
  `booktime` varchar(255) NOT NULL,
  `hallid` varchar(255) NOT NULL,
  `rname` varchar(255) NOT NULL,
  `h_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`uid`, `fullname`, `username`, `email`, `mobileno`, `city`, `bookdate`, `booktime`, `hallid`, `rname`, `h_price`) VALUES
(1, 'harypotter', 'hary', 'hari@gmail.com', '9069000222', 'Kathmandu', '2021-11-30', '10:15AM-11:15AM', '1', 'funnyd', '3000'),
(1, 'harypotter', 'hary', 'hari@gmail.com', '9069000222', 'Kathmandu', '2021-11-30', '11:30AM-12:30PM', '1', 'funnyd', '3000'),
(4, 'alpha male', 'doremon', 'shresthasijal9@gmail.com', '9841321234', 'aaaaaa', '2022-01-15', '08:00-10:00', '7', 'newroom', '111100'),
(1, 'harypotter', 'hary', 'hari@gmail.com', '9069000222', 'Kathmandu', '2022-02-16', '08:00-10:00', '7', 'newroom', '11111'),
(1, 'harypotter', 'hary', 'hari@gmail.com', '9069000222', 'Kathmandu', '2022-01-27', '10:30-12:30', '7', 'newroom', '11111'),
(9, 'manju chauguthi', 'manju123', 'manjuchauguthi@gmail.com', '9866953687', 'kamalbinayak', '2022-02-04', '08:00-10:00', '7', 'newroom', '11111'),
(4, 'alpha male', 'doremon', 'shresthasijal9@gmail.com', '9841321234', 'aaaaaa', '2022-09-02', '08:00-10:00', '7', 'newroom', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `daybooked`
--

CREATE TABLE `daybooked` (
  `uid` int(100) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `bookdate` date NOT NULL,
  `hallid` varchar(255) NOT NULL,
  `rname` varchar(255) NOT NULL,
  `h_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daybooked`
--

INSERT INTO `daybooked` (`uid`, `fullname`, `username`, `email`, `mobileno`, `city`, `bookdate`, `hallid`, `rname`, `h_price`) VALUES
(1, 'harypotter', 'hary', 'hari@gmail.com', '9069000222', 'Kathmandu', '2021-12-01', '1', 'funnyd', '11000'),
(1, 'harypotter', 'hary', 'hari@gmail.com', '9069000222', 'Kathmandu', '2021-12-02', '1', 'funnyd', '11000'),
(1, 'harypotter', 'hary', 'hari@gmail.com', '9069000222', 'Kathmandu', '2021-12-06', '3', 'hall3', '4000'),
(2, 'sijal shrestha', 'Sijal123', '123@gmail.com', '9869489048', 'kathmandu', '2022-02-05', '7', 'newroom', '111100'),
(4, 'alpha male', 'doremon', 'shresthasijal9@gmail.com', '9841321234', 'aaaaaa', '2022-03-04', '7', 'newroom', '111100'),
(1, 'harypotter', 'hary', 'hari@gmail.com', '9069000222', 'Kathmandu', '2022-04-14', '7', 'newroom', '111100'),
(2, 'sijal shrestha', 'Sijal123', '123@gmail.com', '9869489048', 'kathmandu', '2022-02-26', '8', 'newroom', '900'),
(2, 'sijal shrestha', 'Sijal123', '123@gmail.com', '9869489048', 'kathmandu', '2022-02-02', '10', 'mero kotha', '10000'),
(2, 'sijal shrestha', 'Sijal123', '123@gmail.com', '9869489048', 'kathmandu', '2022-01-26', '10', 'mero kotha', '10000'),
(2, 'sijal shrestha', 'Sijal123', '123@gmail.com', '9869489048', 'kathmandu', '2022-01-31', '10', 'mero kotha', '10000'),
(2, 'sijal shrestha', 'Sijal123', '123@gmail.com', '9869489048', 'kathmandu', '2022-01-23', '10', 'mero kotha', '10000'),
(0, 'rikesh sibanjar', 'rikesh', '', '9869010730', 'bdbhsjhsd', '2022-07-07', '7', 'newroom', '111100'),
(0, 'ashram thike', 'ashram', 'ashramthike@gmail.com', '9876543210', 'siaosu', '2022-06-09', '7', 'newroom', '111100'),
(9, 'manju chauguthi', 'manju123', 'manjuchauguthi@gmail.com', '9866953687', 'kamalbinayak', '2022-02-03', '7', 'newroom', '111100'),
(9, 'Bini Gosai', 'Bini123', 'binigosai2@gmail.com', '9843803619', 'suryabinayak', '2022-02-05', '10', 'mero kotha', '10000'),
(1, 'harypotter11', 'hary12355', 'hari@gmail.com', '9069000222', 'Kathmandu', '2022-09-23', '7', 'newroom', '111100'),
(1, 'harypotter11', 'hary12355', 'hari@gmail.com', '9069000222', 'Kathmandu', '2022-09-10', '7', 'newroom', '111100'),
(4, 'alpha male', 'doremon', 'shresthasijal9@gmail.com', '9841321234', 'aaaaaa', '2022-11-25', '7', 'newroom', '111100');

-- --------------------------------------------------------

--
-- Table structure for table `daycancle`
--

CREATE TABLE `daycancle` (
  `sn` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `hallno` int(50) NOT NULL,
  `hallname` varchar(255) NOT NULL,
  `bookeddate` date NOT NULL,
  `cancledate` date NOT NULL,
  `cancletime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daycancle`
--

INSERT INTO `daycancle` (`sn`, `name`, `email`, `mobileno`, `address`, `hallno`, `hallname`, `bookeddate`, `cancledate`, `cancletime`) VALUES
(3, 'harypotter', 'hari@gmail.com', '9069000222', 'Kathmandu', 7, 'newroom', '2022-01-26', '2022-01-21', '07:16:05'),
(4, 'sijal shrestha', '123@gmail.com', '9869489048', 'kathmandu', 10, 'mero kotha', '2022-02-03', '2022-01-21', '07:59:09'),
(5, 'sijal shrestha', '123@gmail.com', '9869489048', 'kathmandu', 8, 'newroom', '2022-01-29', '2022-01-21', '08:12:44'),
(6, 'sijal shrestha', '123@gmail.com', '9869489048', 'kathmandu', 8, 'newroom', '2022-03-03', '2022-01-21', '08:12:49');

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `hallsn` int(10) NOT NULL,
  `roomtype` varchar(255) NOT NULL,
  `rname` varchar(255) NOT NULL,
  `seats` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `rdetail` longtext NOT NULL,
  `facility` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `p_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`hallsn`, `roomtype`, `rname`, `seats`, `price`, `rdetail`, `facility`, `image`, `p_price`) VALUES
(7, 'Simple', 'newroom', 11111, 111100, 'ac', 'wifi', 'images/IMG-61dd1f5323b830.00889353.jpg', 11111),
(8, 'Simple', 'newroom', 9000, 900, 'dy', 'projector', 'images/IMG-61dfde3caa8176.10901040.jpg', 90),
(9, 'Simple', 'khwasa', 908, 141434, 'ac', 'wifi', 'images/IMG-61dfde03bf22a0.94485596.jpg', 45647),
(10, 'Classic', 'mero kotha', 50, 10000, 'ac', 'projector', 'images/IMG-61ea538a5fcf17.81616867.jpg', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `admin_no` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile_no:` varchar(100) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`admin_no`, `username`, `password`, `mobile_no:`, `fullname`, `city`, `email`) VALUES
(1, 'admin123', 'aaaaaaaa', '1234567890', 'adminnamw', 'Kathmandu', 'admin@gmail.com'),
(2, 'doremon', '12345678', '9812345678', 'hurray mee', 'kat', '123@gmail.com'),
(3, 'Alpha123', '12345678', '9841604020', 'alpha male', 'jsaksksahhdsa', '123@gmail.com'),
(4, 'Alpha1233432', 'admin123', '1234567890', 'alpha male', 'lkxcjscsklds', 'shresthasijal9@gmail.com'),
(5, 'doremon123', '11111111', '9876543210', 'harypotter111', 'ddwd', 'shresthasijal9@gmil.com');

-- --------------------------------------------------------

--
-- Table structure for table `partialcancle`
--

CREATE TABLE `partialcancle` (
  `sn` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `hallno` int(255) NOT NULL,
  `hallname` varchar(255) NOT NULL,
  `bookeddate` date NOT NULL,
  `bookedtime` varchar(255) NOT NULL,
  `cancledate` date NOT NULL,
  `cancletime` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partialcancle`
--

INSERT INTO `partialcancle` (`sn`, `name`, `email`, `mobileno`, `address`, `hallno`, `hallname`, `bookeddate`, `bookedtime`, `cancledate`, `cancletime`) VALUES
(1, 'harypotter', 'hari@gmail.com', '9069000222', 'Kathmandu', 2, 'hall2', '2022-02-03', '10:30-12:30', '2022-01-13', '11:10:24.000000'),
(2, 'harypotter', 'hari@gmail.com', '9069000222', 'Kathmandu', 9, 'khwasa', '2022-01-27', '08:00-10:00', '2022-01-21', '07:16:24.000000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_no` int(100) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `mobile_no:` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Fullname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `security` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_no`, `username`, `password`, `mobile_no:`, `email`, `Fullname`, `city`, `security`) VALUES
(1, 'hary12355', '12345678', '9069000222', 'hari@gmail.com', 'harypotter11', 'Kathmandu', 'football'),
(4, 'doremon', '11111111', '9841321234', 'shresthasijal9@gmail.com', 'alpha male', 'aaaaaa', 'game\r\n'),
(7, 'wqowqj', '12345678', '9876543210', 'rikeshsibanjar380@gmail.com', 'qoqjwjojowq', 'uwuqu', 'music'),
(8, 'ashram', '12345678', '9876543210', 'ashramthike@gmail.com', 'ashram thike', 'siaosu', ''),
(9, 'manju123', '12345678', '9866953687', 'manjuchauguthi@gmail.com', 'manju chauguthi', 'kamalbinayak', ''),
(10, 'Bini123', '12345678', '9843803619', 'binigosai2@gmail.com', 'Bini Gosai', 'suryabinayak', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daycancle`
--
ALTER TABLE `daycancle`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`hallsn`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`admin_no`);

--
-- Indexes for table `partialcancle`
--
ALTER TABLE `partialcancle`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daycancle`
--
ALTER TABLE `daycancle`
  MODIFY `sn` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hall`
--
ALTER TABLE `hall`
  MODIFY `hallsn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `admin_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `partialcancle`
--
ALTER TABLE `partialcancle`
  MODIFY `sn` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
