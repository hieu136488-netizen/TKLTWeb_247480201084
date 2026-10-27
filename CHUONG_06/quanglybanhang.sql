-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2026 at 09:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanglybanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahang` varchar(4) NOT NULL COMMENT 'mã hàng',
  `tenhang` varchar(20) NOT NULL COMMENT 'tên hàng',
  `mansx` varchar(2) NOT NULL COMMENT 'mã nhà sx',
  `namsx` int(11) NOT NULL COMMENT 'năm sản xuất',
  `gia` int(11) NOT NULL COMMENT 'giá bán'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`mahang`, `tenhang`, `mansx`, `namsx`, `gia`) VALUES
('AS01', 'ASUS TUF', 'AS', 2017, 520),
('AS02', 'ASUS VIVOBOOK', 'AS', 2017, 580),
('DEO1', 'DELL VOSTRO', 'DE', 2015, 650),
('DE02', 'DELL INSPIRON', 'DE', 2015, 550),
('LEO1', 'LENOVO THINKPAD', 'LE', 2019, 750),
('TO01', 'TOSHIBA SETELLITE', 'TO', 2014, 630),
('LE02', 'LENOVO LEGION', 'LE', 2020, 540),
('LE03', 'LENOVO YOGA', 'LE', 2020, 600);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` varchar(3) NOT NULL COMMENT 'mã hoá đơn',
  `makh` varchar(3) NOT NULL COMMENT 'mã k.hàng',
  `mahang` varchar(4) NOT NULL COMMENT 'mã hàng',
  `soluong` int(11) NOT NULL COMMENT 'số lượng',
  `thanhtien` int(11) NOT NULL COMMENT 'thành tiền'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `makh`, `mahang`, `soluong`, `thanhtien`) VALUES
('001', 'K00', 'DEO1', 2, 0),
('001', 'K00', 'DE02', 1, 0),
('002', 'K00', 'LEO1', 5, 0),
('002', 'K00', 'LEO2', 3, 0),
('003', 'K00', 'TO01', 1, 0),
('004', 'K00', 'DE01', 2, 0),
('005', 'K00', 'AS01', 4, 0),
('005', 'K00', 'LE01', 6, 0),
('005', 'K00', 'LE02', 8, 0),
('006', 'K00', 'AS01', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` varchar(4) NOT NULL COMMENT 'mã k.hàng',
  `tenkh` varchar(30) NOT NULL COMMENT 'tên k.hàng',
  `namsinh` int(11) NOT NULL COMMENT 'năm sinh',
  `dienthoai` varchar(10) NOT NULL COMMENT 'số điện thoại',
  `diachi` varchar(50) NOT NULL COMMENT 'địa chỉ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `namsinh`, `dienthoai`, `diachi`) VALUES
('K001', 'NGUYỄN THỊ LAN', 1980, '0913123456', 'BẠC LIEU'),
('K002', 'NGUYỄN NGỌC KHÁNH', 1985, '0912345678', 'VĨNH LỢI'),
('K003', 'CHÂU ĐÕ HUY', 1977, '0165721116', 'CÀ MAU'),
('K004', 'VÕ ANH DUY', 1999, '0111999111', 'HỒNG DÂN'),
('K005', 'MÃ TRỌNG PHÚ', 1984, '0838234243', 'PHƯỚC LONG'),
('K006', 'HUỲNH MẪN ĐẠT', 1987, '0987654321', 'BẠC LIÊU'),
('K006', 'HỒ TRUNG TÍN', 1897, '0139824757', 'GIÁ RAI'),
('K007', 'NGUYỄN TRƯỜNG AN', 1999, '0694829234', 'VĨNH LỢI');

-- --------------------------------------------------------

--
-- Table structure for table `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `mansx` varchar(2) NOT NULL COMMENT 'mã nhà sx',
  `tennsx` varchar(40) NOT NULL COMMENT 'tên nhà sx',
  `quocgia` varchar(20) NOT NULL COMMENT 'quốc gia'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`mansx`, `tennsx`, `quocgia`) VALUES
('DE', 'DELL', 'HOA KỲ'),
('AS', 'ASUS', 'ĐÀI LOAN'),
('LE', 'LENOVO', 'TRUNG QUỐC'),
('TO', 'TOSHIBA', 'NHẬT BẢN');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
