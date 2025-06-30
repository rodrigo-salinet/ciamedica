# MySQL-Front 3.2  (Build 6.14)
CREATE TABLE `bancos` (
  `ID` int(11) unsigned NOT NULL auto_increment,
  `ID_USUARIO` int(11) default NULL,
  `RESPONSAVEL` varchar(100) default NULL,
  `TITULAR` varchar(100) default NULL,
  `NOME` varchar(100) default NULL,
  `GERENTE` varchar(100) default NULL,
  `CONTA` varchar(10) default NULL,
  `AGENCIA` varchar(10) default NULL,
  `NUM_CARTAO` varchar(30) default NULL,
  `VENCIMENTO_CARTAO` varchar(10) default NULL,
  `CNPJ` varchar(18) default NULL,
  `ENDERECO` varchar(100) default NULL,
  `NUMERO` varchar(5) default NULL,
  `COMPLEMENTO` varchar(100) default NULL,
  `BAIRRO` varchar(100) default NULL,
  `MUNICIPIO` varchar(100) default NULL,
  `UF` char(2) default NULL,
  `CEP` varchar(10) default NULL,
  `DDD_FONE` char(2) default NULL,
  `FONE` varchar(9) default NULL,
  `DDD_FAX` char(2) default NULL,
  `FAX` varchar(9) default NULL,
  `DDD_CELULAR` char(2) default NULL,
  `CELULAR` varchar(9) default NULL,
  `EMAIL` varchar(150) default NULL,
  `SITE` varchar(150) default NULL,
  `CANCELADO` char(3) default 'Não',
  `LIMITE_CREDITO` varchar(11) default '200',
  `DATA_CADASTRO` varchar(10) default NULL,
  `HORARIO_CADASTRO` varchar(8) default NULL,
  `OBS` text,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

CREATE TABLE `caixa` (
  `ID` int(11) unsigned NOT NULL auto_increment,
  `ID_USUARIO` int(11) default NULL,
  `ID_TIPO` int(11) default NULL,
  `ID_DESPESA` int(11) default NULL,
  `ID_FORMA_PAGAMENTO` int(11) default NULL,
  `ID_BANCO` int(11) default NULL,
  `RESPONSAVEL` varchar(100) default NULL,
  `DIA` int(2) default NULL,
  `MES` int(2) default NULL,
  `ANO` int(4) default NULL,
  `HORARIO` varchar(8) default NULL,
  `VALOR` varchar(25) default NULL,
  `OBS` text,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

CREATE TABLE `clientes` (
  `ID` int(11) unsigned NOT NULL auto_increment,
  `ID_USUARIO` int(11) NOT NULL default '0',
  `NOME` varchar(100) NOT NULL default '',
  `RAZAO_SOCIAL` varchar(100) default NULL,
  `CONTATO` varchar(100) NOT NULL default '',
  `CPF_CNPJ` varchar(18) default NULL,
  `INSCRICAO_ESTADUAL` varchar(15) default NULL,
  `CFOP` varchar(5) default NULL,
  `ENDERECO` varchar(100) default NULL,
  `NUMERO` varchar(5) default NULL,
  `COMPLEMENTO` varchar(100) default NULL,
  `BAIRRO` varchar(100) default NULL,
  `MUNICIPIO` varchar(100) NOT NULL default '',
  `UF` char(2) NOT NULL default '',
  `CEP` varchar(10) default NULL,
  `DDD_FONE` char(2) NOT NULL default '',
  `FONE` varchar(9) NOT NULL default '',
  `DDD_FAX` char(2) default NULL,
  `FAX` varchar(9) default NULL,
  `DDD_CELULAR` char(2) default NULL,
  `CELULAR` varchar(9) default NULL,
  `EMAIL` varchar(150) default NULL,
  `SITE` varchar(150) default NULL,
  `LIMITE_CREDITO` varchar(11) NOT NULL default '20000',
  `EM_DIA` char(3) default 'Sim',
  `DATA_CADASTRO` varchar(10) default NULL,
  `HORARIO_CADASTRO` varchar(8) default NULL,
  `OBS` text,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `clientes` VALUES (1,2,'Prefeitura de Arapongas','Prefeitura Municipal de Arapongas','Zezinho','76.958.966/0001-06','','','Av. Arapongas','','Praça Pio XII','Centro','Arapongas','PR','86.700-000','43','3902-1000','43','3902-1000','','','','www.arapongas.pr.gov.br','5744,1','Sim','14/03/2007','16:53:21','');
INSERT INTO `clientes` VALUES (2,2,'Prefeitura de Joaquim Távora','Prefeitura Municipal de Joaquim Távora','Ângela','76.966.845/0001-06','','','R. Miguel Dias','226','','Centro','Joaquim Távora','PR','86.455-000','43','3559-1539','43','3559-1539','','','','','','Sim','14/03/2007','17:00:43','35591539 / 35591122 (Lucimara)');
INSERT INTO `clientes` VALUES (3,2,'Prefeitura de Guapirama','Prefeitura Municipal de Guapirama','não sei','75.443.812/0001-00','','','R. 2 de março','460','','Centro','Guapirama','PR','86.465-000','43','3573-1122','43','3573-1122','','','','','','Sim','14/03/2007','17:04:50','');
INSERT INTO `clientes` VALUES (4,2,'Prefeitura de Jundiaí do Sul','Prefeitura Municipal de Jundiaí do Sul','Odair','76.408.061/0001-54','','','Praça Pio X','260','Caixa Posta 11','Centro','Jundiaí do Sul','PR','86.470-000','43','3626-1490','43','3626-1490','','','pmjunsul@yahoo.com.br','','','Sim','14/03/2007','17:08:44','');
INSERT INTO `clientes` VALUES (5,2,'Prefeitura de Jaboti','Prefeitura Municipal de Jaboti','Regina','75.969.667/0001-04','','','Praça Minas Gerais','175','','Centro','|Jaboti','PR','84.930-000','43','3622-1133','43','3622-1133','','','','','','Sim','14/03/2007','17:15:40','');
INSERT INTO `clientes` VALUES (6,2,'Prefeitura de Tomazina','Prefeitura Municipal de Tomazina','Tony','75.697.094/0001-07','','','Rod. Avelino Antônio Vieira','117','','Centro','Tomazina','PR','84.935-000','43','3563-1133','43','3563-1133','','','','','','Sim','14/03/2007','17:17:57','');
INSERT INTO `clientes` VALUES (7,2,'Prefeitura de Cambará','Prefeitura Municipal de Cambará','Cleber','75.442.756/0001-90','','','Av. Brasil','1082','','Centro','Cambará','PR','86.390-000','43','3532-3535','43','3532-3535','','','','','','Sim','14/03/2007','17:20:24','');
INSERT INTO `clientes` VALUES (8,2,'Prefeitura de Conselheiro Mairinck','Prefeitura Municipal de Conselheiro Mairinck','Gisele','75.968.412/0001-19','','','Praça Otacílio Ferreira','82','','Centro','Conselheiro Mairinck','PR','86.480-000','43','3561-1221','43','3561-1221','','','','','','Sim','14/03/2007','17:23:09','');
INSERT INTO `clientes` VALUES (9,2,'Prefeitura de Bom Sucesso','Prefeitura Municipal de Bom Sucesso','Ana Luíza','75.771.261/0001-04','','','Praça Paraná','77','','Centro','Bom Sucesso','PR','86.940-000','43','3442-1250','43','3442-1250','','','','','','Sim','14/03/2007','17:25:40','');
INSERT INTO `clientes` VALUES (10,2,'Prefeitura de Tejupá','Prefeitura Municipal de Tejupá','Djanira','46.223.756/0001-09','','','Praça Domingos Sartori','34','','Centro','Tejupá','SP','18.830-000','14','3385-1162','14','3385-1162','','','','','','Sim','14/03/2007','17:31:48','');
INSERT INTO `clientes` VALUES (11,2,'Prefeitura de Salto Grande','Prefeitura Municipal de Salto Grande','Soraya','','','','Av. Rangel Pestana','449','','Centro','Salto Grande','SP','','14','3378-1127','14','3378-1127','','','','www.saltogrande.sp.gov.br','','Sim','15/03/2007','10:03:01','');
INSERT INTO `clientes` VALUES (12,2,'Prefeitura de Bandeirantes','Prefeitura Municipalde Bandeirantes','não sei','76.235.753/0001-48','','','R. Dino Veiga','298','Caixa Postal 281','Centro','Bandeirantes','PR','86.360-000','43','3542-4552','43','3542-4525','','','prefsecr@dandnet.com.br','www.bandeirantes.pr.gov.br','','Sim','15/03/2007','10:07:06','');
INSERT INTO `clientes` VALUES (13,2,'Prefeitura de Jataizinho','Prefeitura Municipal de Jataizinho','Paula','','','','R. Monteiro Lobato','600','','Centro','Jataizinho','PR','86.210-000','43','3259-3756','43','3259-3756','','','','','','Sim','15/03/2007','10:18:15','');
CREATE TABLE `contas` (
  `ID` int(11) unsigned NOT NULL auto_increment,
  `ID_USUARIO` int(11) NOT NULL default '0',
  `ID_FORNECEDOR` int(11) default NULL,
  `ID_CLIENTE` int(11) default NULL,
  `ID_DESPESA` int(11) default NULL,
  `ID_TIPO` int(11) default NULL,
  `ID_FORMA_PAGAMENTO` int(11) default NULL,
  `DIA_CADASTRO` int(2) default NULL,
  `MES_CADASTRO` int(2) default NULL,
  `ANO_CADASTRO` int(4) default NULL,
  `HORARIO_CADASTRO` varchar(8) default NULL,
  `DIA_EMISSAO` int(2) default NULL,
  `MES_EMISSAO` int(2) default NULL,
  `ANO_EMISSAO` int(4) default NULL,
  `HORARIO_EMISSAO` varchar(8) default NULL,
  `DIA_VENCIMENTO` int(2) default NULL,
  `MES_VENCIMENTO` int(2) default NULL,
  `ANO_VENCIMENTO` int(4) default NULL,
  `HORARIO_VENCIMENTO` varchar(8) default NULL,
  `DIA_BAIXA` int(2) default NULL,
  `MES_BAIXA` int(2) default NULL,
  `ANO_BAIXA` int(4) default NULL,
  `HORARIO_BAIXA` varchar(8) default NULL,
  `QUANTIDADE` int(3) default NULL,
  `VALOR` varchar(10) default NULL,
  `TOTAL` varchar(10) default NULL,
  `OBS` text,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

CREATE TABLE `cotacoes` (
  `ID` int(11) unsigned NOT NULL auto_increment,
  `CONTROLE` varchar(6) default NULL,
  `ID_USUARIO` int(11) NOT NULL default '0',
  `ID_CLIENTE` varchar(11) default '0',
  `ID_NIVEL` int(11) default NULL,
  `ID_TIPO` int(11) default NULL,
  `CLI_NOME` varchar(100) NOT NULL default '',
  `CLI_RAZAO_SOCIAL` varchar(100) default NULL,
  `CLI_CONTATO` varchar(100) default NULL,
  `CLI_CPF_CNPJ` varchar(18) default NULL,
  `CLI_INSCRICAO_ESTADUAL` varchar(15) default NULL,
  `CLI_CFOP` varchar(5) default NULL,
  `CLI_ENDERECO` varchar(100) default NULL,
  `CLI_NUMERO` varchar(5) default NULL,
  `CLI_COMPLEMENTO` varchar(100) default NULL,
  `CLI_BAIRRO` varchar(100) default NULL,
  `CLI_MUNICIPIO` varchar(100) default NULL,
  `CLI_UF` char(2) default NULL,
  `CLI_CEP` varchar(10) default NULL,
  `CLI_DDD_FONE` char(2) default NULL,
  `CLI_FONE` varchar(9) default NULL,
  `CLI_DDD_FAX` char(2) default NULL,
  `CLI_FAX` varchar(9) default NULL,
  `CLI_DDD_CELULAR` char(2) default NULL,
  `CLI_CELULAR` varchar(9) default NULL,
  `CLI_EMAIL` varchar(150) default NULL,
  `CLI_SITE` varchar(150) default NULL,
  `CLI_OBS` text,
  `DESCONTO` varchar(7) NOT NULL default '0',
  `DATA_CADASTRO` varchar(10) default NULL,
  `HORARIO_CADASTRO` varchar(8) default NULL,
  `DATA_ENTREGA` varchar(10) default NULL,
  `HORARIO_ENTREGA` varchar(8) default NULL,
  `DATA_VALIDADE` varchar(10) default NULL,
  `PRECO_TOTAL` varchar(25) NOT NULL default '0',
  `OBS` text,
  `ACEITA` char(3) NOT NULL default 'Não',
  `PENDENTE` char(3) default 'Sim',
  `COMPLETA` char(3) default 'Não',
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `cotacoes` VALUES (3,NULL,2,'0',2,NULL,'Dental Pasane',NULL,'Cleidmar',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','08/05/2007','16:53:19',NULL,'16:53:19','23/05/2007','0',NULL,'Não','Sim','Não');
INSERT INTO `cotacoes` VALUES (4,NULL,2,'9',1,NULL,'Prefeitura de Bom Sucesso','Prefeitura Municipal de Bom Sucesso','Ana Luíza','75.771.261/0001-04',NULL,NULL,'Praça Paraná','77',NULL,'Centro','Bom Sucesso','PR','86.940-000','43','3442-1250','43','3442-1250',NULL,NULL,NULL,NULL,NULL,'0','08/05/2007','16:59:41',NULL,'16:59:41','23/05/2007','718,600','teste','Não','Sim','Sim');
CREATE TABLE `dados_cliente` (
  `ID` int(11) NOT NULL auto_increment,
  `ID_TIPO` int(11) default NULL,
  `ID_USUARIO` int(11) NOT NULL default '0',
  `ID_CLIENTE` int(11) NOT NULL default '0',
  `CONTATO` varchar(100) NOT NULL default '',
  `ENDERECO` varchar(100) default NULL,
  `NUMERO` varchar(6) default NULL,
  `COMPLEMENTO` varchar(100) default NULL,
  `BAIRRO` varchar(100) default NULL,
  `MUNICIPIO` varchar(100) NOT NULL default '',
  `UF` char(2) NOT NULL default '',
  `CEP` varchar(10) default NULL,
  `DDD_FONE` char(2) NOT NULL default '',
  `FONE` varchar(9) NOT NULL default '',
  `DDD_FAX` char(2) default NULL,
  `FAX` varchar(9) default NULL,
  `DDD_CELULAR` char(2) default NULL,
  `CELULAR` varchar(9) default NULL,
  `EMAIL` varchar(150) default NULL,
  `DATA_CADASTRO` varchar(10) default NULL,
  `HORARIO_CADASTRO` varchar(8) default NULL,
  `OBS` text,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

CREATE TABLE `despesas` (
  `ID` int(11) unsigned NOT NULL auto_increment,
  `NOME` varchar(50) default NULL,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `despesas` VALUES (1,'Despesa Diversa');
INSERT INTO `despesas` VALUES (2,'Salário');
INSERT INTO `despesas` VALUES (3,'Imposto');
INSERT INTO `despesas` VALUES (4,'Água');
INSERT INTO `despesas` VALUES (5,'Energia');
INSERT INTO `despesas` VALUES (6,'Telefone');
INSERT INTO `despesas` VALUES (7,'Celular');
INSERT INTO `despesas` VALUES (8,'Combustível');
INSERT INTO `despesas` VALUES (9,'Frete');
INSERT INTO `despesas` VALUES (10,'Transporte');
INSERT INTO `despesas` VALUES (11,'Alimentação');
INSERT INTO `despesas` VALUES (12,'Fornecedor');
INSERT INTO `despesas` VALUES (13,'Depósito no Banco');
INSERT INTO `despesas` VALUES (14,'Aluguel');
INSERT INTO `despesas` VALUES (15,'Vale');
INSERT INTO `despesas` VALUES (16,'Limpeza');
INSERT INTO `despesas` VALUES (17,'Material de Escritório');
INSERT INTO `despesas` VALUES (18,'Informática');
INSERT INTO `despesas` VALUES (19,'Manutenção Predial');
INSERT INTO `despesas` VALUES (20,'Treinamento');
INSERT INTO `despesas` VALUES (21,'Cliente');
CREATE TABLE `empresa` (
  `ID` int(11) NOT NULL auto_increment,
  `NOME` varchar(100) default NULL,
  `RAZAO_SOCIAL` varchar(100) default NULL,
  `CONTATO` varchar(100) default NULL,
  `CNPJ` varchar(18) default NULL,
  `INSCRICAO_ESTADUAL` varchar(15) default NULL,
  `CFOP` varchar(5) default NULL,
  `ENDERECO` varchar(100) default NULL,
  `NUMERO` varchar(5) default NULL,
  `COMPLEMENTO` varchar(100) default NULL,
  `BAIRRO` varchar(100) default NULL,
  `MUNICIPIO` varchar(100) default NULL,
  `UF` char(2) default NULL,
  `CEP` varchar(10) default NULL,
  `DDD_FONE` char(2) default NULL,
  `FONE` varchar(9) default NULL,
  `DDD_FAX` char(2) default NULL,
  `FAX` varchar(9) default NULL,
  `DDD_CELULAR` char(2) default NULL,
  `CELULAR` varchar(9) default NULL,
  `EMAIL` varchar(150) default NULL,
  `SITE` varchar(150) default NULL,
  `DATA_CADASTRO` varchar(10) default NULL,
  `HORARIO_CADASTRO` varchar(8) default NULL,
  `OBS` text,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `empresa` VALUES (1,'CiaMédica','Muniz & Fernandes','Josué ou Clariana','03.919.932/0001-20','902.34767-43','0','Rua Antônio Casagrande','2850','Sala B','Vila Romana','Ibiporã','PR','86.200-000','43','3158-1334','43','3158-1334','43','9123-7187','ciamedica@yahoo.com.br','www.ciamedica.com.br','15/02/2007','14:38:48','Teste');
CREATE TABLE `estoque` (
  `ID` int(11) unsigned NOT NULL auto_increment,
  `ID_USUARIO` int(11) default '0',
  `NOME` varchar(100) NOT NULL default '',
  `DESCRICAO` varchar(150) default NULL,
  `ID_FORNECEDOR` int(11) NOT NULL default '0',
  `ID_LINHA` int(11) NOT NULL default '0',
  `PRECO` varchar(11) NOT NULL default '1',
  `CUSTO_COMPRA` varchar(11) NOT NULL default '1',
  `CUSTO_MEDIO` varchar(11) default NULL,
  `QUANTIDADE` varchar(7) NOT NULL default '0',
  `ID_MEDIDA` int(11) NOT NULL default '0',
  `IPI` varchar(7) default NULL,
  `LUCRO` varchar(7) default '15',
  `ATIVO` char(3) default 'Sim',
  `OBS` text,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `estoque` VALUES (3,2,'Anestésico Mepivacaína 2%','DFL, especial, marrom, c/epinefrina',3,8,'32,82','32.82','','1',4,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (4,2,'Fio Seda 4.0','TechNew, c/agulha 1.7, c/24',3,5,'23,80','23.80','','1',4,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (5,2,'Hidróxido de Cálcio','Vigodent, Liner',3,5,'9,00','9.00','','1',1,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (6,2,'Óleo de Alta e Baixa Rotação','Maquira, Refil, 200ml, 143g',4,5,'10,50','10.50','','4',2,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (7,2,'Resina Heliobond Magic Bond','Vigodent',3,9,'14,49','10.35','','1',1,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (8,2,'Equipo Macrogotas','Embramed',6,4,'0,424','0.424','','1',1,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (9,2,'Fita p/ Autoclave','Eurocel, 19x30',6,4,'2,4281','2.4281','','1',1,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (10,2,'Óculos de Proteção','Danny, transparente',6,4,'3,6613','3.6613','','1',1,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (11,2,'Ácido Gel 37%','Villevie, c/ clorhexidina, c/3 2,5 ml cada',4,9,'3,00','3.00','','1',3,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (12,2,'Bandeija de Inox','Alinox 22x17x1,5',4,9,'4,00','4.00','','1',1,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (13,2,'Detergente Enzimático','Miyako, 1L',4,12,'28,30','28.30','','1',2,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (14,2,'Cunha Madeira Natural','Iodontosul, c/100',4,5,'1,80','1.80','','1',4,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (15,2,'Cunha Madeira Natural','Iodontosul, c/100',4,5,'1,80','1.80','','1',4,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (16,2,'Cureta Gracey 05/06','Golgran',4,5,'5,60','5.60','','1',1,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (17,2,'Cureta Gracey 13/14','Golgran',4,5,'5,60','5.60','','1',1,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (18,2,'Cureta Gracey 17/18','Golgran',4,5,'5,60','5.60','','1',1,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (19,2,'Cureta Mccal 17/18','Golgran',4,5,'5,60','5.60','','1',1,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (20,2,'Perigard','Colgate, Kit, 1000ml, menta',4,5,'24,30','24.30','','1',2,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (21,2,'Vitremer','3M, Ionomero Restaurador A3 Foto, kit',4,9,'219,00','219.00','','1',1,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (22,2,'Cavibrush','FGM, Pincel, Micro aplicador descartável, c/100',4,5,'5,90','5.90','','1',4,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (23,2,'Hidróxido de Cálcio P.A.','Asfer, pó, 10g',4,5,'2,40','2.40','','1',1,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (24,2,'Agulha gengival curta','Injex, descartável, c/100',4,5,'11,43','11.43','','1',4,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (25,2,'Agulha Gengival longa 27G','Injex, descartável, c/100',4,5,'12,43','12.43','','1',4,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (26,2,'Algodão rolete','Apolo',4,5,'0,90','0.90','','1',3,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (27,2,'Brunidor 29 simples','S Metais',4,5,'2,30','2.30','','1',1,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (28,2,'Resina A2','Fill Magic, 4g',4,5,'16,50','16.50','','1',1,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (29,2,'Resina A3.5','Fill Magic, esmalte, 4gr',4,5,'16,50','16.50','','1',1,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (30,2,'Resina A3','Fill Magic, esmalte, 4gr',4,5,'16,50','16.50','','1',1,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (31,2,'Adesivo Single Bond','3M, 6ml',4,5,'94,00','94.00','','1',2,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (32,2,'Amálgama Velvalloy','SSW, 30gr',3,5,'38,81','38.81','','1',2,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (33,2,'Fio Dental 500mts','Preven',3,5,'4,36','4.36','','1',1,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (34,2,'Fio Seda 3.0','Shalon, c/agulha 1.7, c/24',3,5,'24,00','24.00','','1',4,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (35,2,'Ionomero Vidrion-R Pó','SSW, pó, 10gr',3,5,'18,12','18.12','','1',1,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (36,2,'Matriz de Aço 0.5','Injecta, c/10',3,5,'9,76','9.76','','1',3,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (37,2,'Protetor de Luz','Jon',3,5,'5,11','5.11','','1',1,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (38,2,'Protetor de Luz','Jon',3,5,'5,11','5.11','','1',1,'','','Sim',NULL);
INSERT INTO `estoque` VALUES (39,2,'Sugador Colorido','SSPlus, c/40',3,5,'1,80','1.80','','1',3,'','','Sim',NULL);
CREATE TABLE `formas_pagamento` (
  `ID` int(11) NOT NULL auto_increment,
  `NOME` varchar(30) default NULL,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `formas_pagamento` VALUES (1,'Boleto Bancário');
INSERT INTO `formas_pagamento` VALUES (2,'Duplicata');
INSERT INTO `formas_pagamento` VALUES (3,'Recibo');
INSERT INTO `formas_pagamento` VALUES (4,'Cheque');
INSERT INTO `formas_pagamento` VALUES (5,'Cartão de Crédito');
INSERT INTO `formas_pagamento` VALUES (6,'Promissória');
INSERT INTO `formas_pagamento` VALUES (7,'Dinheiro');
CREATE TABLE `fornecedores` (
  `ID` int(11) unsigned NOT NULL auto_increment,
  `ID_USUARIO` int(11) NOT NULL default '0',
  `NOME` varchar(100) NOT NULL default '',
  `RAZAO_SOCIAL` varchar(100) default NULL,
  `CONTATO` varchar(100) NOT NULL default '',
  `CPF_CNPJ` varchar(18) default NULL,
  `INSCRICAO_ESTADUAL` varchar(15) default NULL,
  `ENDERECO` varchar(100) default NULL,
  `NUMERO` varchar(5) default NULL,
  `COMPLEMENTO` varchar(100) default NULL,
  `BAIRRO` varchar(100) default NULL,
  `MUNICIPIO` varchar(100) NOT NULL default '',
  `UF` char(2) NOT NULL default '',
  `CEP` varchar(10) default NULL,
  `DDD_FONE` char(3) NOT NULL default '',
  `FONE` varchar(9) NOT NULL default '',
  `DDD_FAX` char(2) NOT NULL default '',
  `FAX` varchar(9) NOT NULL default '',
  `DDD_CELULAR` char(2) default NULL,
  `CELULAR` varchar(9) default NULL,
  `EMAIL` varchar(150) default NULL,
  `SITE` varchar(150) default NULL,
  `DATA_CADASTRO` varchar(10) default NULL,
  `HORARIO_CADASTRO` varchar(8) default NULL,
  `OBS` text,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `fornecedores` VALUES (3,2,'Dental Pasane','Paulo Cesar Fleury de Oliveira','Fábio / Andréia','61.692.422/0001-20','487.016.431.119','Av. Aurora Forti Neves','278','','Jd Santa Efigênia','Olímpia','SP','15.400-000','17','3279-3900','17','3279-3900','','','fabio.pasane@uol.com.br','','','14/03/20','11:26:29');
INSERT INTO `fornecedores` VALUES (4,2,'Surya Dental','Surya Dental Com. de Prod. Odontológicos e Farmacêuticos','Priscilla Lara','00.814.556/0001-55','70121825-67','Av. Nóbrega','132','','','Maringá','PR','87.014-180','44','3218-1748','44','3218-1700','','','atacado@suryadental.com.br','http://www.suryadental.com.br','FAX 0800 4','14/03/20','11:35:16');
INSERT INTO `fornecedores` VALUES (5,2,'Adria Laboratórios','Comércio de Instrumentos Científicos Adryane Ltda','Adria','00.597.306/0001-77','601.29658-67','R. Santa Catarina','185','Loja 07 e 08 Shopping Villa Lobos','Centro','Londrina','PR','','43','3322-4856','43','3356-3207','','','adrialab@sercomtel.com.br','www.adrialaboraórios.com.br','','14/03/20','11:39:10');
INSERT INTO `fornecedores` VALUES (6,2,'Cirúrgica Fernandes','Cirúrgica Fernandes - Comércio de Materiais Cirúrgicos Hospitalares - Sociedade Limitada','Márcia (Arapongas)','61.418.042/0001-31','102.182.170.112','R. Agostinho de Azevedo','360','Rod. Raposo Tavares alt km 17,5','','São Paulo','SP','05.583-130','11','3783-9299','43','3252-3827','','','marcia_cirfernandes@hotmail.com','www.cirufer.com.br','','14/03/20','11:45:29');
INSERT INTO `fornecedores` VALUES (7,2,'MedGauze','MedGauze Indústria e Comércio Ltda.','Aline','02.012.921/0001-08','630.009.508.110','R. 21 de Abril','','edifício Minas Center ap. 57','Centro','Santo Antônio das Posses','SP','15.801-170','17','3523-3311','19','3896-1766','','','vendas1@medgauze.com','www.medgauze.com.br','','14/03/20','15:31:08');
INSERT INTO `fornecedores` VALUES (8,2,'Medical Suture Hospitalar','A.C.P. Corrêa & Cia. Ltda','Pagini','01.184.342/0001-71','901.03148-76','Av. Independência','1180','','Centro','Bela Vista do Paraíso','PR','86.130-000','43','3242-1589','43','3242-1589','','','suture@brturbo.com.br','','','14/03/20','15:35:20');
INSERT INTO `fornecedores` VALUES (9,2,'Casa Médica','Casa Médica Comércio de Produtos Hospitalares','Amauri','72.315.153/0001-39','601.29948-83','Av. Bandeirantes','901','Sala 01/02','','Londrina','PR','86.010-020','43','3378-8888','43','3378-8880','','','casamed@sercomtel.com.br','','','14/03/20','15:38:55');
INSERT INTO `fornecedores` VALUES (10,2,'Multi-X','Multi-X Comércio de Produtos Radiográficos Ltda.','Aristeu','80.063.639/0001-55','601.19812-65','R. Alemanha','178','térreo','Jd. Igapó','Londrina','PR','86.046-050','43','3341-7772','43','3341-7772','','','','','','14/03/20','15:42:26');
INSERT INTO `fornecedores` VALUES (11,2,'Dentscler','Dentscler Industria Apararelhos Odontológicos Ltda','Fábio','01.332.005/0001-84','','R. Basílio da Gama','406','','','Ribeirão Preto','SP','14.060-460','16','3622-6205','16','3622-6205','','','comercial@dentscler.com.br','www.dentscler.com.br','','14/03/20','15:48:01');
INSERT INTO `fornecedores` VALUES (12,2,'MedFio','MedFio Ind e Com de Artigos Odontológicos Ltda','João*','06.923.493/0001-18','903.12532-22','R. Dep. João Leopoldo Jacomel','1105','','Vila Esplanada','Pinhais','PR','83.320-005','41','3286-4560','41','3286-4560','','','contato@medfio.com.br','www.medfio.com.br','','14/03/20','15:53:38');
INSERT INTO `fornecedores` VALUES (13,2,'Procirurgica','Procirurgica Representações Comerciais Ltda','Junior','','','R. Pedro Américo','175','Conj. 52B','Capão raso','Curitiba','PR','81.110-010','41','3024-2260','41','3024-2260','','','junior@procirurgicaonline.com.br','www.procirurgicaonline.com.br','','14/03/20','16:00:16');
INSERT INTO `fornecedores` VALUES (14,2,'Kavo','Kavo do Brasil Ind Com Ltda','Cleber','','','R. Chapecó','86','','','Joinvile','SC','89.221-040','47','3451-0285','47','3422-9496','','','cleber@kavo.com.br','www.kavo.com.br','','14/03/20','16:03:35');
INSERT INTO `fornecedores` VALUES (15,2,'Schuster','Schuster Comercio de Equipamentos Odontológicos Ltda','Claudia','','','R. José Carlos Kruel','49','','Nossa Senhora de Lourdes','Santa Maria','RS','97.060-380','55','3222-2738','55','3222-2738','','','','www.schuster.ind.br','','14/03/20','16:12:38');
INSERT INTO `fornecedores` VALUES (16,2,'Dabi Atlante','Dabi Atlante','Ormísio','','','Av. Presidente Castelo Branco','2525','','','Ribeirão Preto','SP','14.095-000','16','3512-1212','16','3512-1212','','','ormisio@equipomaster.odo.br','www.dabiatlante.com.br','','14/03/20','16:19:05');
INSERT INTO `fornecedores` VALUES (17,2,'Injex','Injex indústrias Cirúrgics Ltda','Pagini','59.309.302/0001-99','495.044.013.118','Av Comendador José Zillo','160','caixa postas 75','Distrito Industrial','Ourinhos','SP','','43','3242-1589','43','3242-1589','','','','','','14/03/20','16:23:27');
INSERT INTO `fornecedores` VALUES (18,2,'Mache','Cirúrgica Mache Equipamentos Hospitalares','João','','','R. Mercúrio','1055','','Jardim do Sol','Londrina','PR','86.070-220','43','3348-7769','43','3327-6450','','','','www.cirurgicamache.com.br','','14/03/20','16:25:29');
INSERT INTO `fornecedores` VALUES (19,2,'Sanobiol','Laboratório Sanobiol Ltda','não sei','','','R. Olinda','184','','','São Paulo','SP','04.761-020','11','5523-6199','11','5686-8979','','','','www.sanobiol.com.br','','14/03/20','16:29:13');
INSERT INTO `fornecedores` VALUES (20,2,'RioQuímica','RioQuímica Industria Farmacêutica','Ocimar','','','','','','','Maringá','PR','','44','3026-1163','44','3026-1163','','','','','','14/03/20','16:37:09');
INSERT INTO `fornecedores` VALUES (21,2,'S Cruz','S Cruz Representações','não sei','03.264.204/1000-17','','R. Senador Souza Naves','683','','Centro','Londrina','PR','86.010-160','43','3356-0063','43','3356-0063','','','scruz@sercomtel.com.br','','','14/03/20','16:40:04');
INSERT INTO `fornecedores` VALUES (22,2,'Sulmedic','','não sei','','','','','','','Londrina','PR','','43','3356-7082','43','3356-1799','','','sulmedic@hotmail.com','','','14/03/20','16:43:00');
INSERT INTO `fornecedores` VALUES (23,2,'Maquira','Maquira Ind. de Prod. Odontológicos Ltda.','não','05.823.205/0001-90','90.286644-24','Av. Melvin Jones','773','','Parque Industrial Bandeirantes','Maringá','PR','87.070-030','44','3225-6202','44','3225-6202','','','','','','15/03/20','15:20:06');
INSERT INTO `fornecedores` VALUES (24,2,'Danny Fenix','Danny Comércio Importação e Exportação Ltda','não','58.533.209/0001-09','','R. Bernardino D\'Auria','208','','Jd. Tremembé','São Paulo','SP','02.349-000','11','6953-5766','11','6991-8937','','','danny@danny.com.br','www.danny.com.br','','15/03/20','15:24:04');
INSERT INTO `fornecedores` VALUES (25,2,'Eurocel','Sicad Fitas Adesivas Ltda','não','02.485.346/0001-52','','Av. Pio XII','1388','','Porto Alegre','Capivari','SP','13.360-000','19','3492-9710','19','3491-2672','','','','','','15/03/20','15:28:10');
INSERT INTO `fornecedores` VALUES (26,2,'Miyako','Miyako do Brasil Indústria e Comércio Ltda','não','43.907.351/0001-93','','R. Alexânia','05','','','Guarulhos','SP','','11','6462-2040','11','6462-2040','','','','','','15/03/20','15:31:20');
INSERT INTO `fornecedores` VALUES (27,2,'Iodontosul','Iodontosul Indústria Brasileira','não','97.215.388/0001-80','','','','','','Porto Alegre','RS','','51','3338-2340','51','3338-6892','','','','www.iodontosul.com.br','','15/03/20','15:37:41');
INSERT INTO `fornecedores` VALUES (28,2,'Asfer','Asfer Indústria Química Ltda','não','04.798.379/0001-88','','Av. Antônio Fonseca Martins','426','','São José','São Caetano do Sul','SP','09.581-02','11','4232-5833','11','4232-5833','','','asfer@asferindustriaquimica.com.br','','','15/03/20','15:41:55');
INSERT INTO `fornecedores` VALUES (29,2,'Injecta','Injecta','não','58.188.194/0001','','','','','','não','SP','','11','713-1400','11','713-1400','','','','','','15/03/20','15:44:58');
INSERT INTO `fornecedores` VALUES (30,2,'FGM','Dentscare Ltda','não','05.106.945/0001-06','','Av. Edgar Nelson Meister','474','','Distrito Industrial','Joinville','SC','89.219-501','47','3441-6100','47','3441-6100','','','','www.fgm.ind.br','','15/03/20','15:50:23');
INSERT INTO `fornecedores` VALUES (31,2,'Technew','Technew Comércio e Industria Ltda','não','31.258.478/0001-40','','R. Mario Mendes','435','','Campo Grande','Rio de Janeiro','RJ','23.013-530','21','3296-4763','21','3296-4763','','','sac@technewindustria.com.br','','','15/03/20','15:55:43');
INSERT INTO `fornecedores` VALUES (32,2,'Vigodent','Vigodent S/A indústria e Comércio','não','33.425.331/0001-22','','R. Pesqueira','26','','Bonsucesso','Rio de Janeiro','RJ','21.041-150','21','2560-7422','21','2280-8411','','','','www.vigodent.com.br','0800 24-74','15/03/20','16:19:06');
INSERT INTO `fornecedores` VALUES (33,2,'3M Espe Produtos Dentários','3M do Brasil Ltda','não','45.985.371/0001-08','','Via Anhanguera Km 110','','','','Sumaré','SP','','11','555-5555','11','222-2222','','','','www.3mespe.com.br','0800-01551','15/03/20','16:22:40');
INSERT INTO `fornecedores` VALUES (34,2,'Preven','Preven','Maria','','','R. Paraná','555','','','Guapirama','PR','86.465-000','43','3573-1186','43','3573-1186','','','','www.preven.com.br','','15/03/20','16:28:27');
CREATE TABLE `funcionarios` (
  `ID` int(11) unsigned NOT NULL auto_increment,
  `NOME` varchar(100) NOT NULL default '',
  `RG` varchar(15) default NULL,
  `CPF` varchar(15) NOT NULL default '',
  `ENDERECO` text,
  `NUMERO` varchar(7) default NULL,
  `COMPLEMENTO` varchar(100) default NULL,
  `BAIRRO` varchar(100) default NULL,
  `MUNICIPIO` varchar(100) default NULL,
  `UF` char(2) default NULL,
  `CEP` varchar(10) default NULL,
  `DDD_FONE` char(2) default NULL,
  `FONE` varchar(9) default NULL,
  `DDD_CELULAR` char(2) default NULL,
  `CELULAR` varchar(9) default NULL,
  `EMAIL` varchar(150) default NULL,
  `OBS` varchar(150) default NULL,
  `DATA_CADASTRO` varchar(10) default NULL,
  `HORARIO_CADASTRO` varchar(8) default NULL,
  `ATIVO` char(3) NOT NULL default 'Sim',
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `funcionarios` VALUES (1,'RODRIGO SALINET DA SILVA','7.546.881-4','028.421.689-50','RUA MARTINHO DINIZ','276','CASA','CENTRO','IBIPORÃ','PR','86.200-000','43','3268-2284','43','9941-6230','rodrigosalinet@hotmail.com','TESTE','19/03/2007','13:50:53','Sim');
CREATE TABLE `itens` (
  `ID` int(11) unsigned NOT NULL auto_increment,
  `ID_TIPO` int(11) default NULL,
  `ID_TABELA` int(11) default NULL,
  `ID_USUARIO` int(11) NOT NULL default '0',
  `ID_PRODUTO` int(11) default NULL,
  `NOME` varchar(100) default NULL,
  `ID_FORNECEDOR` int(11) default NULL,
  `ID_LINHA` int(11) default NULL,
  `OBS` text,
  `QUANTIDADE` varchar(7) default NULL,
  `ID_MEDIDA` int(11) default NULL,
  `PRECO` varchar(11) NOT NULL default '',
  `CUSTO_COMPRA` varchar(11) default NULL,
  `CUSTO_MEDIO` varchar(11) default NULL,
  `TOTAL` varchar(20) default NULL,
  `DESCONTO` varchar(7) NOT NULL default '0',
  `IPI` varchar(7) default NULL,
  `LUCRO` varchar(7) default NULL,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `itens` VALUES (4,1,3,2,26,'Algodão rolete',4,5,NULL,'20',3,'0,90','0.90',NULL,'18,000','0',NULL,NULL);
INSERT INTO `itens` VALUES (5,1,3,2,31,'Adesivo Single Bond',4,5,NULL,'50',2,'94,00','94.00',NULL,'4.700,000','0',NULL,NULL);
INSERT INTO `itens` VALUES (6,1,4,2,25,'Agulha Gengival longa 27G',4,5,NULL,'20',4,'12,43','12.43',NULL,'248,600','0',NULL,NULL);
INSERT INTO `itens` VALUES (7,1,4,2,31,'Adesivo Single Bond',4,5,NULL,'5',2,'94,00','94.00',NULL,'470,000','0',NULL,NULL);
CREATE TABLE `linhas` (
  `ID` int(11) unsigned NOT NULL auto_increment,
  `ID_USUARIO` int(11) NOT NULL default '0',
  `NOME` text NOT NULL,
  `DESCRICAO` text,
  `ATIVA` char(3) default 'Sim',
  `DATA_CADASTRO` varchar(10) default NULL,
  `HORARIO_CADASTRO` varchar(8) default NULL,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `linhas` VALUES (4,2,'Materiais Hospitalares','','Sim','15/03/2007','10:49:52');
INSERT INTO `linhas` VALUES (5,2,'Produdos Odontológicos','','Sim','15/03/2007','10:50:18');
INSERT INTO `linhas` VALUES (8,2,'Medicamentos','','Sim','15/03/2007','10:53:25');
INSERT INTO `linhas` VALUES (9,2,'Equipamentos Odontológicos','','Sim','15/03/2007','10:53:53');
INSERT INTO `linhas` VALUES (10,2,'Equipamentos Hospitalares','','Sim','15/03/2007','10:54:17');
INSERT INTO `linhas` VALUES (11,2,'Equipamentos Fisioterápicos','','Sim','15/03/2007','10:54:37');
INSERT INTO `linhas` VALUES (12,2,'Produtos de Limpeza','','Sim','15/03/2007','10:55:00');
INSERT INTO `linhas` VALUES (13,2,'Higiene','','Sim','15/03/2007','10:55:42');
CREATE TABLE `lotes` (
  `ID` int(11) unsigned NOT NULL auto_increment,
  `ID_ESTOQUE` int(11) default NULL,
  `DATA_VALIDADE` varchar(10) default NULL,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

CREATE TABLE `medidas` (
  `ID` int(11) NOT NULL auto_increment,
  `CATEGORIA` char(2) default '0',
  `NOME` text NOT NULL,
  `ABREVIATURA` varchar(5) NOT NULL default 'un',
  `DESCRICAO` text,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `medidas` VALUES (1,'1','Unidade(s)','un','Qualidade daquilo que não pode ser dividido.');
INSERT INTO `medidas` VALUES (2,'2','Frasco(s)','fr','Garrafa pequena.');
INSERT INTO `medidas` VALUES (3,'3','Pacote(s)','pct','Conjunto de unidades.');
INSERT INTO `medidas` VALUES (4,'2','Caixa(s)','cx','Recipiente de madeira ou papelão.');
INSERT INTO `medidas` VALUES (5,'5','Dose(s)','ds','Quantidade fixa de uma substância que entra na composição de um medicamento, numa combinação química, etc.');
INSERT INTO `medidas` VALUES (6,'6','Milímetro(s)','mm','Milésimo do metro.');
INSERT INTO `medidas` VALUES (7,'6','Centímetro(s)','cm',' Unidade de medida de comprimento, fundamental no sistema c.g.s. e igual a 0,01m.');
INSERT INTO `medidas` VALUES (8,'6','Metro(s)','m','Unidade fundamental de medida de comprimento no Sistema Internacional, igual ao comprimento do trajeto percorrido pela luz no vácuo durante um intervalo de tempo de 1/299 792 458 de segundo.');
INSERT INTO `medidas` VALUES (9,'6','Quilômetro(s)','km',' Medida itinerária equivalente a 1.000 metros.');
INSERT INTO `medidas` VALUES (10,'7','Mililitro(s)','ml','Unidade de capacidade, equivalente à milésima parte do litro.');
INSERT INTO `medidas` VALUES (14,'7','Litro(s)','lt','Unidade de medida de capacidade, igual a um decímetro cúbico.');
INSERT INTO `medidas` VALUES (15,'8','Cartela(s)','cart',' Embalagem na qual pequeno(s) produto(s) são encerrados entre uma superfície moldada de plástico semi-rígido transparente e uma base plana de cartolina, papel, alumínio, etc., permitindo a visualização desse(s) produto(s), quando disposta em vitrines ou pendurada em exibidor apropriado. ');
CREATE TABLE `menu_principal` (
  `ID` int(11) NOT NULL auto_increment,
  `NOME` varchar(20) default NULL,
  `ICONE` varchar(30) default NULL,
  `PAGINA` varchar(50) default NULL,
  `DESCRICAO` varchar(100) default NULL,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `menu_principal` VALUES (1,'Clientes','bonequinhos.gif','clientes.php','Abre a página dos clientes cadastrados.');
INSERT INTO `menu_principal` VALUES (2,'Fornecedores','caminhao.gif','fornecedores.php','Abre a página dos fornecedores cadastrados.');
INSERT INTO `menu_principal` VALUES (3,'Transportadoras','caminhao.gif','transportadoras.php','Abre a página das transportadoras cadastradas.');
INSERT INTO `menu_principal` VALUES (4,'Cotação','caderneta.gif','cotacoes.php?id_tipo=1','Abre a página das cotações cadastradas.');
INSERT INTO `menu_principal` VALUES (5,'Venda','maos.gif','cotacoes.php?id_tipo=2','Abre a página das vendas cadastradas.');
INSERT INTO `menu_principal` VALUES (6,'Caixa','saco_cifrao.gif','caixa.php','Abre a página do caixa cadastrado.');
INSERT INTO `menu_principal` VALUES (7,'Bancos','cifrao.gif','bancos.php','Abre a página dos bancos cadastrados.');
INSERT INTO `menu_principal` VALUES (8,'Contas','envelope.gif','contas.php','Abre a página das contas cadastradas.');
INSERT INTO `menu_principal` VALUES (9,'Estoque','casinha.gif','estoque.php','Abre a página dos produtos cadastrados.');
INSERT INTO `menu_principal` VALUES (10,'Funcionários','bonequinhos.gif','funcionarios.php','Abre a página dos funcionários cadastrados.');
INSERT INTO `menu_principal` VALUES (11,'Senha','chaves.gif','senha.php','Abre a página para alteração da senha.');
INSERT INTO `menu_principal` VALUES (12,'Sair','seta_porta.gif','adm.php','Termina a sessão.');
CREATE TABLE `movimentos` (
  `ID` int(11) NOT NULL auto_increment,
  `NOME` char(30) default NULL,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `movimentos` VALUES (1,'Entrada');
INSERT INTO `movimentos` VALUES (2,'Saída');
INSERT INTO `movimentos` VALUES (3,'Permanência');
CREATE TABLE `niveis_cotacao` (
  `ID` int(11) NOT NULL auto_increment,
  `NOME` varchar(20) default NULL,
  `DESCRICAO` varchar(100) default NULL,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `niveis_cotacao` VALUES (1,'Cliente','Aparecem todos os campos.');
INSERT INTO `niveis_cotacao` VALUES (2,'Fornecedor','Aperece apenas a descrição do produto sem o preço.');
CREATE TABLE `saldos` (
  `ID` int(11) unsigned NOT NULL auto_increment,
  `ID_BANCO` int(11) default NULL,
  `DATA_PREVISTA` varchar(10) default NULL,
  `HORARIO_PREVISTO` varchar(8) default NULL,
  `VALOR` int(7) default NULL,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

CREATE TABLE `tipos_caixa` (
  `ID` int(11) NOT NULL auto_increment,
  `ID_MOVIMENTO` int(11) default NULL,
  `NOME` char(30) default NULL,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `tipos_caixa` VALUES (1,1,'Depósito');
INSERT INTO `tipos_caixa` VALUES (2,2,'Retirada');
INSERT INTO `tipos_caixa` VALUES (3,2,'Pagamento');
INSERT INTO `tipos_caixa` VALUES (4,2,'Empréstimo');
INSERT INTO `tipos_caixa` VALUES (5,3,'Troca');
INSERT INTO `tipos_caixa` VALUES (6,2,'Financiamento');
CREATE TABLE `tipos_conta` (
  `ID` int(11) NOT NULL auto_increment,
  `NOME` varchar(30) default NULL,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `tipos_conta` VALUES (1,'A Pagar');
INSERT INTO `tipos_conta` VALUES (2,'A Receber');
INSERT INTO `tipos_conta` VALUES (3,'A Trocar');
INSERT INTO `tipos_conta` VALUES (4,'A Emprestar');
CREATE TABLE `tipos_dados` (
  `ID` int(11) NOT NULL auto_increment,
  `NOME` char(30) default NULL,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `tipos_dados` VALUES (1,'Cobrança');
INSERT INTO `tipos_dados` VALUES (2,'Entrega');
CREATE TABLE `tipos_itens` (
  `ID` int(11) NOT NULL auto_increment,
  `NOME` char(30) default NULL,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `tipos_itens` VALUES (1,'Cotação');
INSERT INTO `tipos_itens` VALUES (2,'Venda');
INSERT INTO `tipos_itens` VALUES (3,'Carta-Convite');
INSERT INTO `tipos_itens` VALUES (4,'Licitação');
INSERT INTO `tipos_itens` VALUES (5,'Pregão Eletrônico');
INSERT INTO `tipos_itens` VALUES (6,'Concorrência');
CREATE TABLE `transportadoras` (
  `ID` int(11) unsigned NOT NULL auto_increment,
  `ID_USUARIO` int(11) NOT NULL default '0',
  `NOME` varchar(100) NOT NULL default '',
  `RAZAO_SOCIAL` varchar(100) default NULL,
  `CONTATO` varchar(100) NOT NULL default '',
  `CPF_CNPJ` varchar(18) default NULL,
  `INSCRICAO_ESTADUAL` varchar(15) default NULL,
  `ENDERECO` varchar(100) default NULL,
  `NUMERO` varchar(5) default NULL,
  `COMPLEMENTO` varchar(100) default NULL,
  `BAIRRO` varchar(100) default NULL,
  `MUNICIPIO` varchar(100) NOT NULL default '',
  `UF` char(2) NOT NULL default '',
  `CEP` varchar(10) default NULL,
  `DDD_FONE` char(3) NOT NULL default '',
  `FONE` varchar(9) NOT NULL default '',
  `DDD_FAX` char(2) NOT NULL default '',
  `FAX` varchar(9) NOT NULL default '',
  `DDD_CELULAR` char(2) default NULL,
  `CELULAR` varchar(9) default NULL,
  `EMAIL` varchar(150) default NULL,
  `SITE` varchar(150) default NULL,
  `DATA_CADASTRO` varchar(10) default NULL,
  `HORARIO_CADASTRO` varchar(8) default NULL,
  `OBS` text,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

CREATE TABLE `usuarios` (
  `ID` int(11) unsigned NOT NULL auto_increment,
  `LOGIN` varchar(15) default NULL,
  `SENHA` varchar(100) default NULL,
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

INSERT INTO `usuarios` VALUES (1,'rodrigo','e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `usuarios` VALUES (2,'clariana','c77be4db6925228fdcc901fe6a6c5cca');
INSERT INTO `usuarios` VALUES (3,'josue','e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `usuarios` VALUES (4,'marina','e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `usuarios` VALUES (5,'meira','e10adc3949ba59abbe56e057f20f883e');
CREATE TABLE `vendas` (
  `ID` int(11) unsigned NOT NULL auto_increment,
  `CONTROLE` int(6) default NULL,
  `ID_USUARIO` int(11) NOT NULL default '0',
  `ID_CLIENTE` int(11) default '0',
  `CLI_NOME` varchar(100) NOT NULL default '',
  `CLI_RAZAO_SOCIAL` varchar(100) default NULL,
  `CLI_CONTATO` varchar(100) default NULL,
  `CLI_CPF_CNPJ` varchar(18) default NULL,
  `CLI_INSCRICAO_ESTADUAL` varchar(15) default NULL,
  `CLI_CFOP` varchar(5) default NULL,
  `CLI_ENDERECO` varchar(100) default NULL,
  `CLI_NUMERO` varchar(5) default NULL,
  `CLI_COMPLEMENTO` varchar(100) default NULL,
  `CLI_BAIRRO` varchar(100) default NULL,
  `CLI_MUNICIPIO` varchar(100) default NULL,
  `CLI_UF` char(2) default NULL,
  `CLI_CEP` varchar(10) default NULL,
  `CLI_DDD_FONE` char(2) default NULL,
  `CLI_FONE` varchar(9) default NULL,
  `CLI_DDD_FAX` char(2) default NULL,
  `CLI_FAX` varchar(9) default NULL,
  `CLI_DDD_CELULAR` char(2) default NULL,
  `CLI_CELULAR` varchar(9) default NULL,
  `CLI_EMAIL` varchar(150) default NULL,
  `CLI_SITE` varchar(150) default NULL,
  `CLI_OBS` text,
  `DESCONTO` varchar(7) default '0',
  `DATA_CADASTRO` varchar(10) default NULL,
  `HORARIO_CADASTRO` varchar(8) default NULL,
  `DATA_ENTREGA` varchar(10) default NULL,
  `HORARIO_ENTREGA` varchar(8) default NULL,
  `DATA_VALIDADE` varchar(10) default NULL,
  `PRECO_TOTAL` varchar(25) default NULL,
  `OBS` text,
  `COMPLETA` char(3) default 'Não',
  `DATA_PAGAMENTO` varchar(10) default NULL,
  `VALOR_PAGAMENTO` varchar(11) default '0',
  `PAGA` char(3) NOT NULL default 'Não',
  PRIMARY KEY  (`ID`)
) TYPE=MyISAM;

