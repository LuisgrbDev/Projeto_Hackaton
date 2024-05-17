<?php 
require_once "config/Database.php";
require_once "BaseDAO.php";
require_once "entity/subarea.php";


class subareaDAO implements BaseDAO{

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
            $sql = "SELECT * FROM subarea";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            $areas= $stmt->fetchAll(PDO::FETCH_ASSOC);

            return array_map(function ($subarea) {
                return new Subarea(
                    $subarea['id'],
                    $subarea['nomeSubarea'],
                    $subarea['corArea'],
                    $subarea['idArea']
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