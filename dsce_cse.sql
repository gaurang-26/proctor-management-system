-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 15, 2019 at 03:35 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dsce_cse`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `title`, `name`, `username`, `password`) VALUES
(1, 'Dr.', 'Admin', 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(5) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `usn` varchar(10) NOT NULL,
  `enrollid` varchar(10) NOT NULL,
   `procname` varchar(20) NOT NULL,
  `section` varchar(5) NOT NULL,
  `shift` varchar(5) NOT NULL,
  `admissiontype` varchar(15) NOT NULL,
  `currentsem` varchar(15) NOT NULL,
  `currentyear` varchar(10) NOT NULL,
  `admissiondate` date NOT NULL,
  `academicyear` varchar(15) NOT NULL,
  `rollno` varchar(5) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
 `religion` varchar(20) NOT NULL,
 `category` varchar(30) NOT NULL,
 `mothername` varchar(30) NOT NULL,
  `motherphone` varchar(10) NOT NULL,
  `fathername` varchar(30) NOT NULL,
  `fatherphone` varchar(10) NOT NULL,
  `sem1` varchar(5) NOT NULL,
  `sem2` varchar(5) NOT NULL,
  `sem3` varchar(5) NOT NULL,
  `sem4` varchar(5) NOT NULL,
  `sem5` varchar(5) NOT NULL,
  `sem6` varchar(5) NOT NULL,
  `sem7` varchar(5) NOT NULL,
  `sem8` varchar(5) NOT NULL,
  `cgpa` varchar(5) NOT NULL,
  `resadd` varchar(500) NOT NULL,
  `resdist` varchar(20) NOT NULL,
  `resstate` varchar(20) NOT NULL,
  `respin` varchar(6) NOT NULL,
  `localadd` varchar(500) NOT NULL,
  `localdist` varchar(20) NOT NULL,
  `localstate` varchar(20) NOT NULL,
  `localpin` varchar(6) NOT NULL,
    `hometype` varchar(20) NOT NULL,
   `extracurr1` varchar(30) ,
  `extracurr2` varchar(30) NOT NULL,
  `extracurr3` varchar(30) NOT NULL,
    `password` varchar(10) NOT NULL,
    `issues` varchar(50) NOT NULL,
  `subject1` varchar(8) NOT NULL,
  `subject2` varchar(8) NOT NULL,
  `subject3` varchar(8) NOT NULL,
  `subject4` varchar(8) NOT NULL,
  `subject5` varchar(8) NOT NULL,
  `subject6` varchar(8) NOT NULL,
    `proctorid` integer NOT NULL,
    PRIMARY KEY (`sid`,`proctorid`),
    foreign key(`proctorid`) REFERENCES teacher(`proctorid`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `idno` varchar(15) NOT NULL,
  `title` varchar(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=716 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tid`, `idno`, `title`, `name`, `username`, `password`) VALUES
(1, '123456', 'Ms.', 'teacher', 'teacher', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;




"insert into student(
title,
firstname,
middlename,
lastname,
usn,
enrollid,
procname,
section,
shift,
admissiontype,
currentsem,
currentyear,
admissiondate,
academicyear,
rollno,
dob,gender,
phone,
email,
religion,
category,
mothername,
motherphone,
fathername,
fatherphone,
sem1,sem2,sem3,sem4,sem5,sem6,sem7,sem8,cgpa,
resadd,
resdist,
resstate,
respin,
localadd,localdist,localstate,localpin,
extracurr1,extracurr2,extracurr3,
pgcet,gate,gre,gmat,toefl) values
('$ttl','$fnm','$mnm','$lnm','$usn','$enrl','$proc','$sec','$sft','$admtyp','$cursem','$curyr','$admdt','$acdyr','$rno','$db','$gen','$eml','$rel',
'$cat','$motnm','$motph','$fatnm','$fatph','$sem1','$sem2','$sem3','$sem4','$sem5','$sem6','$sem7','$sem8','$cgpa','$rsadd','$rsdst','$rsstt','$rspin','$lcladd','$lcldst','$lclstt','$lclpin','$extracurr1','$extracurr2','$extracurr3','$pgcet','$gate','$gre','$gmat','$toefl')";
