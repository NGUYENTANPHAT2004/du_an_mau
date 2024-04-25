-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 09, 2023 lúc 08:40 PM
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
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `parent_id`) VALUES
(46, 'Điện thoại cũ', 0),
(47, 'Samsung', 0),
(48, 'S Series', 47),
(49, 'Galaxy Note', 47),
(50, 'Galaxy A Series', 47),
(51, 'Galaxy M Series', 47);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `content` varchar(500) NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_deleted` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `product_id`, `content`, `comment_date`, `is_deleted`) VALUES
(3, 27, 84, 'vãi cả l kìa', '2023-11-24 19:38:04', 1),
(4, 27, 86, 'vãi cả l tóc tai', '2023-11-24 19:42:11', 1),
(5, 27, 86, 'vãi cả l tóc tai nhìn', '2023-11-24 19:43:06', 1),
(6, 27, 86, 'ngứa mắt dcm', '2023-11-24 19:44:05', 1),
(7, 27, 86, 'vãi cả l tóc tai', '2023-11-24 19:42:11', 1),
(8, 27, 86, 'vãi cả l tóc tai nhìn', '2023-11-24 19:43:06', 1),
(9, 27, 86, 'ngứa mắt dcm', '2023-11-24 19:44:05', 1),
(10, 27, 86, 'ngứa mắt dcm', '2023-11-24 19:44:05', 1),
(11, 27, 86, 'hay', '2023-11-24 21:38:57', 1),
(12, 27, 86, 'vcl', '2023-11-25 03:51:43', 1),
(13, 27, 88, 'sp như cc', '2023-11-25 09:24:08', 1),
(14, 27, 96, 'vcl', '2023-11-26 12:45:41', 1),
(15, 27, 99, 'đấm vỡ mồm', '2023-12-02 04:05:50', 1),
(16, 27, 102, 'xvvcv', '2023-12-07 03:32:44', 1),
(17, 27, 106, 'sản phẩm rất đẹp', '2023-12-09 09:37:04', 0),
(18, 27, 107, 'chán', '2023-12-08 11:55:18', 1),
(19, 27, 107, 'P', '2023-12-09 10:45:54', 1),
(20, 27, 107, 'P', '2023-12-09 10:45:56', 1),
(21, 27, 107, 'P', '2023-12-09 10:45:59', 1),
(22, 27, 107, 'P', '2023-12-09 10:46:03', 1),
(23, 27, 107, 'P', '2023-12-09 10:46:06', 1),
(24, 27, 107, 'P', '2023-12-09 10:46:09', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `details`
--

CREATE TABLE `details` (
  `details_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantily` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `details`
--

INSERT INTO `details` (`details_id`, `order_id`, `product_id`, `quantily`, `price`) VALUES
(12, 16, 100, 7, 2147483647),
(13, 16, 103, 5, 2147483647),
(14, 17, 100, 7, 2147483647),
(15, 17, 103, 5, 2147483647),
(16, 17, 97, 1, 2147483647),
(17, 18, 100, 7, 2147483647),
(18, 18, 103, 5, 2147483647),
(19, 18, 97, 1, 2147483647),
(20, 19, 97, 6, 2147483647),
(21, 20, 97, 6, 2147483647),
(22, 21, 97, 5, 2147483647),
(23, 22, 105, 1, 1000000),
(24, 23, 97, 1, 2147483647),
(25, 24, 101, 6, 200000),
(26, 25, 102, 3, 1000000),
(27, 25, 105, 12, 1000000),
(28, 26, 102, 7, 1000000),
(29, 26, 105, 3, 1000000),
(30, 27, 102, 16, 1000000),
(31, 27, 105, 8, 1000000),
(32, 27, 101, 5, 200000),
(33, 28, 102, 38, 1000000),
(34, 28, 101, 1, 200000),
(35, 29, 101, 15, 200000),
(36, 29, 102, 3, 1000000),
(37, 30, 89, 1, 10),
(38, 31, 102, 9, 1000000),
(39, 31, 89, 5, 10),
(40, 31, 101, 11, 200000),
(41, 32, 101, 11, 200000),
(42, 33, 102, 3, 1000000),
(43, 34, 99, 6, 2147483647),
(44, 35, 102, 21, 1000000),
(45, 36, 102, 12, 1000000),
(46, 36, 89, 1, 10),
(47, 37, 89, 5, 10),
(48, 38, 105, 5, 1000000),
(49, 39, 104, 1, 2147483647),
(50, 40, 102, 5, 1000000),
(51, 41, 106, 9, 32850000),
(52, 42, 107, 5, 25990000),
(53, 43, 107, 5, 25990000),
(54, 44, 111, 5, 28990000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feelback`
--

CREATE TABLE `feelback` (
  `feel_id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `galery`
--

CREATE TABLE `galery` (
  `galery_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `galery`
--

INSERT INTO `galery` (`galery_id`, `product_id`, `image_url`) VALUES
(128, 96, 'upload/1 (13).webp'),
(129, 96, 'upload/8.jpg.webp'),
(130, 96, 'upload/9.jpg.webp'),
(131, 96, 'upload/10.jpg.webp'),
(132, 96, 'upload/Screenshot (8).png'),
(133, 96, 'upload/Screenshot (9).png'),
(134, 96, 'upload/Screenshot (8).png'),
(135, 96, 'upload/Screenshot (9).png'),
(136, 97, 'upload/Screenshot (23).png'),
(137, 99, 'upload/10.jpg.webp'),
(138, 101, 'upload/1 (11).webp'),
(139, 101, 'upload/1 (12).webp'),
(140, 101, 'upload/8.jpg.webp'),
(141, 101, 'upload/9.jpg.webp'),
(142, 102, 'upload/1 (11).webp'),
(143, 102, 'upload/1 (12).webp'),
(144, 102, 'upload/1 (13).webp'),
(145, 103, 'upload/6.jpg.webp'),
(146, 103, 'upload/7.jpg.webp'),
(147, 103, 'upload/Screenshot (6).png'),
(148, 103, 'upload/Screenshot (7).png'),
(149, 104, 'upload/Screenshot (12).png'),
(150, 104, 'upload/Screenshot (13).png'),
(151, 104, 'upload/Screenshot (14).png'),
(152, 104, 'upload/Screenshot (24).png'),
(153, 104, 'upload/Screenshot (25).png'),
(154, 104, 'upload/Screenshot (26).png'),
(161, 105, 'upload/8.jpg.webp'),
(162, 105, 'upload/9.jpg.webp'),
(163, 105, 'upload/10.jpg.webp'),
(165, 105, 'upload/Screenshot (1).png'),
(166, 105, 'upload/Screenshot (2).png'),
(167, 105, 'upload/Screenshot (8).png'),
(168, 105, 'upload/Screenshot (9).png'),
(169, 105, 'upload/Screenshot (10).png'),
(170, 105, 'upload/Screenshot (11).png'),
(171, 105, 'upload/Screenshot (12).png'),
(172, 105, 'upload/Screenshot (13).png'),
(173, 105, 'upload/Screenshot (19).png'),
(174, 106, 'upload/8-290923-150046.jpg'),
(175, 106, 'upload/258521537.jpeg'),
(178, 107, 'upload/8-290923-150046.jpg'),
(179, 107, 'upload/258521537.jpeg'),
(180, 108, 'upload/tải xuống (1).jpg'),
(181, 108, 'upload/tải xuống.jpg'),
(182, 130, 'upload/75_42618_galaxy_a32_white_ha3.jpg'),
(183, 131, 'upload/samsung-galaxy-a82-5g-cty.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `address_shipping` varchar(255) NOT NULL,
  `is_on_order` tinyint(4) NOT NULL DEFAULT 0,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `text_area` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `total_money` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`order_id`, `address_shipping`, `is_on_order`, `order_date`, `user_id`, `name`, `phone_number`, `text_area`, `email`, `total_money`) VALUES
(17, 'Thanh hóa', 4, '2023-12-08 17:26:55', 27, 'Nguyễn Tấn Phát', 901716455, 'không', 'tttp1704@gmail.com', 2147483647),
(19, 'gghh', 5, '2023-12-05 04:03:40', 27, 'Nguyễn Tấn Phát', 987654321, 'kko', 'tttp1704@gmail.com', 2147483647),
(20, 'Thanh hóa', 3, '2023-12-05 04:07:52', 27, 'Nguyễn Tấn Phát', 901716455, 'ko', 'tttp1704@gmail.com', 2147483647),
(21, 'Thanh hóa', 5, '2023-12-05 04:03:40', 27, 'Nguyễn Tấn Phát', 987654321, 'ko', 'tttp1704@gmail.com', 2147483647),
(22, 'Thanh hóa', 5, '2023-12-05 04:03:40', 27, 'Nguyễn Tấn Phát', 901716455, 'ko', 'tttp1704@gmail.com', 1040000),
(23, 'gghh', 5, '2023-12-05 04:03:40', 27, 'Nguyễn Tấn Phát', 901716455, 'ko', 'tttp1704@gmail.com', 2147483647),
(24, 'gghh', 5, '2023-12-05 04:03:40', 27, 'Nguyễn Tấn Phát', 987654321, 'ko', 'tttp1704@gmail.com', 1240000),
(25, 'Thanh hóa', 5, '2023-12-05 04:03:40', 27, 'Nguyễn Tấn Phát', 901716455, 'ko', 'tttp1704@gmail.com', 17040000),
(26, 'gghh', 5, '2023-12-05 04:03:40', 27, 'Nguyễn Tấn Phát', 987654321, 'ko', 'tttp1704@gmail.com', 10040000),
(27, 'Thanh hóa', 5, '2023-12-05 04:03:40', 27, 'Nguyễn Tấn Phát', 901716455, 'ko', 'tttp1704@gmail.com', 25040000),
(28, 'Thanh hóa', 5, '2023-12-05 04:03:40', 27, 'Nguyễn Tấn Phát', 987654321, 'ko', 'tttp1704@gmail.com', 38240000),
(29, 'Thanh hóa', 5, '2023-12-05 04:03:40', 27, 'Nguyễn Tấn Phát', 987654321, 'ko', 'tttp1704@gmail.com', 6040000),
(30, 'dssdsd', 5, '2023-12-05 04:03:40', 0, 'sdsdsd', 0, 'ko', 'tttp1704@gmail.com', 40010),
(31, 'dssdsd', 5, '2023-12-05 04:03:40', 27, 'Nguyễn Tấn Phát', 0, 'ko', 'tttp1704@gmail.com', 11240050),
(32, 'dssdsd', 5, '2023-12-05 04:03:40', 27, 'Nguyễn Tấn Phát', 0, 'ko', 'tttp1704@gmail.com', 2240000),
(33, 'dssdsd', 5, '2023-12-05 04:03:40', 27, 'Nguyễn Tấn Phát', 0, 'ko', 'tttp1704@gmail.com', 3040000),
(34, 'dssdsd', 5, '2023-12-05 04:03:40', 27, 'Nguyễn Tấn Phát', 0, 'ko', 'tttp1704@gmail.com', 2147483647),
(35, 'dssdsd', 5, '2023-12-05 04:03:40', 27, 'Nguyễn Tấn Phát', 0, 'ko', 'tttp1704@gmail.com', 21040000),
(36, 'dssdsd', 5, '2023-12-05 04:03:40', 27, 'Nguyễn Tấn Phát', 0, 'ko', 'tttp1704@gmail.com', 10440130),
(37, 'dssdsd', 5, '2023-12-05 04:03:40', 27, 'Nguyễn Tấn Phát', 0, 'ko', 'tttp1704@gmail.com', 2040050),
(38, 'dssdsd', 5, '2023-12-05 04:03:40', 27, 'Nguyễn Tấn Phát', 0, 'ko', 'tttp1704@gmail.com', 5040000),
(39, 'dssdsd', 5, '2023-12-05 04:03:40', 27, 'Nguyễn Tấn Phát', 0, 'ko', 'tttp1704@gmail.com', 2147483647),
(40, 'dssdsd', 5, '2023-12-05 04:03:40', 0, 'phat123', 0, 'ko có', 'tttp1704@gmail.com', 5040000),
(41, 'Thanh hóa', 0, '2023-12-07 12:32:13', 27, 'Nguyễn Tấn Phát', 901716455, 'không', 'tttp1704@gmail.com', 295690000),
(42, 'dssdsd', 0, '2023-12-08 11:03:47', 27, 'Nguyễn Tấn Phát', 0, 'ko', 'tttp1704@gmail.com', 129990000),
(43, 'dssdsd', 0, '2023-12-08 11:53:44', 0, 'phat123', 0, 'ko', 'tttp1704@gmail.com', 129990000),
(44, 'Hà Trung Thanh hóa', 0, '2023-12-08 17:45:00', 0, 'admin', 813783419, 'giao về venus', 'tttp1704m@gmail.com', 144990000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `descritipion` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `price_old` int(255) NOT NULL,
  `is_on_sale` tinyint(4) NOT NULL DEFAULT 0,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `descritipion`, `price`, `category_id`, `price_old`, `is_on_sale`, `avatar`) VALUES
(106, '  iPhone 15 Pro Max - Hàng Chính Hãng VN/A', '🔥 QUÀ TẶNG ĐI KÈM LÊN ĐẾN 1.000.000đ KHI MUA iPhone CŨ🔥 :\r\n✅ Dán cường lực trọn đời trị giá 200.000đ\r\n\r\n✅ Tặng ốp bảo vệ trị giá 100.000 đ.\r\n\r\n✅ Tặng củ, cáp sạc cao cấp trị giá 350.000đ.\r\n\r\n✅ Tặng tai nghe Bluetooth trị giá 350.000đ.\r\n\r\n💥 Cam kết 100% ch', 32850000, 49, 0, 0, 'upload/iphone-15-pro-max-blue-thumbnew-200x200.webp'),
(107, '14PROMAX 128GB VNA', 'Cấu hình Điện thoại iPhone 14 Pro Max 128GB\r\n\r\nMàn hình:\r\n\r\nOLED6.7\"Super Retina XDR\r\nHệ điều hành:\r\n\r\niOS 16\r\nCamera sau:\r\n\r\nChính 48 MP & Phụ 12 MP, 12 MP\r\nCamera trước:\r\n\r\n12 MP\r\nChip:\r\n\r\nApple A16 Bionic\r\nRAM:\r\n\r\n6 GB\r\nDung lượng lưu trữ:\r\n\r\n128 GB\r\nS', 25990000, 52, 0, 0, 'upload/c296224f-0a8b-42cb-a91b-485632237ddf14PROMAX_VNA.jpg'),
(108, '14PROMAX 256GB VNA', 'Màn hình:\r\n\r\nOLED6.7\"Super Retina XDR\r\nHệ điều hành:\r\n\r\niOS 16\r\nCamera sau:\r\n\r\nChính 48 MP & Phụ 12 MP, 12 MP\r\nCamera trước:\r\n\r\n12 MP\r\nChip:\r\n\r\nApple A16 Bionic\r\nRAM:\r\n\r\n6 GB\r\nDung lượng lưu trữ:\r\n\r\n256 GB\r\nSIM:\r\n\r\n1 Nano SIM & 1 eSIMHỗ trợ 5G\r\nPin, Sạc:\r', 28990000, 52, 0, 0, 'upload/c7e5b92b-1289-4b5b-8354-f8788f7179f314PROMAX_VNA.jpg'),
(109, '  iPhone 15 Pro Max - Hàng Chính Hãng VN/A', '🔥 QUÀ TẶNG ĐI KÈM LÊN ĐẾN 1.000.000đ KHI MUA iPhone CŨ🔥 :\r\n✅ Dán cường lực trọn đời trị giá 200.000đ\r\n\r\n✅ Tặng ốp bảo vệ trị giá 100.000 đ.\r\n\r\n✅ Tặng củ, cáp sạc cao cấp trị giá 350.000đ.\r\n\r\n✅ Tặng tai nghe Bluetooth trị giá 350.000đ.\r\n\r\n💥 Cam kết 100% ch', 32850000, 52, 0, 0, 'upload/iphone-15-pro-max-blue-thumbnew-200x200.webp'),
(110, '14PROMAX 128GB VNA', 'Cấu hình Điện thoại iPhone 14 Pro Max 128GB\r\n\r\nMàn hình:\r\n\r\nOLED6.7\"Super Retina XDR\r\nHệ điều hành:\r\n\r\niOS 16\r\nCamera sau:\r\n\r\nChính 48 MP & Phụ 12 MP, 12 MP\r\nCamera trước:\r\n\r\n12 MP\r\nChip:\r\n\r\nApple A16 Bionic\r\nRAM:\r\n\r\n6 GB\r\nDung lượng lưu trữ:\r\n\r\n128 GB\r\nS', 25990000, 52, 0, 0, 'upload/c296224f-0a8b-42cb-a91b-485632237ddf14PROMAX_VNA.jpg'),
(111, '14PROMAX 256GB VNA', 'Màn hình:\r\n\r\nOLED6.7\"Super Retina XDR\r\nHệ điều hành:\r\n\r\niOS 16\r\nCamera sau:\r\n\r\nChính 48 MP & Phụ 12 MP, 12 MP\r\nCamera trước:\r\n\r\n12 MP\r\nChip:\r\n\r\nApple A16 Bionic\r\nRAM:\r\n\r\n6 GB\r\nDung lượng lưu trữ:\r\n\r\n256 GB\r\nSIM:\r\n\r\n1 Nano SIM & 1 eSIMHỗ trợ 5G\r\nPin, Sạc:\r', 28990000, 52, 0, 0, 'upload/c7e5b92b-1289-4b5b-8354-f8788f7179f314PROMAX_VNA.jpg'),
(112, '  iPhone 15 Pro Max - Hàng Chính Hãng VN/A', '🔥 QUÀ TẶNG ĐI KÈM LÊN ĐẾN 1.000.000đ KHI MUA iPhone CŨ🔥 :\r\n✅ Dán cường lực trọn đời trị giá 200.000đ\r\n\r\n✅ Tặng ốp bảo vệ trị giá 100.000 đ.\r\n\r\n✅ Tặng củ, cáp sạc cao cấp trị giá 350.000đ.\r\n\r\n✅ Tặng tai nghe Bluetooth trị giá 350.000đ.\r\n\r\n💥 Cam kết 100% ch', 32850000, 52, 0, 0, 'upload/iphone-15-pro-max-blue-thumbnew-200x200.webp'),
(113, '14PROMAX 128GB VNA', 'Cấu hình Điện thoại iPhone 14 Pro Max 128GB\r\n\r\nMàn hình:\r\n\r\nOLED6.7\"Super Retina XDR\r\nHệ điều hành:\r\n\r\niOS 16\r\nCamera sau:\r\n\r\nChính 48 MP & Phụ 12 MP, 12 MP\r\nCamera trước:\r\n\r\n12 MP\r\nChip:\r\n\r\nApple A16 Bionic\r\nRAM:\r\n\r\n6 GB\r\nDung lượng lưu trữ:\r\n\r\n128 GB\r\nS', 25990000, 52, 0, 0, 'upload/c296224f-0a8b-42cb-a91b-485632237ddf14PROMAX_VNA.jpg'),
(114, '14PROMAX 256GB VNA', 'Màn hình:\r\n\r\nOLED6.7\"Super Retina XDR\r\nHệ điều hành:\r\n\r\niOS 16\r\nCamera sau:\r\n\r\nChính 48 MP & Phụ 12 MP, 12 MP\r\nCamera trước:\r\n\r\n12 MP\r\nChip:\r\n\r\nApple A16 Bionic\r\nRAM:\r\n\r\n6 GB\r\nDung lượng lưu trữ:\r\n\r\n256 GB\r\nSIM:\r\n\r\n1 Nano SIM & 1 eSIMHỗ trợ 5G\r\nPin, Sạc:\r', 28990000, 52, 0, 0, 'upload/c7e5b92b-1289-4b5b-8354-f8788f7179f314PROMAX_VNA.jpg'),
(115, '  iPhone 15 Pro Max - Hàng Chính Hãng VN/A', '🔥 QUÀ TẶNG ĐI KÈM LÊN ĐẾN 1.000.000đ KHI MUA iPhone CŨ🔥 :\r\n✅ Dán cường lực trọn đời trị giá 200.000đ\r\n\r\n✅ Tặng ốp bảo vệ trị giá 100.000 đ.\r\n\r\n✅ Tặng củ, cáp sạc cao cấp trị giá 350.000đ.\r\n\r\n✅ Tặng tai nghe Bluetooth trị giá 350.000đ.\r\n\r\n💥 Cam kết 100% ch', 32850000, 52, 0, 0, 'upload/iphone-15-pro-max-blue-thumbnew-200x200.webp'),
(116, '14PROMAX 128GB VNA', 'Cấu hình Điện thoại iPhone 14 Pro Max 128GB\r\n\r\nMàn hình:\r\n\r\nOLED6.7\"Super Retina XDR\r\nHệ điều hành:\r\n\r\niOS 16\r\nCamera sau:\r\n\r\nChính 48 MP & Phụ 12 MP, 12 MP\r\nCamera trước:\r\n\r\n12 MP\r\nChip:\r\n\r\nApple A16 Bionic\r\nRAM:\r\n\r\n6 GB\r\nDung lượng lưu trữ:\r\n\r\n128 GB\r\nS', 25990000, 52, 0, 0, 'upload/c296224f-0a8b-42cb-a91b-485632237ddf14PROMAX_VNA.jpg'),
(117, '14PROMAX 256GB VNA', 'Màn hình:\r\n\r\nOLED6.7\"Super Retina XDR\r\nHệ điều hành:\r\n\r\niOS 16\r\nCamera sau:\r\n\r\nChính 48 MP & Phụ 12 MP, 12 MP\r\nCamera trước:\r\n\r\n12 MP\r\nChip:\r\n\r\nApple A16 Bionic\r\nRAM:\r\n\r\n6 GB\r\nDung lượng lưu trữ:\r\n\r\n256 GB\r\nSIM:\r\n\r\n1 Nano SIM & 1 eSIMHỗ trợ 5G\r\nPin, Sạc:\r', 28990000, 52, 0, 0, 'upload/c7e5b92b-1289-4b5b-8354-f8788f7179f314PROMAX_VNA.jpg'),
(118, '  iPhone 15 Pro Max - Hàng Chính Hãng VN/A', '🔥 QUÀ TẶNG ĐI KÈM LÊN ĐẾN 1.000.000đ KHI MUA iPhone CŨ🔥 :\r\n✅ Dán cường lực trọn đời trị giá 200.000đ\r\n\r\n✅ Tặng ốp bảo vệ trị giá 100.000 đ.\r\n\r\n✅ Tặng củ, cáp sạc cao cấp trị giá 350.000đ.\r\n\r\n✅ Tặng tai nghe Bluetooth trị giá 350.000đ.\r\n\r\n💥 Cam kết 100% ch', 32850000, 52, 0, 0, 'upload/iphone-15-pro-max-blue-thumbnew-200x200.webp'),
(119, '14PROMAX 128GB VNA', 'Cấu hình Điện thoại iPhone 14 Pro Max 128GB\r\n\r\nMàn hình:\r\n\r\nOLED6.7\"Super Retina XDR\r\nHệ điều hành:\r\n\r\niOS 16\r\nCamera sau:\r\n\r\nChính 48 MP & Phụ 12 MP, 12 MP\r\nCamera trước:\r\n\r\n12 MP\r\nChip:\r\n\r\nApple A16 Bionic\r\nRAM:\r\n\r\n6 GB\r\nDung lượng lưu trữ:\r\n\r\n128 GB\r\nS', 25990000, 52, 0, 0, 'upload/c296224f-0a8b-42cb-a91b-485632237ddf14PROMAX_VNA.jpg'),
(120, '14PROMAX 256GB VNA', 'Màn hình:\r\n\r\nOLED6.7\"Super Retina XDR\r\nHệ điều hành:\r\n\r\niOS 16\r\nCamera sau:\r\n\r\nChính 48 MP & Phụ 12 MP, 12 MP\r\nCamera trước:\r\n\r\n12 MP\r\nChip:\r\n\r\nApple A16 Bionic\r\nRAM:\r\n\r\n6 GB\r\nDung lượng lưu trữ:\r\n\r\n256 GB\r\nSIM:\r\n\r\n1 Nano SIM & 1 eSIMHỗ trợ 5G\r\nPin, Sạc:\r', 28990000, 52, 0, 0, 'upload/c7e5b92b-1289-4b5b-8354-f8788f7179f314PROMAX_VNA.jpg'),
(121, '  iPhone 15 Pro Max - Hàng Chính Hãng VN/A', '🔥 QUÀ TẶNG ĐI KÈM LÊN ĐẾN 1.000.000đ KHI MUA iPhone CŨ🔥 :\r\n✅ Dán cường lực trọn đời trị giá 200.000đ\r\n\r\n✅ Tặng ốp bảo vệ trị giá 100.000 đ.\r\n\r\n✅ Tặng củ, cáp sạc cao cấp trị giá 350.000đ.\r\n\r\n✅ Tặng tai nghe Bluetooth trị giá 350.000đ.\r\n\r\n💥 Cam kết 100% ch', 32850000, 52, 0, 0, 'upload/iphone-15-pro-max-blue-thumbnew-200x200.webp'),
(122, '14PROMAX 128GB VNA', 'Cấu hình Điện thoại iPhone 14 Pro Max 128GB\r\n\r\nMàn hình:\r\n\r\nOLED6.7\"Super Retina XDR\r\nHệ điều hành:\r\n\r\niOS 16\r\nCamera sau:\r\n\r\nChính 48 MP & Phụ 12 MP, 12 MP\r\nCamera trước:\r\n\r\n12 MP\r\nChip:\r\n\r\nApple A16 Bionic\r\nRAM:\r\n\r\n6 GB\r\nDung lượng lưu trữ:\r\n\r\n128 GB\r\nS', 25990000, 52, 0, 0, 'upload/c296224f-0a8b-42cb-a91b-485632237ddf14PROMAX_VNA.jpg'),
(123, '14PROMAX 256GB VNA', 'Màn hình:\r\n\r\nOLED6.7\"Super Retina XDR\r\nHệ điều hành:\r\n\r\niOS 16\r\nCamera sau:\r\n\r\nChính 48 MP & Phụ 12 MP, 12 MP\r\nCamera trước:\r\n\r\n12 MP\r\nChip:\r\n\r\nApple A16 Bionic\r\nRAM:\r\n\r\n6 GB\r\nDung lượng lưu trữ:\r\n\r\n256 GB\r\nSIM:\r\n\r\n1 Nano SIM & 1 eSIMHỗ trợ 5G\r\nPin, Sạc:\r', 28990000, 52, 0, 0, 'upload/c7e5b92b-1289-4b5b-8354-f8788f7179f314PROMAX_VNA.jpg'),
(124, '  iPhone 15 Pro Max - Hàng Chính Hãng VN/A', '🔥 QUÀ TẶNG ĐI KÈM LÊN ĐẾN 1.000.000đ KHI MUA iPhone CŨ🔥 :\r\n✅ Dán cường lực trọn đời trị giá 200.000đ\r\n\r\n✅ Tặng ốp bảo vệ trị giá 100.000 đ.\r\n\r\n✅ Tặng củ, cáp sạc cao cấp trị giá 350.000đ.\r\n\r\n✅ Tặng tai nghe Bluetooth trị giá 350.000đ.\r\n\r\n💥 Cam kết 100% ch', 32850000, 51, 0, 0, 'upload/iphone-15-pro-max-blue-thumbnew-200x200.webp'),
(125, '14PROMAX 128GB VNA', 'Cấu hình Điện thoại iPhone 14 Pro Max 128GB\r\n\r\nMàn hình:\r\n\r\nOLED6.7\"Super Retina XDR\r\nHệ điều hành:\r\n\r\niOS 16\r\nCamera sau:\r\n\r\nChính 48 MP & Phụ 12 MP, 12 MP\r\nCamera trước:\r\n\r\n12 MP\r\nChip:\r\n\r\nApple A16 Bionic\r\nRAM:\r\n\r\n6 GB\r\nDung lượng lưu trữ:\r\n\r\n128 GB\r\nS', 25990000, 52, 0, 0, 'upload/c296224f-0a8b-42cb-a91b-485632237ddf14PROMAX_VNA.jpg'),
(126, '14PROMAX 256GB VNA', 'Màn hình:\r\n\r\nOLED6.7\"Super Retina XDR\r\nHệ điều hành:\r\n\r\niOS 16\r\nCamera sau:\r\n\r\nChính 48 MP & Phụ 12 MP, 12 MP\r\nCamera trước:\r\n\r\n12 MP\r\nChip:\r\n\r\nApple A16 Bionic\r\nRAM:\r\n\r\n6 GB\r\nDung lượng lưu trữ:\r\n\r\n256 GB\r\nSIM:\r\n\r\n1 Nano SIM & 1 eSIMHỗ trợ 5G\r\nPin, Sạc:\r', 28990000, 52, 0, 0, 'upload/c7e5b92b-1289-4b5b-8354-f8788f7179f314PROMAX_VNA.jpg'),
(127, '  iPhone 15 Pro Max - Hàng Chính Hãng VN/A', '🔥 QUÀ TẶNG ĐI KÈM LÊN ĐẾN 1.000.000đ KHI MUA iPhone CŨ🔥 :\r\n✅ Dán cường lực trọn đời trị giá 200.000đ\r\n\r\n✅ Tặng ốp bảo vệ trị giá 100.000 đ.\r\n\r\n✅ Tặng củ, cáp sạc cao cấp trị giá 350.000đ.\r\n\r\n✅ Tặng tai nghe Bluetooth trị giá 350.000đ.\r\n\r\n💥 Cam kết 100% ch', 32850000, 52, 0, 0, 'upload/iphone-15-pro-max-blue-thumbnew-200x200.webp'),
(128, '14PROMAX 128GB VNA', 'Cấu hình Điện thoại iPhone 14 Pro Max 128GB\r\n\r\nMàn hình:\r\n\r\nOLED6.7\"Super Retina XDR\r\nHệ điều hành:\r\n\r\niOS 16\r\nCamera sau:\r\n\r\nChính 48 MP & Phụ 12 MP, 12 MP\r\nCamera trước:\r\n\r\n12 MP\r\nChip:\r\n\r\nApple A16 Bionic\r\nRAM:\r\n\r\n6 GB\r\nDung lượng lưu trữ:\r\n\r\n128 GB\r\nS', 25990000, 52, 0, 0, 'upload/c296224f-0a8b-42cb-a91b-485632237ddf14PROMAX_VNA.jpg'),
(129, '14PROMAX 256GB VNA', 'Màn hình:\r\n\r\nOLED6.7\"Super Retina XDR\r\nHệ điều hành:\r\n\r\niOS 16\r\nCamera sau:\r\n\r\nChính 48 MP & Phụ 12 MP, 12 MP\r\nCamera trước:\r\n\r\n12 MP\r\nChip:\r\n\r\nApple A16 Bionic\r\nRAM:\r\n\r\n6 GB\r\nDung lượng lưu trữ:\r\n\r\n256 GB\r\nSIM:\r\n\r\n1 Nano SIM & 1 eSIMHỗ trợ 5G\r\nPin, Sạc:\r', 28990000, 52, 0, 0, 'upload/c7e5b92b-1289-4b5b-8354-f8788f7179f314PROMAX_VNA.jpg'),
(130, 'A32-TRẮNG--300x300', 'Màn hình 6.4\" Super AMOLED Full HD+ (1080 x 2400 Pixels)\r\nHỗ trợ Kính cường lực Corning Gorilla Glass 5\r\nCamera sau \"Độ phân giải: Chính 64 MP & Phụ 8 MP, 5MP, 5MP\r\nFullHD 1080p@120fpsFullHD 1080p@30fps4K 2160p@30fps\"\r\nCamera trước \"Độ phân giải: 20 M', 50000000, 46, 10, 1, 'upload/75_42618_galaxy_a32_white_ha3.jpg'),
(131, 'A82-5G-DEN', 'Hệ điều hành: Android 11\r\nĐộ phân giải: Full HD+ (1080 x 2340 Pixels)\r\nMàn hình rộng: 6.9\"\r\nCamera sau: Chính 48 MP & Phụ 8 MP, 5 MP, 2 MP\r\nCamera trước: 32 MP\r\nRAM: 6 GB\r\nDung lượng pin: 5000mAh', 10000000, 50, 1000000, 1, 'upload/samsung-galaxy-a82-5g-cty.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `rating_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `rating`
--

INSERT INTO `rating` (`rating_id`, `user_id`, `value`, `rating_date`, `order_id`) VALUES
(4, 27, 4, '2023-12-08 15:28:41', 17),
(5, 27, 1, '2023-12-08 15:39:26', 17),
(6, 27, 2, '2023-12-08 15:42:40', 21),
(7, 27, 5, '2023-12-08 15:52:52', 39),
(8, 27, 3, '2023-12-08 15:53:23', 31),
(9, 27, 3, '2023-12-08 20:01:34', 19),
(10, 27, 5, '2023-12-09 18:59:08', 28);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role_id` tinyint(11) NOT NULL DEFAULT 0,
  `birth_day` date NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `password`, `address`, `role_id`, `birth_day`, `is_deleted`) VALUES
(8, 'dsdsd222244', 'tttp1704@gmail.comd', 'sdsdsdsdsdggggg', 'hà nội', 0, '2023-11-25', 1),
(14, 'dsdsd2222', 'tttp1704@gmail.comd', 'sdsdsdsdsdggggg', 'dsdsd', 0, '2023-11-26', 1),
(20, 'dsdsd22226323232332323', 'tttp1704@gmail.comd', 'sdsdsdsdsdggggg', 'sdssdsdsds', 0, '2023-11-16', 1),
(21, 'dsdsd22225', 'tttp1704@gmail.comd', '1234567890', 'sdsdsd  ', 0, '2023-11-24', 1),
(22, 'dsdsd22226323232', 'tttp1704@gmail.comd', 'sdsdsdsdsdggggg', 'sdsdsd', 0, '2023-12-01', 1),
(23, 'sdsd22226323232332323', 'tttp1704@gmail.comd', 'sdsdsdsdsdggggg', 'hà nội', 0, '2023-11-15', 1),
(24, 'dsdsd22226333', 'tttp1704@gmail.comd', 'sdsdsdsdsdggggg', 'sdsdsd  ', 0, '2023-11-17', 1),
(25, 'dsdsd22226', 'tttp1704@gmail.comd', 'sdsdsdsdsdggggg', 'dsdsd', 0, '2023-11-25', 1),
(26, 'sdsd222263232323323237', 'tttp1704@gmail.comd', 'sdsdsdsdsdggggg', 'sdsdsd  ', 0, '2023-11-26', 1),
(27, 'Nguyễn Tấn Phát', 'tttp1704@gmail.com', 'phatdz17052004', 'Thanh hóa', 0, '2023-11-23', 1),
(28, 'dsdsd2222222345', 'tttp1704@gmail.com', '1', 'Thanh hóa', 0, '2023-11-19', 1),
(29, 'dsdsd2222344433', 'tttp1704@gmail.com', 'sdsdsdsdsdggggg', 'Thanh hóa', 0, '2023-11-26', 1),
(30, 'dsdsdbbbbbbbbbbbbbbbbbbbbb', 'tttp1704@gmail.com', 'hungchoinghien nghap', 'Thanh hóa', 0, '2023-11-26', 1),
(31, 'dsdsd222', 'tttp1704@gmail.com', 'phatdz17052004', 'sdsdsd  ', 0, '2023-11-25', 1),
(32, 'Nguyễn Tấn Phát344', 'tttp1704@gmail.com', 'dsssd', 'hà nội', 0, '2023-11-21', 0),
(33, 'Nguyễn Tấn Phát3443232', 'tttp1704@gmail.comd', 'phatdz17052004', 'Thanh hóa', 0, '2023-11-26', 1),
(34, 'Nguyễn Tấn Phát344221212ggggg', 'tttp1704@gmail.com', 'sdsdsdsdsdggggg', 'Thanh hóa', 0, '2023-11-26', 1),
(35, 'dsdsd', 'tttp1704@gmail.comd', 'phatdz17052004', 'dsdsd', 1, '2023-12-03', 1),
(36, 'gghghg', 'tttp1704@gmail.com', 'dsdsd222244', 'th', 0, '2023-12-14', 1),
(37, 'Nguyễn Tấn Phátvvvvvvv', 'tttp1704@gmail.com', 'phatdz17052004', 'sdssdsdsds', 0, '2023-12-21', 1),
(38, 'Nguyễn Tấn Phát1234', 'tttp1704@gmail.com', 'phatdz17052004', 'dsdsd', 0, '2023-12-16', 1),
(39, 'Nguyễn Tấn Phát 23456', 'tttp1704@gmail.com', 'phatdz170520043', 'hà nội', 0, '2023-12-22', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Chỉ mục cho bảng `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`details_id`);

--
-- Chỉ mục cho bảng `feelback`
--
ALTER TABLE `feelback`
  ADD PRIMARY KEY (`feel_id`);

--
-- Chỉ mục cho bảng `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`galery_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `details`
--
ALTER TABLE `details`
  MODIFY `details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `feelback`
--
ALTER TABLE `feelback`
  MODIFY `feel_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `galery`
--
ALTER TABLE `galery`
  MODIFY `galery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT cho bảng `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
