<?php
class Layanan {
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
    }

    public function getAllLayanan() {
        $query = "SELECT * FROM layanan";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
