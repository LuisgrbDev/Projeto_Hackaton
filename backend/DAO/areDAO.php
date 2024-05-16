<?php 
require_once "config/Database.php";
require_once "BaseDAO.php";
require_once "entity/area.php"


class AreaDAO implements BaseDAO{

private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    try {
            $sql = "SELECT * FROM are";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            $areas= $stmt->fetchAll(PDO::FETCH_ASSOC);

            return array_map(function ($reserva) {
                return new area(
                    $reserva['id'],
                    $reserva['nomeArea']
                );
            }, $area);
        } catch (PDOException $e) {
            return false;
        }
    }