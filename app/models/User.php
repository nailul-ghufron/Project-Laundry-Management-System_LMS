<?php
class User {
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
    }

    public function findUserByUsername($username) {
        $query = "SELECT * FROM users WHERE username = :username LIMIT 1";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
