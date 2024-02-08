-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 07 2024 г., 23:58
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `flowers`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL COMMENT 'Код:5',
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'Категория:30'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='таблица категорий';

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Сборные букеты'),
(3, 'Свадебные букеты'),
(4, 'Композиции в коробках');

-- --------------------------------------------------------

--
-- Структура таблицы `flower`
--

CREATE TABLE `flower` (
  `id` int NOT NULL COMMENT 'Код:5',
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'Наименование:20',
  `price` decimal(15,2) DEFAULT NULL COMMENT 'Цена:10',
  `descr` longtext CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT 'Описание:40',
  `date` date DEFAULT NULL COMMENT 'Дата:10',
  `category` int DEFAULT NULL COMMENT 'Категория:5',
  `instock` int DEFAULT NULL COMMENT 'Остаток:10',
  `img` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'Картинка:15',
  `popular` int DEFAULT NULL COMMENT 'Лайки:5'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='таблица товаров (цветочков)';

--
-- Дамп данных таблицы `flower`
--

INSERT INTO `flower` (`id`, `name`, `price`, `descr`, `date`, `category`, `instock`, `img`, `popular`) VALUES
(1, 'Нежное послание', '1900.00', 'Состав товараХризантема кустовая - 2 шт.Упаковка - 1 шт.Лента атласная - 1 шт.Гербера - 1 шт.Диантус - 1 шт.Озотамус розовый - 1 шт.Львиный зев - 2 шт.эЭустома белая - 1 шт.Тишью белое - 1 шт.Наклейка фирменная - 1 шт.Цветы: ХризантемыЦветы: ГерберыЦветы: Эустомы', '2024-12-06', 1, 6, 'image 5 (1).png', 2),
(2, 'Нежность чувств', '30500.00', 'Роза Эквадор Нежно-розовая-101штЛента атласная -1штЦветы: РозыКоличество: 101 розаСтрана: Эквадор', '2024-12-07', 3, 10, 'image 20.png', 5),
(3, 'Лавандовый чизкейк', '3300.00', 'Состав товара                &amp;amp;amp;lt;br&amp;amp;amp;gt;&amp;amp;amp;lt;br&amp;amp;amp;gt;                Роза кустовая - 7 шт.&amp;amp;amp;lt;br&amp;amp;amp;gt;                Эвкалипт Baby Blue - 2 шт.&amp;amp;amp;lt;br&amp;amp;amp;gt;                Тишью белое - 1 шт.&amp;amp;amp;lt;br&amp;amp;amp;gt;                Фоамиран(упаковка) - 1 шт.&amp;amp;amp;lt;br&amp;amp;amp;gt;                Наклейка фирменная - 1 шт.&amp;amp;amp;lt;br&amp;amp;amp;gt;                Лента с логотипом - 1 шт.&amp;amp;amp;lt;br&amp;amp;amp;gt;                &amp;amp;amp;lt;br&amp;amp;amp;gt;                Цветы: Роза кустовая', '2024-12-08', 1, 11, 'image 11.png', 7),
(4, 'Весенняя роса', '3200.00', 'Одноголовая хризантема- 2шт\nРоза куст - 3шт\nХризантема Сантини-3шт\nМатиола-3штКолоски-7шт\nУпаковка матовая-3л\nНаклейка фирменная-1 шт\nЛента репсовая -1шт', '2024-12-09', 1, 6, 'image 45.png', 45),
(5, 'Искренние чувства', '10500.00', 'Роза Менсфил парк( кустовая)- 25шт\nЛента атласная-1шт\n\nЦветы: Розы\nКоличество: 25 роз', '2024-12-10', 2, 6, 'image 19.png', 6),
(6, 'Новогодняя композиция', '2500.00', 'Сборная новогодняя композиция.', '2024-12-12', 4, 9, 'image 24.png', 97);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL COMMENT 'Код заказа:5',
  `date` date DEFAULT NULL COMMENT 'Дата:10',
  `flower_id` int DEFAULT NULL COMMENT 'Код цветка:10',
  `quan` int DEFAULT NULL COMMENT 'Кол-во:10 ',
  `cost` decimal(15,2) DEFAULT NULL COMMENT 'Сумма:10',
  `payment` int DEFAULT '0' COMMENT 'Оплачено:10',
  `status` int DEFAULT '0' COMMENT 'Статус:10'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='таблица заказов';

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `date`, `flower_id`, `quan`, `cost`, `payment`, `status`) VALUES
(2, '2024-02-07', 6, 9, '2500.00', 0, 0),
(3, '2024-02-07', 5, 10, '10500.00', 0, 0),
(4, '2024-02-07', 3, 4, '3300.00', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id` int NOT NULL COMMENT 'Код:10',
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'Наименование:20'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='таблица статусов';

-- --------------------------------------------------------

--
-- Структура таблицы `tables`
--

CREATE TABLE `tables` (
  `id` int NOT NULL COMMENT 'id:5',
  `name_en` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'Имя таблицы (en):15',
  `name_ru` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'Имя таблицы (ru):15',
  `sort` int DEFAULT NULL COMMENT 'Сортировка:10'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `tables`
--

INSERT INTO `tables` (`id`, `name_en`, `name_ru`, `sort`) VALUES
(1, 'category', 'Категории', 2),
(2, 'flower', 'Цветы', 3),
(3, 'orders', 'Заказы', 4),
(4, 'users', 'Пользователи', 5),
(5, 'status', 'Статусы', 6),
(6, 'tables', 'Таблицы', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL COMMENT 'Код:10',
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'Имя:20',
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'Email:25',
  `pass` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'Пароль:20',
  `status` int DEFAULT NULL COMMENT 'Статус:10'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='таблица пользователей';

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `flower`
--
ALTER TABLE `flower`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'Код:5', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `flower`
--
ALTER TABLE `flower`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'Код:5', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'Код заказа:5', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'Код:10';

--
-- AUTO_INCREMENT для таблицы `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'id:5', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'Код:10', AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
