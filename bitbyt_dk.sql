-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Vært: bitbyt.dk.mysql.service.one.com:3306
-- Genereringstid: 10. 12 2019 kl. 14:08:37
-- Serverversion: 10.3.17-MariaDB-1:10.3.17+maria~bionic
-- PHP-version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitbyt_dk`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `hubs`
--

CREATE TABLE `hubs` (
  `hub_id` int(11) NOT NULL,
  `hub_name` varchar(100) COLLATE latin1_danish_ci NOT NULL,
  `postal_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

--
-- Data dump for tabellen `hubs`
--

INSERT INTO `hubs` (`hub_id`, `hub_name`, `postal_code`) VALUES
(1, 'Herning sportshal ', 7400),
(2, 'Silkeborg SFO', 8600);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `kid`
--

CREATE TABLE `kid` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) COLLATE latin1_danish_ci NOT NULL,
  `password` varchar(500) COLLATE latin1_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

--
-- Data dump for tabellen `kid`
--

INSERT INTO `kid` (`user_id`, `username`, `password`) VALUES
(26, 'Simon', '$2y$10$UdncQsfMJOMdDlP1PeVvsuKZgf0MVxPRKEue2Mh4nw/9GRo/0Ga0S'),
(27, 'bruger1', '$2y$10$q6v3RB1XIma7oJcPsNdOVebVnr32mF8s6ZHDEVIPOdA6h9rSEHnAi'),
(28, 'oliver', '$2y$10$KLPUbntGeFnjmucHKM6XGOdkAvoNeDRXbre0.Fy2c9XFWOfid6jLu'),
(29, 'oliv1063', '$2y$10$tt30y9x7k523qUm/nxvqW.0UJ/MToTvu/eOFpwBf9NWv4EUPykx3K'),
(30, 'Eva', '$2y$10$R9yz25fIQ2/v6LJVtxZWWeINEAXxKRUoacoiJWkM2A2QyPKVH5bTG'),
(31, 'Pjens', '$2y$10$OsGQ544vxLTvRGt/14kT2uwFhp9lBlaLqiQk9PZQje0McQU63cT.W'),
(32, 'HAV', '$2y$10$cpYbtZ9jo.hqAGaT0ojqBO.EkvelOkzaD/2.yl7icG39WgI.wr/lK'),
(33, 'Alers', '$2y$10$LiS2t3pgpWowiga6QDTU6OFU59sK5ypOccgzntpiV0zIm70sPj8GS'),
(34, 'evapoulsen', '$2y$10$20/f.fCAG..lvBMAs8ciHuwBG54UI3PWeVUZeCTVNubz0DcNbZ7za'),
(35, 'jørgensen', '$2y$10$SMHlumTGtNu9qReds6ZNU.JCV8MPtg6iZw2tv5p/RwmMsvnf.SZNC'),
(36, 'jadethedderjegfaktisk', '$2y$10$VsZRvl0oCNZW04R.cuBTGeNvnVX5aOf7bdUaO2FKgEkR0eh4tOr56'),
(37, 'pi', '$2y$10$5I8S12OSh98I1szty0jWrOg2wx/r1oHjhMXjY1WUDDWXXoARNjFG2');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `kid_hub`
--

CREATE TABLE `kid_hub` (
  `kid_hub_id` int(11) NOT NULL,
  `kid_id` int(11) NOT NULL,
  `hub_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `kid_info`
--

CREATE TABLE `kid_info` (
  `kid_id` int(11) NOT NULL,
  `first_name` varchar(40) COLLATE latin1_danish_ci NOT NULL,
  `last_name` varchar(50) COLLATE latin1_danish_ci NOT NULL,
  `age` tinyint(2) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

--
-- Data dump for tabellen `kid_info`
--

INSERT INTO `kid_info` (`kid_id`, `first_name`, `last_name`, `age`, `timestamp`, `id`) VALUES
(26, 'Simon', 'Mikkelsen', 25, '2019-11-21 18:13:45', 17),
(27, 'asbjorn', 'agnholt', 24, '2019-11-21 18:15:43', 18),
(28, 'Oliver', 'Joergensen', 13, '2019-11-21 19:10:24', 19),
(29, 'oliver', 'jørgensen', 12, '2019-11-21 19:21:13', 20),
(30, 'Eva', 'Eva', 32, '2019-11-21 19:58:15', 21),
(31, 'Peter', 'Jensen', 58, '2019-11-21 21:18:50', 22),
(32, 'Hans', 'Viborg', 58, '2019-11-21 21:28:27', 23),
(33, 'Alexander', 'Børge', 18, '2019-11-22 21:22:40', 24),
(34, 'Eva', 'Poulsen', 13, '2019-12-02 12:19:41', 25),
(35, 'Jan', 'Jørgensen', 34, '2019-12-03 07:53:02', 26),
(36, 'Gunnar', 'Ree', -7, '2019-12-04 08:40:15', 27),
(37, 'pi', 'borggaard', 11, '2019-12-07 08:54:48', 28);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `parent`
--

CREATE TABLE `parent` (
  `parent_id` int(11) NOT NULL,
  `email` varchar(50) COLLATE latin1_danish_ci NOT NULL,
  `password` varchar(500) COLLATE latin1_danish_ci NOT NULL,
  `auto_approve` int(11) NOT NULL DEFAULT 0,
  `kid_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

--
-- Data dump for tabellen `parent`
--

INSERT INTO `parent` (`parent_id`, `email`, `password`, `auto_approve`, `kid_id`) VALUES
(31, 'au609692@post.au.dk', '$2y$10$nYoyR9lYMMthsZoNKkZrZeh34mgCgOPT8iWmlRaRvF/sHO91CTnE.', 0, 26),
(32, '1@1.org', '$2y$10$0ERXoIHkdydg.StTxykiWexfzIlCYMwMhqY/aggWRWN3c4v52e9BC', 0, 27),
(33, 'oliv1063@gmail.com', '$2y$10$BRkb6TcEuW8Cs9/Pg1WaHOiFJ8gulpJHe//fd.sZdU760EExc2UeC', 0, 29),
(34, 'eva@eva.dk', '$2y$10$f0oj22ARIpoZvNGA.0bQj.Zg/dr1iKAeYrkN0L1tdrQ3YbXanRKjC', 0, 30),
(35, 'hans@sevelstedviborg.dk', '$2y$10$wyWVygKIVbV7279/eebS9eqjhKqpKtNBIPuPEJCHA.jlF33U.FotK', 0, 32),
(36, 'al@gmail.dk', '$2y$10$502NhriIETb7vWzqHCHf0O7O.0WGiaPpUfBf07Hz7v00EIJFwSGja', 0, 33),
(38, 'eva@btech.au.dk', '$2y$10$q2SbGpXhRvtC8g941WEzh.vEws3re/sV.K1zUWjxSL8cdph5f2Dq.', 0, 34),
(39, 'diaree@tarm.dk', '$2y$10$muC1f2fd81i5QLb27/LB..iSLNi4ju81UQ5m0AK1c6K37sEL4/YMW', 0, 36),
(40, 'carola@mail', '$2y$10$GN7z7lvUZgE5ujd6sypIauVDmCcdRVv45WQJF2rFZ3GRy1qpvabg.', 0, 37);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `parent_info`
--

CREATE TABLE `parent_info` (
  `id` int(11) NOT NULL,
  `first_name` varchar(40) COLLATE latin1_danish_ci NOT NULL,
  `last_name` varchar(50) COLLATE latin1_danish_ci NOT NULL,
  `postal_code` int(4) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

--
-- Data dump for tabellen `parent_info`
--

INSERT INTO `parent_info` (`id`, `first_name`, `last_name`, `postal_code`, `timestamp`, `parent_id`) VALUES
(21, 'Simon', 'Mikkelsen', 7490, '2019-11-21 18:13:57', 31),
(22, 'lars', 'larsen', 8240, '2019-11-21 18:16:10', 32),
(23, 'Oliver', 'Joergensen', 6960, '2019-11-21 19:21:27', 33),
(24, 'Eva', 'Eva', 7400, '2019-11-21 19:59:09', 34),
(25, 'Hans', 'Viborg', 6700, '2019-11-21 21:29:08', 35),
(26, 'Alexanser', 'Skdjfkf', 8388, '2019-11-22 21:23:21', 36),
(27, 'Kim', 'Poulsen', 7400, '2019-12-02 12:20:05', 38),
(28, 'Dia', 'Ree', 6880, '2019-12-04 08:41:09', 39),
(29, 'Carola', 'Reffs', 6960, '2019-12-07 08:55:20', 40);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(80) COLLATE latin1_danish_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `description` varchar(1000) COLLATE latin1_danish_ci NOT NULL,
  `image_link` varchar(500) COLLATE latin1_danish_ci NOT NULL,
  `price` int(5) NOT NULL,
  `comments` text COLLATE latin1_danish_ci DEFAULT NULL,
  `kid_id` int(11) NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT 0,
  `con_id` int(11) NOT NULL,
  `image_name` varchar(50) COLLATE latin1_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

--
-- Data dump for tabellen `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `cat_id`, `timestamp`, `description`, `image_link`, `price`, `comments`, `kid_id`, `approved`, `con_id`, `image_name`) VALUES
(76, 'lejetøjs sværd', 21, '2019-11-21 19:38:35', 'Lejetøjs sværd i meget god stand næsten ikke brugt', './images/uploads/74975602730_2585567301532130_4489896280809537536_n.jpg', 150, NULL, 26, 0, 2, 'sværd'),
(77, 'Buzzlightyear', 29, '2019-11-21 19:38:55', 'Figur, ren, alle led kan drejes', './images/uploads/23874483135_533317813917067_5114754610094931968_n.jpg', 30, NULL, 29, 0, 2, 'Buzzlightyear'),
(78, 'Peter plys bamse', 22, '2019-11-21 19:41:45', 'Rigtig fin bamse, byttes grundet fejlkøb har aldrig været brugt.', './images/uploads/9975446763_2509386662675698_5296969027124461568_n.jpg', 400, NULL, 26, 0, 2, 'peterplys'),
(79, 'Tee-shirt', 23, '2019-11-21 19:45:19', 'Super sej tee-shirt!', './images/uploads/59376747451_966570263725231_4181754874360233984_n.jpg', 20, NULL, 29, 0, 3, 'tee-shirt'),
(80, 'LEGO hoved ', 23, '2019-11-21 19:46:08', 'MEGA FED!! Original LEGO maske, har en del slidspor men virker stadig funktions mæssigt.  BYTTES KUN MED FEDE DRENGE TING!!', './images/uploads/22075580478_1379903682188211_6922251473032052736_n.jpg', 1000, NULL, 26, 0, 5, 'lego hoved'),
(81, 'Glimmer Pude!', 24, '2019-11-21 19:47:51', 'Super cool glimmerpude! ', './images/uploads/50176609815_2499483223470641_4858861880233426944_n.jpg', 2, NULL, 29, 0, 5, 'Glimmer'),
(82, 'Slim', 26, '2019-11-21 20:00:46', 'Slim, helt nyt og uåbnet', './images/uploads/76475258460_698236980668294_2725693310986354688_n.jpg', 50, NULL, 30, 0, 2, 'slim'),
(83, 'Spand og skovl', 26, '2019-11-21 20:02:01', 'Helt ny spand og skovl sæt, helt nyt og stadig i net', './images/uploads/35375614136_594089024751505_6216049607076478976_n.jpg', 200, NULL, 30, 0, 2, 'spand'),
(84, 'Tromme', 34, '2019-11-21 21:11:50', 'Meget fin tromme', './images/uploads/96278036724_2377227922527945_5195508288841580544_n.jpg', 30, NULL, 29, 0, 2, 'tromme'),
(85, 'Blå bamse', 22, '2019-11-21 21:14:20', 'Bamse, Pokemon', './images/uploads/10875402199_2410379605847076_9163355435170791424_n.jpg', 25, NULL, 29, 0, 4, 'bamse'),
(86, 'Pingvin Bamse', 22, '2019-11-21 21:16:45', 'God stand, Krammeklar', './images/uploads/90273513505_1485606291596174_1287668462772027392_n.jpg', 12, NULL, 29, 0, 5, 'Pingvin'),
(87, 'Lego Brandbil', 2, '2019-11-21 21:17:58', 'Lego brandbil, kører godt', './images/uploads/36174400891_2258079311148869_385033093553061888_n.jpg', 120, NULL, 29, 0, 2, 'Brandbil'),
(88, 'Lego StarWars', 2, '2019-11-21 21:19:19', 'Starwars, Lego, ikke samlet', './images/uploads/46977038637_695675494291696_5857354614487121920_n.jpg', 98, NULL, 29, 0, 2, 'starwars'),
(89, 'Løbehjul', 28, '2019-11-21 21:20:59', 'Det er kun det bagerste hjul der er skadet. Alt andet er godt.', './images/uploads/69475429706_2601682043208088_5424059244011847680_n.jpg', 84, NULL, 29, 0, 4, 'Løbehjul'),
(90, 'Julenisse', 29, '2019-11-21 21:33:27', 'Glad julenisse med lygte. Lyser for dig i december.', './images/uploads/572JuleNisse.jpg', 150, NULL, 32, 0, 4, 'Julenisse'),
(91, 'Test', 2, '2019-12-03 08:11:10', 'Test', './images/uploads/345B3EC0054-CD37-4478-AFDB-1DDBBD752402.jpeg', 10, NULL, 34, 0, 2, 'Test');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `product_cat`
--

CREATE TABLE `product_cat` (
  `cat_id` int(11) NOT NULL,
  `category_name` varchar(100) COLLATE latin1_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

--
-- Data dump for tabellen `product_cat`
--

INSERT INTO `product_cat` (`cat_id`, `category_name`) VALUES
(1, 'Biler'),
(2, 'Lego'),
(3, 'Duplo'),
(21, 'Våben'),
(22, 'Bamser'),
(23, 'Beklædning'),
(24, 'Pynte genstande'),
(26, 'Spil'),
(28, 'Diverse transportmidler '),
(29, 'Superhelte'),
(34, 'Instrumenter');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `product_con`
--

CREATE TABLE `product_con` (
  `con_id` int(11) NOT NULL,
  `product_condition` varchar(20) COLLATE latin1_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

--
-- Data dump for tabellen `product_con`
--

INSERT INTO `product_con` (`con_id`, `product_condition`) VALUES
(2, 'Som ny'),
(3, 'god stand'),
(4, 'Lettere brugt'),
(5, 'Brugt');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `transactions`
--

CREATE TABLE `transactions` (
  `trans_id` int(11) NOT NULL,
  `product1_id` int(11) NOT NULL,
  `product2_id` int(11) NOT NULL,
  `parent1_approve` int(11) NOT NULL DEFAULT 0,
  `parent2_approve` int(11) NOT NULL DEFAULT 0,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `kid_approve` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

--
-- Data dump for tabellen `transactions`
--

INSERT INTO `transactions` (`trans_id`, `product1_id`, `product2_id`, `parent1_approve`, `parent2_approve`, `reg_date`, `kid_approve`) VALUES
(1, 80, 77, 0, 0, '2019-11-21 19:46:32', 0),
(2, 78, 82, 0, 0, '2019-11-21 20:02:48', 0),
(3, 90, 88, 0, 0, '2019-11-21 21:34:00', 0);

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `hubs`
--
ALTER TABLE `hubs`
  ADD PRIMARY KEY (`hub_id`);

--
-- Indeks for tabel `kid`
--
ALTER TABLE `kid`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks for tabel `kid_hub`
--
ALTER TABLE `kid_hub`
  ADD PRIMARY KEY (`kid_hub_id`);

--
-- Indeks for tabel `kid_info`
--
ALTER TABLE `kid_info`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`parent_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks for tabel `parent_info`
--
ALTER TABLE `parent_info`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `kid_id` (`kid_id`);

--
-- Indeks for tabel `product_cat`
--
ALTER TABLE `product_cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indeks for tabel `product_con`
--
ALTER TABLE `product_con`
  ADD PRIMARY KEY (`con_id`);

--
-- Indeks for tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`trans_id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `hubs`
--
ALTER TABLE `hubs`
  MODIFY `hub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tilføj AUTO_INCREMENT i tabel `kid`
--
ALTER TABLE `kid`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Tilføj AUTO_INCREMENT i tabel `kid_hub`
--
ALTER TABLE `kid_hub`
  MODIFY `kid_hub_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tilføj AUTO_INCREMENT i tabel `kid_info`
--
ALTER TABLE `kid_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Tilføj AUTO_INCREMENT i tabel `parent`
--
ALTER TABLE `parent`
  MODIFY `parent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Tilføj AUTO_INCREMENT i tabel `parent_info`
--
ALTER TABLE `parent_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Tilføj AUTO_INCREMENT i tabel `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- Tilføj AUTO_INCREMENT i tabel `product_cat`
--
ALTER TABLE `product_cat`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Tilføj AUTO_INCREMENT i tabel `product_con`
--
ALTER TABLE `product_con`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tilføj AUTO_INCREMENT i tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
