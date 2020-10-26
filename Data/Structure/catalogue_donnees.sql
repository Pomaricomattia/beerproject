-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  jeu. 15 oct. 2020 à 11:31
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `catalogue`
--

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`) VALUES
(1, 'Web Design'),
(2, 'Web Développement'),
(3, 'Web Marketing');

--
-- Déchargement des données de la table `categories_has_produits`
--

INSERT INTO `categories_has_produits` (`categories_id`, `produits_id`) VALUES
(1, 1),
(1, 2),
(1, 4),
(1, 5),
(1, 6),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 7),
(3, 1),
(3, 2),
(3, 3);

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `duree`, `prix`, `description`, `top`) VALUES
(1, 'HTML5 base', 3, '30.00', 'Programme des cours : blabla', 0),
(2, 'HTML5 intermédiaire', 4, '60.00', 'Programme...', 0),
(3, 'HTML5 avancé', 3, '60.00', 'Programme...', 0),
(4, 'CSS3 base', 3, '30.00', 'Lorem Ipsum', 0),
(5, 'CSS3 intermédiaire', 4, '60.00', 'hsfhfghsfhsfhsrhfh', 0),
(6, 'CSS3 avancé', 3, '60.00', 'sghetdjtrjhrsyuszyu', 0),
(7, 'JS Base', 3, '30.00', 'hrtjhetyuetyurtyeu', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
