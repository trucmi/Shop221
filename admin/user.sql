-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 27 Juin 2017 à 08:55
-- Version du serveur :  5.6.35
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `rmspa938_atom`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `pseudo` varchar(40) NOT NULL,
  `mdp` text NOT NULL,
  `email` varchar(150) NOT NULL,
  `statut` int(11) NOT NULL DEFAULT '0',
  `date_inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `adresse_postale` text NOT NULL,
  `lien_instagram` varchar(200) NOT NULL,
  `lien_facebook` varchar(200) NOT NULL,
  `num` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `pseudo`, `mdp`, `email`, `statut`, `date_inscription`, `adresse_postale`, `lien_instagram`, `lien_facebook`, `num`) VALUES
(1, 'camille', '$2y$10$PSreIMYiLWI3qD94zA4G7.o.3AbcO6XksDV6B5wIZsKAdPgKLRK7m', 'tropicaltattoopiercing@hotmail.com', 0, '2017-06-13 09:25:47', '221 avenue gabriel pari, 91700 Sainte-Geneviève-des-Bois', 'http://www.instagram.com/shop_221_tatoo_piercing', 'https://www.facebook.com/Shop-221-Tattoo-Piercing-171117426261182', '01 70 58 27 19');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
