/*
Navicat MySQL Data Transfer

Source Server         : MySQL Local
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : db_mau_pengupahan_proyek

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-12-17 02:41:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for absensi
-- ----------------------------
DROP TABLE IF EXISTS `absensi`;
CREATE TABLE `absensi` (
  `id_absen` int(8) NOT NULL AUTO_INCREMENT,
  `tanggal_kerja` date DEFAULT NULL,
  `nik` varchar(17) DEFAULT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `jabatan` varchar(25) DEFAULT NULL,
  `jam_masuk` varchar(5) DEFAULT NULL,
  `jam_keluar` varchar(5) DEFAULT NULL,
  `upah_harian` int(7) DEFAULT NULL,
  `uang_lembur_jam` int(7) DEFAULT NULL,
  `uang_transport` int(7) DEFAULT NULL,
  `uang_makan` int(7) DEFAULT NULL,
  `total` int(10) DEFAULT NULL,
  `id_proyek` varchar(18) DEFAULT NULL,
  PRIMARY KEY (`id_absen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of absensi
-- ----------------------------

-- ----------------------------
-- Table structure for karyawan
-- ----------------------------
DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan` (
  `id_karyawan` int(4) NOT NULL AUTO_INCREMENT,
  `id_login` int(4) DEFAULT NULL,
  `nama` varchar(48) DEFAULT NULL,
  `alamat` varchar(48) DEFAULT NULL,
  `nik` varchar(18) DEFAULT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of karyawan
-- ----------------------------
INSERT INTO `karyawan` VALUES ('1', '1', 'Hadi Khoirudin', 'Babakan Cianjur', 'NIK-2017.09.10.135');

-- ----------------------------
-- Table structure for login
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  `level` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES ('1', 'staf', 'staf', 'Admin');
INSERT INTO `login` VALUES ('4', 'lapangan', 'lapangan', 'User');

-- ----------------------------
-- Table structure for pekerja
-- ----------------------------
DROP TABLE IF EXISTS `pekerja`;
CREATE TABLE `pekerja` (
  `nik` varchar(17) NOT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `jabatan` varchar(25) DEFAULT NULL,
  `alamat` varchar(48) DEFAULT NULL,
  `no_ktp` varchar(16) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_ponsel_telp` varchar(13) DEFAULT NULL,
  `gender` varchar(9) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `agama` varchar(17) DEFAULT NULL,
  `upah_harian` int(7) DEFAULT NULL,
  `jam_kerja` varchar(8) DEFAULT NULL,
  `uang_lembur_jam` int(7) DEFAULT NULL,
  `uang_transport` int(7) DEFAULT NULL,
  `uang_makan` int(7) DEFAULT NULL,
  `id_proyek` varchar(18) DEFAULT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pekerja
-- ----------------------------

-- ----------------------------
-- Table structure for proyek
-- ----------------------------
DROP TABLE IF EXISTS `proyek`;
CREATE TABLE `proyek` (
  `id_proyek` varchar(18) NOT NULL,
  `nama_proyek` varchar(25) DEFAULT NULL,
  `alamat_proyek` varchar(48) DEFAULT NULL,
  `divisi` varchar(48) DEFAULT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`id_proyek`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of proyek
-- ----------------------------
