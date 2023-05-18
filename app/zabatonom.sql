

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `zabatonom`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin_menu`
--

CREATE TABLE `admin_menu` (
  `id` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `style1` varchar(30) NOT NULL,
  `style2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `name`, `style1`, `style2`) VALUES
(1, 'управление товарами', 'darkBlue', 'active'),
(2, 'управление категориями', 'darkBlue', 'active'),
(3, 'управление заказами', 'darkBlue', 'active');

-- --------------------------------------------------------

--
-- Структура таблицы `assortiment`
--

CREATE TABLE `assortiment` (
  `id` int NOT NULL,
  `category_id` int NOT NULL,
  `name` varchar(30) CHARACTER SET utf16 COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `weight` int NOT NULL,
  `description` text NOT NULL,
  `ing1` varchar(30) NOT NULL,
  `ing2` varchar(20) NOT NULL,
  `ing3` varchar(20) NOT NULL,
  `slogan` varchar(20) NOT NULL,
  `top1` varchar(40) CHARACTER SET utf8mb4 NOT NULL,
  `top2` varchar(20) NOT NULL,
  `top3` varchar(20) NOT NULL,
  `best` int NOT NULL,
  `nal` varchar(20) NOT NULL,
  `photo` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `recommendation` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `assortiment`
--

INSERT INTO `assortiment` (`id`, `category_id`, `name`, `price`, `weight`, `description`, `ing1`, `ing2`, `ing3`, `slogan`, `top1`, `top2`, `top3`, `best`, `nal`, `photo`, `recommendation`) VALUES
(27, 1, 'Бородинский хлебушок', 124, 773, 'хлеб, приготовленный заварным способом из смеси ржаной обойной муки, пшеничной хлебопекарной муки II сорта и красного ржаного ферментированного солода, с добавлением соли, сахара, патоки и кориандра, тмина или аниса.', 'солод', 'кориандр', 'тмин', 'Выбирай спред!', 'хумус', 'масло', 'паштет', 1, '1', 'boroda.png', 1),
(39, 3, 'нарезной батон', 36, 500, 'Это хлебные изделия продолговатой формы с надрезами на поверхности. Батоны нарезные готовят из пшеничной муки высшего или 1-го сорта с добавлением в тесто сахара и маргарина, по 500 г муки высшего сорта и по 400 г из муки 1-го сорта.', ' пшеничная мука высшего сорта', 'маргарин', 'сахар', 'Хорошо макать!', 'в сациви', 'в бульон', 'в глазунью', 2, '1', 'nareznoy.png', 0),
(46, 3, 'плетенка', 50, 550, 'Советская Хала - Еврейская Хала. Посыпанная маком, с блестящей корочкой, со слегка сладковатой, очень белой и пышной мякотью, хала занимала почетное место между обычным батоном, который нарезали к обеду, и сдобными булочками, которые подавали к чаю.', 'Мука высшего сорта', 'Мак', 'Сахар', 'Создавай десерт!', 'сгущенка', 'шоколадное масло', 'мед', 3, '1', 'pletenka.png', 1),
(47, 3, 'Ситный ', 124, 773, 'Ситный хлеб, или ситник – хлеб, изготавливаемый из просеянной через сито муки. В старину он имел лучшие вкусовые качества по сравнению с решетным хлебом, мука для которого сеялась через решето. В старой пословице лукаво замечено «Ситный съел, так решетный цел».', 'мука', 'вода', 'сахар', 'Собери бутерброд', 'масло', 'руккола', 'огурцы', 1, '1', 'sitniy.png', 1),
(49, 2, 'Песочное', 45, 50, 'Такое пирожное еще называют школьным,  представляет собой песочное пирожное с кисловатым повидлом, покрытое помадкой.', 'повидло', 'помадка', 'песочное тесто', 'Управляй вкусом!', 'черничная радуга', 'малиновая пропитка', 'клюквенный джем', 1, '0', 'shugar.png', 1),
(50, 1, 'Ржаной формовой', 35, 770, 'Ароматная буханка черного хлеба - кладезь полезных витаминов и минералов, выпекается по классической рецептуре', 'Ржаная мука', 'Закваска', 'Солод', 'Собери бутерброд', 'ветчина', 'огурец', 'сыр', 1, '1', 'black.png', 0),
(51, 2, 'Корзинка', 45, 77, 'Радость советских и современных детишек! Классическая рецептура и натуральные ингредиенты вернут вас в мир детства', 'крем', 'зефир', 'сахар', 'Выбирай начинку', 'грибы', 'ягоды', 'цветы', 1, 'В наличии', 'korzinka.png', 0),
(52, 2, 'Эклер', 45, 77, 'Пирожное в виде трубочки из заварного теста, покрытой помадкой, с начинкой из сливочно-масляного или заварного крема.', 'Сливочный крем', 'Шоколадная глазурь', 'Ягоды', 'Управляй вкусом!', 'Шоколад', 'Сгущенка', 'Крем', 1, 'В наличии', 'ecler.png', 1),
(54, 2, 'Картошка', 45, 77, 'Пирожное картошка относится к крошковым пирожным. В основе таких пирожных бисквитная или песочная крошка, смешанная с кремом. Сами пирожные могут быть отделаны посыпкой, шоколадной глазурью, украшены кремом.', 'коньячная пропитка', 'песочная крошка', 'глазурь', 'выбирай любую', 'апельсин какао', 'корица кофе', 'начинка бонус', 4, 'В наличии', 'potato.png', 1),
(55, 2, 'Колечко', 45, 77, 'По классическому рецепту песочное кольцо готовится  арахисом. Но вместо арахиса мы используем другие орехи на любой вкус.', 'орехи', 'песочное тесто', 'сливочное масло', 'выбирай орехи!', 'фундук', 'фисташки', 'кешью', 2, 'В наличии', 'ring.png', 0),
(57, 3, 'Французский багет', 124, 500, 'Внутри имеет мягкий мякиш, а снаружи покрыто хрустящей корочкой. Продукт очень ценится жителями Франции, где без него не обходится практически ни один прием пищи.', 'мука', 'вода', 'соль', 'Идеально подходят', 'свежий салат', 'бокал шардоне', 'крестьянский сыр', 1, 'В наличии', 'baugette.png', 1),
(58, 3, 'Кукурузный', 100, 770, 'Кукурузный хлеб-это быстрый леб, приготовленный из кукурузной муки, который ассоциируется с кухней Юга Соединенных Штатов и берет свое начало в кухне коренных американцев.', 'Мука высшего сорта', 'кукурузная мука', 'соль', 'Идеально подходят', 'смородиновое желе', 'хренодер', 'хумус', 1, '1', 'product-3.png', 1),
(59, 3, 'Чиабатта ', 100, 770, 'Чиабатта – вид хлеба, который принадлежит к национальной итальянской кухне. Его рецепт меняется в зависимости от региона Италии, желания и вдохновения пекаря.', 'мука', 'вода', 'соль', 'Управляй вкусом!', 'моцарелла', 'оливковое масло', 'вяленые помидоры', 1, 'В наличии', 'chiabatta.png', 1),
(60, 1, 'зерновой', 100, 500, 'Для истинных любителей здорового питания. Один ломтик хлеба с утра заряжает энергией на целый день', 'Семена льна', 'Подсолнечные семечки', 'Кунжут', 'Выбирай спред', 'гуакамоле', 'творожный сыр', 'хумус', 1, 'В наличии', 'corners.png', 1),
(61, 1, 'Карельский', 124, 773, 'В своем составе содержит витамины: В1, Е, В2 и РР, фолиевую кислоту, а также большое количество клетчатки, белков, благодаря чему он весьма питательный.', 'изюм', 'чернослив', 'специи', 'Пробуй новое!', 'гранат', 'козий сыр', 'базилик', 2, 'В наличии', 'carel.png', 1),
(62, 1, 'Подовый', 100, 773, 'один из самых древних видов выпечки, его выпекают без использования формы, непосредственно на поде (дне) печи. ', 'мука 1 сорта', 'мука 2 сорта', 'соль', 'Идеально подходят', 'сметана', 'черри', 'зелень', 1, 'В наличии', 'podovi.png', 1),
(63, 1, 'Картофельный', 123, 773, 'Уникальный таежный рецепт, в котором картофель заменяет часть муки. Идеален для тех, кто заботится о своей фигуре', 'Мука грубого помола', 'Картофель', 'Дрожжи', 'Еще вкусней!', 'семга', 'горячий сыр', 'корнишон', 2, 'В наличии', 'potatoes.png', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name_category` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `sort_order` int NOT NULL,
  `status` int NOT NULL,
  `style` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `style2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name_category`, `sort_order`, `status`, `style`, `style2`) VALUES
(1, 'черный хлеб', 4, 2, 'catalog-menu__item--color-1', ''),
(2, 'пирожные', 2, 0, 'catalog-menu__item--color-2', 'wrap-block-undertitle--active'),
(3, 'белая выпечка', 3, 1, 'catalog-menu__item--color-3', '');

-- --------------------------------------------------------

--
-- Структура таблицы `menuadmin`
--

CREATE TABLE `menuadmin` (
  `id` int NOT NULL,
  `item` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `menuadmin`
--

INSERT INTO `menuadmin` (`id`, `item`) VALUES
(1, 'product'),
(2, 'category'),
(3, 'order');

-- --------------------------------------------------------

--
-- Структура таблицы `order_status`
--

CREATE TABLE `order_status` (
  `id` int NOT NULL,
  `value` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `order_status`
--

INSERT INTO `order_status` (`id`, `value`) VALUES
(1, 'в пути'),
(2, 'доставлено'),
(3, 'готов к выдаче');

-- --------------------------------------------------------

--
-- Структура таблицы `product_order`
--

CREATE TABLE `product_order` (
  `id` int NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_comment` text NOT NULL,
  `user_id` int DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `products` text NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `product_order`
--

INSERT INTO `product_order` (`id`, `user_name`, `user_phone`, `user_comment`, `user_id`, `date`, `products`, `status`) VALUES
(1, 'Котяра', '89201923888', 'ку-ку', 8, '2022-03-29 15:37:43', '{\"46\":3,\"5\":2,\"1\":5,\"3\":8,\"13\":2}', 1),
(8, 'Котяра', '89201983456', '', 8, '2022-03-30 12:28:26', '{\"1\":1}', 1),
(18, 'Котяра', '89201923881', '', 8, '2022-04-05 15:45:19', '{\"27\":1}', 1),
(19, 'Котяра', '89201923888', '', 8, '2022-04-06 13:47:59', '{\"2\":1}', 1),
(55, 'Псин', '77777777', '', 7, '2022-09-21 14:12:19', '{\"49\":3}', 1),
(56, 'Ситный', '89201923881', '', 6, '2022-09-21 14:15:29', '{\"27\":4}', 1),
(58, 'Псин', '77777777', 'Побыстрee', 7, '2022-09-21 14:17:23', 'false', 1),
(101, 'Котобус', '+7 920 192 38 88', '', 10, '2022-09-22 14:11:49', '{\"49\":2,\"51\":2,\"27\":1}', 2),
(102, 'Котобус', '+7 920 192 38 88', '', 10, '2022-09-22 14:21:07', '{\"27\":3}', 1),
(103, 'Котобус', '+7 920 192 38 88', '', 10, '2022-09-29 12:27:33', '{\"27\":2}', 2),
(105, 'Котобус', '+7 920 192 38 88', '', 10, '2022-09-30 10:51:55', '{\"27\":1}', 1),
(107, 'Котобус', '+7 920 192 38 88', '', 10, '2022-09-30 10:56:23', '{\"39\":1}', 2),
(110, 'Котобус', '+7 920 192 38 88', '', 10, '2022-10-04 17:45:21', '{\"54\":1}', 1),
(113, 'Котобус', '+7 920 192 38 88', 'uyr', 10, '2022-12-22 13:16:13', '{\"49\":2,\"39\":1}', 1),
(114, 'Котобус', '+7 920 192 38 88', '', 10, '2022-12-22 13:19:18', '{\"49\":1,\"51\":1,\"52\":1,\"53\":1}', 1),
(115, 'Котобус', '+7 920 192 38 88', 'sneller', 10, '2022-12-22 13:22:23', '{\"27\":2}', 1),
(116, 'Котобус', '+7 920 192 38 88', '', 10, '2022-12-22 13:26:51', '{\"49\":1}', 1),
(118, 'Волк', '0234', 'utgu', 14, '2023-03-09 05:37:55', '{\"49\":2,\"51\":1}', 1),
(119, 'Волк', '0234', '', 14, '2023-05-16 11:53:29', '{\"27\":1,\"46\":1}', 1),
(121, 'Волк', '0234', '', 14, '2023-05-16 13:01:01', '{\"39\":1}', 1),
(122, 'Волк', '0234', '', 14, '2023-05-16 13:05:05', '{\"27\":1,\"46\":1,\"49\":1}', 1),
(123, 'Волк', '0234', '', 14, '2023-05-16 13:28:52', '{\"27\":1,\"46\":1}', 1),
(125, 'Чудик', '+7 (799) 979-9999', '', 21, '2023-05-17 07:03:03', '{\"27\":1}', 1),
(126, 'Чудик', '+7 (799) 979-9999', '', 21, '2023-05-17 07:24:06', '{\"46\":1}', 2),
(127, 'Чудик', '+7 (799) 979-9999', '', 21, '2023-05-17 07:32:27', '{\"49\":1}', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id` int NOT NULL,
  `value` varchar(30) NOT NULL,
  `style` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id`, `value`, `style`) VALUES
(1, 'бестселлер', 'orange'),
(2, 'новинка!', 'myBlue'),
(3, 'уже в продаже', 'myGreen'),
(4, 'выгодно', 'myPink');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`, `phone`) VALUES
(3, 'Александр', 'alex@mail.com', '111111', '', ''),
(4, 'Виктор Зинченко', 'zinchenko.us@gmail.com', '222222', '', ''),
(5, 'Сергей', 'serg@mail.com', '111111', '', ''),
(6, 'Ситный', 'marselina88@list.ru', '3333333', '', ''),
(7, 'Псин', 'marselina@list.ru', '123', '', '77777777'),
(8, 'Котяра', 'Cobaka', '321', '', ''),
(9, 'Котей', 'marse@list.ru', '1233', '', ''),
(10, 'Котобус', 'mars@list.ru', '12335677', 'Admin', '+7 920 192 38 88'),
(11, 'Котейkahyhyh', 'marbvfvcbvs@list.ru', '12335677hhhh', 'adminlk', '+7 920 192 38 88h'),
(12, 'Котейkahyhyh', 'marbvfvcbv@list.ru', '12335677hhhh', 'adminlk', '+7 920 192 38 88h'),
(14, 'Волк', 'volk88@list.ru', '987654', 'Admin', '0234'),
(17, 'Псина', 'mseina@list.ru', '123456', '', '+79201923888'),
(19, 'Псина', 'eina@list.ru', '123456', '', '+79201923888'),
(20, 'Ситный', 'mar@list.ru', '123456', '', '345'),
(21, 'Чудик', 'volks88@list.ru', '132', '132', '+7 (799) 979-9999');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `assortiment`
--
ALTER TABLE `assortiment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `best` (`best`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menuadmin`
--
ALTER TABLE `menuadmin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `assortiment`
--
ALTER TABLE `assortiment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `menuadmin`
--
ALTER TABLE `menuadmin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `assortiment`
--
ALTER TABLE `assortiment`
  ADD CONSTRAINT `assortiment_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `assortiment_ibfk_2` FOREIGN KEY (`best`) REFERENCES `status` (`id`);

--
-- Ограничения внешнего ключа таблицы `product_order`
--
ALTER TABLE `product_order`
  ADD CONSTRAINT `product_order_ibfk_1` FOREIGN KEY (`status`) REFERENCES `order_status` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
