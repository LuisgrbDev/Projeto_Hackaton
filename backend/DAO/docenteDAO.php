<?php 
require_once "config/Database.php";
require_once "BaseDAO.php";
require_once "entity/docente.php"


class DocenteDAO implements BaseDAO{

private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    try {
            $sql = "SELECT * FROM docente";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            $docentes= $stmt->fetchAll(PDO::FETCH_ASSOC);

            return array_map(function ($reserva) {
                return new docente(
                    $reserva['id'],
                    $reserva['nomeDocente']
                );
            }, $docentes);
        } catch (PDOException $e) {
            return false;
        }
    }