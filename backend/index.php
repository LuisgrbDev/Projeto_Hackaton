<?php 
require_once 'DAO/turmaDAO.php';
require_once 'DAO/salaDAO.php';
require_once "DAO/ReservaDAO.php";
require_once 'entity/reserva.php';

$turmaDAO = new TurmaDAO();
$salaDAO = new SalaDAO();
$salas= $salaDAO->getAll();
$turmas = $turmaDAO->getAll();
$reservaDAO = new ReservaDAO();

$type = filter_input(INPUT_POST, "type");

if ($type === 'reservar') {
    $salaId = $_POST['idSala'];
    $turmaId = $_POST['idTurma'];
    $dataInicio = $_POST['dataInicio'];
    $dataFim = $_POST['dataFim'];
    $horaInicio = $_POST['horaInicio'];
    $horaFim = $_POST['horaFim'];

    $reserva = NEW reserva(null,$salaId,$turmaId,$dataInicio, $dataFim,$horaInicio,$horaFim);
    $inserido = $reservaDAO->create($reserva);
    if ($inserido) {
        echo "Reserva inserida com sucesso!" . $inserido;
    } else {
        echo "Erro ao inserir a reserva." . $inserido;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Reserva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Inserir Reserva</h1>
        <form method="POST" action="index.php">
            <input type="hidden" name="type" value="reservar">
            <div class="mb-3">
                <label for="turma_id" class="form-label">Turmas</label>
                <select class="form-select" id="idTurma" name="idTurma" >
                    <?php foreach ($turmas as $turma): ?>
                        <option value="<?php echo intval($turma->getId()); ?>"><?php echo $turma->codigoTurma();?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="sala_id" class="form-label">Sala</label>
                <select class="form-select" id="idSala" name="idSala" >
                <?php foreach ($salas as $sala): ?>
            
                        <option value="<?php echo intval($sala->getId()); ?>"><?php echo $sala->getAndar();?><?php echo $sala->getNomeSala();?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="data_inicio" class="form-label">Data Início</label>
                <input  type="date"  class="form-control" id="dataInicio" name="dataInicio" required >
            </div>
            <div class="mb-3">
                <label for="data_fim" class="form-label">Data Fim</label>
                <input type="date" class="form-control" id="dataFim" name="dataFim" required>
            </div>
            <div class="mb-3">
                <label for="hora_inicio" class="form-label">Hora Início</label>
                <input type="time" class="form-control" id="horaInicio" name="horaInicio" required>
            </div>
            <div class="mb-3">
                <label for="hora_fim" class="form-label">Hora Fim</label>
                <input type="time" class="form-control" id="horaFim" name="horaFim" required>
            </div>
            <button type="submit" class="btn btn-primary">Inserir Reserva</button>
        </form>
    </div>
</body>
</html>
