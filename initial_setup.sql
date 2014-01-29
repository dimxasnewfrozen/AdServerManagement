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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad_groups`
--

/*!40000 ALTER TABLE `ad_groups` DISABLE KEYS */;
INSERT INTO `ad_groups` (`id`,`guid`,`group_name`,`width`,`height`,`status`) VALUES 
 (7,'969a086e0717a9b','Small Header Ad',480,60,1),
 (8,'7504adad8bb9632','Boxeee',250,250,1);
/*!40000 ALTER TABLE `ad_groups` ENABLE KEYS */;


--
-- Definition of table `ads`
--

DROP TABLE IF EXISTS `ads`;
CREATE TABLE `ads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `c_id` int(10) unsigned NOT NULL,
  `g_id` int(50) unsigned NOT NULL,
  `link_src` varchar(105) NOT NULL,
  `image_src` varchar(105) NOT NULL,
  `impressions` int(10) unsigned NOT NULL,
  `start_date` datetime DEFAULT NULL,
  `status` int(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

/*!40000 ALTER TABLE `ads` DISABLE KEYS */;
INSERT INTO `ads` (`id`,`c_id`,`g_id`,`link_src`,`image_src`,`impressions`,`start_date`,`status`) VALUES 
 (16,3,7,'http://www.google.com','http://localhost/AdServerManagement/ads/9266507527217005059b3469e609eb6d75f676212516ea4d00badb26a60.jpg',1000,'2014-01-29 00:00:00',1),
 (17,4,8,'https://www.facebook.com/pages/Legends-Barbershop/152565278128781','http://localhost/AdServerManagement/ads/legendsfb5297cd8d2c015b82c5192ede782bc222b0db2284b0ec48e72c7f91ab',19000,'2014-01-29 00:00:00',0),
 (18,4,8,'https://www.facebook.com/pages/Legends-Barbershop/152565278128781','http://localhost/AdServerManagement/ads/legends5b1a959350336d09a8ed60de814057f47b86780a.png',20000,'2014-01-29 00:00:00',1);
/*!40000 ALTER TABLE `ads` ENABLE KEYS */;


--
-- Definition of table `clicks`
--

DROP TABLE IF EXISTS `clicks`;
CREATE TABLE `clicks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) DEFAULT NULL,
  `ip_address` varchar(25) DEFAULT NULL,
  `browser` varchar(145) DEFAULT NULL,
  `audit_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clicks`
--

/*!40000 ALTER TABLE `clicks` DISABLE KEYS */;
INSERT INTO `clicks` (`id`,`aid`,`ip_address`,`browser`,`audit_date`) VALUES 
 (15,16,'127.0.0.1',NULL,'2014-01-29 15:14:46'),
 (16,18,'127.0.0.1',NULL,'2014-01-29 17:01:34');
/*!40000 ALTER TABLE `clicks` ENABLE KEYS */;


--
-- Definition of table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(75) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `address2` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `zip` int(5) DEFAULT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `phone_number` varchar(45) DEFAULT NULL,
  `email_address` varchar(45) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  `create_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` (`id`,`company`,`address`,`address2`,`city`,`state`,`zip`,`first_name`,`last_name`,`phone_number`,`email_address`,`status`,`create_date`) VALUES 
 (3,'Faldoni\'s Restaurant',NULL,NULL,NULL,NULL,NULL,'Ken','Day','(518)-879-8509','dimxasnewfrozen@gmail.com',1,'2014-01-29 14:58:45'),
 (4,'Legends Barber Shop',NULL,NULL,NULL,NULL,NULL,'Eric','Connors','(518)-665-5111','new@none.com',1,'2014-01-29 16:58:37');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;


--
-- Definition of table `impressions`
--

DROP TABLE IF EXISTS `impressions`;
CREATE TABLE `impressions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `browser` varchar(145) DEFAULT NULL,
  `audit_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1250 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `impressions`
--

/*!40000 ALTER TABLE `impressions` DISABLE KEYS */;
INSERT INTO `impressions` (`id`,`aid`,`ip_address`,`browser`,`audit_date`) VALUES 
 (1208,0,'127.0.0.1',NULL,'2014-01-29 14:33:57'),
 (1209,0,'127.0.0.1',NULL,'2014-01-29 14:33:57'),
 (1210,0,'127.0.0.1',NULL,'2014-01-29 14:33:57'),
 (1211,0,'127.0.0.1',NULL,'2014-01-29 14:34:55'),
 (1212,0,'127.0.0.1',NULL,'2014-01-29 14:34:55'),
 (1213,0,'127.0.0.1',NULL,'2014-01-29 14:34:55'),
 (1214,0,'127.0.0.1',NULL,'2014-01-29 14:35:13'),
 (1215,0,'127.0.0.1',NULL,'2014-01-29 14:35:13'),
 (1216,0,'127.0.0.1',NULL,'2014-01-29 14:35:13'),
 (1217,0,'127.0.0.1',NULL,'2014-01-29 14:35:39'),
 (1218,0,'127.0.0.1',NULL,'2014-01-29 14:35:39'),
 (1219,0,'127.0.0.1',NULL,'2014-01-29 14:35:39'),
 (1220,0,'127.0.0.1',NULL,'2014-01-29 14:35:53'),
 (1221,0,'127.0.0.1',NULL,'2014-01-29 14:35:53'),
 (1222,0,'127.0.0.1',NULL,'2014-01-29 14:35:53'),
 (1223,0,'127.0.0.1',NULL,'2014-01-29 14:58:54'),
 (1224,0,'127.0.0.1',NULL,'2014-01-29 14:59:03'),
 (1225,0,'127.0.0.1',NULL,'2014-01-29 14:59:34'),
 (1226,0,'127.0.0.1',NULL,'2014-01-29 15:00:21'),
 (1227,0,'127.0.0.1',NULL,'2014-01-29 15:00:46'),
 (1228,0,'127.0.0.1',NULL,'2014-01-29 15:00:47'),
 (1229,0,'127.0.0.1',NULL,'2014-01-29 15:01:54'),
 (1230,0,'127.0.0.1',NULL,'2014-01-29 15:02:11'),
 (1231,0,'127.0.0.1',NULL,'2014-01-29 15:02:25'),
 (1232,16,'127.0.0.1',NULL,'2014-01-29 15:02:34'),
 (1233,16,'127.0.0.1',NULL,'2014-01-29 15:02:37'),
 (1234,16,'127.0.0.1',NULL,'2014-01-29 15:02:37'),
 (1235,16,'127.0.0.1',NULL,'2014-01-29 15:02:51'),
 (1236,16,'127.0.0.1',NULL,'2014-01-29 15:12:44'),
 (1237,16,'127.0.0.1',NULL,'2014-01-29 15:13:24'),
 (1238,16,'127.0.0.1',NULL,'2014-01-29 15:13:54'),
 (1239,16,'127.0.0.1',NULL,'2014-01-29 15:13:59'),
 (1240,16,'127.0.0.1',NULL,'2014-01-29 15:14:21'),
 (1241,16,'127.0.0.1',NULL,'2014-01-29 15:14:43'),
 (1242,16,'127.0.0.1',NULL,'2014-01-29 15:19:15'),
 (1243,18,'127.0.0.1',NULL,'2014-01-29 17:01:30'),
 (1244,18,'127.0.0.1',NULL,'2014-01-29 17:01:31'),
 (1245,18,'127.0.0.1',NULL,'2014-01-29 17:01:32'),
 (1246,18,'127.0.0.1',NULL,'2014-01-29 17:01:33'),
 (1247,18,'127.0.0.1',NULL,'2014-01-29 17:01:33'),
 (1248,18,'127.0.0.1',NULL,'2014-01-29 17:01:37'),
 (1249,18,'127.0.0.1',NULL,'2014-01-29 17:01:37');
/*!40000 ALTER TABLE `impressions` ENABLE KEYS */;


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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

/*!40000 ALTER TABLE `session` DISABLE KEYS */;
INSERT INTO `session` (`id`,`uid`,`session_id`,`cookie_id`,`ip_address`,`date`) VALUES 
 (14,25,'2qjuok6vjlnq4ssa4e0qsc7795','a8dac959e216d9084ba1afcf232eec98','127.0.0.1','2014-01-29 14:24:34');
/*!40000 ALTER TABLE `session` ENABLE KEYS */;


--
-- Definition of table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `setting` varchar(25) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`setting`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` (`setting`,`value`) VALUES 
 ('Base Ad Url','http://localhost/AdServerManagement');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;


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
 (25,'Ken','Day','admin@mechanicvillemile.com','7877329b6a0d058fd81d1b56af2c6b71','','420 Chestnut Street','Mechanicville','New York','2014-01-29 14:24:16','2013-11-26 14:34:28',1,'basic','','',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
