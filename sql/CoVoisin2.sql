-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 04 Avril 2018 à 08:55
-- Version du serveur :  5.7.21-0ubuntu0.16.04.1
-- Version de PHP :  7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `CoVoisin2`
--

-- --------------------------------------------------------

--
-- Structure de la table `OfferResponses`
--

CREATE TABLE `OfferResponses` (
  `id` int(11) NOT NULL,
  `offerId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL,
  `descriptionStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Offers`
--

CREATE TABLE `Offers` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `description` text NOT NULL,
  `userId` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `pointsNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Requests`
--

CREATE TABLE `Requests` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `description` text NOT NULL,
  `userId` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `pointsNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `RequestsResponses`
--

CREATE TABLE `RequestsResponses` (
  `id` int(11) NOT NULL,
  `requestId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL,
  `descriptionStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `pointsNumber` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `OfferResponses`
--
ALTER TABLE `OfferResponses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offerId` (`offerId`),
  ADD KEY `userId` (`userId`);

--
-- Index pour la table `Offers`
--
ALTER TABLE `Offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Index pour la table `Requests`
--
ALTER TABLE `Requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Index pour la table `RequestsResponses`
--
ALTER TABLE `RequestsResponses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requestId` (`requestId`),
  ADD KEY `userId` (`userId`);

--
-- Index pour la table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID` (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `OfferResponses`
--
ALTER TABLE `OfferResponses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Offers`
--
ALTER TABLE `Offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Requests`
--
ALTER TABLE `Requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `RequestsResponses`
--
ALTER TABLE `RequestsResponses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `OfferResponses`
--
ALTER TABLE `OfferResponses`
  ADD CONSTRAINT `fk_offerId` FOREIGN KEY (`offerId`) REFERENCES `Offers` (`id`),
  ADD CONSTRAINT `fk_userIdOfferResponse` FOREIGN KEY (`userId`) REFERENCES `Users` (`id`);

--
-- Contraintes pour la table `Offers`
--
ALTER TABLE `Offers`
  ADD CONSTRAINT `fk_userIdOffer` FOREIGN KEY (`userId`) REFERENCES `Users` (`id`);

--
-- Contraintes pour la table `Requests`
--
ALTER TABLE `Requests`
  ADD CONSTRAINT `fk_userIdRequests` FOREIGN KEY (`userId`) REFERENCES `Users` (`id`);

--
-- Contraintes pour la table `RequestsResponses`
--
ALTER TABLE `RequestsResponses`
  ADD CONSTRAINT `fk_requestId` FOREIGN KEY (`requestId`) REFERENCES `Requests` (`id`),
  ADD CONSTRAINT `fk_userIdRequest` FOREIGN KEY (`userId`) REFERENCES `Users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
