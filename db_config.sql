DROP TABLE IF EXISTS `USERS`;

CREATE TABLE `USERS` (
    `uid` INT NOT NULL AUTO_INCREMENT,
    `firstName` VARCHAR(70) NOT NULL DEFAULT '',
    `lastName` VARCHAR(70) NOT NULL DEFAULT '',
    `login` VARCHAR(70) NOT NULL,
    `password` VARCHAR(70) NOT NULL,
    `dateFirstOn` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `dateLastOn` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`uid`) 
) ENGINE = InnoDB;

DROP TABLE IF EXISTS `CONTACTS`;

CREATE TABLE `CONTACTS` (
    `cid` INT NOT NULL AUTO_INCREMENT,
    `firstName` VARCHAR(70) NOT NULL DEFAULT '',
    `lastName` VARCHAR(70) NOT NULL DEFAULT '',
    `phone` VARCHAR(70) NOT NULL DEFAULT '',
    `email` VARCHAR(70) NOT NULL DEFAULT '',
    `address` VARCHAR(70) NOT NULL DEFAULT '',
    `city` VARCHAR(70) NOT NULL DEFAULT '',
    `state` VARCHAR(2) NOT NULL DEFAULT '',
    `zip` VARCHAR(5) NOT NULL DEFAULT '',
    `dateCreated` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `dateLastUpdated` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`cid`)
) ENGINE = InnoDB;