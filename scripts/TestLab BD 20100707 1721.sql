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
  `excluir` varchar(45) NOT NULL,
  PRIMARY KEY  (`id_servico`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicos`
--

/*!40000 ALTER TABLE `servicos` DISABLE KEYS */;
INSERT INTO `servicos` (`id_servico`,`idcomputador`,`problema`,`prioridade`,`datainicial`,`dataconclusao`,`situacao`,`descricao`,`excluir`) VALUES 
 (1,345345,'sdfsdf','Alta','10/06/2010','','Em Espera','dfsdf',''),
 (2,124343,'sdfsdfsdf','Alta','10/06/2010','','Em Espera','sdfsd',''),
 (3,34234234,'asdasd','Alta','10/06/2010','','Em Espera','asdasd',''),
 (4,3456788,'ertertet','Alta','10/06/2010','','Em Espera','dstgdeter',''),
 (5,1,'asdasdasd','Alta','10/06/2010','','Em Espera','asdfgbvbfghfgh',''),
 (6,456456,'LEGAL','MÃ©dia','10/06/2010','','ManutenÃ§Ã£o Externa','sefwerw',''),
 (7,1234567890,'Hieght','Baixa','10/06/2010','','Em Espera','sadfafasdfslkjhdskjlfhkf\r\ndsfhksaldfhadshfk',''),
 (8,567890,'Bicicleta','Baixa','10/06/2010','','Em Espera','hDGSgduySIGUd',''),
 (9,67890,'Dead PC','MÃ©dia','10/06/2010','','Em Espera','sdfasfsf',''),
 (10,4294967295,'dgjaskdad','MÃ©dia','10/06/2010','','ConcluÃ­do','Agdsbkajsddfdasfjdgashd',''),
 (11,4294967295,'sdfsdfsdf','Alta','10/06/2010','','Em Espera','sdfgsfsdfsdf',''),
 (12,7895,'Placa-MÃ£e Uqeimada','Alta','10/06/2010','','Executando','O computador parou de funcionar depois da chuva.',''),
 (13,4294967295,'sdfsdfsdfsdf','Alta','11/06/2010','','Em Espera','sdfsdfsdfsdf',''),
 (14,324234234,'asdasdasd','Alta','11/06/2010','','Em Espera','asdasdasd',''),
 (15,4294967295,'ewrwerwrw','Alta','11/06/2010','','Em Espera','dfdfsdfsdf',''),
 (16,4294967295,'werwrwrwr','Alta','11/06/2010','','Em Espera','werwerwrw',''),
 (17,544575676,'rgtrtertert','Alta','11/06/2010','','Em Espera','ertertertert',''),
 (18,4294967295,'sdfsdfsdf','Alta','11/06/2010','','Em Espera','sdfsdfsdfsf',''),
 (19,4294967295,'tewterteter','Alta','11/06/2010','','Em Espera','erterterteet',''),
 (20,4294967295,'tewterteter','Alta','11/06/2010','','Em Espera','erterterteet',''),
 (21,321312,'23423a','Alta','11/06/2010','','Em Espera','asdads',''),
 (22,45345345,'esrserr','Alta','11/06/2010','','Em Espera','w454545',''),
 (23,435345345,'sdasdasd','Alta','11/06/2010','','Em Espera','asdasdasd',''),
 (24,43534534,'rerwre','Alta','11/06/2010','','Em Espera','dsfsdfsdf',''),
 (25,234234234,'asdasdasd','Alta','11/06/2010','','Em Espera','asdasdad',''),
 (26,234234234,'asdsadasd','Alta','11/06/2010','','Em Espera','asdasdasd',''),
 (27,435345345,'sdfsdfsdfsd','Alta','11/06/2010','','Em Espera','sdfsdfsdf',''),
 (28,345345345,'wrwerwer','Alta','11/06/2010','','Em Espera','werwerwer',''),
 (29,4294967295,'asdasdasdasdad','Alta','11/06/2010','','Em Espera','asdasdasdasd',''),
 (30,345345345,'sdfsfsdfsf','Alta','11/06/2010','','Em Espera','sfsfsfsdf',''),
 (31,4294967295,'sfsdfsdfsdf','Alta','11/06/2010','','Em Espera','sdfsdfsdfsdf',''),
 (32,4294967295,'sdfsdfsd','Alta','11/06/2010','','Em Espera','sfsdfsdfds',''),
 (33,4294967295,'fsdfsdfsd','Alta','11/06/2010','','Em Espera','sdfsdfsdfsdfsdf',''),
 (34,4294967295,'sdfsdfsdf','Alta','11/06/2010','','Em Espera','sdfsdfsdf',''),
 (35,4294967295,'werwerwerw','Alta','11/06/2010','','Em Espera','werwerwerwer',''),
 (36,4294967295,'sdasdasdasdas','Alta','11/06/2010','','Em Espera','asdadasdasdasd',''),
 (37,4294967295,'sdfsdfsdfsd','Alta','11/06/2010','','Em Espera','sdfsdfsdfsf',''),
 (38,4294967295,'sdfsdfsdfsdfsdf','Alta','11/06/2010','','Em Espera','sdfsdfsdfsdf',''),
 (39,23424234,'sdfsdfsdf','Alta','11/06/2010','','Em Espera','sdfsdfsdf',''),
 (40,4294967295,'fsdfsdfsdf','Alta','11/06/2010','','Em Espera','sdfsdfsdfsdfs',''),
 (41,324234,'asdasdas','Alta','11/06/2010','','Em Espera','dasdasdasd',''),
 (42,34234234,'asdasd','Alta','11/06/2010','','Em Espera','asdasdasd',''),
 (43,4294967295,'aqweqweq','Alta','11/06/2010','','Em Espera','qweqweqwe',''),
 (44,4294967295,'srwerwerwe','Alta','11/06/2010','','Em Espera','rwerwerwer',''),
 (45,789,'frhiudfg','MÃ©dia','11/06/2010','','Em Espera','dfgdfgdfgdafgadfgdfg',''),
 (46,123456,'dasdad','Alta','12/06/2010','','Em Espera','asdadasd',''),
 (47,12345,'aweawe','Alta','12/06/2010','','Em Espera','adadas',''),
 (48,34567,'waeeaw','Alta','12/06/2010','','Em Espera','aweaweae',''),
 (49,678678,'gfdgdfg','Alta','12/06/2010','','Em Espera','dfgdfgdg',''),
 (50,546456,'sdfsdf','Alta','12/06/2010','','Em Espera','sdfsdf',''),
 (51,212343234,'adadad','Alta','12/06/2010','','Em Espera','asdasd',''),
 (52,45345345,'wrwerwe','Alta','12/06/2010','','Em Espera','werwer',''),
 (53,54535,'werwerw','Alta','12/06/2010','','Em Espera','werwr',''),
 (54,1234567,'tecnico','MÃ©dia','14/06/2010','','Em Espera','asfcdfxcdfdg',''),
 (55,4234234,'asdasdasd','Baixa','14/06/2010','','Em Espera','asdasdasdasdasd',''),
 (56,324234234,'asdasdasd','Baixa','13/10/2007','','Em Espera','dsfsdfsdfsdfsdf','EXCLUIU'),
 (57,54645,'ewrtetret','MÃ©dia','28/06/2010','','ConcluÃ­do','rtcmmtoeitcohihtniuer',''),
 (58,123456789,'Morte','Alta','05/07/2010','','Em Espera','asdasdA','');
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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id_usuario`,`nome`,`login`,`senha`,`funcao`) VALUES 
 (1,'Marcos','mraraujo','123456789','Administrador'),
 (2,'Marcos','mraraujo','123456789','Administrador'),
 (3,'Marcos','mraraujo','123456789','Administrador'),
 (4,'Marcos','mraraujo','123456789','Administrador'),
 (5,'Marcos','mraraujo','123456789','Administrador'),
 (6,'Marcos','mraraujo','123456789','Administrador'),
 (7,'Marcos','mraraujo','123456789','Administrador'),
 (8,'Marcos','mraraujo','123456789','Administrador'),
 (9,'Marcos','mraraujo','123456789','Administrador'),
 (10,'Marcos','mraraujo','123456789','Administrador'),
 (11,'Marcos','mraraujo','123456789','Administrador'),
 (12,'Marcos','mraraujo','123456789','Administrador'),
 (13,'Marcos','mraraujo','123456789','Administrador'),
 (15,'Marcos','mraraujo','123456789','Administrador'),
 (16,'Marcos','mraraujo','123456789','Administrador'),
 (18,'Marcos','mraraujo','123456789','Administrador'),
 (19,'Antonio','mraraujo','d6978dd825d74dea9e252ffba0999afd','Administrador'),
 (20,'Steven','steven','e10adc3949ba59abbe56e057f20f883e','Administrador'),
 (21,'Steven Dois','steven2','202cb962ac59075b964b07152d234b70','Estagiário');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
