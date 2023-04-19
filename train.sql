-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 19 Kwi 2023, 16:41
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `train`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `forum`
--

INSERT INTO `forum` (`id`, `name`, `content`) VALUES
(7, '', 'Kmicic glupi chlop walczy bitey a nie prowadzi pociagu'),
(8, '', 'japitole jak zwykle PKP sie uposledza'),
(9, '', 'jak ja nie lubie pociagow tho');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `logins`
--

CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `main`
--

CREATE TABLE `main` (
  `id` int(11) NOT NULL,
  `datawp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `numerpoc` int(11) NOT NULL,
  `nazwiskomasz` text NOT NULL,
  `dataodj` datetime NOT NULL,
  `szacunkowyczasdoj` datetime NOT NULL,
  `opoznieniewmin` int(11) NOT NULL,
  `nazwaprzew` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `main`
--

INSERT INTO `main` (`id`, `datawp`, `numerpoc`, `nazwiskomasz`, `dataodj`, `szacunkowyczasdoj`, `opoznieniewmin`, `nazwaprzew`) VALUES
(1, '2023-04-18 21:06:41', 1234, 'Podolskiewicz', '2023-04-18 19:06:00', '2023-04-18 22:22:03', 10, 'PKP regio'),
(2, '2023-04-18 20:15:37', 222, 'Pomidorek', '2023-04-18 22:30:29', '2023-04-18 23:23:45', 12, 'PKP cargo'),
(4, '2023-04-18 21:39:15', 8, 'Kolok', '2023-04-21 07:38:42', '2023-04-22 03:38:42', 15, 'PKP Intercity'),
(5, '2023-04-18 21:54:01', 124, 'Kmicic', '2023-04-19 12:36:00', '2023-04-19 15:48:00', 40, 'Pendolino'),
(6, '2023-04-18 23:25:47', 13, 'Kowalencyjnys', '2023-04-19 03:30:00', '2023-04-19 13:25:00', 0, 'Pendolino');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `main`
--
ALTER TABLE `main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
