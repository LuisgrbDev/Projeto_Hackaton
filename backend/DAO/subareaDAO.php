<?php 
require_once "config/Database.php";
require_once "BaseDAO.php";
require_once "entity/subarea.php"


class subareaDAO implements BaseDAO{

private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    try {
            $sql = "SELECT * FROM subarea";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            $areas= $stmt->fetchAll(PDO::FETCH_ASSOC);

            return array_map(function ($reserva) {
                return new Sala(
                    $reserva['id'],
                    $reserva['nomeSubarea'],
                    $reserva['corArea'],
                    $reserva['idArea']
                );
            }, $areas);
        } catch (PDOException $e) {
            return false;
        }
    }