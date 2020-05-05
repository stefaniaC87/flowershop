-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 05, 2020 alle 15:02
-- Versione del server: 10.4.11-MariaDB
-- Versione PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flowershop`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `flowers`
--

CREATE TABLE `flowers` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `occasion_id` int(11) NOT NULL,
  `cost` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `flowers`
--

INSERT INTO `flowers` (`id`, `name`, `occasion_id`, `cost`, `quantity`, `created`, `modified`) VALUES
(1, 'Rose', 2, 10, 2, '2020-05-03 12:40:50', '2020-05-03 12:40:50'),
(2, 'Mimose', 1, 5, 10, '2020-05-03 12:41:25', '2020-05-03 12:41:25'),
(3, 'Calla', 3, 20, 30, '2020-05-05 13:01:21', '2020-05-05 13:01:21');

-- --------------------------------------------------------

--
-- Struttura della tabella `occasions`
--

CREATE TABLE `occasions` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` varchar(32) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `occasions`
--

INSERT INTO `occasions` (`id`, `name`, `description`, `created`, `modified`) VALUES
(1, 'Festa della donna', 'Fiori per omaggiare le donne', '2020-05-03 12:48:31', '2020-05-03 12:48:31'),
(2, 'Compleanno', 'Per festeggiare il compleanno', '2020-05-03 12:49:14', '2020-05-03 12:49:14'),
(3, 'Matrimonio', 'cerimonia matrimonio', '2020-05-05 11:12:30', '2020-05-05 11:12:30');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `flowers`
--
ALTER TABLE `flowers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `occasion_id` (`occasion_id`);

--
-- Indici per le tabelle `occasions`
--
ALTER TABLE `occasions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `flowers`
--
ALTER TABLE `flowers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `occasions`
--
ALTER TABLE `occasions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
