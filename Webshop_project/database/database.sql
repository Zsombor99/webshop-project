DROP DATABASE IF EXISTS `webshop`;
CREATE DATABASE `webshop`;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `user` (
	`userID` INT NOT NULL AUTO_INCREMENT,
	`userName` VARCHAR(255) NOT NULL,
	`password` VARCHAR(255) NOT NULL,
	`email` VARCHAR(255) NOT NULL,
	`authority` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
	`productID` INT NOT NULL AUTO_INCREMENT,
	`productName` VARCHAR(255) NOT NULL,
	`categoryID` INT NOT NULL,
	`price` INT NOT NULL,
	`inStock` INT NOT NULL,
	PRIMARY KEY (`productid`)
);

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
	`categoryID` INT NOT NULL AUTO_INCREMENT,
	`categoryName` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`categoryId`)
);

DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
	`orderID` INT NOT NULL AUTO_INCREMENT,
	`userID` INT(255) NOT NULL,
	`productID` INT NOT NULL,
	`productAmmount` INT NOT NULL,
	`date` DATETIME NOT NULL,
	`deliveryDate` DATETIME,
	PRIMARY KEY (`orderid`)
);


INSERT INTO `users` (`username`, `email`, `password`, `authority`) VALUES
    ('Alice', 'alice@gmail.com', 'alma', 'admin'),
    ('Bob', 'bob@gmail.com', 'korte', 'buyer')
;
INSERT INTO `product` (`productName`, `categoryID`, `price`, `inStock`) VALUES
    ('Apple', '1', '60', '100'),
    ('Chair', '2', '8000', '10')
;
INSERT INTO `category` (`categoryName`) VALUES
    ('Fruit'),
    ('Furniture')
;
INSERT INTO `order` (`userID`,`productID`,`productAmmount`,`date`) VALUES
    ('1', '1', '5', '2020-01-01 10:10:10'),
    ('2', '2', '1', '2020-03-05 10:10:10')
;

