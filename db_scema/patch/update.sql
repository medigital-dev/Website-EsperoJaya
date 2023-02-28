-- database update v1.4.2 to v1.4.3
ALTER TABLE `post` CHANGE `status` `status` BOOLEAN NOT NULL;


INSERT INTO `cms_version` (`id`, `version`, `release_date`) VALUES (NULL, '1.2.0', '2023-02-28');
INSERT INTO `db_version` (`id`, `version`, `release_date`) VALUES (NULL, '1.4.3', '2023-02-24');