-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2020 at 06:48 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dona_resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
`id_education` int(11) NOT NULL,
  `University` text,
  `Highschool` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id_education`, `University`, `Highschool`) VALUES
(1, 'Major System Information, University Mercubuana Jakarta barat', 'Major IPA, SMAN 17 Jakarta barat');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE IF NOT EXISTS `experience` (
`id_experience` int(11) NOT NULL,
  `Company` varchar(50) DEFAULT NULL,
  `Dates` text,
  `Position` varchar(50) DEFAULT NULL,
  `Jobdesk` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id_experience`, `Company`, `Dates`, `Position`, `Jobdesk`) VALUES
(1, 'PT Google Inc.', 'January 2019 - Present', 'IT Programmer', 'Heading whole front end work. Managing team and Client with following Agile Development Methodology. Taking care of Complete Front End and Back end integration with REST services.'),
(2, 'PT JExpo', 'February 2017 - December 2018', 'Web Developer', 'Admininstration of Windows. Webmaster of Webhosting, Programming, UI development, Interview and Hiring. Marketing, Client Meeting.');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
`id_profile` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `call` varchar(25) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `web` varchar(100) NOT NULL,
  `home` text NOT NULL,
  `describe_yourself` text NOT NULL,
  `twitter` text NOT NULL,
  `facebook` text NOT NULL,
  `instagram` text NOT NULL,
  `linkedin` text NOT NULL,
  `hobbies` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id_profile`, `nama_lengkap`, `call`, `mail`, `web`, `home`, `describe_yourself`, `twitter`, `facebook`, `instagram`, `linkedin`, `hobbies`) VALUES
(1, 'Aji Firman', '08111111', 'ajifirman111@ymail.com', 'ajifirmansyahputra11.net', 'Jakarta, IND. 111', 'I love devloping Web and Mobile apps and Organising Social Activites for Nation', '@dona_resume111', 'dona_mercubuana111', '@Dona-cute111', 'dona-cute@ymail.com111', 'Organising Social activities, Health awareness, Free Yoga Sessions and Camp.\r\n\r\nFree Motivational seminars and Coding for something new');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE IF NOT EXISTS `skill` (
`id_skill` int(11) NOT NULL,
  `name_skill` varchar(100) DEFAULT NULL,
  `range_skill` varchar(25) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id_skill`, `name_skill`, `range_skill`) VALUES
(1, 'HTML / HTML5', '90'),
(2, 'Photoshop', '85'),
(3, 'PHP Framework CI', '90'),
(4, 'Jquery', '80'),
(5, 'Javascript', '75'),
(6, 'Ms. Office', '85'),
(7, 'Typing', '88'),
(8, 'Public Speaking', '80'),
(9, 'Administration', '75'),
(10, 'English', '10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `username`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'Dona', 'dona', 'dona@gmail.com', 'dona123', 0, '2020-11-26 15:06:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
 ADD PRIMARY KEY (`id_education`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
 ADD PRIMARY KEY (`id_experience`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
 ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
 ADD PRIMARY KEY (`id_skill`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
MODIFY `id_education` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
MODIFY `id_experience` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
MODIFY `id_skill` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
