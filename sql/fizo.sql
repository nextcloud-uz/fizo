-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 02 2023 г., 11:06
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

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
-- Структура таблицы `1guruh`
--

CREATE TABLE `1guruh` (
  `id` int(11) NOT NULL,
  `ball` int(11) DEFAULT NULL,
  `1-mashq` decimal(4,2) DEFAULT NULL,
  `2-mashq` decimal(4,2) DEFAULT NULL,
  `3-mashq` decimal(4,2) DEFAULT NULL,
  `4-mashq` decimal(4,2) DEFAULT NULL,
  `5b-mashq` decimal(4,2) DEFAULT NULL,
  `6a-mashq` decimal(4,2) DEFAULT NULL,
  `7a-mashq` decimal(4,2) DEFAULT NULL,
  `8a-mashq` int(11) DEFAULT NULL,
  `9-mashq` int(11) DEFAULT NULL,
  `10-mashq` int(11) DEFAULT NULL,
  `131-mashq` int(11) DEFAULT NULL,
  `132-mashq` int(11) DEFAULT NULL,
  `141-mashq` int(11) DEFAULT NULL,
  `142-mashq` int(11) DEFAULT NULL,
  `143-mashq` int(11) DEFAULT NULL,
  `144-mashq` int(11) DEFAULT NULL,
  `16-mashq` decimal(4,2) DEFAULT NULL,
  `23-mashq` int(11) DEFAULT NULL,
  `251-mashq` decimal(4,2) DEFAULT NULL,
  `252-mashq` decimal(4,2) DEFAULT NULL,
  `261-mashq` decimal(4,2) DEFAULT NULL,
  `262-mashq` decimal(4,2) DEFAULT NULL,
  `27a-mashq` decimal(4,2) DEFAULT NULL,
  `31-mashq` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `1guruh`
--

INSERT INTO `1guruh` (`id`, `ball`, `1-mashq`, `2-mashq`, `3-mashq`, `4-mashq`, `5b-mashq`, `6a-mashq`, `7a-mashq`, `8a-mashq`, `9-mashq`, `10-mashq`, `131-mashq`, `132-mashq`, `141-mashq`, `142-mashq`, `143-mashq`, `144-mashq`, `16-mashq`, `23-mashq`, `251-mashq`, `252-mashq`, `261-mashq`, `262-mashq`, `27a-mashq`, `31-mashq`) VALUES
(1, 1, 27.80, 15.40, 1.16, 4.14, 13.50, 24.00, 14.10, 44, 8, 4, 10, 8, 20, 26, 32, 40, 10.20, 6, 26.20, 58.20, 2.24, 3.30, 2.36, 38),
(2, 2, 27.60, 15.30, 1.16, 4.10, 13.45, 23.50, 14.90, 44, 8, 4, 10, 8, 21, 27, 33, 41, 10.10, 6, 26.10, 58.10, 2.23, 3.25, 2.32, 39),
(3, 3, 27.40, 15.20, 1.15, 4.06, 13.40, 23.40, 14.07, 45, 9, 4, 11, 9, 22, 28, 34, 42, 10.00, 7, 26.00, 58.00, 2.22, 3.22, 2.28, 40);

-- --------------------------------------------------------

--
-- Структура таблицы `mashqlar`
--

CREATE TABLE `mashqlar` (
  `mashqlar_id` int(11) NOT NULL,
  `mashq_nomi` varchar(255) NOT NULL,
  `mashq_tuliq_nomi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `mashqlar`
--

INSERT INTO `mashqlar` (`mashqlar_id`, `mashq_nomi`, `mashq_tuliq_nomi`) VALUES
(1, '1-mashq', '10x10 metr masofaga moki yugurish mashqi'),
(2, '2-mashq', '100 metrga yugurish mashqi'),
(3, '3-mashq', '400 metrga yugurish mashqi'),
(4, '4-mashq', '1000 metrga yugurish mashqi'),
(5, '5b-mashqi', '3000 metrga yugurish mashqi'),
(6, '6a-mashq', '5000 metrga yugurish mashqi');

-- --------------------------------------------------------

--
-- Структура таблицы `user401`
--

CREATE TABLE `user401` (
  `user_id` int(11) NOT NULL,
  `fish` varchar(255) DEFAULT NULL,
  `tugilgan_kuni` date DEFAULT NULL,
  `yoshi` int(11) DEFAULT NULL,
  `vazni` int(11) DEFAULT NULL,
  `guruhi` varchar(255) DEFAULT NULL,
  `natija1` decimal(4,2) DEFAULT NULL,
  `ball1` int(11) DEFAULT NULL,
  `natija2` decimal(4,2) DEFAULT NULL,
  `ball2` int(11) DEFAULT NULL,
  `natija3` int(11) DEFAULT NULL,
  `ball3` int(11) DEFAULT NULL,
  `natija4` decimal(4,2) DEFAULT NULL,
  `ball4` int(11) DEFAULT NULL,
  `umumiyball` int(11) DEFAULT NULL,
  `baho` int(11) DEFAULT NULL,
  `current_time` date NOT NULL DEFAULT current_timestamp(),
  `bolinma_nomi` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `user401`
--

INSERT INTO `user401` (`user_id`, `fish`, `tugilgan_kuni`, `yoshi`, `vazni`, `guruhi`, `natija1`, `ball1`, `natija2`, `ball2`, `natija3`, `ball3`, `natija4`, `ball4`, `umumiyball`, `baho`, `current_time`, `bolinma_nomi`) VALUES
(1, 'Bo`riyev Quvonch Nurbekovich', '1994-05-12', 28, 75, '2', 13.62, 19, 11.50, 21, 20, 19, 22.50, 22, 81, 5, '2023-03-10', '401'),
(2, 'Yadgarov Elbek', '1999-09-23', 23, NULL, '1guruh', 12.00, 3, 12.00, 3, 12, 0, 12.00, 3, 9, 2, '2023-05-02', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `userbolinma`
--

CREATE TABLE `userbolinma` (
  `userbolinma_id` int(11) NOT NULL,
  `bolinma_nomi` varchar(255) NOT NULL,
  `yaratilgan_vaqti` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `userbolinma`
--

INSERT INTO `userbolinma` (`userbolinma_id`, `bolinma_nomi`, `yaratilgan_vaqti`) VALUES
(1, '401', '2023-03-10');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bolinmanomi` varchar(255) DEFAULT NULL,
  `1-mashq` varchar(255) DEFAULT NULL,
  `2-mashq` varchar(255) DEFAULT NULL,
  `3-mashq` varchar(255) DEFAULT NULL,
  `4-mashq` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `bolinmanomi`, `1-mashq`, `2-mashq`, `3-mashq`, `4-mashq`) VALUES
(8, '1111', 'b59c67bf196a4758191e42f76670ceba', '1111', NULL, NULL, NULL, NULL, NULL),
(9, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '401', '2-mashq', '5b-mashq', '9-mashq', '251-mashq'),
(10, 'ILYA', '26c509535026fc01418a8dd812cc2cc6', 'ILYA', NULL, NULL, NULL, NULL, NULL),
(11, 'Salom', '4be1041e508b1bcadd666d5170a4bfce', 'Salom', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `yoshguruh`
--

CREATE TABLE `yoshguruh` (
  `id` int(11) NOT NULL,
  `yoshi` int(11) NOT NULL,
  `guruhi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `yoshguruh`
--

INSERT INTO `yoshguruh` (`id`, `yoshi`, `guruhi`) VALUES
(1, 17, '1guruh'),
(2, 28, '2guruh'),
(3, 33, '3guruh'),
(4, 38, '4guruh'),
(5, 43, '5guruh'),
(6, 48, '6guruh'),
(7, 53, '7guruh');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `1guruh`
--
ALTER TABLE `1guruh`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mashqlar`
--
ALTER TABLE `mashqlar`
  ADD PRIMARY KEY (`mashqlar_id`);

--
-- Индексы таблицы `user401`
--
ALTER TABLE `user401`
  ADD PRIMARY KEY (`user_id`);

--
-- Индексы таблицы `userbolinma`
--
ALTER TABLE `userbolinma`
  ADD PRIMARY KEY (`userbolinma_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `yoshguruh`
--
ALTER TABLE `yoshguruh`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `1guruh`
--
ALTER TABLE `1guruh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `mashqlar`
--
ALTER TABLE `mashqlar`
  MODIFY `mashqlar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `user401`
--
ALTER TABLE `user401`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `userbolinma`
--
ALTER TABLE `userbolinma`
  MODIFY `userbolinma_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `yoshguruh`
--
ALTER TABLE `yoshguruh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
