-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 15 2020 г., 23:02
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `files`
--

CREATE TABLE `files` (
  `id` int(11) UNSIGNED NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `files`
--

INSERT INTO `files` (`id`, `owner`, `file`) VALUES
(1, 'vadim', 'bootstrap-1170.png'),
(5, 'admin', 'asco.png'),
(6, 'vadim', 'fincom.png');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `city`, `age`, `file`, `password`) VALUES
(5, 'vadim', 'velikanets@mail.ru', 'Minsk', '24', 'ava.jpg', '$2y$10$E.rZIcIpc4j80U/Fjz24MOCOt7x9tbyCFN2znijPnJToNohJ18yX6'),
(6, 'VadimVelikanets', 'vadosvelik@gmail.com', 'Minsk', '24', 'new.png', '$2y$10$sJwRO4SuW9a4cfhUNPrvpOe5GEhPQEnx0JiTVehIg9IKSUxsVReT.'),
(7, 'admin', 'vadosvelik4@gmail.com', 'London', '99', '', '$2y$10$kgNFgRLbl1I/X/gJWgOVAOktnVzapkA3M3DWnONuprFU.Ca6EvTEC'),
(8, 'user', 'user@mail.ru', 'Minsk', '15', '', '$2y$10$fRBD9ygm/wYqhZhOUN4HPup.6rb8RpZEluTZ1VhvugDLZGuI6KeAq'),
(9, 'vadim2', 'velikanets2@mail.ru', 'Minsk', '24', '', '$2y$10$bKug5muBhDh0ETFFaG2kP.reMv4kHdyqwgSYbQyEA47PHuCYieFQC'),
(10, 'vadim4', 'velikanet4s@mail.ru', 'Minsk', '24', '', '$2y$10$byfcmIexsubeVPc7UTMnAuTnoD1P/rqRqGHDN0lPDpuKS/QLN58i2'),
(11, 'vadim45', 'velikanet54s@mail.ru', 'Minsk', '24', 'new.png', '$2y$10$RLvxXrH.v6rcu7E2wmErl.tkpxGZjxExXcXZlWzGqKWCGI3MXPrtq'),
(12, 'vadim111', 'velikanet11s@mail.ru', 'Minsk', '24', '', '$2y$10$yoL.a4/iB4HmMBdnTh4ATOyjg3jCdUZP6MvFTHxr.016kIiV6jfu6'),
(13, 'vadim6656', 'velikanet565s@mail.ru', 'Minsk', '2456', '', '$2y$10$rAtGaATVKzduA4Au8gP02eCrtxWTWf.ZyoShPTY35g68FJEYmFODW');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
