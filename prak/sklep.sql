-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Maj 06, 2025 at 12:33 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sklep`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `bielizna`
--

CREATE TABLE `bielizna` (
  `id` int(11) NOT NULL,
  `cena` decimal(10,2) DEFAULT NULL,
  `opis` text DEFAULT NULL,
  `rozmiar` varchar(10) DEFAULT NULL,
  `zdjecie` varchar(255) DEFAULT NULL,
  `ilosc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bielizna`
--

INSERT INTO `bielizna` (`id`, `cena`, `opis`, `rozmiar`, `zdjecie`, `ilosc`) VALUES
(1, 38.56, 'Stylowy produkt', '42', 'b1.jpg', 19),
(2, 59.11, 'Nowoczesny fason', '38', 'b2.jpg', 11),
(3, 171.52, 'Tradycyjny krój', '44', 'b3.jpg', 2),
(4, 134.36, 'Wygodny i lekki', '40', 'b4.jpg', 14),
(5, 80.62, 'Wysoka jakość', 'M', 'b5.jpg', 14),
(6, 201.86, 'Modny wybór', 'S', 'b6.jpg', 15),
(7, 118.89, 'Elegancki design', '40', 'b7.jpg', 15),
(8, 138.43, 'Casual styl', '42', 'b8.jpg', 2),
(9, 141.52, 'Sportowy wygląd', '38', 'b9.jpg', 9),
(10, 167.10, 'Z motywem', '44', 'b10.jpg', 4),
(11, 36.75, 'Na specjalne okazje', 'S', 'b11.jpg', 17),
(12, 97.15, 'Dla codziennego użytku', 'S', 'b12.jpg', 7);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `comment_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kimono`
--

CREATE TABLE `kimono` (
  `id` int(11) NOT NULL,
  `cena` decimal(10,2) DEFAULT NULL,
  `opis` text DEFAULT NULL,
  `rozmiar` varchar(10) DEFAULT NULL,
  `zdjecie` varchar(255) DEFAULT NULL,
  `ilosc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kimono`
--

INSERT INTO `kimono` (`id`, `cena`, `opis`, `rozmiar`, `zdjecie`, `ilosc`) VALUES
(1, 112.98, 'Stylowy produkt', '42', '11.WEBP', 5),
(2, 68.15, 'Nowoczesny fason', 'XL', '22.WEBP', 4),
(3, 117.42, 'Tradycyjny krój', '40', '88.WEBP', 20),
(4, 143.78, 'Wygodny i lekki', '38', '44.WEBP', 2),
(5, 87.57, 'Wysoka jakość', 'S', '55.WEBP', 20),
(6, 198.75, 'Modny wybór', 'M', '44.WEBP', 10),
(7, 242.95, 'Elegancki design', '44', '55.WEBP', 13),
(8, 91.16, 'Casual styl', 'M', '55.WEBP', 4),
(9, 105.70, 'Sportowy wygląd', 'L', '66.WEBP', 19),
(10, 235.95, 'Z motywem', 'S', '11.WEBP', 17),
(11, 179.49, 'Na specjalne okazje', 'XL', '55.WEBP', 2),
(12, 163.89, 'Dla codziennego użytku', '42', '88.WEBP', 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `komentarze`
--

CREATE TABLE `komentarze` (
  `id` int(11) NOT NULL,
  `kategoria` varchar(50) NOT NULL,
  `produkt_id` int(11) NOT NULL,
  `tresc` text NOT NULL,
  `data` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentarze`
--

INSERT INTO `komentarze` (`id`, `kategoria`, `produkt_id`, `tresc`, `data`) VALUES
(1, 'kimono', 1, 'hvjvhj', '2025-05-05 23:58:08'),
(2, 'kimono', 1, 'super!!!', '2025-05-05 23:58:23');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `obuwie`
--

CREATE TABLE `obuwie` (
  `id` int(11) NOT NULL,
  `cena` decimal(10,2) DEFAULT NULL,
  `opis` text DEFAULT NULL,
  `rozmiar` varchar(10) DEFAULT NULL,
  `zdjecie` varchar(255) DEFAULT NULL,
  `ilosc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obuwie`
--

INSERT INTO `obuwie` (`id`, `cena`, `opis`, `rozmiar`, `zdjecie`, `ilosc`) VALUES
(1, 185.02, 'Stylowy produkt', '44', 'ob1.jpg', 14),
(2, 205.55, 'Nowoczesny fason', '38', 'ob2.jpg', 10),
(3, 224.86, 'Tradycyjny krój', '40', 'ob3.jpg', 19),
(4, 137.35, 'Wygodny i lekki', '40', 'ob4.jpg', 18),
(5, 164.39, 'Wysoka jakość', '44', 'ob5.jpg', 11),
(6, 77.18, 'Modny wybór', 'M', 'ob6.jpg', 7),
(7, 236.38, 'Elegancki design', '38', 'ob7.jpg', 7),
(8, 145.83, 'Casual styl', 'S', 'ob8.jpg', 2),
(9, 239.08, 'Sportowy wygląd', '44', 'ob9.jpg', 6),
(10, 204.46, 'Z motywem', 'M', 'ob10.jpg', 20),
(11, 147.20, 'Na specjalne okazje', '38', 'ob11.jpg', 14),
(12, 54.52, 'Dla codziennego użytku', '40', 'ob12.jpg', 14);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `skarpety`
--

CREATE TABLE `skarpety` (
  `id` int(11) NOT NULL,
  `cena` decimal(10,2) DEFAULT NULL,
  `opis` text DEFAULT NULL,
  `rozmiar` varchar(10) DEFAULT NULL,
  `zdjecie` varchar(255) DEFAULT NULL,
  `ilosc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skarpety`
--

INSERT INTO `skarpety` (`id`, `cena`, `opis`, `rozmiar`, `zdjecie`, `ilosc`) VALUES
(1, 64.78, 'Stylowy produkt', '38', 's1.jpg', 19),
(2, 134.82, 'Nowoczesny fason', '40', 's2.jpg', 14),
(3, 204.90, 'Tradycyjny krój', 'XL', 's3.jpg', 11),
(4, 169.06, 'Wygodny i lekki', 'M', 's4.jpg', 15),
(5, 108.25, 'Wysoka jakość', 'M', 's5.jpg', 16),
(6, 204.93, 'Modny wybór', 'L', 's6.jpg', 17),
(7, 234.38, 'Elegancki design', 'S', 's7.jpg', 11),
(8, 141.78, 'Casual styl', '38', 's8.jpg', 10),
(9, 88.13, 'Sportowy wygląd', 'S', 's9.jpg', 17),
(10, 55.76, 'Z motywem', 'L', 's10.jpg', 8),
(11, 180.07, 'Na specjalne okazje', 'S', 's11.jpg', 13),
(12, 131.51, 'Dla codziennego użytku', 'S', 's12.jpg', 10);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `spodnicy`
--

CREATE TABLE `spodnicy` (
  `id` int(11) NOT NULL,
  `cena` decimal(10,2) DEFAULT NULL,
  `opis` text DEFAULT NULL,
  `rozmiar` varchar(10) DEFAULT NULL,
  `zdjecie` varchar(255) DEFAULT NULL,
  `ilosc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `spodnicy`
--

INSERT INTO `spodnicy` (`id`, `cena`, `opis`, `rozmiar`, `zdjecie`, `ilosc`) VALUES
(1, 222.23, 'Stylowy produkt', 'S', 'p1.jpg', 6),
(2, 234.19, 'Nowoczesny fason', 'S', 'p2.jpg', 9),
(3, 233.63, 'Tradycyjny krój', 'S', 'p3.jpg', 19),
(4, 47.00, 'Wygodny i lekki', 'M', 'p4.jpg', 18),
(5, 231.87, 'Wysoka jakość', '38', 'p5.jpg', 17),
(6, 190.81, 'Modny wybór', '38', 'p1.jpg', 15),
(7, 232.00, 'Elegancki design', '38', 'p2.jpg', 17),
(8, 190.30, 'Casual styl', '44', 'p3.jpg', 14),
(9, 104.84, 'Sportowy wygląd', 'L', 'p4.jpg', 15),
(10, 174.02, 'Z motywem', 'M', 'p5.jpg', 16),
(11, 236.03, 'Na specjalne okazje', '40', 'p1.jpg', 13),
(12, 190.33, 'Dla codziennego użytku', '40', 'p2.jpg', 8);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `spodnie`
--

CREATE TABLE `spodnie` (
  `id` int(11) NOT NULL,
  `cena` decimal(10,2) DEFAULT NULL,
  `opis` text DEFAULT NULL,
  `rozmiar` varchar(10) DEFAULT NULL,
  `zdjecie` varchar(255) DEFAULT NULL,
  `ilosc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `spodnie`
--

INSERT INTO `spodnie` (`id`, `cena`, `opis`, `rozmiar`, `zdjecie`, `ilosc`) VALUES
(1, 37.38, 'Stylowy produkt', 'L', 'ub1.jpg', 8),
(2, 106.31, 'Nowoczesny fason', '38', 'ub2.jpg', 3),
(3, 229.18, 'Tradycyjny krój', '42', 'ub3.jpg', 14),
(4, 172.66, 'Wygodny i lekki', '44', 'ub4.jpg', 5),
(5, 229.29, 'Wysoka jakość', 'S', 'ub5.jpg', 4),
(6, 35.41, 'Modny wybór', 'S', 'ub6.jpg', 13),
(7, 164.79, 'Elegancki design', '38', 'ub7.jpg', 6),
(8, 130.71, 'Casual styl', 'M', 'ub8.jpg', 3),
(9, 105.88, 'Sportowy wygląd', 'S', 'ub9.jpg', 12),
(10, 189.66, 'Z motywem', '44', 'ub10.jpg', 9),
(11, 229.02, 'Na specjalne okazje', '40', 'ub11.jpg', 19),
(12, 213.53, 'Dla codziennego użytku', '44', 'ub12.jpg', 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ubrania`
--

CREATE TABLE `ubrania` (
  `id` int(11) NOT NULL,
  `cena` decimal(10,2) DEFAULT NULL,
  `opis` text DEFAULT NULL,
  `rozmiar` varchar(10) DEFAULT NULL,
  `zdjecie` varchar(255) DEFAULT NULL,
  `ilosc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ubrania`
--

INSERT INTO `ubrania` (`id`, `cena`, `opis`, `rozmiar`, `zdjecie`, `ilosc`) VALUES
(1, 118.79, 'Stylowy produkt', '40', 'ub1.jpg', 7),
(2, 151.56, 'Nowoczesny fason', '42', 'ub2.jpg', 20),
(3, 155.54, 'Tradycyjny krój', '44', 'ub3.jpg', 7),
(4, 101.59, 'Wygodny i lekki', '38', 'ub4.jpg', 4),
(5, 191.28, 'Wysoka jakość', '44', 'ub5.jpg', 9),
(6, 89.12, 'Modny wybór', 'XL', 'ub6.jpg', 4),
(7, 247.08, 'Elegancki design', '42', 'ub7.jpg', 17),
(8, 234.23, 'Casual styl', '44', 'ub8.jpg', 4),
(9, 161.17, 'Sportowy wygląd', 'L', 'ub9.jpg', 6),
(10, 184.14, 'Z motywem', '42', 'ub10.jpg', 4),
(11, 86.90, 'Na specjalne okazje', 'XL', 'ub11.jpg', 6),
(12, 81.96, 'Dla codziennego użytku', 'M', 'ub12.jpg', 12);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, '', 'admin@yg', '$2y$10$f9ealwSXeLv2xyC8njMPLOtVodok9dZi7izRgHYVKKd16VALmJg1i');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `bielizna`
--
ALTER TABLE `bielizna`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeksy dla tabeli `kimono`
--
ALTER TABLE `kimono`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `obuwie`
--
ALTER TABLE `obuwie`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `skarpety`
--
ALTER TABLE `skarpety`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `spodnicy`
--
ALTER TABLE `spodnicy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `spodnie`
--
ALTER TABLE `spodnie`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `ubrania`
--
ALTER TABLE `ubrania`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bielizna`
--
ALTER TABLE `bielizna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kimono`
--
ALTER TABLE `kimono`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `komentarze`
--
ALTER TABLE `komentarze`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `obuwie`
--
ALTER TABLE `obuwie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `skarpety`
--
ALTER TABLE `skarpety`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `spodnicy`
--
ALTER TABLE `spodnicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `spodnie`
--
ALTER TABLE `spodnie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ubrania`
--
ALTER TABLE `ubrania`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `kimono` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
