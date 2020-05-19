
DROP SCHEMA IF EXISTS `php_test`;
CREATE SCHEMA IF NOT EXISTS `php_test` DEFAULT CHARACTER SET utf8 collate utf8_spanish2_ci;
USE `php_test`;

CREATE TABLE `usuarios` (
`id` int(99) NOT NULL,
`nombre` varchar(300) NOT NULL,
`correo` varchar(300) NOT NULL,
`password` varchar(450) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `password`) VALUES
(1, 'adrian', 'adrian@hotmail.com', '123456'),
(2, 'pepe', 'pepe@hotmail.com', '12'),
(3, 'juan', 'juan@hotmail.com', '56'),
(4, 'raul', 'raul@hotmail.com', '234');

ALTER TABLE `usuarios`
ADD PRIMARY KEY (`id`);

ALTER TABLE `usuarios`
MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
