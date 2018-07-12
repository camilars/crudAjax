CREATE TABLE IF NOT EXISTS `tutorial` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `sobrenome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;
 
--
-- Extraindo dados da tabela `tutorial`
--
 
INSERT INTO `tutorial` (`id`, `nome`, `sobrenome`) VALUES
(1, '1', '2'),
(2, '3', '4'),
(3, '5', '6');