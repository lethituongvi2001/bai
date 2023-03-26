-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 27, 2022 lúc 08:44 AM
-- Phiên bản máy phục vụ: 5.7.25
-- Phiên bản PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shophcc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`) VALUES
(1, 'Cọ'),
(2, 'Màu vẽ'),
(3, 'Bút'),
(4, 'Giấy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diachi`
--

CREATE TABLE `diachi` (
  `id` int(11) NOT NULL,
  `nguoidung_id` int(11) NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `macdinh` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diachi`
--

INSERT INTO `diachi` (`id`, `nguoidung_id`, `diachi`, `macdinh`) VALUES
(1, 4, 'Đông Xuyên, Long Xuyên', 1),
(2, 5, 'Mỹ Xuyên, Long Xuyên', 1),
(3, 7, 'Mỹ Long', 1),
(4, 8, 'Mỹ Thới', 1),
(5, 9, 'Mỹ Xuyên', 1),
(6, 10, 'Mỹ Long', 1),
(7, 23, 'cái bè tiền giang', 1),
(8, 26, 'cAi lậy tiền giang', 1),
(9, 27, 'cAi lậy tiền giang', 1),
(10, 28, 'lấp vò', 1),
(11, 29, 'lấp vò', 1),
(12, 30, 'lấp vò', 1),
(13, 31, 'lấp vò', 1),
(14, 32, 'sada', 1),
(15, 33, 'asdf', 1),
(16, 34, '2wê ffg', 1),
(17, 35, 'ghjhjghj', 1),
(18, 36, 'ghjhjghj', 1),
(19, 37, 'dasdasda', 1),
(20, 38, '113fdsfsdfsd', 1),
(21, 39, 'Cái Bè, Tiền Giang', 1),
(22, 40, 'Cái Bè, Tiền Giang', 1),
(23, 41, 'Cái Bè, Tiền Giang', 1),
(24, 42, 'Cái Bè, Tiền Giang', 1),
(25, 43, 'Cái Bè, Tiền Giang', 1),
(26, 44, 'Cái Bè, Tiền Giang', 1),
(27, 45, 'Cái Bè, Tiền Giang', 1),
(28, 46, 'Cái Bè, Tiền Giang', 1),
(29, 47, 'ádfghj', 1),
(30, 48, 'Bình Dương', 1),
(31, 49, 'Óc Eo, Thoại Sơn, An Giang', 1),
(32, 51, 'Ung Văn Kiêm, Long Xuyên, An Giang', 1),
(33, 52, 'Ung Văn Kiêm, Long Xuyên, An Giang', 1),
(34, 53, 'dyuyu', 1),
(35, 54, 'dyuyu', 1),
(36, 55, 'dyuyu', 1),
(37, 56, 'ung van khiem', 1),
(38, 57, 'ung van khiem', 1),
(39, 58, 'ung van khiem', 1),
(40, 59, 'ung van khiem', 1),
(41, 60, 'dang dang dang', 1),
(42, 61, 'dang dang dang', 1),
(43, 62, 'dang dang dang', 1),
(44, 63, 'dang dang dang', 1),
(45, 64, 'dang dang dang', 1),
(46, 65, 'dang dang dang', 1),
(47, 66, 'dang dang dang', 1),
(48, 67, 'ssssssssssssssssssssssssssssssss', 1),
(49, 68, 'ssssssssssssssssssssssssssssssss', 1),
(50, 69, 'poilhjkhh', 1),
(51, 70, 'ôpppppp', 1),
(52, 71, 'ôpppppp', 1),
(53, 72, 'ôpppppp', 1),
(54, 73, 'ôpppppp', 1),
(55, 74, 'Ung Văn Khiêm, Long Xuyên, An Giang', 1),
(56, 75, 'Lũng cú đồng văn hà giang', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `nguoidung_id` int(11) NOT NULL,
  `diachi_id` int(11) DEFAULT NULL,
  `ngay` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tongtien` float NOT NULL DEFAULT '0',
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `nguoidung_id`, `diachi_id`, `ngay`, `tongtien`, `ghichu`) VALUES
(1, 4, 1, '2020-10-23 13:38:40', 1320000, NULL),
(2, 5, 2, '2020-10-24 15:13:10', 3920000, NULL),
(3, 8, 4, '2021-03-13 16:38:57', 6035000, NULL),
(4, 9, 5, '2021-03-13 16:53:28', 6035000, NULL),
(5, 10, 6, '2021-03-13 16:55:44', 7800000, NULL),
(6, 23, 7, '2022-12-20 16:40:59', 1976000, NULL),
(7, 26, 8, '2022-12-22 10:57:22', 4492000, NULL),
(8, 27, 9, '2022-12-22 11:01:24', 4492000, NULL),
(9, 28, 10, '2022-12-22 11:21:35', 4602000, NULL),
(10, 29, 11, '2022-12-22 11:23:58', 4602000, NULL),
(11, 30, 12, '2022-12-22 11:24:08', 4602000, NULL),
(12, 31, 13, '2022-12-22 11:27:12', 4602000, NULL),
(13, 32, 14, '2022-12-22 11:27:47', 4657000, NULL),
(14, 33, 15, '2022-12-22 14:15:56', 4817000, NULL),
(15, 34, 16, '2022-12-22 14:25:45', 5185000, NULL),
(16, 35, 17, '2022-12-22 22:07:16', 886000, NULL),
(17, 36, 18, '2022-12-22 22:10:40', 0, NULL),
(18, 37, 19, '2022-12-22 22:12:23', 710000, NULL),
(19, 38, 20, '2022-12-22 22:14:23', 820000, NULL),
(20, 39, 21, '2022-12-23 14:17:22', 368000, NULL),
(21, 40, 22, '2022-12-23 14:17:54', 0, NULL),
(22, 41, 23, '2022-12-23 14:18:17', 0, NULL),
(23, 42, 24, '2022-12-23 14:21:02', 0, NULL),
(24, 43, 25, '2022-12-23 14:21:20', 0, NULL),
(25, 44, 26, '2022-12-23 14:21:31', 0, NULL),
(26, 45, 27, '2022-12-23 14:22:10', 0, NULL),
(27, 46, 28, '2022-12-23 14:22:34', 0, NULL),
(28, 47, 29, '2022-12-23 14:52:37', 1210000, NULL),
(29, 48, 30, '2022-12-23 15:41:46', 84000, NULL),
(30, 49, 31, '2022-12-24 17:45:40', 2900000, NULL),
(31, 51, 32, '2022-12-24 22:07:26', 2740000, NULL),
(32, 52, 33, '2022-12-24 22:07:35', 2740000, NULL),
(33, 53, 34, '2022-12-24 22:08:04', 2740000, NULL),
(34, 54, 35, '2022-12-24 22:08:48', 2740000, NULL),
(35, 55, 36, '2022-12-24 22:09:01', 2740000, NULL),
(36, 56, 37, '2022-12-24 22:12:32', 2777000, NULL),
(37, 57, 38, '2022-12-24 22:13:33', 2777000, NULL),
(38, 58, 39, '2022-12-24 22:18:30', 2777000, NULL),
(39, 59, 40, '2022-12-24 22:19:55', 2777000, NULL),
(40, 60, 41, '2022-12-24 22:24:10', 2777000, NULL),
(41, 61, 42, '2022-12-24 22:28:17', 2777000, NULL),
(42, 62, 43, '2022-12-24 22:28:44', 2777000, NULL),
(43, 63, 44, '2022-12-24 22:29:10', 2777000, NULL),
(44, 64, 45, '2022-12-24 22:30:06', 2777000, NULL),
(45, 65, 46, '2022-12-24 22:30:45', 2777000, NULL),
(46, 66, 47, '2022-12-24 22:32:15', 0, NULL),
(47, 67, 48, '2022-12-24 22:33:10', 120000, NULL),
(48, 68, 49, '2022-12-24 22:36:22', 0, NULL),
(49, 69, 50, '2022-12-24 22:37:00', 1750000, NULL),
(50, 70, 51, '2022-12-24 22:38:16', 380000, NULL),
(51, 71, 52, '2022-12-24 22:40:58', 0, NULL),
(52, 72, 53, '2022-12-24 22:41:14', 0, NULL),
(53, 73, 54, '2022-12-24 22:41:28', 0, NULL),
(54, 74, 55, '2022-12-24 22:46:30', 925000, NULL),
(55, 75, 56, '2022-12-26 21:27:20', 180000, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangct`
--

CREATE TABLE `donhangct` (
  `id` int(11) NOT NULL,
  `donhang_id` int(11) NOT NULL,
  `mathang_id` int(11) NOT NULL,
  `dongia` float NOT NULL DEFAULT '0',
  `soluong` int(11) NOT NULL DEFAULT '1',
  `thanhtien` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhangct`
--

INSERT INTO `donhangct` (`id`, `donhang_id`, `mathang_id`, `dongia`, `soluong`, `thanhtien`) VALUES
(1, 1, 1, 1320000, 1, 1320000),
(2, 2, 3, 2130000, 1, 2130000),
(3, 2, 2, 1790000, 1, 1790000),
(4, 6, 34, 55000, 2, 110000),
(5, 6, 35, 184000, 9, 1656000),
(6, 6, 31, 105000, 2, 210000),
(7, 7, 1, 28000, 1, 28000),
(8, 8, 1, 28000, 1, 28000),
(9, 9, 1, 28000, 1, 28000),
(10, 10, 1, 28000, 1, 28000),
(11, 11, 1, 28000, 1, 28000),
(12, 12, 1, 28000, 1, 28000),
(13, 13, 1, 28000, 1, 28000),
(14, 14, 1, 28000, 1, 28000),
(15, 15, 1, 28000, 1, 28000),
(16, 16, 13, 30000, 1, 30000),
(17, 16, 1, 28000, 2, 56000),
(18, 16, 30, 200000, 4, 800000),
(19, 18, 22, 90000, 3, 270000),
(20, 18, 26, 440000, 1, 440000),
(21, 19, 21, 740000, 1, 740000),
(22, 19, 8, 40000, 2, 80000),
(23, 20, 35, 184000, 2, 368000),
(24, 28, 21, 740000, 1, 740000),
(25, 28, 26, 440000, 1, 440000),
(26, 28, 18, 30000, 1, 30000),
(27, 29, 1, 28000, 3, 84000),
(28, 30, 3, 1285000, 1, 1285000),
(29, 30, 35, 184000, 2, 368000),
(30, 30, 17, 1247000, 1, 1247000),
(31, 31, 8, 40000, 1, 40000),
(32, 31, 7, 47000, 3, 141000),
(33, 31, 14, 65000, 1, 65000),
(34, 32, 8, 40000, 1, 40000),
(35, 32, 7, 47000, 3, 141000),
(36, 32, 14, 65000, 1, 65000),
(37, 33, 8, 40000, 1, 40000),
(38, 33, 7, 47000, 3, 141000),
(39, 33, 14, 65000, 1, 65000),
(40, 34, 8, 40000, 1, 40000),
(41, 34, 7, 47000, 3, 141000),
(42, 34, 14, 65000, 1, 65000),
(43, 35, 8, 40000, 1, 40000),
(44, 35, 7, 47000, 3, 141000),
(45, 35, 14, 65000, 1, 65000),
(46, 36, 8, 40000, 1, 40000),
(47, 36, 7, 47000, 3, 141000),
(48, 36, 14, 65000, 1, 65000),
(49, 37, 8, 40000, 1, 40000),
(50, 37, 7, 47000, 3, 141000),
(51, 37, 14, 65000, 1, 65000),
(52, 38, 8, 40000, 1, 40000),
(53, 38, 7, 47000, 3, 141000),
(54, 38, 14, 65000, 1, 65000),
(55, 39, 8, 40000, 1, 40000),
(56, 39, 7, 47000, 3, 141000),
(57, 39, 14, 65000, 1, 65000),
(58, 40, 8, 40000, 1, 40000),
(59, 40, 7, 47000, 3, 141000),
(60, 40, 14, 65000, 1, 65000),
(61, 41, 8, 40000, 1, 40000),
(62, 41, 7, 47000, 3, 141000),
(63, 41, 14, 65000, 1, 65000),
(64, 42, 8, 40000, 1, 40000),
(65, 42, 7, 47000, 3, 141000),
(66, 42, 14, 65000, 1, 65000),
(67, 43, 8, 40000, 1, 40000),
(68, 43, 7, 47000, 3, 141000),
(69, 43, 14, 65000, 1, 65000),
(70, 44, 8, 40000, 1, 40000),
(71, 44, 7, 47000, 3, 141000),
(72, 44, 14, 65000, 1, 65000),
(73, 49, 4, 1750000, 1, 1750000),
(74, 50, 34, 55000, 4, 220000),
(75, 50, 32, 40000, 4, 160000),
(76, 54, 14, 65000, 1, 65000),
(77, 54, 21, 740000, 1, 740000),
(78, 54, 9, 120000, 1, 120000),
(79, 55, 36, 180000, 1, 180000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mathang`
--

CREATE TABLE `mathang` (
  `id` int(11) NOT NULL,
  `tenmathang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci,
  `giagoc` float NOT NULL DEFAULT '0',
  `giaban` float NOT NULL DEFAULT '0',
  `soluongton` int(11) NOT NULL DEFAULT '0',
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `danhmuc_id` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT '0',
  `luotmua` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mathang`
--

INSERT INTO `mathang` (`id`, `tenmathang`, `mota`, `giagoc`, `giaban`, `soluongton`, `hinhanh`, `danhmuc_id`, `luotxem`, `luotmua`) VALUES
(1, 'Cọ vẽ Nước Waterbrush SUPERIOR', NULL, 0, 28000, 0, 'images/c1.jpg', 1, 34, 0),
(2, 'Cọ Mảng quét màu nước ART SECRET lông Dê', NULL, 0, 64000, 10, 'images/c2.jpg', 1, 9, 0),
(3, 'Bộ chì màu Khô FABER CASTELL Polychromos', NULL, 0, 1285000, 9, 'images/m1.jpg', 2, 11, 0),
(4, 'Bộ bút marker TOUCHLIIT Full 204 màu ', NULL, 0, 1750000, 9, 'images/b1.jpg', 3, 8, 0),
(5, ' Giấy vẽ màu Nước CANSON Pháp (Vân mịn)', 'Rẻ vô địch', 0, 25000, 10, 'images/g2.jpg', 4, 5, 0),
(6, 'Giấy vẽ scan gateway dày 73gsm (tracing paper)', 'Siêu xịn', 0, 50000, 10, 'images/g3.jpg', 4, 2, 0),
(7, 'Giấy vẽ Truyện Tranh KUELOX 120gsm A4 Đúng (30 tờ)', 'KHÔNG DÙNG VẼ CÁC LOẠI MÀU CÓ NƯỚC', 0, 47000, -27, 'images/g4.jpg', 4, 3, 0),
(8, 'Giấy vẽ CANSON Đen 180gsm ( 30 tờ)', 'KHÔNG DÙNG VẼ CÁC LOẠI MÀU CÓ NƯỚC', 0, 40000, 4, 'images/g5.jpg', 4, 0, 0),
(9, 'Giấy vẽ màu Nước HOA HỒNG 300gsm khổ 8K vân nổi ', 'Khổ lỡ sẽ nhỏ hơn khổ giấy đứng', 0, 120000, 9, 'images/g6.jpg', 4, 0, 0),
(10, 'Giấy vẽ Chì ROKI Dày 250gsm truyền thần, marker (vân mịn)', 'KHÔNG DÙNG VẼ CÁC LOẠI MÀU CÓ NƯỚC', 0, 40000, 10, 'images/g7.jpg', 4, 0, 0),
(11, 'Giấy vẽ màu Nước BAOHONG 100% cotton (vân mịn HOT)', '', 0, 28000, 30000, 'images/g8.jpg', 4, 0, 0),
(12, 'Giấy vẽ màu Nước Ý FABRIANO 300gsm (vân mịn)', '', 0, 20000, 20, 'images/g9.jpg', 4, 0, 0),
(13, 'Bút màu dạ quang PENTEL Pastel (set 7 cây)', '', 0, 30000, 14, 'images/b2.jpg', 3, 0, 0),
(14, 'Bộ than cành liễu MONT MARTE ( set10 cây)', '', 0, 65000, 5, 'images/b3.jpg', 3, 1, 0),
(15, 'Bút màu viết thư pháp PENTEL Fude Touch( bút lẻ)', '', 0, 34000, 100, 'images/b4.jpg', 3, 0, 0),
(16, 'Bút màu dạ quang FABER CASTELL Pastel (bút lẻ)', '', 0, 24000, 100, 'images/b5.jpg', 3, 25, 0),
(17, 'Bộ bút chì chuyên nghiệp CRETACOLOR Ultimo (35 món)', '', 0, 1247000, 14, 'images/b6.jpg', 3, 4, 0),
(18, 'Bút màu vẽ mọi vật liệu SAKURA Pen Touch (bút lẻ)', '', 0, 30000, 49, 'images/b7.jpg', 3, 1, 0),
(19, 'Bút chì bấm PENTEL Graphgear 500 (đúc thép)', '', 0, 140000, 30, 'images/b8.jpg', 3, 3, 0),
(20, 'Bút sắt NIKKO Jappan lẻ (kèm 2 ngòi)', '', 0, 100000, 40, 'images/b9.jpg', 3, 3, 0),
(21, 'Bộ màu Nước Tuýp HOLBEIN Shigure 5ml (12 màu, bản giới hạn)', '', 0, 740000, 12, 'images/m2.jpg', 2, 2, 0),
(22, 'Màu vẽ Bột Nhũ PAUL RUBENS Aqua (hũ lẻ)', '', 0, 90000, 27, 'images/m3.jpg', 2, 0, 0),
(23, 'Màu nước WHITE NIGHTS Tuýp 10ml Lẻ (nhóm Pastel)', 'g', 0, 70000, 50, 'images/m4.jpg', 2, 0, 0),
(24, 'Bộ màu Nước Tuýp MARIE\'S 12ml (hộp giấy)', '', 0, 750000, 10, 'images/m5.jpg', 2, 0, 0),
(25, 'Bộ màu nước Nén SUPERIOR kèm cọ (hộp nhựa)', '', 0, 115000, 30, 'images/m6.jpg', 2, 0, 0),
(26, 'Bộ chì màu Khô MARCO Renoir (hộp thiếc)', '', 0, 440000, 18, 'images/m7.jpg', 2, 2, 0),
(27, 'Bộ màu vẽ Poster PENTEL 12 hũ (30ml)', '', 0, 400000, 20, 'images/m8.jpg', 2, 0, 0),
(28, 'Màu vẽ Acrylic MONT MARTE Nhũ tuýp lẻ (50ml)', '', 0, 37000, 50, 'images/m9.jpg', 2, 0, 0),
(29, 'Bộ cọ vẽ ART SECRET 24 cây (kèm túi vải)', '', 0, 530000, 20, 'images/c3.jpg', 1, 30, 0),
(30, 'Bộ cọ vẽ ART SECRET 12 cây (kèm ống xanh)', '', 0, 200000, 11, 'images/c4.jpg', 1, 2, 0),
(31, 'Cọ vẽ màu nước NABII Holic Snow lông Sóc (mix)', '', 0, 105000, 18, 'images/c5.jpg', 1, 6, 0),
(32, 'Bộ cọ vẽ MONT MARTE Acrylic Gallery 4 cây (HS0010)', '', 0, 40000, 16, 'images/c6.jpg', 1, 3, 0),
(33, 'Bộ cọ vẽ Acrylic ART SECRET 16 cây (kèm túi )', '', 0, 340000, 15, 'images/c7.jpg', 1, 2, 0),
(34, 'Bộ cọ vẽ màu Gouache HIMI Green (3 cây)', '', 0, 55000, 24, 'images/c8.jpg', 1, 15, 0),
(35, 'Cọ Mảng quét màu nước ART SECRET lông Sóc (3458)', '', 0, 184000, 7, 'images/c9.jpg', 1, 68, 0),
(36, 'Giấy vẽ yêu quái ám hại Đường Tăng', 'Chắc bền đẹp bảo hành 60 năm', 150000, 180000, 59, 'images/89371236c73b1f65462a.jpg', 4, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sodienthoai` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `matkhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loai` tinyint(4) NOT NULL DEFAULT '3',
  `trangthai` tinyint(4) NOT NULL DEFAULT '1',
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `email`, `sodienthoai`, `matkhau`, `hoten`, `loai`, `trangthai`, `hinhanh`) VALUES
(1, 'abc@abc.com', '0988994683', '900150983cd24fb0d6963f7d28e17f72', 'Quản trị ABC', 1, 1, '4.jpg'),
(2, 'def@abc.com', '0988994684', '900150983cd24fb0d6963f7d28e17f72', 'Nhân viên DEF', 2, 1, NULL),
(3, 'ghi@abc.com', '0988994685', '900150983cd24fb0d6963f7d28e17f72', 'Nhân viên GHI', 2, 1, NULL),
(4, 'kh1@gmail.com', '0988994686', '900150983cd24fb0d6963f7d28e17f72', 'Nguyễn Thị Thu An', 3, 1, NULL),
(5, 'kh2@gmail.com', '0988994687', '900150983cd24fb0d6963f7d28e17f72', 'Hồ Xuân Minh', 3, 1, NULL),
(6, 'aaa@abc.com', '1234567890', 'e807f1fcf82d132f9bb018ca6738a19f', 'AAA', 3, 1, NULL),
(7, 'bbb@abc.com', '1234567891', '0f7e44a922df352c05c5f73cb40ba115', 'BBB', 3, 1, NULL),
(8, 'ccc@abc.com', '1234567892', 'd893377c9d852e09874125b10a0e4f66', 'CCC', 3, 1, NULL),
(9, 'ddd@abc.com', '1234567893', '43042f668f07adfd174cb1823d4795e1', 'DDD', 3, 1, NULL),
(10, 'eee@abc.com', '1234567894', 'f66f4446648ae7ae56419eca43bf2b8a', 'EEE', 3, 0, NULL),
(11, 'vivi@gmail.com', '0364528586', '202cb962ac59075b964b07152d234b70', 'Lê Vis', 3, 1, NULL),
(19, 'dang@gmail.com', NULL, '202cb962ac59075b964b07152d234b70', 'Thanh Dang', 3, 1, NULL),
(20, 'vi@gmail.com', NULL, '202cb962ac59075b964b07152d234b70', 'vi ne', 3, 1, NULL),
(21, 'cogiaothao@gmail.com', NULL, '202cb962ac59075b964b07152d234b70', 'dang', 3, 1, NULL),
(22, 'con@con.com', NULL, '202cb962ac59075b964b07152d234b70', 'con', 3, 1, NULL),
(23, 'vivi@gmail.com', '0364528586', '0e45562a765adb3e7186129c1f117915', 'donal trum', 3, 1, NULL),
(24, 'dat@gmail.com', '', 'd41d8cd98f00b204e9800998ecf8427e', 'Đạt G', 3, 1, NULL),
(25, 'datg@gmail.com', '0364528587', '202cb962ac59075b964b07152d234b70', 'Đạt G', 3, 1, NULL),
(26, 'datg@gmail.com', '0364528587', '3043767198c988589b43f3db412e9816', 'Đạt G', 3, 1, NULL),
(27, 'datg@gmail.com', '0364528587', '3043767198c988589b43f3db412e9816', 'Đạt G', 3, 1, NULL),
(28, 'datg@gmail.com', '0364528587', '3043767198c988589b43f3db412e9816', 'Đạt G', 3, 1, NULL),
(29, 'datg@gmail.com', '0364528587', '3043767198c988589b43f3db412e9816', 'Đạt G', 3, 1, NULL),
(30, 'datg@gmail.com', '0364528587', '3043767198c988589b43f3db412e9816', 'Đạt G', 3, 1, NULL),
(31, 'datg@gmail.com', '0364528587', '3043767198c988589b43f3db412e9816', 'Đạt G', 3, 1, NULL),
(32, 'datg@gmail.com', '0364528587', '3043767198c988589b43f3db412e9816', 'Đạt G', 3, 1, NULL),
(33, 'datg@gmail.com', '0364528586', '0e45562a765adb3e7186129c1f117915', 'Đạt G', 3, 1, NULL),
(34, 'datg@gmail.com', '123456', 'e10adc3949ba59abbe56e057f20f883e', 'Đạt G', 3, 1, NULL),
(35, 'datg@gmail.com', '9897898797', '7d3a32b962822f3e9e41858377c44303', 'Đạt G', 3, 1, NULL),
(36, 'datg@gmail.com', '9897898797', '7d3a32b962822f3e9e41858377c44303', 'Đạt G', 3, 1, NULL),
(37, 'abc@abc.com', '1111111', '7fa8282ad93047a4d6fe6111c93b308a', 'Đạt G', 3, 1, NULL),
(38, 'datg@gmail.com', '123123', '4297f44b13955235245b2497399d7a93', 'Đạt G', 3, 1, NULL),
(39, 'levi@gmail.com', '1234567', 'fcea920f7412b5da7be0cf42b8c93759', 'Lê Vis', 3, 1, NULL),
(40, 'levi@gmail.com', '1234567', 'fcea920f7412b5da7be0cf42b8c93759', 'Lê Vis', 3, 1, NULL),
(41, 'levi@gmail.com', '1234567', 'fcea920f7412b5da7be0cf42b8c93759', 'Lê Vis', 3, 1, NULL),
(42, 'levi@gmail.com', '1234567', 'fcea920f7412b5da7be0cf42b8c93759', 'Lê Vis', 3, 1, NULL),
(43, 'levi@gmail.com', '1234567', 'fcea920f7412b5da7be0cf42b8c93759', 'Lê Vis', 3, 1, NULL),
(44, 'levi@gmail.com', '1234567', 'fcea920f7412b5da7be0cf42b8c93759', 'Lê Vis', 3, 1, NULL),
(45, 'levi@gmail.com', '1234567', 'fcea920f7412b5da7be0cf42b8c93759', 'Lê Vis', 3, 1, NULL),
(46, 'levi@gmail.com', '1234567', 'fcea920f7412b5da7be0cf42b8c93759', 'Lê Vis', 3, 1, NULL),
(47, 'levi@gmail.com', '12345', '827ccb0eea8a706c4c34a16891f84e7b', 'Lê Vis', 3, 1, NULL),
(48, 'eee@gmail.com', '123456', 'e10adc3949ba59abbe56e057f20f883e', 'vi ne', 3, 1, NULL),
(49, 'levi@gmail.com', '098764232', 'ee051592a63d67eacdecbc11911b7164', 'Lệ Quyên', 3, 1, NULL),
(50, 'nhom4@gmail.com', '0986136036', '202cb962ac59075b964b07152d234b70', 'Nhóm 4', 3, 1, NULL),
(51, 'levi@gmail.com', '0365473864', '03d0ec4cb23960f37824264547fd784e', 'Lê Vis', 3, 1, NULL),
(52, 'levi@gmail.com', '0365473864', '03d0ec4cb23960f37824264547fd784e', 'Lê Vis', 3, 1, NULL),
(53, 'levi@gmail.com', '2345678', 'b3275960d68fda9d831facc0426c3bbc', 'Lê Vis', 3, 1, NULL),
(54, 'levi@gmail.com', '2345678', 'b3275960d68fda9d831facc0426c3bbc', 'Lê Vis', 3, 1, NULL),
(55, 'levi@gmail.com', '2345678', 'b3275960d68fda9d831facc0426c3bbc', 'Lê Vis', 3, 1, NULL),
(56, 'nhom4@gmail.com', '02982734', '97120df887239fb68016446d4746f119', 'nhom4', 3, 1, NULL),
(57, 'nhom4@gmail.com', '02982734', '97120df887239fb68016446d4746f119', 'nhom4', 3, 1, NULL),
(58, 'nhom4@gmail.com', '02982734', '97120df887239fb68016446d4746f119', 'nhom4', 3, 1, NULL),
(59, 'nhom4@gmail.com', '02982734', '97120df887239fb68016446d4746f119', 'nhom4', 3, 1, NULL),
(60, 'dang@gmail.com', '11111111', '1bbd886460827015e5d605ed44252251', 'dang', 3, 1, NULL),
(61, 'dang@gmail.com', '11111111', '1bbd886460827015e5d605ed44252251', 'dang', 3, 1, NULL),
(62, 'dang@gmail.com', '11111111', '1bbd886460827015e5d605ed44252251', 'dang', 3, 1, NULL),
(63, 'dang@gmail.com', '11111111', '1bbd886460827015e5d605ed44252251', 'dang', 3, 1, NULL),
(64, 'dang@gmail.com', '11111111', '1bbd886460827015e5d605ed44252251', 'dang', 3, 1, NULL),
(65, 'dang@gmail.com', '11111111', '1bbd886460827015e5d605ed44252251', 'dang', 3, 1, NULL),
(66, 'dang@gmail.com', '11111111', '1bbd886460827015e5d605ed44252251', 'dang', 3, 1, NULL),
(67, 'assssbc@abc.com', '111', '698d51a19d8a121ce581499d7b701668', 'ssssssssssssssss', 3, 1, NULL),
(68, 'assssbc@abc.com', '111', '698d51a19d8a121ce581499d7b701668', 'ssssssssssssssss', 3, 1, NULL),
(69, 'ab1pppc@abc.com', '9798979', '21033d648d83a11022ce7ef9370196f1', 'ôppo', 3, 1, NULL),
(70, 'abc@abc.com', '98908989', '043d1a18a0e1572dcf0a9b7a2fccacd6', 'Lê Vis', 3, 1, NULL),
(71, 'abc@abc.com', '98908989', '043d1a18a0e1572dcf0a9b7a2fccacd6', 'Lê Vis', 3, 1, NULL),
(72, 'abc@abc.com', '98908989', '043d1a18a0e1572dcf0a9b7a2fccacd6', 'Lê Vis', 3, 1, NULL),
(73, 'abc@abc.com', '98908989', '043d1a18a0e1572dcf0a9b7a2fccacd6', 'Lê Vis', 3, 1, NULL),
(74, 'nhom4@gmail.com', '0364537652', '66692f29b992ea8d8fdc15e661d95ee0', 'Nhóm 4 chăm chỉ', 3, 1, NULL),
(75, 'levi@gmail.com', '0987648', '4ef2f74383e4474586af600273af026e', 'Lệ vĩ', 3, 1, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `diachi`
--
ALTER TABLE `diachi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nguoidung_id` (`nguoidung_id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nguoidung_id` (`nguoidung_id`),
  ADD KEY `diachi_id` (`diachi_id`);

--
-- Chỉ mục cho bảng `donhangct`
--
ALTER TABLE `donhangct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donhang_id` (`donhang_id`),
  ADD KEY `mathang_id` (`mathang_id`);

--
-- Chỉ mục cho bảng `mathang`
--
ALTER TABLE `mathang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `danhmuc_id` (`danhmuc_id`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `diachi`
--
ALTER TABLE `diachi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `donhangct`
--
ALTER TABLE `donhangct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT cho bảng `mathang`
--
ALTER TABLE `mathang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `diachi`
--
ALTER TABLE `diachi`
  ADD CONSTRAINT `diachi_ibfk_1` FOREIGN KEY (`nguoidung_id`) REFERENCES `nguoidung` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`nguoidung_id`) REFERENCES `nguoidung` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhangct`
--
ALTER TABLE `donhangct`
  ADD CONSTRAINT `donhangct_ibfk_1` FOREIGN KEY (`donhang_id`) REFERENCES `donhang` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `donhangct_ibfk_2` FOREIGN KEY (`mathang_id`) REFERENCES `mathang` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `mathang`
--
ALTER TABLE `mathang`
  ADD CONSTRAINT `mathang_ibfk_1` FOREIGN KEY (`danhmuc_id`) REFERENCES `danhmuc` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
