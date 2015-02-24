# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.38-0ubuntu0.12.04.1)
# Database: offbroadway
# Generation Time: 2015-02-24 01:17:41 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table tbl_ob_registration
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_ob_registration`;

CREATE TABLE `tbl_ob_registration` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parentFirstName` varchar(255) DEFAULT NULL COMMENT 'Parent''s first name',
  `parentLastName` varchar(255) DEFAULT NULL COMMENT 'Parent''s last name',
  `studentFirstName` varchar(255) DEFAULT NULL COMMENT 'Student''s first name',
  `studentLastName` varchar(255) DEFAULT NULL COMMENT 'Student''s last name',
  `parentPhone` varchar(255) DEFAULT NULL COMMENT 'Parent''s phone number',
  `parentEmail` varchar(255) DEFAULT NULL COMMENT 'Parent''s email address',
  `Street1` varchar(255) DEFAULT NULL COMMENT 'Street Address',
  `Street2` varchar(255) DEFAULT NULL COMMENT 'Street Address 2',
  `City` varchar(255) DEFAULT NULL COMMENT 'City Name',
  `State` varchar(255) DEFAULT NULL COMMENT 'State',
  `ZipCode` varchar(255) DEFAULT NULL COMMENT 'Zip Code',
  `studentNotes` text COMMENT 'Notes about student',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
