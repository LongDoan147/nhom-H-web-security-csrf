-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 18, 2022 lúc 06:54 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `app_web1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `ten`, `noidung`, `user_id`, `token`) VALUES
(31, 'admin', 'admin', 7, '8f14e45fceea167a5a36dedd4bea2543'),
(32, 'admin', 'admin', 7, '8f14e45fceea167a5a36dedd4bea2543'),
(33, 'admin', 'admin', 7, '8f14e45fceea167a5a36dedd4bea2543'),
(34, 'user', 'user', 8, 'c9f0f895fb98ab9159f51fd0297e236d'),
(35, 'user', 'user', 8, 'c9f0f895fb98ab9159f51fd0297e236d'),
(36, 'user', 'user', 8, 'c9f0f895fb98ab9159f51fd0297e236d');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `fullname`, `email`, `type`, `password`) VALUES
(8, 'user', 'user', 'user@gmail.com', 'user', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'admin', 'admin', 'admin@gmail.com', 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xss`
--

CREATE TABLE `xss` (
  `id` int(11) NOT NULL,
  `cookie` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `xss`
--

INSERT INTO `xss` (`id`, `cookie`, `date`) VALUES
(1, 'PHPSESSID=pehvrhgmggbms7lbdv9fq1oja2', '2022-10-15 02:58:16'),
(7, 'PHPSESSID=pehvrhgmggbms7lbdv9fq1oja2', '2022-10-15 03:09:37'),
(8, 'PHPSESSID=pehvrhgmggbms7lbdv9fq1oja2', '2022-10-15 03:17:23'),
(9, 'PHPSESSID=pehvrhgmggbms7lbdv9fq1oja2', '2022-10-15 03:23:10'),
(10, 'PHPSESSID=7q4s4p1onpcou6q2rlgmn7u1d3', '2022-10-17 08:34:16');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `xss`
--
ALTER TABLE `xss`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `xss`
--
ALTER TABLE `xss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
