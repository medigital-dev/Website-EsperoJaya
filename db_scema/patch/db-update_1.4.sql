-- Database update script
-- v1.3.2 to 1.4
-- Created at 2023-02-20 08:53
-- c 2023 - medigital.dev

ALTER TABLE image RENAME TO file;
ALTER TABLE `file` CHANGE `image_id` `file_id` VARCHAR(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL;
ALTER TABLE `file` DROP INDEX `image_id`;
ALTER TABLE `file` ADD UNIQUE(`file_id`);
ALTER TABLE `file` CHANGE `alt` `alt` VARCHAR(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL;
ALTER TABLE `file` ADD `url` VARCHAR(128) NOT NULL AFTER `title`;
ALTER TABLE `post_image` CHANGE `filename` `file_id` VARCHAR(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL;
CREATE TABLE `db_version` (`id` INT AUTO_INCREMENT , `version` VARCHAR(64) NOT NULL , `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
INSERT INTO `db_version` (`id`, `version`, `created_at`) VALUES (NULL, '1.4', CURRENT_TIMESTAMP);