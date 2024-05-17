<?php 
require_once "config/Database.php";
require_once "BaseDAO.php";
require_once "entity/docente.php";


class DocenteDAO implements BaseDAO
{

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
            $sql = "SELECT * FROM docente";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            $docentes= $stmt->fetchAll(PDO::FETCH_ASSOC);

            return array_map(function ($docente) {
                return new docente(
                    $docente['id'],
                    $docente['nomeDocente']
                );
            }, $docentes);
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