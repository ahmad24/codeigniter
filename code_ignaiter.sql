-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2013 at 03:45 PM
-- Server version: 5.0.37-community-nt
-- PHP Version: 5.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `code_ignaiter`
--
CREATE DATABASE IF NOT EXISTS `code_ignaiter` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `code_ignaiter`;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`) VALUES
(1, 'My First News Title', 'My-First-News-Slug', 'My First News Body'),
(2, 'qwe', 'eeee', 'ert erter ert  gfg fggg gggg'),
(3, 'Hello World', 'hello-world', 'This my demo text'),
(4, 'Hello World', 'hello-world', 'This my demo text'),
(5, 'Knockoutjs.com - Contacts Editor', 'knockoutjscom-contacts-editor', 'Knockoutjs.com - Contacts EditorKnockoutjs.com - Contacts EditorKnockoutjs.com - Contacts Editor'),
(6, 'Knockoutjs.com - Contacts Editor', 'knockoutjscom-contacts-editor', 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww'),
(7, 'Knockoutjs.com - Contacts Editor', 'knockoutjscom-contacts-editor', '999999999999999999999'),
(8, 'Knockoutjs.com - Contacts Editor', 'knockoutjscom-contacts-editor', '999999999999999999999');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `slug` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `slug`) VALUES
(1, 'AngularJS Example', 'AngularJS Example', 'AngularJS Example');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
