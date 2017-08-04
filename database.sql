CREATE SCHEMA `database` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE `database`.`signed` (
  `key` INT(11) NOT NULL AUTO_INCREMENT,
  `value` VARCHAR(1) NOT NULL,
  PRIMARY KEY (`key`),
  UNIQUE INDEX `key_UNIQUE` (`key` ASC));

CREATE TABLE `database`.`unsigned` (
  `key` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `value` VARCHAR(1) NOT NULL,
  PRIMARY KEY (`key`),
  UNIQUE INDEX `key_UNIQUE` (`key` ASC));
