-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Gegenereerd op: 10 jan 2018 om 13:01
-- Serverversie: 5.5.57-0+deb8u1
-- PHP-versie: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `quiz6`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
`id` int(11) NOT NULL,
  `questions` varchar(50) NOT NULL,
  `id_yes` int(5) NOT NULL,
  `id_no` int(5) NOT NULL,
  `id_idk` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `quiz`
--

INSERT INTO `quiz` (`id`, `questions`, `id_yes`, `id_no`, `id_idk`) VALUES
(1, 'Do you like playing football?', 99999, 2, 4),
(2, 'Do you like playing basketball?', 999999, 3, 7),
(3, 'Do you like rugby?', 999, 1, 6),
(4, 'Do you like scoring goals?', 99999, 1, 5),
(5, 'Do you like passing a ball with your foot?', 99999, 2, 2),
(6, 'Do you like tackling people to the ground?', 999, 1, 9),
(7, 'Do you like dunking?', 999999, 1, 8),
(8, 'Do you like dribbling with a ball?', 999999, 1, 1),
(9, 'Do you like defending your quarterback ?', 999999, 9999, 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `quiz`
--
ALTER TABLE `quiz`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `quiz`
--
ALTER TABLE `quiz`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
