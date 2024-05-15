
CREATE TABLE IF NOT EXISTS subarea (
 id INT auto_increment  PRIMARY KEY,
 nome VARCHAR(50),
 cor varchar(10)
);

CREATE TABLE IF NOT EXISTS docente(
	id INT auto_increment PRIMARY KEY,
    docente VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS sala(
	id INT auto_increment  PRIMARY KEY,
    nome_sala VARCHAR(50) NOT NULL,
    andar VARCHAR(30) NOT NULL,
    capacidade VARCHAR(10) NOT NULL,
	tipo TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS curso (
	id int auto_increment PRIMARY KEY,
    subareaid int,
    nome VARCHAR(100),
    sigla VARCHAR(10),
    area VARCHAR(60),
	FOREIGN KEY (subareaid) REFERENCES subarea(id)
);

CREATE TABLE IF NOT EXISTS turma(
	id int auto_increment primary key,
    cursoId int,
    docenteId int,
    codigoTurma VARCHAR(30),
    FOREIGN KEY (cursoID) REFERENCES curso(id),
	FOREIGN KEY (docenteId) REFERENCES docente(id)
);
CREATE TABLE IF NOT EXISTS reserva (
	id int auto_increment primary key,
    turmaId int, 
    salaId int,
    dataInicio datetime not null,
    dataFim datetime default current_timestamp on UPDATE current_timestamp,
    horarioInico time,
    horarioFim time,
	FOREIGN KEY (turmaId) REFERENCES turma(id),
	FOREIGN KEY (salaId) REFERENCES sala(id)
);

