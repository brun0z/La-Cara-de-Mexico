-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-01-2022 a las 04:11:35
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `news`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `AdminUserName` varchar(255) NOT NULL,
  `AdminPassword` varchar(255) NOT NULL,
  `AdminEmailId` varchar(255) NOT NULL,
  `Is_Active` int(11) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `AdminUserName`, `AdminPassword`, `AdminEmailId`, `Is_Active`, `CreationDate`, `UpdationDate`) VALUES
(1, 'admin', '$2y$10$7tdMhLyjW7h3Snbr5PCtWukO3lerjH4oYf1LSxwP9pNZKD19ZaEl2', 'noidatut@gmail.com', 1, '2019-05-27 17:51:00', '2021-12-31 23:29:08'),
(2, 'nicocalarco', 'nicocalarco', '', 1, '2021-12-31 23:10:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL,
  `CategoryName` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `CategoryName`, `Description`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(2, 'Política', 'Política', '2018-06-06 10:28:09', '2021-12-31 21:10:31', 1),
(3, 'Economía', 'Economía', '2018-06-06 10:35:09', '2021-12-31 21:10:44', 1),
(4, 'Sociedad', 'Sociedad', '2018-06-14 05:32:58', '2022-01-03 16:26:54', 1),
(5, 'Deportes', 'Deportes', '2018-06-22 15:46:09', '2022-01-03 16:27:03', 1),
(6, 'Internacional', 'Internacional', '2018-06-22 15:46:22', '2022-01-03 16:27:11', 1),
(7, 'Entretenimiento', 'Entretenimiento', '2022-01-01 20:09:42', '2022-01-03 16:27:22', 1),
(8, 'Salud', 'Salud', '2022-01-01 20:10:33', '2022-01-03 16:27:31', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcomments`
--

CREATE TABLE `tblcomments` (
  `id` int(11) NOT NULL,
  `postId` char(11) DEFAULT NULL,
  `name` varchar(120) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `comment` mediumtext DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblcomments`
--

INSERT INTO `tblcomments` (`id`, `postId`, `name`, `email`, `comment`, `postingDate`, `status`) VALUES
(1, '12', 'Anuj', 'anuj@gmail.com', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.', '2018-11-21 11:06:22', 1),
(2, '12', 'Test user', 'test@gmail.com', 'This is sample text for testing.', '2018-11-21 11:25:56', 1),
(3, '7', 'ABC', 'abc@test.com', 'This is sample text for testing.', '2018-11-21 11:27:06', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `PageName` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `Description` longtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `PageTitle`, `Description`, `PostingDate`, `UpdationDate`) VALUES
(1, 'aboutus', 'About News Portal', '<font color=\"#7b8898\" face=\"Mercury SSm A, Mercury SSm B, Georgia, Times, Times New Roman, Microsoft YaHei New, Microsoft Yahei, å¾®è½¯é›…é»‘, å®‹ä½“, SimSun, STXihei, åŽæ–‡ç»†é»‘, serif\"><span style=\"font-size: 26px;\">Dr. Tutorial Noidatut ( www.noidatut.com ) is a free E – Learning Platform build up in a view to Learn and share. We believe that the more we share the more we learn . We the team of Dr. Tutorial NoidaTut are here with bag full of Class notes, lab manuals , tutorials with videos and full source code, e books and documents which you can access free of cost. We would also like to mention that we have questions and answers of different subjects in forum view where you can read the answers and comment your answers as well. .\r\n\r\nIf you wish to contact us or locate us Please find us here on google maps. We would request you to write the reviews on google to help us reach different people. </span></font><br>', '2018-06-30 18:01:03', '2019-06-26 06:38:54'),
(2, 'contactus', 'Contact Details', '<p><br></p><p><b>Address :&nbsp; </b>New Delhi India</p><p><b>Phone Number : </b>+91 -01234567890</p><p><b>Email -id : </b>phpgurukulofficial@gmail.com</p>', '2018-06-30 18:01:36', '2018-06-30 19:23:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblposts`
--

CREATE TABLE `tblposts` (
  `id` int(11) NOT NULL,
  `PostTitle` longtext DEFAULT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `SubCategoryId` int(11) DEFAULT NULL,
  `PostDetails` longtext CHARACTER SET utf8 DEFAULT NULL,
  `PostingDate` date DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL,
  `PostUrl` mediumtext DEFAULT NULL,
  `PostImage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblposts`
--

INSERT INTO `tblposts` (`id`, `PostTitle`, `CategoryId`, `SubCategoryId`, `PostDetails`, `PostingDate`, `UpdationDate`, `Is_Active`, `PostUrl`, `PostImage`) VALUES
(3, 'El futbolista argentino Lionel Messi ganó su séptimo Balón de Oro.', 5, NULL, 'El galardón individual más prestigioso que un jugador puede ganar en el fútbol mundial,\r\neste pasado lunes 29 de noviembre.\r\n\r\nMessi superó al polaco Robert Lewandowski. Después de que en 2020 no se entregó el premio, el jugador del Bayern Munich se quedó con el premio del mejor delantero del año.', '2021-12-30', NULL, 1, NULL, 'news-9.jpg'),
(4, '¡Netflix lo vuelve hacer! La plataforma vuelve aumentar los precios de dos de sus planes, este primero de Noviembre del 2021.', 3, NULL, 'Afirma la plataforma de streaming, que el aumento no tiene nada que ver con el impuesto de Valor Agregado (IVA), que el año pasado fue impuesto por el congreso. Que el objetivo del aumento de precio es por estrategia de generación de contenido, es decir, crear nuevas películas y series para seguir entreteniendo a sus consumidores.\r\n<br>\r\nSi tu bolsillo puede soportar este aumento, te compartimos los nuevos precios de la plataforma Netflix en México:\r\nPlan Básico - 139 pesos (se mantiene)\r\nPlan Estándar - 219 pesos (antes 196)\r\nPlan Premium - 299 pesos (antes 266)\r\n<br>\r\nComo pudiste observar el único que se congela es el plan básico, el vocero de Netflix predica que no lo cambiaran para que la gente tenga la posibilidad de adquirir uno de sus planes, sin golpear tanto el bolsillo. Como si este año no fuera ya pesado con la inflación que va dejando a su paso la situación de la contingencia sanitaria.\r\n<br>\r\nCabe señalar que el cambio de precios se aplicará tanto a los nuevos suscriptores, como a los usuarios ya inscritos en la plataforma. Este mes, Netflix tendrá la ardua tarea de notificar a sus casi 9 millones de suscriptores de este nuevo aumento de precio, además que las tarifas nuevas entran en vigor con los nuevos miembros.', '2021-12-30', NULL, 1, NULL, 'news-8.jpg'),
(5, 'Ciudad de México ha ganado el Récord Guinness a la ciudad más conectada del mundo.', 4, NULL, 'Ciudad de México ha ganado el Récord Guinness a la ciudad más conectada del mundo esto debido a sus 21.500 puntos de internet gratuitos en toda la ciudad.\r\n<br>\r\nLa capital se impone así a otras grandes urbes como lo es Moscú, Seúl y Tokio en el segundo, tercero y cuarto lugar, y aprovechando el galardón el Gobierno ha anunciado que extenderá los puntos de internet gratuitos a las escuelas.\r\n<br>\r\nEn los 21.500 puntos de acceso se realizan semanalmente más de 2,8 millones de conexiones, que han permitido el intercambio de 3,3 terabytes de información, el equivalente a 58 millones de videos en alta definición, 1.289 millones de canciones o más de 17.500 millones de fotos. ¿puedes creerlo?', '2021-12-30', NULL, 1, NULL, 'news-7.jpg'),
(6, 'La vaquita marina podría ser el próximo animal en extinguirse.', 6, 10, 'Sabías que solo quedan unas diez de estos animales que se encuentran en peligro de extinción, a pesar de eso los científicos dicen que aún hay esperanza. Su destino depende en gran medida del gobierno MEXICANO</p>\r\n</br>\r\nLos primeros resultados del estudio de las vaquitas de este año, demuestran que esta especie de animales siguen existiendo, pero al limite de poder extinguirse. Los expertos en mamíferos marinos dicen que la recuperación es posible, pero solo si su hábitat queda libre de redes de enmalle.', '2021-12-29', NULL, 1, NULL, 'news-6.png'),
(7, 'Por primera vez en la historia, un avión Airbus A340 aterrizó en la Antártida. ', 6, 10, 'Dado que la mayoría de las personas llegan a la Antártida en barco. ¿sabías este dato?\r\n<br>\r\nVer el aterrizaje del A340 en una pista de hielo es verdaderamente dramático y significa que probablemente habrá más vuelos de este tipo en el futuro.\r\nCabe mencionar que actualmente el continente no cuenta con un aeropuerto, es decir aterrizaron en cualquier área libre y además en una superficie que es totalmente inestable y resbalosa', '2018-06-30', '2022-01-05 00:40:54', 1, '', 'news-4.jpg'),
(8, 'Te presentamos la misión: \"DART\".', 6, 11, 'Es una nave espacial fabricada por la NASA junto con Space X y tiene una misión importante que es: destruir un asteroide.\r\n\r\nEstamos presenciando la primera de prueba de defensa planetaria para prevenir que los asteroides impacten a la Tierra en cualquier momento, así es en estos momentos se acaba de lanzar un cohete para que se estrelle contra un asteroide en un intento de cambiar su trayectoria para que en un futuro la raza humana pueda prevenir una catástrofe a nivel global.', '2021-12-29', '2022-01-05 00:41:13', 1, NULL, 'news-5.jpg'),
(10, 'El costo de vida de los estadounidenses se a disparado.', 3, NULL, 'La tasa de inflación interanual en noviembre se elevó a 6,8%, y es considerada como la mayor cifra registrada en el país en 39 años, los atascos en las cadenas de suministro y la crisis energética son algunas de las causas que hicieron subir el precio de bienes y servicios en plena temporada de compras.', '2018-06-30', '2022-01-03 01:30:43', 1, '', 'news-3.jpg'),
(11, 'EUA autorizo compra de refinería \"Deer Park\"', 3, NULL, 'El Presidente de México aseguró que esta autorización es una “buena noticia”\r\n<br>\r\nAMLO resaltó en la mañanera como “algo histórico” esta noticia, el presidente Andrés Manuel López Obrador informó que el gobierno de Estados Unidos autorizó la compra de la refinería Deer Park, en Houston, Texas, a Petróleos Mexicanos (Pemex) por parte de la empresa Shell.', '2018-06-30', '2022-01-03 01:30:55', 1, '', 'news-2.jpg'),
(12, 'Niño recibe boletos para Coldplay y banda lo convierte en invitado VIP.', 4, NULL, 'Una usuaria de TikTok llamada María José Hernández subió un video a la red social donde muestra la reacción de su sobrino cuando vio uno de sus regalos de navidad, eran ¡boletos para Coldplay! Pues aparentemente el pequeño, de aproximadamente 11 años, es fanático de la banda británica.\r\n<br>\r\nCauso emoción en muchas personas y se hizo viral, el video recopila más de 700 mil vistas y más de 70 mil comentarios, aunque el que más llamó la atención provienede la cuenta oficial de Coldplay, escrito a nombre de Phil Harvey, co-manager de la banda, quien invitó al pequeño y sus acompañantes a un espacio VIP.\r\n<br>\r\n¿Puedes creerlo?', '2021-12-15', '2022-01-05 00:42:57', 1, '', 'news-1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblsubcategory`
--

CREATE TABLE `tblsubcategory` (
  `SubCategoryId` int(11) NOT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `Subcategory` varchar(255) DEFAULT NULL,
  `SubCatDescription` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblcomments`
--
ALTER TABLE `tblcomments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblposts`
--
ALTER TABLE `tblposts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  ADD PRIMARY KEY (`SubCategoryId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tblcomments`
--
ALTER TABLE `tblcomments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tblposts`
--
ALTER TABLE `tblposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  MODIFY `SubCategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
