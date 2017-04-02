-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 24 2017 г., 11:14
-- Версия сервера: 5.7.16-log
-- Версия PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `php2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header` varchar(200) DEFAULT NULL,
  `text` text,
  `author` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `header`, `text`, `author`) VALUES
(1, 'Qualcomm Snapdragon 660 в тестах AnTuTu показывает неплохие результаты', 'Месяц назад, один из ведущих производителей процессоров для мобильных устройств, компания Qualcomm представила свои новые чипы Snapdragon 630, Snapdragon 635 и Snapdragon 660.Все три новинки будут производиться с использованием 14-нм литографии, и последний из них, предназначенный для устройств средней ценовой категорииуже вскоре появится на рынке в составе новых смартфонов компаний Xiaomi, OPPO и Vivo. Чего же мы можем ожидать от этого чипа? Если верить просочившимся в Сеть результатам теста AnTuTu, где неизвестный смартфон с процессором Snapdragon 660 на борту показал результат в пределах 105580 баллов, что находится на уровне Meizu Pro 6 Plus с восьмиядерным чипом Samsung Exynos 8890 Octa, новинка будет обеспечивать достаточно неплохую, как для процессора среднего уровня производительность. В частности, сам процессор в тесте AnTuTu набрал 31 982 балла, а за работу с оперативной памятью и 3D графикой смартфон выполненный на его базе получил оценки в 7067 и 30827 баллов, соответственно.', '4tablet-pc.net'),
(2, 'Microsoft обновила расширение Skype для браузера Chrome', 'Компания Microsoft выпустила очередное обновление расширения сервиса Skype для браузера Google Chrome, повышая уровень его интеграции с другими действиями пользователей в глобальной сети.\r\nРазработчики пишут, что это обновление приносит возможность вставлять ссылки на звонки в Skype по одному нажатию из почтовых клиентов, календарей и твитов.Можно создавать ссылки Skype при написании новых писем в Gmail, в Google Inbox и Outlook.com. В последнем можно создавать ссылки Skype и в календаре, как и в календаре Google. То же самое можно сделать при написании нового твита в Twitter. Новая версия расширения доступна для установки в магазине Google Chrome в браузере.', 'OSzone.net'),
(3, 'Facebook запретил разработчикам!', 'Facebook запретит разработчикам использовать хранящиеся в социальной сети личные данные пользователей для слежки. В компании сообщили, что принимают политику по данному вопросу. Теперь создатели приложений, получившие доступ к информации пользователей соцсети для разработки программного обеспечения, будут обязаны защищать его от «несанкционированного доступа, использования или раскрытия». В Facebook подчеркнули, что «нельзя использовать информацию с целью создания инструментов для слежки».', 'Facebook'),
(4, 'Apple выпустила iOS 10.3 beta 6 для iPhone и iPad', 'Apple выпустила iOS 10.3 beta 6, предназначенную для iPhone, iPod touch и iPad. Релиз предыдущей, пятой по счету, сборки состоялся на прошлой неделе – 8 марта. Сокращение сроков релиза свидетельствует о предстоящем дебюте финальной версии iOS 10.3. iOS 10.3 beta 6 доступна для загрузки на официальном сайте Apple, а также на iPhone и iPad при наличии конфигурационного профиля. Размер шестой бета-версии iOS 10.3 составляет около 466 МБ. Она не приносит никаких визуальных изменений: разработчики дорабатывают новшества, реализованные iOS 10.3 beta 1-5. В iOS 10.3 компания Apple переводит iPhone и iPad на новую файловую систему APFS. Как мы уже могли убедиться, этот шаг позволил сделать гаджеты более производительными. В настройках появился отдельный профиль Apple ID, который включает все устройства пользователя и ссылки на iTunes, iCloud, App Store, семейный доступ.', 'MacDigger.ru'),
(5, 'Apple выпустила красный iPhone', 'Корпорация Apple выпустила iPhone 7 и 7 Plus в ярко-красном цвете корпуса. Кроме этого,\r\n                   был представлен новый планшет iPad, сообщается в пресс-релизе компании, поступившем в «Ленту.ру».\r\n                   Новая версия iPhone 7 создана в рамках благотворительной кампании (RED), поэтому часть средств от продаж\r\n                   специальной версии устройств будет направлена в Глобальный фонд для борьбы со СПИДом. Телефоны в новом цвете\r\n                   будут доступны лишь в версиях на 128 и 256 гигабайт накопителя, а их продажа начнется в пятницу, 24 марта.', 'lenta.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
