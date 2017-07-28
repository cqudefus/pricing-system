-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.13-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for pricing_features
DROP DATABASE IF EXISTS `pricing_features`;
CREATE DATABASE IF NOT EXISTS `pricing_features` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pricing_features`;

-- Dumping structure for table pricing_features.features
DROP TABLE IF EXISTS `features`;
CREATE TABLE IF NOT EXISTS `features` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ref_cat_id` int(10) NOT NULL,
  `name` varchar(500) DEFAULT '',
  `description` varchar(1000) DEFAULT '',
  `notes` varchar(1000) DEFAULT '',
  `published_date` date DEFAULT NULL,
  `visible_to_clients` int(2) DEFAULT '1',
  `invisible_to_role` varchar(50) DEFAULT '',
  `icon_link` varchar(250) DEFAULT 'no_image.png',
  PRIMARY KEY (`id`),
  KEY `FK_features_feature_categories` (`ref_cat_id`),
  CONSTRAINT `FK_features_feature_categories` FOREIGN KEY (`ref_cat_id`) REFERENCES `feature_categories` (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table pricing_features.features: ~6 rows (approximately)
/*!40000 ALTER TABLE `features` DISABLE KEYS */;
INSERT INTO `features` (`id`, `ref_cat_id`, `name`, `description`, `notes`, `published_date`, `visible_to_clients`, `invisible_to_role`, `icon_link`) VALUES
	(1, 1, 'facebook', 'The Activity feed displays the most interesting, recent activity taking place on your site, using actions (such as likes) by your friends and other people.', '', NULL, 1, '', ''),
	(2, 1, 'twitter', 'Twitter for Websites is a suite of widgets bringing Twitter content into your webpage content and buttons to encourage your Twitter audience to share your content and subscribe to your Twitter account updates.', '', NULL, 1, '', ''),
	(7, 1, 'Instagram', '', '', NULL, 1, '', ''),
	(8, 1, 'Facebook backend', '', '', NULL, 1, '', 'no_image.png'),
	(9, 1, 'Ads', '', 'Budget dependent', NULL, 1, '', 'no_image.png'),
	(10, 1, 'online Store', '', '', NULL, 1, '', 'no_image.png');
/*!40000 ALTER TABLE `features` ENABLE KEYS */;

-- Dumping structure for table pricing_features.feature_categories
DROP TABLE IF EXISTS `feature_categories`;
CREATE TABLE IF NOT EXISTS `feature_categories` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(500) DEFAULT '',
  `cat_description` varchar(1000) DEFAULT '',
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table pricing_features.feature_categories: ~2 rows (approximately)
/*!40000 ALTER TABLE `feature_categories` DISABLE KEYS */;
INSERT INTO `feature_categories` (`cat_id`, `cat_name`, `cat_description`) VALUES
	(1, 'social media', 'Social Media Examiner helps millions of businesses discover how to best use social media marketing to connect with customers, drive traffic, and increase sales'),
	(2, 'web design', 'Website design, also referred to as web design is the skill of creating presentations of content (usually hypertext or hypermedia) that is delivered to an end-user through the World Wide Web, by way of a Web browser or other Web-enabled software like Internet television clients, microblogging clients and RSS readers.'),
	(3, 'web development', 'We are a strategic web design, website development and online marketing company that applies a results driven approach to everything we do from aesthetics');
/*!40000 ALTER TABLE `feature_categories` ENABLE KEYS */;

-- Dumping structure for table pricing_features.feature_options
DROP TABLE IF EXISTS `feature_options`;
CREATE TABLE IF NOT EXISTS `feature_options` (
  `op_id` int(10) NOT NULL AUTO_INCREMENT,
  `op_ref_feature` int(10) NOT NULL,
  `op_name` varchar(200) DEFAULT '',
  `op_description` varchar(200) DEFAULT '',
  `op_price_id` int(10) DEFAULT '1',
  `opt_icon_link` varchar(500) DEFAULT 'no_image.png',
  `op_visible` int(2) DEFAULT '1',
  PRIMARY KEY (`op_id`),
  KEY `FK_feature_options_features` (`op_ref_feature`),
  KEY `FK_feature_options_feature_prices` (`op_price_id`),
  CONSTRAINT `FK_feature_options_feature_prices` FOREIGN KEY (`op_price_id`) REFERENCES `feature_prices` (`price_id`),
  CONSTRAINT `FK_feature_options_features` FOREIGN KEY (`op_ref_feature`) REFERENCES `features` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table pricing_features.feature_options: ~9 rows (approximately)
/*!40000 ALTER TABLE `feature_options` DISABLE KEYS */;
INSERT INTO `feature_options` (`op_id`, `op_ref_feature`, `op_name`, `op_description`, `op_price_id`, `opt_icon_link`, `op_visible`) VALUES
	(1, 1, 'PLain Text', '', 3, 'no_image.png', 1),
	(2, 1, 'Creative PLain Text', '', 3, 'no_image.png', 1),
	(3, 1, 'PLain Text + Picture', '', 4, 'no_image.png', 1),
	(4, 1, 'PLain Text + Video', '', 4, 'no_image.png', 1),
	(5, 8, 'Analysis', '', 6, 'no_image.png', 1),
	(6, 8, 'Reporting', '', 6, 'no_image.png', 1),
	(7, 9, 'Facebook Ads', '', 4, 'no_image.png', 1),
	(8, 10, 'Facebook Store Setup ', '', 6, 'no_image.png', 1),
	(9, 10, 'Facebook Store Running ', '', 6, 'no_image.png', 1);
/*!40000 ALTER TABLE `feature_options` ENABLE KEYS */;

-- Dumping structure for table pricing_features.feature_prices
DROP TABLE IF EXISTS `feature_prices`;
CREATE TABLE IF NOT EXISTS `feature_prices` (
  `price_id` int(10) NOT NULL AUTO_INCREMENT,
  `price` double DEFAULT '0',
  `price_note` varchar(500) DEFAULT '',
  `price_description` varchar(1000) DEFAULT '',
  PRIMARY KEY (`price_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table pricing_features.feature_prices: ~6 rows (approximately)
/*!40000 ALTER TABLE `feature_prices` DISABLE KEYS */;
INSERT INTO `feature_prices` (`price_id`, `price`, `price_note`, `price_description`) VALUES
	(1, 0, 'default', ''),
	(2, 25, '', ''),
	(3, 15, '', ''),
	(4, 30, '', ''),
	(5, 35, '', ''),
	(6, 1500, '', ''),
	(7, 500, '', '');
/*!40000 ALTER TABLE `feature_prices` ENABLE KEYS */;

-- Dumping structure for table pricing_features.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(200) DEFAULT '',
  `user_lastname` varchar(200) DEFAULT '',
  `user_fullname` varchar(200) DEFAULT '',
  `user_ref_role` int(10) DEFAULT NULL,
  `user_cellphone` varchar(50) DEFAULT NULL,
  `user_email` varchar(500) DEFAULT '',
  `user_password` varchar(1000) DEFAULT '',
  PRIMARY KEY (`user_id`),
  KEY `FK_users_user_roles` (`user_ref_role`),
  CONSTRAINT `FK_users_user_roles` FOREIGN KEY (`user_ref_role`) REFERENCES `user_roles` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table pricing_features.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `user_name`, `user_lastname`, `user_fullname`, `user_ref_role`, `user_cellphone`, `user_email`, `user_password`) VALUES
	(1, 'berkaPhp', 'berkaPhp', 'berkaPhp-small php', 2, NULL, 'berkaPhp@gmail.com', '1234');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table pricing_features.user_roles
DROP TABLE IF EXISTS `user_roles`;
CREATE TABLE IF NOT EXISTS `user_roles` (
  `role_id` int(10) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(100) DEFAULT NULL,
  `role_description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table pricing_features.user_roles: ~3 rows (approximately)
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
INSERT INTO `user_roles` (`role_id`, `role_name`, `role_description`) VALUES
	(1, 'dev', 'developer'),
	(2, 'admin', 'administartor'),
	(3, 'user', 'user');
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
