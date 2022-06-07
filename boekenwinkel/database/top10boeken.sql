-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 09:41 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
  time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;

/*!40101 SET NAMES utf8mb4 */
;

--
-- Database: `boekenwinkel`
--
-- --------------------------------------------------------
--
-- Table structure for table `top10boeken`
--
CREATE TABLE `top10boeken` (
  `id` int(11) NOT NULL,
  `foto` varchar(1000) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Dumping data for table `top10boeken`
--
INSERT INTO
  `top10boeken` (`id`, `foto`)
VALUES
  (
    1,
    '        <div class=\"col-lg-4 col-sm-6\">\r\n                    <a class=\"portfolio-box\" href=\"pictures/databasePics/boek1.png\" title=\"Twee broers uit Auschwitz\">\r\n                        <img class=\"img-fluid\" src=\"pictures/databasePics/boek1.png\" style=\"height: 693px; width: 500px;\" alt=\"...\" />\r\n                        <div class=\"portfolio-box-caption\">\r\n                            <div class=\"project-category text-white-50\">Titel</div>\r\n                            <div class=\"project-name\">Twee broers uit Auschwitz</div>\r\n                        </div>\r\n                    </a>\r\n                </div>'
  ),
  (
    2,
    '\r\n        <div class=\"col-lg-4 col-sm-6\">\r\n                    <a class=\"portfolio-box\" href=\"pictures/databasePics/boek2.jpg\" title=\"De Cock en moord op stand\">\r\n                        <img class=\"img-fluid\" src=\"pictures/databasePics/boek2.jpg\" style=\"height: 693px; width: 500px;\" alt=\"...\" />\r\n                        <div class=\"portfolio-box-caption\">\r\n                            <div class=\"project-category text-white-50\">Titel</div>\r\n                            <div class=\"project-name\">De Cock en moord op stand</div>\r\n                        </div>\r\n                    </a>\r\n                </div>'
  ),
  (
    3,
    '        <div class=\"col-lg-4 col-sm-6\">\r\n                    <a class=\"portfolio-box\" href=\"pictures/databasePics/boek3.jpg\" title=\"De ontdekking\">\r\n                        <img class=\"img-fluid\" src=\"pictures/databasePics/boek3.jpg\" style=\"height: 693px; width: 500px;\" alt=\"...\" />\r\n                        <div class=\"portfolio-box-caption\">\r\n                            <div class=\"project-category text-white-50\">Titel</div>\r\n                            <div class=\"project-name\">De ontdekking</div>\r\n                        </div>\r\n                    </a>\r\n                </div>'
  ),
  (
    4,
    '        <div class=\"col-lg-4 col-sm-6\">\r\n                    <a class=\"portfolio-box\" href=\"pictures/databasePics/boek4.jpg\" title=\"Bali\">\r\n                        <img class=\"img-fluid\" src=\"pictures/databasePics/boek4.jpg\" style=\"height: 693px; width: 500px;\" alt=\"...\" />\r\n                        <div class=\"portfolio-box-caption\">\r\n                            <div class=\"project-category text-white-50\">Titel</div>\r\n                            <div class=\"project-name\">Bali</div>\r\n                        </div>\r\n                    </a>\r\n                </div>'
  ),
  (
    5,
    '        <div class=\"col-lg-4 col-sm-6\">\r\n                    <a class=\"portfolio-box\" href=\"pictures/databasePics/boek5.jpg\" title=\"De kleuren van schoonheid\">\r\n                        <img class=\"img-fluid\" src=\"pictures/databasePics/boek5.jpg\" style=\"height: 693px; width: 500px;\" alt=\"...\" />\r\n                        <div class=\"portfolio-box-caption\">\r\n                            <div class=\"project-category text-white-50\">Titel</div>\r\n                            <div class=\"project-name\">De kleuren van schoonheid</div>\r\n                        </div>\r\n                    </a>\r\n                </div>'
  ),
  (
    6,
    '        <div class=\"col-lg-4 col-sm-6\">\r\n                    <a class=\"portfolio-box\" href=\"pictures/databasePics/boek6.jpg\" title=\"De verduistering\">\r\n                        <img class=\"img-fluid\" src=\"pictures/databasePics/boek6.jpg\" style=\"height: 693px; width: 500px;\" alt=\"...\" />\r\n                        <div class=\"portfolio-box-caption\">\r\n                            <div class=\"project-category text-white-50\">Titel</div>\r\n                            <div class=\"project-name\">De verduistering</div>\r\n                        </div>\r\n                    </a>\r\n                </div>'
  ),
  (
    7,
    '        <div class=\"col-lg-4 col-sm-6\">\r\n                    <a class=\"portfolio-box\" href=\"pictures/databasePics/boek7.jpg\" title=\"De drie zussen van Auschwitz\">\r\n                        <img class=\"img-fluid\" src=\"pictures/databasePics/boek7.jpg\" style=\"height: 693px; width: 500px;\" alt=\"...\" />\r\n                        <div class=\"portfolio-box-caption\">\r\n                            <div class=\"project-category text-white-50\">Titel</div>\r\n                            <div class=\"project-name\">De drie zussen van Auschwitz</div>\r\n                        </div>\r\n                    </a>\r\n                </div>'
  ),
  (
    8,
    '        <div class=\"col-lg-4 col-sm-6\">\r\n                    <a class=\"portfolio-box\" href=\"pictures/databasePics/boek8.jpg\" title=\"Het verraad van Anne Frank\">\r\n                        <img class=\"img-fluid\" src=\"pictures/databasePics/boek8.jpg\" style=\"height: 693px; width: 500px;\" alt=\"...\" />\r\n                        <div class=\"portfolio-box-caption\">\r\n                            <div class=\"project-category text-white-50\">Titel</div>\r\n                            <div class=\"project-name\">Het verraad van Anne Frank</div>\r\n                        </div>\r\n                    </a>\r\n                </div>'
  ),
  (
    9,
    '        <div class=\"col-lg-4 col-sm-6\">\r\n                    <a class=\"portfolio-box\" href=\"pictures/databasePics/boek9.jpg\" title=\"Ik ga leven\">\r\n                        <img class=\"img-fluid\" src=\"pictures/databasePics/boek9.jpg\" style=\"height: 693px; width: 500px;\" alt=\"...\" />\r\n                        <div class=\"portfolio-box-caption\">\r\n                            <div class=\"project-category text-white-50\">Titel</div>\r\n                            <div class=\"project-name\">Ik ga leven</div>\r\n                        </div>\r\n                    </a>\r\n                </div>'
  ),
  (
    10,
    '        <div class=\"col-lg-4 col-sm-6 offset-md-4\">\r\n                    <a class=\"portfolio-box\" href=\"pictures/databasePics/boek10.jpg\" title=\"Mooier beter ouder\">\r\n                        <img class=\"img-fluid\" src=\"pictures/databasePics/boek10.jpg\" style=\"height: 693px; width: 500px;\" alt=\"...\" />\r\n                        <div class=\"portfolio-box-caption\">\r\n                            <div class=\"project-category text-white-50\">Titel</div>\r\n                            <div class=\"project-name\">Mooier beter ouder</div>\r\n                        </div>\r\n                    </a>\r\n                </div>'
  );

--
-- Indexes for dumped tables
--
--
-- Indexes for table `top10boeken`
--
ALTER TABLE
  `top10boeken`
ADD
  PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `top10boeken`
--
ALTER TABLE
  `top10boeken`
MODIFY
  `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 11;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;