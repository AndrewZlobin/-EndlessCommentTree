-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 10 2019 г., 17:48
-- Версия сервера: 5.7.25
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `endless`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tree_nodes`
--

CREATE TABLE `tree_nodes` (
  `id_node` int(11) NOT NULL,
  `node_role` varchar(255) NOT NULL,
  `node_parent` varchar(50) NOT NULL,
  `node_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tree_nodes`
--

INSERT INTO `tree_nodes` (`id_node`, `node_role`, `node_parent`, `node_desc`) VALUES
(1, 'parent', '0', 'Узел 1-ого порядка'),
(2, 'child_first', '1', 'Первый узел 2-ого порядка'),
(3, 'child_first', '1', 'Второй узел 2-ого порядка'),
(4, 'child_second', '2', 'Первый узел 3-его порядка');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tree_nodes`
--
ALTER TABLE `tree_nodes`
  ADD PRIMARY KEY (`id_node`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tree_nodes`
--
ALTER TABLE `tree_nodes`
  MODIFY `id_node` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
