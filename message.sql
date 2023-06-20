-- Adminer 4.8.1 MySQL 10.4.24-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8;

DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `view_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `message` text CHARACTER SET utf8 NOT NULL,
  `post_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `message` (`id`, `view_name`, `message`, `post_date`) VALUES
(0,	'00',	'データベースに登録してみる<br>',	'2022-11-10 15:11:22'),
(0,	'00',	'データベースに登録してみる<br>',	'2022-11-10 15:11:27'),
(0,	'00',	'データベースに登録してみる<br>',	'2022-11-10 15:11:32'),
(0,	'おお',	'っr',	'2022-11-10 16:04:26'),
(0,	'おお',	'うん',	'2022-11-10 16:16:29'),
(0,	'おお',	'うん',	'2022-11-10 16:16:38'),
(0,	'おお',	'うん',	'2022-11-10 16:19:05'),
(0,	'おお',	'うん',	'2022-11-10 16:25:01'),
(0,	'おお',	'うん',	'2022-11-10 16:37:10'),
(0,	'おお',	'うん',	'2022-11-11 09:40:58'),
(0,	'おお',	'おお',	'2022-11-11 09:41:14'),
(0,	'おお',	'おお',	'2022-11-11 10:03:29'),
(0,	'おお',	'おお',	'2022-11-11 10:03:42'),
(0,	'おお',	'おお',	'2022-11-11 10:07:55'),
(0,	'おお',	'うん',	'2022-11-11 10:10:12'),
(0,	'おお',	'うん',	'2022-11-11 10:10:16');

-- 2022-11-11 05:37:23
