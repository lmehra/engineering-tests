-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 20, 2014 at 02:57 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `offers`
--

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE IF NOT EXISTS `guests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` bigint(11) NOT NULL,
  `offer_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`id`, `name`, `phone_number`, `offer_id`) VALUES
(1, 'test', 1234567891, 1),
(15, 'lucky', 1234567890, 7);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_11_19_053249_create_restaurant_table', 1),
('2014_11_19_073930_create_guests_table', 2),
('2014_11_19_090359_create_offers_table', 3),
('2014_11_19_095843_add_column_offer_to_guest_table', 4),
('2014_11_20_072255_change_offer_time_filed', 5);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `restaurant_id` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float(8,2) NOT NULL,
  `min_guest` int(11) NOT NULL,
  `max_guest` int(11) NOT NULL,
  `days_avail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `expire_on` datetime DEFAULT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `restaurant_id`, `description`, `price`, `min_guest`, `max_guest`, `days_avail`, `active`, `expire_on`, `start_time`, `end_time`) VALUES
(1, 4, 'est', 100.00, 4, 7, '["Sun","Tue","Wed","Fri","Sat"]', 1, '2014-11-21 00:00:00', '14:00:00', '22:00:00'),
(2, 6, 'vel', 36.87, 5, 4, '["Mon","Tue","Wed","Thu","Fri"]', 1, NULL, '00:00:00', '00:00:00'),
(3, 3, 'praesentium', 1000.00, 7, 8, '["Sun","Tue","Thu","Fri","Sat"]', 1, NULL, '00:00:00', '00:00:00'),
(4, 6, 'ut', 100.00, 3, 3, '["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]', 1, NULL, '00:00:00', '00:00:00'),
(5, 7, 'aspernatur', 100.00, 9, 3, '["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]', 1, NULL, '00:00:00', '00:00:00'),
(6, 3, 'excepturi', 258.00, 5, 7, '["Sun","Mon","Wed","Thu","Sat"]', 1, NULL, '00:00:00', '00:00:00'),
(7, 9, 'est', 156.00, 5, 5, '["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]', 1, NULL, '00:00:00', '00:00:00'),
(8, 3, 'saepe', 80.00, 5, 1, '["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]', 1, NULL, '00:00:00', '00:00:00'),
(9, 9, 'ut', 709.76, 1, 6, '["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]', 1, NULL, '00:00:00', '00:00:00'),
(10, 4, 'et', 50.15, 2, 3, '["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]', 1, NULL, '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE IF NOT EXISTS `restaurant` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `name`, `address`, `city`, `state`, `country`) VALUES
(3, 'Barbeque Nation', 'Sec 26', 'Chandigarh', 'Punjab', 'India'),
(4, 'Girl In The Cafe', 'Sec 17', 'Chandigarh', 'Punjab', 'India'),
(5, 'The Night Factory', 'Industrial area', 'Chandigarh', 'Punjab', 'India'),
(6, 'Burger & Lobster', '40 St Johns Street, Smithfield', 'Farringdon', 'London', 'U.K'),
(7, 'OXO Tower Restaurant', 'OXO Tower Wharf, Barge House Street, South Bank', 'London', 'London', 'U.K'),
(8, 'Hauz Khas Social ', '9A & 12, Hauz Khas Village', 'New Delhi', 'New Delhi', 'India'),
(9, 'Lodi - The Garden Restaurant ', 'Opposite Mausam Bhawan, Near Gate 1, Lodhi Road', 'New Delhi', 'New Delhi', 'India');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
