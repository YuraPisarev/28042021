USE skillup_db;

CREATE TABLE `users`
(
    `id` int(4) PRIMARY KEY AUTO_INCREMENT,
    `name` varchar(100) NOT NULL UNIQUE,
    `berthday` DATE NULL,
    `crated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP
);

ALTER TABLE `users` RENAME COLUMN `berthday` TO `birthday`;

DESCRIBE `users`;

INSERT INTO `users` (`name`, `birthday`) VALUES ('Yurii', '1983-12-25');

