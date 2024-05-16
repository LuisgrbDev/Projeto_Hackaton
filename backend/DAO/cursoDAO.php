<?php 
require_once "config/Database.php";
require_once "BaseDAO.php";
require_once "entity/curso.php"


class CursoDAO implements BaseDAO{

private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    try {
            $sql = "SELECT * FROM curso";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            $cursos= $stmt->fetchAll(PDO::FETCH_ASSOC);

            return array_map(function ($reserva) {
                return new curso(
                    $reserva['id'],
                    $reserva['nome_curso'],
                    $reserva['siglaCurso']
                );
            }, $cursos);
        } catch (PDOException $e) {
            return false;
        }
    }