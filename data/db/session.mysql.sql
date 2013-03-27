SET FOREIGN_KEY_CHECKS=0;
SET AUTOCOMMIT=0;
START TRANSACTION;

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(32) NOT NULL,
  `name` varchar(32) DEFAULT NULL,
  `data` text DEFAULT NULL,
  `modified` integer DEFAULT NULL,
  `lifetime` integer DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) DEFAULT NULL,
  `pass` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `name`, `pass`) VALUES
(1, 'luigi', 'ccebba93f54d6bf2b17f8350e7c12ec4');

SET FOREIGN_KEY_CHECKS=1;
COMMIT;
