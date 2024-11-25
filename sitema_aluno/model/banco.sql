create schema IF NOT exists `Projeto_final` default character set latin1;
use `Projeto_final`;

-- tabela `Projeto_final`. usuario
create table if not exists `usuario`(
`IdUsuario` int(11) NOT NULL auto_increment primary key,
`Nome` varchar(150) NULL default NUll,
`cpf` varchar(11) not NUll,
`DataNascimento` DATE NULL default NUll,
`email` varchar(150) NULL default NUll,
`senha` varchar(45) NULL default NUll

);

-- table `Projeto_final`.`formacaoAcademica`
create table if not exists `FormacaoAcademica`(
`IdFomacaoAcademica` int(11) NOT NULL auto_increment primary key,
`IdUsuario` int(11) NULL default NUll,
`inicio` date not NUll,
`fim` date null default null,
`descricao` varchar(150) null default null

);

create table if not exists `outrasFormacoes`(
`IDexperienciaPRofissional` int(11) NOT NULL auto_increment primary key,
`IdUsuario` int(11) NULL default NUll,
`inicio` date not NUll,
`fim` date null default null,
`expresa` varchar(45) null default null,
`descricao` varchar(45) null default null

);

