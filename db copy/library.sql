-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 07 Maj 2018, 22:55
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
  `isbn` varchar(50) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `title` varchar(400) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `author` varchar(400) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `pages` int(11) NOT NULL,
  `publish_year` date NOT NULL,
  `category` varchar(200) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `book_descript` varchar(5000) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `img_link` varchar(5000) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `book`
--

INSERT INTO `book` (`id`, `isbn`, `title`, `author`, `pages`, `publish_year`, `category`, `book_descript`, `img_link`) VALUES
(2, '978-2-12-345680-4', 'Pan Tadusz', 'Adam Mickiewicz', 300, '2010-03-08', 'Epopeja', 'Pan Tadeusz, czyli Ostatni zajazd na Litwie - poemat epicki Adama Mickiewicza wydany w dwoch tomach w 1834 w Paryzu przez Aleksandra Jelowickiego.\r\n\r\nTa epopeja narodowa z elementami gawedy szlacheckiej powstala w latach 1832-1834 w Paryzu. Sklada sie z dwunastu ksiag pisanych wierszem, trzynastozgloskowym aleksandrynem polskim. Czas akcji: piec dni z roku 1811 i dwa dni z roku 1812.\r\n\r\nEpopeja jest stala pozycja na polskiej liscie lektur szkolnych. W 2012 byla publicznie odczytywana w akcji spolecznej propagujacej znajomosc literatury polskiej Narodowe Czytanie Pana Tadeusza[1].\r\n\r\nW 2014 roku rekopis ,,Pana Tadeusza\" zostal wpisany na Polska Liste Krajowa Programu UNESCO Pamiec Swiata', 'https://www.granice.pl/sys6/pliki/okladka_k/8e2e2391ba794e9127d8453bdc2e36fb.jpeg'),
(3, '978-2-12-345680-5', 'Ferdydurke', 'Witold Gombrowicz', 350, '2010-03-09', 'Komedia', 'Wybitna powiesc Gombrowicza wraz z rozmowa Jarzebskiego i Zawadzkiego.\r\n\r\nKrytycy i badacze roznych pokolen probuja rozszyfrowac na nowo konteksty najglosniejszej powiesci Gombrowicza interesujace mlodego czytelnika; wyjasnione zostaje pochodzenie tytulu utworu, zanalizowane nowatorstwo formalne, styl i jezyk, recepcja ksiazki przed i po wojnie, wplyw, jaki powiesc wywarla na dziela innych pisarzy.', 'https://cdn.bonito.pl/zdjecia/9/90926367541a2b66a983df6be1b6b9d7.jpg'),
(4, '978-2-12-345680-6', 'Dziennik 1953-1956', 'Witold Gombrowicz', 200, '2010-03-10', 'Dziennik', 'Pierwszy tom \"Dziennikow\" Gombrowicza pisanych dla \"Kultury\" paryskiej. Fascynujacy zapis przemyslen, polemik, lektur, korespondencji najwiekszego prowokatora w kulturze polskiej XX w.', 'http://s.lubimyczytac.pl/upload/books/68000/68006/352x500.jpg'),
(5, '978-2-12-345680-7', 'Dziennik 1953-1958', 'Witold Gombrowicz', 200, '2010-03-11', 'Dziennik', 'Ta edycja daje szczegolna sposobnosc do zapoznania sie z najwazniejszym utworem Gombrowicza, a zarazem jednym z najwybitniejszych dziel literatury XX wieku. To wlasnie Dziennik stworzyl norme powojennej polszczyzny literackiej, stal sie podrecznikiem stylu bycia i stylu pisania, specyficznego humoru, tragizmu, dawal lekcje stosunku do Polski i fundamentalnych zagadnien ontologicznych. Nadal pozostaje obowiazkowym podrecznikiem ludzi prawdziwie swiatlych, a jednoczesnie jest kluczem do wielu zagadek Gombrowiczowskiej poetyki i swiatopogladu.\r\nObecne wydanie przynosi prawdziwie pomocne indeksy osob i postaci fikcyjnych oraz indeks rzeczowo-tematyczny.', 'http://s.lubimyczytac.pl/upload/books/103000/103659/352x500.jpg'),
(6, '978-2-12-345680-8', 'Dzienniki Tom 3', 'Witold Gombrowicz', 200, '2010-03-12', 'Dziennik', 'Wyjatkowe, nie znajdujace porownania w polskiej literaturze dzielo, ktore od polwiecza nie stracilo na aktualnosci. Z osobistych utarczek Witolda Gombrowicza z calym swiatem powstal dziennik, ktory przekracza wszystkie mozliwe granice, wywoluje tematy przemilczane i te, ktorymi zyl i zyje swiat.', 'http://s.lubimyczytac.pl/upload/books/180000/180086/148106-352x500.jpg'),
(7, '978-2-12-345680-9', 'Dzienniki Gwiazdowe', 'Stanislaw Lem', 250, '2010-03-13', 'Fantastyka Naukowa', 'Czego mozemy sie nauczyc od kosmitow? W cyklu opowiadan pisanych przez ponad trzydziesci lat Stanislaw Lem udowadnia, ze bardzo wiele.\r\n\r\nBohater \"Dziennikow gwiazdowych\", Ijon Tichy, niczym Guliwer obcuje z roznymi istotami pozaziemskmi. Podczas swych licznych wojazy miedzyplantetarnych podroznik poznal rozmaite obce cywilizacje, stworzone tak przez istoty myslace, jaki i przez zaawansowane roboty.\r\n\r\nZaskakujace, ale kosmici mieszkajacy na oddalonych w przestrzeni (czasem takze czasie) planetach maja wiecej wspolnego z nami, niz mogloby sie wydawac...', 'http://s.lubimyczytac.pl/upload/books/135000/135153/352x500.jpg'),
(8, '978-2-12-345681-1', 'Kongres Futurologiczny', 'Stanislaw Lem', 200, '2010-03-14', 'Fantastyka Naukowa', '\"Kongres futurologiczny\", ktorego narratorem i bohaterem jest znany doskonale czytelnikom Lema -- chocby z \"Wizji lokalnej\", \"Pokoju na Ziemi\" i \"Dziennikow gwiazdowych\" -- Ijon Tichy, przedstawia antyutopijna wizje spoleczenstwa przyszlosci. Futurologiczny koszmar ukazany zostal w obrazie swiata, ktorego materialna i duchowa nedze maskuja halucynacje wywolane dzialaniem srodkow chemicznych. Srodki te, rozpylone w powietrzu, sprawiaja, ze postrzegana \"rzeczywistosc\" jawi sie mieszkancom owego swiata w postaci sielankowych projekcji ich marzen i pragnien. Lem posluzyl sie tu po mistrzowsku alegorycznym chwytem, ktorego sens -- po dwudziestowiecznych doswiadczeniach totalitarnej propagandy i masowych eksperymentow socjotechnicznych -- nie wymaga szczegolnych objasnien.\r\n', 'http://s.lubimyczytac.pl/upload/books/135000/135154/352x500.jpg'),
(11, '232312-3-123-213', 'Pan Tadeusz', 'Adam Mickiewicz', 213, '2018-05-12', 'Dramat', 'Opis', 'www.example.pl/image.png');

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
(28, 8, 2, '2018-03-23', '2018-04-23', 2),
(29, 34, 2, '2018-03-16', '2018-04-16', 7),
(30, 9, 2, '2018-04-25', '2018-05-25', 2);

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
(19, 7, 1, '2018-04-20'),
(20, 8, 1, '2018-04-20'),
(21, 8, 1, '2018-04-20'),
(22, 3, 1, '2018-04-20'),
(23, 9, 2, '2018-04-20');

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
(7, 2, 'WYPOZYCZONE'),
(8, 2, 'WYPOZYCZONE'),
(9, 2, 'WYPOZYCZONE'),
(10, 2, 'WOLNE'),
(11, 3, 'DOSTEPNE NA MIEJSCU'),
(12, 3, 'PROLONGOWANA'),
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
(27, 6, 'PROLONGOWANA'),
(28, 6, 'WOLNE'),
(29, 6, 'WOLNE'),
(30, 6, 'WYPOZYCZONE'),
(31, 7, 'DOSTEPNE NA MIEJSCU'),
(32, 7, 'WOLNE'),
(33, 7, 'WOLNE'),
(34, 7, 'WYPOZYCZONE'),
(35, 7, 'WYPOZYCZONE'),
(36, 8, 'DOSTEPNE NA MIEJSCU'),
(37, 8, 'WOLNE'),
(38, 8, 'WOLNE'),
(39, 8, 'WYPOZYCZONE'),
(40, 8, 'WOLNE'),
(41, 8, 'WOLNE');

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
(2, 'user1', '$2y$11$JHTbL3J6uDvOjtGGGQVZNurOuRBC0vyJ/C2kR96jeH76KMJXly56K', 'READER', 'Jan', 'Nowak', 'Wesola 12', '12-234', 'Kielce', '273748283'),
(3, 'user2', '$2y$11$l8Iw/Q/GVvU3Fc64atlKSuE5dS5TcZjEdeFlNHOmCR8i0T6hsFib2', 'READER', 'Adam', 'Kowal', 'Nowa 73', '34-534', 'Kielce', '483842838'),
(4, 'user12', '$2y$11$QpdwhLDBOImBawcxcJyNVOo6Tyf1W3ceaeHf/HqsJXbjXA71tS1Sa', 'READER', 'Adam', 'Majewski', 'Klonowa 21', '23-548', 'Kielce', '283473594');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT dla tabeli `borrowings`
--
ALTER TABLE `borrowings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT dla tabeli `borrowings_history`
--
ALTER TABLE `borrowings_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT dla tabeli `copy`
--
ALTER TABLE `copy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
