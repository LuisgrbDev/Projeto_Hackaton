<?php 
require_once "config/Database.php";
require_once "BaseDAO.php";
require_once "entity/turma.php";


class TurmaDAO implements BaseDAO 
{

private $db;

    public function __construct()
    {
       $this->db = Database::getInstance();
    }
    public function getById($id) {

        $stmt = $this->db->prepare("SELECT * FROM turma WHERE Id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        try {
            $stmt->execute();
            $turma = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($turma) {
                return $turma;
            } else {
                return null; // Handle case where no turma found for the ID
            }
        } catch (PDOException $e) {
            // Handle database errors here
            echo "Error: " . $e->getMessage();
            return null;
        }
        
    }
     public function getAll(){

     
    try {
            $sql = "SELECT * FROM turma";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            $turmas= $stmt->fetchAll(PDO::FETCH_ASSOC);

            return array_map(function ($turma) {
                return new turma(
                    $turma['id'],
                    $turma['idCurso'],
                    $turma['idDocente'],
                    $turma['codigoTurma']
                );
            }, $turmas);
        } catch (PDOException $e) {
            return [];
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




