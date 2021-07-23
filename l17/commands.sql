USE skillup_db;

CREATE TABLE `users`
(
    `id`         int(4) PRIMARY KEY AUTO_INCREMENT,
    `name`       varchar(100) NOT NULL UNIQUE,
    `berthday`   DATE         NULL,
    `created_at` TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP    NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

ALTER TABLE `users` RENAME COLUMN `berthday` TO `birthday`;

DESCRIBE `users`;

INSERT INTO `users` (`name`, `birthday`) VALUES ('Yura', '1983-12-25');

INSERT INTO `users` (`name`, `birthday`) VALUES ('Olga', '1983-01-01'), ('Taras', '1707-01-12');

SELECT * FROM `users`;