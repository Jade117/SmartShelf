-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-09-21 10:45:32
-- 伺服器版本: 10.1.19-MariaDB
-- PHP 版本： 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `smartshelf`
--

-- --------------------------------------------------------

--
-- 資料表結構 `grid`
--

CREATE TABLE `grid` (
  `grid_id` varchar(100) CHARACTER SET latin1 NOT NULL,
  `row_id` varchar(100) CHARACTER SET latin1 NOT NULL,
  `shop_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `look` int(11) NOT NULL,
  `think` int(11) NOT NULL,
  `sold` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `grid`
--

INSERT INTO `grid` (`grid_id`, `row_id`, `shop_id`, `name`, `look`, `think`, `sold`) VALUES
('grid 2017-08-27 19:24:22', 'row daj7qIDp2jpS1Am', 'shop 2017-08-16 19:17:06', 'iPhone 7', 17, 54, 4),
('grid 2017-08-27 19:24:28', 'row jFoOwmpDpEdWBeb', 'shop 2017-08-16 19:17:06', 'iPad 3', 30, 31, 4),
('grid 2017-08-27 19:31:01', 'row ImtFMC2nQWLU6cC', 'shop 2017-08-16 19:17:06', 'Samsung S8', 48, 32, 10),
('grid 2017-08-27 19:31:05', 'row QRCHcvZ8fqOTRAF', 'shop 2017-08-16 19:17:06', 'Samsung Tab', 16, 9, 2),
('grid 2017-08-27 20:26:40', 'row 8IKEhgj98fvzpZN', 'shop 2017-08-27 20:24:37', 'Jordan 9', 40, 22, 3),
('grid 2017-08-27 20:29:57', 'row Zkm80AG0IrNnIz4', 'shop 2017-08-27 20:24:37', 'Air Max3', 38, 39, 9),
('grid 2017-08-27 20:31:02', 'row qPocHBby26wtLQt', 'shop 2017-08-27 20:24:37', 'Zoom KDX', 34, 41, 6),
('grid 2017-08-27 20:32:21', 'row InnjYgknlZKsTOs', 'shop 2017-08-27 20:24:37', 'Boost', 43, 14, 5),
('grid 2017-08-27 20:33:53', 'row JLQF7Sxxni40Qvx', 'shop 2017-08-27 20:24:37', 'Rose', 67, 33, 4),
('grid 2017-08-27 20:35:41', 'row yepP6s2G69onZqH', 'shop 2017-08-27 20:24:37', 'Trainer', 50, 49, 8),
('grid 2017-08-27 21:06:43', 'row QIrIDcrRptfFED3', 'shop 2017-08-16 19:17:06', 'HTC M10', 46, 22, 7),
('grid 2017-09-21 10:46:21', 'row EaI7WSRBuB3ZKtu', 'shop 2017-08-29 00:41:06', 'T-SHIRT -red', 10, 12, 2),
('grid 2017-09-21 10:47:21', 'row EaI7WSRBuB3ZKtu', 'shop 2017-08-29 00:41:06', 'T-SHIRT -blue', 5, 9, 4),
('grid 2017-09-21 10:47:22', 'row EaI7WSRBuB3ZKtu', 'shop 2017-08-29 00:41:06', 'T-SHIRT -green', 4, 11, 1),
('grid 2017-09-21 10:47:59', 'row EaI7WSRBuB3ZKtu', 'shop 2017-08-29 00:41:06', 'T-SHIRT -black', 7, 6, 3),
('grid 2017-09-21 10:48:19', 'row Xh9tCXQxzNuY1C4', 'shop 2017-08-29 00:41:06', 'JACKET -red', 7, 6, 2),
('grid 2017-09-21 10:48:20', 'row Xh9tCXQxzNuY1C4', 'shop 2017-08-29 00:41:06', 'JACKET -black', 10, 5, 1),
('grid 2017-09-21 10:48:25', 'row Xh9tCXQxzNuY1C4', 'shop 2017-08-29 00:41:06', 'JACKET -blue', 4, 3, 1),
('grid 2017-09-21 10:50:48', 'row Xh9tCXQxzNuY1C4', 'shop 2017-08-29 00:41:06', 'JACKET -white', 11, 9, 3),
('grid 2017-09-21 10:51:25', 'row oJM4SS7q1cYDVUb', 'shop 2017-08-29 00:41:06', 'FLEECE -white', 12, 5, 2),
('grid 2017-09-21 10:51:27', 'row oJM4SS7q1cYDVUb', 'shop 2017-08-29 00:41:06', 'FLEECE -blue', 6, 4, 1),
('grid 2017-09-21 10:51:28', 'row oJM4SS7q1cYDVUb', 'shop 2017-08-29 00:41:06', 'FLEECE -green', 8, 4, 1),
('grid 2017-09-21 10:51:29', 'row oJM4SS7q1cYDVUb', 'shop 2017-08-29 00:41:06', 'FLEECE -yellow', 2, 8, 1),
('grid 2017-09-21 10:53:10', 'row 6G3VjNszr0h7QPB', 'shop 2017-08-29 00:41:06', 'T-SHIRT -red', 15, 2, 4),
('grid 2017-09-21 10:53:12', 'row 6G3VjNszr0h7QPB', 'shop 2017-08-29 00:41:06', 'T-SHIRT -black', 16, 10, 5),
('grid 2017-09-21 10:53:17', 'row 6G3VjNszr0h7QPB', 'shop 2017-08-29 00:41:06', 'T-SHIRT -white', 8, 9, 3),
('grid 2017-09-21 10:54:38', 'row Omc1mlBEZC03pyS', 'shop 2017-08-29 00:41:06', 'DRESSES-red', 11, 10, 2),
('grid 2017-09-21 10:54:40', 'row Omc1mlBEZC03pyS', 'shop 2017-08-29 00:41:06', 'DRESSES -black', 13, 15, 9),
('grid 2017-09-21 10:54:41', 'row Omc1mlBEZC03pyS', 'shop 2017-08-29 00:41:06', 'DRESSES -white', 16, 14, 5),
('grid 2017-09-21 10:54:44', 'row lQYb60doq79tUU6', 'shop 2017-08-29 00:41:06', 'SKIRTS -black', 14, 13, 6),
('grid 2017-09-21 10:54:45', 'row lQYb60doq79tUU6', 'shop 2017-08-29 00:41:06', 'SKIRTS -white', 16, 11, 2),
('grid 2017-09-21 10:54:46', 'row lQYb60doq79tUU6', 'shop 2017-08-29 00:41:06', 'SKIRTS-red', 12, 19, 7),
('grid 2017-09-21 15:55:06', 'row QNAVxU4AqNt4nqq', 'shop 2017-09-21 15:52:50', 'A1', 0, 0, 6),
('grid 2017-09-21 15:56:24', 'row QNAVxU4AqNt4nqq', 'shop 2017-09-21 15:52:50', 'A2', 0, 0, 11),
('grid 2017-09-21 15:56:43', 'row hLG5XpddxBI1ZYS', 'shop 2017-09-21 15:52:50', 'B1', 0, 0, 7),
('grid 2017-09-21 15:56:45', 'row hLG5XpddxBI1ZYS', 'shop 2017-09-21 15:52:50', 'B2', 0, 0, 6),
('grid 2017-09-21 15:57:30', 'row x9ZtP4Pfk4Z2BRN', 'shop 2017-09-21 15:52:50', 'C1', 0, 0, 10),
('grid 2017-09-21 15:57:32', 'row x9ZtP4Pfk4Z2BRN', 'shop 2017-09-21 15:52:50', 'C2', 0, 0, 13),
('grid 2017-09-21 15:58:59', 'row 6Jh0TkkOau1W96k', 'shop 2017-09-21 15:52:50', 'ELLE DECORATION', 0, 0, 4),
('grid 2017-09-21 15:59:00', 'row 6Jh0TkkOau1W96k', 'shop 2017-09-21 15:52:50', 'Wine Spectator ', 0, 0, 2),
('grid 2017-09-21 15:59:04', 'row HDd3aDZWyCZ9mEs', 'shop 2017-09-21 15:52:50', 'NATIONAL GEOGRAPHIC', 0, 0, 14),
('grid 2017-09-21 15:59:07', 'row ZxtJ1AscFYpc0W9', 'shop 2017-09-21 15:52:50', 'PC GAMER', 0, 0, 4),
('grid 2017-09-21 15:59:10', 'row HiQccJVDXVGMHbA', 'shop 2017-09-21 15:52:50', 'Jelly', 0, 0, 1),
('grid 2017-09-21 15:59:13', 'row KEnC8vQf1wqr0nt', 'shop 2017-09-21 15:52:50', 'i-D JAPAN ', 0, 0, 3),
('grid 2017-09-21 15:59:16', 'row yxm5tyP6LoEeKuU', 'shop 2017-09-21 15:52:50', 'Disney Dream Theater', 0, 0, 2),
('grid 2017-09-21 16:09:21', 'row 8hw3xwgs88F1eAO', 'shop 2017-09-21 16:06:11', 'Cola', 0, 0, 17),
('grid 2017-09-21 16:09:46', 'row BGdHAAgOBPzNumJ', 'shop 2017-09-21 16:06:11', 'Pepsi', 0, 0, 14),
('grid 2017-09-21 16:09:48', 'row EbjOS93OyZNhFjh', 'shop 2017-09-21 16:06:11', 'Soda', 0, 0, 9),
('grid 2017-09-21 16:09:51', 'row aPh2BRbYxao3rR6', 'shop 2017-09-21 16:06:11', 'Juice', 0, 0, 5),
('grid 2017-09-21 16:09:55', 'row eJnF3EaqMYJgvXU', 'shop 2017-09-21 16:06:11', '7UP', 0, 0, 7),
('grid 2017-09-21 16:09:58', 'row ozHPOILtMf3Kw1x', 'shop 2017-09-21 16:06:11', 'HeySong', 0, 0, 17),
('grid 2017-09-21 16:10:01', 'row KmQyFqPocHBby26', 'shop 2017-09-21 16:06:11', 'milktea', 0, 0, 19),
('grid 2017-09-21 16:10:03', 'row MuTSpaG632zDIHe', 'shop 2017-09-21 16:06:11', 'Tea', 0, 0, 10),
('grid 2017-09-21 16:10:07', 'row OPeVunekZQOHaay', 'shop 2017-09-21 16:06:11', 'Chocolate milk', 0, 0, 6),
('grid 2017-09-21 16:10:10', 'row ZHQj3TogrCbfSfH', 'shop 2017-09-21 16:06:11', 'Green tea', 0, 0, 5),
('grid 2017-09-21 16:10:13', 'row mzCTcg4fQ8sIVW7', 'shop 2017-09-21 16:06:11', 'Black tea', 0, 0, 18),
('grid 2017-09-21 16:10:16', 'row wtLQt8IKEhgj98f', 'shop 2017-09-21 16:06:11', 'Sports drink', 0, 0, 13),
('grid 2017-09-21 16:17:15', 'row CbWwhyLt5ck6COX', 'shop 2017-09-21 16:15:47', 'orange juice', 0, 0, 6),
('grid 2017-09-21 16:17:18', 'row NnIz4I5ekZr7VFS', 'shop 2017-09-21 16:15:47', 'coconut milk', 0, 0, 4),
('grid 2017-09-21 16:17:21', 'row sHIXXZCNREjZR1i', 'shop 2017-09-21 16:15:47', 'asparagus juice', 0, 0, 2),
('grid 2017-09-21 16:17:23', 'row vzpZNZkm80AG0Ir', 'shop 2017-09-21 16:15:47', 'vegetable juice', 0, 0, 5),
('grid 2017-09-21 16:17:26', 'row 40Qvxjmry9gCcLq', 'shop 2017-09-21 16:15:47', 'iced coffee', 0, 0, 8),
('grid 2017-09-21 16:17:29', 'row KsTOsyepP6s2G69', 'shop 2017-09-21 16:15:47', 'white coffee', 0, 0, 7),
('grid 2017-09-21 16:17:32', 'row TXDxOInnjYgknlZ', 'shop 2017-09-21 16:15:47', 'black coffee', 0, 0, 3),
('grid 2017-09-21 16:17:35', 'row onZqHJLQF7Sxxni', 'shop 2017-09-21 16:15:47', 'ovaltine', 0, 0, 11),
('grid 2017-09-21 16:27:52', 'row O6aTjpzGCdgL5Zk', 'shop 2017-09-21 16:27:18', 'cocoa', 50, 19, 13),
('grid 2017-09-21 16:27:55', 'row X4Q9YgDjBmQfktH', 'shop 2017-09-21 16:27:18', 'mineral water', 44, 26, 18),
('grid 2017-09-21 16:27:58', 'row lxHmajPtrhjfTLD', 'shop 2017-09-21 16:27:18', 'white goup tea', 39, 19, 11),
('grid 2017-09-21 16:28:01', 'row DPsDMkvinRK3hoM', 'shop 2017-09-21 16:27:18', 'sarsaparilla ', 56, 27, 22),
('grid 2017-09-21 16:28:04', 'row MJBMEFacYVgRkfh', 'shop 2017-09-21 16:27:18', 'soft drink', 49, 20, 13),
('grid 2017-09-21 16:28:07', 'row fOO1k2nQy48BTvO', 'shop 2017-09-21 16:27:18', 'tomato juice', 29, 14, 9);

-- --------------------------------------------------------

--
-- 資料表結構 `row`
--

CREATE TABLE `row` (
  `shelf_id` varchar(100) NOT NULL,
  `row_id` varchar(100) NOT NULL,
  `shop_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `row`
--

INSERT INTO `row` (`shelf_id`, `row_id`, `shop_id`) VALUES
('shelf 2017-09-21 16:17:12', 'row 40Qvxjmry9gCcLq', 'shop 2017-09-21 16:15:47'),
('shelf 2017-08-29 01:00:53', 'row 6G3VjNszr0h7QPB', 'shop 2017-08-29 00:41:06'),
('shelf 2017-09-21 15:58:25', 'row 6Jh0TkkOau1W96k', 'shop 2017-09-21 15:52:50'),
('shelf 2017-09-21 16:08:56', 'row 8hw3xwgs88F1eAO', 'shop 2017-09-21 16:06:11'),
('shelf 2017-08-27 20:25:24', 'row 8IKEhgj98fvzpZN', 'shop 2017-08-27 20:24:37'),
('shelf 2017-09-21 16:08:56', 'row aPh2BRbYxao3rR6', 'shop 2017-09-21 16:06:11'),
('shelf 2017-09-21 16:08:56', 'row BGdHAAgOBPzNumJ', 'shop 2017-09-21 16:06:11'),
('shelf 2017-09-21 16:16:55', 'row CbWwhyLt5ck6COX', 'shop 2017-09-21 16:15:47'),
('shelf 2017-08-27 19:17:59', 'row daj7qIDp2jpS1Am', 'shop 2017-08-16 19:17:06'),
('shelf 2017-09-21 16:27:47', 'row DPsDMkvinRK3hoM', 'shop 2017-09-21 16:27:18'),
('shelf 2017-08-29 01:00:36', 'row EaI7WSRBuB3ZKtu', 'shop 2017-08-29 00:41:06'),
('shelf 2017-09-21 16:08:56', 'row EbjOS93OyZNhFjh', 'shop 2017-09-21 16:06:11'),
('shelf 2017-09-21 16:08:56', 'row eJnF3EaqMYJgvXU', 'shop 2017-09-21 16:06:11'),
('shelf 2017-09-21 16:27:47', 'row fOO1k2nQy48BTvO', 'shop 2017-09-21 16:27:18'),
('shelf 2017-09-21 15:58:25', 'row HDd3aDZWyCZ9mEs', 'shop 2017-09-21 15:52:50'),
('shelf 2017-09-21 15:58:42', 'row HiQccJVDXVGMHbA', 'shop 2017-09-21 15:52:50'),
('shelf 2017-09-21 15:53:42', 'row hLG5XpddxBI1ZYS', 'shop 2017-09-21 15:52:50'),
('shelf 2017-08-27 19:21:14', 'row ImtFMC2nQWLU6cC', 'shop 2017-08-16 19:17:06'),
('shelf 2017-08-27 20:26:33', 'row InnjYgknlZKsTOs', 'shop 2017-08-27 20:24:37'),
('shelf 2017-08-27 19:17:59', 'row jFoOwmpDpEdWBeb', 'shop 2017-08-16 19:17:06'),
('shelf 2017-08-27 20:26:33', 'row JLQF7Sxxni40Qvx', 'shop 2017-08-27 20:24:37'),
('shelf 2017-09-21 15:58:42', 'row KEnC8vQf1wqr0nt', 'shop 2017-09-21 15:52:50'),
('shelf 2017-09-21 16:09:17', 'row KmQyFqPocHBby26', 'shop 2017-09-21 16:06:11'),
('shelf 2017-09-21 16:17:12', 'row KsTOsyepP6s2G69', 'shop 2017-09-21 16:15:47'),
('shelf 2017-08-29 01:00:53', 'row lQYb60doq79tUU6', 'shop 2017-08-29 00:41:06'),
('shelf 2017-09-21 16:27:35', 'row lxHmajPtrhjfTLD', 'shop 2017-09-21 16:27:18'),
('shelf 2017-09-21 16:27:47', 'row MJBMEFacYVgRkfh', 'shop 2017-09-21 16:27:18'),
('shelf 2017-09-21 16:09:17', 'row MuTSpaG632zDIHe', 'shop 2017-09-21 16:06:11'),
('shelf 2017-09-21 16:09:17', 'row mzCTcg4fQ8sIVW7', 'shop 2017-09-21 16:06:11'),
('shelf 2017-09-21 16:16:55', 'row NnIz4I5ekZr7VFS', 'shop 2017-09-21 16:15:47'),
('shelf 2017-09-21 16:27:35', 'row O6aTjpzGCdgL5Zk', 'shop 2017-09-21 16:27:18'),
('shelf 2017-08-29 01:00:36', 'row oJM4SS7q1cYDVUb', 'shop 2017-08-29 00:41:06'),
('shelf 2017-08-29 01:00:53', 'row Omc1mlBEZC03pyS', 'shop 2017-08-29 00:41:06'),
('shelf 2017-09-21 16:17:12', 'row onZqHJLQF7Sxxni', 'shop 2017-09-21 16:15:47'),
('shelf 2017-09-21 16:09:17', 'row OPeVunekZQOHaay', 'shop 2017-09-21 16:06:11'),
('shelf 2017-09-21 16:08:56', 'row ozHPOILtMf3Kw1x', 'shop 2017-09-21 16:06:11'),
('shelf 2017-08-27 21:06:39', 'row QIrIDcrRptfFED3', 'shop 2017-08-16 19:17:06'),
('shelf 2017-09-21 15:53:42', 'row QNAVxU4AqNt4nqq', 'shop 2017-09-21 15:52:50'),
('shelf 2017-08-27 20:25:24', 'row qPocHBby26wtLQt', 'shop 2017-08-27 20:24:37'),
('shelf 2017-08-27 19:21:14', 'row QRCHcvZ8fqOTRAF', 'shop 2017-08-16 19:17:06'),
('shelf 2017-09-21 16:16:55', 'row sHIXXZCNREjZR1i', 'shop 2017-09-21 16:15:47'),
('shelf 2017-09-21 16:17:12', 'row TXDxOInnjYgknlZ', 'shop 2017-09-21 16:15:47'),
('shelf 2017-09-21 16:16:55', 'row vzpZNZkm80AG0Ir', 'shop 2017-09-21 16:15:47'),
('shelf 2017-09-21 16:09:17', 'row wtLQt8IKEhgj98f', 'shop 2017-09-21 16:06:11'),
('shelf 2017-09-21 16:27:35', 'row X4Q9YgDjBmQfktH', 'shop 2017-09-21 16:27:18'),
('shelf 2017-09-21 15:53:42', 'row x9ZtP4Pfk4Z2BRN', 'shop 2017-09-21 15:52:50'),
('shelf 2017-08-29 01:00:36', 'row Xh9tCXQxzNuY1C4', 'shop 2017-08-29 00:41:06'),
('shelf 2017-08-27 21:06:39', 'row XkhA5Ut5TnQfIat', 'shop 2017-08-16 19:17:06'),
('shelf 2017-08-27 20:26:33', 'row yepP6s2G69onZqH', 'shop 2017-08-27 20:24:37'),
('shelf 2017-09-21 15:58:42', 'row yxm5tyP6LoEeKuU', 'shop 2017-09-21 15:52:50'),
('shelf 2017-09-21 16:09:17', 'row ZHQj3TogrCbfSfH', 'shop 2017-09-21 16:06:11'),
('shelf 2017-08-27 20:25:24', 'row Zkm80AG0IrNnIz4', 'shop 2017-08-27 20:24:37'),
('shelf 2017-09-21 15:58:25', 'row ZxtJ1AscFYpc0W9', 'shop 2017-09-21 15:52:50');

-- --------------------------------------------------------

--
-- 資料表結構 `shelf`
--

CREATE TABLE `shelf` (
  `shop_id` varchar(100) NOT NULL,
  `shelf_id` varchar(100) NOT NULL,
  `shelf_name` varchar(100) NOT NULL,
  `row_num` int(11) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `shelf`
--

INSERT INTO `shelf` (`shop_id`, `shelf_id`, `shelf_name`, `row_num`, `time`) VALUES
('shop 2017-08-16 19:17:06', 'shelf 2017-08-27 19:17:59', 'Apple區', 2, '2017-08-27 19:17:59'),
('shop 2017-08-16 19:17:06', 'shelf 2017-08-27 19:21:14', 'Samaung區', 2, '2017-08-27 19:21:14'),
('shop 2017-08-27 20:24:37', 'shelf 2017-08-27 20:25:24', 'Nike 鞋', 3, '2017-08-27 20:25:24'),
('shop 2017-08-27 20:24:37', 'shelf 2017-08-27 20:26:33', 'Adidas 鞋', 3, '2017-08-27 20:26:33'),
('shop 2017-08-16 19:17:06', 'shelf 2017-08-27 21:06:39', 'HTC 區', 2, '2017-08-27 21:06:39'),
('shop 2017-08-29 00:41:06', 'shelf 2017-08-29 01:00:36', '男 - 衣服', 3, '2017-08-29 01:00:36'),
('shop 2017-08-29 00:41:06', 'shelf 2017-08-29 01:00:53', '女 - 衣服', 3, '2017-08-29 01:00:53'),
('shop 2017-09-21 15:52:50', 'shelf 2017-09-21 15:53:42', '中文雜誌', 3, '2017-09-21 15:53:42'),
('shop 2017-09-21 15:52:50', 'shelf 2017-09-21 15:58:25', '英文雜誌', 3, '2017-09-21 15:58:25'),
('shop 2017-09-21 15:52:50', 'shelf 2017-09-21 15:58:42', '日文雜誌', 3, '2017-09-21 15:58:42'),
('shop 2017-09-21 16:06:11', 'shelf 2017-09-21 16:08:56', '飲料櫃A', 6, '2017-09-21 16:08:56'),
('shop 2017-09-21 16:06:11', 'shelf 2017-09-21 16:09:17', '飲料櫃B', 6, '2017-09-21 16:09:17'),
('shop 2017-09-21 16:15:47', 'shelf 2017-09-21 16:16:55', '飲料櫃A', 4, '2017-09-21 16:16:55'),
('shop 2017-09-21 16:15:47', 'shelf 2017-09-21 16:17:12', '飲料櫃B', 4, '2017-09-21 16:17:12'),
('shop 2017-09-21 16:27:18', 'shelf 2017-09-21 16:27:35', '飲料櫃A', 3, '2017-09-21 16:27:35'),
('shop 2017-09-21 16:27:18', 'shelf 2017-09-21 16:27:47', '飲料櫃B', 3, '2017-09-21 16:27:47');

-- --------------------------------------------------------

--
-- 資料表結構 `shop`
--

CREATE TABLE `shop` (
  `shop_id` varchar(100) NOT NULL,
  `shop_name` varchar(100) NOT NULL,
  `shop_describtion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `shop`
--

INSERT INTO `shop` (`shop_id`, `shop_name`, `shop_describtion`) VALUES
('shop 2017-08-16 19:17:06', '中滑電信基隆旗艦店', '業績第一名'),
('shop 2017-08-27 20:24:37', '一亨運動用品西門店', '新開幕'),
('shop 2017-08-29 00:41:06', 'UNIQLO忠孝復興店', '周年慶'),
('shop 2017-09-21 15:52:50', '誠品信義店', '臺北市信義區松高路11號'),
('shop 2017-09-21 16:06:11', '7-11 統一超商海大門市', '基隆市北寧路2號1樓'),
('shop 2017-09-21 16:15:47', '全家便利商店新豐門市', '02-24632645'),
('shop 2017-09-21 16:27:18', 'OK便利超商海大店', '新開幕'),
('shop 2017-09-21 16:39:04', '光南基隆店', '123'),
('shop 2017-09-21 16:39:49', '全聯基隆新豐門市', '321');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `grid`
--
ALTER TABLE `grid`
  ADD PRIMARY KEY (`grid_id`);

--
-- 資料表索引 `row`
--
ALTER TABLE `row`
  ADD PRIMARY KEY (`row_id`);

--
-- 資料表索引 `shelf`
--
ALTER TABLE `shelf`
  ADD PRIMARY KEY (`shelf_id`);

--
-- 資料表索引 `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`shop_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
