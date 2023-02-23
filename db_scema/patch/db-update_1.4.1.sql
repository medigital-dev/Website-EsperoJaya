-- Database update script
-- v1.4 to 1.4.1
-- Created at 2023-02-20 09:28 WIB
-- c 2023 - medigital.dev

ALTER TABLE 'db_version' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_bin;
ALTER TABLE `file` ADD `type` VARCHAR(128) NULL AFTER `filename`;
ALTER TABLE `post_image` RENAME TO `post_file`;

INSERT INTO `db_version` (`id`, `version`, `created_at`) VALUES (NULL, '1.4.1', CURRENT_TIMESTAMP);