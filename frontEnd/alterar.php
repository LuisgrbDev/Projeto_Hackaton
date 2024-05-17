<?php 
require_once 'DAO/salaDAO.php';
require_once "DAO/ReservaDAO.php";

$turmaDAO = new TurmaDAO();
$salaDAO = new SalaDAO();
$salas= $salaDAO->getAll();
$turmas = $turmaDAO->getAll();
$reservaDAO = new ReservaDAO();

// $type = filter_input(INPUT_POST, "type");

// if ($type === 'reservar') {
//     $salaId = $_POST['idSala'];
//     $turmaId = $_POST['idTurma'];
//     $dataInicio = $_POST['dataInicio'];
//     $dataFim = $_POST['dataFim'];
//     $horaInicio = $_POST['horaInicio'];
//     $horaFim = $_POST['horaFim'];

//     $inserido = $reservaDAO->create($salaId,$turmaId,$dataInicio, $dataFim,$horaInicio,$horaFim);
//     if ($inserido) {
//         echo "Reserva inserida com sucesso!" . $inserido;
//     } else {
//         echo "Erro ao inserir a reserva." . $inserido;
//     }
// }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <nav>
            <a href="inicio.html">Inicio</a>
            <a href="reservar.html">Reservar</a>
            <a href="alterar.html" class="alterar">Alterações</a>
            <a href="deletar.html">Deletar</a>
            <a href="login.html">Login</a>
        </nav>
    </header>

    <main>
        <!-- <div id="loginOverlay" class="overlay_login">
            <div class="popup_login">
                <button class="btn-close" onclick="hideLoginPopup()">×</button>
                <div class="row">
                    <div class="col-md-6">

                        <form action="authservice.php" method="post" class="form_login" id="login">

                            <h2>LOGIN</h2>

                            <input type="hidden" name="type" value="login">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <br>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Senha</label>
                                <br>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">ENTRAR</button>

                            <h2>Não possui cadastro?</h2>
                            <div class="input_botao_cadastro">
                                <button type="button" id="submitBtn" onclick="cadastrar()">cadastr se</button>
                        </form>
                    </div>
                    <div class="col-md-6">

                    </div>
                    <form action="authservice.php" method="post" class="form_cadastro" id="cadastro">


                        <h2>Cadastra se</h2>
                        <input type="hidden" name="type" value="register">
                        <div class="mb-3">
                            <label for="new_nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="new_nome" name="new_nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="new_email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="new_email" name="new_email" required>
                        </div>
                        <div class="mb-3">
                            <label for="new_password" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="new_password" name="new_password" required>
                        </div>
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Confirmar Senha</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>


                    </form>
                </div>
            </div>
        </div>
        </div> -->

        <h1>Atualizando dados de agendamento - SENAC</h1>

        <div class="container_central">

            <form class="form_alterar">

                <div class="input_box">
                    <label for="sala">Sala:</label>
                    <br>
                    <select class="form-select" id="idSala" name="idSala" >
                <?php foreach ($salas as $sala): ?>
            
                        <option value="<?php echo intval($sala->getId()); ?>"><?php echo $sala->getAndar();?><?php echo $sala->getNomeSala();?></option>
                    <?php endforeach; ?>
                </select>
                </div>

                <div class="input_box">
                    <label for="oferta">Oferta:</label>
                    <br>
                    <input type="tel" id="buscar_oferta" name="buscar_oferta" onclick=" loginPopup()" placeholder="Digite sua oferta">
                </div>

                <div class="input_box">
                    <label for="cod">Cod.turma:</label>
                    <br>
                    <input type="tel" id="buscar_cod" name="buscar_cod" onclick=" loginPopup()" placeholder="Digite o codigo da turma">
                </div>

                <div class="input_botao2">
                    <button type="button" id="submitBtn" onclick="buscar()">Buscar</button>
                </div>

            </form>

            <div class="input_card">
                <div class="card2">
                    <form class="form-alterar2" id="mostrar">
                        <div class="container_box_alterar">

                            <div class="input_box">
                                <label for="sigla">Sigla:</label>
                                <br>
                                <input type="text" id="sigla" name="sigla" placeholder="Digite sua sigla">
                            </div>

                            <div class="input_box">
                                <label for="oferta">Oferta:</label>
                                <br>
                                <input type="tel" id="oferta" name="oferta" placeholder="Digite sua oferta">
                            </div>

                            <div class="input_box">
                                <label for="cod">Cod.turma:</label>
                                <br>
                                <input type="tel" id="cod" name="cod" placeholder="Digite o codigo da turma">
                            </div>

                            <div class="input_box">
                                <label for="qntd">Capacidade:</label>
                                <br>
                                <input type="tel" id="qntd" name="qntd">
                            </div>

                            <div class="input_select">
                                <label for="curso">Curso:</label>
                                <br>
                                <select id="curso" name="curso">
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>

                            <div class="input_select">
                                <label for="docente">Docente:</label>
                                <br>
                                <select id="docente" name="docente">
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>

                            <div class="input_select">
                                <label for="subarea">Subarea:</label>
                                <br>
                                <select id="subarea" name="subarea">
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>

                            <div class="input_select">
                                <label for="sala">Sala/Lab:</label>
                                <br>
                                <select id="sala" name="sala">
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>

                            <div class="input_data">
                                <label for="horario">Escolha um horário de inicio:</label>
                                <br>
                                <input type="time" id="horario" name="horario">
                            </div>

                            <div class="input_data">
                                <label for="horario">Escolha um horário de fim:</label>
                                <br>
                                <input type="time" id="horario" name="horario">
                            </div>

                            <div class="input_data">
                                <label for="inicio">Data de início:</label>
                                <br>
                                <input type="date" id="inicio" name="inicio">
                            </div>

                            <div class="input_data">
                                <label for="fim">Data de fim:</label>
                                <br>
                                <input type="date" id="fim" name="fim">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="btn_alteracoes">
                    <div class="input_botao">
                        <button type="button" id="deleteBtn" onclick=" loginPopup()" onclick="confirmDelete()">Deletar</button>
                    </div>

                    <div class="input_botao">
                        <button type="submit" id="submitBtn" onclick=" loginPopup()">Alterar</button>
                    </div>
                </div>
            </div>

            <div id="overlay" class="overlay_alterar">
                <div class="popup_alterar">
                    <h2>Tem certeza que deseja deletar o agendamento?</h2>
                    <button onclick="cancelDelete()">Cancelar</button>
                    <button onclick="deleteItem()">Confirmar</button>
                </div>
            </div>

            <div id="mensagem-sucesso" class="mensagem-sucesso"></div>
            <div id="mensagem-cancelamento" class="mensagem-cancelamento"></div>
            <div id="mensagem-erro" class="mensagem-erro"></div>
        </div>
    </main>

    <footer>
        <div class="footer-content">
            <h3>SENAC</h3>
            <p>O Serviço Nacional de Aprendizagem Comercial (SENAC) é uma instituição brasileira de educação
                profissional, reconhecida pela excelência na formação de profissionais para o mercado de trabalho,
                contribuindo para o desenvolvimento social e econômico do país.</p>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2024 SENAC. Todos os direitos reservados.</p>
        </div>
    </footer>
    <script src="js/interacoes.js"></script>
</body>

</html>