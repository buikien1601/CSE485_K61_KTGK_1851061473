-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2021 lúc 02:13 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nganhangmau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cars`
--

CREATE TABLE `cars` (
  `vehicle_id` int(10) NOT NULL,
  `license_no` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` datetime NOT NULL,
  `ctype` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drate` int(20) NOT NULL,
  `wrate` int(20) NOT NULL,
  `status` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cars`
--

INSERT INTO `cars` (`vehicle_id`, `license_no`, `model`, `year`, `ctype`, `drate`, `wrate`, `status`) VALUES
(1, '29Y1-45770', 'Mới', '0000-00-00 00:00:00', 'mec', 500000, 1000000, 'Hoạt Động');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`vehicle_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
