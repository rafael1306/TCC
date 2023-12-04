CREATE TABLE IF NOT EXISTS `atividade` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(64) NOT NULL,
  `descricao` varchar(256) DEFAULT NULL,
  `prazo` datetime DEFAULT NULL,
  `nivel` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(64) NOT NULL,
  `data_nascimento` datetime DEFAULT NULL,
  `senha` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `usuario` (`id`, `nome`, `data_nascimento`, `senha`) VALUES
(1, 'Teste 01', '2023-10-07 08:34:00', 'as596d1a65s1d');

alter table usuario add column xp bigint after nome;
alter table atividade add column `status` tinyint not null default 1;