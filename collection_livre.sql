create database collection_livre1;
use collection_livre1;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE TABLE `admins` (
  `ID` varchar(20) DEFAULT NULL,
  `NOM_ADMIN` varchar(20) DEFAULT NULL,
  `MDP` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `categorie` (
  `ID` varchar(20) NOT NULL,
  `CATEGORIE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `categorie` (`ID`, `CATEGORIE`) VALUES
('Categorie1', 'Art, Architecture et Photographie'),
('Categorie2', 'Bibles et christianisme'),
('Categorie3', 'Livres de cuisine, nourriture et vin'),
('Categorie4', 'Romans graphiques et bandes dessinées');

CREATE TABLE `image` (
  `ID_LIVRE` varchar(20) DEFAULT NULL,
  `NAME_IMAGE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `image` (`ID_LIVRE`, `NAME_IMAGE`) VALUES
('Livre1', 'Coco'),
('Livre2', 'chr'),
('Livre4', 'food'),
('Livre5', 'mister');

CREATE TABLE `livre` (
  `ID` varchar(20) NOT NULL,
  `NAME_BOOK` varchar(150) DEFAULT NULL,
  `DATE_ENTER` date DEFAULT NULL,
  `DESCRIPTIONS` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `livre` (`ID`, `NAME_BOOK`, `DATE_ENTER`, `DESCRIPTIONS`) VALUES
('Livre1', 'Coco Chanel The Legend and the Life', '2019-05-02', 'En jetant un nouvel éclairage sur ses relations passionnées et turbulentes, ce portrait magnifiquement construit offre un regard nouveau et pénétrant sur la façon dont Coco Chanel a réussi à devenir sa plus puissante création. Un récit faisant autori'),
('Livre2', 'Crushing God Turns Pressure into Power', '2019-04-29', 'God has blessed each one of us with unique gifts and talents that are designed to grow and develop for our benefit. These qualities are planted like seeds within us.'),
('Livre4', 'Skinnytaste One and Done 140 No-Fus', '2019-04-30', 'For your Instant Pot®, electric pressure cooker, air fryer, slow cooker, multi-cooker, Dutch oven, sheet pan, skillet, and more--140 healthy and delicious recipes that are big on flavor and low on calories and cleanup.'),
('Livre5', 'The Mister', '2019-05-02', ' The Mister is a roller-coaster ride of danger and desire that leaves the reader breathless to the very last page.');

CREATE TABLE `livre_categorie` (
  `id_livre` varchar(20) DEFAULT NULL,
  `id_categorie` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `livre_categorie` (`id_livre`, `id_categorie`) VALUES
('Livre1', 'Categorie1'),
('Livre2', 'Categorie2'),
('Livre4', 'Categorie3'),
('Livre5', 'Categorie4');

ALTER TABLE `categorie`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `image`
  ADD KEY `ID_LIVRE` (`ID_LIVRE`);

ALTER TABLE `livre`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `livre_categorie`
  ADD KEY `id_livre` (`id_livre`),
  ADD KEY `id_categorie` (`id_categorie`);
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`ID_LIVRE`) REFERENCES `livre` (`ID`);

ALTER TABLE `livre_categorie`
  ADD CONSTRAINT `livre_categorie_ibfk_1` FOREIGN KEY (`id_livre`) REFERENCES `livre` (`ID`),
  ADD CONSTRAINT `livre_categorie_ibfk_2` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
