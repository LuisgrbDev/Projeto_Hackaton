<?php
require_once 'DAO/turmaDAO.php';
require_once "DAO/ReservaDAO.php";

$turmaDao = New TurmaDAO();
$turmas = $turmaDAO->getAll();
$reservaDao = new ReservaDAO();


if($_SERVER['REQUEST_METHOD']=== 'post'){
$id;
$idSala;
$idTurma;
$dataInicio;
$dataFim;
$horaInicio;
$horaFim;

$reservado = $reservaDao->Create($id,$idSala,
$idTurma,
$dataInicio,
$dataFim,
$horaInicio,
$horaFim,);
if($reservado){
echo "Reservado com Sucesso"
}else { 
echo "erro ao fazer reserva"
}

}


