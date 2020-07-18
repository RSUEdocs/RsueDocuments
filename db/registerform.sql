-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Июл 18 2020 г., 16:57
-- Версия сервера: 5.7.24
-- Версия PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `registerform`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(100) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `name`, `email`) VALUES
(1, 'Kolya1337', 'b51e8dbebd4ba8a8f342190a4b9f08d7', 'Коля', ''),
(2, 'Vova123', 'b229b7a3fff081791598885995f1e3cb', 'Вова', 'babay@mail.ru'),
(3, 'Vitaliy', '60b48fc41714190a8d1b7d5dbf04d0dd', 'Виталий', 'vital.161@mail.ru'),
(4, 'Vitaliy', '4297f44b13955235245b2497399d7a93', 'Виталий', 'nice.ikaev@mail.ru'),
(5, 'NikitaIkaev', '4dbd22f52a3e064551865b93c871b393', 'Никита', 'dd.dimitrouv@mail.ru'),
(6, 'Admin', '9aa030d22590d1d9bfb399367f82d681', 'Админ', 'nik.ikayev@bk.ru'),
(7, 'Kostya', '5b84e8799bceb611e5b89ca4750b8bac', 'Константин', 'berns.2000@mail.ru'),
(8, 'AlexKovach', 'df5d7b70d5d44bcc3927f6ddf9658e8e', 'Александр', 'alex-kovach@bk.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
