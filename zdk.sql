-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 14, 2015 at 02:45 PM
-- Server version: 5.5.35
-- PHP Version: 5.4.4-14+deb7u8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zdk`
--

-- --------------------------------------------------------

--
-- Table structure for table `alergeni`
--

CREATE TABLE IF NOT EXISTS `alergeni` (
  `vrste` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `alergeni`
--

INSERT INTO `alergeni` (`vrste`) VALUES
('soja'),
('jaja'),
('kikiriki'),
('mlijeko'),
('rakovi'),
('školjke'),
('orašasti plodovi'),
('jagode'),
('kivi'),
('ananas');

-- --------------------------------------------------------

--
-- Table structure for table `delicije`
--

CREATE TABLE IF NOT EXISTS `delicije` (
  `naziv` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `delicije`
--

INSERT INTO `delicije` (`naziv`) VALUES
('Kolači\r\n'),
('Čokolade'),
('Torte'),
('Pića'),
('Keksi'),
('Ostalo'),
('');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE IF NOT EXISTS `korisnik` (
  `korisnickoIme` text COLLATE utf8_unicode_ci NOT NULL,
  `lozinka` text COLLATE utf8_unicode_ci NOT NULL,
  `pravoIme` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`korisnickoIme`, `lozinka`, `pravoIme`) VALUES
('doda', '123', 'Dolores Škugor'),
('Dolores', '202cb962ac59075b964b07152d234b70', 'Dolores Škugor'),
('doda', '123', 'Dolores Škugor'),
('Dolores', '202cb962ac59075b964b07152d234b70', 'Dolores Škugor');

-- --------------------------------------------------------

--
-- Table structure for table `odgovori`
--

CREATE TABLE IF NOT EXISTS `odgovori` (
  `id` int(11) NOT NULL,
  `odgovor` text COLLATE utf8_unicode_ci NOT NULL,
  `id_pitanja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `odgovori`
--

INSERT INTO `odgovori` (`id`, `odgovor`, `id_pitanja`) VALUES
(1, 'lijep', 1),
(2, 'simpatičan', 1),
(3, 'staromodan', 1),
(4, 'ni dobar ni loš', 1),
(5, 'dobar', 2),
(6, 'loš', 2),
(7, 'malen', 2),
(8, 'sasvim ok', 2),
(9, 'pristupačno', 3),
(10, 'zajedljivo', 3),
(11, 'jako uslužno', 3),
(12, 'odvratno', 3),
(13, 'Sacher Torta', 4),
(14, 'Ganache torta', 4),
(15, 'ZDK torta', 4),
(16, 'Voćna torta', 4),
(17, 'Čitanje knjige i odmaranje', 5),
(18, 'Gledanje filmova', 5),
(19, 'Boravak u prirodi', 5),
(20, 'Putovanje', 5),
(21, 'Hamburger', 6),
(22, 'Čevape', 6),
(23, 'Pizzu', 6),
(24, 'Tortilje', 6),
(25, 'uživancija', 7),
(26, 'ružna hrana', 7),
(27, '', 0),
(28, 'precjenjeni kolači', 7),
(29, 'dobar omjer kvalitete i cijene', 7),
(30, 'Lavazza', 8),
(31, 'Illy', 8),
(32, 'Franck', 8),
(33, 'Julius', 8),
(34, '1 mjesečno', 9),
(35, '2 - 5 puta mjesečno', 9),
(36, '1 godišnje', 9),
(37, 'precjenjeni kolači', 7),
(38, 'dobar omjer kvalitete i cijene', 7),
(39, 'Lavazza', 8),
(40, 'Illy', 8),
(41, 'Franck', 8),
(42, 'Julius', 8),
(43, '1 mjesečno', 9),
(44, '2 - 5 puta mjesečno', 9),
(45, '1 godišnje', 9),
(46, '2 puta tjedno', 9),
(47, '1', 10),
(48, '2', 10),
(49, '5-10', 10),
(50, 'više od 10', 10),
(1, 'lijep', 1),
(2, 'simpatičan', 1),
(3, 'staromodan', 1),
(4, 'ni dobar ni loš', 1),
(5, 'dobar', 2),
(6, 'loš', 2),
(7, 'malen', 2),
(8, 'sasvim ok', 2),
(9, 'pristupačno', 3),
(10, 'zajedljivo', 3),
(11, 'jako uslužno', 3),
(12, 'odvratno', 3),
(13, 'Sacher Torta', 4),
(14, 'Ganache torta', 4),
(15, 'ZDK torta', 4),
(16, 'Voćna torta', 4),
(17, 'Čitanje knjige i odmaranje', 5),
(18, 'Gledanje filmova', 5),
(19, 'Boravak u prirodi', 5),
(20, 'Putovanje', 5),
(21, 'Hamburger', 6),
(22, 'Čevape', 6),
(23, 'Pizzu', 6),
(24, 'Tortilje', 6),
(25, 'uživancija', 7),
(26, 'ružna hrana', 7),
(27, '', 0),
(28, 'precjenjeni kolači', 7),
(29, 'dobar omjer kvalitete i cijene', 7),
(30, 'Lavazza', 8),
(31, 'Illy', 8),
(32, 'Franck', 8),
(33, 'Julius', 8),
(34, '1 mjesečno', 9),
(35, '2 - 5 puta mjesečno', 9),
(36, '1 godišnje', 9),
(37, 'precjenjeni kolači', 7),
(38, 'dobar omjer kvalitete i cijene', 7),
(39, 'Lavazza', 8),
(40, 'Illy', 8),
(41, 'Franck', 8),
(42, 'Julius', 8),
(43, '1 mjesečno', 9),
(44, '2 - 5 puta mjesečno', 9),
(45, '1 godišnje', 9),
(46, '2 puta tjedno', 9),
(47, '1', 10),
(48, '2', 10),
(49, '5-10', 10),
(50, 'više od 10', 10);

-- --------------------------------------------------------

--
-- Table structure for table `pitanja`
--

CREATE TABLE IF NOT EXISTS `pitanja` (
  `id` int(11) NOT NULL,
  `pitanje` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pitanja`
--

INSERT INTO `pitanja` (`id`, `pitanje`) VALUES
(1, 'Kako vam se dopada ambijent Zlatine kuće delicija?'),
(2, 'Kako vam se dopada ponuda slastica?'),
(3, 'Kako bi ocijenili osoblje ZDK?'),
(4, 'Koja je po vašem mišljenju najbolja od ove 4 torte?'),
(5, 'Koji od sljedećih aktivnosti najbolje opisuje kako provodite vikend?'),
(6, 'Koje od sljedećih jela bi željeli viditi u ZDK?'),
(7, 'Koja od ovih riječi bi bila vaša prva asocijacija na Zlatine kućne delicije?'),
(8, 'Koju od navedenih kava bi voljeli vidjeti na našem meniju?'),
(9, 'Koliko često odlazite u kino?'),
(10, 'Koliko puta mjesečno jedete kolače u ZDK?');

-- --------------------------------------------------------

--
-- Table structure for table `slastice`
--

CREATE TABLE IF NOT EXISTS `slastice` (
  `id` int(11) NOT NULL,
  `naziv` text COLLATE utf8_unicode_ci NOT NULL,
  `tip` text COLLATE utf8_unicode_ci NOT NULL,
  `opis` text COLLATE utf8_unicode_ci NOT NULL,
  `vegeterijanski` text COLLATE utf8_unicode_ci NOT NULL,
  `halal` text COLLATE utf8_unicode_ci NOT NULL,
  `koser` text COLLATE utf8_unicode_ci NOT NULL,
  `alergeni` text COLLATE utf8_unicode_ci NOT NULL,
  `cijena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slastice`
--

INSERT INTO `slastice` (`id`, `naziv`, `tip`, `opis`, `vegeterijanski`, `halal`, `koser`, `alergeni`, `cijena`) VALUES
(5, 'Gibanica', 'Ostalo', 'Ovo je slani tip kolača, punjena je orasima', 'Ne', 'Ne', 'Ne', 'jaja,orašasti plodovi', 10),
(7, 'Sirnica', 'Ostalo', 'Ovo je slani tip kolača, punjena je sirom', 'Ne', 'Ne', 'Ne', 'jaja,mlijeko', 12),
(10, 'Burek', 'Ostalo', 'Ovo je slani tip kolača, punjen mesom', 'Ne', 'Ne', 'Ne', 'jaja', 14),
(11, 'Sacher Torta', 'Torte', 'Čokoladna torta u više slojeva', 'Da', 'Da', 'Da', 'jaja', 16),
(12, 'Mađarica', 'Kolači', 'Kolač u više slojeva, s korama', 'Ne', 'Ne', 'Ne', 'jaja,orašasti plodovi', 10),
(13, 'Kremšnita', 'Kolači', 'Kolač s žutom kremom i lisnatim tijestom', 'Ne', 'Ne', 'Ne', 'jaja,mlijeko,orašasti plodovi', 15),
(14, 'Piškote', 'Keksi', 'Vrsta keksa sa šečerom', 'Ne', 'Da', 'Da', 'jaja,mlijeko,orašasti plodovi', 15),
(15, 'Čokoladni keks-čisti', 'Keksi', 'Keks preliven čokoladom', 'Ne', 'Ne', 'Ne', 'kikiriki,orašasti plodovi', 15),
(16, 'Čokoladni keks-brusnice', 'Keksi', 'Keksi od čokolade s komadićima  brusnice', 'Ne', 'Ne', 'Ne', 'soja,mlijeko,orašasti plodovi', 10),
(17, 'Voćni kup', 'Kolači', 'Voće po izboru nasjeckano na komadiće', 'Da', 'Ne', 'Ne', 'jagode,kivi,ananas', 15),
(18, 'Čokolada s čilijem', 'Čokolade', 'Vrsta čokolade s čilijem', 'Ne', 'Ne', 'Ne', 'jaja,kikiriki,mlijeko', 15),
(19, 'Čokolada s citrusnim aromama', 'Čokolade', 'Super neobična čokolada', 'Ne', 'Ne', 'Ne', 'mlijeko', 18),
(20, 'Belgijske praline', 'Čokolade', 'Fine praline', 'Ne', 'Ne', 'Ne', 'jaja', 25),
(21, 'Praline s konjakom', 'Čokolade', 'Alkoholizirane praline', 'Ne', 'Ne', 'Ne', 'mlijeko', 28),
(22, 'Macarons', 'Keksi', 'Francuski keksići, šarenih boja i dobrog okusa', 'Ne', 'Ne', 'Ne', 'jaja,mlijeko,orašasti plodovi', 25),
(23, 'Croasant', 'Ostalo', 'Pecivo s raznim punjenima-čokolada,vanilija,šunka,orasi...', 'Da', 'Ne', 'Ne', 'jaja,mlijeko,orašasti plodovi,jagode', 10),
(24, 'Banana split', 'Ostalo', 'Sladoled', 'Ne', 'Ne', 'Ne', 'soja,jaja,mlijeko,jagode,kivi,ananas', 30),
(25, 'Ganache torta', 'Torte', 'Fina čokoladna torta', 'Da', 'Ne', 'Ne', 'jaja,mlijeko,orašasti plodovi', 20),
(26, 'ZKD torta', 'Torte', 'Specijalitet našeg restorana,fina torta sa malinama i čokoladom', 'Da', 'Ne', 'Ne', 'jaja,mlijeko,orašasti plodovi', 25),
(27, '', '', '', '', '', '', '', 0),
(28, 'Voćna torta', 'Torte', 'Torta sa sezonskim voćem', 'Da', 'Ne', 'Ne', 'jaja,mlijeko,orašasti plodovi,jagode,kivi,ananas', 20),
(29, 'Tiramisu', 'Kolači', 'Kolač s kremom od vanilije', 'Da', 'Da', 'Da', 'jaja,mlijeko,orašasti plodovi', 15),
(30, 'Crne kocke', 'Kolači', 'Kocke od čokolade', 'Da', 'Ne', 'Ne', 'jaja,mlijeko,orašasti plodovi', 12),
(31, 'Kesten štapić', 'Kolači', 'Štapić s okusom kestena', 'Ne', 'Ne', 'Da', 'soja,jaja,orašasti plodovi', 12),
(32, 'Kesten šnita', 'Kolači', 'Fini kolač s aromom kestena i čokoladom', 'Da', 'Ne', 'Ne', 'jaja,mlijeko', 15),
(33, 'Kokos štagice', 'Keksi', 'Štangice s kokosom i aromom vanilije', 'Da', 'Da', 'Da', 'jaja,kikiriki,mlijeko', 14),
(34, 'Palice', 'Keksi', 'Keksići od čokolade', 'Da', 'Ne', 'Ne', 'kikiriki,ananas', 13),
(35, 'Bananko', 'Kolači', 'Kolač s čokoladnim bananicama i finom kremom', 'Ne', 'Ne', 'Ne', 'jaja,mlijeko,orašasti plodovi', 17),
(36, 'Breskvice', 'Keksi', 'Mali keksići s kremom od oraha i finog izgleda', 'Da', 'Da', 'Ne', 'soja,jaja,kikiriki,mlijeko,orašasti plodovi', 14),
(37, 'Čupavci', 'Kolači', 'Kolači obloženi čokoladom i kokosom', 'Ne', 'Da', 'Ne', 'jaja,mlijeko,orašasti plodovi', 16),
(38, 'Čokoladni mousse', 'Kolači', 'Francuska poslastica', 'Da', 'Da', 'Da', 'mlijeko,orašasti plodovi,ananas', 18),
(39, 'Išler', 'Kolači', 'Fini kolač', 'Da', 'Da', 'Da', 'jaja,orašasti plodovi', 16),
(0, 'f<<fsa', 'Kolači', 'faf', 'Da', 'Da', 'Da', 'jaja', 12);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
