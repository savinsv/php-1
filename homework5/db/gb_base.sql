-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.3.22-MariaDB-1ubuntu1 - Ubuntu 20.04
-- Операционная система:         debian-linux-gnu
-- HeidiSQL Версия:              10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных gb_base
CREATE DATABASE IF NOT EXISTS `gb_base` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `gb_base`;

-- Дамп структуры для таблица gb_base.images
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Счётчик',
  `caption` varchar(50) NOT NULL DEFAULT '0' COMMENT 'Имя картинки',
  `path` varchar(150) NOT NULL DEFAULT '0' COMMENT 'Путь к картинке',
  `size` int(11) NOT NULL DEFAULT 0 COMMENT 'Размер файла картинки',
  `height` int(11) NOT NULL DEFAULT 0 COMMENT 'Высота картинки',
  `width` int(11) NOT NULL DEFAULT 0 COMMENT 'Ширина картинки',
  `description` varchar(300) NOT NULL DEFAULT '0' COMMENT 'Краткое описание картинки',
  `hits` int(11) NOT NULL DEFAULT 0 COMMENT 'количество обращений (Популярность)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Дамп данных таблицы gb_base.images: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
REPLACE INTO `images` (`id`, `caption`, `path`, `size`, `height`, `width`, `description`, `hits`) VALUES
	(1, 'cat-1045782_960_720', './img/cat-1045782_960_720.jpg', 270958, 655, 960, 'Котей крупным планом', 1),
	(2, 'cat-2083492_960_720', './img/cat-2083492_960_720.JPG', 72754, 585, 960, '', 0),
	(3, 'cat-2273598_960_720', './img/cat-2273598_960_720.jpg', 110543, 720, 784, '', 0),
	(4, 'cat-3535404_960_720', './img/cat-3535404_960_720.jpg', 162698, 640, 960, '', 3),
	(5, 'cute-3273789_960_720', './img/cute-3273789_960_720.jpg', 146653, 640, 960, '', 1),
	(6, 'kitty-551554_960_720', './img/kitty-551554_960_720.jpg', 63614, 720, 689, '', 2);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
