DROP DATABASE IF EXISTS `webshop`;
CREATE DATABASE `webshop`;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
	`userID` INT NOT NULL AUTO_INCREMENT,
	`userName` VARCHAR(255) NOT NULL,
	`password` VARCHAR(255) NOT NULL,
	`email` VARCHAR(255) NOT NULL,
	`authority` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`userID`)
);

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
	`productID` INT NOT NULL AUTO_INCREMENT,
	`productName` VARCHAR(255) NOT NULL,
	`categoryID` INT NOT NULL,
	`price` INT NOT NULL,
	`inStock` INT NOT NULL,
	PRIMARY KEY (`productID`)
);

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
	`categoryID` INT NOT NULL AUTO_INCREMENT,
	`categoryName` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`categoryID`)
);

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
	`orderID` INT NOT NULL AUTO_INCREMENT,
	`userID` INT(255) NOT NULL,
	`productID` INT NOT NULL,
	`productAmmount` INT NOT NULL,
	`date` DATETIME NOT NULL,
	`deliveryDate` DATETIME,
	PRIMARY KEY (`orderID`)
);


INSERT INTO `users` (`username`, `email`, `password`, `authority`) VALUES
    ('Alice', 'alice@gmail.com', 'alma', 'admin'),
    ('Bob', 'bob@gmail.com', 'korte', 'buyer')
;
INSERT INTO `products` (`productName`, `categoryID`, `price`, `inStock`) VALUES
    ('Apple', '1', '60', '100'),
    ('Chair', '2', '8000', '10')
;
INSERT INTO `categories` (`categoryName`) VALUES
    ('Fruit'),
    ('Furniture')
;
INSERT INTO `orders` (`userID`,`productID`,`productAmmount`,`date`) VALUES
    ('1', '1', '5', '2020-01-01 10:10:10'),
    ('2', '2', '1', '2020-03-05 10:10:10')
;

