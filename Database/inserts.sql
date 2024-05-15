INSERT INTO subarea (nome, cor) VALUES ('Administração', 'Azul');
INSERT INTO subarea (nome, cor) VALUES ('Finanças e Contabilidade', 'Amarelo');
INSERT INTO subarea (nome, cor) VALUES ('Gestão de Pessoas', 'Verde');
INSERT INTO subarea (nome, cor) VALUES ('Tecnologia da Informação', 'Vermelho');

INSERT INTO docente (docente) VALUES ('Regina');
INSERT INTO docente (docente) VALUES ('Eduardo');
INSERT INTO docente (docente) VALUES ('Carlos');
INSERT INTO docente (docente) VALUES ('Sirde');

INSERT INTO sala (nome_sala, andar, capacidade, tipo) VALUES ('Sala A', '1º andar', '30', 'Aula');
INSERT INTO sala (nome_sala, andar, capacidade, tipo) VALUES ('Sala B', '2º andar', '25', 'Aula');
INSERT INTO sala (nome_sala, andar, capacidade, tipo) VALUES ('Sala C', '3º andar', '20', 'Laboratório de Informática');
INSERT INTO sala (nome_sala, andar, capacidade, tipo) VALUES ('Sala D', '2º andar', '35', 'Auditório');

INSERT INTO curso (subareaid, nome, sigla, area) VALUES (1, 'Arquitetura e Urbanismo', 'ADM09', 'Administração');
INSERT INTO curso (subareaid, nome, sigla, area) VALUES (1, 'HABILITAÇÃO PROFISSIONAL TÉCNICA EM ADMINISTRAÇÃO', 'ADM10', 'Administração');
INSERT INTO curso (subareaid, nome, sigla, area) VALUES (1, 'HABILITAÇÃO PROFISSIONAL TÉCNICA EM ADMINISTRAÇÃO', 'ADM11', 'Administração');
INSERT INTO curso (subareaid, nome, sigla, area) VALUES (1, 'FERRAMENTAS DE PLANEJAMENTO E GESTÃO EMPRESARIAL', 'FPGE01', 'Administração');
INSERT INTO curso (subareaid, nome, sigla, area) VALUES (1, 'GERENCIAMENTO DO TEMPO', 'GDT01', 'Administração');
INSERT INTO curso (subareaid, nome, sigla, area) VALUES (1, 'PLANO DE NEGÓCIOS NA PRÁTICA', 'PNP01', 'Administração');
INSERT INTO curso (subareaid, nome, sigla, area) VALUES (1, 'GESTÃO DA QUALIDADE EM PROCESSOS', 'GQP01', 'Administração');
INSERT INTO curso (subareaid, nome, sigla, area) VALUES (2, 'HABILITAÇÃO PROFISSIONAL TÉCNICA EM FINANÇAS', 'FIN02', 'Finanças e Contabilidade');
INSERT INTO curso (subareaid, nome, sigla, area) VALUES (2, 'ESCRITURAÇÃO FISCAL', 'EF02', 'Finanças e Contabilidade');
INSERT INTO curso (subareaid, nome, sigla, area) VALUES (2, 'ESCRITURAÇÃO FISCAL', 'EF03', 'Finanças e Contabilidade');
INSERT INTO curso (subareaid, nome, sigla, area) VALUES (2, 'ADMINISTRAÇÃO DE CONTAS A PAGAR RECEBER E TESOURARIA', 'ACPRT02', 'Finanças e Contabilidade');
INSERT INTO curso (subareaid, nome, sigla, area) VALUES (2, 'ANALISTA DE CRÉDITO', 'ACRED01', 'Finanças e Contabilidade');
INSERT INTO curso (subareaid, nome, sigla, area) VALUES (2, 'ANALISTA DE CRÉDITO', 'ACRED02', 'Finanças e Contabilidade');
INSERT INTO curso (subareaid, nome, sigla, area) VALUES (2, 'GESTÃO TRIBUTÁRIA-PLANEJAMENTO TRIBUTÁRIO', 'GTO1', 'Finanças e Contabilidade');
INSERT INTO curso (subareaid, nome, sigla, area) VALUES (2, 'FINANÇAS PARA NÃO FINANCEIROS', 'FNF02', 'Finanças e Contabilidade');
INSERT INTO curso (subareaid, nome, sigla, area) VALUES (2, 'ADMINISTRAÇÃO DE CONTAS A PAGAR RECEBER E TESOURARIA', 'FNF03', 'Finanças e Contabilidade');

INSERT INTO turma (cursoId, docenteId, codigoTurma) VALUES (1, 1, 'T-ADM09-001');
INSERT INTO turma (cursoId, docenteId, codigoTurma) VALUES (1, 2, 'T-ADM10-001');
INSERT INTO turma (cursoId, docenteId, codigoTurma) VALUES (1, 3, 'T-ADM11-001');
INSERT INTO turma (cursoId, docenteId, codigoTurma) VALUES (2, 1, 'T-FPGE01-001');
INSERT INTO turma (cursoId, docenteId, codigoTurma) VALUES (3, 2, 'T-GDT01-001');
INSERT INTO turma (cursoId, docenteId, codigoTurma) VALUES (6, 4, 'T-PNP01-001');  -- Assuming Regina is docente id 4  for curso with sigla PNP01
INSERT INTO turma (cursoId, docenteId, codigoTurma) VALUES (7, 1, 'T-GQP01-001');  -- Assuming Regina is docente id 1 for curso with sigla GQP01
INSERT INTO turma (cursoId, docenteId, codigoTurma) VALUES (8, 1, 'T-FIN02-001');  -- Assuming Regina is docente id 1 for curso with sigla FIN02
INSERT INTO turma (cursoId, docenteId, codigoTurma) VALUES (9, 2, 'T-EF02-001');  -- Assuming Eduardo is docente id 2 for curso with sigla EF02
INSERT INTO turma (cursoId, docenteId, codigoTurma) VALUES (10, 2, 'T-EF03-001'); -- Assuming Eduardo is docente id 2 for curso with sigla EF03
# ... Add more inserts based on the image data for Curso and Docente

INSERT INTO reserva (turmaId, salaId, dataInicio, horarioInico, horarioFim) VALUES (1, 1, '2024-05-20 08:00:00', '09:00:00', '10:00:00');
INSERT INTO reserva (turmaId, salaId, dataInicio, horarioInico, horarioFim) VALUES (2, 2, '2024-05-21 10:00:00', '11:00:00', '12:00:00');
INSERT INTO reserva (turmaId, salaId, dataInicio, horarioInico, horarioFim) VALUES (3, 3, '2024-05-22 14:00:00', '15:00:00', '16:00:00');
# ... Add more inserts based on the image data for Turma and Sala

