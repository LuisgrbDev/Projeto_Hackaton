<?php 
require_once "config/Database.php";
require_once "BaseDAO.php";
require_once "entity/sala.php";


class SalaDAO implements BaseDAO{

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
            $sql = "SELECT * FROM sala";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            $salas= $stmt->fetchAll(PDO::FETCH_ASSOC);

            return array_map(function ($sala) {
                return new sala(
                    $sala['id'],
                    $sala['nomeSala'],
                    $sala['andar'],
                    $sala['capacidade'],
                    $sala['tipo']
                );
            }, $salas);
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