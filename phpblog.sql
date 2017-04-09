-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 09 2017 г., 21:38
-- Версия сервера: 10.1.9-MariaDB
-- Версия PHP: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `phpblog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_d` varchar(255) NOT NULL,
  `meta_k` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `meta_d`, `meta_k`, `text`) VALUES
(1, 'HTML кодинг', 'Описание HTML кодинг', 'Ключи HTML кодинг', '<p>Текст для описания категории HTML кодинг</p>'),
(2, 'PHP мысли', 'Описание PHP мысли', 'Ключи PHP мысли', '<p>Текст для описания категории PHP мысли</p>'),
(3, 'фотошоп', 'Описание фотошоп', 'Ключи фотошоп', '<p>Текст для описания категории фотошоп</p>');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(5) NOT NULL,
  `post` int(5) NOT NULL,
  `author` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `post`, `author`, `text`, `date`) VALUES
(1, 2, 'Марина', 'Привет, это мой первый комментарий, я его пишу сюда, потому-что вот.', '2017-04-03'),
(2, 2, 'Виталик', 'Привет, меня зовут Виталик, я хочу купить себе Киа Спортейж, поэтому мне нужно усиленно заниматься.', '2017-04-03'),
(3, 2, 'Виталик', 'Привет, меня зовут Виталик, я хочу купить себе Киа Спортейж, поэтому мне нужно усиленно заниматься.', '2017-04-03'),
(4, 2, 'ert', 'sert', '2017-04-08'),
(5, 2, 'ttt', 'ttt', '2017-04-09'),
(6, 2, 'yyy', 'yyy', '2017-04-09'),
(7, 2, 'asrt', 'asf', '2017-04-09'),
(8, 2, 'aser', 'wer', '2017-04-09'),
(9, 2, 'ghjfghjfg', 'dghjd', '2017-04-09'),
(10, 2, 'test', 'refresh', '2017-04-09'),
(11, 2, 'sdfg', 'dfg', '2017-04-09'),
(12, 2, 'sdf', 'sdf', '2017-04-09'),
(13, 2, 'sdf', 'sdf', '2017-04-09'),
(14, 2, 'sfg', 'dfg', '2017-04-09'),
(15, 2, 'sdf', 'sdf', '2017-04-09'),
(16, 2, 'sdf', 'sdf', '2017-04-09'),
(17, 2, '+++', '+++', '2017-04-09');

-- --------------------------------------------------------

--
-- Структура таблицы `comments_setting`
--

CREATE TABLE `comments_setting` (
  `id` int(1) NOT NULL,
  `img` varchar(255) NOT NULL,
  `sum` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments_setting`
--

INSERT INTO `comments_setting` (`id`, `img`, `sum`) VALUES
(1, 'img/sum.gif', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `data`
--

CREATE TABLE `data` (
  `id` int(5) NOT NULL,
  `cat` int(1) NOT NULL,
  `meta_d` varchar(255) NOT NULL,
  `meta_k` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `text` text NOT NULL,
  `view` int(7) NOT NULL,
  `author` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `mini_img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `data`
--

INSERT INTO `data` (`id`, `cat`, `meta_d`, `meta_k`, `description`, `text`, `view`, `author`, `date`, `mini_img`, `title`) VALUES
(1, 3, 'Описание', 'Ключеввые слова', 'Какой-то текст для категории №3, и картинка к нему.', '                        <div class="col-md-12">\r\n                            <h1>Статья 1</h1>\r\n                            <p class="text-justify">\r\n                                Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.       \r\n                                Значимость этих проблем настолько очевидна, что укрепление и развитие структуры влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.\r\n                            </p>\r\n                            <p class="text-justify">\r\n                                Таким образом постоянный количественный рост и сфера нашей активности способствует подготовки и реализации модели развития.       \r\n                                С другой стороны новая модель организационной деятельности требуют от нас анализа существенных финансовых и административных условий.       \r\n                                Значимость этих проблем настолько очевидна, что сложившаяся структура организации способствует подготовки и реализации системы обучения кадров, соответствует насущным потребностям.       \r\n                                Значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития.       \r\n                                Таким образом консультация с широким активом требуют от нас анализа форм развития.       \r\n                                Равным образом дальнейшее развитие различных форм деятельности в значительной степени обуславливает создание форм развития.\r\n                                </p>\r\n                                <img src="files/29.03.2017/1/1.jpg" width="100%">\r\n                            <p class="text-justify">\r\n                                С другой стороны новая модель организационной деятельности позволяет оценить значение направлений прогрессивного развития.       \r\n                                Идейные соображения высшего порядка, а также начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании существенных финансовых и административных условий.       \r\n                                Повседневная практика показывает, что реализация намеченных плановых заданий в значительной степени обуславливает создание позиций, занимаемых участниками в отношении поставленных задач.       \r\n                                С другой стороны консультация с широким активом обеспечивает широкому кругу (специалистов) участие в формировании направлений прогрессивного развития.       \r\n                                Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий способствует подготовки и реализации новых предложений.\r\n                            </p>\r\n                        </div>\r\n', 0, 'Свирид Виталий', '2017-01-28', '<img src="files/29.03.2017/1/1_result.jpg">', 'Загаловок статьи при выводе категории'),
(2, 3, 'Описание', 'Ключеввые слова', 'Какой-то текст для категории №3, и картинка к нему.', '                        <div class="col-md-12">\r\n                            <h1>Статья 2</h1>\r\n                            <p class="text-justify">\r\n                                Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.       \r\n                                Значимость этих проблем настолько очевидна, что укрепление и развитие структуры влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.\r\n                            </p>\r\n                            <p class="text-justify">\r\n                                Таким образом постоянный количественный рост и сфера нашей активности способствует подготовки и реализации модели развития.       \r\n                                С другой стороны новая модель организационной деятельности требуют от нас анализа существенных финансовых и административных условий.       \r\n                                Значимость этих проблем настолько очевидна, что сложившаяся структура организации способствует подготовки и реализации системы обучения кадров, соответствует насущным потребностям.       \r\n                                Значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития.       \r\n                                Таким образом консультация с широким активом требуют от нас анализа форм развития.       \r\n                                Равным образом дальнейшее развитие различных форм деятельности в значительной степени обуславливает создание форм развития.\r\n                                </p>\r\n                                <img src="files/29.03.2017/1/1.jpg" width="100%">\r\n                            <p class="text-justify">\r\n                                С другой стороны новая модель организационной деятельности позволяет оценить значение направлений прогрессивного развития.       \r\n                                Идейные соображения высшего порядка, а также начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании существенных финансовых и административных условий.       \r\n                                Повседневная практика показывает, что реализация намеченных плановых заданий в значительной степени обуславливает создание позиций, занимаемых участниками в отношении поставленных задач.       \r\n                                С другой стороны консультация с широким активом обеспечивает широкому кругу (специалистов) участие в формировании направлений прогрессивного развития.       \r\n                                Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий способствует подготовки и реализации новых предложений.\r\n                            </p>\r\n                        </div>\r\n', 83, 'Свирид Виталий', '2017-01-28', '<img src="files/29.03.2017/1/2_result.jpg">', 'Загаловок статьи при выводе категории'),
(3, 2, 'Описание', 'Ключеввые слова', 'Какой-то текст для категории №2, и картинка к нему.', '                        <div class="col-md-12">\r\n                            <h1>Статья 3</h1>\r\n                            <p class="text-justify">\r\n                                Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.       \r\n                                Значимость этих проблем настолько очевидна, что укрепление и развитие структуры влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.\r\n                            </p>\r\n                            <p class="text-justify">\r\n                                Таким образом постоянный количественный рост и сфера нашей активности способствует подготовки и реализации модели развития.       \r\n                                С другой стороны новая модель организационной деятельности требуют от нас анализа существенных финансовых и административных условий.       \r\n                                Значимость этих проблем настолько очевидна, что сложившаяся структура организации способствует подготовки и реализации системы обучения кадров, соответствует насущным потребностям.       \r\n                                Значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития.       \r\n                                Таким образом консультация с широким активом требуют от нас анализа форм развития.       \r\n                                Равным образом дальнейшее развитие различных форм деятельности в значительной степени обуславливает создание форм развития.\r\n                                </p>\r\n                                <img src="files/29.03.2017/1/3.jpg" width="100%">\r\n                            <p class="text-justify">\r\n                                С другой стороны новая модель организационной деятельности позволяет оценить значение направлений прогрессивного развития.       \r\n                                Идейные соображения высшего порядка, а также начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании существенных финансовых и административных условий.       \r\n                                Повседневная практика показывает, что реализация намеченных плановых заданий в значительной степени обуславливает создание позиций, занимаемых участниками в отношении поставленных задач.       \r\n                                С другой стороны консультация с широким активом обеспечивает широкому кругу (специалистов) участие в формировании направлений прогрессивного развития.       \r\n                                Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий способствует подготовки и реализации новых предложений.\r\n                            </p>\r\n                        </div>\r\n', 3, 'Свирид Виталий', '2017-02-28', '<img src="files/29.03.2017/1/3_result.jpg">', 'Загаловок статьи при выводе категории'),
(4, 2, 'Описание', 'Ключеввые слова', 'Какой-то текст для категории №2, и картинка к нему.', '                        <div class="col-md-12">\r\n                            <h1>Статья 4</h1>\r\n                            <p class="text-justify">\r\n                                Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.       \r\n                                Значимость этих проблем настолько очевидна, что укрепление и развитие структуры влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.\r\n                            </p>\r\n                            <p class="text-justify">\r\n                                Таким образом постоянный количественный рост и сфера нашей активности способствует подготовки и реализации модели развития.       \r\n                                С другой стороны новая модель организационной деятельности требуют от нас анализа существенных финансовых и административных условий.       \r\n                                Значимость этих проблем настолько очевидна, что сложившаяся структура организации способствует подготовки и реализации системы обучения кадров, соответствует насущным потребностям.       \r\n                                Значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития.       \r\n                                Таким образом консультация с широким активом требуют от нас анализа форм развития.       \r\n                                Равным образом дальнейшее развитие различных форм деятельности в значительной степени обуславливает создание форм развития.\r\n                                </p>\r\n                                <img src="files/29.03.2017/1/4.jpg" width="100%">\r\n                            <p class="text-justify">\r\n                                С другой стороны новая модель организационной деятельности позволяет оценить значение направлений прогрессивного развития.       \r\n                                Идейные соображения высшего порядка, а также начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании существенных финансовых и административных условий.       \r\n                                Повседневная практика показывает, что реализация намеченных плановых заданий в значительной степени обуславливает создание позиций, занимаемых участниками в отношении поставленных задач.       \r\n                                С другой стороны консультация с широким активом обеспечивает широкому кругу (специалистов) участие в формировании направлений прогрессивного развития.       \r\n                                Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий способствует подготовки и реализации новых предложений.\r\n                            </p>\r\n                        </div>\r\n', 18, 'Свирид Виталий', '2017-02-28', '<img src="files/29.03.2017/1/4_result.jpg">', 'Загаловок статьи при выводе категории'),
(5, 1, 'Описание', 'Ключеввые слова', 'Какой-то текст для категории №1, и картинка к нему.', '                        <div class="col-md-12">\r\n                            <h1>Статья 5</h1>\r\n                            <p class="text-justify">\r\n                                Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.       \r\n                                Значимость этих проблем настолько очевидна, что укрепление и развитие структуры влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.\r\n                            </p>\r\n                            <p class="text-justify">\r\n                                Таким образом постоянный количественный рост и сфера нашей активности способствует подготовки и реализации модели развития.       \r\n                                С другой стороны новая модель организационной деятельности требуют от нас анализа существенных финансовых и административных условий.       \r\n                                Значимость этих проблем настолько очевидна, что сложившаяся структура организации способствует подготовки и реализации системы обучения кадров, соответствует насущным потребностям.       \r\n                                Значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития.       \r\n                                Таким образом консультация с широким активом требуют от нас анализа форм развития.       \r\n                                Равным образом дальнейшее развитие различных форм деятельности в значительной степени обуславливает создание форм развития.\r\n                                </p>\r\n                                <img src="files/29.03.2017/1/5.jpg" width="100%">\r\n                            <p class="text-justify">\r\n                                С другой стороны новая модель организационной деятельности позволяет оценить значение направлений прогрессивного развития.       \r\n                                Идейные соображения высшего порядка, а также начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании существенных финансовых и административных условий.       \r\n                                Повседневная практика показывает, что реализация намеченных плановых заданий в значительной степени обуславливает создание позиций, занимаемых участниками в отношении поставленных задач.       \r\n                                С другой стороны консультация с широким активом обеспечивает широкому кругу (специалистов) участие в формировании направлений прогрессивного развития.       \r\n                                Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий способствует подготовки и реализации новых предложений.\r\n                            </p>\r\n                        </div>\r\n', 1, 'Свирид Виталий', '2017-03-28', '<img src="files/29.03.2017/1/5_result.jpg">', 'Загаловок статьи при выводе категории'),
(6, 1, 'Описание', 'Ключеввые слова', 'Какой-то текст для категории №1, и картинка к нему.', '                        <div class="col-md-12">\n                            <h1>Статья 6</h1>\n                            <p class="text-justify">\n                                Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.       \n                                Значимость этих проблем настолько очевидна, что укрепление и развитие структуры влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.\n                            </p>\n                            <p class="text-justify">\n                                Таким образом постоянный количественный рост и сфера нашей активности способствует подготовки и реализации модели развития.       \n                                С другой стороны новая модель организационной деятельности требуют от нас анализа существенных финансовых и административных условий.       \n                                Значимость этих проблем настолько очевидна, что сложившаяся структура организации способствует подготовки и реализации системы обучения кадров, соответствует насущным потребностям.       \n                                Значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании форм развития.       \n                                Таким образом консультация с широким активом требуют от нас анализа форм развития.       \n                                Равным образом дальнейшее развитие различных форм деятельности в значительной степени обуславливает создание форм развития.\n                                </p>\n                                <img src="files/29.03.2017/1/6.jpg" width="100%">\n                            <p class="text-justify">\n                                С другой стороны новая модель организационной деятельности позволяет оценить значение направлений прогрессивного развития.       \n                                Идейные соображения высшего порядка, а также начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании существенных финансовых и административных условий.       \n                                Повседневная практика показывает, что реализация намеченных плановых заданий в значительной степени обуславливает создание позиций, занимаемых участниками в отношении поставленных задач.       \n                                С другой стороны консультация с широким активом обеспечивает широкому кругу (специалистов) участие в формировании направлений прогрессивного развития.       \n                                Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий способствует подготовки и реализации новых предложений.\n                            </p>\n                        </div>', 6, 'Свирид Виталий', '2017-03-28', '<img src="files/29.03.2017/1/6_result.jpg">', 'Загаловок статьи при выводе категории');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_d` varchar(255) NOT NULL,
  `meta_k` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `page` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `title`, `meta_d`, `meta_k`, `text`, `page`) VALUES
(1, 'Блог странного веб дизайнера', 'Это я учусь у Жени Попова', 'Учеба, вебдизайн, Попов', '<p>Это вступительная страница блога, он создан как пособие в освоении PHP, и дальнейшего развития навыков в сайтостроении.\r\n</p>\r\n<p>\r\nНужно быстрее пройти и усвоить данную информацию.\r\n</p>', 'index');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments_setting`
--
ALTER TABLE `comments_setting`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `comments_setting`
--
ALTER TABLE `comments_setting`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `data`
--
ALTER TABLE `data`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
