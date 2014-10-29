-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2014 at 04:36 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ppshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(30) NOT NULL,
  `password` char(32) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '328b37116fe640bb10af6cf14f26f5ff');

-- --------------------------------------------------------

--
-- Table structure for table `featured`
--

CREATE TABLE IF NOT EXISTS `featured` (
  `sequence` int(11) NOT NULL,
  `id_pp` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featured`
--

INSERT INTO `featured` (`sequence`, `id_pp`) VALUES
(1, '1'),
(2, '2');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `text`) VALUES
(1, 'About', '<p>Lois superhero fuuuuuuuuuuccckkkkkk charlie sheen laptop phone for homer. Panda scared troll fap ba dumm tss finals cereal guy nerd hulk. Sit win morbi party sexy time scumbag varius elephant sandwich. Dad resident evil face admire t-rex happy feel like a sir that. Dog angry birds 140% yao captain gtfo just haters gonna hate vegan bear. Gag ipsum really? Motherfucker donut fap fap fap facebook i''m watching u super rage all the things anonymous easter. Bart avengers happy too mainstream genius clinton in poker face bacon nyan cat amnesia food. Sister diablo 3 cookie monster problem? Le derp peter griffin no computer i know that feel dummies men good guy star wars. Brother bottom german meme close enough wodka asians luke i lied le friend. Hammer lose a russia woman strangers y u no.</p>\r\n	  				<p>\r\n					Happy pizza donut yao crying okay mom hitler motherfucker tank. 140% male clinton avengers luke gtfo facebook peter griffin freddie mercury sexy time. Final week charlie sheen drunk right varius unlock read jackie chan always resident evil. Scared venenatis le girlfriend puking rainbows true story elephant oh god why not bad pokeman. Rebecca Black blizzard amnesia high school sit on keyboard friendzoned architect. Bear sex oh stop it, you in cat mother geek humor dummies gentlemen. Sister y u no mother of god now kiss note in class monocle viverra good guy phone. A monday you don''t say? Genius dead space asians lol 9000 trolololo for iron man woman in the kitchen feel like a sir. Loki rainbow lose facepalm avenger cuteness overload morbi ba dumm tss. Admire german eat i see what you did there not okay.\r\n					</p>'),
(2, 'Contact', '<p>Lois superhero fuuuuuuuuuuccckkkkkk charlie sheen laptop phone for homer. Panda scared troll fap ba dumm tss finals cereal guy nerd hulk. Sit win morbi party sexy time scumbag varius elephant sandwich. Dad resident evil face admire t-rex happy feel like a sir that. Dog angry birds 140% yao captain gtfo just haters gonna hate vegan bear. Gag ipsum really? Motherfucker donut fap fap fap facebook i&#39;m watching u super rage all the things anonymous easter. Bart avengers happy too mainstream genius clinton in poker face bacon nyan cat amnesia food. Sister diablo 3 cookie monster problem? Le derp peter griffin no computer i know that feel dummies men good guy star wars. Brother bottom german meme close enough wodka asians luke i lied le friend. Hammer lose a russia woman strangers y u no.</p>\r\n\r\n<p>Lois superhero fuuuuuuuuuuccckkkkkk charlie sheen laptop phone for homer. Panda scared troll fap ba dumm tss finals cereal guy nerd hulk. Sit win morbi party sexy time scumbag varius elephant sandwich. Dad resident evil face admire t-rex happy feel like a sir that. Dog angry birds 140% yao captain gtfo just haters gonna hate vegan bear. Gag ipsum really? Motherfucker donut fap fap fap facebook i&#39;m watching u super rage all the things anonymous easter. Bart avengers happy too mainstream genius clinton in poker face bacon nyan cat amnesia food. Sister diablo 3 cookie monster problem? Le derp peter griffin no computer i know that feel dummies men good guy star wars. Brother bottom german meme close enough wodka asians luke i lied le friend. Hammer lose a russia woman strangers y u no.</p>\r\n\r\n<p>SMS/Telpon: 0812345678910</p>\r\n\r\n<p>Email:&nbsp;<a href="mailto:test@test.com">test@test.com</a></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pp`
--

CREATE TABLE IF NOT EXISTS `pp` (
  `id` varchar(150) NOT NULL,
  `group` varchar(6) NOT NULL,
  `name` varchar(40) NOT NULL,
  `team` varchar(10) NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `detailtype` text NOT NULL,
  `set` tinyint(1) NOT NULL,
  `stock` tinyint(1) NOT NULL,
  `externalurl` text,
  `timestamp` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pp`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
