CREATE TABLE `database`.`new_table` (
  `key` INT(11) NOT NULL AUTO_INCREMENT,
  `value` VARCHAR(1) NOT NULL,
  PRIMARY KEY (`key`),
  UNIQUE INDEX `key_UNIQUE` (`key` ASC));
