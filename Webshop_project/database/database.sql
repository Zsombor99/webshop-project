DROP DATABASE IF EXISTS webshop;
CREATE DATABASE webshop;
USE webshop;
CREATE TABLE `User`(
    `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `FirstName` VARCHAR(30) NOT NULL,
    `LastName` VARCHAR(70) NOT NULL,
    `Address` VARCHAR(255) NOT NULL,
    `EmailAddress` VARCHAR(70) NOT NULL,
    `PhoneNumber` VARCHAR(30) NOT NULL,
    `UserLevel` INT NOT NULL DEFAULT 0,
    `PasswordHash` TEXT NOT NULL,
    `RegDate` INT(11) NOT NULL,
    `LastLogin` INT(11)
);
CREATE TABLE `Category`(
    `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `Name` VARCHAR(255) NOT NULL
);
CREATE TABLE `Product`(
    `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `Name` VARCHAR(255) NOT NULL,
    `InStock` BOOLEAN NOT NULL,
    `Description` TEXT NOT NULL,
    `Price` INT NOT NULL,
    `CategoryId` INT NOT NULL,
    FOREIGN KEY(`CategoryId`) REFERENCES `Category`(Id)
);
CREATE TABLE `Cart`(
    `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `Quantity` INT NOT NULL,
    `TimeLeft` INT NOT NULL,
    `ProductId` INT NOT NULL,
    FOREIGN KEY(`ProductId`) REFERENCES `Product`(Id)
);
CREATE TABLE `Order`(
    `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `OrderStatus` VARCHAR(30) NOT NULL,
    `PaymentStatus` VARCHAR(30) NOT NULL,
    `PaymentType` VARCHAR(30) NOT NULL,
    `OrderDate` INT(11) NOT NULL,
    `UserId` INT NOT NULL,
    FOREIGN KEY(`UserId`) REFERENCES `User`(Id)
);
CREATE TABLE `OrderItem`(
    `Id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `Quantity` INT NOT NULL,
    `ProductId` INT NOT NULL,
    `OrderId` INT NOT NULL,
    FOREIGN KEY(`ProductId`) REFERENCES `Product`(Id),
    FOREIGN KEY(`OrderId`) REFERENCES `Order`(Id)
);
/* ADMIN SEED user: admin@webshop.hu password: password (password is hashed with php password hash bcrypt option) */
/* User levels: 0- normal(default), 1- admin*/
INSERT INTO `User`
(`Id`, `FirstName`, `LastName`, `Address`, `EmailAddress`,
`PhoneNumber`, `UserLevel`, `PasswordHash`, `RegDate`)
VALUES (1, 'Admin', 'Admin', '3300 Eger Érsek u. 9.',
'admin@webshop.hu', '+36209988998', 1, '$2y$10$4w2ew8qgkv5IBo3hyXck4ek75HdmqymNtCI5GefCFX68.LOiEyDmi', (SELECT UNIX_TIMESTAMP()));

/* Basic categories */
INSERT INTO `Category` (`Name`) VALUES ('Fruits');
INSERT INTO `Category` (`Name`) VALUES ('Vegetables');
INSERT INTO `Category` (`Name`) VALUES ('Furniture');

/* Some template product */

INSERT INTO `Product` (`Name`, `InStock`, `Description`, `Price`, `CategoryId`)
VALUES ('Apple', TRUE, 'Apple is fine', 300, 1);

INSERT INTO `Product` (`Name`, `InStock`, `Description`, `Price`, `CategoryId`)
VALUES ('Tomato', TRUE, 'Tomato is red', 700, 2);

INSERT INTO `Product` (`Name`, `InStock`, `Description`, `Price`, `CategoryId`)
VALUES ('Armchair', FALSE, 'Ergonomic low-budget gaming chair.', 25000, 3);