/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.32-MariaDB : Database - db_penjualan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_penjualan` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `db_penjualan`;

/*Table structure for table `master_barang` */

DROP TABLE IF EXISTS `master_barang`;

CREATE TABLE `master_barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_barang` varchar(3) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `harga` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`,`kode_barang`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `master_barang` */

insert  into `master_barang`(`id`,`kode_barang`,`nama_barang`,`harga`) values 
(3,'001','Skin Care',5000),
(4,'002','Body Care',4000),
(5,'003','Facial Care',3000),
(6,'004','Hair Care',2000);

/*Table structure for table `promo` */

DROP TABLE IF EXISTS `promo`;

CREATE TABLE `promo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_promo` varchar(20) NOT NULL,
  `nama_promo` varchar(20) NOT NULL,
  `keterangan` varchar(150) NOT NULL,
  PRIMARY KEY (`id`,`kode_promo`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `promo` */

insert  into `promo`(`id`,`kode_promo`,`nama_promo`,`keterangan`) values 
(8,'PROMO-001','Promo Skin Care','setiap pembelian Skin Care sejumlah 2 pcs akan mendapat potongan harga 5000'),
(9,'PROMO-002','Promo Body Care','setiap pembelian Body Care sejumlah 2 pcs akan mendapat potongan harga 4000'),
(10,'PROMO-003','Promo Facial Care','setiap pembelian Facial Care sejumlah 2 pcs akan mendapat potongan harga 3000'),
(11,'PROMO-004','Promo Hair Care','setiap pembelian Hair Care sejumlah 2 pcs akan mendapat potongan harga 2000');

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_transaksi` varchar(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `kode_promo` varchar(20) NOT NULL,
  `keterangan` varchar(150) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL,
  PRIMARY KEY (`id`,`kode_transaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `transaksi` */

insert  into `transaksi`(`id`,`kode_transaksi`,`nama_barang`,`kode_promo`,`keterangan`,`harga`,`jumlah`,`total`,`bayar`,`kembalian`) values 
(1,'TR-001','Facial Care','Promo Facial Care','Setiap Pembelian Facial Care Sejumlah 2 Pcs Akan Mendapat Potongan Harga 3000',3000,4,6000,10000,4000);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
