
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `sharefood`

-- --------------------------------------------------------

--
-- Table structure for table `charity`
--

CREATE TABLE `charity` (
  `charityId` int(10) UNSIGNED NOT NULL,
  `charityName` varchar(100) NOT NULL,
  `charityLocation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `charity`
--

INSERT INTO `charity` (`charityId`, `charityName`, `charityLocation`) VALUES
(1, 'Hesed House', 'Aurora, IL'),
(2, 'Wayside Cross Ministries', 'Aurora, IL'),
(3, 'Lazarus House', 'St. Charles, IL'),
(4, 'Marie Wilkinson Food Pantry', 'Aurora, IL');
-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
	`id` int(10) UNSIGNED NOT NULL,
  `foodtype` varchar(100) NOT NULL,
  `quantityfed` varchar(30) NOT NULL,
  `restId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `foodtype`, `quantityfed`, `restId`) VALUES
(1,'Meat Chili', '30', 1),
(2,'Nachos', '10', 1),
(3,'Veggie Chili', '30', 1),
(4,'Steak','7', 3),
(5,'Bagels','20', 4),
(6,'Bacon','10', 4),
(7,'Celery','10', 5),
(8,'Boneless Buffalo Wings','10', 6),
(9,'Cheddar Soup','10', 6),
(10,'Bread','40', 6),
(11,'Chicken Burritos','10', 7);

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `restId` int(10) UNSIGNED NOT NULL,
  `restName` varchar(100) NOT NULL,
  `restLocation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`restId`, `restName`, `restLocation`) VALUES
(1, 'Chilis', 'Aurora, IL'),
(2, 'Big Sea Sushi & Noodles', 'Aurora, IL'),
(3, 'The Turf Room', 'North Aurora, IL'),
(4, 'Harners Baker & Restaurant', 'North Aurora, IL'),
(5, 'Buffalo Wild Wings', 'Aurora, IL'),
(6, 'Panera Bread', 'Aurora, IL'),
(7, 'Chipotle Mexican Grill', 'Aurora, IL');

--
-- Indexes for table `charity`
--
ALTER TABLE `charity`
  ADD PRIMARY KEY (`charityId`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`restId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `charity`
--
ALTER TABLE `charity`
  MODIFY `charityId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `restId` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

