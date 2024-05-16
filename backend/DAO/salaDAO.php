<?php 
require_once "config/Database.php";
require_once "BaseDAO.php";
require_once "entity/sala.php"


class SalaDAO {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM sala");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}