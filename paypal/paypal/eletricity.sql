-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2016 at 01:58 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eletricity`
--

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE IF NOT EXISTS `alogin` (
  `email` varchar(35) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`email`, `password`, `name`) VALUES
('Aisha491221@gmail.com', 'Aisha491221@gmail.com', 'Asha Kotadiya'),
('Ravi Nakum', 'Ravi', 'Ravi K. Nakum');

-- --------------------------------------------------------

--
-- Table structure for table `billpayment`
--

CREATE TABLE IF NOT EXISTS `billpayment` (
  `bill_id` varchar(30) NOT NULL,
  `bill_no` varchar(30) NOT NULL,
  `customer_id` varchar(10) NOT NULL,
  `bill_amount` varchar(10) NOT NULL,
  `payer_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billpayment`
--

INSERT INTO `billpayment` (`bill_id`, `bill_no`, `customer_id`, `bill_amount`, `payer_email`) VALUES
('EERA1236       ', 'EERA1236       ', '4       ', '1896      ', 'jadejayuvrajshih10@gmail.com'),
('EERA1234', 'EERA1234', '2', '2733', 'rknakum07@gmail.com'),
('EERA1239', 'EERA1239', '7', '678', 'avanisonagara@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `billrecord`
--

CREATE TABLE IF NOT EXISTS `billrecord` (
  `bill_id` varchar(30) NOT NULL,
  `bill_no` varchar(30) NOT NULL,
  `customer_id` varchar(10) NOT NULL DEFAULT '1',
  `bill_amount` varchar(10) NOT NULL,
  `payer_fname` varchar(30) NOT NULL,
  `payer_lname` varchar(30) NOT NULL,
  `payer_address` varchar(255) NOT NULL,
  `payer_city` varchar(30) NOT NULL,
  `payer_state` varchar(30) NOT NULL,
  `payer_zip` varchar(30) NOT NULL,
  `payer_country` varchar(30) NOT NULL,
  `payer_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billrecord`
--

INSERT INTO `billrecord` (`bill_id`, `bill_no`, `customer_id`, `bill_amount`, `payer_fname`, `payer_lname`, `payer_address`, `payer_city`, `payer_state`, `payer_zip`, `payer_country`, `payer_email`) VALUES
('EERA1234', 'EERA1234', '9033322585', '43', 'ravi', 'nakum', 'shivnagar', 'jamnagar', 'gujarat', '361004', 'india', 'rknakum07@gmail.com'),
('EERA1234', 'EERA1234', 'ol', '43', 'mm,', 'm,.', ',.', 'm,', ',', ',.', 'm,.', 'rknakum07@gmail.com'),
('EERA1234', 'EERA1234', '9033322585', '43', 'ravi', 'nakum', 'shivnagar , gokulnagar', 'jamnagar', 'gujarat', '361004', 'india', 'rknakum07@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `connection`
--

CREATE TABLE IF NOT EXISTS `connection` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `flatno` varchar(10) NOT NULL,
  `society` varchar(30) NOT NULL,
  `streetno1` varchar(70) NOT NULL,
  `streetno2` varchar(60) NOT NULL,
  `city` varchar(40) NOT NULL,
  `zipcode` int(9) NOT NULL,
  `primise` varchar(12) NOT NULL,
  `voltage` varchar(12) NOT NULL,
  `email` varchar(65) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `supply` varchar(30) NOT NULL,
  `catsupply` varchar(30) NOT NULL,
  `upload` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `connection`
--

INSERT INTO `connection` (`fname`, `lname`, `flatno`, `society`, `streetno1`, `streetno2`, `city`, `zipcode`, `primise`, `voltage`, `email`, `contact`, `supply`, `catsupply`, `upload`) VALUES
('ravi', 'nakum', '1', '0311', '17', '07', 'jamnagar', 361004, 'Owned', 'LT', 'rknakum07@gmail.com', '9033396333', 'Single', 'Residental', 'report/newConnectionUserDocument/saving-oily-bird_3256.jpg'),
('nnm', ',m.', 'm,.', 'm,./', 'm,./', 'nm,./', 'm,./', 0, 'ranted', '', 'j,', 'bmn,m.,', 'Single', 'Malls', 'report/newConnectionUserDocument/classie.js'),
('nnm', ',m.', 'm,.', 'm,./', 'm,./', 'nm,./', 'm,./', 0, 'ranted', '', 'j,', 'bmn,m.,', 'Single', 'Malls', 'report/newConnectionUserDocument/classie.js'),
('nm,.', 'bnm,', 'nm,.', 'nm,./', 'nm,./', 'nm,.//', 'nm,./', 0, 'ownded', 'LT', 'm,./', 'nm,./', 'Single', 'Malls', 'report/newConnectionUserDocument/classie.js'),
('nm,.', 'bnm,', 'nm,.', 'nm,./', 'nm,./', 'nm,.//', 'nm,./', 0, 'ownded', 'LT', 'm,./', 'nm,./', 'Single', 'Malls', 'report/newConnectionUserDocument/classie.js'),
('nm,.', 'bnm,', 'nm,.', 'nm,./', 'nm,./', 'nm,.//', 'nm,./', 0, 'ownded', 'LT', 'm,./', 'nm,./', 'Single', 'Malls', 'report/newConnectionUserDocument/classie.js');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(30) NOT NULL,
  `email` varchar(250) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `contact`, `message`) VALUES
('asha kotadiya', 'ashakotadiya491221@gmail.com', '9909890868', 'your bill payment system is very good.');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `id` int(15) NOT NULL,
  `desc` text NOT NULL,
  `requirement` varchar(30) DEFAULT NULL,
  `document` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `desc`, `requirement`, `document`) VALUES
(1, 'Applications for the Post Of Junier Programmer', '02', 'JP_Terms  Conditions11May15.pdf'),
(2, 'Applications For The Post Of LAW Officer', '01', 'LO_Terms  Conditions11May15.pdf'),
(3, 'Merit list of requirement of 02-04-2016\r\n', NULL, '3rd JA-Merit to be placed on Website 02.04.2016.pdf'),
(4, 'Requirement Of Law Officer In Bhavnagar', '1', 'Law Officer.pdf'),
(5, 'Selection-Waiting_list_VSJE(Electrical)-Surendranagar', '2', 'Selection-Waiting_list_VSJE(Electrical).pdf'),
(6, 'Selection-Waiting_list_VSJE(Instrument)Junagadh', '4', 'Selection-Waiting_list_VSJE(Instrument).pdf'),
(7, 'VSJECIVIL2015 Requirement Jamnagar', '5', 'Terms_Conditions_VSJECIVIL2015(1).pdf'),
(8, 'WEBSITE-EA-2ndAllotment Eletrical', NULL, 'WEBSITE-EA-2ndAllotment.pdf'),
(9, 'VS_JE(Electrical) Waiting -List-02.09.15 Requirement - rajkot', '1', 'VS_JE(Electrical) Waiting -List-02.09.15.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `jobapply`
--

CREATE TABLE IF NOT EXISTS `jobapply` (
  `id` varchar(30) NOT NULL,
  `document` varchar(255) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `bdate` date NOT NULL,
  `basic` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `mrgstatus` varchar(15) NOT NULL,
  `contact1` varchar(13) NOT NULL,
  `contact2` varchar(13) NOT NULL,
  `upload` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobapply`
--

INSERT INTO `jobapply` (`id`, `document`, `fname`, `lname`, `email`, `bdate`, `basic`, `gender`, `address`, `city`, `state`, `mrgstatus`, `contact1`, `contact2`, `upload`) VALUES
('1', 'Applications for the Post Of Junier Programmer', 'ravi', 'nakum', 'rk1@gmail.com', '1995-11-30', 'Male', 'gujarat', 'dsvghbnm,.', 'jamnagar', 'gujarat', 'YES', '9033322585', '9033322585', 'report/job/jobs/userDocument/1.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(12) NOT NULL,
  `news` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news`, `image`) VALUES
(1, 'Power restored in over 900 Villages', 'image/newsimg1.jpg'),
(2, 'Inauguration ceremony of Hi Tech Meter Testing and CT PT lab at Bhavnagar', 'image/newsimg2.jpg'),
(3, 'PGVCL Plans for energy conservation', 'image/newsimg4.jpg'),
(4, 'PGVCL to install 1500 solar power pumps', 'image/newsimg5.jpg'),
(5, 'PGVCL initiative will cover 2000 Homes in Kutch, Saurashtra', 'image/newsimg9.jpg'),
(6, 'Distribution of Desks to primary schools as Corporate Social Responsibility', 'image/newsimg3.jpg'),
(7, 'PGVCL wins the IPPAI Power Award-2014 for the "Best Distribution Company    ENGLISH    GUJARATI', 'image/newsimg7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE IF NOT EXISTS `purchases` (
  `invoice` varchar(20) NOT NULL,
  `product_id` varchar(40) NOT NULL,
  `product_name` varchar(40) NOT NULL,
  `product_quantity` varchar(40) NOT NULL,
  `product_amount` varchar(10) NOT NULL,
  `payer_fname` varchar(30) NOT NULL,
  `payer_lname` varchar(30) NOT NULL,
  `payer_address` varchar(255) NOT NULL,
  `payer_city` varchar(30) NOT NULL,
  `payer_state` varchar(30) NOT NULL,
  `payer_zip` varchar(30) NOT NULL,
  `payer_country` varchar(60) NOT NULL,
  `payer_email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`invoice`, `product_id`, `product_name`, `product_quantity`, `product_amount`, `payer_fname`, `payer_lname`, `payer_address`, `payer_city`, `payer_state`, `payer_zip`, `payer_country`, `payer_email`) VALUES
('1548297983', '1', 'Solar Panel for 20W   2W LED', '1', '23.02', 'ravi', 'nakum', 'shivnagar , gokulnagar', 'jamnagar', 'gujarat', '361004', '8866340363', 'rknakum07@gmail.com'),
('1046156827', '1', 'Solar Panel for 20W   2W LED', '1', '23.02', 'ravi', 'nakum', 'shivnagar , gokulnagar', 'jamnagar', 'gujarat', '361004', 'india', 'rknakumo7@gmail.com'),
('0935211784', '6', 'solar power Graden light LED ', '1', '9.51', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `quickcomplaint`
--

CREATE TABLE IF NOT EXISTS `quickcomplaint` (
  `name` varchar(39) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quickcomplaint`
--

INSERT INTO `quickcomplaint` (`name`, `contact`, `address`) VALUES
('chirag', '9909890868', 'sorry '),
('ghjnm,', 'vbnm,.', 'vbnm,.');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL,
  `sec_question` varchar(50) NOT NULL,
  `answer` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fname`, `lname`, `email`, `password`, `sec_question`, `answer`, `address`, `city`, `state`) VALUES
('priya', 'prajapati', 'priyaprajapati2@gmail.com', 'priya@8990', 'what is your your Best Friend ?', 'avani', 'kamdhune society', 'junagadh', 'gujarat'),
('ravi', 'nakum', 'rknakum07@gmail.com', 'avniravi', 'what is your First mobile Number ?', '9033322585', 'jamnagar', 'jamnagar', 'gujarat');

-- --------------------------------------------------------

--
-- Table structure for table `shf_meter`
--

CREATE TABLE IF NOT EXISTS `shf_meter` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `supply` varchar(20) NOT NULL,
  `flatno` varchar(10) NOT NULL,
  `society` varchar(30) NOT NULL,
  `streetno1` varchar(70) NOT NULL,
  `streetno2` varchar(70) NOT NULL,
  `city` varchar(30) NOT NULL,
  `zipcode` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `catsupply` varchar(30) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shf_meter`
--

INSERT INTO `shf_meter` (`fname`, `lname`, `supply`, `flatno`, `society`, `streetno1`, `streetno2`, `city`, `zipcode`, `email`, `contact`, `catsupply`, `filename`) VALUES
('ravi', 'nakum', 'Single', 'sss', 'dddd', 'hgjhj', 'jkhjkbj', 'jkkkl', 'kkjl', 'rknakum07@gmail.com', '9033396333', 'Residental', 'report/ShiftingMeter/add cart.JPG'),
('kl', 'nm,./', 'Single', 'nm,./', 'nm,./', 'nm,./', 'bnm,./nm,.', 'nm,./nm,./', 'm,./', 'rknakum0@gmail.com', '.m,./', 'Malls', 'report/ShiftingMeter/classie.js'),
('nm,..', 'nm,.', 'Single', 'n.', 'nm,.', 'nm,.', 'nm,.', 'nm,', 'nm,', 'nm,.', 'nm,.', 'Malls', 'report/ShiftingMeter/classie.js'),
('nm,..', 'nm,.', 'Single', 'n.', 'nm,.', 'nm,.', 'nm,.', 'nm,', 'nm,', 'nm,.', 'nm,.', 'Malls', 'report/ShiftingMeter/classie.js'),
('nm,..', 'nm,.', 'Single', 'n.', 'nm,.', 'nm,.', 'nm,.', 'nm,', 'nm,', 'nm,.', 'nm,.', 'Malls', 'report/ShiftingMeter/classie.js'),
('nm,..', 'nm,.', 'Single', 'n.', 'nm,.', 'nm,.', 'nm,.', 'nm,', 'nm,', 'nm,.', 'nm,.', 'Malls', 'report/ShiftingMeter/classie.js');

-- --------------------------------------------------------

--
-- Table structure for table `solar_products`
--

CREATE TABLE IF NOT EXISTS `solar_products` (
  `id` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `prductname` varchar(70) NOT NULL,
  `productprice` int(10) NOT NULL,
  `productdesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solar_products`
--

INSERT INTO `solar_products` (`id`, `product`, `prductname`, `productprice`, `productdesc`) VALUES
(1, 'image/products/1.jpg', 'Solar Panel for 20W + 2W LED', 1450, 'New And Latest 130W Solar panel And 2W LED luminary System provides a quality check of each cell and wide power charge bypass diades to avoid effect of partical shanding aluminum product.'),
(4, 'image/products/3.jpg', '3000 MAH Solar power bank ', 2800, 'This pocket sized solar rechargeble touch has special super brightwhite LED for focused lighr beams.it is powered by solar PV modules for smooth operation.It is used 2 hours of Single Charges.'),
(3, 'image/products/4.jpg', 'Touch screen Solar power Calculator', 399, 'The solar transparent Power Charger is a wonderful calculator which is powered by solar energy without any external battery and displays 8 digits on the screen used for office System.'),
(2, 'image/products/5.jpg', 'Green Horizontal Solar power 2 LED touch', 249, 'This pocket sized solar rechargeble touch has special super bright white LED for focused lighr beams.it''s powered by solar PV modules for smooth operation.It''s used 2 hours of Single'),
(5, 'image/products/9.jpg', 'Solar wall light motion sensor', 1290, 'it''s increases a safety for your outdoor living light & dark areas.it''s provide extra security with light motion sensor.it''s charge day and working on night.'),
(6, 'image/products/10.jpg', 'solar power Graden light LED ', 599, 'Solar power outdoor garden light gutter fencw LED wall with bracket are charege using the sunon day and work on night.it''s working time is 9 hour per Day. '),
(7, 'image/products/13.jpg', 'EMIIT - solar home fun ', 12325, 'The solar home fan ''JUMBO XXL'' is a complete multi-function , modular Fan.it''s provide a MPPT charging Technology with Dual Chargeing Mode and 8 meter cable'),
(8, 'image/products/14.jpg', 'Auto cool Car System', 610, 'the auto cool car solar power side window cooling system which works without any eletricity connection as it''s works with solar energy and evulates all heat your parked area.');

-- --------------------------------------------------------

--
-- Table structure for table `tender`
--

CREATE TABLE IF NOT EXISTS `tender` (
`id` int(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `desc` text NOT NULL,
  `price` int(12) NOT NULL,
  `lastdate` date NOT NULL,
  `document` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender`
--

INSERT INTO `tender` (`id`, `city`, `desc`, `price`, `lastdate`, `document`) VALUES
(1, 'Jamnagar', ' HIRING OF VEHICLE UTILITI MMT IN RURAL S/DN. 24 Hrs. under CITY-2 D.O.JAMNAGAR', 9000000, '2016-05-19', 'JMN-002 Tender Notice JJD 007-29.1.16.pdf'),
(2, 'Rajkot', ' 	Erection & Maintenance of HT, LT lines, Meter installation, Disconnnection/Re.connection, Meter Replacement Work Under Central Zone S/Division , rajot', 8400000, '2016-06-02', 'RCC-009 03_Tender_lug.pdf'),
(3, 'Bhavnagar', 'Erection & Maintenance of HT, LT & TC for Bhudardi AG HVDS work under JJW s/dn.', 3900000, '2016-07-17', 'BHJ-245 Tender Notice 264.pdf'),
(4, 'junagadh', ' 	Erection & Maintenance for HT,LT & T/C, Jivapar Ag.Feeder maint. Dec.15 in SHAPAR  S/dn.  under City 2 division, Junagadh', 380000, '2016-04-02', 'JNDCO-019 on line E  Tender for Gandhigram sub. div. office construction.pdf'),
(5, 'Porbandar', 'Labour Work of Loading & Unloading of Transformer & other matrials under City -2 Division, Porbandar', 400000, '2016-04-09', 'PBR-001 PBRCO-16.pdf'),
(6, 'Surendranagar', ' Erection & Maintenance for HT,LT & T/C, Jivapar Ag.Feeder maint. Dec.15 in SHAPAR S/dn. under City 2 division, Jamangar', 490000, '2016-03-25', 'SNR-013 E TENDER 02 2016 lbd.pdf'),
(7, 'morbi', 'Erection & Maintenance of HT/LT Lines & T/C for HVDS work under Dhrol-Rural S/dn.\r\nErection & Maintenance of HT/LT Lines & T/C for HVDS work under Dhrol-Rural S/dn.\r\nErection & Maintenance of HT/LT Lines & T/C for SI Scheme under Dhrol-Rural S/dn.\r\nErection & Maintenance of HT/LT Lines & T/C for ND\r\nScheme under Dhrol-Rural S/dn.\r\nErection & Maintenance of HT/LT Lines & T/C for SPA Scheme under Dhrol-Rural S/dn', 770000, '2016-03-29', 'RCC-009 03_Tender_lug.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tenderapply`
--

CREATE TABLE IF NOT EXISTS `tenderapply` (
  `id` varchar(30) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `pan_no` varchar(30) NOT NULL,
  `excertificate` varchar(255) NOT NULL,
  `tenderprice` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenderapply`
--

INSERT INTO `tenderapply` (`id`, `desc`, `companyname`, `fname`, `lname`, `address`, `city`, `state`, `email`, `contact`, `pan_no`, `excertificate`, `tenderprice`) VALUES
('', '', 'rk pvt lmt', 'ravi', 'nakum', 'kljfgfg', 'ljkjl;;kjhj', 'jkl;kjhg', 'kjghghjkl;', '8866340363', 'jkcffuiok', 'report/job/jobs/userDocument/contact.png', '909090'),
('', '', 'rk pvt lmt', 'ravi', 'nakum', 'shivnagar, gokulnagar', 'jamnagar', 'gujarat', 'rknakum07@gmail.com', '9033396333', '903709657890', 'report/job/jobs/userDocument/productfinal.JPG', '670000'),
('', '', 'rk pvt lmt', 'ravi', 'nakum', 'shivnagar, gokulnagar', 'jamnagar', 'gujarat', 'rknakum07@gmail.com', '9033396333', '903709657890', 'report/job/jobs/userDocument/productfinal.JPG', '670000'),
('', '', 'l,,nbvv', 'bmn,./', 'bnm,./', 'vnm,./', 'bnm,./', 'nm,./', 'bnm,./', 'nm,./', 'nm,.n', 'report/job/jobs/userDocument/classie.js', '090'),
('', '', 'l,,nbvv', 'bmn,./', 'bnm,./', 'vnm,./', 'bnm,./', 'nm,./', 'bnm,./', 'nm,./', 'nm,.n', 'report/job/jobs/userDocument/classie.js', '090'),
('1', '<br /><b>Notice</b>:  Undefined index: desc in <b>C:xampphtdocseletricity	enderapply.php</b> on line <b>17</b><br />', 'ravi', 'ravi', 'nakum', 'shivnagar', 'jamnagar', 'gujarat', 'rk1@gmail.com', '9033322585', '785678876456789', 'report/job/jobs/userDocument/2.4.1.PNG', '90');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alogin`
--
ALTER TABLE `alogin`
 ADD PRIMARY KEY (`email`), ADD UNIQUE KEY `userid` (`email`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
 ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tender`
--
ALTER TABLE `tender`
 ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tender`
--
ALTER TABLE `tender`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
