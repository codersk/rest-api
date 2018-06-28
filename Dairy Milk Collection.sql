-- Dairy Milk Collection
CREATE DATABASE 'test_dairy';
USE 'test_dairy';

CREATE TABLE `members` (
  `sn` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) DEFAULT NULL,
  `name` varchar(120) DEFAULT NULL,
  `address` text,
  `gender` char(1) DEFAULT NULL,
  `type` varchar(120) DEFAULT NULL,
  `mobile` varchar(12) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sn`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=6;

INSERT INTO `members`(`code`, `name`, `address`, `gender`, `type`, `mobile`, `created_on`, `updated_on`) VALUES (
10, 'Chandu', 'Hitani', 'M', 'Buffalo', '7848574822', now(), now()), (
11, 'Pintu', 'Pune', 'M', 'Cow', '8485774822', now(), now()), (
12, 'Chintu', 'Kolhapur', 'F', 'Buffalo', '7482284857', now(), now()), (
13, 'Banti', 'Sankeshwar', 'M', 'Cow', '7882248574', now(), now()), (
14, 'Monti', 'Hitani', 'M', 'Buffalo', '7857482482', now(), now());
