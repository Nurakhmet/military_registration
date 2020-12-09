-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 11 2020 г., 20:59
-- Версия сервера: 10.1.36-MariaDB
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sis_mid`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `surname`) VALUES
(1, 'a@mail.ru', '123', 'a', 'a'),
(2, 'b@mail.ru', '123', 'b', 'b'),
(3, 'c@mail.ru', '123', 'c', 'c'),
(4, 'd@mail.ru', '123', 'd', 'd'),
(5, 'e@mail.ru', '123', 'e', 'e');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `full_text` varchar(255) NOT NULL,
  `post_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

--INSERT INTO `posts` (`id`, `title`, `descr`, `full_text`, `post_date`) VALUES
--(1, 'aaa', 'aaa', 'aaa', '2020-10-12 21:25:59'),
--(2, 'hahaha', 'hahaha', 'hahaha', '2020-10-12 22:10:33'),
--(3, 'a', 'a', 'a', '2020-10-12 22:11:07'),
--(4, 'AAAA', 'AAAA', 'AAAAA', '2020-10-12 22:25:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;


ALTER TABLE `posts`
    ADD CONSTRAINT `fk_user_id`
    FOREIGN KEY (`user_id`)
    REFERENCES `users`(`id`);

ALTER TABLE `posts` 
    ADD FOREIGN KEY ( `user_id` ) 
    REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT ;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
