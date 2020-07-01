-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 05, 2019 at 02:47 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

DROP TABLE IF EXISTS `advertisement`;
CREATE TABLE IF NOT EXISTS `advertisement` (
  `adv_id` int(100) NOT NULL AUTO_INCREMENT,
  `camp_title` varchar(100) NOT NULL,
  `org_by` varchar(100) NOT NULL,
  `pic` varchar(700) NOT NULL,
  `detail` varchar(900) NOT NULL,
  PRIMARY KEY (`adv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroup`
--

DROP TABLE IF EXISTS `bloodgroup`;
CREATE TABLE IF NOT EXISTS `bloodgroup` (
  `bg_id` int(100) NOT NULL AUTO_INCREMENT,
  `bg_name` varchar(100) NOT NULL,
  PRIMARY KEY (`bg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodgroup`
--

INSERT INTO `bloodgroup` (`bg_id`, `bg_name`) VALUES
(13, 'o+'),
(14, 'o-'),
(15, 'AB+'),
(16, 'AB-'),
(17, 'A+'),
(18, 'A-'),
(19, 'B+'),
(22, 'B-');

-- --------------------------------------------------------

--
-- Table structure for table `camp`
--

DROP TABLE IF EXISTS `camp`;
CREATE TABLE IF NOT EXISTS `camp` (
  `camp_id` int(100) NOT NULL AUTO_INCREMENT,
  `camp_title` varchar(500) NOT NULL,
  `organised_by` varchar(500) NOT NULL,
  `state` int(100) NOT NULL,
  `city` int(100) NOT NULL,
  `pic` varchar(900) NOT NULL,
  `detail` varchar(1000) NOT NULL,
  PRIMARY KEY (`camp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camp`
--

INSERT INTO `camp` (`camp_id`, `camp_title`, `organised_by`, `state`, `city`, `pic`, `detail`) VALUES
(1, 'kolkata health park', 'IEM', 1, 0, '12345.jpeg', ''),
(2, 'Riding cycle for blood donation', 'BDCyclists', 9, 5, '12.jpg', 'Donating 1 bag blood can save others life'),
(3, 'World Diabates day blood Donation', 'Bangladesh Diabates association', 9, 5, '1.jpg', 'Your 1 bag blood can give you another life'),
(4, 'Demo1', 'PWD', 9, 5, '12345.jpeg', 'Donating blood'),
(5, 'Demooo', 'calcutta heart clinic', 9, 5, '1234.jpg', 'Donate blood');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(100) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(100) NOT NULL,
  `pin_code` varchar(100) NOT NULL,
  `district` int(10) NOT NULL,
  `state` int(100) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `pin_code`, `district`, `state`) VALUES
(1, 'north praganas', '700102', 1, 9),
(2, 'south praganas', '7001028', 1, 9),
(3, 'bhagalpur', '812002', 2, 1),
(4, 'kahelgoan', '852145', 2, 1),
(5, 'kolkata', '1206', 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `row_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `subj` varchar(700) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

DROP TABLE IF EXISTS `district`;
CREATE TABLE IF NOT EXISTS `district` (
  `dis_id` int(10) NOT NULL AUTO_INCREMENT,
  `state_id` int(10) NOT NULL,
  `dis_name` varchar(50) NOT NULL,
  PRIMARY KEY (`dis_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`dis_id`, `state_id`, `dis_name`) VALUES
(1, 9, 'kolkata'),
(2, 1, 'bhagalpur'),
(3, 1, 'gaya'),
(4, 1, 'mujaffarpur'),
(5, 1, 'patna'),
(6, 2, 'sambalpur'),
(7, 2, 'bhubaneshwar'),
(8, 3, 'bathinda'),
(9, 3, 'amritsar'),
(10, 4, 'ajmer'),
(11, 4, 'banswara'),
(12, 9, 'hoogly'),
(13, 9, 'malda');

-- --------------------------------------------------------

--
-- Table structure for table `donarregistration`
--

DROP TABLE IF EXISTS `donarregistration`;
CREATE TABLE IF NOT EXISTS `donarregistration` (
  `donar_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `b_id` int(100) NOT NULL,
  `state_id` int(10) NOT NULL,
  `district_id` int(10) NOT NULL,
  `city_id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` int(100) NOT NULL,
  `pic` varchar(1000) NOT NULL,
  PRIMARY KEY (`donar_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donarregistration`
--

INSERT INTO `donarregistration` (`donar_id`, `name`, `gender`, `age`, `mobile`, `b_id`, `state_id`, `district_id`, `city_id`, `email`, `pwd`, `pic`) VALUES
(1, 'Monir Hossain', 'male', '23', '12345678', 19, 9, 1, 5, 'fencemonir@gmail.com', 123, 'face.jpg'),
(4, 'Tania Akter', 'female', '20', '01673647342', 19, 9, 1, 5, 'tania@gamil.com', 12345, 'been.jpg'),
(18, 'Imran Khan', 'male', '19', '01874648811', 19, 9, 1, 5, 'imran.khan308309@gmail.com', 12345, 'been.jpg'),
(20, 'Jebin', 'female', '23', '01959904989', 13, 9, 1, 5, 'jebin@gmail.com', 123, '13620129_278514022516479_3404196291774658685_n.jpg'),
(21, 'Rekha khatun', 'female', '23', '01959905256', 20, 9, 1, 5, 'rekha@gmail.com', 123, '1508102_871229962995991_3053231048824493108_n.jpg'),
(23, 'prerna', 'female', '21', '12351264782', 13, 9, 1, 5, 'p.bajaj@gmail.com', 123, 'IMG_1977.jpg'),
(24, 'shubhankar saha', 'male', '22', '63215785425', 14, 9, 1, 5, 'shubhankar@gmail.com', 123, '48414913_778124235876414_8312621137951457280_n.jpg'),
(25, 'niladri paul', 'male', '23', '2315721563', 15, 9, 1, 5, 'niladri@gmail.com', 123, '52146361_2256345004636028_7488597328245293056_n.jpg'),
(26, 'kazi', 'male', '23', '6871573246', 16, 9, 1, 5, 'kazi@gmail.com', 123, '57154695_2320017914909589_8456191947512479744_n.jpg'),
(27, 'kumar Shubham', 'male', '22', '2154759634', 13, 9, 1, 5, 'shubham@gmail.com', 123, '55439702_2126889210760378_8744387066277658624_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

DROP TABLE IF EXISTS `donation`;
CREATE TABLE IF NOT EXISTS `donation` (
  `donation_id` int(100) NOT NULL AUTO_INCREMENT,
  `camp_id` int(100) NOT NULL,
  `ddate` datetime NOT NULL,
  `units` int(100) NOT NULL,
  `detail` varchar(800) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`donation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donation_id`, `camp_id`, `ddate`, `units`, `detail`, `email`) VALUES
(2, 1, '2016-01-01 00:00:00', 1, '2222', 'donor1@gmail.com'),
(3, 1, '2016-04-01 00:00:00', 1, '', 'imran.khan308309@gmail.com'),
(4, 1, '2016-05-18 00:00:00', 1, '', 'donor2@gmail.com'),
(5, 1, '2016-01-01 00:00:00', 1, 'Test', 'ridoy@gmail.com'),
(6, 1, '2016-01-01 00:00:00', 1, '', 'jebin@gmail.com'),
(7, 1, '2016-02-10 00:00:00', 1, 'Donating blood for 1st time :D ', 'rekha@gmail.com'),
(8, 2, '2019-01-01 00:00:00', 2, '', 'kumar.shubham541@gmail.com'),
(9, 1, '2019-01-01 00:00:00', 3, '', 'shubham@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

DROP TABLE IF EXISTS `gallary`;
CREATE TABLE IF NOT EXISTS `gallary` (
  `camp_id` int(100) NOT NULL,
  `pic_id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(400) NOT NULL,
  `pic` varchar(800) NOT NULL,
  PRIMARY KEY (`pic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`camp_id`, `pic_id`, `title`, `pic`) VALUES
(3, 1, 'Donating blood', 'p3Hydrangeas.jpg'),
(2, 2, 'Demo6', 'p3Hydrangeas.jpg'),
(2, 3, 'test8', 'p11Lighthouse.jpg'),
(2, 4, 'Demo1', 'p4Tulips.jpg'),
(2, 5, 'Demo6', 'p8Jellyfish.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `detail` varchar(900) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `detail`) VALUES
(1, 'blood donate', 'give blood give bloodgive blood'),
(3, 'Blood camp', 'Lets arrange a blood donation camp within this month');

-- --------------------------------------------------------

--
-- Table structure for table `requestes`
--

DROP TABLE IF EXISTS `requestes`;
CREATE TABLE IF NOT EXISTS `requestes` (
  `req_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bgroup` varchar(100) NOT NULL,
  `reqdate` datetime NOT NULL,
  `detail` varchar(500) NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  PRIMARY KEY (`req_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestes`
--

INSERT INTO `requestes` (`req_id`, `name`, `gender`, `age`, `mobile`, `email`, `bgroup`, `reqdate`, `detail`, `hospital_name`) VALUES
(12, 'Sanjida', 'female', '23', '01959905900', 'sanjida@gmail.com', 'o+', '2020-01-01 00:00:00', 'Bed-8, Ward-3, Level-4', 'Dhaka Hospital'),
(13, 'Hira', 'male', '23', '01959904901', 'hira@gmail.com', 'o-', '2020-01-01 00:00:00', '', 'Chittagong Hospital'),
(14, 'Fatema khatun', 'female', '23', '01959904902', 'fatema@gmail.com', 'AB+', '2022-01-01 00:00:00', '', 'Dhaka Shishu Hospital'),
(15, 'Mohammad Ali', 'male', '23', '01959904903', 'pappu@gmail.com', 'AB-', '2040-01-01 00:00:00', 'Bed-8, Ward-3, Level-4', 'Dhaka Hospital'),
(17, 'Walid Bin Sayed', 'male', '23', '019599049999', 'ridoy@gmail.com', 'o+', '2095-01-01 00:00:00', 'Bed-8, Ward-3, Level-4', 'Jessore Hospital'),
(18, 'Nissan', 'male', '20', '01959904913', 'nissan@gmail.com', 'A-', '2040-01-01 00:00:00', 'Bed-8, Ward-3, Level-4', 'Dhaka Shishu Hospital'),
(19, 'Faisal', 'male', '25', '01959904914', 'faisal@gmail.com', 'B+', '2019-11-01 00:00:00', 'Bed-8, Ward-3, Level-4', 'Dhaka Hospital'),
(20, 'Woishi Hoque', 'female', '24', '01959904915', 'woishi@gmail.com', 'B-', '2020-05-14 00:00:00', 'Bed-8, Ward-3, Level-4', 'Barisal cty Hospital'),
(21, 'Sakib Khan', 'male', '28', '01959904917', 'sakib@gmail.com', 'o-', '2035-01-01 00:00:00', 'Bed-8, Ward-3, Level-4', 'Lab Aid'),
(22, 'Farhana afaz Sobi', 'female', '24', '01959904919', 'sobi@gmail.com', 'B+', '2019-07-07 00:00:00', 'Bed-8, Ward-3, Level-4', 'Rupnogor Hospital'),
(23, 'Anwar Khan', 'male', '22', '01959904920', 'anwar@gmail.com', 'A+', '2019-11-01 00:00:00', 'Bed-8, Ward-3, Level-4', 'Barisal cty Hospital'),
(24, 'Md. Monir Hossain', 'male', '24', '01959904925', 'monir@gmail.com', 'B+', '2019-11-01 00:00:00', 'Bed-8, Ward-3, Level-4', 'Chittagong Hospital'),
(25, 'Humayara Kabir Anamika', 'female', '23', '01959904940', 'anamika@gmail.com', 'AB+', '2085-01-01 00:00:00', 'Bed-8, Ward-3, Level-4', 'Barisal city Hospital'),
(26, 'Fargana Ferdous Ripa', 'female', '23', '01959904941', 'ripa@gmail.com', 'A+', '3017-01-01 00:00:00', 'Bed-8, Ward-3, Level-4', 'Jessore Hospital'),
(27, 'Md. Arafat Rahman Shojib', 'male', '24', '01959904943', 'arafatrahman@gmail.com', 'AB-', '2096-08-13 00:00:00', 'Bed no- 3, Ward no-5, Patient no- 6698, Level- 6, Building no- 1.', 'Bangobondhu Hospital Dhaka'),
(29, 'Nabonita Sharker', 'female', '24', '01959904931', 'nabonita@gmail.com', 'B+', '2019-08-01 00:00:00', 'Dami text', 'Dhaka Shishu Hospital'),
(30, 'Tuli', 'female', '23', '01959904977', 'tuli@gmail.com', 'o+', '2019-09-01 00:00:00', '', 'XYZ'),
(31, 'Rekha khatun', 'female', '23', '01959905256', 'rekha@gmail.com', 'B-', '2019-08-05 00:00:00', '', 'XYZZ'),
(32, 'kumar Shubham', 'male', '22', '09163235112', 'kumar.shubham541@gmail.com', 'o+', '2019-09-09 00:00:00', '', 'pappu medical '),
(33, 'pappa', 'male', '22', '449565', 'sss@fmail.com', 'o+', '2052-01-01 00:00:00', 'ddd', 'sssss');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE IF NOT EXISTS `state` (
  `state_id` int(100) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(100) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(1, 'Bihar'),
(2, 'orrisa'),
(3, 'punjab'),
(4, 'rajasthan'),
(9, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `typeofuser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `pwd`, `typeofuser`) VALUES
('manu', 'manu', 'Admin'),
('neeru', 'neeru', 'General'),
('admin', 'admin', 'Admin'),
('Monir', 'monir', 'General');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
