<?php
class TransactionController extends Controller {
    public function index() {
        if (!isset($_SESSION['user_id'])) {
            $this->redirect('auth');
        }

        $transaksiModel = $this->model('Transaksi');
        $data = [
            'title' => 'Pristine LMS - Status Cucian',
            'transactions' => $transaksiModel->getRecentTransactions(100)
        ];
        
        $this->view('transaction/index', $data);
    }

    public function create() {
        if (!isset($_SESSION['user_id'])) {
            $this->redirect('auth');
        }

        $layananModel = $this->model('Layanan');
        $pelangganModel = $this->model('Pelanggan');

        $data = [
            'title' => 'Pristine LMS - Buat Transaksi',
            'layanan' => $layananModel->getAllLayanan(),
            'pelanggan' => $pelangganModel->getAllPelanggan()
        ];

        $this->view('transaction/create', $data);
    }

    public function store() {
        if (!isset($_SESSION['user_id']) || $_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->redirect('auth');
        }

        $id_pelanggan = $_POST['id_pelanggan'] ?? null;
        $items = $_POST['items'] ?? [];
        $id_user = $_SESSION['user_id'];

        if (!$id_pelanggan || empty($items)) {
            die("Error: Pelanggan atau item cucian tidak boleh kosong.");
        }

        $db = (new Database())->getConnection();
        
        try {
            $db->beginTransaction();

            // 1. Insert Header Transaksi
            $query = "INSERT INTO transaksi (id_user, id_pelanggan, tanggal_transaksi, total_harga, status_cucian) 
                      VALUES (:id_user, :id_pelanggan, NOW(), 0, 'Antre')";
            $stmt = $db->prepare($query);
            $stmt->execute([
                ':id_user' => $id_user, 
                ':id_pelanggan' => $id_pelanggan
            ]);
            
            $id_transaksi = $db->lastInsertId();

            if (!$id_transaksi) {
                throw new Exception("Gagal mendapatkan ID Transaksi.");
            }

            // 2. Persiapkan data layanan untuk kalkulasi harga
            $layananModel = $this->model('Layanan');
            $allLayanan = $layananModel->getAllLayanan();
            $hargaMap = [];
            foreach ($allLayanan as $l) {
                $hargaMap[$l['id_layanan']] = $l['harga_per_kg'];
            }

            $total_harga = 0;

            // 3. Insert Detail Transaksi
            $queryItem = "INSERT INTO detail_transaksi (id_transaksi, id_layanan, berat, subtotal) 
                          VALUES (:id_transaksi, :id_layanan, :berat, :subtotal)";
            $stmtItem = $db->prepare($queryItem);

            foreach ($items as $item) {
                $id_layanan = $item['id_layanan'];
                $berat = (float)$item['berat'];
                
                if (!isset($hargaMap[$id_layanan])) continue;

                $harga_per_kg = (float)$hargaMap[$id_layanan];
                $subtotal = $berat * $harga_per_kg;
                $total_harga += $subtotal;

                $stmtItem->execute([
                    ':id_transaksi' => $id_transaksi,
                    ':id_layanan' => $id_layanan,
                    ':berat' => $berat,
                    ':subtotal' => $subtotal
                ]);
            }

            // 4. Update Total Harga di Header
            $queryUpdate = "UPDATE transaksi SET total_harga = :total WHERE id_transaksi = :id_transaksi";
            $db->prepare($queryUpdate)->execute([
                ':total' => $total_harga, 
                ':id_transaksi' => $id_transaksi
            ]);

            $db->commit();
            $this->redirect('transaction');
        } catch(PDOException $e) {
            if ($db) $db->rollBack();
            die("Database Error: " . $e->getMessage());
        } catch(Exception $e) {
            if ($db) $db->rollBack();
            die("General Error: " . $e->getMessage());
        }
    }

    public function updateStatus() {
        if (!isset($_SESSION['user_id']) || $_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->redirect('auth');
        }
        $id_transaksi = $_POST['id_transaksi'];
        $status = $_POST['status'];

        $db = (new Database())->getConnection();
        $query = "UPDATE transaksi SET status_cucian = :status WHERE id_transaksi = :id";
        $db->prepare($query)->execute([':status' => $status, ':id' => $id_transaksi]);
        $this->redirect('transaction');
    }
}
