<?php
class Transaksi {
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
    }

    public function getTotalPendapatan() {
        $query = "SELECT SUM(total_harga) as total FROM transaksi";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['total'] ? $row['total'] : 0;
    }

    public function getTotalStatus($status) {
        $query = "SELECT COUNT(*) as total FROM transaksi WHERE status_cucian = :status";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':status', $status);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['total'];
    }
    
    public function getRecentTransactions($limit = 10) {
        $query = "SELECT t.*, p.nama_pelanggan FROM transaksi t JOIN pelanggan p ON t.id_pelanggan = p.id_pelanggan ORDER BY t.tanggal_transaksi DESC LIMIT :limit";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
