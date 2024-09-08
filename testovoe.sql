-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 08 2024 г., 12:41
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testovoe`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nameAuthor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id`, `created_at`, `updated_at`, `nameAuthor`) VALUES
(7, '2024-09-08 03:55:25', '2024-09-08 03:55:25', 'Гоголь Николай Васильевич'),
(8, '2024-09-08 05:52:31', '2024-09-08 05:52:31', 'Агата Кристи'),
(9, '2024-09-08 05:54:25', '2024-09-08 05:54:25', 'Харуки Мураками'),
(10, '2024-09-08 05:56:53', '2024-09-08 05:56:53', 'Джейн Остен'),
(11, '2024-09-08 05:58:25', '2024-09-08 05:58:25', 'Стивен Кинг'),
(12, '2024-09-08 06:02:11', '2024-09-08 06:02:11', 'Михаил Александрович Шолохов'),
(13, '2024-09-08 06:06:37', '2024-09-08 06:06:37', 'Иван Ефремов'),
(14, '2024-09-08 06:08:58', '2024-09-08 06:08:58', 'Борис Васильев');

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nameBook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_author` bigint UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicationYear` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_genre` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `created_at`, `updated_at`, `nameBook`, `id_author`, `description`, `publicationYear`, `id_genre`, `image`) VALUES
(9, '2024-09-08 05:52:15', '2024-09-08 06:39:49', 'Убийство в \"Восточном экспрессе\"', 7, 'Мировой кинобестселлер студии «Двадцатый Век Фокс»! Роман «Убийство в “Восточном экспрессе”» по своему значению для мирового остросюжетного жанра стоит рядом с «Десятью негритятами»;', '2017', 1, 'jpeqTshhLKwyyhjXC9HES8aRkfU2VQp53EGZgSGt.jpg'),
(10, '2024-09-08 05:56:24', '2024-09-08 05:56:24', 'Норвежский лес', 9, 'Роман «Норвежский лес» принес автору поистине всемирную известность. Тонкие психологические нюансы, музыка, наполняющая страницы, эротизм — все это есть в романе, от которого невозможно оторваться.', '1987', 1, 'uwOoplDa8tFYkrSlFj9DwJSyRPZaqdHx3zTSn77s.jpg'),
(11, '2024-09-08 05:57:52', '2024-09-08 05:57:52', 'Гордость и предубеждение.', 10, 'Роман \"Гордость и предубеждение\" - роман о любви, любви свободной, лишенной сословных ограничений.', '1813', 1, 'mio9gOyD8ChDJxZGNMR4mSAwfcG90WYLaODKSGTh.jpg'),
(12, '2024-09-08 05:59:29', '2024-09-08 05:59:29', 'Ночная смена', 11, '«Ночная смена» — сборник рассказов американского писателя Стивена Кинга.', '1978', 2, 'wwX8GANRUdWKwufOEj21LtQNx2MA9XoNw6e68cjz.jpg'),
(13, '2024-09-08 06:03:18', '2024-09-08 06:03:18', 'Тихий Дон', 12, '\"Тихий Дон\" - масштабное эпическое полотно, повествующее о донском казачестве в самый противоречивый, переломный период истории нашей страны - кровавой Первой мировой и братоубийственной Гражданской войны', '1928', 1, 'abckcU9ppqdTkbzCZ0hItTSxESGdgt1OKetmEyUN.jpg'),
(14, '2024-09-08 06:07:29', '2024-09-08 06:07:29', 'Час быка', 13, 'Социально-философский роман классика отечественной научной фантастики Ивана Антоновича Ефремова о путешествии людей коммунистического будущего на планету Торманс, объединившую в себе черты \"государственного капитализма\" и \"муравьиного лжесоциализма\".', '1968', 1, 'CfCKWQOS3zFjlabhZFVBcHOmvelR9dHoQVE8bjqV.jpg'),
(15, '2024-09-08 06:10:20', '2024-09-08 06:10:20', 'А зори здесь тихие...', 14, 'В книгу вошли известные повести Б. Васильева, рассказывающие о Великой Отечественной войне, участником и свидетелем которой был автор, и произведения.', '1969', 1, 'yaW5PKW0ljrauWMqX4gDKeZM0hs0aZSePly5bEvl.jpg'),
(16, '2024-09-08 06:17:40', '2024-09-08 06:17:40', 'После заката', 11, 'И теперь - \"После заката\". Новые рассказы от \"короля ужасов\"! \"Чертова дюжина\" историй, каждая из которых способна напугать даже читателя с самыми крепкими нервами', '2011', 4, '65wzkhoRX4CnR6KXgyt9u9GcYOSfq3y4Myq9MCaC.jpg'),
(17, '2024-09-08 06:18:32', '2024-09-08 06:18:32', 'Худеющий', 11, 'Ужас, что пришел в сытый богатый городок, принял обличье цыганского табора. Цыгане, вечные бродяги, за мелкие монеты развлекающие толпу, владеют стародавними секретами черного колдовского искусства.', '1984', 4, 'jSTgtE9CBkStxvFSakl83nPDfJO4G2tiHl55Q6Gs.jpg'),
(18, '2024-09-08 06:19:37', '2024-09-08 06:19:37', 'Позже', 11, 'Джейми Конклин, живущий с матерью в Нью-Йорке, хочет быть всего лишь обычным подростком… но у него есть весьма необычный дар. Дар, который его мама настоятельно просит скрывать от других.', '2021', 4, 'yB0cfOMxjrlxJEG7X8snDou8nbtEh3KnNpj8TcnY.jpg'),
(19, '2024-09-08 06:20:47', '2024-09-08 06:20:47', 'Сияние', 11, '…Проходят годы, десятилетия, но потрясающая история писателя Джека Торранса, его сынишки Дэнни, наделенного необычным даром, и поединка с темными силами, обитающими в роскошном отеле «Оверлук»', '1977', 4, 'pvTNdZlnop4M9gK20YZUblgIENpk9Kzp4s8XuuHH.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `genres`
--

CREATE TABLE `genres` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `titleGenre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `genres`
--

INSERT INTO `genres` (`id`, `created_at`, `updated_at`, `titleGenre`) VALUES
(1, NULL, NULL, 'Драма'),
(2, NULL, NULL, 'Детектив'),
(3, NULL, NULL, 'Триллер'),
(4, NULL, NULL, 'Ужасы'),
(5, NULL, NULL, 'Комедия'),
(6, NULL, NULL, 'Роман'),
(7, NULL, NULL, 'Повесть');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2014_09_03_133114_create_roles_table', 1),
(18, '2014_10_12_000000_create_users_table', 1),
(19, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(20, '2019_08_19_000000_create_failed_jobs_table', 1),
(21, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(22, '2024_08_01_174558_create_authors_table', 1),
(23, '2024_08_03_132655_create_genres_table', 1),
(24, '2024_09_02_174536_create_books_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `titleRole` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `titleRole`, `created_at`, `updated_at`) VALUES
(1, 'Администратор', NULL, NULL),
(2, 'Пользователь', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_role` bigint UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `email_verified_at`, `password`, `id_role`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Алексей', 'Огурцов', 'lesha1@gmail.com', NULL, '$2y$12$155GfTr5OLe4K.uGCN0PoOih5q6Ngf6GBsPWNbSlKRJ3eheSygOrq', 2, NULL, '2024-09-08 06:34:29', '2024-09-08 06:34:29'),
(6, 'Надежда', 'Ильина', 'admin@gmail.com', NULL, '$2y$12$Y1.ryEe5caVvnl9UaRjIvOsxkezyqd3dRh2hlcPQidBie.Go.R3/e', 1, NULL, '2024-09-08 06:36:26', '2024-09-08 06:36:26');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_id_author_foreign` (`id_author`),
  ADD KEY `books_id_genre_foreign` (`id_genre`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_role_foreign` (`id_role`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_id_author_foreign` FOREIGN KEY (`id_author`) REFERENCES `authors` (`id`),
  ADD CONSTRAINT `books_id_genre_foreign` FOREIGN KEY (`id_genre`) REFERENCES `genres` (`id`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_role_foreign` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
