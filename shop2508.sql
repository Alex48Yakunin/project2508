-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Дек 02 2018 г., 13:30
-- Версия сервера: 5.7.23
-- Версия PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop2508`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`category_id`, `title`, `description`) VALUES
(1, 'Спорт', 'Товары для спорта'),
(2, 'Отдых', 'Товары для отдыха');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`order_id`, `status`, `address`, `comment`, `user_id`) VALUES
(1, 0, 'Moscow', '', 0),
(2, 1, 'New-York', '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `order_products`
--

CREATE TABLE `order_products` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '1',
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_products`
--

INSERT INTO `order_products` (`order_id`, `product_id`, `size_id`, `count`, `price`) VALUES
(1, 1, 0, 1, 0),
(1, 3, 0, 1, 0),
(2, 2, 0, 1, 0),
(2, 3, 0, 1, 0),
(2, 4, 0, 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `collection` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`product_id`, `title`, `description`, `image`, `price`, `category_id`, `collection`) VALUES
(1, 'Мяч', '123', '', 500, 1, 0),
(2, 'Бейсбольная бита', '123', '', 1000, 1, 0),
(3, 'Штанга', '123', '', 1200, 1, 0),
(4, 'Гамак', '123', '', 1900, 2, 0),
(5, 'Палатка', '123', '', 2500, 2, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `product_sizes`
--

CREATE TABLE `product_sizes` (
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sizes`
--

CREATE TABLE `sizes` (
  `size_id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sizes`
--

INSERT INTO `sizes` (`size_id`, `value`) VALUES
(1, 'Без размера'),
(2, 'S'),
(3, 'M'),
(4, '38'),
(5, '40');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `pass`, `role`) VALUES
(1, 'admin', 'admin@admin.ru', '123', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`order_id`,`product_id`,`size_id`) USING BTREE,
  ADD KEY `product_id` (`product_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Индексы таблицы `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`product_id`,`size_id`);

--
-- Индексы таблицы `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`size_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `sizes`
--
ALTER TABLE `sizes`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
