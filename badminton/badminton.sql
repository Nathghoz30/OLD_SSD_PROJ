-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 13 Mars 2020 à 14:47
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET
  time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `badminton`
--
-- --------------------------------------------------------
--
-- Structure de la table `adherent`
--
CREATE TABLE
  `client` (
    `id` int (11) NOT NULL,
    `nom` char(15) NOT NULL,
    `prenom` char(15) NOT NULL,
    `adresse` varchar(30) NOT NULL,
    `ville` char(15) NOT NULL,
    `cp` int (11) NOT NULL,
    `email` varchar(15) NOT NULL,
    `numero` int (10) NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Contenu de la table `adherent`
--
INSERT INTO
  `client` (
    `id`,
    `nom`,
    `prenom`,
    `adresse`,
    `ville`,
    `cp`,
    `email`,
    `numero`
  )
VALUES
  (
    1,
    'Ludovic',
    'Anna',
    'rue de paris',
    'paris',
    75010,
    'test@tes.fr',
    '0675984576'
  ),
  (
    2,
    'Dupond',
    'Claude',
    'rue de paris',
    'paris',
    75015,
    'test2@test.fr',
    '0795988576'
  );

--
-- Index pour les tables exportées
--
--
-- Index pour la table `adherent`
--
ALTER TABLE `client` ADD PRIMARY KEY (`id`);
--
--
-- AUTO_INCREMENT pour les tables exportées
--
--
-- AUTO_INCREMENT pour la table `adherent`
--
ALTER TABLE `CLIENT` MODIFY `ID` int (11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 9;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;