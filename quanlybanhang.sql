-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2026 lúc 10:31 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlybanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahang` varchar(4) NOT NULL,
  `tenhang` varchar(40) NOT NULL,
  `mansx` varchar(2) NOT NULL,
  `namsx` int(11) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`mahang`, `tenhang`, `mansx`, `namsx`, `gia`) VALUES
('AS01', 'ASUS TUF', 'AS', 2017, 520),
('ASO2', 'ASUS VIVOBOOK ', 'AS', 2017, 580),
('DE01', 'DELL VOSTRO', 'DE', 2015, 650),
('DE02', 'DEL INSPIRON', 'DE', 2015, 550),
('LE01', 'LENOVO THINKPAD', 'LE', 2019, 750),
('LE02', 'LENOVO LEGION', 'LE', 2020, 540),
('LE03', 'LENOVO YOGA', 'LE', 2020, 600),
('TO01', 'TOSHIBA SATELLITE', 'TO', 2014, 630);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` varchar(3) NOT NULL,
  `makh` varchar(3) NOT NULL,
  `mahang` varchar(4) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `makh`, `mahang`, `soluong`, `thanhtien`) VALUES
('001', 'K00', 'DE01', 2, 0),
('001', 'K00', 'DE02', 1, 0),
('002', 'K00', 'LE01', 5, 0),
('002', 'K00', 'LE02', 3, 0),
('003', 'K00', 'TO01', 1, 0),
('004', 'K00', 'DE01', 2, 0),
('005', 'K00', 'AS01', 4, 0),
('005', 'K00', 'LE01', 6, 0),
('005', 'K00', 'LE02', 8, 0),
('006', 'K00', 'AS01', 5, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` varchar(4) NOT NULL,
  `tenkh` varchar(30) NOT NULL,
  `namsinh` int(11) NOT NULL,
  `dienthoai` varchar(10) NOT NULL,
  `diachi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `namsinh`, `dienthoai`, `diachi`) VALUES
('K001', 'NGUYỄN THỊ LAN', 1980, '0913123456', 'BẠC LIÊU'),
('K002', 'NGÔ THANH MINH', 1985, '0913024357', 'VĨNH LỢI'),
('K003', 'LÂM VĂN THANH', 1979, '0913123457', 'GIÁ RAI'),
('K004', 'DƯƠNG THU THUỶ', 1995, '0913024358', 'HỒNG DÂN'),
('K005', 'NGUYỄN THỊ XUÂN', 1987, '0913223344', 'PHƯỚC LONG'),
('K006', 'HUỲNH MẪN ĐẠT', 1975, '0989122112', 'BẠC LIÊU'),
('K007', 'LÂM HOÀI BẢO', 1990, '0944556677', 'BẠC LIÊU'),
('K008', 'HỒ TRUNG TÍN', 2000, '0944119999', 'PHƯỚC LONG'),
('K009', 'TRƯƠNG XUÂN THI', 2001, '0909000111', 'VĨNH LỢI'),
('K010', 'NGÔ VĂN NAM', 2001, '0909000112', 'GIÁ RAI');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `mansx` varchar(2) NOT NULL,
  `tennsx` varchar(40) NOT NULL,
  `quocgia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`mansx`, `tennsx`, `quocgia`) VALUES
('AS', 'ASUS', 'ĐÀI LOAN'),
('DE', 'DELL', 'HOA KÌ'),
('LE', 'LENOVO', 'TRUNG QUỐC'),
('TO', 'TOSHIBA', 'NHẬT BẢN');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahang`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`mansx`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
