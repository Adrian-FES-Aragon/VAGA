
DROP SCHEMA IF EXISTS `php_test`;
CREATE SCHEMA IF NOT EXISTS `php_test` DEFAULT CHARACTER SET utf8 collate utf8_spanish2_ci;
USE `php_test`;

CREATE TABLE `usuarios` (
`id` int(99) NOT NULL,
`user` varchar(30) NOT NULL,
`nombre` varchar(300) NOT NULL,
`correo` varchar(300) NOT NULL,
`password` varchar(450) NOT NULL,
`date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
`perm` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuarios` (`id`,`user`, `nombre`, `correo`, `password`,`date`,`perm`) VALUES
(1, 'adrian','Tomas Adrian Garcia Chavez', 'adrian@hotmail.com', '123456','2020-5-21 21:30:00',1);


ALTER TABLE `usuarios`
    ADD PRIMARY KEY (`id`);

ALTER TABLE `usuarios`
MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
