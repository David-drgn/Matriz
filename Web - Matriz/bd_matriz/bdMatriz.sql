create database Matriz;
-- drop database matriz;
use matriz; 

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
    cpf				VARCHAR(11)				not null,
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
    foto			    VARCHAR(245),
    
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
    semaforo			VARCHAR(45)		not null,
    
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
    dataCon				DATE,
    dataEmi				DATE,
    
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
    
    IDcadastro			INT,			
    
    FOREIGN KEY (IDcadastro) REFERENCES cadastro(IDcadastro)
);

insert into endereco values
(default,234234),
(default,123122),
(default,1223123),
(default,1241242),
(default,1412412),
(default,12241224);


insert into telefone values
(default,234234),
(default,123122),
(default,1223123),
(default,1241242),
(default,1412412),
(default,12241224);

insert into cadastro values
(1, 'David Raphael', 'david.raphael@gmail.com', '54321', '54240682789',1, 1, 'Funcionario','carioca.jpg'),
(2, 'Filipe', 'filipe@gmail.com', '54321', '54240682789', 2, 2, 'Funcionario','Filipe.jpg'),
(3, 'Eduardo', 'eduardo@gmail.com', '54321', '54240682789', 2, 2, 'Funcionario','Eduardo.jpg'),
(100, 'Bruna', 'bruna@gmail.com', '54321', '54240682789', 2, 2, 'Gestor','Bruna.jpg'),
(5, 'Kauê', 'kaue@gmail.com', '54321', '54240682789', 2, 2, 'Funcionario','Kaue.jpg'),
(6, 'Giulia', 'giulia@gmail.com', '54321', '54240682789', 2, 2, 'Funcionario','giulia.jpg'),
(4, 'GestorTop', 'GestorTop@gmail.com', '12345', '54240682789', 2, 2, 'Gestor','user.png');

-- ALTER table cadastro 
-- add column foto varchar(245);

-- update cadastro
-- set nome = 'David Gustavo'
-- where IDcadastro='2';

/* insert into endereco values
(default,1212231);

insert into telefone values
(default,123122);

insert into cadastro values
(default, 'BRUNA', 'Bruna.mqs@gmail', '12345', '54240682789', 3, 3, 'Gestor',null);

INSERT INTO `qualificacaofunc` (`IDqualificacaoFunc`, `nivelRecomendado`, `nivelAtual`, `descricao`, `IDqualificacaoEqp`, `IDcadastro`) VALUES (NULL, '4', '4', 'PHP', '1', '2');
*/

INSERT INTO competencia VALUES 
(default, 'Liderança'),
(default, 'Trabalho em equipe'),
(default, 'Programação Web'),
(default, 'Banco de Dados'),
(default, 'Design'),
(default, 'Programação Mobile'),
(default, 'Redes'),
(default, 'Gestão de Projetos'),
(default, 'Ética'),
(default, 'RH'),
(default, 'Comunicação'),
(default, 'Marketing');

INSERT INTO equipe VALUES
(default, 'Matriz de conhecimento', NULL, 'Vermelho', 100);

INSERT INTO qualificacaoEqp VALUES
(default,'Liderança', 1, 100, 'Vermelho'),
(default,'Trabalho em equipe', 1, 100, 'Vermelho'),
(default,'Programação Web', 1, 100, 'Vermelho'),
(default,'Banco de Dados', 1, 100, 'Vermelho'),
(default,'Design', 1, 100, 'Vermelho'),
(default,'Programação Mobile', 1, 100, 'Vermelho'),
(default,'Redes', 1, 100, 'Vermelho'),
(default,'Gestão de Projetos', 1, 100, 'Vermelho'),
(default,'Ética', 1, 100, 'Vermelho'),
(default,'RH', 1, 100, 'Vermelho'),
(default,'Comunicação', 1, 100, 'Vermelho'),
(default,'Marketing', 1, 100, 'Vermelho');

-- Carioca
INSERT INTO qualificacaoFunc VALUES
(default, 4, 2,'Liderança', 1, 1, 100, null, null),
(default, 4, 5,'Trabalho em equipe', 1, 1, 100, null, null),
(default, 5, 5,'Programação Web', 1, 1, 100, null, null),
(default, 3, 4,'Banco de Dados', 1, 1, 100, null, null),
(default, 4, 1,'Design', 1, 1, 100, null, null),
(default, 1, 2,'Programação Mobile', 1, 1, 100, null, null),
(default, 3, 1,'Redes', 1, 1, 100, null, null),
(default, 5, 2,'Gestão de Projetos', 1, 1, 100, null, null),
(default, 4, 5,'Ética', 1, 1, 100, null, null),
(default, 2, 1,'RH', 1, 1, 100, null, null),
(default, 4, 5,'Comunicação', 1, 1, 100, null, null),
(default, 1, 1,'Marketing', 1, 1, 100, null, null),
 -- Filipe
(default, 3, 1,'Liderança', 1, 2, 100, null, null),
(default, 4, 3,'Trabalho em equipe', 1, 2, 100, null, null),
(default, 4, 1,'Programação Web', 1, 2, 100, null, null),
(default, 3, 1,'Banco de Dados', 1, 2, 100, null, null),
(default, 3, 4,'Design', 1, 2, 100, null, null),
(default, 1, 1,'Programação Mobile', 1, 2, 100, null, null),
(default, 2, 3,'Redes', 1, 2, 100, null, null),
(default, 4, 1,'Gestão de Projetos', 1, 2, 100, null, null),
(default, 4, 3,'Ética', 1, 2, 100, null, null),
(default, 1, 1,'RH', 1, 2, 100, null, null),
(default, 4, 1,'Comunicação', 1, 2, 100, null, null),
(default, 1, 1,'Marketing', 1, 2, 100, null, null),
-- Eduardo
(default, 3, 2,'Liderança', 1, 3, 100, null, null),
(default, 4, 3,'Trabalho em equipe', 1, 3, 100, null, null),
(default, 4, 3,'Programação Web', 1,3, 100, null, null),
(default, 3, 3,'Banco de Dados', 1, 3, 100, null, null),
(default, 3, 2,'Design', 1, 3, 100, null, null),
(default, 1, 1,'Programação Mobile', 1, 3, 100, null, null),
(default, 2, 1,'Redes', 1, 3, 100, null, null),
(default, 4, 1,'Gestão de Projetos', 1, 3, 100, null, null),
(default, 4, 3,'Ética', 1, 3, 100, null, null),
(default, 1, 2,'RH', 1, 3, 100, null, null),
(default, 4, 3,'Comunicação', 1, 3, 100, null, null),
(default, 1, 1,'Marketing', 1, 3, 100, null, null),
-- Bruna
(default, 3, 4,'Liderança', 1, 100, 100, null, null),
(default, 4, 3,'Trabalho em equipe', 1, 100, 100, null, null),
(default, 4, 2,'Programação Web', 1, 100, 100, null, null),
(default, 3, 1,'Banco de Dados', 1, 100, 100, null, null),
(default, 3, 3,'Design', 1, 100, 100, null, null),
(default, 1, 1,'Programação Mobile', 1,100, 100, null, null),
(default, 2, 2,'Redes', 1, 100, 100, null, null),
(default, 4, 4,'Gestão de Projetos', 1, 100, 100, null, null),
(default, 4, 3,'Ética', 1, 100, 100, null, null),
(default, 1, 2,'RH', 1,100, 100, null, null),
(default, 4, 4,'Comunicação', 1, 100, 100, null, null),
(default, 1, 2,'Marketing', 1, 100, 100, null, null), 
-- Kauê
(default, 3, 1,'Liderança', 1, 5, 100, null, null),
(default, 4, 4,'Trabalho em equipe', 1, 5, 100, null, null),
(default, 4, 2,'Programação Web', 1, 5, 100, null, null),
(default, 3, 3,'Banco de Dados', 1, 5, 100, null, null),
(default, 3, 2,'Design', 1,5, 100, null, null),
(default, 1, 3,'Programação Mobile', 1, 5, 100, null, null),
(default, 2, 1,'Redes', 1, 5, 100, null, null),
(default, 4, 1,'Gestão de Projetos', 1, 5, 100, null, null),
(default, 4, 4,'Ética', 1, 5, 100, null, null),
(default, 1, 3,'RH', 1, 5, 100, null, null),
(default, 4, 2,'Comunicação', 1, 5, 100, null, null),
(default, 1, 4,'Marketing', 1,5, 100, null, null),
-- Giulia
(default, 3, 1,'Liderança', 1, 6, 100, null, null),
(default, 4, 3,'Trabalho em equipe', 1, 6, 100, null, null),
(default, 4, 3,'Programação Web', 1, 6, 100, null,null),
(default, 3, 3,'Banco de Dados', 1, 6, 100, null, null),
(default, 3, 1,'Design', 1, 6, 100, null, null),
(default, 1, 1,'Programação Mobile', 1, 6, 100, null, null),
(default, 2, 4,'Redes', 1, 6, 100, null, null),
(default, 4, 1,'Gestão de Projetos', 1, 6, 100, null, null),
(default, 4, 3,'Ética', 1, 6, 100, null, null),
(default, 1, 1,'RH', 1, 6, 100, null, null),
(default, 4, 2,'Comunicação', 1, 6, 100, null, null),
(default, 1, 1,'Marketing', 1, 6, 100, null, null);

/* -- Carioca
INSERT INTO qualificacaoFunc VALUES
(default, 3, 2,'Liderança', 1, 1),
(default, 4, 4,'Trabalho em equipe', 1, 1),
(default, 4, 2,'Programação Web', 1, 1),
(default, 3, 0,'Banco de Dados', 1, 1),
(default, 3, 0,'Design', 1, 1),
(default, 1, 0,'Programação Mobile', 1, 1),
(default, 2, 0,'Redes', 1, 1),
(default, 4, 1,'Gestão de Projetos', 1, 1),
(default, 4, 4,'Ética', 1, 1),
(default, 2, 1,'RH', 1, 1),
(default, 5, 4,'Comunicação', 1, 1),
(default, 1, 1,'Marketing', 1, 1); */

INSERT INTO integrantes VALUES
(default, 'David Raphael', 'Programador', 1, 100, 1, 'carioca.jpg'),
/* (default, 'Bruna', 'Gestor de projetos', 4, 100, 1, 'Bruna.jpg'), */
(default, 'Giulia', 'Programadora', 6, 100, 1, 'giulia.jpg'),
(default, 'Kauê', 'Marketing', 5, 100, 1, 'Kaue.jpg'),
(default, 'Eduardo', 'Programador', 3, 100, 1, 'eduardo.jpg'),
(default, 'Filipe', 'Designer', 2, 100, 1, 'Filipe.jpg');