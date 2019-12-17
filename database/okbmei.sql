-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 17 2019 г., 14:47
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
(82, 2, 1, 'gdfs gf  ', '2019-12-15 21:22:44'),
(83, 2, 1, 'dsgf sfg ds fg', '2019-12-15 21:22:45'),
(84, 2, 1, 'dsfg dsf gds fg s fg', '2019-12-15 21:22:47'),
(85, 2, 1, 'dsfg dsfg dsf fg f ', '2019-12-15 21:22:49'),
(86, 2, 1, 'dsgdfgs ', '2019-12-15 21:23:32'),
(87, 2, 1, 'dsfgggdsfgsdf', '2019-12-15 21:23:34'),
(88, 2, 1, 'sdfgsdfgdsf', '2019-12-15 21:23:36'),
(89, 2, 1, 'dsfgdsfgdsfgsdfg', '2019-12-15 21:23:37'),
(90, 2, 1, 'sdfgsdfgdsf', '2019-12-15 21:23:38'),
(91, 2, 1, 'sdfgsdfgdsfg', '2019-12-15 21:23:40'),
(92, 2, 1, 'fgddkfgdf', '2019-12-15 21:24:04'),
(93, 2, 1, 'rgdsfg dfzg agsa gjsad lk hfgoli;ashdlifkasdoigho;iasdhgpio saodidghoaisd hfgoisahdoi ghasoipghopiawshe poith3atwopi ghoihfgeoi haowipeehfopi aedgoin awojkngdfalkjjng kljashgklj hasdlkj ghkasljd hgjkawsdh gkjhasjdk ghjkasdgh kljew', '2019-12-15 21:24:53'),
(94, 2, 1, 'fsadf dfsg dsf gsdf gdsf gdsf h dsfh dsfh dsfh dsfg dsf hdsf hdsf hdsf hsdfh yh erh dsfhersyh retjhgrhfdhrse5ygsryesr g esrfg ser g', '2019-12-15 21:25:24'),
(95, 2, 1, 'dsfg sdnkjnkjl gneskjgn sdkljfngjk dsnkjgn kjsrn gksdkfng userng oi;esrnogindfsiogsgioesnrgoiesn roignsdfoignsdoi ;gnoiers gnoierngoidsnfgoisndiogneiosrgnesrgndsofignesoirg hesroig erso i eriogje srgijser oigjseoi dgoi;ser ghjioer sgoihesr goi hesroi ghseorghioesrfhgoihesro;i ghser ', '2019-12-15 21:25:35'),
(96, 2, 1, 'dsfsdfd gfa asdg edfghn ilk jht4toi3;hgoi ejaoig j a43oijlkegwj l;kawdejg l;kadjhgl; kweahd g ilkkjhadsfgl kjlsdkg jlsajdg lksda jgkl; ajsdkl gjsadlkg jlk;s agjsdlk;ftghjopi34 goiph3e4g89p njrseoipg haew oivnsdoirk; gh894awe3ehg oisernhgoiefhgkljwahegfoli;f hasdklgj haslk;dgh lk sadhglkjsadh l;kjgshda jklghsadkjg hdlkjg hdsjklghdfklj ghsadkjl hglkjasd hkjs adg hkljsdag hjksdfgh kjdfgh jkdfg hkjdag hjksadh gjkdgh kljasgh kjlfdnbijrstniuneauinvui n gdas sadung kjdafg nkljdfg nbkljdga nkjl gasdiulgna kjngfdkj ldfgjkndfskjgn dkjfgn kjldafgb ', '2019-12-15 21:26:42'),
(97, 2, 1, 'regfghfgh', '2019-12-15 21:27:12'),
(98, 2, 1, 'fdgghfdgh', '2019-12-15 21:27:14'),
(99, 3, 1, 'пваы ваы п ы павы ', '2019-12-15 22:07:44'),
(100, 3, 1, 'пвыап аып  ', '2019-12-15 22:07:54'),
(101, 3, 1, 'апрп в пр', '2019-12-15 22:09:24'),
(102, 6, 1, 'fsdafsdf ', '2019-12-15 22:14:34'),
(103, 6, 1, 'fsadf s', '2019-12-15 22:15:24'),
(104, 6, 1, 'fsda f sad f', '2019-12-15 22:15:27'),
(105, 3, 1, 'gfh fghf g', '2019-12-15 22:19:03'),
(106, 3, 1, 'апвпва п', '2019-12-15 22:49:40'),
(107, 3, 1, 'вапып аып ваы пы ', '2019-12-16 09:57:27'),
(108, 3, 1, 'hdfgh d ', '2019-12-16 10:02:51'),
(109, 3, 1, 'dhfg hdfg h ', '2019-12-16 10:02:54'),
(110, 3, 1, 'пваып ывап ывпа пы пы ', '2019-12-16 10:10:41'),
(111, 3, 1, 'fdgh gdh dsfgm oidgj okdajh ger hughr eh og hdsajng kjdfdnsgkj hjksdahg lhgf dhssgj hdasjklahglkjd shfgjkhjk ghadfjkhdjlfghs jklshkljg hsjklahgfjklshkjlgh djfkshgjkdfhgljks fhkjlgh kjdsfhgk jdshfjkg hdskjfgn kjsdfhgkj dshfgjkh sdkjfghjkdfhgskjdbsgkjbskjbfvjkfsrd gsdfg fg ', '2019-12-16 10:17:10'),
(112, 3, 1, '\n\n\n\nж', '2019-12-16 10:28:19'),
(113, 3, 1, 'dgfgs', '2019-12-16 10:31:51'),
(114, 3, 1, 'fdgdfgdfg ', '2019-12-16 10:34:19'),
(115, 3, 1, 'gfdg ', '2019-12-16 10:34:22'),
(116, 3, 1, '\n', '2019-12-16 10:34:24'),
(117, 3, 1, '\n', '2019-12-16 10:34:26'),
(118, 3, 1, 'okpl', '2019-12-16 10:35:22'),
(119, 3, 1, 'fsdf', '2019-12-16 10:37:30'),
(120, 3, 1, '\n', '2019-12-16 10:37:32'),
(121, 3, 1, 'gdsfgsg', '2019-12-16 10:38:23'),
(122, 3, 1, 'dsfgsdfg', '2019-12-16 10:38:25'),
(123, 3, 1, '\n', '2019-12-16 10:38:29'),
(124, 3, 1, '\n', '2019-12-16 10:38:33'),
(125, 3, 1, 'gsdfgsg', '2019-12-16 10:40:55'),
(126, 3, 1, 'jhkjh', '2019-12-16 10:41:06'),
(127, 3, 1, 'bgn g dfgh fdg ', '2019-12-16 16:08:16'),
(128, 3, 1, 'hfdgh', '2019-12-16 16:08:19'),
(129, 2, 1, 'пвыап ып  п ', '2019-12-16 16:23:36'),
(130, 2, 1, 'пывап вп вы ап', '2019-12-16 16:23:38'),
(131, 2, 1, 'впыпы  выа п а п ', '2019-12-16 16:23:42'),
(132, 2, 1, 'dzgzg x', '2019-12-16 16:52:34'),
(133, 2, 1, 'sfdz ds d', '2019-12-16 16:52:37'),
(134, 2, 1, 'gdfsg s g', '2019-12-16 16:55:07'),
(135, 2, 1, 'sdgfg  dsfg ', '2019-12-16 16:55:14'),
(136, 2, 1, ' ', '2019-12-16 16:55:18'),
(137, 2, 1, '', '2019-12-16 16:56:46'),
(138, 2, 1, '', '2019-12-16 16:56:59'),
(139, 2, 1, '  ', '2019-12-16 16:57:05'),
(140, 2, 1, '\n\n\n', '2019-12-16 17:02:10'),
(141, 2, 1, '\n\n', '2019-12-16 17:02:14'),
(142, 2, 1, '\n\n\n\n\n', '2019-12-16 17:02:17'),
(143, 2, 1, 'gdfgfd ', '2019-12-16 17:05:15'),
(144, 2, 1, 'gdf g ', '2019-12-16 17:05:18'),
(145, 2, 1, 'gdf', '2019-12-16 17:05:34'),
(146, 2, 1, 'gdf', '2019-12-16 17:05:34'),
(147, 2, 1, 'gdf', '2019-12-16 17:05:34'),
(148, 2, 1, 'gdf', '2019-12-16 17:05:34'),
(149, 2, 1, 'gdf', '2019-12-16 17:05:34'),
(150, 2, 1, 'gdf', '2019-12-16 17:05:34'),
(151, 2, 1, 'gdf', '2019-12-16 17:05:34'),
(152, 2, 1, 'gdf', '2019-12-16 17:05:34'),
(153, 2, 1, 'sadf af df agdjhsak jgdhakjg hlkjh jgkl haikljwe;hgto;iawhpo8ige naoighfdoihoi gddahoiugh kjdfhgkjl hdfkjgh djkashfgkjhdklfs hgklh lk;ghalksghj klashdg alkhgj klhafdkjg hkjdf shjk hgasjk hgkjlhsad jklhgkja hjkdfhg jkhfg jkhdjkfg shjkdfsh gjkhdsf gjkhsdkjgf hkajdhg jkashdj;g hlkjshga lkhglk hsdfjkl ghjkgh dskjfhg jkhad jk', '2019-12-16 17:07:07'),
(154, 2, 1, 'fghfghfhg gf', '2019-12-16 17:07:10'),
(155, 2, 1, 'fghfghfhg gf', '2019-12-16 17:07:10'),
(156, 2, 1, 'yghkjghk hjk hjk hk hk ', '2019-12-16 17:07:15'),
(157, 2, 1, 'yghkjghk hjk hjk hk hk ', '2019-12-16 17:07:15'),
(158, 2, 1, 'yghkjghk hjk hjk hk hk ', '2019-12-16 17:07:15'),
(159, 2, 1, 'yghkjghk hjk hjk hk hk ', '2019-12-16 17:07:15'),
(160, 2, 1, 'hjkhjkjhjj', '2019-12-16 17:07:18'),
(161, 2, 1, 'hjkhjkjhjj', '2019-12-16 17:07:18'),
(162, 2, 1, 'hjkhjkjhjj', '2019-12-16 17:07:18'),
(163, 2, 1, 'hjkhjkjhjj', '2019-12-16 17:07:18'),
(164, 2, 1, 'hjkhjkjhjj', '2019-12-16 17:07:18'),
(165, 2, 1, 'hjkhjkjhjj', '2019-12-16 17:07:18'),
(166, 2, 1, 'hjkhjkjhjj', '2019-12-16 17:07:18'),
(167, 2, 1, 'hjkhjkjhjj', '2019-12-16 17:07:18'),
(168, 2, 1, 'dsffsdf', '2019-12-16 17:07:32'),
(169, 2, 1, 'dsffsdf', '2019-12-16 17:07:32'),
(170, 2, 1, 'dsffsdf', '2019-12-16 17:07:32'),
(171, 2, 1, 'dsffsdf', '2019-12-16 17:07:32'),
(172, 2, 1, 'dsffsdf', '2019-12-16 17:07:32'),
(173, 2, 1, 'dsffsdf', '2019-12-16 17:07:32'),
(174, 2, 1, 'dsffsdf', '2019-12-16 17:07:32'),
(175, 2, 1, 'dsffsdf', '2019-12-16 17:07:32'),
(176, 2, 1, 'dsffsdf', '2019-12-16 17:07:32'),
(177, 2, 1, 'dsffsdf', '2019-12-16 17:07:32'),
(178, 2, 1, 'dsffsdf', '2019-12-16 17:07:32'),
(179, 2, 1, 'dsffsdf', '2019-12-16 17:07:32'),
(180, 2, 1, 'dsffsdf', '2019-12-16 17:07:32'),
(181, 2, 1, 'dsffsdf', '2019-12-16 17:07:32'),
(182, 2, 1, 'dsffsdf', '2019-12-16 17:07:32'),
(183, 2, 1, 'dsffsdf', '2019-12-16 17:07:32'),
(184, 2, 1, 'fghfghf gh ', '2019-12-16 17:08:22'),
(185, 2, 1, 'fdgfgh ', '2019-12-16 17:08:25'),
(186, 2, 1, 'dfgdfgd', '2019-12-16 17:09:29'),
(187, 2, 1, 'gfhfg', '2019-12-16 17:09:34'),
(188, 2, 1, 'fghfg h fghgdf gh', '2019-12-16 17:09:39'),
(189, 2, 1, 'gdsf hsfg gdh dhj asdery er5hdrr agawsd gsandjkgfh aewrlkutfhkjasldhngjkashdgkjlhsdakjghajkhg', '2019-12-16 17:09:44'),
(190, 2, 1, 'husdhfuahd fuhasui ghuisahg iusah dghudhgu khuikashd ukhgdku ahjkgh hdsjkfgh skjdhgfkjh sakjdfhkj ghkjldsgh jkdshfg jkhdfgkj hdkjsg hjk', '2019-12-16 17:09:50'),
(191, 2, 1, 'dhfksjghdsfkujgh kjsdhfg kuniuvufneirunguherghioudsfhbkjlsdfhbjkfdnfkjlhdasjklghkljdnfbjkndskjgffjsdiajgo;iawjeio8gjnade;flgv nesoirhgf oi;sdjhfgblkshdlgi hdflk;ghjsdli;kfgh oidhg oihoiesdghaedsroigjhaoie;rhjgoie;hjgiodeg', '2019-12-16 17:09:56'),
(192, 2, 1, '<a href=\"index.php\">Главная</a>', '2019-12-16 17:10:44'),
(193, 2, 1, '<a href=\"pornhub.com\">Главное по жизни</a>', '2019-12-16 17:11:49'),
(194, 2, 1, '<a href=\"www.pornhub.com\">Новости</a>', '2019-12-16 17:13:27'),
(195, 2, 1, '<a href=\"vk.com\">Новости</a>', '2019-12-16 17:13:52'),
(196, 2, 1, '<a href=\"http://pornhub.com\">Новости</a>', '2019-12-16 17:14:10'),
(197, 2, 1, 'dfg', '2019-12-16 17:17:18'),
(198, 2, 1, 'ghdfj hj fh jh jjh ', '2019-12-16 17:17:25'),
(199, 2, 1, 'sdfsdf sdf sdf sfd ', '2019-12-16 17:20:50'),
(200, 2, 1, 'sdf', '2019-12-16 17:20:52'),
(201, 2, 1, 'dsfsfdsd fd sdf dfgs kjnngkl dsfjnlkg jklnglks ndflkgn lkvcbm,xmx,bc vn.bnrfmsnmgh, nfhjnf kldgnbkjlcnvbjnndsfklgjds kljgk ldsnbklcnxvblknfsdkgn dlfknsglk nbnvcmbkfgmshnlkfmgnhlkmfklnglkfdmngklmdsfklgm dsklgndsl kfngkd fnl;gnds lknbfvklnbvcbnfg f dfg ndflk gnd', '2019-12-16 17:21:04'),
(202, 2, 1, 'dgsgsd g', '2019-12-16 17:21:06'),
(203, 2, 1, 'dcsfsdf sfssdfsd', '2019-12-16 17:21:12'),
(204, 2, 1, 'sdfsdfs dfas g gs ', '2019-12-16 17:21:14'),
(205, 2, 1, 'dfg sfg dsgf dsgf ', '2019-12-16 17:21:15'),
(206, 2, 1, 'dsfg dsfg dsfg dsfg ', '2019-12-16 17:21:17'),
(207, 2, 2, 'gdgf dgfd ', '2019-12-16 19:10:34'),
(208, 2, 2, 'dgfg dsfhf dh ', '2019-12-16 19:10:40'),
(209, 2, 3, 'fgddghfdg h gdfhd ghd ', '2019-12-16 19:11:52'),
(210, 2, 4, 'Помнят с горечью древляне', '2019-12-16 19:27:44'),
(211, 2, 1, 'апврв вр ', '2019-12-16 19:27:58'),
(212, 2, 1, 'выпаывп фывп авып ывпа вып', '2019-12-16 19:56:18'),
(213, 2, 1, 'ывавы апв ввыпа ', '2019-12-16 20:01:06'),
(214, 2, 5, 'ыфва  ыфвп а', '2019-12-16 20:01:16'),
(215, 3, 1, 'ывфа ыфва ыфв а', '2019-12-16 20:03:55'),
(216, 3, 1, 'орл ', '2019-12-16 20:04:07'),
(217, 3, 1, 'gh', '2019-12-17 12:36:46'),
(218, 3, 1, 'ikl;', '2019-12-17 12:36:49');

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
(1, 'dsgd fsg s', 'dfsg sh s hfdg hdg hfd ghhfgd', 'fdgh fdgh dfgh fgh  fhssfde gghiueas giueasriughiuawsesfhreukgh kjldashg kjlhearkjl ghiulfdhgbui lhseriugl hdfgh  jklhegdsjk ghjkse hgkjbfdsjkg bjkdsrg hjkgdgf dfgs gf fdg ', '2019-12-17 14:34:31', 'https://img2.akspic.ru/image/146213-tigr-hishhnik-zivotnoe-bengalskij_tigr-bakenbardy-3840x2160.jpg'),
(2, 'dsgdfsg g', 'dfsg sgf dse fg', 'dfg dsfg sgh fgh dgh ', '2019-12-17 14:34:48', 'https://img2.akspic.ru/image/146213-tigr-hishhnik-zivotnoe-bengalskij_tigr-bakenbardy-3840x2160.jpg'),
(3, 'sdegdfgf gdf ', 'gghfgh fgh dfgh fdgh fdgh ', 'fgh fdgh fdgh fdgj tdsads fhs', '2019-12-17 14:34:57', 'https://img2.akspic.ru/image/146213-tigr-hishhnik-zivotnoe-bengalskij_tigr-bakenbardy-3840x2160.jpg'),
(4, 'fgdhfgdh hgj ', 'gfhjgfhj fhj dfg hg ', 'fdhg ghgfd  hfd hggh dft jghfj jh fdg ', '2019-12-17 14:35:05', 'https://img2.akspic.ru/image/146213-tigr-hishhnik-zivotnoe-bengalskij_tigr-bakenbardy-3840x2160.jpg'),
(5, 'ghjhjf j', 'fghdgh ', 'dfghdfghfdghfdgjghjghjghn ngjnngfyjgfhj', '2019-12-17 14:35:40', 'https://img2.akspic.ru/image/146213-tigr-hishhnik-zivotnoe-bengalskij_tigr-bakenbardy-3840x2160.jpg');

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
(1, 442, 1);

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
(35, 3, 1, 'Тестовая 2', 'Нужна термопаста', 1, 1, '2019-12-14 23:53:48', '2019-12-19', ' '),
(36, 3, 1, 'gfhdgh', 'gfdhdfghdfghfdgj', 2, 2, '2019-12-15 02:01:08', '2019-12-05', ' fgdhfjhhdfgrjgrfdj'),
(37, 3, 1, 'rwqerqwer', 'wqerqwerwqer', 1, 2, '2019-12-15 02:12:04', '2019-12-10', ' rwqerwreqwrwqer'),
(38, 3, 1, 'asdasd', 'asdasdasdasd', 1, 2, '2019-12-15 02:13:12', '2019-12-04', ' sadasdasdsdgaasdg'),
(39, 3, 1, 'fsaddgasdg', 'sadfgfgsadfsdagsdag', 1, 2, '2019-12-15 05:06:52', '2019-12-09', ' fasdfsagsfdhgfshfgdh'),
(40, 3, 2, 'вапвап в', 'вапвап ', 1, 2, '2019-12-16 20:06:05', '2019-12-11', ' пваып пы  апвыр ра пввпр ');

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
(3, 'Сверх', 'Человек', '111', '111', '111', '111', 1, 'Директор'),
(6, 'Говно', 'Говна', '1111', '1', 'Пошёл нахуй', 'snova@naxui', 0, 'Хуесос');

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
  MODIFY `id_message` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `priorities`
--
ALTER TABLE `priorities`
  MODIFY `priorityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `requests`
--
ALTER TABLE `requests`
  MODIFY `requestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

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
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
