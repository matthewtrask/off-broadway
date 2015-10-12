# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.38-0ubuntu0.12.04.1)
# Database: scotchbox
# Generation Time: 2015-09-08 01:24:42 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table bjt_about
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bjt_about`;

CREATE TABLE `bjt_about` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `bjt_about` WRITE;
/*!40000 ALTER TABLE `bjt_about` DISABLE KEYS */;

INSERT INTO `bjt_about` (`id`, `content`)
VALUES
	(1,'Randi Jean Robertson, originally from Tampa, Fla., was in search of a way to keep her “fresh off the beach” look after moving to the Atlanta area in 2007. She researched several different ways to achieve and maintain that perfect tan but it always seemed to come at a cost; whether it be exposing her skin to harmful UV rays or sacrificing even tone and color in a booth.  Eventually, a friend introduced her to the technique and beauty of airbrush tanning. Since then she has tried many different solutions, products and techniques, mastering the art of airbrush tanning.\n<br /><br />\n“The technique and art of the craft seemed to come naturally to me and over the past 3 years, I’ve developed a keen eye and several different techniques from shading different areas of the body to contouring, and making sure that even tricky areas such as the hands and feet look perfect. Attention to detail is a must for me when it comes to airbrushing the perfect tan.”\n<br /><br />\n“It is important to me to not only use a solution that makes you look the best, but also one that keeps your health in mind.” The quality of solutions and products used at Billyjean Tan are also what sets our tans above the rest. Not only do we use solutions that are fast-drying (no sticky feeling after applied), fade evenly, natural-looking and long lasting, but we use organic solutions that are doctor formulated, using the highest quality, premium grade DHA (dihydroxyacetone) and natural ingredients. They are free of harsh dyes and chemicals, oil, alcohol and allergens. They are also vegan and never tested on animals.\n<br /><br />\n\"After perfecting my technique, finding the best product and countless requests from people wanting me to tan them, I decided to start my own mobile airbrush business. All I needed was a name for it. Combining my father’s first name, Billy, who was also an entrepreneur, with my middle name, Jean, Billyjean Tan was born.\"'),
	(2,NULL);

/*!40000 ALTER TABLE `bjt_about` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table bjt_appointments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bjt_appointments`;

CREATE TABLE `bjt_appointments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT '',
  `appt_time` varchar(30) DEFAULT NULL,
  `appt_date` varchar(30) DEFAULT NULL,
  `appt_notes` varchar(200) DEFAULT NULL,
  `amt_ppl` int(11) DEFAULT NULL,
  `outlets` varchar(11) DEFAULT NULL,
  `confirm` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table bjt_contact
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bjt_contact`;

CREATE TABLE `bjt_contact` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table bjt_meaning
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bjt_meaning`;

CREATE TABLE `bjt_meaning` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `meaning` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `bjt_meaning` WRITE;
/*!40000 ALTER TABLE `bjt_meaning` DISABLE KEYS */;

INSERT INTO `bjt_meaning` (`id`, `meaning`)
VALUES
	(1,'Peace of mind'),
	(2,'Greater confidence'),
	(3,'Smoother skin'),
	(4,'Feel comfortable'),
	(5,'Satisfaction'),
	(6,'Consistency'),
	(7,'No more guessing'),
	(8,'Bragging rights!');

/*!40000 ALTER TABLE `bjt_meaning` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table bjt_members
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bjt_members`;

CREATE TABLE `bjt_members` (
  `memberID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `addedDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`memberID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `bjt_members` WRITE;
/*!40000 ALTER TABLE `bjt_members` DISABLE KEYS */;

INSERT INTO `bjt_members` (`memberID`, `username`, `password`, `email`, `addedDate`)
VALUES
	(1,'Demo','$2y$12$UwWuRhQtfROz4/mzbfgY.Oas5tReZrQK187iVEA77LMkW/9HIhMsS','demo@demo.com','2014-12-08 19:07:19'),
	(2,'randi','$2y$12$GskYjuxuCDsoJu/G08t4X.LvTZ/L11u.oW7dJ4WWsf2vllS/7DTvW','billyjeantan@gmail.com','2015-09-08 01:10:37');

/*!40000 ALTER TABLE `bjt_members` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table bjt_post_cats
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bjt_post_cats`;

CREATE TABLE `bjt_post_cats` (
  `catID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `catTitle` varchar(255) DEFAULT NULL,
  `catSlug` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`catID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `bjt_post_cats` WRITE;
/*!40000 ALTER TABLE `bjt_post_cats` DISABLE KEYS */;

INSERT INTO `bjt_post_cats` (`catID`, `catTitle`, `catSlug`)
VALUES
	(1,'General','general'),
	(2,'Demo','demo');

/*!40000 ALTER TABLE `bjt_post_cats` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table bjt_postcare
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bjt_postcare`;

CREATE TABLE `bjt_postcare` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `care_desc` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `bjt_postcare` WRITE;
/*!40000 ALTER TABLE `bjt_postcare` DISABLE KEYS */;

INSERT INTO `bjt_postcare` (`id`, `care_desc`)
VALUES
	(1,'Wait a minimum of 8 hours after your tan has been applied before showering, allowing time for your color to develop. Avoid fragrance body washes as well as heavy lathering for first shower. A rinse will do.'),
	(2,'After showering, pat yourself dry and moisturize well with a lightweight, fragrance free moisturizer. (Cetaphil, Cerave and Aveeno all work great)'),
	(3,'Touch Up Mist – perfect for touching up any area on the body that may have faded sooner that the rest.<br /><br /> Touch Up Mist is a great product to use on any area that might be fading or to add a glow to your skin between tanning sessions. Ask your tanning consultant if interested.');

/*!40000 ALTER TABLE `bjt_postcare` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table bjt_posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bjt_posts`;

CREATE TABLE `bjt_posts` (
  `postID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `postTitle` varchar(255) DEFAULT NULL,
  `postSlug` varchar(255) DEFAULT NULL,
  `postDesc` text,
  `postCont` text,
  `postImg` varchar(255) DEFAULT NULL,
  `postDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `catID` int(11) DEFAULT NULL,
  PRIMARY KEY (`postID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `bjt_posts` WRITE;
/*!40000 ALTER TABLE `bjt_posts` DISABLE KEYS */;

INSERT INTO `bjt_posts` (`postID`, `postTitle`, `postSlug`, `postDesc`, `postCont`, `postImg`, `postDate`, `catID`)
VALUES
	(1,'Temp post','temp-post','My desc','My content','images/facebook.jpg','2014-12-09 19:32:44',1),
	(5,'Another Sample Post','another-sample-post','is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\nis simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\nis simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\nis simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/facebooksmall.jpg','2014-12-10 19:32:19',1),
	(6,'Latest News','latest-news','is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap','is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\nis simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\nis simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','images/news2.jpg','2014-12-10 19:33:05',1);

/*!40000 ALTER TABLE `bjt_posts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table bjt_precare
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bjt_precare`;

CREATE TABLE `bjt_precare` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `care_desc` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `bjt_precare` WRITE;
/*!40000 ALTER TABLE `bjt_precare` DISABLE KEYS */;

INSERT INTO `bjt_precare` (`id`, `care_desc`)
VALUES
	(1,'Shave 8 hours prior to tanning. Waxing, pedicures, manicures, facials and other spa treatments should be done at least 24 hours prior to tanning appointment. '),
	(2,'Moisturize your skin well the day before and/or morning of your appointment.'),
	(3,'Exfoliate skin and remove all lotions, oils, perfumes, etc. before tanning. Fresh bare skin will result in the best tan.');

/*!40000 ALTER TABLE `bjt_precare` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table bjt_reasons
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bjt_reasons`;

CREATE TABLE `bjt_reasons` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `reason` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `bjt_reasons` WRITE;
/*!40000 ALTER TABLE `bjt_reasons` DISABLE KEYS */;

INSERT INTO `bjt_reasons` (`id`, `reason`)
VALUES
	(1,'Doctor formulated'),
	(2,'Natural-looking and long lasting'),
	(3,'Even fading'),
	(4,'Oil-free'),
	(5,'Fragrance-free'),
	(6,'Alcohol-free. (won’t dry out your skin)'),
	(7,'Erythrulose-free'),
	(8,'Only made with FDA approved Ingredients'),
	(9,'All natural'),
	(10,'Composed of the highest quality, premium grade DHA'),
	(11,'Water-based'),
	(12,'Fast-drying'),
	(13,'Vegan'),
	(14,'Not tested on Animals'),
	(15,'Free of harsh dyes and chemicals'),
	(16,'Nut-free and allergen-free'),
	(17,'Non-comedogenic (doesn’t cause breakouts)'),
	(18,'Hypoallergenic'),
	(19,'Formulated with long term health in mind');

/*!40000 ALTER TABLE `bjt_reasons` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table bjt_reviews
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bjt_reviews`;

CREATE TABLE `bjt_reviews` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `review` text,
  `author` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `bjt_reviews` WRITE;
/*!40000 ALTER TABLE `bjt_reviews` DISABLE KEYS */;

INSERT INTO `bjt_reviews` (`id`, `review`, `author`)
VALUES
	(1,'Best spray tan in the business! Randi with BillyJean Tan has been doing my spray tans for more than two years and I have been very happy with the results every time! Punctual, professional and a perfect tan every time!','Deidra Smith'),
	(2,'I\'ve been a client of Randi\'s for over 2 years and continue to be thrilled with the results.  I\'ve tried a few other places in a pinch over the years and none were able to compare with the quality of Randi\'s tans.  After a brief consultation on your objective and skin coloring, she is able to adjust the color for the most natural looking tan possible.  So natural, that only my close friends even know the secret behind my tan....most think this is my natural skin color!  Unlike others, she uses two different airbrush guns to achieve the perfect delivery on your face and body.  The solution dries quickly with minimal odor and Randi is great at instructing you on how to keep your tan for as long as possible.  Her professional demeanor, winning personality, and attention to detail are a few of the many reasons I keep going back.','Lee Z'),
	(3,'Randi has been tanning me for over 2 years now. She is one of the most professional and reliable people I know. But more importantly, her tans are by far the best tans in Atlanta. Her all natural/organic solution, which can be used on all skin and an array of skin tones, are perfect for anyone looking for some light color or to become a bronze Goddess! If you want the best tan in Atlanta, call Randi @ BillyJean Tan! I have been in the modeling industry for over a decade in magazines, commercials or on the Runway for Belk, Macy’s, Lilly Pulitzer, Nascar, Coca-Cola….to name a few. And I know that a tan always makes the body look better on camera. I have been on countless shoots where Randi and her tan has saved the day!','Emily Cate'),
	(4,'I always use Billy Jean Tan before any special occasion.  I can be confident that I will have a professional and positive experience.  Not only do I feel great afterwards, I look even better!  I couldn\'t imagine trusting any other company!','Laura Waide Bingham '),
	(5,'Randi is so sweet and professional and she always delivers an amazing tan. She’s been tanning myself and my daughters for years now and the color always looks beautiful and natural. We trust and use BillyJean Tan for all of our special events and dances.','Theresa Citarella');

/*!40000 ALTER TABLE `bjt_reviews` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table bjt_reviews_pending
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bjt_reviews_pending`;

CREATE TABLE `bjt_reviews_pending` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `review` text,
  `author` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table bjt_services
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bjt_services`;

CREATE TABLE `bjt_services` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `service` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `bjt_services` WRITE;
/*!40000 ALTER TABLE `bjt_services` DISABLE KEYS */;

INSERT INTO `bjt_services` (`id`, `service`, `price`, `description`)
VALUES
	(1,'Full Body Tan','$65','A full body, custom, organic airbrush tan.'),
	(2,'3 Full Body Tans','$177','$59 per tan. You save 10% per tan. Expire after 6 months.'),
	(3,'5 Full Body Tans','$270','$54 per tan. You save 17% per tan. Expire after 6 months.'),
	(4,'9 Full Body Tans','$441','$49 per tan. You save 25% per tan. Expire after 9 months.'),
	(5,'Partial Body Tan','$45','Includes Torso and above, Waist and below OR Arms, chest and legs. Facial tan included if desired.'),
	(6,'Deluxe Tan','$85','Fitness Competitions, Pageants, Cheerleading, Dancing and many more!');

/*!40000 ALTER TABLE `bjt_services` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
