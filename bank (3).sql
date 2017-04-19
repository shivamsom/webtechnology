-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2016 at 07:03 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerca`
--

CREATE TABLE `customerca` (
  `acno` int(11) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `image_path` varchar(200) NOT NULL,
  `open_date` date NOT NULL,
  `title` varchar(3) NOT NULL,
  `L_name` varchar(20) NOT NULL,
  `F_name` varchar(20) NOT NULL,
  `M_name` varchar(20) NOT NULL,
  `ms` varchar(100) NOT NULL,
  `vat` varchar(15) NOT NULL,
  `cst` varchar(15) NOT NULL,
  `day` int(11) NOT NULL,
  `month` varchar(15) NOT NULL,
  `year` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `Addr1` text NOT NULL,
  `Addr2` text NOT NULL,
  `Addr3` text NOT NULL,
  `pin` int(11) NOT NULL,
  `Dist` varchar(30) NOT NULL,
  `state` varchar(15) NOT NULL,
  `Mobile` varchar(11) NOT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `std` int(11) NOT NULL,
  `telephone` int(11) NOT NULL,
  `Pan` varchar(10) NOT NULL,
  `JT_AC` varchar(10) DEFAULT NULL,
  `bill` varchar(10) DEFAULT NULL,
  `idcard` varchar(10) DEFAULT NULL,
  `ito` varchar(10) DEFAULT NULL,
  `defenceid` varchar(10) DEFAULT NULL,
  `license` varchar(10) DEFAULT NULL,
  `pass` varchar(10) DEFAULT NULL,
  `vot_id` varchar(10) DEFAULT NULL,
  `pan_id` varchar(10) DEFAULT NULL,
  `other` varchar(10) DEFAULT NULL,
  `pic` varchar(50) NOT NULL,
  `balance` float UNSIGNED NOT NULL DEFAULT '0',
  `pic_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customersb`
--

CREATE TABLE `customersb` (
  `acno` int(11) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `image_path` varchar(200) NOT NULL,
  `open_date` date NOT NULL,
  `title` varchar(3) NOT NULL,
  `L_name` varchar(20) NOT NULL,
  `F_name` varchar(20) NOT NULL,
  `M_name` varchar(20) NOT NULL,
  `day` int(11) NOT NULL,
  `month` varchar(15) NOT NULL,
  `year` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `Addr1` text NOT NULL,
  `Addr2` text NOT NULL,
  `Addr3` text NOT NULL,
  `pin` int(11) NOT NULL,
  `Dist` varchar(30) NOT NULL,
  `state` varchar(15) NOT NULL,
  `Mobile` varchar(10) NOT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `std` varchar(4) NOT NULL,
  `telephone` varchar(8) NOT NULL,
  `Pan` varchar(10) NOT NULL,
  `JT_AC` varchar(10) DEFAULT NULL,
  `bill` varchar(10) DEFAULT NULL,
  `idcard` varchar(10) DEFAULT NULL,
  `ito` varchar(10) DEFAULT NULL,
  `defenceid` varchar(10) DEFAULT NULL,
  `license` varchar(10) DEFAULT NULL,
  `pass` varchar(10) DEFAULT NULL,
  `vot_id` varchar(10) DEFAULT NULL,
  `pan_id` varchar(10) DEFAULT NULL,
  `other` varchar(10) DEFAULT NULL,
  `pic` varchar(50) NOT NULL,
  `balance` float UNSIGNED NOT NULL DEFAULT '0',
  `pic_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customersb`
--

INSERT INTO `customersb` (`acno`, `image_name`, `image_path`, `open_date`, `title`, `L_name`, `F_name`, `M_name`, `day`, `month`, `year`, `type`, `Addr1`, `Addr2`, `Addr3`, `pin`, `Dist`, `state`, `Mobile`, `Email`, `std`, `telephone`, `Pan`, `JT_AC`, `bill`, `idcard`, `ito`, `defenceid`, `license`, `pass`, `vot_id`, `pan_id`, `other`, `pic`, `balance`, `pic_path`) VALUES
(215804, 'cole.jpg', 'img / cole.jpg', '2015-10-07', 'Mr', 'PHELPS', 'COLE', 'JOHNS', 12, 'JUNE', 1998, 'SB', 'A/412 KASTURI PLAZA', 'MANPADA ROAD', 'DOMBIVLI', 421201, 'thane', 'MAH', '9920765647', 'shivamsom3@gmail.com', '251', '20765647', 'hakd', 'available', 'available', 'available', 'available', 'available', 'available', 'available', 'available', 'available', 'aadhar', 'scole.gif', 41740.3, 'img / scole.gif'),
(655506, ' IMG_20140803_230434.JPG', 'img /  IMG_20140803_230434.JPG', '2016-09-07', 'Mr', 'Som', 'Shivam', 'S', 12, 'JUNE', 1997, 'SB', 'A/412 KASTURI PLAZA', 'MANPADA ROAD', 'DOMBIVLI', 421201, 'THANE', 'MAH', '9920765647', 'shivamsom3@gmail.com', '251', '20765647', 'gncps8233n', 'available', 'available', 'available', NULL, 'available', 'available', NULL, 'available', 'available', 'aadhar', ' MYSIGN.jpg', 50334.2, 'img /  MYSIGN.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empid` int(11) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `image_path` varchar(200) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `day` int(5) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` int(11) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `bloodgroup` varchar(3) NOT NULL,
  `addr1` varchar(25) NOT NULL,
  `addr2` varchar(20) NOT NULL,
  `addr3` varchar(20) NOT NULL,
  `pin` int(11) NOT NULL,
  `dist` varchar(20) NOT NULL,
  `state` varchar(5) NOT NULL,
  `mob` varchar(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pan` varchar(10) DEFAULT NULL,
  `drive` varchar(10) DEFAULT NULL,
  `startday` int(11) NOT NULL,
  `startmonth` varchar(10) NOT NULL,
  `startyear` int(11) NOT NULL,
  `jobtitle` varchar(20) NOT NULL,
  `sign_name` varchar(100) NOT NULL,
  `sign_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `image_name`, `image_path`, `lastname`, `firstname`, `middlename`, `day`, `month`, `year`, `gender`, `bloodgroup`, `addr1`, `addr2`, `addr3`, `pin`, `dist`, `state`, `mob`, `email`, `pan`, `drive`, `startday`, `startmonth`, `startyear`, `jobtitle`, `sign_name`, `sign_path`) VALUES
(1, 'SHIVAMSOM.jpg', 'img / SHIVAMSOM.jpg', 'Som', 'Shivam', 'S', 12, '06', 1997, 'M', 'A+', 'A/412,KASTURI PLAZA', 'MANPADA ROAD', 'DOMBIVLI(EAST)', 421201, 'THANE', 'MAH', '9920765647', 'shivamsom3@gmail.com', 'GNCPS8223N', '', 20, 'JAN', 2000, 'SR.MANAGER', 'MYSIGN.jpg', 'img / MYSIGN.jpg'),
(2, '_DSC8167.JPG', 'img / _DSC8167.JPG', 'SINHA', 'MANISH', 'B', 4, 'JULY', 1996, 'M', 'B+', 'ABCDEFGHJKLI', 'MNJKP', 'THANE WEST', 400610, 'THANE', 'MAH', '7738532371', 'sinhamanish0407@gmail.com', '', '', 21, 'FEBRUARY', 2000, 'aSM&OFFICER', '-manish.png', 'img / -manish.png'),
(3, 'sumit.jpg', 'img / sumit.jpg', 'TODANKAR', 'SUMIT', 'S', 24, 'AUGUST', 1997, 'M', 'AB+', 'QWERTYUI', 'ASDFGHJ', 'DADAR', 400014, 'thane', 'MAH', '8652554986', 'todankarsumit97@gmail.com', '', 'mh02-1992', 10, 'MARCH', 2002, 'loan officer', '-sumit.jpg', 'img / -sumit.jpg'),
(11, 'price.jpg', 'img / price.jpg', 'PRICE', 'JOHN', 'V', 30, 'DECEMBER', 1965, 'M', 'O+', 's/12,sas army quaters', 'national defense aca', 'bhopal', 897689, 'narenpur', 'MP', '9876456821', 'price@gmail.com', 'HGJK123H', '', 19, 'APRIL', 1998, 'credit officer', 'prices.png', 'img / prices.png');

-- --------------------------------------------------------

--
-- Table structure for table `fd`
--

CREATE TABLE `fd` (
  `acno` int(11) NOT NULL,
  `exacno` int(11) NOT NULL,
  `extype` varchar(2) NOT NULL,
  `date` date NOT NULL,
  `amount` float NOT NULL,
  `year` varchar(4) NOT NULL,
  `roi` varchar(3) NOT NULL,
  `mat_amt` float NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `jt_ac` varchar(3) NOT NULL DEFAULT 'no',
  `pan` varchar(10) DEFAULT NULL,
  `Addr1` varchar(25) NOT NULL,
  `Addr2` varchar(25) NOT NULL,
  `Addr3` varchar(25) NOT NULL,
  `pin` varchar(6) NOT NULL,
  `district` varchar(15) NOT NULL,
  `state` varchar(6) NOT NULL,
  `std` varchar(5) DEFAULT NULL,
  `landline` varchar(8) DEFAULT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nominee` varchar(1) NOT NULL DEFAULT 'N',
  `sign` varchar(50) NOT NULL,
  `sign_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fd`
--

INSERT INTO `fd` (`acno`, `exacno`, `extype`, `date`, `amount`, `year`, `roi`, `mat_amt`, `fullname`, `jt_ac`, `pan`, `Addr1`, `Addr2`, `Addr3`, `pin`, `district`, `state`, `std`, `landline`, `mobile`, `email`, `nominee`, `sign`, `sign_path`) VALUES
(995601, 215804, 'SB', '2016-11-07', 50000, '1', '7.3', 53751.1, 'PHELPS COLE JOHNS', 'yes', 'GHASDK', 'A/412 KASTURI PLAZA', 'MANPADA ROAD', 'DOMBIVLI', '421201', 'Thane', 'UP', '231', '1234567', '9920765647', 'phelps@ymail.com', 'Y', ' scole.gif', 'img /  scole.gif');

-- --------------------------------------------------------

--
-- Table structure for table `intr_log`
--

CREATE TABLE `intr_log` (
  `acno` int(11) NOT NULL,
  `last_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intr_log`
--

INSERT INTO `intr_log` (`acno`, `last_date`) VALUES
(215804, '2016-11-07'),
(655506, '2016-11-07');

-- --------------------------------------------------------

--
-- Table structure for table `joint`
--

CREATE TABLE `joint` (
  `acno` int(11) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `image_path` varchar(200) NOT NULL,
  `L_Name` varchar(20) NOT NULL,
  `F_Name` varchar(20) NOT NULL,
  `M_Name` varchar(20) NOT NULL,
  `gen` varchar(1) NOT NULL,
  `day` int(11) NOT NULL,
  `month` varchar(11) NOT NULL,
  `year` int(11) NOT NULL,
  `pan` varchar(11) DEFAULT NULL,
  `mobileno` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `exacno` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `joint`
--

INSERT INTO `joint` (`acno`, `image_name`, `image_path`, `L_Name`, `F_Name`, `M_Name`, `gen`, `day`, `month`, `year`, `pan`, `mobileno`, `email`, `exacno`) VALUES
(215804, '10550969_1454110278173861_5127038672387010354_n.jp', 'img / 10550969_1454110278173861_5127038672387010354_n.jpg', 'earle', 'roy', 's', 'M', 1, 'JANUARY', 1997, 'uop', '1234567890', 'roy@gmail.com', 0),
(215804, 'class.png', 'img / class.png', 'galloway', 'rusty', 'b', 'M', 1, 'JANUARY', 1956, 'hjk', '098765432', 'rust@ymail.com', 0),
(215804, 'prices.png', 'img / prices.png', 'bekowsky', 'stefan', 'h', 'M', 7, 'DECEMBER', 1998, 'dasd', '579023223', 'stefan@live.com', 0),
(655506, ' class.png', 'img /  class.png', 'SOM', 'kuheli', 'S', 'F', 7, 'DECEMBER', 1965, 'atjps6111n', '9167921492', 'kuhelisom@hotmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `joint1`
--

CREATE TABLE `joint1` (
  `acno` int(11) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `image_path` varchar(200) NOT NULL,
  `L_Name` varchar(20) NOT NULL,
  `F_Name` varchar(20) NOT NULL,
  `M_Name` varchar(20) NOT NULL,
  `gen` varchar(1) NOT NULL,
  `day` int(11) NOT NULL,
  `month` varchar(11) NOT NULL,
  `year` int(11) NOT NULL,
  `pan` varchar(11) DEFAULT NULL,
  `mobileno` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `exacno` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jointd`
--

CREATE TABLE `jointd` (
  `acno` int(11) NOT NULL,
  `L_Name` varchar(20) NOT NULL,
  `F_Name` varchar(20) NOT NULL,
  `M_Name` varchar(20) NOT NULL,
  `exacno` int(11) NOT NULL,
  `extype` varchar(2) NOT NULL,
  `sign` varchar(50) NOT NULL,
  `sign_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jointd`
--

INSERT INTO `jointd` (`acno`, `L_Name`, `F_Name`, `M_Name`, `exacno`, `extype`, `sign`, `sign_path`) VALUES
(995601, 'GALLOWAY', 'RUSTY', 'B', 215804, 'SB', ' class.png', 'img /  class.png');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `acno` int(11) NOT NULL,
  `open_date` date NOT NULL,
  `title` varchar(3) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `addr1` varchar(200) NOT NULL,
  `addr2` varchar(200) NOT NULL,
  `addr3` varchar(50) NOT NULL,
  `district` varchar(20) NOT NULL,
  `pin` int(6) NOT NULL,
  `state` varchar(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `occupation` varchar(5) NOT NULL,
  `textarea` text NOT NULL,
  `society` varchar(25) NOT NULL,
  `builtup` int(6) NOT NULL,
  `gov` varchar(1) NOT NULL,
  `proj` varchar(3) NOT NULL,
  `buildername` varchar(30) DEFAULT NULL,
  `buildercontact` varchar(10) DEFAULT NULL,
  `ownername` varchar(30) DEFAULT NULL,
  `ownercontact` varchar(10) DEFAULT NULL,
  `income` varchar(30) NOT NULL,
  `yr` int(2) NOT NULL,
  `roi` varchar(5) NOT NULL,
  `lamt` int(10) NOT NULL,
  `emi` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`acno`, `open_date`, `title`, `fullname`, `addr1`, `addr2`, `addr3`, `district`, `pin`, `state`, `email`, `mob`, `dob`, `occupation`, `textarea`, `society`, `builtup`, `gov`, `proj`, `buildername`, `buildercontact`, `ownername`, `ownercontact`, `income`, `yr`, `roi`, `lamt`, `emi`) VALUES
(4683, '2016-11-07', 'Mr', 'SCALETTA VITO ANTONIO', '101,MARTYS APARTMENT', 'DIPTON STREET', 'NEW YORK', 'THANE', 123456, 'MEGH', 'scalleta@empirebay.com', '1234567890', '1987-03-23', 'Retal', 'VILLA 101,GREENFIELD,\r\nEMPIREBAY', 'villa 101', 1000, 'y', 'NEW', 'harry', '6789054211', '', '', '100000', 10, '10.1', 4400000, 59929.9);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `username`, `password`, `fullname`) VALUES
(1, 'shivam', 'shivam123', 'Shivam Som');

-- --------------------------------------------------------

--
-- Table structure for table `login2`
--

CREATE TABLE `login2` (
  `uid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login2`
--

INSERT INTO `login2` (`uid`, `username`, `password`, `fullname`) VALUES
(2, 'manish', 'sinha', 'MANISH B SINHA'),
(3, 'sumit', '4321', 'SUMIT S TODANKAR'),
(11, 'price', 'price', 'JOHN PRICE');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `acno` int(11) NOT NULL,
  `date` date NOT NULL,
  `deposit` float DEFAULT NULL,
  `withdraw` float DEFAULT NULL,
  `balance` float UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`acno`, `date`, `deposit`, `withdraw`, `balance`) VALUES
(215804, '2016-11-07', 45000, NULL, 45000),
(215804, '2016-11-07', NULL, 5000, 40000),
(655506, '2016-11-07', 10000, NULL, 10000),
(655506, '2016-11-07', 10000, NULL, 20000),
(655506, '2016-11-07', 10000, NULL, 30000),
(655506, '2016-11-07', 10000, NULL, 40000),
(655506, '2016-11-07', 10000, NULL, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `logs2`
--

CREATE TABLE `logs2` (
  `acno` int(11) NOT NULL,
  `date` date NOT NULL,
  `deposit` float DEFAULT NULL,
  `withdraw` float DEFAULT NULL,
  `balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nominee`
--

CREATE TABLE `nominee` (
  `acno` int(11) NOT NULL,
  `type` varchar(2) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `age` varchar(2) NOT NULL,
  `relationship` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nominee`
--

INSERT INTO `nominee` (`acno`, `type`, `fullname`, `age`, `relationship`) VALUES
(995601, 'FD', 'ELSA PHELPS', '21', 'oth');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `eid` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `date&time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`eid`, `fullname`, `date&time`, `status`) VALUES
(10, 'Shivam Som', '2016-11-07 15:30:40', 'IN'),
(1, 'Shivam Som', '2016-11-07 16:35:48', 'OUT'),
(2, 'MANISH B SINHA', '2016-11-07 16:36:44', 'IN'),
(2, 'MANISH B SINHA', '2016-11-07 16:47:39', 'IN'),
(2, 'MANISH B SINHA', '2016-11-07 17:39:29', 'IN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerca`
--
ALTER TABLE `customerca`
  ADD PRIMARY KEY (`acno`),
  ADD UNIQUE KEY `acno` (`acno`);

--
-- Indexes for table `customersb`
--
ALTER TABLE `customersb`
  ADD PRIMARY KEY (`acno`),
  ADD UNIQUE KEY `acno` (`acno`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `fd`
--
ALTER TABLE `fd`
  ADD PRIMARY KEY (`acno`);

--
-- Indexes for table `intr_log`
--
ALTER TABLE `intr_log`
  ADD KEY `acno` (`acno`);

--
-- Indexes for table `joint`
--
ALTER TABLE `joint`
  ADD KEY `acno` (`acno`),
  ADD KEY `acno_2` (`acno`);

--
-- Indexes for table `joint1`
--
ALTER TABLE `joint1`
  ADD KEY `acno` (`acno`);

--
-- Indexes for table `jointd`
--
ALTER TABLE `jointd`
  ADD KEY `acno` (`acno`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`acno`),
  ADD UNIQUE KEY `mob` (`mob`),
  ADD UNIQUE KEY `acno` (`acno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uname` (`username`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `login2`
--
ALTER TABLE `login2`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uname` (`username`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD KEY `acno` (`acno`);

--
-- Indexes for table `logs2`
--
ALTER TABLE `logs2`
  ADD KEY `acno` (`acno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `login2`
--
ALTER TABLE `login2`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `intr_log`
--
ALTER TABLE `intr_log`
  ADD CONSTRAINT `intr_log_ibfk_1` FOREIGN KEY (`acno`) REFERENCES `customersb` (`acno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `joint`
--
ALTER TABLE `joint`
  ADD CONSTRAINT `joint_ibfk_1` FOREIGN KEY (`acno`) REFERENCES `customersb` (`acno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `joint1`
--
ALTER TABLE `joint1`
  ADD CONSTRAINT `joint1_ibfk_1` FOREIGN KEY (`acno`) REFERENCES `customerca` (`acno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jointd`
--
ALTER TABLE `jointd`
  ADD CONSTRAINT `jointd_ibfk_1` FOREIGN KEY (`acno`) REFERENCES `fd` (`acno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `f1` FOREIGN KEY (`acno`) REFERENCES `customersb` (`acno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `logs2`
--
ALTER TABLE `logs2`
  ADD CONSTRAINT `f2` FOREIGN KEY (`acno`) REFERENCES `customerca` (`acno`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
