-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 28, 2023 at 11:43 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysql_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` varchar(15) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` varchar(40) NOT NULL,
  `created_at` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`) VALUES
('', 'Sting', 'dotrong403@gmail.com', 'klli', 0),
('', 'Sting', 'dotrong403@gmail.com', 'scsa', 0),
('', 'Sting', 'dotrong403@gmail.com', ';o;o', 0),
('', 'Sting', 'ndtr2k3@gmail.com', 'dsfgf', 0),
('', 'trong', 'nhatt820@gmail.com', 'adasfs', 0),
('', 'Sting', 'ndtr2k3@gmail.com', 'sdsd', 0),
('', 'trong', 'sss@gmail.com', 'âsas', 0),
('', 'trong', 'dotrong403@gmail.com', 'á', 0);

-- --------------------------------------------------------

--
-- Table structure for table `image_library`
--

DROP TABLE IF EXISTS `image_library`;
CREATE TABLE IF NOT EXISTS `image_library` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_time` int NOT NULL,
  `last_updated` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `image_library`
--

INSERT INTO `image_library` (`id`, `product_id`, `path`, `created_time`, `last_updated`) VALUES
(12, 20, 'image/coca.jpg', 1587486207, 1587486207),
(13, 20, 'image/heineken.jpg', 1587486375, 1587486375),
(14, 20, 'image/tiger.jpg', 1587486375, 1587486375),
(15, 20, 'image/fanta.jpg', 1587486375, 1587486375),
(16, 20, 'image/nightwolf.jpg', 1587486375, 1587486375),
(17, 20, 'image/mirinda.jpg', 1587486397, 1587486397);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int NOT NULL AUTO_INCREMENT,
  `parent_id` int NOT NULL DEFAULT '0',
  `name` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `position` int NOT NULL,
  `created_time` int NOT NULL,
  `last_updated` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `parent_id`, `name`, `link`, `position`, `created_time`, `last_updated`) VALUES
(4, 0, 'Level 1', 'home2.php', 0, 1555232698, 1555232698),
(5, 4, 'Level 2', 'product.php', 1, 1555232976, 1555232976),
(6, 5, 'Level 3', 'product.php', 0, 1555232976, 1555232976),
(7, 6, 'Level 4', 'home.php', 0, 1555232976, 1555232976),
(8, 4, 'Level 2.2', 'product.php', 2, 1555232976, 1555232976),
(9, 8, 'Level 3.2', 'product.php', 1, 1555427808, 1555427808),
(10, 7, 'Level 5', 'home.php', 0, 1555427808, 1555427808),
(20, 17, 'Level 7', '#', 1, 1555542591, 1555542591),
(21, 16, 'Level 2.2.2', 'home2.php', 1, 1555232698, 1555232698),
(17, 10, 'Level 6', '#', 1, 1555542591, 1555542591),
(16, 0, 'Level 1.2', 'home2.php', 1, 1555232698, 1555232698);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(500) NOT NULL,
  `note` text NOT NULL,
  `total` int NOT NULL,
  `created_time` int NOT NULL,
  `last_updated` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `phone`, `address`, `note`, `total`, `created_time`, `last_updated`) VALUES
(29, 'Andn', '0654654615', 'Ha Noi', 'Ghi chu', 8290000, 1587872426, 1587872426),
(30, 'trong', '(+84) 328 044 684', 'swf', 'dff', 54000, 1684138705, 1684138705),
(31, 'trong', '(+84) 328 044 684', 'tuy phuoc', 'mong shop goi som', 83000, 1684141552, 1684141552),
(32, 'trong', '(+84) 328 044 684', 'tuy phuoc', 'hello shop', 63000, 1684149818, 1684149818),
(33, 'trong', 'dd', 'tuy phuoc', 'ddf', 21000, 1684149868, 1684149868),
(34, 'trieu', '123355', 'tuy phuoc', 'vcvbvcvn', 51000, 1684195949, 1684195949),
(35, 'tề', 'egefe', 'dfdf', 'saf', 21000, 1684329474, 1684329474),
(36, 'trong', '(+84) 328 044 684', 'tuy phuoc', 'abc', 27000, 1684395888, 1684395888),
(37, 'trong', '(+84) 328 044 684', 'tuy phuoc', 'ad', 27000, 1684395927, 1684395927),
(38, 'Sting', '(+84) 342199648', 'tuy phuoc', 'đ', 21000, 1684396045, 1684396045),
(39, 'Sting', '(+84) 328 044 684', 'tuy phuoc', 'fefe', 27000, 1684396283, 1684396283),
(40, 'Sting', '(+84) 328 044 684', 'tuy phuoc', 'gff', 21000, 1684396303, 1684396303),
(41, 'trong', '(+84) 328 044 684', 'tuy phuoc', 'ada', 21000, 1684568757, 1684568757),
(42, 'trong', '(+84) 328 044 684', 'tuy phuoc', 'ada', 21000, 1684568803, 1684568803),
(43, 'trong', '(+84) 328 044 684', 'tuy phuoc', 'ada', 21000, 1684568821, 1684568821),
(44, 'trong', '(+84) 328 044 684', 'tuy phuoc', 'ada', 21000, 1684568907, 1684568907),
(45, 'trong', '(+84) 328 044 684', 'tuy phuoc', 'ada', 21000, 1684568987, 1684568987),
(46, 'coca', '(+84) 342199648', 'dsfdf', 'asas', 28000, 1684800380, 1684800380);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE IF NOT EXISTS `order_detail` (
  `id` int NOT NULL AUTO_INCREMENT,
  `order_id` int NOT NULL,
  `product_id` int DEFAULT NULL,
  `quantity` int NOT NULL,
  `price` int NOT NULL,
  `created_time` int NOT NULL,
  `last_updated` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` float NOT NULL,
  `content` text NOT NULL,
  `created_time` int NOT NULL,
  `last_updated` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`, `content`, `created_time`, `last_updated`) VALUES
(2, 'Coca', 'image/coca.jpg', 21000, 'Coca là một loại đồ uống có gas', 1552615987, 1552615987),
(3, 'Heineken', 'image/heineken.jpg', 27000, 'Heineken là một loại  đồ uống có cồn', 1552615987, 1552615987),
(4, 'Tiger', 'image/tiger.jpg', 28000, 'Tiger là một loại đồ uống có cồn', 1552615987, 1552615987),
(5, 'Laure', 'image/laure.jpg', 23000, 'Laure là một loại đồ uống có cồn', 1552615987, 1552615987),
(6, 'Sting', 'image/sting.jpg', 24000, 'Sting là một loại đồ uống có  gas', 1552615987, 1552615987),
(7, 'Fanta', 'image/fanta.jpg', 21000, 'Fanta là một loại đồ uống có  gas', 1552615987, 1552615987),
(8, 'NightWolf', 'image/nightwolf.jpg', 22000, 'NightWolf là một loại đồ uống có  gas', 1552615987, 1552615987),
(9, 'Redbull', 'image/redbull.jpg', 14000, 'Redbull là một loại đồ uống có  gas', 1552615987, 1552615987),
(10, 'Strong Bow', 'image/strongbow.jpg', 60000, 'StrongBow là 1 loại đồ uống có gas\r\n', 1552615987, 1554822153),
(11, 'Lavie', 'image/lavie.jpg', 24000, 'Lavie là một loại đồ uống có  gas', 1552615987, 1552615987),
(12, 'Compact', 'image/compact.jpg', 15000, 'Compact là một loại đồ uống có gas', 1552615987, 1552615987),
(13, 'Mirinda', 'image/mirinda.jpg', 21000, 'Mirinda  là một loại đồ uống có gas', 1552615987, 1552615987),
(14, 'Bivina', 'image/bivina.jpg', 27000, 'Bivina  là một loại đồ uống có cồn', 1552615987, 1552615987),
(15, 'Sài Gòn', 'image/saigon.jpg', 24000, ' Sài Gòn là một loại đồ uống có cồn', 1552615987, 1552615987),
(16, '7 UP', 'image/7up.jpg', 21000, '7 UP  là một loại nước uống có gas', 1552615987, 1552615987),
(17, 'Moutain Dew', 'image/mtndew.jpg', 32000, 'Moutaindew  là 1 loại đồ uống có gas', 1552615987, 1552615987);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `ID` bigint NOT NULL,
  `Ten` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `Gia` double NOT NULL,
  `HinhAnh` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `Manhasx` bigint NOT NULL,
  `Mota` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `KhuyenMai` tinyint(1) NOT NULL,
  `giakhuyenmai` double NOT NULL,
  `tacgia` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`ID`, `Ten`, `Gia`, `HinhAnh`, `Manhasx`, `Mota`, `date`, `KhuyenMai`, `giakhuyenmai`, `tacgia`) VALUES
(216, 'Sài Gòn ', 19, 'saigon.jfif', 16, '', '2021-06-26', 1, 18, ''),
(223, 'Warrior', 27, 'warrior.jpg', 22, '', '2021-06-26', 1, 17, ''),
(330, 'Revive', 25, 'revive.jpg', 28, '', '2021-06-30', 1, 17, ''),
(330, 'C2', 24, 'c2.jpg', 28, '', '2021-06-30', 1, 17, ''),
(224, 'Sting ', 28, 'sting.jfif', 23, '', '2021-06-26', 2, 19, ''),
(225, 'Tiger ', 29, 'biadep1.jpg', 24, '', '2021-06-26', 2, 20, ''),
(226, 'Budweiser', 31, 'budweiser.jpg', 35, '', '2021-06-26', 2, 14, ''),
(227, 'Carabao ', 31, 'carabao.jpg', 36, '', '2021-06-26', 2, 19, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dangky`
--

DROP TABLE IF EXISTS `tbl_dangky`;
CREATE TABLE IF NOT EXISTS `tbl_dangky` (
  `id_dangky` int NOT NULL,
  `tendangnhap` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `matkhau` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sodienthoai` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tendangnhap`, `matkhau`, `email`, `sodienthoai`) VALUES
(0, 'trong244', '1234', 'dotrong403@gmail.com', '0123456789'),
(0, 'trong', '1234', 'dotrong403@gmail.com', '1243466356');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

DROP TABLE IF EXISTS `tbl_sanpham`;
CREATE TABLE IF NOT EXISTS `tbl_sanpham` (
  `id_sanpham` int NOT NULL,
  `tensanpham` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `masp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `giasp` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `soluong` int NOT NULL,
  `hinhanh` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `noidung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `noidung`) VALUES
(1, 'Heineken', 'HK', '25000 VND', 100, 'image/kenlon.jpg', ''),
(2, 'Tiger', 'TG', '21000 VND', 200, 'image/tiger.jpg', ''),
(3, 'Sài Gòn', 'SG', '17000 VND', 100, 'image/saigon.jpg', ''),
(4, 'Fanta', 'FT', '17000 VND', 100, 'image/fanta.jpg', ''),
(5, 'Redbull', 'RB', '17000 VND', 200, 'image/redbull.jpg', ''),
(6, 'Compact', 'CP', '17000 VND', 100, 'image/compact.jpg', ''),
(7, 'Sting', 'ST', '15000 VND', 200, 'image/sting.jpg', ''),
(8, 'Mirinda', 'MRD', '17000 VND', 200, 'image/mirinda.jpg', ''),
(9, 'Lavie', 'LVE', '17000 VND', 100, 'image/lavie.jpg', ''),
(10, 'Nightwolf', 'NT', '17000 VND', 200, 'image/nightwolf', ''),
(11, 'Mirinda vị soda kem việt quốc', 'MRDvq', '10000 VND', 200, 'image/miridasodakem-vietquoc.jpg', ''),
(12, 'Fanta soda kem trái cây', 'FTtc', '9700 VND', 200, 'image/fantasodakemtraicay.jpg', ''),
(13, 'Bia Becks', 'Be', '9000 VND', 200, 'image/becks.jpg', ''),
(14, 'Bia Red Ruby', 'RR', '9000 VND', 200, 'image/redruby.jpg', ''),
(15, 'Bia Sapporo', 'SPR', '24000 VND', 200, 'image/sapporo.jpg', ''),
(16, 'Nước tăng lực Rockstar', 'RS', '8000 VND', 200, 'image/rockstar.jpg', ''),
(17, 'Nước tăng lực Wake Up 247', 'WK', '9000 VND', 200, 'image/wakeup247.jpg', ''),
(18, 'Nước tăng lực Carabao', 'CR', '9000 VND', 200, 'image/carabao.jpg', ''),
(19, 'Nước tăng lực Rồng đỏ', 'RĐ', '7000 VND', 200, 'image/rongdo.jpg', ''),
(20, 'Nước tăng lực Rồng đỏ Pina Colada', 'RĐPC', '8500 VND', 200, 'image/rongdoPC.jpg', ''),
(21, 'Nước tăng lực Numberone', 'NB1', '9000 VND', 200, 'image/nb1.jpg', ''),
(22, 'Cà phê sữa Highlands', 'CR', '14000 VND', 200, 'image/cfsuaHL.jpg', ''),
(23, 'Cà phê sữa Georgia Max', 'GM', '12000 VND', 200, 'image/cfgeorgiamax.jpg', ''),
(24, 'Bia Bivina', 'BN', '12000 VND', 200, 'image/bivina.jpg', ''),
(25, 'Bia Tiger soju', 'TGS', '20000 VND', 200, 'image/tigersoju.jpg', ''),
(26, 'Strongbow', 'SB', '10000 VND', 200, 'image/strongbow.jpg', ''),
(27, 'Nước tăng lực Monster', 'MS', '21000 VND', 200, 'image/monstar.jpg', ''),
(28, 'Nước bù khoáng Revive', 'RV', '12000 VND', 200, 'image/revive.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `birthday` int NOT NULL,
  `created_time` int NOT NULL,
  `last_updated` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `fullname`, `password`, `birthday`, `created_time`, `last_updated`) VALUES
(1, 'admin', 'Andn', '25d55ad283aa400af464c76d713c07ad', 123, 123, 1553185530);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
