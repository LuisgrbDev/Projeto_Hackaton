<?php
require_once "config/Database.php";
require_once "BaseDAO.php";
require_once "entity/Reserva.php";

class ReservaDAO implements BaseDAO
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT * FROM reserva WHERE Id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            $reserva = $stmt->fetch(PDO::FETCH_ASSOC);

            return $reserva ?
                new Reserva(
                    $reserva['id'],
                    $reserva['idSala'],
                    $reserva['idTurma'],
                    $reserva['dataInicio'],
                    $reserva['dataFim'],
                    $reserva['horaInicio'],
                    $reserva['horaFim']
                )
                : null;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function getAll()
    {
        try {
            $sql = "SELECT * FROM reserva";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            $reservas = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return array_map(function ($reserva) {
                return new Reserva(
                    $reserva['id'],
                    $reserva['idSala'],
                    $reserva['idTurma'],
                    $reserva['dataInicio'],
                    $reserva['dataFim'],
                    $reserva['horaInicio'],
                    $reserva['horaFim']
                );
            }, $reservas);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function create($reserva)
    {
        return $reserva;
        try {
            $sql = "INSERT INTO RESERVA (idSala, idTurma, dataInicio, dataFim, horaInicio,horaFim) VALUES
                (:idSala, :idTurma, :dataInicio, :dataFim, :horaInicio,:horaFim)";

            $stmt = $this->db->prepare($sql);

            // Bind parameters by reference
            // $id = $reserva->getId();
            $idSala = $reserva->idSala();
            $idTurma = $reserva->idTurma();
            $dataInicio = $reserva->dataInicio();
            $dataFim = $reserva->dataFim();
            $horaInicio = $reserva->horaInicio();
            $horaFim= $reserva->horaFim();

        
            $stmt->bindParam(':idSala', $idSala);
            $stmt->bindParam(':idTurma', $idTurma);
            $stmt->bindParam(':dataInicio', $dataInicio);
            $stmt->bindParam(':dataFim', $dataFim);
            $stmt->bindParam(':horaInicio', $horaInicio);
            $stmt->bindParam(':horaFim', $horaFim);

            $stmt->execute();
            
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function update($reserva)
    {
        try {
            $existingReserva = $this->getById($reserva->getId());
            if (!$existingReserva) {
                return false; // Retorna falso se o usuário não existir
            }

            $sql = "UPDATE reserva SET idSala = :idSala, idTurma = :idTurma,
                dataInicio = :dataInicio, dataFim = :dataFim, horaInicio = :horaInicio, horaFim = :horaFim
                WHERE id = :id";


            $stmt = $this->db->prepare($sql);

            // Bind parameters by reference
            
            $idSala = $reserva->idSala();
            $idTurma = $reserva->idTurma();
            $dataInicio = $reserva->dataInicio();
            $dataFim = $reserva->dataFim();
            $horaInicio = $reserva->horaInicio();
            $horaInicio = $reserva->horaFim();

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':idSala', $idSala);
            $stmt->bindParam(':idTurma', $idTurma);
            $stmt->bindParam(':dataInicio', $dataInicio);
            $stmt->bindParam(':dataFim', $dataFim);
            $stmt->bindParam(':horaInicio', $horaInicio);
            $stmt->bindParam(':horaFim', $horaFim);

            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function delete($id)
    {
        try {
            $sql = "DELETE FROM reserva WHERE Id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        } catch (PDOException $e) {
            return false;
        }
    }
}
