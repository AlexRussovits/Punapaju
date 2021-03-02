-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 02 2021 г., 16:34
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
-- База данных: `punapaju`
--

-- --------------------------------------------------------

--
-- Структура таблицы `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `index_number_auto` varchar(10) NOT NULL,
  `text` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deteletd_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `email`, `phone_number`, `index_number_auto`, `text`, `created_at`, `updated_at`, `deteletd_at`) VALUES
(2, 'Andrey Ryzhikov', 'andrey.ryzhikov@email.com', '+37256344868', '099 BTT', 'Проблема с мотором', '2021-02-21 18:18:12', '2021-02-21 18:18:12', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Услуги'),
(2, 'Контакты'),
(6, 'О нас'),
(7, 'Галерея');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Aleksei', 'test@mail.ru', 'Саня, включай мозги', '2021-02-21 15:48:54', '2021-02-21 15:48:54', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'storage/1.jpg', NULL, NULL, NULL),
(2, 'storage/6.jpg', NULL, NULL, NULL),
(3, 'storage/2.jpg', NULL, NULL, NULL),
(4, 'storage/3.jpg', NULL, NULL, NULL),
(5, 'storage/5.jpg', NULL, NULL, NULL),
(6, 'storage/4.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `descr_long` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`, `descr_long`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Шиномонтаж', 'Замена сезонной резины, балансировка, продажа резины.', 'storage/5.jpg', 'Замена шин - обязательная и необходимая процедура при постоянной смене погодных условий.\r\nПротектор каждой шины подвержен износу и очень важно не упустить момент, когда он достиг критического уровня и шина уже не может обеспечить должную безопасность.\r\nСостояние шин стоит регулярно проверять : правильное ли давление и равномерный ли износ. При возникновении проблем - их нужно сразу же устранить или же обратиться к специалисту.\r\nВ Vianor мы оцениваем шины как вашу безопасность при движении. В наших шинных центрах работают профессиональные и опытные техники, которые помогут Вам выяснить и устранить проблему.', NULL, NULL, NULL),
(2, 'Обслуживание', 'Замена масла, салонных, воздушных, топливных фильтров.', 'storage/1.jpg', 'Это комплекс профилактических мероприятий. В исправном двигателе происходит естественный процесс старения масла, но помимо этого его свойства ухудшаются из-за окисления, срабатывания присадок, внешних загрязнений.. Задача технического обслуживания – не допустить отказов и неисправностей. Техническое обслуживание обычно включает замену моторного масла, масла в коробке передач, салонных, воздушных, масляных и топливных фильтров.\r\n\r\n', NULL, NULL, NULL),
(3, 'Сварочные работы', 'Ремонт глушителей, аргоновая сварка, ремонт литых дисков, и др.', 'storage/2.jpg', 'Основой выхлопной системы автомобиля является глушитель. Его главная задача заключается в снижении уровня шума транспортного средства, а также в корректном выводе выхлопных газов в обход салона автомобиля. Он выполняет и менее заметные, на первый взгляд, задачи, такие как снижение давления и температуры выхлопных газов. От корректной работы глушителя зависит не только комфорт и тишина при управлении авто, но и качество работы двигателя. Следовательно, ремонт глушителя не стоит откладывать в долгий ящик. При первых симптомах его неисправности обращайтесь в наш сервис.\r\n\r\n', NULL, NULL, NULL),
(4, 'Слесарные работы', 'Ремонт ходовой части, двигателя, стартера, тормозов, сцепления, и т.д.', 'storage/3.jpg', 'В случае какой-либо поломки, вам следует обратиться в автомастерскую Punapaju OÜ. Мы выполняем многие виды ремонтных работ. Все автозапчасти можно заказать на месте.', NULL, NULL, NULL),
(5, 'Замена ГРМ ремня и цепи', 'Замена газораспределительного ремня и комплектующих.', 'storage/6.jpg', 'В устройстве газораспределительного механизма ремень обеспечивает гибкое соединение коленчатого и распределительного вала. Кроме того, благодаря ремню ГРМ происходит движение клапанов двигателя, синхронизированное с работой поршней.', NULL, NULL, NULL),
(6, 'Антикор', 'Покрытие днища машины антикоррозийной мастикой.', 'storage/4.jpg', 'Цель антикоррозийной обработки автомобиля – защитить кузов от воздействия неблагоприятных атмосферных факторов. Если удастся оградить стальные детали кузова от контакта с водой и кислородом, срок службы машины увеличится в несколько раз.', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `sponsor`
--

CREATE TABLE `sponsor` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sponsor`
--

INSERT INTO `sponsor` (`id`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'storage/continental.png', NULL, NULL, NULL),
(2, 'storage/bosch.png', NULL, NULL, NULL),
(3, 'storage/gates.png', NULL, NULL, NULL),
(4, 'storage/skf.png', NULL, NULL, NULL),
(5, 'storage/trw.png', NULL, NULL, NULL),
(6, 'storage/bilstein.png', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alesha Popovich', 'admin', '$2y$10$PPQ0zPlaKaQ.R7FAmx9sX.qmEi7gse4HZdKZgRiW5z91iGV8fbThu', NULL, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
