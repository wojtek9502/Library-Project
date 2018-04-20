-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Kwi 2018, 20:04
-- Wersja serwera: 10.1.31-MariaDB
-- Wersja PHP: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `library`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `isbn` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `title` varchar(400) COLLATE utf8_polish_ci NOT NULL,
  `author` varchar(400) COLLATE utf8_polish_ci NOT NULL,
  `pages` int(11) NOT NULL,
  `publish_year` date NOT NULL,
  `category` varchar(200) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `book`
--

INSERT INTO `book` (`id`, `isbn`, `title`, `author`, `pages`, `publish_year`, `category`) VALUES
(2, '978-2-12-345680-4', 'Pan Tadusz', 'Adam Mickiewicz', 300, '2010-03-08', 'Epopeja'),
(3, '978-2-12-345680-5', 'Ferdydurke', 'Witold Gombrowicz', 350, '2010-03-09', 'Komedia'),
(4, '978-2-12-345680-6', 'Dzienniki Tom 1', 'Witold Gombrowicz', 200, '2010-03-10', 'Dziennik'),
(5, '978-2-12-345680-7', 'Dzienniki Tom 2', 'Witold Gombrowicz', 200, '2010-03-11', 'Dziennik'),
(6, '978-2-12-345680-8', 'Dzienniki Tom 3', 'Witold Gombrowicz', 200, '2010-03-12', 'Dziennik'),
(7, '978-2-12-345680-9', 'Dzienniki Gwiazdowe', 'Stanis?aw Lem', 250, '2010-03-13', 'Komedia'),
(8, '978-2-12-345681-1', 'Kongres Futurologiczny', 'Stanis?aw Lem', 200, '2010-03-14', 'Komedia');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `borrowings`
--

CREATE TABLE `borrowings` (
  `id` int(11) NOT NULL,
  `copy_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `borrow_date` date NOT NULL,
  `give_date` date NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `borrowings`
--

INSERT INTO `borrowings` (`id`, `copy_id`, `user_id`, `borrow_date`, `give_date`, `book_id`) VALUES
(1, 5, 2, '2018-03-01', '2018-04-01', 1),
(10, 13, 4, '2018-04-20', '1970-02-01', 3),
(11, 13, 4, '2018-04-20', '1970-01-01', 3),
(12, 39, 4, '2018-04-20', '1970-01-01', 8),
(21, 38, 1, '2018-04-20', '2018-05-20', 8);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `borrowings_history`
--

CREATE TABLE `borrowings_history` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `give_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `borrowings_history`
--

INSERT INTO `borrowings_history` (`id`, `book_id`, `user_id`, `give_date`) VALUES
(1, 1, 1, '2017-04-01'),
(2, 2, 2, '2017-04-02'),
(3, 1, 3, '2017-04-03'),
(4, 3, 1, '2017-04-04'),
(5, 4, 2, '2017-04-05'),
(19, 7, 1, '2018-04-20');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `copy`
--

CREATE TABLE `copy` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `status` varchar(100) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `copy`
--

INSERT INTO `copy` (`id`, `book_id`, `status`) VALUES
(1, 1, 'DOSTEPNE NA MIEJSCU'),
(2, 1, 'WOLNE'),
(3, 1, 'WOLNE'),
(4, 1, 'WOLNE'),
(5, 1, 'WYPOZYCZONE'),
(6, 2, 'DOSTEPNE NA MIEJSCU'),
(7, 2, 'WOLNE'),
(8, 2, 'WOLNE'),
(9, 2, 'WOLNE'),
(10, 2, 'WOLNE'),
(11, 3, 'DOSTEPNE NA MIEJSCU'),
(12, 3, 'WOLNE'),
(13, 3, 'WYPOZYCZONE'),
(14, 3, 'WOLNE'),
(15, 3, 'WOLNE'),
(16, 4, 'DOSTEPNE NA MIEJSCU'),
(17, 4, 'WOLNE'),
(18, 4, 'WOLNE'),
(19, 4, 'WOLNE'),
(20, 4, 'WOLNE'),
(21, 5, 'DOSTEPNE NA MIEJSCU'),
(22, 5, 'WOLNE'),
(23, 5, 'WOLNE'),
(24, 5, 'WOLNE'),
(25, 5, 'WOLNE'),
(26, 6, 'DOSTEPNE NA MIEJSCU'),
(27, 6, 'WOLNE'),
(28, 6, 'WOLNE'),
(29, 6, 'WOLNE'),
(30, 6, 'WYPOZYCZONE'),
(31, 7, 'DOSTEPNE NA MIEJSCU'),
(32, 7, 'WOLNE'),
(33, 7, 'WYPOZYCZONE'),
(34, 7, 'WOLNE'),
(35, 7, 'WYPOZYCZONE'),
(36, 8, 'DOSTEPNE NA MIEJSCU'),
(37, 8, 'WOLNE'),
(38, 8, 'WYPOZYCZONE'),
(39, 8, 'WYPOZYCZONE'),
(40, 8, 'WOLNE');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `pass` varchar(500) COLLATE utf8_polish_ci NOT NULL,
  `view` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `surname` varchar(200) COLLATE utf8_polish_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_polish_ci NOT NULL,
  `post_code` varchar(6) COLLATE utf8_polish_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `phone` varchar(29) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `user`, `pass`, `view`, `name`, `surname`, `address`, `post_code`, `city`, `phone`) VALUES
(1, 'admin', '$2y$11$SSK4nOJIp3K9QCVJlWvN6.l8J4Jvj5.ha37q11Ck3Doleo0utF5XG', 'LIBRARIAN', 'Tomasz', 'Marzec', 'Rynek 12', '23-324', 'Kielce', '394959394'),
(2, 'user1', '$2y$11$JHTbL3J6uDvOjtGGGQVZNurOuRBC0vyJ/C2kR96jeH76KMJXly56K', 'READER', 'Jan', 'Nowak', 'Weso?a 12', '12-234', 'Kielce', '273748283'),
(3, 'user2', '$2y$11$l8Iw/Q/GVvU3Fc64atlKSuE5dS5TcZjEdeFlNHOmCR8i0T6hsFib2', 'READER', 'Adam', 'Kowal', 'Nowa 73', '34-534', 'Kielce', '483842838');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `borrowings`
--
ALTER TABLE `borrowings`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `borrowings_history`
--
ALTER TABLE `borrowings_history`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `copy`
--
ALTER TABLE `copy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `borrowings`
--
ALTER TABLE `borrowings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT dla tabeli `borrowings_history`
--
ALTER TABLE `borrowings_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT dla tabeli `copy`
--
ALTER TABLE `copy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
