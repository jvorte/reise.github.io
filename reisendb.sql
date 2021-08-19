-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 19 Αυγ 2021 στις 16:27:34
-- Έκδοση διακομιστή: 10.4.18-MariaDB
-- Έκδοση PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `reisendb`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `artikel`
--

CREATE TABLE `artikel` (
  `artikelID` int(10) NOT NULL,
  `artikelName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `artikelGruppe` int(10) NOT NULL,
  `artikelPreis` decimal(10,2) NOT NULL,
  `artikelBeschreibung` text COLLATE utf8_unicode_ci NOT NULL,
  `active` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `featured` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `artikel`
--

INSERT INTO `artikel` (`artikelID`, `artikelName`, `artikelGruppe`, `artikelPreis`, `artikelBeschreibung`, `active`, `featured`, `image_name`) VALUES
(219, 'Campingstuhl', 228, '35.00', 'Unser Anliegen? Wir möchten dir einen großen Campingstuhl anbieten, der gleichzeitig bequem, robust und kompakt ist. Unverzichtbar zum Campen!', 'Yes', 'Yes', 'Produkt-Name-8640.jpg'),
(220, 'Campings', 228, '35.00', 'Unser Anliegen? Wir möchten dir einen großen Campingstuhl anbieten, der gleichzeitig bequem, robust und kompakt ist. Unverzichtbar zum Campen!', 'Yes', 'Yes', 'Produkt-Name-640.jpg'),
(221, 'Hoody ', 228, '35.00', 'Unser Anliegen? Wir möchten dir einen großen Campingstuhl anbieten, der gleichzeitig bequem, robust und kompakt ist. Unverzichtbar zum Campen!\r\n\r\nUnser Anliegen? Wir möchten dir einen großen Campingstuhl anbieten, der gleichzeitig bequem, robust und kompakt ist. Unverzichtbar zum Campen!\r\nUnser Anliegen? Wir möchten dir einen großen Campingstuhl anbieten, der gleichzeitig bequem, robust und kompakt ist. Unverzichtbar zum Campen!\r\nUnser Anliegen? Wir möchten dir einen großen Campingstuhl anbieten, der gleichzeitig bequem, robust und kompakt ist. Unverzichtbar zum Campen!', 'Yes', 'Yes', 'Produkt-Name-3756.jpg'),
(222, 'Hordentopf', 228, '35.00', 'Relags Biwak Hordentopf Aluminium Kochtöpfe, die nicht nur die Pfadfinder zu schätzen wissen. Für das Fahrtenlager, das zünftige Biwak oder die Gartenparty bestens geeignet Der Topf ist aus fein geschliffenem Aluminium, mit stabilem Henkel versehen. Natürlich auch auf Gas- oder Benzinkochern einsetzbar - so kann man auch für Familien in großem Stil kochen. Nicht für Spülmaschinen geeignet Relags Biwak Hordentopf', 'Yes', 'Yes', 'Produkt-Name-6157.jpg'),
(223, 'Campingkocher ', 228, '35.00', 'Wir nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Ihre Privatsphäre ist für uns ein wichtiges Anliegen.\r\n\r\nNachfolgende Bestimmungen dienen Ihrer Information über die Verarbeitung personenbezogener Daten gemäß den Anforderungen der Datenschutzgrundverordnung (DSGVO).\r\nInsbesondere unter Berücksichtigung der Informationspflichten nach Art. 12 bis 14 DSGVO, sowie zur Aufklärung über die nach der DSGVO bestehenden Betroffenenrechte gemäß den Art. 15 bis 22 und Art. 34 DSGVO.\r\n\r\n ', 'Yes', 'Yes', 'Produkt-Name-5737.jpg'),
(224, 'Zelt 2 Personen', 231, '35.00', 'Wir nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Ihre Privatsphäre ist für uns ein wichtiges Anliegen.\r\n\r\nNachfolgende Bestimmungen dienen Ihrer Information über die Verarbeitung personenbezogener Daten gemäß den Anforderungen der Datenschutzgrundverordnung (DSGVO).\r\nInsbesondere unter Berücksichtigung der Informationspflichten nach Art. 12 bis 14 DSGVO, sowie zur Aufklärung über die nach der DSGVO bestehenden Betroffenenrechte gemäß den Art. 15 bis 22 und Art. 34 DSGVO.\r\n\r\n ', 'Yes', 'Yes', 'Trip_Name_5052.jpg'),
(225, 'Zelt 4 Personen', 231, '35.00', 'Wir nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Ihre Privatsphäre ist für uns ein wichtiges Anliegen.\r\n\r\nNachfolgende Bestimmungen dienen Ihrer Information über die Verarbeitung personenbezogener Daten gemäß den Anforderungen der Datenschutzgrundverordnung (DSGVO).\r\nInsbesondere unter Berücksichtigung der Informationspflichten nach Art. 12 bis 14 DSGVO, sowie zur Aufklärung über die nach der DSGVO bestehenden Betroffenenrechte gemäß den Art. 15 bis 22 und Art. 34 DSGVO.\r\n\r\n ', 'Yes', 'Yes', 'Produkt-Name-7268.jpg'),
(226, 'Lampe', 232, '10.00', 'Wir nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Ihre Privatsphäre ist für uns ein wichtiges Anliegen.\r\n\r\nNachfolgende Bestimmungen dienen Ihrer Information über die Verarbeitung personenbezogener Daten gemäß den Anforderungen der Datenschutzgrundverordnung (DSGVO).\r\nInsbesondere unter Berücksichtigung der Informationspflichten nach Art. 12 bis 14 DSGVO, sowie zur Aufklärung über die nach der DSGVO bestehenden Betroffenenrechte gemäß den Art. 15 bis 22 und Art. 34 DSGVO.\r\n\r\n ', 'Yes', 'Yes', 'Produkt-Name-3429.jpg'),
(227, 'RuckeSacke', 230, '35.00', 'Wir nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Ihre Privatsphäre ist für uns ein wichtiges Anliegen.\r\n\r\nNachfolgende Bestimmungen dienen Ihrer Information über die Verarbeitung personenbezogener Daten gemäß den Anforderungen der Datenschutzgrundverordnung (DSGVO).\r\nInsbesondere unter Berücksichtigung der Informationspflichten nach Art. 12 bis 14 DSGVO, sowie zur Aufklärung über die nach der DSGVO bestehenden Betroffenenrechte gemäß den Art. 15 bis 22 und Art. 34 DSGVO.\r\n\r\n ', 'Yes', 'Yes', 'Produkt-Name-582.png'),
(228, 'Reisezubehör', 229, '10.00', 'Wir nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Ihre Privatsphäre ist für uns ein wichtiges Anliegen.\r\n\r\nNachfolgende Bestimmungen dienen Ihrer Information über die Verarbeitung personenbezogener Daten gemäß den Anforderungen der Datenschutzgrundverordnung (DSGVO).\r\nInsbesondere unter Berücksichtigung der Informationspflichten nach Art. 12 bis 14 DSGVO, sowie zur Aufklärung über die nach der DSGVO bestehenden Betroffenenrechte gemäß den Art. 15 bis 22 und Art. 34 DSGVO.\r\n\r\n ', 'Yes', 'Yes', 'Produkt-Name-785.jpg'),
(231, 'Bagail 4 Set/6', 0, '35.00', 'fdfdfd', 'Yes', 'Yes', 'Produkt-Name-579.jpg');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `bestellungen`
--

CREATE TABLE `bestellungen` (
  `bestellID` int(11) NOT NULL,
  `bestArtikelFID` int(11) NOT NULL,
  `bestUserFID` varchar(11) NOT NULL,
  `artikelName` varchar(255) NOT NULL,
  `bestPreis` decimal(11,2) NOT NULL,
  `bestStueck` int(11) NOT NULL,
  `bestUmsatz` decimal(11,2) NOT NULL,
  `bestDatum` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `bestRechnungsnummer` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `bestellungen`
--

INSERT INTO `bestellungen` (`bestellID`, `bestArtikelFID`, `bestUserFID`, `artikelName`, `bestPreis`, `bestStueck`, `bestUmsatz`, `bestDatum`, `bestRechnungsnummer`, `status`, `username`) VALUES
(408, 220, '52', 'Campings', '35.00', 2, '70.00', '2021-05-21 11:37:13', 0, 'Bestellt', 'jvortelinas');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `last_name`, `email`, `message`) VALUES
(61, 'ΦΩΤΕΙΝΗ', 'ΜΑΥΡΟΜΜΑΤΗ', 'fenia.mavromati@gmail.com', 'grrgrgrgr');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `postings`
--

CREATE TABLE `postings` (
  `id` int(11) NOT NULL,
  `postingHeader` varchar(255) NOT NULL,
  `postingUser` varchar(255) NOT NULL,
  `postingText` text NOT NULL,
  `postingDatum` date NOT NULL,
  `postingStatus` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `postings`
--

INSERT INTO `postings` (`id`, `postingHeader`, `postingUser`, `postingText`, `postingDatum`, `postingStatus`) VALUES
(48, 'Paris', 'Dimitris', 'Der Nachweis von Covid-19 kann direkt über einen Virusnachweis oder indirekt über Antikörper (welche sich im Zuge einer Infektion gebildet haben) erfolgen. Für die Frühdiagnostik einer Infektion bildet internationalen Vorgaben zufolge, nach wie vor der direkte Erregernachweis mittels qualitätsgesichertem PCR-Verfahren, den Goldstandard.\r\n\r\nPCR-Tests (Polymerasekettenreaktion) dienen dem Nachweis einer aktuellen COVID-19-Infektion. Für PCR-Tests werden Proben aus dem Rachen oder Nasenraum gewonnen.\r\n\r\nAntigen-Tests: Neben PCR-Tests besteht mit Antigen-Tests eine weitere Möglichkeit eines direkten Erregernachweises von SARS-CoV-2. Bei Antigen-Tests wird kein Labor zur Auswertung benötigt, das Ergebnis steht innerhalb kurzer Zeit (etwa 20 Minuten) fest, diese sind derzeit verfügbar und preiswert, jedoch im Vergleich zu PCR-Tests weniger zuverlässig. Im Unterschied zu PCR-Tests wird bei Antigen-Tests nicht das Erbgut des Virus nachgewiesen, sondern dessen Protein bzw. Proteinhülle.', '2021-03-26', 1),
(49, 'London', 'vortelinas', 'Der Nachweis von Covid-19 kann direkt über einen Virusnachweis oder indirekt über Antikörper (welche sich im Zuge einer Infektion gebildet haben) erfolgen. Für die Frühdiagnostik einer Infektion bildet internationalen Vorgaben zufolge, nach wie vor der direkte Erregernachweis mittels qualitätsgesichertem PCR-Verfahren, den Goldstandard.\r\n\r\nPCR-Tests (Polymerasekettenreaktion) dienen dem Nachweis einer aktuellen COVID-19-Infektion. Für PCR-Tests werden Proben aus dem Rachen oder Nasenraum gewonnen.\r\n\r\nAntigen-Tests: Neben PCR-Tests besteht mit Antigen-Tests eine weitere Möglichkeit eines direkten Erregernachweises von SARS-CoV-2. Bei Antigen-Tests wird kein Labor zur Auswertung benötigt, das Ergebnis steht innerhalb kurzer Zeit (etwa 20 Minuten) fest, diese sind derzeit verfügbar und preiswert, jedoch im Vergleich zu PCR-Tests weniger zuverlässig. Im Unterschied zu PCR-Tests wird bei Antigen-Tests nicht das Erbgut des Virus nachgewiesen, sondern dessen Protein bzw. Proteinhülle.', '2021-03-26', 0),
(75, 'meine Urlaub', 'fefefe', 'fefefe', '2021-05-21', 0),
(76, 'mein Urlaub', 'vortelinas', 'cedvev', '2021-05-21', 0),
(77, 'Verschiedene Arten von COVID-19-Testmethoden', 'grgrrg', 'grrgrgr', '2021-05-22', 0);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `created_at`) VALUES
(5, 'jvortelinas', '$2y$10$t5qDbEfD6WzpjV5a3wk0BeReS7pCyioxvAqc6eBfz5GkaZl2vmFSm', '2021-05-21 13:32:52');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `tbl_category`
--

CREATE TABLE `tbl_category` (
  `artikelID` int(10) UNSIGNED NOT NULL,
  `artikelName` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `tbl_category`
--

INSERT INTO `tbl_category` (`artikelID`, `artikelName`, `image_name`, `featured`, `active`) VALUES
(228, ' Camping', 'Trip_Category_963.jpg', 'yes', 'yes'),
(229, ' Reisezubehor', 'Trip_Category_588.jpg', 'yes', 'yes'),
(230, ' Rucksäcke & Taschen', 'Trip_Category_322.jpg', 'yes', 'yes'),
(231, ' Zelte', 'Trip_Category_567.png', 'yes', 'yes'),
(232, ' Lampen', 'Produkt_Category_789.jpg', 'Yes', 'Yes'),
(235, ' Reisezubehor Berg', 'Trip_Category_692.jpg', 'yes', 'yes'),
(237, ' Reisezubehor2', 'Trip_Category_500.jpg', 'yes', 'yes'),
(238, ' Camping3333', 'Trip_Category_643.jpg', 'yes', 'yes'),
(240, ' TRINKFLASCHE ', 'Trip_Category_352.jpg', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `fullname` varchar(100) NOT NULL,
  `contact` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `fullname`, `contact`, `email`, `address`) VALUES
(52, 'jvortelinas', '$2y$10$iC4XT11ZrLjtzpgt6PITEuX/PKJmg78zZvjZ/k/gG3Td9We4p563q', '2021-05-21 13:37:01', 'ΦΩΤΕΙΝΗ ΜΑΥΡΟΜΜΑΤΗ', '2467074379', 'fenia.mavromati@gmail.com', '28ΗΣ ΟΚΤΩΒΡΙΟΥ 49');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikelID`);

--
-- Ευρετήρια για πίνακα `bestellungen`
--
ALTER TABLE `bestellungen`
  ADD PRIMARY KEY (`bestellID`);

--
-- Ευρετήρια για πίνακα `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `postings`
--
ALTER TABLE `postings`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Ευρετήρια για πίνακα `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`artikelID`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `artikel`
--
ALTER TABLE `artikel`
  MODIFY `artikelID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT για πίνακα `bestellungen`
--
ALTER TABLE `bestellungen`
  MODIFY `bestellID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=409;

--
-- AUTO_INCREMENT για πίνακα `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT για πίνακα `postings`
--
ALTER TABLE `postings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT για πίνακα `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT για πίνακα `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `artikelID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
