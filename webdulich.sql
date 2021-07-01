-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 02:02 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `viet_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `pk_category_product_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`pk_category_product_id`, `c_name`, `parent_id`) VALUES
(3, 'Tour châu Phi', 0),
(5, 'Tour châu Mỹ', 0),
(12, 'Tour châu Á', 0),
(13, 'Tour châu Âu', 0),
(14, 'Tour trong nước', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `hovaten` varchar(500) NOT NULL,
  `diachi` varchar(2000) NOT NULL,
  `dienthoai` varchar(200) NOT NULL,
  `ghichu` text NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `role` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `hovaten`, `diachi`, `dienthoai`, `ghichu`, `email`, `password`, `role`) VALUES
(29, 'loc', 'aa', '0123456789', '', 'loc@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 0),
(30, 'son', 'a', '0123456789', '', 'son@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `ngaymua` datetime NOT NULL DEFAULT current_timestamp(),
  `gia` float NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `ngaymua`, `gia`, `trangthai`) VALUES
(57, 30, '2021-06-29 23:01:52', 24000000, 1),
(58, 30, '2021-06-29 23:04:29', 1099990, 1),
(60, 30, '2021-05-30 05:12:33', 3206660, 1),
(61, 30, '2021-07-01 18:59:20', 40000, 1),
(62, 30, '2021-07-01 19:01:06', 12000000, 0),
(63, 30, '2021-07-01 19:01:32', 3156660, 0),
(64, 30, '2021-07-01 19:01:38', 12000000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `fk_product_id` int(11) NOT NULL,
  `c_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`order_detail_id`, `order_id`, `fk_product_id`, `c_number`) VALUES
(97, 47, 22, 3),
(99, 49, 21, 2),
(100, 49, 27, 4),
(101, 49, 23, 1),
(104, 49, 22, 1),
(105, 49, 28, 2),
(109, 50, 21, 1),
(112, 50, 22, 1),
(113, 50, 23, 1),
(117, 52, 21, 4),
(118, 52, 22, 4),
(119, 53, 21, 2),
(120, 53, 22, 1),
(122, 49, 24, 1),
(125, 52, 23, 1),
(126, 52, 24, 1),
(127, 54, 45, 1),
(128, 54, 44, 1),
(129, 55, 45, 1),
(130, 56, 43, 2),
(131, 56, 44, 2),
(132, 56, 42, 1),
(133, 57, 40, 2),
(134, 58, 44, 1),
(135, 59, 42, 1),
(136, 60, 41, 1),
(137, 60, 42, 1),
(138, 61, 45, 2),
(139, 62, 40, 1),
(140, 63, 42, 1),
(141, 64, 40, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pk_product_id` int(11) NOT NULL,
  `fk_category_product_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `c_description` varchar(2000) NOT NULL,
  `c_content` text NOT NULL,
  `c_img` varchar(500) NOT NULL,
  `c_price` float NOT NULL DEFAULT 0,
  `c_hotproduct` int(11) NOT NULL DEFAULT 0,
  `ngay_khoi_hanh` date NOT NULL DEFAULT current_timestamp(),
  `ngay_ve` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`pk_product_id`, `fk_category_product_id`, `c_name`, `c_description`, `c_content`, `c_img`, `c_price`, `c_hotproduct`, `ngay_khoi_hanh`, `ngay_ve`) VALUES
(38, 5, 'Canada', '															Tour Canada											\r\n											\r\n											\r\n											\r\n					', '																									\r\n						\r\n						\r\n						\r\n					', '1624251274canada.jfif', 1000000, 1, '2021-06-30', '2021-06-30'),
(39, 13, 'Đức', '																					\r\n	Tour Đức										\r\n											\r\n					', '																			\r\n						\r\n						\r\n					', '1624251311đức.jpg', 200000, 1, '2021-06-30', '2021-06-30'),
(40, 12, 'Hạ Long', '																					\r\n			Tour Hạ Long								\r\n											\r\n					', '																			\r\n						\r\n						\r\n					', '1624251357hạ long.jpg', 12000000, 1, '2021-06-30', '2021-06-30'),
(41, 12, 'Hàn Quốc', '																\r\n		Tour Hàn Quốc									\r\n					', '													\r\n						\r\n					', '1624251390hàn quốc.jfif', 50000, 1, '2021-06-30', '2021-06-30'),
(42, 5, 'Mỹ', '																\r\nTour Mỹ											\r\n					', '													\r\n						\r\n					', '1624251421mỹ.jfif', 3156660, 1, '2021-06-30', '2021-06-30'),
(43, 13, 'Pháp', '																					\r\n		Tour Pháp									\r\n											\r\n					', '																			\r\n						\r\n						\r\n					', '1624251480pháp.jpg', 4333330, 1, '2021-06-30', '2021-06-30'),
(44, 12, 'Nhật Bản', '																\r\n		Tour Nhật Bản									\r\n					', '													\r\n						\r\n					', '1624251511nhật bản.png', 1099990, 1, '2021-06-30', '2021-06-30'),
(45, 12, 'Trung Quốc', '<p>Tour Trung Quốc</p>\r\n', '<p>Tham gia tour Trung Quốc từ H&agrave; Nội 5 ng&agrave;y, du kh&aacute;ch được tham quan c&aacute;c địa danh nổi tiếng như:<br />\r\nC&aacute;ch Trương Gia Giới (Trung Quốc) khoảng 80 km về ph&iacute;a t&acirc;y nam, Ph&ugrave; Dung cổ trấn tọa lạc tr&ecirc;n th&aacute;c Vương Th&ocirc;n, n&eacute;p m&igrave;nh b&ecirc;n d&ograve;ng Dậu Thủy. Nơi cao nhất của thị trấn l&agrave; 927m v&agrave; điểm thấp nhất l&agrave; 139m, đứng từ nơi cao nhất của thị trấn bạn c&oacute; thể ngắm nh&igrave;n n&eacute;t đẹp đơn sơ v&agrave; giản dị nhưng kh&ocirc;ng k&eacute;m phần thơ mộng của một thị trấn ng&agrave;n năm tuổi, từ tr&ecirc;n cao bạn sẽ thấy những con đường quanh co như những mảnh lụa mềm mại uốn quanh thị trấn cổ.</p>\r\n\r\n<p><img alt=\"PhuDungTran\" src=\"https://ngoson285.github.io/Project/img/baner/780_crop_phu_dung_co_tran_2_1%202.svg\" /></p>\r\n\r\n<p>Ph&ugrave; Dung Cổ Trấn</p>\r\n\r\n<p>Tiếp nối chuyến h&agrave;nh tr&igrave;nh tour Trung Quốc từ H&agrave; Nội 5 ng&agrave;y, du kh&aacute;ch được tham quan Phượng Ho&agrave;ng Cổ Trấn. Phượng Ho&agrave;ng Cổ Trấn nằm ở ph&iacute;a t&acirc;y của tỉnh Hồ Nam, l&agrave; thị trấn sở hữu nhiều cảnh quan tự nhi&ecirc;n đẹp như tranh vẽ, nổi bật nhất l&agrave; n&uacute;i non h&ugrave;ng vĩ, hồ nước thanh b&igrave;nh, v&agrave; bầu trời trong xanh. Một truyền thuyết kể lại rằng ng&agrave;y xưa, c&oacute; hai con chim phượng ho&agrave;ng đ&atilde; bay qua nơi đ&acirc;y.</p>\r\n\r\n<p><img alt=\"phct\" src=\"https://ngoson285.github.io/Project/img/baner/phuong-hoang-co-tran-1_1%201.svg\" /></p>\r\n\r\n<p>Phượng Ho&agrave;ng Cổ Trấn</p>\r\n\r\n<p><img alt=\"\" src=\"https://ngoson285.github.io/Project/img/baner/phuong-hoang-co-tran-2_1%201.svg\" /></p>\r\n\r\n<p>Du Kh&aacute;ch Check-in tạiPhượng Ho&agrave;ng Cổ Trấn</p>\r\n\r\n<p>Tiếp nối chuyến h&agrave;nh tr&igrave;nh tour Trung Quốc từ H&agrave; Nội 5 ng&agrave;y, du kh&aacute;ch được tham quan Phượng Ho&agrave;ng Cổ Trấn. Phượng Ho&agrave;ng Cổ Trấn nằm ở ph&iacute;a t&acirc;y của tỉnh Hồ Nam, l&agrave; thị trấn sở hữu nhiều cảnh quan tự nhi&ecirc;n đẹp như tranh vẽ, nổi bật nhất l&agrave; n&uacute;i non h&ugrave;ng vĩ, hồ nước thanh b&igrave;nh, v&agrave; bầu trời trong xanh. Một truyền thuyết kể lại rằng ng&agrave;y xưa, c&oacute; hai con chim phượng ho&agrave;ng đ&atilde; bay qua nơi đ&acirc;y.<br />\r\nVậy c&ograve;n chần chừ g&igrave; nữa m&agrave; kh&ocirc;ng book tour Trung Quốc từ H&agrave; Nội 5 ng&agrave;y lưu lại khoảnh khắc đ&aacute;ng nhớ của chuyến h&agrave;nh tr&igrave;nh.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1624251553trung quoc.jpg', 20000, 1, '2021-06-30', '2021-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `pk_user_id` int(11) NOT NULL,
  `c_email` varchar(500) NOT NULL,
  `c_password` varchar(500) NOT NULL,
  `c_fullname` varchar(500) NOT NULL,
  `role` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`pk_user_id`, `c_email`, `c_password`, `c_fullname`, `role`) VALUES
(1, 'admin@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'admin', 1),
(2, 'son@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'son', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`pk_category_product_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pk_product_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`pk_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `pk_category_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pk_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `pk_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
