<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Reserva</title>
</head>
<body>
    <h2>Registrar Reserva</h2>
    <form method="post" action="index.php">
        <input type="hidden" name="type" value="register">
        <label for="new_TurmaId">ID da Turma:</label>
        <input type="text" name="new_TurmaId" id="new_TurmaId" required><br><br>

        <label for="new_SalaId">ID da Sala:</label>
        <input type="text" name="new_SalaId" id="new_SalaId" required><br><br>

        <label for="new_DataInicio">Data de Início:</label>
        <input type="date" name="new_DataInicio" id="new_DataInicio" required><br><br>

        <label for="new_DataFim">Data de Fim:</label>
        <input type="date" name="new_DataFim" id="new_DataFim" required><br><br>

        <label for="new_HorarioInicio">Horário de Início:</label>
        <input type="time" name="new_HorarioInicio" id="new_HorarioInicio" required><br><br>

        <label for="new_HorarioFim">Horário de Fim:</label>
        <input type="time" name="new_HorarioFim" id="new_HorarioFim" required><br><br>

        <label for="new_NumeroSala">Número da Sala:</label>
        <input type="text" name="new_NumeroSala" id="new_NumeroSala" required><br><br>

        <input type="submit" value="Registrar Reserva">
    </form>
</body>
</html>

<?php
require_once 'entity/Reserva.php';
require_once 'DAO/ReservaDAO.php';

$type = filter_input(INPUT_POST, "type");

if ($type === "register") {
    // Recebimento dos dados vindos por input do HTML
    $new_TurmaId = filter_input(INPUT_POST, "new_TurmaId");
    $new_SalaId = filter_input(INPUT_POST, "new_SalaId");
    $new_DataInicio = filter_input(INPUT_POST, "new_DataInicio");
    $new_DataFim = filter_input(INPUT_POST, "new_DataFim");
    $new_HorarioInicio = filter_input(INPUT_POST, "new_HorarioInicio");
    $new_HorarioFim = filter_input(INPUT_POST, "new_HorarioFim");
    $new_NumeroSala = filter_input(INPUT_POST, "new_NumeroSala");

    // Criacao da reserva no banco de dados utilizando o ReservaDAO
    $reserva = new Reserva(null, $new_SalaId, $new_TurmaId, $new_DataInicio, $new_DataFim, $new_HorarioInicio, $new_HorarioFim);
    $reservaDAO = new ReservaDAO();
    $success = $reservaDAO->create($reserva);

    // Verificação se o cadastro foi bem-sucedido
    if ($success) {
        echo "Reserva cadastrada com sucesso!";
    } else {
        echo "Erro ao cadastrar reserva. Por favor, tente novamente.";
    }
}
?>
