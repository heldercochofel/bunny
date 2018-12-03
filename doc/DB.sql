-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.24-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.5.0.5359
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando dados para a tabela bunny.profile_category: ~0 rows (aproximadamente)
DELETE FROM `profile_category`;
/*!40000 ALTER TABLE `profile_category` DISABLE KEYS */;
INSERT INTO `profile_category` (`id`, `name`) VALUES
	(1, 'email'),
	(2, 'professionalHeadline'),
	(3, 'location'),
	(4, 'summaryOfBio'),
	(5, 'picture'),
	(6, 'theme'),
	(7, 'phone'),
	(8, 'claimant'),
	(9, 'featureDiscovery'),
	(10, 'canary');
/*!40000 ALTER TABLE `profile_category` ENABLE KEYS */;

-- Copiando dados para a tabela bunny.services_config: ~0 rows (aproximadamente)
DELETE FROM `services_config`;
/*!40000 ALTER TABLE `services_config` DISABLE KEYS */;
INSERT INTO `services_config` (`id`, `SourceName`, `URL`, `active`) VALUES
	(1, 'internal', '', 1),
	(2, 'torrebio', 'https://torre.bio/json', 1),
	(3, 'linkedin', 'https://developer.linkedin.com', 1);
/*!40000 ALTER TABLE `services_config` ENABLE KEYS */;

-- Copiando dados para a tabela bunny.services_log: ~0 rows (aproximadamente)
DELETE FROM `services_log`;
/*!40000 ALTER TABLE `services_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `services_log` ENABLE KEYS */;

-- Copiando dados para a tabela bunny.user: ~0 rows (aproximadamente)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `login`, `password`, `Name`, `created_timestamp`, `active`) VALUES
	(1, 'helder', 'helder', 'Helder', '2018-12-02 17:40:00', 1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Copiando dados para a tabela bunny.user_profile: ~0 rows (aproximadamente)
DELETE FROM `user_profile`;
/*!40000 ALTER TABLE `user_profile` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_profile` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
