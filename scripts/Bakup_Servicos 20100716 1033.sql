-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.51b-community


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema servico
--

CREATE DATABASE IF NOT EXISTS servico;
USE servico;

--
-- Definition of table `agenda_projetor`
--

DROP TABLE IF EXISTS `agenda_projetor`;
CREATE TABLE `agenda_projetor` (
  `id_agendamento` int(10) unsigned NOT NULL auto_increment,
  `dataprogramada` varchar(15) NOT NULL,
  `dataatual` varchar(15) NOT NULL,
  `motivo` varchar(255) NOT NULL,
  `responsavel` varchar(60) NOT NULL,
  `projetor` varchar(45) NOT NULL,
  PRIMARY KEY  (`id_agendamento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda_projetor`
--

/*!40000 ALTER TABLE `agenda_projetor` DISABLE KEYS */;
/*!40000 ALTER TABLE `agenda_projetor` ENABLE KEYS */;


--
-- Definition of table `recado`
--

DROP TABLE IF EXISTS `recado`;
CREATE TABLE `recado` (
  `id_recado` int(10) unsigned NOT NULL auto_increment,
  `nome` varchar(25) NOT NULL,
  `assunto` varchar(25) NOT NULL,
  `destinatario` varchar(25) NOT NULL,
  `data` varchar(11) NOT NULL,
  `texto` varchar(255) NOT NULL,
  PRIMARY KEY  (`id_recado`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recado`
--

/*!40000 ALTER TABLE `recado` DISABLE KEYS */;
INSERT INTO `recado` (`id_recado`,`nome`,`assunto`,`destinatario`,`data`,`texto`) VALUES 
 (1,'werwer','werwer','','10/06/2010',''),
 (2,'gdfg','sdfsdf','','10/06/2010',''),
 (3,'Marcos','Morte','Professores','10/06/2010',''),
 (4,'Carlos','DGSUAd','Professores','10/06/2010','HAiohiauhiahihaiua\r\nAHiOHIHIUSdhuiasd\r\nAgora '),
 (5,'Carlos','DGSUAd','Professores','10/06/2010','teste'),
 (6,'erte','ertert','Estagiï¿½rios','10/06/2010','regertgert'),
 (7,'Marcos','Sou bom','Professores','10/06/2010','Uhul\r\nEu sou bom\r\nPHP\r\nSQL\r\nUMA SEMANA\r\nINCRIVEL.'),
 (8,'HELTON','CANNABIS','Administrao','10/06/2010','FILHO DA PUTA!\r\nHAiuOHsainahiduahid\r\nAHAKSDNIU'),
 (9,'mARCOS','LAB','Professores','10/06/2010','lab fechado hoje.'),
 (10,'Antonio','asasdsad','Professores','10/06/2010','dKASDHNKASDHLKAS'),
 (11,'Marcelo','Tecnologia','Professores','10/06/2010','Posso fazer o trabalho no computador?'),
 (12,'Marcelo','Tecnologia','Professores','10/06/2010','Posso fazer o trabalho no computador?'),
 (13,'PRIMEIRO','PRIMEIRO','Estagirios','10/06/2010','PRIMEIRO'),
 (14,'adasdasd','asdasd','Estagirios','13/06/2010','asdasd'),
 (15,'sdfsdf','sdfsdf','Estagirios','10/06/2010','dfsdf'),
 (16,'sdfsdfs','dfsdfsd','Estagirios','10/06/2010','sdfsdfsdf'),
 (17,'sdfsdf','sdfsdfsdfsdf','Administrao','10/06/2010','dfsdfsdfsdfsf'),
 (18,'sdfsdf','sdfsdfsdfsdf','Administrao','10/06/2010','dfsdfsdfsdfsf'),
 (19,'ertertert','rtertertert','Professores','10/06/2010','ertert'),
 (20,'dsdgsdgsdgs','sdgsdgsdg','Administrao','10/06/2010','sdgsdgsdgsdg'),
 (21,'asdasdasd','asdasdasdasd','Estagirios','10/06/2010','asdasdasdasd'),
 (22,'tertert','ertertert','Estagirios','11/06/2010',''),
 (23,'Marcos','Legal','Professores','11/06/2010','Interessante muito bomInteressante muito bomInteressante muito bomInteressante muito bomInteressante muito bomInteressante muito bomInteressante muito bomInteressante muito bomInteressante muito bomInteressante muito bomInteressante muito bomInteressante '),
 (24,'drtdrt','drtdrt','Estagirios','11/06/2010','drtdrt'),
 (25,'drtd','drtdrt','Estagirios','11/06/2010','drtdrt'),
 (26,'werwer','werwer','Estagirios','11/06/2010','serresrInteressante muito bomInteressante muito bomInteressante muito bomInteressante muito bomInteressante muito bomInteressante muito bomInteressante muito bomInteressante muito bomInteressante muito bomInteressante muito bomInteressante muito bomIntere'),
 (28,'werwer','rwr','Estagirios','11/06/2010','werwer'),
 (29,'Marcos','askdhasjhasd','Professores','11/06/2010','sdfasdSFSFSDF'),
 (30,'fhf','fhfg','Estagirios','12/06/2010','hfghfgh'),
 (32,'SdfSDFsdfSDF','weqwe','Estagiários','07/07/2010','FUCK'),
 (33,'Steven','sdfsdfsdf','Professores','07/07/2010','SDFsdfSFD');
/*!40000 ALTER TABLE `recado` ENABLE KEYS */;


--
-- Definition of table `servicos`
--

DROP TABLE IF EXISTS `servicos`;
CREATE TABLE `servicos` (
  `id_servico` int(10) unsigned NOT NULL auto_increment,
  `idcomputador` int(10) unsigned NOT NULL,
  `problema` varchar(155) NOT NULL,
  `prioridade` varchar(6) NOT NULL,
  `datainicial` varchar(11) NOT NULL,
  `dataconclusao` varchar(11) NOT NULL,
  `situacao` varchar(45) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `procedimento` varchar(255) NOT NULL,
  PRIMARY KEY  (`id_servico`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicos`
--

/*!40000 ALTER TABLE `servicos` DISABLE KEYS */;
/*!40000 ALTER TABLE `servicos` ENABLE KEYS */;


--
-- Definition of table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id_usuario` int(10) unsigned NOT NULL auto_increment,
  `nome` varchar(45) NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `funcao` varchar(35) NOT NULL,
  PRIMARY KEY  (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id_usuario`,`nome`,`login`,`senha`,`funcao`) VALUES 
 (3,'Marcos','mraraujo','123456789','Administrador'),
 (4,'Marcos','mraraujo','123456789','Administrador'),
 (5,'Marcos','mraraujo','123456789','Administrador'),
 (6,'Marcos','mraraujo','123456789','Administrador'),
 (7,'Marcos','mraraujo','123456789','Administrador'),
 (8,'Marcos','mraraujo','123456789','Administrador'),
 (9,'Marcos','mraraujo','123456789','Administrador'),
 (10,'Marcos','mraraujo','123456789','Administrador'),
 (11,'Marcos','mraraujo','25f9e794323b453885f5181f1b624d0b','Administrador'),
 (12,'Marcos','mraraujo','123456789','Administrador'),
 (13,'Marcos','mraraujo','123456789','Administrador'),
 (15,'Marcos','mraraujo','123456789','Administrador'),
 (18,'Marcos','mraraujo','202cb962ac59075b964b07152d234b70','Administrador'),
 (19,'Antonio','mraraujo','d6978dd825d74dea9e252ffba0999afd','Administrador'),
 (20,'Steven','steven','202cb962ac59075b964b07152d234b70','Administrador'),
 (21,'Steven Dois','steven2','202cb962ac59075b964b07152d234b70','Estagiário'),
 (22,'Estanislau','devil10','e10adc3949ba59abbe56e057f20f883e','Faxineiro'),
 (23,'Bartolomeu Simpson','barth2','14e1b600b1fd579f47433b88e8d85291','Desenho Animado');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
