create database Matriz;
-- drop database matriz;
use matriz; 

create table TesteDeCaixaPreta 
(
	IDteste		INT 	auto_increment		PRIMARY KEY,
    CONT		INT,
    ID			VARCHAR(45)
);

create table endereco
(
	IDendereco		INT				auto_increment		PRIMARY KEY,
    cep 			INT				not null
);

create table telefone
(
	IDtelefone 		INT 			auto_increment		PRIMARY KEY,
    numero			INT 			not null
);

create table cadastro
(
	IDcadastro		INT				auto_increment		PRIMARY KEY,
    nome			VARCHAR(100)	not null,
    email			VARCHAR(45)		not null,
    senha			VARCHAR(100)	not null,
    cpf				INT				not null,
    IDendereco		INT,
    IDtelefone 		INT,
    cargo			VARCHAR(45)		not null,
    foto			VARCHAR(245),
    
    FOREIGN KEY (IDendereco) REFERENCES endereco(IDendereco),
    FOREIGN KEY (IDtelefone) REFERENCES telefone(IDtelefone)
);

create table equipe
(
	IDequipe			INT				auto_increment		PRIMARY KEY,
    nome				VARCHAR(100)	not null,
    descricao			VARCHAR(45),
    semaforo			VARCHAR(45),
    
    gestor 				int				not null,
    
    FOREIGN KEY (gestor) REFERENCES cadastro(IDcadastro)
);

create table funcao
(
	IDfuncao		INT				auto_increment		PRIMARY KEY,
    funcao 			varchar(45)		not null,
    IDequipe		INT,
    
    IDcadastro		INT,
    
    FOREIGN KEY (IDequipe) REFERENCES equipe(IDequipe),
    FOREIGN KEY (IDcadastro) REFERENCES cadastro(IDcadastro)
);

create table data1
(
	IDdata			INT		auto_increment		PRIMARY KEY,
    dataEmissao		date,
    dataRevissao	date
);

create table competencia
(
	IDcompetencia 		INT 			auto_increment		PRIMARY KEY,
    nome				VARCHAR(45) 			not null
);

create table integrantes
(
	IDintegrantes		INT				auto_increment		PRIMARY KEY,
    nome				VARCHAR(45),
    funcao				VARCHAR(45),
    
    IDcadastro			INT,
    gestor				INT,	
    IDequipe			INT,
    
    FOREIGN KEY (IDcadastro) REFERENCES cadastro(IDcadastro),
    FOREIGN KEY (IDequipe) REFERENCES equipe(IDequipe),
    FOREIGN KEY (gestor) REFERENCES cadastro(IDcadastro)
);

create table qualificacaoEqp
(
	IDqualificacaoEqp 	INT 			auto_increment		PRIMARY KEY,
    descricao			VARCHAR(45)		not null,
    IDequipe			INT,
    gestor				INT,
    
    FOREIGN KEY (IDequipe) REFERENCES equipe(IDequipe),
    FOREIGN KEY (gestor) REFERENCES cadastro(IDcadastro)
);

create table qualificacaoFunc
(
	IDqualificacaoFunc 	INT 			auto_increment		PRIMARY KEY,
    nivelRecomendado	INT 			not null,
    nivelAtual			INT				not null,
    descricao			VARCHAR(45)		not null,
    IDequipe 			INT,
    IDcadastro			INT,
    IDgestor			INT,
    
    FOREIGN KEY (IDgestor) REFERENCES cadastro(IDcadastro),
    
    FOREIGN KEY (IDcadastro) REFERENCES cadastro(IDcadastro),
    
    FOREIGN KEY (IDequipe) REFERENCES equipe(IDequipe)
);

create table area
(
	IDarea			INT		auto_increment		PRIMARY KEY,
    diretoria		VARCHAR(45),
    centroDeCustos	VARCHAR(45),
    nome			VARCHAR(45),
    IDdata			INT,
    
    FOREIGN KEY (IDdata) REFERENCES data1(IDdata),
    
    IDcadastro			INT,			
    
    FOREIGN KEY (IDcadastro) REFERENCES cadastro(IDcadastro)
);