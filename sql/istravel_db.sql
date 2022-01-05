-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-istravel.alwaysdata.net
-- Generation Time: Jan 05, 2022 at 05:05 PM
-- Server version: 10.6.5-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `istravel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `Id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `activity_name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`Id`, `email`, `activity_name`, `city`, `description`, `image`, `status`) VALUES
(2, 'elianza@ac.sce.ac.il', 'Ice Skating', 'Beer Sheva', 'Address: Hita St 1, Beer Sheva (in the Cinema City)\r\nOpening hours: \r\nSunday:             Closed\r\n                          Monday:        16:00–21:00\r\n                          Tuesday:            Closed\r\n                          Wednesday:  16:00–21:00\r\n                          Thursday:      16:00–21:00\r\n                          Friday:           10:00–22:00\r\n                          Saturday:       10:00–22:00\r\nPhone number: 08-617-2020', 'ice_skating_beer_sheva.jpg', 'Accepted'),
(15, 'elianza@ac.sce.ac.il', 'Bowling - Netanya', 'Netanya', 'Address: Beni Berman St 2, Netanya (in the Ir Yamim Mall)\r\n\r\nOpening hours: Sunday         10:00–00:00\r\n                          Monday        10:00–00:00\r\n                          Tuesday        10:00–00:00\r\n                          Wednesday  10:00–00:00\r\n\r\n                          Thursday      10:00–00:00\r\n                          Friday           10:00–00:00\r\n                          Saturday       10:00–00:00\r\n\r\nPhone number: 09-766-5095', 'bowling_netanya.jpg', 'Accepted'),
(16, 'elianza@ac.sce.ac.il', 'Laser City - Beer Sheva', 'Beer Sheva', 'Address: Heil Handasa St 1, Beer Sheva (in Big)\r\nOpening hours: Sunday         10:00–00:00\r\n                          Monday        10:00–00:00\r\n                          Tuesday        10:00–00:00\r\n                          Wednesday  10:00–00:00\r\n                          Thursday      10:00–00:00\r\n                          Friday           10:00–18:00\r\n                          Saturday       10:00–00:00\r\nPhone number: 08-623-2263', 'laser_beer_sheva.jpg', 'In progress'),
(17, 'elianza@ac.sce.ac.il', 'Ice Peak - Eilat', 'Eilat', 'Address: Kampen St 8, Eilat (in Ice Mall)\r\nOpening hours: Sunday         11:00–23:00\r\n                          Monday        11:00–23:00\r\n                          Tuesday       11:00–23:00\r\n                          Wednesday  11:00–23:00\r\n                          Thursday      11:00–23:00\r\n                          Friday           11:00–22:00\r\n                          Saturday       11:00–23:00', 'ice_peak_eilat.jpg', 'Denied');

-- --------------------------------------------------------

--
-- Table structure for table `activity_comment`
--

CREATE TABLE `activity_comment` (
  `Id` int(11) NOT NULL,
  `Id_activity` int(11) NOT NULL,
  `comment` text CHARACTER SET utf8mb3 NOT NULL,
  `date` int(11) NOT NULL,
  `name` text CHARACTER SET utf8mb3 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Id` int(11) NOT NULL,
  `Id_user` int(11) NOT NULL,
  `Id_trip` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Id`, `Id_user`, `Id_trip`, `quantity`) VALUES
(11, 1, 18, 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `first_name`, `last_name`, `email`, `message`) VALUES
(3, 'Samuel', 'Sebag', 'sabagsh@ac.sce.ac.il', 'Hello, I would know if there will be a trip for yom yeroushalaim this year ?');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `Id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb3 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb3 NOT NULL,
  `start_date` varchar(255) CHARACTER SET utf8mb3 NOT NULL,
  `end_date` varchar(255) CHARACTER SET utf8mb3 NOT NULL,
  `place` varchar(255) CHARACTER SET utf8mb3 NOT NULL,
  `price` int(11) NOT NULL,
  `description` text CHARACTER SET utf8mb3 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`Id`, `title`, `image`, `start_date`, `end_date`, `place`, `price`, `description`) VALUES
(18, 'Tou Bishvat - Eilat', 'tou_bishvat.jpg', '2022-01-13', '2022-01-18', 'Eilat', 3000, 'Come celebrate the feast of Tou Bishvat to Eilat!\r\n\r\nStay from 13 January 2022 to 18 January 2022 (6 days / 5 nights)\r\n\r\nNote that children count for a person.\r\n\r\nThis trip includes:\r\nFlights O / I Transavia from Paris.\r\nOutbound: HV3938 13/01/2022 Paris Orly ORY / David-Ben-Gurion International TLV\r\nDeparture 10:15 Arrival 16:00\r\n\r\nInbound: HV3939 18/01/22 David-Ben-Gurion International TLV / Paris Orly ORY\r\nDeparture 18:00 Arrival 22:10\r\n\r\nAirport Transfers / Private Bus Hotel\r\n\r\nHotel Dan Panorama 4**** in the center of Eilat.\r\n\r\nOn the program: visit a dates field + picking dates, visit the Yotvata farm, breakfast on boat privatize with children activities (tobogan at sea), Eilat Aquarium ...\r\n\r\nThis price does not include:\r\n• Airport transfers in France.\r\n• Personal extras and expenses\r\n• The excursions contracted on the spot, or directly at the hotel.\r\n• Possible increases in airport taxes and fuel overload\r\n• Usual tips to hotel staff (left at the customer discretion)\r\n• Insurance Travel related to the stay'),
(19, 'Valentine\'s Day - Mitspe Ramon', 'valentine.jpg', '2022-02-13', '2022-02-15', 'Mitspe Ramon', 2250, 'Come celebrate Valentine\'s Day in love with Mitspe Ramon!\r\n\r\nStay of 13 February 2022 to 15 February 2022 (3 days / 2nights)\r\n(The price displays is for the couple)\r\n\r\nThis trip includes:\r\nFlights O / I EasyJet from Paris.\r\nOutbound: EZY3737 25/01/2022 Paris CDG / David-Ben-Gurion International TLV\r\nDeparture 07:15 Check arrival 12:55\r\n\r\nInbound: EZY3738 30/01/22 David-Ben-Gurion International TLV / Paris CDG\r\nCheck out 14:00 Arrival 18:20\r\n\r\nAirport Transfers / Private Bus Hotel\r\n\r\nHotel Beresheet 5*****, Mitspe Ramon\'s most popular hotel.\r\n\r\nOn the program: Romantic gastronomic dinner, spa, camel ride, visit of the Cratere of Mitspe Ramon\r\n\r\nThis price does not include:\r\n• Airport transfers in France.\r\n• Personal extras and expenses\r\n• The excursions contracted on the spot, or directly at the hotel.\r\n• Possible increases in airport taxes and fuel overload\r\n• Usual tips to hotel staff (left at the customer discretion)\r\n• Insurance Travel related to the stay'),
(20, 'Valentine\'s Day - Tel Aviv', 'valentine.jpg', '2022-02-13', '2022-02-15', 'Tel Aviv', 1250, 'Come celebrate Valentine Day in love at Tel Aviv!\r\n\r\nStay of 13 February 2022 to 15 February 2022 (3 days / 2nights)\r\n(The price displays is for the couple)\r\n\r\nThis trip includes:\r\nFlights O / I EasyJet from Paris.\r\nOutbound: EZY3737 25/01/2022 Paris CDG / David-Ben-Gurion International TLV\r\nDeparture 07:15 Check arrival 12:55\r\n\r\nInbound: EZY3738 30/01/22 David-Ben-Gurion International TLV / Paris CDG\r\nCheck out 14:00 Arrival 18:20\r\n\r\nAirport Transfers / Private Bus Hotel\r\n\r\nRoyal Beach 5 ***** hotel in front of the sea.\r\n\r\nOn the program: Romantic gastronomic dinner, duo massage, sea shooting by the sea at sunset...\r\n\r\nThis price does not include:\r\n• Airport transfers in France.\r\n• Personal extras and expenses\r\n• The excursions contracted on the spot, or directly at the hotel.\r\n• Possible increases in airport taxes and fuel overload\r\n• Usual tips to hotel staff (left at the customer discretion)\r\n• Insurance Travel related to the stay'),
(21, 'Valentine\'s Day - Netanya', 'valentine.jpg', '2022-02-13', '2022-02-15', 'Netanya', 1000, 'Come celebrate Valentine Day in love at Netanya !\r\n\r\nStay of 13 February 2022 to 15 February 2022 (3 days / 2nights)\r\n(The price displays is for the couple)\r\n\r\nThis trip includes:\r\nFlights O / I EasyJet from Paris.\r\nOutbound: EZY3737 25/01/2022 Paris CDG / David-Ben-Gurion International TLV\r\nDeparture 07:15 Check arrival 12:55\r\n\r\nInbound: EZY3738 30/01/22 David-Ben-Gurion International TLV / Paris CDG\r\nCheck out 14:00 Arrival 18:20\r\n\r\nAirport Transfers / Private Bus Hotel\r\n\r\nVert Lagoon 5***** hotel in front of the sea.\r\n\r\nOn the program: Romantic gastronomic dinner, duo massage, sea shooting by the sea at sunset...\r\n\r\nThis price does not include:\r\n• Airport transfers in France.\r\n• Personal extras and expenses\r\n• The excursions contracted on the spot, or directly at the hotel.\r\n• Possible increases in airport taxes and fuel overload\r\n• Usual tips to hotel staff (left at the customer discretion)\r\n• Insurance Travel related to the stay'),
(22, 'Tou Bishvat - Tiberias', 'tou_bishvat.jpg', '2022-01-13', '2022-01-18', 'Tiberias', 5000, 'Come celebrate the feast of Tou Bishvat to Tiberias !\r\n\r\nStay from 13 January 2022 to 18 January 2022 (6 days / 5 nights)\r\n\r\nNote that children count for a person.\r\n\r\nThis trip includes:\r\nFlights O / I Transavia from Paris.\r\nOutbound: HV3938 13/01/2022 Paris Orly ORY / David-Ben-Gurion International TLV\r\nDeparture 10:15 Arrival 16:00\r\n\r\nInbound: HV3939 18/01/22 David-Ben-Gurion International TLV / Paris Orly ORY\r\nDeparture 18:00 Arrival 22:10\r\n\r\nAirport Transfers / Private Bus Hotel\r\n\r\nHotel GAI BEACH 4**** with water games.\r\n\r\nOn the program: visit a fruit field + picking fruits, an afternoon at Aqua Kef, breakfast on boat privatize at the Kineneret, ...\r\n\r\nThis price does not include:\r\n• Airport transfers in France.\r\n• Personal extras and expenses\r\n• The excursions contracted on the spot, or directly at the hotel.\r\n• Possible increases in airport taxes and fuel overload\r\n• Usual tips to hotel staff (left at the customer discretion)\r\n• Insurance Travel related to the stay');

-- --------------------------------------------------------

--
-- Table structure for table `trip_comment`
--

CREATE TABLE `trip_comment` (
  `Id` int(11) NOT NULL,
  `Id_trip` int(11) NOT NULL,
  `comment` text CHARACTER SET utf8mb3 NOT NULL,
  `date` int(11) NOT NULL,
  `name` text CHARACTER SET utf8mb3 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trip_comment`
--

INSERT INTO `trip_comment` (`Id`, `Id_trip`, `comment`, `date`, `name`) VALUES
(4, 18, 'I did this trip last year with my kids and everything was great ! I recommend 100% ! You can go there with your eyes closed they take care of everything, you won\'t be disappointed ! What could be better than seeing stars in the eyes of our children ?', 1640887560, 'Elianor'),
(6, 18, 'Great trip !', 1641133870, 'Sarah'),
(7, 22, 'Very nice trip !', 1641134128, 'Sarah');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `first_name`, `last_name`, `email`, `password`, `type`) VALUES
(1, 'Sarah', 'Maimon', 'sarama1@ac.sce.ac.il', '$2y$12$HH5yuIrlijQMPZwW1SKTMeqr38kj/lKmMMc7BGg59b0PTmjXekaYq', 'admin'),
(2, 'Samuel', 'Sebag', 'sabagsh@ac.sce.ac.il', '$2y$12$95402vbZFs8gsbliw3FRMO/xNZhULiSoDI7G3Uihi4z6ac1gE8Es.', 'admin'),
(10, 'Elianor', 'Zanzouri', 'elianza@ac.sce.ac.il', '$2y$12$iv.jmLnO54G4J02IXeHL1OA9kYrva68rNLnhk3TAgrAVyFr6jY0Ke', 'manager'),
(21, 'Dylan', 'Levi', 'dylanle@ac.sce.ac.il', '$2y$12$lWwsqSKNpmZL6FRBItG08eTPpLCpt.d1A2DDThYCrPSSpZYzsyb/m', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `activity_comment`
--
ALTER TABLE `activity_comment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `trip_comment`
--
ALTER TABLE `trip_comment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `activity_comment`
--
ALTER TABLE `activity_comment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `trip_comment`
--
ALTER TABLE `trip_comment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
