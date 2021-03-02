/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.4.14-MariaDB : Database - jktrans
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`jktrans` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `jktrans`;

/*Table structure for table `rekapan` */

DROP TABLE IF EXISTS `rekapan`;

CREATE TABLE `rekapan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sp` varchar(50) DEFAULT NULL,
  `colli` varchar(50) DEFAULT NULL,
  `berat` varchar(50) DEFAULT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `franco` varchar(50) DEFAULT NULL,
  `confrankert` varchar(50) DEFAULT NULL,
  `penerima` varchar(50) DEFAULT NULL,
  `ket` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `rekapan` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
