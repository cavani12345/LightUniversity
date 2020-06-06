-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2019 at 08:26 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `light`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE IF NOT EXISTS `admin_tb` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_firstname` varchar(45) NOT NULL,
  `admin_lastname` varchar(45) NOT NULL,
  `admin_username` varchar(45) NOT NULL,
  `admin_password` varchar(45) NOT NULL,
  `admin_gender` varchar(10) NOT NULL,
  `admin_phone` varchar(20) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`admin_id`, `admin_firstname`, `admin_lastname`, `admin_username`, `admin_password`, `admin_gender`, `admin_phone`) VALUES
(1, 'NGIZWENAYO', 'Edison', 'edi', 'eddy', 'Male', '0785279543');

-- --------------------------------------------------------

--
-- Table structure for table `course_tb`
--

CREATE TABLE IF NOT EXISTS `course_tb` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(45) NOT NULL,
  `course_abbre` varchar(45) NOT NULL,
  `course_code` varchar(12) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  PRIMARY KEY (`course_id`),
  KEY `course_faculty` (`faculty_id`),
  KEY `course_admin` (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `course_tb`
--

INSERT INTO `course_tb` (`course_id`, `course_name`, `course_abbre`, `course_code`, `faculty_id`, `admin_id`) VALUES
(1, 'Software Engineering', 'SE', 'SE', 1, 1),
(2, 'Computer Graphics', 'CG', 'CG1', 1, 1),
(3, 'Computer Architecture', 'CA', 'CA3', 2, 1),
(4, 'Web Development', 'WD', 'WD4', 2, 1),
(5, 'Research Methodology', 'RM', 'RM5', 1, 1),
(6, 'C++', 'CP', 'CP6', 4, 1),
(7, 'Computer Hardware', 'CHW', 'CHW7', 6, 1),
(8, 'Mathematics II', 'MATH', 'MATH8', 4, 1),
(9, 'CISCO', 'CO', 'CO9', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `district_tb`
--

CREATE TABLE IF NOT EXISTS `district_tb` (
  `district_id` int(11) NOT NULL AUTO_INCREMENT,
  `district_name` varchar(45) NOT NULL,
  PRIMARY KEY (`district_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `district_tb`
--

INSERT INTO `district_tb` (`district_id`, `district_name`) VALUES
(1, 'Rusizi'),
(2, 'Nyamagabe'),
(3, 'Gasabo');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `faculty_id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_code` varchar(10) NOT NULL,
  `faculty_name` varchar(30) NOT NULL,
  PRIMARY KEY (`faculty_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_code`, `faculty_name`) VALUES
(1, 'CSC', 'Computer Science'),
(2, 'IT', 'Information Technology'),
(6, 'IS', 'Information System'),
(4, 'CE', 'Computer Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `message_tb`
--

CREATE TABLE IF NOT EXISTS `message_tb` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `contents` varchar(300) NOT NULL,
  `send_date` date NOT NULL,
  `sender_email` varchar(100) NOT NULL,
  `admin_id` int(11) NOT NULL,
  PRIMARY KEY (`message_id`),
  KEY `admin_message_fk` (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `message_tb`
--


-- --------------------------------------------------------

--
-- Table structure for table `student_tb`
--

CREATE TABLE IF NOT EXISTS `student_tb` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_firstname` varchar(45) NOT NULL,
  `student_lastname` varchar(45) NOT NULL,
  `student_email` varchar(60) NOT NULL,
  `student_dob` date NOT NULL,
  `student_nid` varchar(20) NOT NULL,
  `Level` varchar(20) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  PRIMARY KEY (`student_id`),
  KEY `student_faculty` (`faculty_id`),
  KEY `student_district` (`district_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=217122759 ;

--
-- Dumping data for table `student_tb`
--

INSERT INTO `student_tb` (`student_id`, `student_firstname`, `student_lastname`, `student_email`, `student_dob`, `student_nid`, `Level`, `faculty_id`, `district_id`) VALUES
(217122740, 'MUTUYUWERA', 'Rebecca', 'gdsgdg@hdsshdsj.b', '2019-01-15', '1996700263638382', 'Level 4', 2, 2),
(217122741, 'NDAYISHIMIYE', 'Honore Peter Joy', 'ndayishimiyehonore777@gmail.com', '2019-01-09', '1199680066647123', 'Level 1', 1, 1),
(217122742, 'NISHIMIRWE', 'Jean Paul', 'nishimirwepaul2015@gmail.com', '2019-01-04', '1199780117063139', 'Level 3', 2, 2),
(217122752, 'NKUNZURWANDA', 'Germain', 'n@g', '2013-10-02', '1222342435354645', 'Level3', 1, 2),
(217122753, 'NSANZIMANA', 'Emmanuel', 'dsd@g.n', '2019-02-05', '1883483440350593', 'Level5', 2, 1),
(217122754, 'NGIZWENAYO', 'Edison', 'edison@gmail.com', '2089-12-31', '1992543472382383', 'Level 2', 4, 1),
(217122755, 'NIYIGENA', 'Eugene', 'wqw@h.gvg', '2013-01-04', '1199564647482398', 'Level 1', 6, 3),
(217122756, 'MUGISHA', 'Emmy', 'mug@gmail.com', '2019-02-06', '1199564647482399', 'Level 1', 6, 3),
(217122757, 'NISHIMWE ', 'Honorine', 'nishhonorine@gmail.com', '2016-01-02', '1222342435354647', 'Level 2', 4, 1),
(217122758, 'Guillome', 'ISHIMWE', 'Guillome@gmail.com', '2010-12-03', '1224554567546344', 'Level 1', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `ussed`
--

CREATE TABLE IF NOT EXISTS `ussed` (
  `User_id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Comment` varchar(300) NOT NULL,
  PRIMARY KEY (`User_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ussed`
--

INSERT INTO `ussed` (`User_id`, `FirstName`, `LastName`, `Country`, `Comment`) VALUES
(1, 'Nishimirwe', 'paul', 'Kenya', 'Turabishimiye'),
(2, 'maniraho', 'claude', 'Uganda', 'muraho'),
(3, 'Ndayishimiye', 'Espoire', 'RDC', 'Habali za usiku'),
(4, 'Damour', 'Mbarushimana', 'Tanzania', 'Nasema nawapenda sana'),
(5, 'Honnette', 'Nishimwe', 'Rwanda', 'Turabakunda cyane'),
(6, 'Kigori', 'Arnold', 'RDC', 'Habari , niko hapa congo Tunawapenda sana');
