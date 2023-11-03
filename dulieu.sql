-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 03, 2023 lúc 06:50 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dulieu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `Id` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`Id`, `username`, `password`) VALUES
('AD01', 'admin01', 'Cmnr01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan vien`
--

CREATE TABLE `nhan vien` (
  `IDNV` varchar(40) NOT NULL,
  `Họ và tên` text NOT NULL,
  `IDPB` varchar(255) NOT NULL,
  `Địa chỉ` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhan vien`
--

INSERT INTO `nhan vien` (`IDNV`, `Họ và tên`, `IDPB`, `Địa chỉ`) VALUES
('NV01', 'Nguyễn Ngu', 'PB01', 'Âm phủ'),
('NV02', 'Nguyễn Nguyên', 'PB01', 'Đà Lạt'),
('NV03', 'Đoàn Đạo', 'PB02', 'Đắk Lắk'),
('NV04', 'Trần Dần', 'PB03', 'Mỹ Đình');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong ban`
--

CREATE TABLE `phong ban` (
  `IDPB` varchar(255) NOT NULL,
  `Tên Phòng Ban` text NOT NULL,
  `Mô tả` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phong ban`
--

INSERT INTO `phong ban` (`IDPB`, `Tên Phòng Ban`, `Mô tả`) VALUES
('PB01', 'Phòng Ban 01', 'Khong gi'),
('PB02', 'Phòng Chống Mai Thúy', 'no table'),
('PB03', 'Phòng chống lũ lụt', 'Bó tay');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nhan vien`
--
ALTER TABLE `nhan vien`
  ADD PRIMARY KEY (`IDNV`),
  ADD KEY `IDPB` (`IDPB`),
  ADD KEY `IDPB_2` (`IDPB`);

--
-- Chỉ mục cho bảng `phong ban`
--
ALTER TABLE `phong ban`
  ADD PRIMARY KEY (`IDPB`),
  ADD KEY `IDPB` (`IDPB`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `nhan vien`
--
ALTER TABLE `nhan vien`
  ADD CONSTRAINT `nhan vien_ibfk_1` FOREIGN KEY (`IDPB`) REFERENCES `phong ban` (`IDPB`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
