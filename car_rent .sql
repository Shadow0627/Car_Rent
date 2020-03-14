-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2020 at 02:14 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rent`
--

-- --------------------------------------------------------

--
-- Table structure for table `auto`
--

CREATE TABLE `auto` (
  `id_auto` int(11) NOT NULL,
  `marka` text NOT NULL,
  `model` text NOT NULL,
  `data_produkcji` text NOT NULL,
  `numer_vin` text NOT NULL,
  `pojemnosc_silnika` text NOT NULL,
  `kolor` text NOT NULL,
  `rejestracja` text NOT NULL,
  `skrzynia_biegow` text NOT NULL,
  `cena_dzien` text NOT NULL,
  `id_handlowiec` int(11) NOT NULL,
  `zdj` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auto`
--

INSERT INTO `auto` (`id_auto`, `marka`, `model`, `data_produkcji`, `numer_vin`, `pojemnosc_silnika`, `kolor`, `rejestracja`, `skrzynia_biegow`, `cena_dzien`, `id_handlowiec`, `zdj`) VALUES
(0, 'mercedes-benz', 'a class', '2018', '1029384756', '2', 'szary', 'zs 345aw', 'automatyczna', '200', 2, 'mercedes_aclass_2019.png'),
(1, 'toyota', 'yaris', '2019', '1234565432', '0.7', 'czerwony', 'zs 34wsq', 'manualna', '100', 1, 'toyota_yaris_2019.png');

-- --------------------------------------------------------

--
-- Table structure for table `handlowiec`
--

CREATE TABLE `handlowiec` (
  `id_handlowiec` int(11) NOT NULL,
  `nazwa_handlowiec` text NOT NULL,
  `lokalizacja_handlowiec` text NOT NULL,
  `marka_handlowiec` text NOT NULL,
  `numer_nip` text NOT NULL,
  `numer_telefonu` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `handlowiec`
--

INSERT INTO `handlowiec` (`id_handlowiec`, `nazwa_handlowiec`, `lokalizacja_handlowiec`, `marka_handlowiec`, `numer_nip`, `numer_telefonu`, `email`) VALUES
(1, 'toyota szczecin', 'szczecin słoneczne', 'toyota', '145698742', '524789541', 'toytoa@szczecin.pl'),
(2, 'mercedess sz', 'szczecin dąbie ', 'mercedess-benz', '14587412589', '587412369', 'szczecin@mercedess.de');

-- --------------------------------------------------------

--
-- Table structure for table `klient`
--

CREATE TABLE `klient` (
  `id_klient` int(11) NOT NULL,
  `imie` mediumtext NOT NULL,
  `nazwisko` mediumtext NOT NULL,
  `numer_telefonu` mediumtext NOT NULL,
  `email` mediumtext NOT NULL,
  `data_urodzenia` mediumtext NOT NULL,
  `miejscowosc` mediumtext NOT NULL,
  `kod_pocztowy` mediumtext NOT NULL,
  `ulica` text NOT NULL,
  `numer_domu` mediumtext NOT NULL,
  `numer_mieszkania` mediumtext NOT NULL,
  `ID_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klient`
--

INSERT INTO `klient` (`id_klient`, `imie`, `nazwisko`, `numer_telefonu`, `email`, `data_urodzenia`, `miejscowosc`, `kod_pocztowy`, `ulica`, `numer_domu`, `numer_mieszkania`, `ID_user`) VALUES
(1, 'Adam', 'Nowak', '123987456', 'nowak@adam.pl', '1999-09-12', 'szczecin', '70-987', 'kolorowa', '2', '2', 1),
(3, 'Janusz', 'Kowalski', '567109281', 'typowypolak@wp.pl', '1987-07-14', 'Warszawa', '01-675', 'kolorowa', '1', '4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pracownik`
--

CREATE TABLE `pracownik` (
  `id_pracownik` int(11) NOT NULL,
  `imie_pracownik` text NOT NULL,
  `nazwiko_pracownik` text NOT NULL,
  `stanowisko_pracownik` text NOT NULL,
  `data_zatrudnienia` text NOT NULL,
  `numer_telefonu_pracownik` text NOT NULL,
  `email_praconik` text NOT NULL,
  `miejscowowosc_pracownik` text NOT NULL,
  `ulica_pracownik` text NOT NULL,
  `kod_pocztowy_pracownik` text NOT NULL,
  `numer_domu_pracownik` text NOT NULL,
  `numer_mieszkania_pracownik` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pracownik`
--

INSERT INTO `pracownik` (`id_pracownik`, `imie_pracownik`, `nazwiko_pracownik`, `stanowisko_pracownik`, `data_zatrudnienia`, `numer_telefonu_pracownik`, `email_praconik`, `miejscowowosc_pracownik`, `ulica_pracownik`, `kod_pocztowy_pracownik`, `numer_domu_pracownik`, `numer_mieszkania_pracownik`, `id_user`) VALUES
(1, 'ryszard', 'długi', 'kierwonik', '2009-05-25', '254789123', 'dlugo@kontakt.pl', 'szczecin', 'granitowa', '70-998', '1', '5', 2),
(2, 'Adam', 'Nowak', 'pomoc', '2006-12-21', '321456213', 'adam@nowak.pl', 'szczecin', 'szeroka', '70-443', '2', 'a', 3);

-- --------------------------------------------------------

--
-- Table structure for table `przeglad`
--

CREATE TABLE `przeglad` (
  `id_przegladu` int(11) NOT NULL,
  `numer_przegladu` text NOT NULL,
  `data_ostatniego_przegladu` text NOT NULL,
  `termin_kolejnego_przegladu` text NOT NULL,
  `koszt_przegladu` text NOT NULL,
  `id_auto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `przeglad`
--

INSERT INTO `przeglad` (`id_przegladu`, `numer_przegladu`, `data_ostatniego_przegladu`, `termin_kolejnego_przegladu`, `koszt_przegladu`, `id_auto`) VALUES
(1, '987234', '2020-01-01', '2025-01-01', '5000', 0),
(2, '342582', '2019-12-31', '2024-12-31', '1000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ubezieczalnia`
--

CREATE TABLE `ubezieczalnia` (
  `id_ubezepieczalnia` int(11) NOT NULL,
  `nazwa_u` text NOT NULL,
  `kontakt_u` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ubezieczalnia`
--

INSERT INTO `ubezieczalnia` (`id_ubezepieczalnia`, `nazwa_u`, `kontakt_u`) VALUES
(1, 'pzu', 'pzu.szczecin@wp.pl');

-- --------------------------------------------------------

--
-- Table structure for table `ubezpieczenia`
--

CREATE TABLE `ubezpieczenia` (
  `id_ubezpieczenia` int(11) NOT NULL,
  `numer_ubezpieczenia` text NOT NULL,
  `data_zakupu_ubezpieczenia` text NOT NULL,
  `data_konca_ubezpieczenia` text NOT NULL,
  `cena_ubezpieczenia` text NOT NULL,
  `rodzaj_ubezpieczenia` text NOT NULL,
  `id_auto` int(11) NOT NULL,
  `id_ubezpieczalnia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ubezpieczenia`
--

INSERT INTO `ubezpieczenia` (`id_ubezpieczenia`, `numer_ubezpieczenia`, `data_zakupu_ubezpieczenia`, `data_konca_ubezpieczenia`, `cena_ubezpieczenia`, `rodzaj_ubezpieczenia`, `id_auto`, `id_ubezpieczalnia`) VALUES
(1, '10293845', '2019-12-31', '2021-12-31', '10000', 'ac/oc', 0, 1),
(2, '567741369', '2019-12-31', '2021-12-31', '50000', 'ac/oc', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_user` int(11) NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `phonenumber` text NOT NULL,
  `login` text NOT NULL,
  `class` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_user`, `password`, `email`, `phonenumber`, `login`, `class`) VALUES
(1, '123', '123@123.123', '123456789', '123', 'client'),
(2, '321', '321@321.321', '0987654321', '321', 'admin'),
(3, '1qaz2wsXX', 'piorom12@gmail.com', '570037319', 'shadow', 'client');

-- --------------------------------------------------------

--
-- Table structure for table `wynajecie`
--

CREATE TABLE `wynajecie` (
  `id_wynajmu` int(11) NOT NULL,
  `id_auto` int(11) NOT NULL,
  `id_klient` int(11) NOT NULL,
  `data_wynajecia` date NOT NULL,
  `data_zwrot_plan` date NOT NULL,
  `czas_wynajmu` text NOT NULL,
  `przebieg_przed` text NOT NULL,
  `ilosc_paliwa` text NOT NULL,
  `cena_wynajmu` text NOT NULL,
  `id_pracownik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wynajecie`
--

INSERT INTO `wynajecie` (`id_wynajmu`, `id_auto`, `id_klient`, `data_wynajecia`, `data_zwrot_plan`, `czas_wynajmu`, `przebieg_przed`, `ilosc_paliwa`, `cena_wynajmu`, `id_pracownik`) VALUES
(1, 0, 1, '2020-03-10', '2020-03-16', '7 dni', '0', 'pełny bak', '700', 1),
(2, 1, 1, '2020-03-08', '2020-03-12', '5', '0', 'pełny bak', '500', 1),
(3, 0, 3, '2020-03-23', '2020-03-29', '6', '10000', 'pełny bak', '1200', 2);

-- --------------------------------------------------------

--
-- Table structure for table `zwrot`
--

CREATE TABLE `zwrot` (
  `id_zwrot` int(11) NOT NULL,
  `id_wynajmu` int(11) NOT NULL,
  `data_zwrotu` date NOT NULL,
  `przebieg_zwrot` text NOT NULL,
  `ilosc_paliwa` text NOT NULL,
  `doplata` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zwrot`
--

INSERT INTO `zwrot` (`id_zwrot`, `id_wynajmu`, `data_zwrotu`, `przebieg_zwrot`, `ilosc_paliwa`, `doplata`) VALUES
(1, 1, '2020-03-17', '10000', 'pusty bak', '500'),
(2, 2, '2020-03-12', '5741', 'pełny bak', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`id_auto`),
  ADD KEY `id_handlowiec` (`id_handlowiec`);

--
-- Indexes for table `handlowiec`
--
ALTER TABLE `handlowiec`
  ADD PRIMARY KEY (`id_handlowiec`);

--
-- Indexes for table `klient`
--
ALTER TABLE `klient`
  ADD PRIMARY KEY (`id_klient`),
  ADD KEY `ID_user` (`ID_user`);

--
-- Indexes for table `pracownik`
--
ALTER TABLE `pracownik`
  ADD PRIMARY KEY (`id_pracownik`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `przeglad`
--
ALTER TABLE `przeglad`
  ADD PRIMARY KEY (`id_przegladu`),
  ADD KEY `id_auto` (`id_auto`);

--
-- Indexes for table `ubezieczalnia`
--
ALTER TABLE `ubezieczalnia`
  ADD PRIMARY KEY (`id_ubezepieczalnia`);

--
-- Indexes for table `ubezpieczenia`
--
ALTER TABLE `ubezpieczenia`
  ADD PRIMARY KEY (`id_ubezpieczenia`),
  ADD KEY `id_auto` (`id_auto`),
  ADD KEY `id_ubezpieczalnia` (`id_ubezpieczalnia`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_user`);

--
-- Indexes for table `wynajecie`
--
ALTER TABLE `wynajecie`
  ADD PRIMARY KEY (`id_wynajmu`),
  ADD KEY `id_auto` (`id_auto`),
  ADD KEY `id_klient` (`id_klient`),
  ADD KEY `id_pracownik` (`id_pracownik`);

--
-- Indexes for table `zwrot`
--
ALTER TABLE `zwrot`
  ADD PRIMARY KEY (`id_zwrot`),
  ADD KEY `id_wynajmu` (`id_wynajmu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `handlowiec`
--
ALTER TABLE `handlowiec`
  MODIFY `id_handlowiec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `klient`
--
ALTER TABLE `klient`
  MODIFY `id_klient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pracownik`
--
ALTER TABLE `pracownik`
  MODIFY `id_pracownik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `przeglad`
--
ALTER TABLE `przeglad`
  MODIFY `id_przegladu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ubezieczalnia`
--
ALTER TABLE `ubezieczalnia`
  MODIFY `id_ubezepieczalnia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ubezpieczenia`
--
ALTER TABLE `ubezpieczenia`
  MODIFY `id_ubezpieczenia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wynajecie`
--
ALTER TABLE `wynajecie`
  MODIFY `id_wynajmu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `zwrot`
--
ALTER TABLE `zwrot`
  MODIFY `id_zwrot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auto`
--
ALTER TABLE `auto`
  ADD CONSTRAINT `auto_ibfk_1` FOREIGN KEY (`id_handlowiec`) REFERENCES `handlowiec` (`id_handlowiec`);

--
-- Constraints for table `klient`
--
ALTER TABLE `klient`
  ADD CONSTRAINT `klient_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `user` (`ID_user`);

--
-- Constraints for table `pracownik`
--
ALTER TABLE `pracownik`
  ADD CONSTRAINT `pracownik_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`ID_user`);

--
-- Constraints for table `przeglad`
--
ALTER TABLE `przeglad`
  ADD CONSTRAINT `przeglad_ibfk_1` FOREIGN KEY (`id_auto`) REFERENCES `auto` (`id_auto`);

--
-- Constraints for table `ubezpieczenia`
--
ALTER TABLE `ubezpieczenia`
  ADD CONSTRAINT `ubezpieczenia_ibfk_1` FOREIGN KEY (`id_auto`) REFERENCES `auto` (`id_auto`),
  ADD CONSTRAINT `ubezpieczenia_ibfk_2` FOREIGN KEY (`id_ubezpieczalnia`) REFERENCES `ubezieczalnia` (`id_ubezepieczalnia`);

--
-- Constraints for table `wynajecie`
--
ALTER TABLE `wynajecie`
  ADD CONSTRAINT `wynajecie_ibfk_1` FOREIGN KEY (`id_auto`) REFERENCES `auto` (`id_auto`),
  ADD CONSTRAINT `wynajecie_ibfk_2` FOREIGN KEY (`id_klient`) REFERENCES `klient` (`id_klient`),
  ADD CONSTRAINT `wynajecie_ibfk_3` FOREIGN KEY (`id_pracownik`) REFERENCES `pracownik` (`id_pracownik`);

--
-- Constraints for table `zwrot`
--
ALTER TABLE `zwrot`
  ADD CONSTRAINT `zwrot_ibfk_1` FOREIGN KEY (`id_wynajmu`) REFERENCES `wynajecie` (`id_wynajmu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
