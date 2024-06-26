<?php 
require_once "config/Database.php";
require_once "BaseDAO.php";
require_once "entity/curso.php";


class CursoDAO implements BaseDAO{

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
            $sql = "SELECT * FROM curso";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            $cursos= $stmt->fetchAll(PDO::FETCH_ASSOC);

            return array_map(function ($curso) {
                return new curso(
                    $curso['id'],
                    $curso['nome_curso'],
                    $curso['siglaCurso']
                );
            }, $cursos);
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