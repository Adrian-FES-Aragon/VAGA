
DROP SCHEMA IF EXISTS `php_test`;
CREATE SCHEMA IF NOT EXISTS `php_test` DEFAULT CHARACTER SET utf8 collate utf8_spanish2_ci;
USE `php_test`;

CREATE TABLE `usuarios` (
    `id` int UNSIGNED NOT NULL PRIMARY KEY auto_increment, 
    `user` varchar(30) NOT NULL,
    `nombre` varchar(300) NOT NULL,
    `correo` varchar(300) NOT NULL,
    `password` varchar(450) NOT NULL,
    `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `perm` int(11) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `bienes` (
  `TieneDueño` boolean NOT NULL,
  `EslapTop` boolean NOT NULL, 
  `id` int UNSIGNED NOT NULL PRIMARY KEY auto_increment,
  `id_dueño` int UNSIGNED NOT NULL,
  KEY `id_dueño` (`id_dueño`),
  CONSTRAINT `ID_DUEÑO` FOREIGN KEY (`id_dueño`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;