-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 29, 2021 lúc 06:35 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webdulich`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pk_product_id` int(11) NOT NULL,
  `fk_category_product_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `c_description` varchar(2000) NOT NULL,
  `c_content` text NOT NULL,
  `c_img` varchar(500) NOT NULL,
  `c_price` float NOT NULL DEFAULT 0,
  `c_hotproduct` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`pk_product_id`, `fk_category_product_id`, `c_name`, `c_description`, `c_content`, `c_img`, `c_price`, `c_hotproduct`) VALUES
(38, 5, 'Canada', '															Tour Canada											\r\n											\r\n											\r\n											\r\n					', '																									\r\n						\r\n						\r\n						\r\n					', '1624251274canada.jfif', 1000000, 1),
(39, 13, 'Đức', '																					\r\n	Tour Đức										\r\n											\r\n					', '																			\r\n						\r\n						\r\n					', '1624251311đức.jpg', 200000, 1),
(40, 12, 'Hạ Long', '																					\r\n			Tour Hạ Long								\r\n											\r\n					', '																			\r\n						\r\n						\r\n					', '1624251357hạ long.jpg', 12000000, 1),
(41, 12, 'Hàn Quốc', '																\r\n		Tour Hàn Quốc									\r\n					', '													\r\n						\r\n					', '1624251390hàn quốc.jfif', 50000, 1),
(42, 5, 'Mỹ', '																\r\nTour Mỹ											\r\n					', '													\r\n						\r\n					', '1624251421mỹ.jfif', 3156660, 1),
(43, 13, 'Pháp', '																					\r\n		Tour Pháp									\r\n											\r\n					', '																			\r\n						\r\n						\r\n					', '1624251480pháp.jpg', 4333330, 1),
(44, 12, 'Nhật Bản', '																\r\n		Tour Nhật Bản									\r\n					', '													\r\n						\r\n					', '1624251511nhật bản.png', 1099990, 1),
(45, 12, 'Trung Quốc', '																					\r\n		Tour Trung Quốc									\r\n											\r\n					', '																			\r\n						\r\n						\r\n			Đệp		', '1624251553trung quoc.jpg', 20000, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pk_product_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pk_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
