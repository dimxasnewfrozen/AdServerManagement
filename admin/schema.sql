CREATE DATABASE `community` /*!40100 DEFAULT CHARACTER SET latin1 */;

DROP TABLE IF EXISTS `community`.`user_activations`;
CREATE TABLE  `community`.`user_activations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `code` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `community`.`users`;
CREATE TABLE  `community`.`users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email_address` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_verified` datetime NOT NULL,
  `status` int(10) unsigned NOT NULL DEFAULT '0',
  `user_type` varchar(20) NOT NULL,
  `title` varchar(45) NOT NULL,
  `business_type` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `session`;
CREATE TABLE  `session` (
  `uid` int(10) unsigned NOT NULL,
  `session_id` varchar(100) NOT NULL,
  `cookie_id` varchar(100) NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;