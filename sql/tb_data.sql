-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 21 2023 г., 21:52
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fizo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tb_data`
--

CREATE TABLE `tb_data` (
  `id` int(11) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `isp` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `tb_data`
--

INSERT INTO `tb_data` (`id`, `ip`, `isp`, `country`, `city`) VALUES
(2, '185.213.229.83', 'Universal Mobile Systems LCC', 'Uzbekistan', 'Tashkent'),
(3, '185.213.229.83', 'Universal Mobile Systems LCC', 'Uzbekistan', 'Tashkent'),
(4, '51.15.78.38', 'SCALEWAY', 'Netherlands', 'North Holland'),
(5, '51.15.78.38', 'SCALEWAY', 'Netherlands', 'North Holland'),
(6, '198.244.141.33', 'OVH SAS', 'United Kingdom', 'England'),
(7, '135.148.232.144', 'OVH SAS', 'United States', 'Virginia'),
(8, '77.73.69.67', 'SIA VEESP', 'Russia', 'St.-Petersburg'),
(9, '163.172.191.228', 'Online S.A.S.', 'France', 'Île-de-France'),
(10, '51.79.156.21', 'OVH SAS', 'Singapore', 'Central Singapore'),
(11, '213.230.86.116', 'Uzbektelecom JSC', 'Uzbekistan', 'Bukhara'),
(12, '213.230.86.119', 'Uzbektelecom JSC', 'Uzbekistan', 'Bukhara'),
(13, '84.54.70.35', 'Uzbektelecom JSC', 'Uzbekistan', 'Bukhara');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tb_data`
--
ALTER TABLE `tb_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
