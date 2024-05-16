<?php 
require_once "config/Database.php";
require_once "BaseDAO.php";
require_once "entity/sala.php"


class SalaDAO implements BaseDAO{

private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    try {
            $sql = "SELECT * FROM sala";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            $salas= $stmt->fetchAll(PDO::FETCH_ASSOC);

            return array_map(function ($reserva) {
                return new Sala(
                    $reserva['id'],
                    $reserva['nomeSala'],
                    $reserva['andar'],
                    $reserva['tipo']
                );
            }, $salas);
        } catch (PDOException $e) {
            return false;
        }
    }