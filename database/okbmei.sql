-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 20 2019 г., 04:03
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
(241, 3, 1, 'One Puff, One Love. LifeStyle - smoke stuff!\nOne Puff, One Love. LifeStyle - smoke stuff!\nOne Puff, One Love. LifeStyle - smoke stuff!\nOne Puff, One Love. LifeStyle - smoke stuff!', '2019-12-17 22:17:48'),
(262, 3, 5, '...НА!', '2019-12-17 22:26:29'),
(263, 3, 2, 'Мы стрались, правда', '2019-12-17 22:26:41'),
(264, 3, 3, 'Но успели не всё ', '2019-12-17 22:26:49'),
(265, 3, 3, 'Добавление комнат пока нет', '2019-12-17 22:26:56'),
(266, 3, 3, 'И не всё желаемое реализуемое ', '2019-12-17 22:27:10'),
(289, 21, 3, 'ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ', '2019-12-20 03:43:40'),
(290, 21, 3, 'ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ', '2019-12-20 03:43:43'),
(291, 21, 3, 'ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ', '2019-12-20 03:43:50'),
(292, 21, 3, 'ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ', '2019-12-20 03:43:52'),
(293, 21, 3, 'ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ', '2019-12-20 03:43:53'),
(294, 21, 3, 'ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ', '2019-12-20 03:43:54'),
(295, 21, 3, 'ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ', '2019-12-20 03:43:55'),
(296, 21, 3, 'ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ', '2019-12-20 03:43:55'),
(297, 21, 3, 'ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ТЕст ', '2019-12-20 03:43:56'),
(298, 21, 1, 'Тест', '2019-12-20 03:44:06');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `into_text` text NOT NULL,
  `full_text` text NOT NULL,
  `date` datetime NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `into_text`, `full_text`, `date`, `image`) VALUES
(9, 'Егор в лесу смотрит', 'Ходит дурачок по лесу ', 'Ходит дурачок по лесу, Ищет дурачок глупей себя. Ходит дурачок по лесу, Ищет дурачок глупей себя.  Идет Смерть по улице, несёт блины на блюдце, Кому вынется - тому и сбудется. Тронет за плечо, поцелует горячо, Полетят копейки из-за пазухи долой!  Ходит дурачок по лесу, Ищет дурачок глупей себя. Ходит дурачок по лесу, Ищет дурачок глупей себя.  Зубчатые колеса завертелись в башке, В промокшей башке под бронебойным дождём. Закипела ртуть, замахнулся кулак, Да только если крест на грудь, то на последний глаз - пятак.  Ходит дурачок по миру, Ищет дурачок глупей себя. Ходит дурачок по миру, Ищет дурачок глупей себя.  Моя мёртвая мамка вчера ко мне пришла, Всё грозила кулаком, называла дураком. Источник teksty-pesenok.ru Предрассветный комар опустился в мой пожар, Да захлебнулся кровью из моего виска.  Ходит дурачок по лесу, Ищет дурачок глупей себя. Ходит дурачок по лесу, Ищет дурачок глупей себя.  А сегодня я воздушных шариков купил - Полечу на них над расчудесной страной. Буду пух глотать, буду в землю нырять И на все вопросы отвечать: \"Всегда живой!\"  Ходит дурачок по лесу, Ищет дурачок глупей себя. Ходит дурачок по лесу, Ищет дурачок глупей себя.  Светило Солнышко и ночью и днём. Не бывает атеистов в окопах под огнём. Добежит слепой, победит ничтожный - Такое вам и не снилось.  Ходит дурачок по небу, Ищет дурачок глупей себя. Ходит дурачок по небу, Ищет дурачок глупей себя.', '2019-12-17 22:35:22', 'https://steamuserimages-a.akamaihd.net/ugc/867367817423362547/313CFA206CF34BF896A73FF1270697C16048BCFE/?imw=512&amp;imh=470&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=true'),
(10, 'Егор щупает бороду', 'Очень интересно, смотреть всем', 'Глупый мотылёк\r\nДогорал на свечке\r\nЖаркий уголёк\r\nДымные колечки\r\nЗвёздочка упала в лужу у крыльца...\r\nОтряд не заметил потери бойца\r\nОтряд не заметил потери бойца\r\n\r\nМёртвый не воскрес\r\nХворый не загнулся\r\nЗрячий не ослеп\r\nСпящий не проснулся\r\nИсточник teksty-pesenok.ru\r\nВесело стучали храбрые сердца...\r\nОтряд не заметил потери бойца\r\nОтряд не заметил потери бойца\r\n\r\nНе было родней\r\nНе было красивей\r\nНе было больней\r\nНе было счастливей\r\nНе было начала, не было конца...\r\nОтряд не заметил потери бойца\r\nОтряд не заметил потери бойца\r\nОтряд не заметил потери бойца\r\nОтряд не заметил потери бойца', '2019-12-17 22:40:03', 'https://filed9-14.my.mail.ru/pic?url=https%3A%2F%2Fcontent-17.foto.my.mail.ru%2Fdraw%2Fmusic%2Fplaylist%2F4348729221%2Ftracks%2Fcover%3F1429833361&mw=&mh=&sig=8d78021a62857a9d8f5fefc3412eea34'),
(14, 'Егор летит', 'БЛА БЛА БЛА БЛА БЛА  БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА ', 'БЛА БЛА БЛА БЛА БЛА  БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА  БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА БЛА ', '2019-12-17 22:49:29', 'https://i.pinimg.com/originals/8a/b2/3b/8ab23b8dfc409a222a5cb53afe79d84b.jpg'),
(15, 'тест', 'тест', 'тест', '2019-12-18 17:56:38', ''),
(16, 'Тест новой формы прошёл успешно', 'АГНА', 'ываывпваыппрпывра', '2019-12-18 18:26:53', 'https://tuhub.ru/sites/default/files/2018-06/css-position.png'),
(20, 'doom 2', 'фцыувйцв фыва ывфа вап кы вапр ', 'фвыаып варп авпр авпр вао апро паро ывап ', '2019-12-19 23:50:46', 'https://steamuserimages-a.akamaihd.net/ugc/867367817423362547/313CFA206CF34BF896A73FF1270697C16048BCFE/?imw=512&amp;imh=470&amp;ima=fit&amp;impolicy=Letterbox&amp;imcolor=%23000000&amp;letterbox=true'),
(21, 'Ещё одна ', '123 123 123 123 12 312 3123 ', '123 123 123 123 12 312 3123 123 123 123 123 12 312 3123 123 123 123 123 12 312 3123 123 123 123 123 12 312 3123 123 123 123 123 12 312 3123 123 123 123 123 12 312 3123 123 123 123 123 12 312 3123 123 123 123 123 12 312 3123 123 123 123 123 12 312 3123 ', '2019-12-19 23:51:36', 'https://biografii.net/wp-content/uploads/2018/09/17ropzDLDemo_egor-letov.jpg');

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
(1, 0, 1);

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
(34, 3, 2, 'Тестовая заявка 1', 'Нужны 2 coreI7 ', 3, 3, '2019-12-14 23:52:24', '2019-12-17', ' '),
(35, 3, 1, 'Тестовая 2', 'Нужна термопаста', 1, 1, '2019-12-14 23:53:48', '2019-12-19', ' ');

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
(5, 'Неверленд', 0),
(7, 'тест', 0);

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
(3, 'Сверх', 'Человек', '111', '111', '111', '111', 1, 'Директор'),
(15, 'Иван', 'Паньков', '123', '123', '123', 'qwe@qwe', 0, 'Герой'),
(17, 'Влад', 'Скопин', '222', '123', '321', 'sad@sad', 0, 'Директор'),
(21, 'rt', 'rt', 'tt', '555', '44', 'wer@we', 1, 'tt');

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
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_message` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `priorities`
--
ALTER TABLE `priorities`
  MODIFY `priorityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `requests`
--
ALTER TABLE `requests`
  MODIFY `requestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id_room` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `statuses`
--
ALTER TABLE `statuses`
  MODIFY `statusId` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
