<?php
class Pelanggan {
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
    }

    public function getAllPelanggan() {
        $query = "SELECT * FROM pelanggan ORDER BY nama_pelanggan ASC";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addPelanggan($nama, $nomor_telepon, $alamat) {
        $query = "INSERT INTO pelanggan (nama_pelanggan, nomor_telepon, alamat) VALUES (:nama, :no_telp, :alamat)";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([
            ':nama' => $nama,
            ':no_telp' => $nomor_telepon,
            ':alamat' => $alamat
        ]);
    }
}
