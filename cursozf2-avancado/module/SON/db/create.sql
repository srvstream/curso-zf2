CREATE TABLE IF NOT EXISTS `tasks` (`id` int(11) NOT NULL AUTO_INCREMENT, `nome` varchar(255) NOT NULL,`descricao` text NOT NULL,`status` tinyint(1) NOT NULL,`created_at` datetime NOT NULL,`updated_at` datetime NOT NULL, PRIMARY KEY (`id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;