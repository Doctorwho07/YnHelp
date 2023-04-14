-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 15 avr. 2023 à 00:23
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ynhelp`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `art_id` int(11) NOT NULL,
  `titre` text NOT NULL,
  `resume` text NOT NULL,
  `description` text NOT NULL,
  `id_organization_type` int(11) NOT NULL,
  `source` text NOT NULL,
  `picture_name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`art_id`, `titre`, `resume`, `description`, `id_organization_type`, `source`, `picture_name`) VALUES
(1, 'APL ET MOBILI-JEUNE', 'L\'APL peut aider les étudiants à alléger leur loyer et à accéder à un meilleur logement.\r\nJusqu\'à 100 euros par mois sont disponibles et la demande doit être faite sur Action Logement dans les 6 mois suivant le début de la formation.', 'Si vous cherchez un logement, vous pouvez, comme tous les étudiants bénéficier de l\'APL. C\'est\r\nune aide essentielle versée tous les 5 du mois aux locataires. Elle vous permets d\'alléger votre loyer\r\net d\'accéder plus facilement à un meilleur logement.\r\n\r\nL’aide mobili-jeune peut également prendre en charge une partie de votre loyer pendant toute la durée de votre formation. Pour l’obtenir, il faut avoir moins de 30 ans, percevoir des revenus inférieurs ou égaux au SMIC mensuel brut (1.603,12 euros) et être dans une entreprise d’au moins 20 salariés. L’aide mobili-jeune doit être demandée au plus tard six mois après le début de votre formation, sur la plateforme Action Logement. Elle peut vous apporter une aide à hauteur de 100 euros par mois.\r\n\r\n', 1, 'https://www.letudiant.fr/etudes/alternance/alternance-quelles-aides-financieres-peut-on-obtenir.html', NULL),
(2, 'CARTE SNCF GRATUITE ILLICO SOLIDAIRE', 'Des aides pour les alternants sont disponibles dans la plupart des régions en France.', 'La plupart des régions en France propose des aides pour les alternants. Elles concernent majoritairement la mobilité, mais peuvent également porter sur le remboursement de certains équipements nécessaires pour votre formation. Par exemple en Auvergne-Rhône-Alpes la carte SNCF gratuite Illico solidaire accorde une remise de 75% sur tous les billets de train en seconde classe : elle est réservée aux personnes en recherche d\'emploi ou en contrat aidé. Bien pratique pour aller à moindres frais à vos entretiens d\'embauche. En Ile-de-France, la région accorde aux apprentis une aide de 115 à 375 euros selon le niveau d\'études pour faire face à vos différents frais : cette aide régionale à l\'apprentissage (ARA) permet de réduire votre facture de fournitures scolaires, transports, hébergement.', 1, 'https://www.letudiant.fr/etudes/alternance/alternance-quelles-aides-financieres-peut-on-obtenir.html', 'carte_illico_solidaire.png'),
(3, 'AIDE DE 500 € POUR PASSER LE PERMIS', 'Les apprentis peuvent bénéficier d\'une aide de 500 euros pour passer leur permis de conduire. ', 'Si vous êtes en apprentissage, vous pouvez obtenir une aide de 500 euros pour passer votre permis de conduire. Mais pour en bénéficier, il faut remplir certaines conditions :\r\n\r\nÊtre sous contrat d’apprentissage (quelle que soit l’année) ;\r\nAvoir au moins 18 ans ;\r\nPréparer le permis de conduire B (que ce soit le code de la route ou la conduite).\r\nSi c’est le cas, vous pouvez vous tourner vers votre CFA (centre de formation d’apprentis) qui vous informera de la démarche à suivre et du dossier à transmettre. Une fois la demande validée, le CFA vous versera les 500 euros.', 1, 'conduirehttps://www.letudiant.fr/etudes/alternance/alternance-quelles-aides-financieres-peut-on-obtenir.html', 'aidepermis.png'),
(5, 'LA CARTE ETUDIANT DES METIERS POUR TOUS LES ETUDIANTS', 'Réduction avec carte étudiante', 'Cette carte offre le statut d’étudiant à tous les alternants ayant moins de 26 ans. Elle est valable durant toute la durée du contrat d’apprentissage ou de professionnalisation.\r\n\r\nElle permet donc d’accéder aux restaurants, aux logements universitaires, et de bénéficier de toutes les réductions étudiantes, que ce soit dans les transports, dans des activités sportives, de loisirs…', 1, 'https://www.letudiant.fr/etudes/alternance/alternance-quelles-aides-financieres-peut-on-obtenir.html', 'carte-etudiant-des-metiers.jpg'),
(6, 'AVANTAGE PRIME D’ACTIVITE', 'La prime d\'activité est une aide financière mensuelle destinée à compléter les revenus des travailleurs modestes.', 'Vous pouvez comme apprenti obtenir la prime d’activité si vous avez plus de 18 ans et que votre salaire mensuel est supérieur à 982,48 euros net. Elle est versée tous les mois en fonction de votre situation et des ressources perçues au cours des trois derniers mois. La demande se fait via un téléservice ou auprès de la CAF ou de la MSA.', 1, 'https://www.letudiant.fr/etudes/alternance/alternance-quelles-aides-financieres-peut-on-obtenir.html', 'Logo-prime-d_activite_grand.png'),
(7, 'LES AVANTAGES DE L’ENTREPRISE', 'Les alternants peuvent bénéficier des mêmes avantages que les salariés en CE', 'Si vous êtes en alternance dans une entreprise ayant un CE (comité d’entreprise), vous pouvez bénéficier des mêmes avantages que les autres salariés (tickets restaurant, chèques cadeaux et vacances, carte de transport…). Rendez-vous auprès de ce comité pour obtenir ces aides.', 1, 'https://www.letudiant.fr/etudes/alternance/alternance-quelles-aides-financieres-peut-on-obtenir.html', NULL),
(8, 'LA GARANTIE VISALE', 'Pour obtenir un garant pour votre location, vous pouvez demander à Action Logement de se porter garant avec la garantie Visale.', 'Si vous êtes en recherche d’un garant, vous pouvez demander à Action Logement d’être votre caution. Elle a mis en place la garantie Visale, une caution, totalement gratuite, qui garantit le paiement du loyer et des charges locatives à votre propriétaire en cas d’impayés. La demande se fait en ligne sur le site visale.fr, en passant par  votre espace visale.', 1, 'https://www.visale.fr/', 'caution-visale.png'),
(9, 'BOURSE', 'La bourse étudiante est une aide financière destinée aux étudiants pour les aider à financer leurs études et leur vie quotidienne.', 'Si vous remplissez ces conditions :\r\nVous êtes inscrit dans une formation initiale en France\r\nVous êtes inscrit dans une formation, publique ou privée, qui donne droit à cette bourse (renseignez-vous auprès l\'établissement)\r\nVous suivez un cursus à temps plein (pas en alternance, par exemple)', 1, 'https://www.campusfrance.org/fr/bourses-etudiants-etrangers', 'croussbourse.jpg'),
(10, 'Une aide ponctuelle d’urgence', 'Une aide ponctuelle d\'urgence est une aide financière destinée à faire face à des situations d\'urgence ou des difficultés ponctuelles.', 'https://www.etudiant.gouv.fr/fr/solliciter-une-aide-d-urgence-361', 1, 'Cette aide vise à ce que vous puissiez poursuivre vos études malgré à une situation grave se présentant au cours de l\'année universitaire. Votre situation sera attestée par une évaluation sociale.', NULL),
(11, 'HOHOPFOOD ', 'Encouragez la lutte anti-gaspillage en donnant les invendus/surplus alimentaires aux personnes en précarité.', 'Participer à la lutte anti-gaspi des commerces et des particuliers pour qu\'ils donnent leurs invendus/surplus, dans leur quartier, à ceux qui sont en précarité alimentaire. Localement, HopHopFood fait vivre des partenariats avec des associations de lutte contre la précarité.', 2, 'https://www.hophopfood.org/', 'hophopfood.jpeg'),
(12, 'Aide en produits alimentaire ou hygiène', 'Le Collectif de Solidarité Étudiante a apporté une aide en nature sous forme de produits alimentaires et d\'hygiène', 'L’aide que le Collectif de Solidarité Étudiante a apporté est une aide en nature, sous la forme de produits alimentaires et de produits d’hygiène. Ils étaient livrés par des bénévoles au pied des résidences universitaires et des logements étudiants, après une prise de rendez-vous avec les étudiants bénéficiaires.', 2, 'https://www.cselyon.org/l-association ', 'logo_alimentarite.png');

-- --------------------------------------------------------

--
-- Structure de la table `organization_type`
--

CREATE TABLE `organization_type` (
  `org_id` int(11) NOT NULL,
  `label` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `organization_type`
--

INSERT INTO `organization_type` (`org_id`, `label`) VALUES
(1, 'aides'),
(2, 'associations');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`art_id`),
  ADD KEY `id_organization_type` (`id_organization_type`) USING BTREE;

--
-- Index pour la table `organization_type`
--
ALTER TABLE `organization_type`
  ADD PRIMARY KEY (`org_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `organization_type`
--
ALTER TABLE `organization_type`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_organization_type`) REFERENCES `organization_type` (`org_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
