-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2022 at 09:55 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boekenwinkel`
--

-- --------------------------------------------------------

--
-- Table structure for table `boeken`
--

CREATE TABLE `boeken` (
  `id` int(11) NOT NULL,
  `naam` varchar(256) NOT NULL,
  `auteur` varchar(256) NOT NULL,
  `recensie` varchar(256) NOT NULL,
  `uitgever` varchar(256) NOT NULL,
  `foto` varchar(256) NOT NULL,
  `prijs` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boeken`
--

INSERT INTO `boeken` (`id`, `naam`, `auteur`, `recensie`, `uitgever`, `foto`, `prijs`) VALUES
(1, 'Twee broers uit Auschwitz', 'Malka Adler', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has sur', 'Mozaiek', '<a href=\"boeken_paginas/boek1.php\"><img src=\"https://www.bruna.nl/images/active/carrousel/fullsize/9789023960096_front.jpg\" style=\"width=: 200px; height: 300px;\"></a>', '22,99'),
(2, 'De Cock en moord op stand', 'Baantjer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has sur', 'De Fontein Romans & Spanning', '<a href=\"boeken_paginas/boek2.php\"><img src=\"https://www.bruna.nl/images/active/carrousel/fullsize/9789026152283_front.jpg\" style=\"width=: 200px; height: 300px;\"></a>', '10,99'),
(3, 'De ontdekking', 'Harlan Coben ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has sur', 'Boekerij', '<a href=\"boeken_paginas/boek3.php\"><img src=\"https://www.bruna.nl/images/active/carrousel/fullsize/9789022594407_front.jpg\" style=\"width=: 200px; height: 300px;\"></a>', '12,50'),
(4, 'Bali', 'Kiki van Dijk', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has sur', 'Xander Uitgevers B.V.', '<a href=\"boeken_paginas/boek4.php\"><img src=\"https://www.bruna.nl/images/active/carrousel/fullsize/9789401611442_front.jpg\" style=\"width=: 200px; height: 300px;\"></a>', '14,99'),
(5, 'De kleuren van schoonheid', 'Corina Bomann', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has sur', 'Boekerij', '<a href=\"boeken_paginas/boek5.php\"><img src=\"https://www.bruna.nl/images/active/carrousel/fullsize/9789022593196_front.jpg\" style=\"width=: 200px; height: 300px;\"></a>', '20,99'),
(6, 'De verduistering', 'Karin Fossum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has sur', 'Boekerij', '<a href=\"boeken_paginas/boek6.php\"><img src=\"https://www.bruna.nl/images/active/carrousel/fullsize/9789022588222_front.jpg\" style=\"width=: 200px; height: 300px;\"></a>', '20,99'),
(7, 'De drie zussen van Auschwitz', 'Heather Morris', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has sur', 'Harpercollins', '<a href=\"boeken_paginas/boek7.php\"><img src=\"https://www.bruna.nl/images/active/carrousel/fullsize/9789402708912_front.jpg\" style=\"width=: 200px; height: 300px;\"></a>', '21,99'),
(8, 'Het verraad van Anne Frank', 'Rosemary Sullivan', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has sur', 'Ambo|Anthos', '<a href=\"boeken_paginas/boek8.php\"><img src=\"https://www.bruna.nl/images/active/carrousel/fullsize/9789026346392_front.jpg\" style=\"width=: 200px; height: 300px;\"></a>', '22,99'),
(9, 'Ik ga leven', 'Lale Gul', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has sur', 'Prometheus', '<a href=\"boeken_paginas/boek9.php\"><img src=\"https://www.bruna.nl/images/active/carrousel/fullsize/9789044646870_front.jpg\" style=\"width=: 200px; height: 300px;\"></a>', '20,99'),
(10, 'Mooier beter ouder', 'Isa Hoes, Medina Schuurman', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has sur', 'Kosmos Uitgevers', '<a href=\"boeken_paginas/boek10.php\"><img src=\"https://www.bruna.nl/images/active/carrousel/fullsize/9789021577548_front.jpg\" style=\"width=: 200px; height: 300px;\"></a>', '24,99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boeken`
--
ALTER TABLE `boeken`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boeken`
--
ALTER TABLE `boeken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
