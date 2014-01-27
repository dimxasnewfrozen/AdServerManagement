-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.24-log


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema ads
--

CREATE DATABASE IF NOT EXISTS ads;
USE ads;

--
-- Definition of table `ad_groups`
--

DROP TABLE IF EXISTS `ad_groups`;
CREATE TABLE `ad_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `guid` varchar(15) NOT NULL,
  `group_name` varchar(45) DEFAULT NULL,
  `width` int(6) unsigned NOT NULL,
  `height` int(6) unsigned NOT NULL,
  `status` int(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad_groups`
--

/*!40000 ALTER TABLE `ad_groups` DISABLE KEYS */;
INSERT INTO `ad_groups` (`id`,`guid`,`group_name`,`width`,`height`,`status`) VALUES 
 (1,'6b3825881c0f630','Test',250,250,1),
 (2,'11b4076afd563b2','Sidebar',100,650,1),
 (3,'10976997a55826d','Header Ad',650,50,1);
/*!40000 ALTER TABLE `ad_groups` ENABLE KEYS */;


--
-- Definition of table `ads`
--

DROP TABLE IF EXISTS `ads`;
CREATE TABLE `ads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `c_id` int(10) unsigned NOT NULL,
  `g_id` int(10) unsigned NOT NULL,
  `link_src` varchar(105) NOT NULL,
  `image_src` varchar(105) NOT NULL,
  `impressions` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

/*!40000 ALTER TABLE `ads` DISABLE KEYS */;
INSERT INTO `ads` (`id`,`c_id`,`g_id`,`link_src`,`image_src`,`impressions`) VALUES 
 (1,1,1,'http://www.google.com','https://www.google.com/intl/en/adwords/select/images/samples/250x250.gif',133),
 (2,1,1,'http://www.google.com','http://www.freeportusa.com/wp-content/uploads/2012/08/250x250-ad.png',132),
 (3,1,1,'http://www.google.com','http://www.omni-ts.com/linux-desktop/images/free-the-penguins-250x250.gif',131),
 (4,1,1,'http://www.google.com','http://www.whatcanyoudocampaign.org/blog/wp-content/themes/CDE/WebAds/250x250Michael.jpg',117);
/*!40000 ALTER TABLE `ads` ENABLE KEYS */;


--
-- Definition of table `session`
--

DROP TABLE IF EXISTS `session`;
CREATE TABLE `session` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `session_id` varchar(100) NOT NULL,
  `cookie_id` varchar(100) NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

/*!40000 ALTER TABLE `session` DISABLE KEYS */;
INSERT INTO `session` (`id`,`uid`,`session_id`,`cookie_id`,`ip_address`,`date`) VALUES 
 (10,25,'pm1rf0n2ad4hrrho70860344n5','a8dac959e216d9084ba1afcf232eec98','127.0.0.1','2014-01-27 14:39:33');
/*!40000 ALTER TABLE `session` ENABLE KEYS */;


--
-- Definition of table `user_activations`
--

DROP TABLE IF EXISTS `user_activations`;
CREATE TABLE `user_activations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `code` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_activations`
--

/*!40000 ALTER TABLE `user_activations` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_activations` ENABLE KEYS */;


--
-- Definition of table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email_address` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `street_num` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_verified` datetime NOT NULL,
  `status` int(10) unsigned NOT NULL DEFAULT '0',
  `user_type` varchar(20) NOT NULL,
  `title` varchar(45) NOT NULL,
  `business_type` varchar(45) NOT NULL,
  `privilege` int(1) unsigned zerofill NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`,`first_name`,`last_name`,`email_address`,`password`,`street_num`,`address`,`city`,`state`,`date_created`,`date_verified`,`status`,`user_type`,`title`,`business_type`,`privilege`) VALUES 
 (25,'Ken','Day','dimxasnewfrozen@gmail.com','c3f943c2e6461a5ec4c8adbff87a015b','','420 Chestnut Street','Mechanicville','New York','2013-11-26 14:34:28','2013-11-26 14:34:28',1,'basic','','',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
