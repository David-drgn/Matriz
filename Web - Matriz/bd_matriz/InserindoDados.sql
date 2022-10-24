use matriz;

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
(1, 'David Raphael', 'david.raphael@gmail.com', '54321', '54240682789',1, 1, 'Funcionario',null),
(2, 'Filipe', 'filipe@gmail.com', '54321', '54240682789', 2, 2, 'Funcionario',null),
(3, 'Eduardo', 'eduardo@gmail.com', '54321', '54240682789', 2, 2, 'Funcionario',null),
(4, 'Bruna', 'bruna@gmail.com', '54321', '54240682789', 2, 2, 'Funcionario',null),
(5, 'Kauê', 'kaue@gmail.com', '54321', '54240682789', 2, 2, 'Funcionario',null),
(6, 'Giulia', 'giulia@gmail.com', '54321', '54240682789', 2, 2, 'Funcionario',null),
(100, 'GestorTop', 'GestorTop@gmail.com', '12345', '54240682789', 2, 2, 'Gestor',null);

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
(default, 1, 5,'Liderança', 1, 1, 100, null, null),
(default, 1, 5,'Trabalho em equipe', 1, 1, 100, null, null),
(default, 1, 5,'Programação Web', 1, 1, 100, null, null),
(default, 1, 5,'Banco de Dados', 1, 1, 100, null, null),
(default, 1, 5,'Design', 1, 1, 100, null, null),
(default, 1, 5,'Programação Mobile', 1, 1, 100, null, null),
(default, 1, 5,'Redes', 1, 1, 100, null, null),
(default, 1, 5,'Gestão de Projetos', 1, 1, 100, null, null),
(default, 1, 5,'Ética', 1, 1, 100, null, null),
(default, 1, 5,'RH', 1, 1, 100, null, null),
(default, 1, 5,'Comunicação', 1, 1, 100, null, null),
(default, 1, 5,'Marketing', 1, 1, 100, null, null),
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
(default, 3, 4,'Liderança', 1, 4, 100, null, null),
(default, 4, 3,'Trabalho em equipe', 1, 4, 100, null, null),
(default, 4, 2,'Programação Web', 1, 4, 100, null, null),
(default, 3, 1,'Banco de Dados', 1, 4, 100, null, null),
(default, 3, 3,'Design', 1, 4, 100, null, null),
(default, 1, 1,'Programação Mobile', 1,4, 100, null, null),
(default, 2, 2,'Redes', 1, 4, 100, null, null),
(default, 4, 4,'Gestão de Projetos', 1, 4, 100, null, null),
(default, 4, 3,'Ética', 1, 4, 100, null, null),
(default, 1, 2,'RH', 1,4, 100, null, null),
(default, 4, 4,'Comunicação', 1, 4, 100, null, null),
(default, 1, 2,'Marketing', 1, 4, 100, null, null),
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
(default, 'David Raphael', 'Programador', 1, 100, 1),
(default, 'Bruna', 'Gestor de projetos', 4, 100, 1),
(default, 'Giulia', 'Programadora', 6, 100, 1),
(default, 'Kauê', 'Marketing', 5, 100, 1),
(default, 'Eduardo', 'Programador', 3, 100, 1),
(default, 'Filipe', 'Designer', 2, 100, 1);

update qualificacaoFunc 
set nivelAtual = '2'
where IDqualificacaoFunc='12';

SELECT * FROM equipe;
SELECT * FROM qualificacaoEqp;
SELECT * FROM qualificacaoFunc;
SELECT * FROM integrantes;

DELETE from equipe where IDequipe = '3';
DELETE FROM qualificacaoEqp WHERE IDequipe = '3';
DELETE FROM qualificacaoFunc WHERE IDequipe = '3';
DELETE FROM integrantes WHERE IDequipe = '3';

SELECT COUNT(IDqualificacaoFunc) from qualificacaoFunc WHERE IDequipe = '1';
SELECT SUM(nivelAtual) from qualificacaoFunc WHERE IDequipe = '1';
SELECT SUM(nivelRecomendado) from qualificacaoFunc WHERE IDequipe = '1';

SELECT descricao from qualificacaoEqp WHERE IDqualificacaoEqp = '3';