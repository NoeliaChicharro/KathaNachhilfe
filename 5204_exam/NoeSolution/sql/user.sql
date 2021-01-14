CREATE SCHEMA `ExamUser` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;

CREATE TABLE `user` (
`ID` BIGINT NOT NULL AUTO_INCREMENT,
`username` VARCHAR (50) NOT NULL,
`password` VARCHAR (255) NOT NULL,
PRIMARY KEY (`ID`)
);

INSERT INTO `user` (`username`, `password`)
VALUES ("admin", "password123");
