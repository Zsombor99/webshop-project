DROP DATABASE IF EXISTS `webshop`;
CREATE DATABASE `webshop`;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
    `id` int AUTO_INCREMENT,
    `name` VARCHAR(255),
    `email` VARCHAR(255),
    `password` VARCHAR(255),
    PRIMARY KEY (`id`)
);

INSERT INTO `users` (`username`, `email`, `password`) VALUES
    ('Alice', 'alice@gmail.com', 'alma'),
    ('Bob', 'bob@gmail.com', 'korte')
;