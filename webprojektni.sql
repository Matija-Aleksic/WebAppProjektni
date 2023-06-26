-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jun 25, 2023 at 11:48 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webprojektni`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `datum` varchar(32) NOT NULL,
  `naslov` varchar(64) NOT NULL,
  `sazetak` text NOT NULL,
  `tekst` text NOT NULL,
  `slika` varchar(64) NOT NULL,
  `kategorija` varchar(64) NOT NULL,
  `arhiva` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `datum`, `naslov`, `sazetak`, `tekst`, `slika`, `kategorija`, `arhiva`) VALUES
(8, '23.06.2023.', 'edit vijesti', 'mali teeesni edit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'image6.jpg', 'sport', 0),
(10, '23.06.2023.', 'doktori ga mrze zbog ovog jednog trika', 'saznajte kako zaraditi 5000$ dnevno samo ako...', '    display: flex;\n    font-size: larger;\n    width: 80%;\n    font-family: sans-serif;\n    margin: 0 auto;', 'image2.jpg', 'politik', 0),
(11, '23.06.2023.', 'politicari kradu', 'Tko bi rekao?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in neque a erat tempor auctor. Nam blandit dui lectus, a congue orci venenatis in. Aenean eu dapibus nibh. Duis volutpat ut purus dictum tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vivamus eu orci sit amet erat condimentum lacinia. Quisque scelerisque nisl sit amet nisl facilisis dignissim. Nulla vulputate, ligula a scelerisque commodo, elit sem pulvinar magna, id ullamcorper quam metus ac diam. In ultrices lacinia eros sed scelerisque. Cras vehicula vel odio in sollicitudin. Duis quam elit, feugiat eget eros eu, luctus blandit quam. In diam orci, accumsan id erat non, volutpat dictum nibh. Suspendisse tempor vitae odio ut rhoncus.\n\nCras sed lorem orci. Suspendisse dui risus, viverra sed elit sed, tincidunt dignissim nulla. Proin tempor, lorem faucibus feugiat placerat, purus velit sagittis eros, finibus placerat risus tellus ut magna. Quisque commodo mi et metus euismod pharetra. Mauris mattis, felis eget sagittis ultrices, erat metus viverra nisi, vel elementum nisl dolor at purus. Donec tristique nunc tempor eros iaculis, et lobortis nulla rutrum. Aliquam rhoncus neque non posuere iaculis. Proin in ante porttitor, eleifend magna et, dapibus arcu. Cras vel congue nisl. Pellentesque cursus lacinia lectus, sed rutrum purus. Fusce tristique ornare hendrerit. Integer faucibus tempus nisi, non varius odio ultrices laoreet.\n\nNam efficitur nunc non velit pharetra, a volutpat ante molestie. Donec eget porttitor libero, et porttitor mauris. Praesent eget varius est. Pellentesque suscipit quam quis varius convallis. Morbi tincidunt mauris sit amet consectetur blandit. Duis nec arcu ut nisl sodales ultrices eget nec urna. Quisque ullamcorper massa aliquet leo malesuada dictum vel quis metus.\n\nSed eu magna neque. Etiam sed bibendum ante. Mauris luctus urna ut ipsum suscipit sagittis. Sed porta dolor tempus, fringilla arcu a, sollicitudin neque. Proin vitae neque ac velit venenatis fringilla. Sed facilisis sit amet metus ac pretium. Nulla porttitor facilisis dui, eu dictum felis vulputate id. Morbi varius odio augue, et efficitur enim aliquet quis.\n\nInteger commodo aliquam tellus id volutpat. Proin hendrerit elementum tempus. Etiam libero quam, laoreet a sodales non, ultrices in tortor. Morbi vel sem quis sem dignissim bibendum. Praesent congue feugiat dolor sit amet vestibulum. Phasellus gravida dignissim odio, at tempor ligula tempus vel. Praesent gravida, erat eu facilisis mollis, nibh tortor facilisis lacus, non malesuada ex augue posuere nisi. Etiam consequat, odio eu bibendum porta, risus nulla bibendum velit, tempor aliquam leo nulla sit amet neque. Nullam in condimentum tellus, non convallis mauris. Morbi eleifend eu ipsum at malesuada. Donec a mauris interdum quam tincidunt commodo sed ut est. Mauris sodales justo eget pulvinar imperdiet. Praesent sit amet facilisis nunc.', 'image1.jpg', 'politik', 0),
(16, '23.06.2023.', 'politika', 'poliotika je jako zabavna v2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at tempor. Pretium fusce id velit ut tortor. Nam at lectus urna duis convallis convallis tellus id. Velit egestas dui id ornare. Adipiscing elit pellentesque habitant morbi tristique senectus et netus. Id diam maecenas ultricies mi eget mauris pharetra. Nunc congue nisi vitae suscipit tellus mauris a. Faucibus purus in massa tempor nec. Nunc sed blandit libero volutpat sed. Quam lacus suspendisse faucibus interdum posuere lorem. Felis eget nunc lobortis mattis aliquam faucibus. Duis ultricies lacus sed turpis tincidunt id aliquet risus. Tempus urna et pharetra pharetra massa massa ultricies mi quis. Id aliquet risus feugiat in ante metus dictum at tempor. Velit laoreet id donec ultrices tincidunt arcu non sodales neque. Laoreet id donec ultrices tincidunt arcu non sodales neque sodales.', 'image3.jpg', 'politik', 0),
(25, '25.06.2023.', 'trebam jos jedan sport', 'kratki sadrzaj iliti podnaslov', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'image4.jpg', 'sport', 1),
(26, '25.06.2023.', 'trebam jos jedan sport', 'kratki sadrzaj iliti podnaslov', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'image4.jpg', 'sport', 0),
(27, '25.06.2023.', 'jos par za prikaz', 'kratki sadrzaj iliti podnaslov', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'image4.jpg', 'sport', 0),
(28, '25.06.2023.', 'jos par za prikaz', 'kratki sadrzaj iliti podnaslov', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'image4.jpg', 'sport', 1),
(29, '25.06.2023.', 'jos par za prikaz', 'kratki sadrzaj iliti podnaslov', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'image4.jpg', 'sport', 1),
(30, '25.06.2023.', 'jos par za prikaz', 'kratki sadrzaj iliti podnaslov', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'image4.jpg', 'sport', 1),
(31, '25.06.2023.', 'jos par za prikaz', 'kratki sadrzaj iliti podnaslov', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'image4.jpg', 'sport', 1),
(32, '25.06.2023.', 'jos par za prikaze', 'kratki sadrzaj iliti podnaslovi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'image4.jpg', 'sport', 0),
(33, '25.06.2023.', 'jos par za prikaze', 'kratki sadrzaj iliti podnaslovi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'image4.jpg', 'sport', 0),
(34, '25.06.2023.', 'jos par za prikaze', 'kratki sadrzaj iliti podnaslovi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'image4.jpg', 'sport', 0),
(36, '25.06.2023.', 'par  komada za politiku', 'kratki sadrzaj', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'image3.jpg', 'politik', 0),
(37, '25.06.2023.', 'par  komada za politiku', 'kratki sadrzaj', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'image3.jpg', 'politik', 0),
(38, '25.06.2023.', 'par  komada za politiku', 'kratki sadrzaj', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'image3.jpg', 'politik', 0),
(39, '25.06.2023.', 'par  komada za politiku', 'kratki sadrzaj', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'image3.jpg', 'politik', 0),
(40, '25.06.2023.', 'malo da imam razlike u sportu', 'nova slika i to', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'image5.jpg', 'sport', 0),
(41, '25.06.2023.', 'malo da imam razlike u sportu', 'nova slika i to', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'image5.jpg', 'sport', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `privilegije` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `password`, `privilegije`) VALUES
('admin', '$2y$10$2.AlPYWdcQ7kaHU2V0s/DuE2S/DT47pN4p7mZvPlBIpeuDM0UtOtu', 1),
('user', '$2y$10$aThjijH7TGEx121ydIHJZuiPwA72pGqO4Vn50gGhzTMiBLQl0fuHu', 0),
('test', '$2y$10$9RLQN378pUPZIUf3DQTtY.4DB7GNqZRpkB89c393cF9pNzWOzaKqy', 0),
('asd', '$2y$10$w.pw73lPMGB8c5WqNkCoUuBuB.tnnGGyPXT/iqRu2X56sE9wSc512', 0),
('varvaer', '$2y$10$Udfnuf7ySsRTx9yogW902.9U1DVNE2c48u9NHhmXt3FZjwfwJwWhe', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
