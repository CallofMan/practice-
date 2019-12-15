-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 15 2019 г., 05:46
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `okbmei`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `categoryId` int(11) NOT NULL,
  `categoryName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`categoryId`, `categoryName`) VALUES
(1, 'Компьютерная орг.техника'),
(2, 'Канцелярия'),
(3, 'Электроника'),
(4, 'Корреспонденция');

-- --------------------------------------------------------

--
-- Структура таблицы `ip`
--

CREATE TABLE `ip` (
  `id` int(11) NOT NULL,
  `ip` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ip`
--

INSERT INTO `ip` (`id`, `ip`) VALUES
(8, '127.0.0.1');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id_message` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `id_room` int(20) NOT NULL,
  `text_message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id_message`, `id_user`, `id_room`, `text_message`, `date`) VALUES
(1, 2, 2, 'ttedfdsgdfsgdsfh', '2019-12-12 00:00:00'),
(2, 2, 1, 'dsagsf', '2019-12-13 17:58:26'),
(3, 2, 1, 'dfsagg', '2019-12-13 18:00:41'),
(4, 2, 1, 'вапвыарар', '2019-12-13 18:03:17'),
(5, 1, 1, 'вапыппывапып', '2019-12-13 18:23:58'),
(6, 1, 1, 'Hello world!', '2019-12-14 19:05:52'),
(7, 2, 1, 'gfsdagag', '2019-12-15 02:01:21'),
(8, 2, 1, 'asfdgghdfhsh', '2019-12-15 02:01:23'),
(9, 2, 1, 'sdfgdsfgds', '2019-12-15 02:01:24'),
(10, 2, 1, 'fsdagfahgdfshbfghdhjhgfdghdfghdrftytrythy', '2019-12-15 02:13:30'),
(11, 2, 1, 'ersagsfegnlksdnflk asndlkf lkasdjfli asjl; kfjoaiw4jf oiaer ghfoiawsesh goil;haeroi;ghasdg ', '2019-12-15 02:13:35'),
(12, 2, 1, 'впаыап выап выап ыва пвыап выапыа ', '2019-12-15 02:21:44'),
(13, 2, 1, 'gdsgfshshf', '2019-12-15 03:06:01'),
(14, 2, 1, 'fsaddfadgsdfgsfgs', '2019-12-15 04:08:50'),
(15, 2, 1, 'ыфаывафываыфввпп', '2019-12-15 04:31:38'),
(16, 3, 1, 'gfdshhjgfdgj sdfhg gsdfh  fgd', '2019-12-15 04:38:22'),
(17, 3, 1, 'fdsafasgsdfhgdfh dsfh ', '2019-12-15 05:22:05');

-- --------------------------------------------------------

--
-- Структура таблицы `priorities`
--

CREATE TABLE `priorities` (
  `priorityId` int(11) NOT NULL,
  `priorityName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `priorities`
--

INSERT INTO `priorities` (`priorityId`, `priorityName`) VALUES
(1, 'Низкий'),
(2, 'Средний'),
(3, 'Высокий');

-- --------------------------------------------------------

--
-- Структура таблицы `quantity_all_visits`
--

CREATE TABLE `quantity_all_visits` (
  `id` int(1) NOT NULL,
  `all_visits` int(99) NOT NULL,
  `unique_visits` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `quantity_all_visits`
--

INSERT INTO `quantity_all_visits` (`id`, `all_visits`, `unique_visits`) VALUES
(1, 322, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `requests`
--

CREATE TABLE `requests` (
  `requestId` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `requestCategory` int(11) NOT NULL,
  `requestName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requestDescription` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requestStatus` int(2) NOT NULL DEFAULT 1,
  `requestPriority` int(11) DEFAULT NULL,
  `requestDateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `requestDate` date DEFAULT NULL,
  `requestComment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `requests`
--

INSERT INTO `requests` (`requestId`, `userid`, `requestCategory`, `requestName`, `requestDescription`, `requestStatus`, `requestPriority`, `requestDateCreated`, `requestDate`, `requestComment`) VALUES
(34, 3, 2, 'Тестовая заявка 1', 'Нужны 2 coreI7 ', 1, 3, '2019-12-14 23:52:24', '2019-12-17', ' '),
(35, 3, 1, 'Тестовая 2', 'Нужна термопаста', 1, 1, '2019-12-14 23:53:48', '2019-12-19', ' '),
(36, 3, 1, 'gfhdgh', 'gfdhdfghdfghfdgj', 1, 2, '2019-12-15 02:01:08', '2019-12-05', ' fgdhfjhhdfgrjgrfdj'),
(37, 3, 1, 'rwqerqwer', 'wqerqwerwqer', 1, 2, '2019-12-15 02:12:04', '2019-12-10', ' rwqerwreqwrwqer'),
(38, 3, 1, 'asdasd', 'asdasdasdasd', 1, 2, '2019-12-15 02:13:12', '2019-12-04', ' sadasdasdsdgaasdg'),
(39, 3, 1, 'fsaddgasdg', 'sadfgfgsadfsdagsdag', 1, 2, '2019-12-15 05:06:52', '2019-12-09', ' fasdfsagsfdhgfshfgdh');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `role` int(1) NOT NULL,
  `name_role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`role`, `name_role`) VALUES
(0, 'Пользователь'),
(1, 'Админ');

-- --------------------------------------------------------

--
-- Структура таблицы `rooms`
--

CREATE TABLE `rooms` (
  `id_room` int(20) NOT NULL,
  `name_room` varchar(30) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rooms`
--

INSERT INTO `rooms` (`id_room`, `name_room`, `role`) VALUES
(1, 'Общая', 0),
(2, 'Для элиты', 1),
(3, 'Израиль', 1),
(4, 'Древляне', 1),
(5, 'Неверленд', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `statuses`
--

CREATE TABLE `statuses` (
  `statusId` int(2) NOT NULL,
  `statusName` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `statuses`
--

INSERT INTO `statuses` (`statusId`, `statusName`) VALUES
(1, 'Открыта'),
(2, 'В исполнении'),
(3, 'Исполнена');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(20) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `second_name` varchar(40) NOT NULL,
  `login` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `telephone` varchar(18) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `role` int(1) NOT NULL,
  `position` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `first_name`, `second_name`, `login`, `password`, `telephone`, `mail`, `role`, `position`) VALUES
(1, 'Конь', 'Грустный', 'конь', 'грустный', '3244', '23423', 0, 'Сотрудник'),
(2, 'Человек', 'Посредственный', '222', '222', '222', '222', 0, 'Сотрудник'),
(3, 'Сверх', 'Человек', '111', '111', '111', '111', 1, 'Директор');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryId`);

--
-- Индексы таблицы `ip`
--
ALTER TABLE `ip`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_room` (`id_room`);

--
-- Индексы таблицы `priorities`
--
ALTER TABLE `priorities`
  ADD PRIMARY KEY (`priorityId`);

--
-- Индексы таблицы `quantity_all_visits`
--
ALTER TABLE `quantity_all_visits`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`requestId`),
  ADD KEY `userId` (`userid`),
  ADD KEY `requestCategory` (`requestCategory`),
  ADD KEY `requestStatus` (`requestStatus`),
  ADD KEY `requestPriority` (`requestPriority`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role`);

--
-- Индексы таблицы `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id_room`),
  ADD KEY `role` (`role`);

--
-- Индексы таблицы `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`statusId`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `login` (`login`),
  ADD KEY `name_role` (`role`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `ip`
--
ALTER TABLE `ip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id_message` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `priorities`
--
ALTER TABLE `priorities`
  MODIFY `priorityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `requests`
--
ALTER TABLE `requests`
  MODIFY `requestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT для таблицы `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id_room` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `statuses`
--
ALTER TABLE `statuses`
  MODIFY `statusId` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`id_room`) REFERENCES `rooms` (`id_room`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `requests_ibfk_2` FOREIGN KEY (`requestCategory`) REFERENCES `categories` (`categoryId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `requests_ibfk_3` FOREIGN KEY (`requestStatus`) REFERENCES `statuses` (`statusId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `requests_ibfk_4` FOREIGN KEY (`requestPriority`) REFERENCES `priorities` (`priorityId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`role`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`role`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
