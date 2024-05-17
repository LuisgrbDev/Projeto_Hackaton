<?php 
require_once 'DAO/turmaDAO.php';
require_once 'DAO/salaDAO.php';
require_once "DAO/ReservaDAO.php";

$turmaDAO = new TurmaDAO();
$salaDAO = new SalaDAO();
$salas= $salaDAO->getAll();
$turmas = $turmaDAO->getAll();
$reservaDAO = new ReservaDAO();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $salaId = $_POST['idSala'];
    $turmaId = $_POST['idTurma'];
    $dataInicio = $_POST['dataInicio'];
    $dataFim = $_POST['dataFim'];
    $horaInicio = $_POST['horaInicio'];
    $horaFim = $_POST['horaFim'];

    $inserido = $reservaDAO->create($salaId,$turmaId,$dataInicio, $dataFim,$horaInicio,$horaFim);
    if ($inserido) {
        echo "Reserva inserida com sucesso!";
    } else {
        echo "Erro ao inserir a reserva.";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <nav>
            <a href="inicio.html">Inicio</a>
            <a href="reservar.html" class="reservar" >Reservar</a>
            <a href="alterar.html">Alterações</a>
            <a href="deletar.html">Deletar</a>
            <a href="Login.html">Login</a>
        </nav>
    </header>

    <main>

        <h1>Reservar sala ou laboratório</h1>
        <div class="container_central">

            <form class="form-reserva" method="POST" action="reservar.php">
                <div class="container_box_reserva">

                    <div class="input_box">
                        <label for="sigla">Sigla:</label>
                        <br>
                        <input type="text" id="sigla"  onclick=" loginPopup()" name="sigla" placeholder="Digite sua sigla">
                    </div>

                    <div class="input_box">
                        <label for="oferta">Oferta:</label>
                        <br>
                        <input type="tel" id="oferta"  onclick=" loginPopup()" name="oferta" placeholder="Digite sua oferta">
                    </div>

                    <div class="input_box">
                        <label for="cod">Cod.turma:</label>
                        <br>
                        <input type="tel" id="cod"  onclick=" loginPopup()" name="cod" placeholder="Digite o codigo da turma">
                    </div>
               
                    <div class="input_box">
                        <label for="qntd">Capacidade:</label>
                        <br>
                        <input type="tel" id="qntd"  onclick=" loginPopup()" name="qntd">
                    </div>

                    <div class="input_select">
                        <label for="curso">Curso:</label>
                        <br>
                        <select id="curso"  onclick=" loginPopup()" name="curso">
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
                        <select id="docente"  onclick=" loginPopup()" name="docente">
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
                        <select id="subarea"  onclick=" loginPopup()" name="subarea">
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
                        <select id="sala"  onclick=" loginPopup()"  onclick=" loginPopup()" name="sala">
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
                        <input type="time" id="horario"  onclick=" loginPopup()" name="horario">
                    </div>

                    <div class="input_data">
                        <label for="horario">Escolha um horário de fim:</label>
                        <br>
                        <input type="time" id="horario"  onclick=" loginPopup()" name="horario">
                    </div>


                    <div class="input_data">
                        <label for="inicio">Data de início:</label>
                        <br>
                        <input type="date" id="inicio"  onclick=" loginPopup()" name="inicio">
                    </div>


                    <div class="input_data">
                        <label for="fim">Data de fim:</label>
                        <br>
                        <input type="date" id="fim"  onclick=" loginPopup()" name="fim">
                    </div>

                 
                    <div class="input_botao">
                        <button type="submit" id="submitBtn">Reservar</button>
                    </div>


                </div>



                <div class="input_card">
                    <div class="card"></div>
                </div>


            </form>
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