-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 16 2016 г., 19:10
-- Версия сервера: 5.5.48
-- Версия PHP: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `myshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `root` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `txt` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `root`, `name`, `txt`) VALUES
(1, 0, 'Смартфоны', 'Phones'),
(2, 0, 'Планшеты', ''),
(3, 0, 'Ультрабуки', ''),
(4, 1, 'Samsung', ''),
(5, 1, 'ZTE', ''),
(6, 1, 'Lenovo', ''),
(7, 2, 'Samsung', ''),
(8, 2, 'Lenovo', ''),
(9, 3, 'Lenovo', ''),
(10, 1, 'Apple', ''),
(11, 1, 'Sony', '');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `image`, `status`) VALUES
(1, 4, 'Galaxy S6 Edge, 32Gb', '<strong>Смартфон Samsung Galaxy S6 Edge, 32Gb, Black</strong>\r\n<br><br>\r\n<p><strong>Характеристики</strong><br>\r\nТактовая частота: 2.1 ГГц + 1.5 ГГц<br>\r\nОбъем встроенной памяти: 32 Гб<br>\r\nОбъем оперативной памяти: 3 Гб<br>\r\nРазмер экрана, дюйм: 5.1<br>\r\nРазрешение экрана: 2560 х 1440<br>\r\nРазрешение основной фотокамеры: 16 Мп<br>\r\nРазрешение фронтальной фотокамеры: 5 Мп<br>\r\n</p>', 43990, '1.jpg', 1),
(2, 4, 'Galaxy S7 Edge, 32Gb', '<strong>Смартфон Samsung Galaxy S7 Edge, 32Gb, Black</strong>\n<br><br>\n<p><strong>Безопасность активна с момента включения</strong><br>\nРабота в пути или дома может создать серьезные риски для информационной безопасности компании. Однако, благодаря предустановленному решению KNOX 2.6, смартфон Galaxy S7 edge позволяет защищать ваши данные. Мониторинг и защита от модификации ядра ОС в режиме реального времени, вместе с предустановленным антивирусом задействованы с момента включения устройства.</p>', 54990, 'galaxys7_1.jpg', 1),
(3, 5, 'ZTE Axon mini', '<strong>Смартфон ZTE Axon mini, Silver</strong>\n<br><br>\n<p><strong>Характеристики</strong><br>\nТактовая частота: 1.5 ГГц<br>\nОбъем встроенной памяти: 32 Гб<br>\nОбъем оперативной памяти: 3 Гб<br>\nРазмер экрана, дюйм: 5.2<br>\nРазрешение экрана: 1920 x 1080<br>\nРазрешение основной фотокамеры: 13 Мп<br>\nРазрешение фронтальной фотокамеры: 8 Мп<br>\n</p>\n<br>\n<a href="http://www.zte.ru">www.zte.ru</a>', 27990, 'axon.jpg', 1),
(11, 10, 'iPhone 6S Plus 128Gb', 'Едва начав пользоваться iPhone 6s Plus, вы сразу почувствуете, насколько всё изменилось. Технология 3D Touch открывает потрясающие новые возможности — достаточно одного нажатия. А функция Live Photos позволяет буквально оживить ваши воспоминания. И это только начало. Присмотритесь к iPhone 6s Plus внимательнее, и вы увидите инновации на всех уровнях.\r\n<br /><br />\r\n<a href="www.apple.com/ru">www.apple.com/ru</a>', 89990, 'iphone6s1.jpg', 1),
(12, 10, 'iPhone 6S 16Gb', 'Поддержка международных сетей\nUMTS/HSDPA/HSUPA (850, 900, 1900, 2100 МГц); \nGSM/EDGE (850, 900, 1800, 1900 МГц)\nCDMA EV-DO Rev. A (800, 1900 МГц)3\n802.11b/g/n Wi-Fi (802.11n только 2,4 ГГц)\nБеспроводная технология Bluetooth 4.0\n<br /><br />\n<a href="http://www.apple.com/ru/iphone/specs.html">http://www.apple.com/ru/iphone/specs.html</a>\n                    \n                    ', 45990, '00.jpg', 1),
(13, 11, 'Sony Xperia Z5', '<strong>Sony Xperia Z5 Premium Dual, Black</strong>\r\n<br><br>\r\n	<p>Triluminos Display для мобильных устройств формата 4K UHD\r\nМультитач до 10 пальцев\r\nТехнология X-reality для мобильных устройств\r\nВвод скольжением\r\nCпециальный пользовательский интерфейс\r\nClear Audio+ - программное обеспечение для нормализации звучания\r\nТехнология S-Force Front Surround\r\nСенсор Sony Exmor RS для мобильных устройств\r\n\r\nИмпульсная светодиодная вспышка\r\n5-кратное масштабирование Clear Image\r\n8-кратное цифровое масштабирование\r\nШирокоугольный объектив G Lens (24 мм)\r\nТехнология стабилизации видео SteadyShot с режимом Intelligent Active Mode\r\nЗапись видео в разрешении 4K\r\nФокусировка касанием\r\nРаспознавание лиц и улыбок\r\nДублирование экрана - технология Miracast\r\nЗащита от попадания воды и пыли - IP65/IP68\r\n</p>\r\n<a href="http://www.sonymobile.com">www.sonymobile.com</a>\r\n', 59900, 'sonyxperiaz5_1.jpg', 1),
(14, 5, 'ZTE Blade X9', '<strong>Смартфон ZTE Blade X9, Silver</strong>\r\n<br><br>\r\n<p><strong>Характеристики</strong><br>\r\nТактовая частота: 1.5 ГГц<br>\r\nОбъем встроенной памяти: 16 Гб<br>\r\nОбъем оперативной памяти: 2 Гб<br>\r\nРазмер экрана, дюйм: 5.5<br>\r\nРазрешение экрана: 1920 x 1080<br>\r\nРазрешение основной фотокамеры: 13 Мп<br>\r\nРазрешение фронтальной фотокамеры: 5 Мп<br>\r\n</p>\r\n<br>\r\n<a href="http://www.zte.com">www.zte.com</a>', 17990, 'zte01.jpg', 1),
(15, 7, 'Galaxy View, 18.4, 32Gb', '<strong>Планшет Samsung Galaxy View, 18.4", 32Gb, Wi-Fi+4G, Black</strong>\r\n<br><br>\r\n<p><strong>Характеристики</strong><br>\r\nТактовая частота, ГГц: 1.6<br>\r\nОбъем встроенной памяти: 32 Гб<br>\r\nОбъем оперативной памяти: 2 Гб<br>\r\nРазмер экрана, дюйм: 18.4<br>\r\nРазрешение экрана: 1920 x 1080<br>\r\nРазрешение фронтальной фотокамеры: 2.1 Мп<br>\r\nОперационная система: Android<br></p><br>\r\n<a href="http://www.samsung.ru">www.samsung.ru</a>', 45990, 'tabs01.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
