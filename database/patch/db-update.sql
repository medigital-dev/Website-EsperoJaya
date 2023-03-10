-- database update v1.5 to 1.5.1 update 2023-03-09
INSERT INTO `db_version` (`id`, `version`, `release_date`) VALUES (NULL, '1.5.1', '2023-03-09');
ALTER TABLE `file` ADD `size` INT NULL DEFAULT NULL AFTER `filename`;
ALTER TABLE `file` CHANGE `size` `size` VARCHAR(64) NULL DEFAULT NULL;