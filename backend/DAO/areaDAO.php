<?php 
require_once "config/Database.php";
require_once "BaseDAO.php";
require_once "entity/area.php";


class AreaDAO implements BaseDAO{

    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getById($id)
    {
        
    }


    public function getAll()
    {
        
    try {
            $sql = "SELECT * FROM area";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            $areas= $stmt->fetchAll(PDO::FETCH_ASSOC);

            return array_map(function ($area) {
                return new area(
                    $area['id'],
                    $area['nomeArea']
                );
            }, $areas);
        } catch (PDOException $e) {
            return false;
        }
    }
    public function create($reserva)
    {
       
    }

    public function update($reserva)
    {
       
    }

    public function delete($id)
    {
       
    }

    }