-- database update v1.4.1 to v1.4.2
ALTER TABLE `file` ADD `type` VARCHAR(128) NULL AFTER `filename`;
ALTER TABLE `post_image` RENAME TO `post_file`;
ALTER TABLE `db_version` CHANGE `created_at` `release_date` DATE NOT NULL;
CREATE TABLE `cms_version` (`id` INT NOT NULL AUTO_INCREMENT , `version` VARCHAR(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL , `release_date` DATE NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
CREATE TABLE `web_version` (`id` INT NOT NULL AUTO_INCREMENT , `version` VARCHAR(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL , `release_date` DATE NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;



INSERT INTO `web_version` (`id`, `version`, `release_date`) VALUES (NULL, '1.0.10', '2023-02-24');
INSERT INTO `cms_version` (`id`, `version`, `release_date`) VALUES (NULL, '1.1.0', '2023-02-24');
INSERT INTO `db_version` (`id`, `version`, `release_date`) VALUES (NULL, '1.4.2', '2023-02-24');