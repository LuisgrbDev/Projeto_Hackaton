<?php

require_once 'DAO/turmaDAO.php';
require_once 'DAO/salaDAO.php';
require_once "DAO/ReservaDAO.php";
require_once 'entity/reserva.php';
$reservaDAO = new ReservaDAO();
$reservas = $reservaDAO->getAll();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $reservaId = $_POST['reserva_id'];

    $deletado = $reservaDAO->delete($reservaId);
    if ($deletado) {
        echo "Reserva deletada com sucesso!";
    } else {
        echo "Erro ao deletar a reserva.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Reserva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Deletar Reserva</h1>
        <form method="POST" action="deletar_reserva.php">
            <div class="mb-3">
            <label for="sala_id" class="form-label">Reservas</label>
                <select class="form-select" id="reserva_id" name="reserva_id" >
                <?php foreach ($reservas as $reserva): ?>
                        <option value="<?php echo $reserva->getId(); ?>"><?php echo $reserva->getHorainicio();?><?php echo $reserva->getHoraFim();?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-danger">Deletar Reserva</button>
        </form>
    </div>
</body>
</html>
