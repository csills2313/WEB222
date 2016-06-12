CREATE DATABASE `csillsze_birdsdentures` /*!40100 DEFAULT CHARACTER SET latin1 */;

CREATE TABLE `donors` (
  `donor_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `donor_name` varchar(150) DEFAULT NULL,
  `donor_amount` float(6,2) unsigned DEFAULT NULL,
  `donor_message` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`donor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `transaction_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `transaction_id` (`transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `donations` (
  `transaction_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `donor_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `amount` double DEFAULT '0',
  `original_request` text COLLATE utf8_unicode_ci,
  `dt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
