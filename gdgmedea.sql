-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 15 août 2022 à 01:12
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gdgmedea`
--

-- --------------------------------------------------------

--
-- Structure de la table `feedback`
--

CREATE TABLE `feedback` (
  `email` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `feeback` text NOT NULL,
  `emotion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `feedback`
--

INSERT INTO `feedback` (`email`, `fullname`, `gender`, `feeback`, `emotion`) VALUES
('hayat733@gmail.com', 'hayat nassmlah', '2', 'msmjdmhmefhzfjzghgfgefhj', 'I am glad'),
('salimbrahim733@gmail.com', 'Brahim Salmi ', '1', 'We did it', 'I am glad');

-- --------------------------------------------------------

--
-- Structure de la table `newslatter`
--

CREATE TABLE `newslatter` (
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `newslatter`
--

INSERT INTO `newslatter` (`email`) VALUES
('brahim@gmail.com'),
('brahim@gmail.com'),
('brahim@gmail.com'),
('brahim@gmail.com'),
('brahim@gmail.com'),
('brahim@gmail.com'),
('brahim@gmail.com'),
('brahim@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `subjectt`
--

CREATE TABLE `subjectt` (
  `name` varchar(11) NOT NULL,
  `email` varchar(11) NOT NULL,
  `subject` varchar(11) NOT NULL,
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `subjectt`
--

INSERT INTO `subjectt` (`name`, `email`, `subject`, `query`) VALUES
('brahim', 'salllll', 'participati', 'yess'),
('brahim', 'salllll', 'participati', 'yess');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
