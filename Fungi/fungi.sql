-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Ápr 16. 21:37
-- Kiszolgáló verziója: 10.4.27-MariaDB
-- PHP verzió: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `fungi`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `chat`
--

CREATE TABLE `chat` (
  `ID` int(20) NOT NULL,
  `sender` varchar(60) NOT NULL,
  `message` varchar(255) NOT NULL,
  `receiver` varchar(60) NOT NULL DEFAULT 'Everyone'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `chat`
--

INSERT INTO `chat` (`ID`, `sender`, `message`, `receiver`) VALUES
(63, 'Jim Halpert', 'Hey Pam, have you seen any interesting fungi lately?', 'Pam Beesly'),
(64, 'Pam Beesly', 'Not really, just the usual ones we see around here.', 'Jim Halpert'),
(65, 'Jim Halpert', 'Have you tried looking in the woods?', 'Pam Beesly'),
(66, 'Pam Beesly', 'No, but that sounds like a good idea. Thanks!', 'Jim Halpert'),
(67, 'Jim Halpert', 'No problem, happy mushroom hunting!', 'Pam Beesly'),
(68, 'Dwight Schrute', 'Hey Michael, have you tried eating the mushrooms on the property yet?', 'Michael Scott'),
(69, 'Michael Scott', 'Dwight, I would never eat anything on this property unless I was 100% sure it was safe. Remember when you tried to feed me beets? You said they were candy!', 'Dwight Schrute'),
(70, 'Dwight Schrute', 'Fair enough, Michael. But just so you know, there are some delicious and nutritious mushrooms growing out here.', 'Michael Scott'),
(71, 'Michael Scott', 'I\'ll take your word for it, Dwight. But I think I\'ll stick to my PB&J sandwich for now.', 'Dwight Schrute'),
(72, 'Dwight Schrute', 'Suit yourself.', 'Michael Scott'),
(73, 'Kevin Malone', 'Hey everyone, has anyone seen any cool mushrooms lately?', 'Everyone'),
(74, 'Jan Levinson', 'I found some interesting ones on my last hiking trip.', 'Everyone'),
(75, 'Jim Halpert', 'I heard there are some rare species in the nearby national park.', 'Everyone'),
(76, 'Dwight Schrute', 'I\'ve been cultivating some gourmet mushrooms on the farm.', 'Everyone'),
(77, 'Jim Halpert', 'Hey Pam, have you seen any interesting fungi lately?', 'Pam Beesly'),
(78, 'Pam Beesly', 'Not really, just the usual ones we see around here.', 'Jim Halpert'),
(79, 'Jim Halpert', 'Have you tried looking in the woods?', 'Pam Beesly'),
(80, 'Pam Beesly', 'No, but that sounds like a good idea. Thanks!', 'Jim Halpert'),
(81, 'Jim Halpert', 'No problem, happy mushroom hunting!', 'Pam Beesly'),
(82, 'Dwight Schrute', 'Hey Michael, have you tried eating the mushrooms on the property yet?', 'Michael Scott'),
(83, 'Michael Scott', 'Dwight, I would never eat anything on this property unless I was 100% sure it was safe. Remember when you tried to feed me beets? You said they were candy!', 'Dwight Schrute'),
(84, 'Dwight Schrute', 'Fair enough, Michael. But just so you know, there are some delicious and nutritious mushrooms growing out here.', 'Michael Scott'),
(85, 'Michael Scott', 'I\'ll take your word for it, Dwight. But I think I\'ll stick to my PB&J sandwich for now.', 'Dwight Schrute'),
(86, 'Dwight Schrute', 'Suit yourself.', 'Michael Scott'),
(87, 'Kevin Malone', 'Hey everyone, has anyone seen any cool mushrooms lately?', 'Everyone'),
(88, 'Jan Levinson', 'I found some interesting ones on my last hiking trip.', 'Everyone'),
(89, 'Jim Halpert', 'I heard there are some rare species in the nearby national park.', 'Everyone'),
(90, 'Dwight Schrute', 'I\'ve been cultivating some gourmet mushrooms on the farm.', 'Everyone'),
(91, 'Jim Halpert', 'Hey Pam, have you seen any interesting fungi lately?', 'Pam Beesly'),
(92, 'Pam Beesly', 'Not really, just the usual ones we see around here.', 'Jim Halpert'),
(93, 'Jim Halpert', 'Have you tried looking in the woods?', 'Pam Beesly'),
(94, 'Pam Beesly', 'No, but that sounds like a good idea. Thanks!', 'Jim Halpert'),
(95, 'Jim Halpert', 'No problem, happy mushroom hunting!', 'Pam Beesly'),
(96, 'Dwight Schrute', 'Hey Michael, have you tried eating the mushrooms on the property yet?', 'Michael Scott'),
(97, 'Michael Scott', 'Dwight, I would never eat anything on this property unless I was 100% sure it was safe. Remember when you tried to feed me beets? You said they were candy!', 'Dwight Schrute'),
(98, 'Dwight Schrute', 'Fair enough, Michael. But just so you know, there are some delicious and nutritious mushrooms growing out here.', 'Michael Scott'),
(99, 'Michael Scott', 'I\'ll take your word for it, Dwight. But I think I\'ll stick to my PB&J sandwich for now.', 'Dwight Schrute'),
(100, 'Dwight Schrute', 'Suit yourself.', 'Michael Scott'),
(101, 'Kevin Malone', 'Hey everyone, has anyone seen any cool mushrooms lately?', 'Everyone'),
(102, 'Jan Levinson', 'I found some interesting ones on my last hiking trip.', 'Everyone'),
(103, 'Jim Halpert', 'I heard there are some rare species in the nearby national park.', 'Everyone'),
(104, 'Dwight Schrute', 'I\'ve been cultivating some gourmet mushrooms on the farm.', 'Everyone'),
(105, 'Jim Halpert', 'Hey Pam, have you seen any interesting fungi lately?', 'Pam Beesly'),
(106, 'Pam Beesly', 'Not really, just the usual ones we see around here.', 'Jim Halpert'),
(107, 'Jim Halpert', 'Have you tried looking in the woods?', 'Pam Beesly'),
(108, 'Pam Beesly', 'No, but that sounds like a good idea. Thanks!', 'Jim Halpert'),
(109, 'Jim Halpert', 'No problem, happy mushroom hunting!', 'Pam Beesly'),
(110, 'Dwight Schrute', 'Hey Michael, have you tried eating the mushrooms on the property yet?', 'Michael Scott'),
(111, 'Michael Scott', 'Dwight, I would never eat anything on this property unless I was 100% sure it was safe. Remember when you tried to feed me beets? You said they were candy!', 'Dwight Schrute'),
(112, 'Dwight Schrute', 'Fair enough, Michael. But just so you know, there are some delicious and nutritious mushrooms growing out here.', 'Michael Scott'),
(113, 'Michael Scott', 'I\'ll take your word for it, Dwight. But I think I\'ll stick to my PB&J sandwich for now.', 'Dwight Schrute'),
(114, 'Dwight Schrute', 'Suit yourself.', 'Michael Scott'),
(115, 'Kevin Malone', 'Hey everyone, has anyone seen any cool mushrooms lately?', 'Everyone'),
(116, 'Jan Levinson', 'I found some interesting ones on my last hiking trip.', 'Everyone'),
(117, 'Jim Halpert', 'I heard there are some rare species in the nearby national park.', 'Everyone'),
(118, 'Dwight Schrute', 'I\'ve been cultivating some gourmet mushrooms on the farm.', 'Everyone'),
(119, 'Jim Halpert', 'Hey Pam, have you seen any interesting fungi lately?', 'Pam Beesly'),
(120, 'Pam Beesly', 'Not really, just the usual ones we see around here.', 'Jim Halpert'),
(121, 'Jim Halpert', 'Have you tried looking in the woods?', 'Pam Beesly'),
(122, 'Pam Beesly', 'No, but that sounds like a good idea. Thanks!', 'Jim Halpert'),
(123, 'Jim Halpert', 'No problem, happy mushroom hunting!', 'Pam Beesly'),
(124, 'Dwight Schrute', 'Hey Michael, have you tried eating the mushrooms on the property yet?', 'Michael Scott'),
(125, 'Michael Scott', 'Dwight, I would never eat anything on this property unless I was 100% sure it was safe. Remember when you tried to feed me beets? You said they were candy!', 'Dwight Schrute'),
(126, 'Dwight Schrute', 'Fair enough, Michael. But just so you know, there are some delicious and nutritious mushrooms growing out here.', 'Michael Scott'),
(127, 'Michael Scott', 'I\'ll take your word for it, Dwight. But I think I\'ll stick to my PB&J sandwich for now.', 'Dwight Schrute'),
(128, 'Dwight Schrute', 'Suit yourself.', 'Michael Scott'),
(129, 'Kevin Malone', 'Hey everyone, has anyone seen any cool mushrooms lately?', 'Everyone'),
(130, 'Jan Levinson', 'I found some interesting ones on my last hiking trip.', 'Everyone'),
(131, 'Jim Halpert', 'I heard there are some rare species in the nearby national park.', 'Everyone'),
(132, 'Dwight Schrute', 'I\'ve been cultivating some gourmet mushrooms on the farm.', 'Everyone'),
(133, 'Michael Scott', 'Greetings, mushroom lovers! I may not know much about fungi, but I do know a thing or two about having a good time.', 'Everyone'),
(134, 'Pam Beesly', 'Michael, what does having a good time have to do with mushrooms?', 'Everyone'),
(135, 'Michael Scott', 'Pam, let me tell you, mushrooms can be a real party starter. You ever heard of magic mushrooms?', 'Everyone'),
(136, 'Jim Halpert', 'Michael, I don\'t think we should be promoting the use of drugs here.', 'Everyone'),
(137, 'Michael Scott', 'Whoa, Jim. Slow down. I didn\'t say anything about drugs. I\'m talking about the fun and excitement that comes with exploring the amazing world of fungi!', 'Everyone'),
(138, 'Dwight Schrute', 'Michael, you really need to be careful what you say in public. We don\'t want to get in trouble with HR.', 'Everyone'),
(139, 'Michael Scott', 'Relax, Dwight. I\'m just trying to inject a little humor into our chat. After all, laughter is the best medicine, right?', 'Everyone');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role` varchar(30) NOT NULL,
  `ID` int(10) NOT NULL,
  `profile_picture` varchar(1000) NOT NULL DEFAULT 'basic.jpeg',
  `intro` varchar(1000) NOT NULL DEFAULT 'not set yet',
  `favfun` varchar(100) NOT NULL DEFAULT 'not set yet',
  `public_email` tinyint(1) NOT NULL DEFAULT 1,
  `public_intro` tinyint(1) NOT NULL DEFAULT 1,
  `public_favfun` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `role`, `ID`, `profile_picture`, `intro`, `favfun`, `public_email`, `public_intro`, `public_favfun`) VALUES
('Jan Levinson', 'admin@gmail.com', 'admin', 'admin', 1, '643c0dba5e7cc.jpeg', 'Leading the site.', 'no preference', 0, 0, 1),
('1', '1@1.1', '11', 'admin', 2, 'basic.jpeg', 'not set yet', 'not set yet', 1, 1, 1),
('Pam Beesly', 'basicemail@gmail.com', 'user', 'user', 5, '643bf97d577de.jpeg', 'Exploring the wonders and mysteries of the fungal kingdom together.', 'shiitake', 1, 0, 1),
('Kevin Malone', 'john.suez@gmail.com', '$2y$10$lCY5zHrz6GrmMxqNf8xIn.F3OXM/sXfutc5w5h3HL99CuPZL8tV7K', 'user', 18, 'basic.jpeg', 'Hello! I really like fungi, especially the one that you can find in soup! :)', 'Chanterelles', 1, 1, 1),
('Jim Halpert', 'email@gmail.com', '$2y$10$DYCu4NnsO6NQH/cAJC5JxuQ98k2diJDMidi2xPPZ9da17PqgnwIiy', 'admin', 19, 'basic.jpeg', 'I do like fungi, and I am definitely a real person.', 'Pam', 1, 1, 1),
('Michael Scott', 'michaelScott@gmail.com', '$2y$10$bOKN/WVc/icoDDDxocr9wOB7N9rfXhBX3azLf1OuCW0Eo3eDvp7Hy', 'user', 20, '643be12e323f6.jpeg', 'People say I am the best boss.', 'Jan', 1, 1, 1),
('Dwight Schrute', 'assistantmanager@gmail.com', '$2y$10$YgoJ.8WtHHZgYs8ZRiH8WOZEZ9D1KSlO6opar0AjUl914kmx9AW2u', 'user', 21, 'basic.jpeg', 'Greeting, Earthlings. I am Dwight Schrute, Assistant to the Regional Manager at Dunder Mifflin. As an expert in all things agriculture, I am thrilled to welcome you to this fungi-themed website.', 'porcini', 1, 1, 1);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`ID`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `chat`
--
ALTER TABLE `chat`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
